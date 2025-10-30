<?php
// wp-content/themes/hartfield-financial/inc/menu-image/menu-img.php
// Make sure this file is saved as UTF-8 without BOM. Do not close the PHP tag at the end.

// 1) Admin: add an image picker field to each menu item
add_action('wp_nav_menu_item_custom_fields', function($item_id, $item, $depth, $args) {
 // Limit to a specific menu location if you want:
 // if (($args->theme_location ?? '') !== 'subnav') return;

 $image_id = (int) get_post_meta($item_id, '_menu_item_image_id', true);
 $thumb    = $image_id ? wp_get_attachment_image_src($image_id, 'thumbnail') : null;
 $thumbUrl = $thumb ? esc_url($thumb[0]) : '';
 ?>
 <div class="field-custom description-wide" style="margin-top:8px;">
  <span class="description">Subnav Image (147×157 recommended)</span>
  <div style="display:flex; gap:10px; align-items:center; margin-top:6px;">
   <img src="<?php echo $thumbUrl; ?>" data-preview
        style="width:60px; height:60px; object-fit:cover; background:#eee; border:1px solid #ccc;<?php echo $thumbUrl ? '' : ' display:none;'; ?>" />
   <input type="hidden" name="menu_item_image_id[<?php echo esc_attr($item_id); ?>]" value="<?php echo esc_attr($image_id); ?>" />
   <button type="button" class="button select-menu-image">Select image</button>
   <button type="button" class="button remove-menu-image" <?php disabled(!$image_id); ?>>Remove</button>
  </div>
  <p class="description" style="margin:6px 0 0;">Upload larger than 147×157 for best quality; it will be cropped visually.</p>
 </div>
 <?php
}, 10, 4);

// 2) Save selected image ID when the menu is saved
add_action('wp_update_nav_menu_item', function($menu_id, $menu_item_db_id, $args) {
 if (isset($_POST['menu_item_image_id'][$menu_item_db_id])) {
  $val = (int) $_POST['menu_item_image_id'][$menu_item_db_id];
  if ($val) {
   update_post_meta($menu_item_db_id, '_menu_item_image_id', $val);
  } else {
   delete_post_meta($menu_item_db_id, '_menu_item_image_id');
  }
 }
}, 10, 3);

// 3) Admin assets: load media modal and attach a tiny JS (nowdoc string prevents PHP interpolation)
add_action('admin_enqueue_scripts', function($hook){
 if ($hook !== 'nav-menus.php') return;

 wp_enqueue_media();

 // Register a dummy handle to print our inline script in the footer
 $handle = 'hf-subnav-menu-image-admin';
 wp_register_script($handle, '', [], null, true);
 wp_enqueue_script($handle);

 $js = <<<'JS'
jQuery(function($){
  var frame;
  
  $(document).on('click', '.select-menu-image', function(e){
    e.preventDefault();
    var $wrap = $(this).closest('.field-custom');
    var $input = $wrap.find("input[name^='menu_item_image_id']");
    var $preview = $wrap.find('[data-preview]');

    // Reuse the same frame instance per click for simplicity
    frame = wp.media({ title: 'Select Subnav Image', button: {text: 'Use this image'}, multiple:false });

    frame.on('select', function(){
      var attachment = frame.state().get('selection').first().toJSON();
      $input.val(attachment.id);
      var url = (attachment.sizes && attachment.sizes.thumbnail) ? attachment.sizes.thumbnail.url : attachment.url;
      $preview.attr('src', url).show();
      $wrap.find('.remove-menu-image').prop('disabled', false);
    });

    frame.open();
  });

  $(document).on('click', '.remove-menu-image', function(e){
    e.preventDefault();
    var $wrap = $(this).closest('.field-custom');
    $wrap.find("input[name^='menu_item_image_id']").val('');
    $wrap.find('[data-preview]').hide().attr('src','');
    $(this).prop('disabled', true);
  });
});
JS;
 wp_add_inline_script($handle, $js);
});
// 4) Front-end: render Subnav items as image tiles with overlay label
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
 if (empty($args->theme_location) || $args->theme_location !== 'subnav') return $item_output;
 // Get the custom image set on the menu item; fallback to linked object featured image
 $img_url = '';
 $img_id  = (int) get_post_meta($item->ID, '_menu_item_image_id', true);
 if ($img_id) {
  $src = wp_get_attachment_image_src($img_id, 'large');
  if (!empty($src[0])) $img_url = esc_url($src[0]);
 } elseif (!empty($item->object_id)) {
  $thumb_id = get_post_thumbnail_id($item->object_id);
  if ($thumb_id) {
   $src = wp_get_attachment_image_src($thumb_id, 'large');
   if (!empty($src[0])) $img_url = esc_url($src[0]);
  }
 }
 $title = apply_filters('the_title', $item->title, $item->ID);
 // Build safe link attributes
 $atts = '';
 $attributes = [
  'href'   => !empty($item->url) ? $item->url : '',
  'title'  => !empty($item->attr_title) ? $item->attr_title : '',
  'target' => !empty($item->target) ? $item->target : '',
  'rel'    => !empty($item->xfn) ? $item->xfn : '',
  'class'  => 'subnav-card-link',
 ];
 foreach ($attributes as $k => $v) if (!empty($v)) $atts .= ' ' . $k . '="' . esc_attr($v) . '"';

 $bg = $img_url ? ' style="--bg:url(' . $img_url . ');"' : '';

 $html  = '<a' . $atts . '>';
 $html .= '  <span class="subnav-card"' . $bg . '>';
 $html .= '    <span class="subnav-card__image" aria-hidden="true"></span>';
 $html .= '    <span class="subnav-card__overlay"><span class="subnav-card__label">' . esc_html($title) . '</span></span>';
 $html .= '  </span>';
 $html .= '</a>';

 return $html;
}, 10, 4);
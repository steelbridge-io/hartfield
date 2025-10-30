<?php
// wp-content/themes/hartfield-financial/header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* Optional: keep your legacy meta tags if you want them site-wide */ ?>
    <meta name="Description" content="Investment, Retirement Planning and Risk Management strategies designed specifically for each portfolio to help preserve wealth using tax deferred and tax free concepts.">
    <meta name="Keywords" content="Mutual Funds, ETF, Annuities, Stocks, Bonds, Money Market, IRA, Roth, Health, Medicare, Insurance, Advisor, Financial Planning, goals, balanced, diversified, investments, risk management, Fiduciary, strategies, asset allocation, portfolio, REIT, private equity, private debt, Alternatives, Limited Partnership, 1035 exchange, 1031 exchange, Rollover, Hartfield">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
    <div id="header">
        <table align="left" bgcolor="#402709" border="0" cellpadding="0" cellspacing="0" width="795">
            <tr>
                <td>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/graphics/slices/logo.png'); ?>" alt="" width="328" height="101" />
                    </a>
                </td>
                <td>
                    <?php
                    // Primary header menu as a 2×2 grid (Home, Learn More, About Us, Contact)
                    wp_nav_menu([
                            'theme_location' => 'primary',
                            'container'      => 'nav',
                            'container_id'   => 'primary-nav',
                            'menu_class'     => 'menu primary-menu',
                            'fallback_cb'    => false,
                    ]);
                    ?>
                </td>
                <td>
                    <!-- Keep this cell to maintain legacy header width structure; can be empty -->
                </td>
                <!--<td>
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/graphics/slices/top_right.png'); ?>" width="25" height="101" alt="" />
                </td>-->
            </tr>
        </table>
    </div>

    <div id="sub_nav">
        <nav id="sub-nav" class="sub-nav" aria-label="Sub navigation">
            <?php
            wp_nav_menu([
                    'theme_location' => 'subnav',
                    'container'      => false,
                    'menu_class'     => 'menu sub-menu',
                    'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
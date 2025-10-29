<?php
// wp-content/themes/hartfield-financial/front-page.php
get_header();
?>

 <div id="main_home">
  <div id="services">
   <h4>Our services</h4>
   <div id="Accordion1" class="Accordion" tabindex="0">
    <div class="AccordionPanel">
     <div class="AccordionPanelTab">Tax Strategies</div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Maximizing Tax Deductions</li>
       <li>Income Shifting Between family members</li>
       <li>Municipals</li>
       <li>Roth Conversions</li>
       <li>Securities Line of Credit</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Retirement Planning          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Identifying needs in future dollars</li>
       <li>Setting up IRA's (Traditional & Roth) and other plans</li>
       <li>401k Rollovers and lump sum distributions</li>
       <li>SEP and SIMPLE plans</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Employee &amp; Executive Benefits          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Evaluating current retirement plan</li>
       <li>Qualified 401(k)s &amp; profit sharing plans</li>
       <li>Defined benefit</li>
       <li>ESOP &amp; ESPP</li>
       <li>Education Savings Plans (529 &amp; college savings)</li>
       <li>Section 125 (flexible spending accounts)</li>
       <li>Section 79 &amp; custom designed group life</li>
       <li>Deferred compensation, other non-qualified plans</li>
       <li>Executive bonus voluntary deferral plans</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Investments          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Stocks &amp; bonds</li>
       <li>Mutual funds, ETF's &amp; money markets</li>
       <li>Annuities (Fixed, FIA &amp; Variable)</li>
       <li>Separately managed account (SMA)</li>
       <li>REITS, partnerships</li>
       <li>Private Equity &amp; Private Debt</li>
       <li>Alternatives</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Estate Planning          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Proper management of family assets</li>
       <li>Corporate Trust management</li>
       <li>Wills, living trusts, foundations, and more</li>
       <li>Minimize probate expense &amp; taxes</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Insurance &amp; Risk Management          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Life insurance</li>
       <li>Disability insurance</li>
       <li>Long-term care</li>
       <li>Health insurance</li>
       <li>Dental &amp; Vision</li>
       <li>Medicare</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Real Estate          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Real Estate 1031 Exchange</li>
       <li>The 721 Exchange, or UPREIT</li>
       <li>Real Estate Referrals</li>
       <li>Agents</li>
       <li>Financing</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Professional Services Network &  Investment Banking          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Valuations</li>
       <li>Continuation planning</li>
       <li>Exit strategies</li>
       <li>Mergers &amp; acquisitions</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Business Line Insurance          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Property &amp; casualty</li>
       <li>Medical</li>
       <li>D &amp; O and E &amp; O</li>
      </ul>
     </div>
    </div>
    <div class="AccordionPanel">
     <div class="AccordionPanelTab"> Comprehensive Advisory Relationship          </div>
     <div class="AccordionPanelContent">
      <ul>
       <li>Financial Advice</li>
       <li>Investment Management</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
  <div id="content">
   <h4>Welcome</h4>
   <p class="text_welcome">Hartfield Financial &amp; Insurance Services, Inc., (HFIS Advisors), a Leader in Investment Management and Insurance Planning, is dedicated to helping clients achieve their long-term financial goals utilizing balanced and diversified investment and risk management planning strategies.
   </p>
   <p class="text_welcome">As a Fiduciary and Registered Investment Advisor, we specialize in asset allocation and custom portfolio design while offering unparalleled service and support.     </p>
  </div>
  <div id="leads_form">
      <h4>More Information</h4>
      <p class="text_form">If you would like Thomas to contact you regarding your specific situation, please fill out this form:</p>
      <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>

   <!--<form id="form1" name="form1" method="post" action="">

    <h4>More Information</h4>
    <p class="text_form">If you would like Thomas to contact you regarding your specific situation, please fill out this form:</p>
    <div class="label"><span id="sprytextfield1">
       Name 
       <input name="name" type="text" id="name" />
       <br />
       <span class="textfieldRequiredMsg">Please tell us your name.</span></span></div>
    <div class="label">Phone 
     <span id="sprytextfield2">
       <input name="area_code" type="text" id="area_code" size="3" />
       <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextfield4">
       <input name="phone1" type="text" id="phone1" size="3" />
       <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextfield5">
       <input name="phone2" type="text" id="phone2" size="5" />
       <span class="textfieldRequiredMsg">A value is required.</span></span></div>
    <div class="label"><span id="sprytextfield3">
     email 
     <input name="email" type="text" id="email" />
     <br />
     <span class="textfieldRequiredMsg"><br />
Please enter your email address
     .</span><span class="textfieldInvalidFormatMsg">Please enter a valid email address.</span></span></div>
    <div class="label">
     <input type="submit" name="button" id="button" value="Submit" />
    </div>
   </form>-->
  </div>
 </div>
<script type="text/javascript">
    //<!--
    var Accordion1 = new Spry.Widget.Accordion("Accordion1");
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
    var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
    //-->
</script>
<?php get_footer(); ?>

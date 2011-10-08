<div id="footer-top">
    <div id="f-left">
        <ul id="f-mainnav">
            <li>
                <?php echo anchor('home', 'Home', array('title'=>"Home Page", 'class'=>(isset($homelink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('pricing', 'Pricing', array('title'=>"Pricing Page", 'class'=>(isset($pricinglink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('work', 'Work', array('title'=>"Work Page", 'class'=>(isset($worklink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('abot', 'About', array('title'=>"About Page", 'class'=>(isset($aboutlink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('contactus', 'Contact', array('title'=>"Contact Page", 'class'=>(isset($contactlink) ? 'active' : ''))); ?>
            </li>
<!--            <li>-->
                <?php //echo anchor('', 'Eco-Policy'); ?>
<!--            </li>-->
        </ul>
        <ul>
            <li>
                <?php echo anchor('extra_effects', 'Extra Effects', array('class' => (isset($extraeffects_link) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('rush_deliveries', 'Rush Deliveries', array('class' => (isset($rushlink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('faq', 'FAQ', array('class' => (isset($faqLink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('payment_terms', 'Payment Terms', array('class' => (isset($paymentTermsLink) ? 'active' : ''))); ?>
            </li>
            <li>
                <?php echo anchor('#', 'Site map', array('class'=>'coming_soon')); ?>
            </li>
        </ul>
        <br class="clear" />
    </div>

    <div id="f-center">
        <p>Contact us</p>
        <address>Visual Posters, 20a Janette Street, Traralgon, Australia</address>
    </div>

    <a href="#" id="btn-top">Top</a>
    <br class="clear" />
    <div class="bg-bottom-box"></div>
</div>
<p id="copyright">Copyright &#169; 2010 Visual Posters. All rights reserved.</p>
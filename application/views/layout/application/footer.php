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
                <?php echo anchor('contact', 'Contact', array('title'=>"Contact Page", 'class'=>(isset($contactlink) ? 'active' : ''))); ?>
            </li>
<!--            <li>-->
                <?php //echo anchor('', 'Eco-Policy'); ?>
<!--            </li>-->
        </ul>
        <ul>
            <li>
                <?php echo anchor('#', 'Printing Information', array('class'=>'coming_soon')); ?>
            </li>
            <li>
                <?php echo anchor('#', 'Extra Effects', array('class'=>'coming_soon')); ?>
            </li>
            <li>
                <?php echo anchor('#', 'Rush Deliveries', array('class'=>'coming_soon')); ?>
            </li>
            <li>
                <?php echo anchor('#', 'FAQ', array('class'=>'coming_soon')); ?>
            </li>
            <li>
                <?php echo anchor('#', 'Payment Terms', array('class'=>'coming_soon')); ?>
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
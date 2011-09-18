<div id="header">
    <div id="logo">
    <h1>
    <a href="index.php"></a>
    </h1>
    </div>

    <div id="header-right">
    <div id="call-us">
    <p>Give us a call</p>
    <h2>
    <span>1300 662 502</span>
    </h2>
    </div>
    </div>

    <form action="#" method="post"> <!-- additional feature when search is available -->
        <ul id="menu">
            <li>
                <?php echo anchor('printing', 'Printing Information'); ?>
            </li>
            <li class="pipe">|</li>
            <li>
                <?php echo anchor('effects', 'Extra Effects'); ?>
            </li>
            <li class="pipe">|</li>
            <li>
                <?php echo anchor('deliveries', 'Rush Deliveries'); ?>
            </li>
            <li class="pipe">|</li>
            <li>
                <?php echo anchor('faq', 'FAQ'); ?>
                <a href="#">FAQ</a>
            </li>
            <li class="pipe">|</li>
            <li>
                <?php echo anchor('payment', 'Payment Terms'); ?>
            </li>
        </ul>
    </form>

    <ul id='header-nav'>
        <li>
            <?php echo anchor('home', 'HOME', array('title'=>"Home Page", 'class'=>(isset($homelink) ? 'active' : ''))); ?>
        </li>
        <li>
            <?php echo anchor('pricing', 'PRICING', array('title'=>"Pricing Page", 'class'=>(isset($pricinglink) ? 'active' : ''))); ?>
        </li>
        <li>
            <?php echo anchor('work', 'WORK', array('title'=>"Work Page", 'class'=>(isset($worklink) ? 'active' : ''))); ?>
        </li>
<!--        <li>
            <?php echo anchor('distribution', 'DISTRIBUTION', array('title'=>"Distribution Page", 'class'=>(isset($distributionlink) ? 'active' : ''))); ?>
        </li>-->
        <li>
            <?php echo anchor('about', 'ABOUT', array('title'=>"About Page", 'class'=>(isset($aboutlink) ? 'active' : ''))); ?>
        </li>
        <li>
            <?php echo anchor('contactus', 'CONTACT', array('title'=>"Contact Page", 'class'=>(isset($contactlink) ? 'active' : ''))); ?>
        </li>
    </ul>
</div>
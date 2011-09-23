<div id="banner-left">
    <h2>Pricing</h2>
    <ul id="b-menu">
        <li id="for-poster">
            <?php
                $methodName = $this->router->method;
                echo anchor('pricing/show?poster=a1', 'Price Grid', array('class'=> $methodName == 'show' ? 'active' : ''));
            ?>
        </li>
        <li id="for-flyer"><a href="#" class="coming_soon" >For Flyers</a></li>
        <li id="price-grid">
            <?php //echo anchor('pricing/price_grid', 'Price Grid', array('class' => $methodName == 'price_grid' ? 'active' : '')); ?>
            <?php echo anchor('#', 'Price Grid', array('class' => $methodName == 'price_grid' ? 'active' : 'coming_soon')); ?>
        </li>
    </ul>
</div>
<div id="banner-right">
    <?php echo image_asset('lib/banner-pricing.png', '', array('width'=>900, 'height'=>225, 'alt'=>'Banner Pricing Page')) ?>
</div>
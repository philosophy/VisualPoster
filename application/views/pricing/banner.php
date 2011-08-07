<div id="banner-left">
    <h2>Pricing</h2>
    <ul id="b-menu">
        <li id="for-poster">
            <?php
                $methodName = $this->router->method;
                echo anchor('pricing/show?poster=a1', 'Price Grid', array('class'=> $methodName== 'show' ? 'active' : ''));
            ?>
        </li>
        <li id="for-flyer"><a href="#" >For Flyers</a></li>
        <?php if( $methodName == 'show') { ?>
            <li id="price-grid"><a href="#" >Price Grid</a></li>
        <?php } ?>
    </ul>
</div>
<div id="banner-right">
    <?php echo image_asset('lib/banner-pricing.png', '', array('width'=>900, 'height'=>225, 'alt'=>'Banner Pricing Page')) ?>
</div>
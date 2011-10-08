<!DOCTYPE HTML>
<html>
    <head>
        <title><?php if(isset($title)){echo $title;} ?></title>
        <?php
            echo css_asset('base.css');
            echo css_asset('banner.css');
            echo css_asset('content.css');
            echo css_asset('form.css');
            echo css_asset('banner/home_banner.css');
            echo css_asset('content/home_content.css');
            echo css_asset('home/index.css');
            echo css_asset('pricing/index.css');
            echo css_asset('pricing/price_grid.css');
            echo css_asset('contact_us/index.css');
            echo css_asset('about/index.css');
            echo css_asset('admin/index.css');
            echo css_asset('rush_deliveries/index.css');
            echo css_asset('extra_effects/index.css');
            echo css_asset('payment_terms/index.css');
            echo css_asset('faq/index.css');
            echo css_asset('poster_sizes/index.css');
            echo css_asset('table.css');
            echo css_asset('lib/flash.css');
            echo js_asset('vendor/jquery-1.6.2.js');
            echo js_asset('vendor/jquery.qtip.js');
            echo js_asset('vendor/jquery.cookie.js');
            echo css_asset('vendor/jquery.qtip.css');
            echo css_asset('lib/tooltip.css');
            echo css_asset('lib/scrollable.css');
            echo css_asset('posters/index.css');
            echo css_asset('works/index.css');
            echo css_asset('lib/coming_soon.css');
            echo css_asset('vendor/slidedeck.skin.css');
            echo js_asset('app.js');
            echo js_asset('vendor/slidedeck.jquery.lite.js');
            echo js_asset('vendor/jquery.tools.min.js');
            echo js_asset('vendor/jquery.fancybox-1.3.4.js');
            echo js_asset('vendor/jquery.easing-1.3.pack.js');
            echo js_asset('vendor/jquery.mousewheel-3.0.4.pack.js');
            echo css_asset('vendor/jquery.fancybox-1.3.4.css');
        ?>
    </head>
    <body>
        <?php
            $classname = $this->router->class . ' ' . $this->router->method ;
        ?>
        <div id="wrapper" class="<?php echo $classname ?>">
            <div id="header-wrapper">
                <?php
                    if(isset($header)) {
                        $this->load->view($header);
                    }   else {
                        $this->load->view('layout/application/header');
                    }
                ?>
            </div>
            <div id="banner">
                <?php
                    if (isset($banner)) {
                        $this->load->view($banner);
                    }
                ?>
            </div>

            <div class="clearfix"></div>

            <div id="content-wrapper">
                <?php
                    if(isset($content)) {
                        $this->load->view($content);
                    }
                ?>
            </div>

            <div class="clearfix"></div>

            <div id="footer">
                <?php
                    $this->load->view('layout/application/footer');
                ?>
            </div>
        </div>

        <?php $this->load->view('common/coming_soon'); ?>

        <?php $this->load->view('layout/page_specific_javascript'); ?>

        <?php
            echo js_asset('views/vp_pricing_ui.js');
            echo js_asset('lib/vp_ajax.js');
            echo js_asset('lib/vp_flash.js');
            echo js_asset('lib/vp_coming_soon.js');
            echo js_asset('views/pricing.js');
            echo js_asset('lib/vp_scrollable.js');
            echo js_asset('lib/vp_common.js');
        ?>
    </body>
</html>
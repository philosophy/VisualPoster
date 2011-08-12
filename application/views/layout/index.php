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
            echo css_asset('pricing/index.css');
            echo js_asset('vendor/jquery-1.6.2.js');
            echo js_asset('vendor/jquery.qtip.js');
            echo css_asset('vendor/jquery.qtip.css');
            echo css_asset('lib/tooltip.css');
            echo css_asset('posters/index.css');
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
        <?php echo js_asset('views/vp_pricing_ui.js'); ?>
    </body>
</html>
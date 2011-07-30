<!DOCTYPE HTML>
<html>
    <head>
        <title><?php if(isset($title)){echo $title;} ?></title>
        <?php
            echo css_asset('base.css');
            echo css_asset('banner.css');
            echo css_asset('banner/home_banner.css');
            echo css_asset('content/home_content.css');
            echo css_asset('pricing/index.css');
        ?>
    </head>
    <body>
        <?php
            $classname = basename($_SERVER['PHP_SELF']).PHP_EOL;
        ?>
        <div id="wrapper" class=<?php echo $classname ?>>
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

            <div id="content_wrapper">
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
    </body>
</html>
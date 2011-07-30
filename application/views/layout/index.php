<!DOCTYPE HTML>
<html>
    <head>
        <title><?php if(isset($title)){echo $title;} ?></title>
        <link rel="stylesheet" type ="text/css" href="http://localhost/visualposter/assets/css/base.css" />
        <link rel="stylesheet" type ="text/css" href="http://localhost/visualposter/assets/css/banner.css" />
        <link rel="stylesheet" type="text/css" href="http://localhost/visualposter/assets/css/banner/home_banner.css" />
        <link rel="stylesheet" type="text/css" href="http://localhost/visualposter/assets/css/content/home_content.css" />
    </head>
    <body>
        <div id="wrapper">
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

            <div class="clearfix"></div>"

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
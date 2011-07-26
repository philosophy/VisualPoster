<!DOCTYPE HTML>
<html>
    <head>
        <title>{title}</title>
        <link rel="stylesheet" type ="text/css" href="http://localhost/visualposter/assets/css/base.css" />
        <link rel="stylesheet" type="text/css" href="http://localhost/visualposter/assets/css/banner/home_banner.css" />
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
            <div id="content_wrapper">
                <?php
                    if(isset($content)) {
                        $this->load->view($content);
                    }
                ?>
            </div>
        </div>
    </body>
</html>
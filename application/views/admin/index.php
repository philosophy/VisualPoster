<a href="<?php echo base_url();?>users/sign_out">Logout</a>

<section id="datatables">
    <h1 class="title"> Tables List </h1>
    <div id="menu-wrapper">
        <?php
            $len = sizeof($tables);
            $class = 'model-list';

            for ($i=0; $len>$i; $i++) {
                if ($len-1 == $i) {
                    $class = $class . ' last';
                }

                $markup = '<div class="'.$class.'">'
                          .anchor('admin/table/'.$tables[$i]['id'], $tables[$i]['title'])
                          .'</div>';

                echo $markup;
            }
        ?>
    </div>

    <div id="model_details">
        <?php
            if (isset($action)) {
                $this->load->view('/admin/'.$current_table.'/'.$current_table.'_'.$action.'_form');
            } else if (isset($current_table)) {
                $this->load->view('/admin/'.$current_table.'/'.$current_table);
            }

        ?>
    </div>

</section>
<?php
    $this->load->view('contact_us/left_content');
    $this->load->view('contact_us/main_content');
    $this->load->view('contact_us/right_content');
?>


<?php if ($this->session->flashdata('message')) { ?>
    <div id="flash" class="over-overlay">
        <div class="content" data-content-key="flash">
            <p><?php echo $this->session->flashdata('message'); ?></p>
        </div>
        <a href="" class="close font-bold">x</a>
    </div>
<?php } ?>


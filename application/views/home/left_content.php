<div id="left-col">
    <div id="upload" class="box">
        <div class="bg-top-box"></div>
        <a href="#" class="coming_soon" id="btn-push">Push Button</a>
        <h3>Upload<br />Artwork</h3>
        <h5>when you push<br /> this button</h5>
        <p>Submiting artwork is as easy as pushing a button. Submit artwork by
        <span class="highlight">1:30pm - </span>form
        <span class="highlight">guaranteed dispatch</span>
        on 10/2.
        </p>
        <div class="bg-bottom-box"></div>
    </div>

    <?php $this->load->view('common/lifetime_posters'); ?>

    <div id="quote" class="box">
        <div class="bg-top-box"></div>
        <div id="icon-quote"></div>
        <h3>Get a Quote <br />Now!</h3>
        <p>You already know what to order and just want a <?php echo anchor('/pricing', 'quick pricing?'); ?></p>
        <a href="#" id="btn-quote" class="coming_soon">Get a Quote</a>
        <div class="bg-bottom-box"></div>
    </div>

    <?php $this->load->view('common/customers_pa'); ?>

</div>
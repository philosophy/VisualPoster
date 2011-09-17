<div id="main-col">
    <h2>Send us a message</h2>
    <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Curabitur mollis ornare nisi, non scelerisque nisi pellentesque nec.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed varius tincidunt tristique.</p>
    <?php echo form_open('contactus/send_comment', array('id' => 'contact-us-form', 'method' => 'post')); ?>
        <p>
            <label for="c-name">Yourname <span>*</span></label>
            <input type="text" id="c-name" placeholder="enter your name" name="name" value="<?php echo set_value('name'); ?>">
        </p>
        <p>
            <label for="c-email">E-mail <span>*</span></label>
            <input type="text" id="c-email" placeholder="enter your e-mail" name="email" value="<?php echo set_value('email'); ?>">
        </p>
        <p id="txt-mobile">
            <label for="c-mobile">Mobile</label>
            <input type="text" id="c-mobile" placeholder="enter your number" name="number" value="<?php echo set_value('number'); ?>">
        </p>
        <p id="your-message">
            <label for="c-message">Message <span>*</span></label>
            <textarea id="c-message" cols="40" rows="5" name="message" value="<?php echo set_value('message'); ?>"></textarea>
        </p>
        <p id="mandatory">Fields marked with <span>*</span> are mandatory</p>
        <p id="btn-submit">
            <input type="submit" value="Submit" name="send">
        </p>
    <?php echo form_close();?>
</div>
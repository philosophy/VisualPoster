<?php
    if ($this->session->flashdata('message')) {
        echo 'got here';
        echo '<div>'.$this->session->flashdata('message').'</div>';
    }
?>

<div id="main-col">
    <h2>Send us a message</h2>
    <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Curabitur mollis ornare nisi, non scelerisque nisi pellentesque nec.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed varius tincidunt tristique.</p>
    <form id="c-form" method="post" action="contactus/send_comment">
        <p>
            <label for="c-name">Yourname <span>*</span></label>
            <input type="text" id="c-name" value="enter your name" name="yourname">
            <br class="clear">
        </p>
        <p>
            <label for="c-email">E-mail <span>*</span></label>
            <input type="text" id="c-email" value="enter your e-mail" name="e-mail">
            <br class="clear">
        </p>
        <p id="txt-mobile">
            <label for="c-mobile">Mobile</label>
            <input type="text" id="c-mobile" value="enter your number" name="number">
            <br class="clear">
        </p>
        <p id="your-message">
            <label for="c-message">Message <span>*</span></label>
            <textarea id="c-message" cols="40" rows="5"></textarea>
            <br class="clear">
        </p>
        <p id="mandatory">Fields marked with <span>*</span> are mandatory</p>
        <p id="btn-submit">
            <input type="submit" value="Submit" name="send">
            <br class="clear">
        </p>
    </form>
</div>
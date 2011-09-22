<h1> Add Poster</h1>
<fieldset>
    <legend><span>*</span>Required Field</legend>
    <?php echo form_open('/admin/posters/add', array('id' => 'add_poster_form')); ?>
        <ul>
            <li>
                <?php echo form_label('Poster', 'name'); ?><span>*</span>
                <?php echo form_input('name', set_value('name'));  ?>
            </li>
            <li>
                <?php echo form_label('Minimum Order', 'min_order');  ?>
                <?php echo form_input('min_order', set_value('min_order'));  ?>
            </li>
            <li>
                <?php echo form_label('Price', 'price');  ?>
                <?php echo form_input('price', set_value('price'));  ?>
            </li>
            <li>
                <?php echo form_label('Size', 'size');  ?><span>*</span>
                <?php echo form_input('size', set_value('size'));  ?>
            </li>
            <li>
                <?php echo form_label('Deilvery Charge', 'delivery_charge'); ?><span>*</span>
                <?php echo form_input('delivery_charge', set_value('delivery_charge')); ?>
            </li>
            <li>
                <?php echo form_label('Type', 'type');?>
                <?php echo form_dropdown('type', $this->config->item('poster_type'), 0); ?>
            </li>
            <li>
                <?php //echo form_button(array('id' => 'add-poster-btn', 'type' => 'submit', 'content' => 'Add Poster')); ?>
                <?php echo form_submit('', 'Add Poster'); ?>
            </li>
        </ul>
    <?php echo form_close();?>
</fieldset>
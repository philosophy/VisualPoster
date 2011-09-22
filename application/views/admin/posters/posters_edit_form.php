<h1> Edit Poster</h1>
<fieldset>
    <legend><span>*</span>Required Field</legend>
    <?php echo form_open('/admin/posters/edit/'.$poster[0]->id, array('id' => 'add_poster_form')); ?>
        <ul>
            <li>
                <?php echo form_label('Poster', 'name'); ?><span>*</span>
                <?php echo form_input('name', set_value('name', $poster[0]->name));  ?>
            </li>
            <li>
                <?php echo form_label('Minimum Order', 'min_order');  ?>
                <?php echo form_input('min_order', set_value('min_order', $poster[0]->min_order));  ?>
            </li>
            <li>
                <?php echo form_label('Price', 'price');  ?>
                <?php echo form_input('price', set_value('price', $poster[0]->price));  ?>
            </li>
            <li>
                <?php echo form_label('Size', 'size');  ?><span>*</span>
                <?php echo form_input('size', set_value('size',$poster[0]->size));  ?>
            </li>
            <li>
                <?php echo form_label('Deilvery Charge', 'delivery_charge'); ?><span>*</span>
                <?php echo form_input('delivery_charge', set_value('delivery_charge', $poster[0]->delivery_charge)); ?>
            </li>
            <li>
                <?php echo form_label('Type', 'type');?>
                <?php echo form_dropdown('type', $this->config->item('poster_type'), set_value(0, $poster[0]->type)); ?>
            </li>
            <li>
                <?php echo form_label('Color', 'poster_color');?>
                <?php echo form_dropdown('poster_color', $this->config->item('poster_colors'), set_value(0, $poster[0]->poster_color)); ?>
            </li>
            <li>
                <?php //echo form_button(array('id' => 'add-poster-btn', 'type' => 'submit', 'content' => 'Add Poster')); ?>
                <?php echo form_submit('', 'Save Changes'); ?>
            </li>
        </ul>
    <?php echo form_close();?>
</fieldset>
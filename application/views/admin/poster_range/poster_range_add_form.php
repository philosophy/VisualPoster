<h1> Add Poster Price Range</h1>
<fieldset>
    <legend><span>*</span>Required Field</legend>
    <?php echo form_open('/admin/poster_range/add', array('id' => 'add_poster_range_form')); ?>
        <ul>
            <li>
                <?php echo form_label('Minimum Range', 'min_range'); ?><span>*</span>
                <?php echo form_input('min_range', set_value('min_range'));  ?>
            </li>
            <li>
                <?php echo form_label('Maximum Range', 'max_range');  ?>
                <?php echo form_input('max_range', set_value('max_range'));  ?>
            </li>
            <li>
                <?php echo form_label('Price', 'price');  ?>
                <?php echo form_input('price', set_value('price'));  ?>
            </li>
            <li>
                <?php echo form_label('Poster', 'poster_id');?>
                <?php echo form_dropdown('poster_id', array(1 => 'A1', 2 => 'A2', 3 => 'A3'), 3); ?>
            </li>
            <li>
                <?php //echo form_button(array('id' => 'add-poster-btn', 'type' => 'submit', 'content' => 'Add Poster')); ?>
                <?php echo form_submit('', 'Add Poster Price'); ?>
            </li>
        </ul>
    <?php echo form_close();?>
</fieldset>
<h1> Edit Poster Price Range</h1>
<fieldset>
    <legend><span>*</span>Required Field</legend>
    <?php echo form_open('/admin/poster_range/edit/'.$poster_range[0]->range_id, array('id' => 'add_poster_form')); ?>
        <ul>
            <li>
                <?php echo form_label('Poster', 'name'); ?><span>*</span>
                <?php echo form_input(array('name'=>'name', 'readonly'=>'readonly'), set_value('name', $poster_range[0]->name));  ?>
                <?php echo form_input(array('name'=>'id', 'type'=>'hidden'), set_value('id', $poster_range[0]->range_id)); ?>
            </li>
            <li>
                <?php echo form_label('Minimum Range', 'min_range');  ?>
                <?php echo form_input('min_range', set_value('min_range', $poster_range[0]->min_range));  ?>
            </li>
            <li>
                <?php echo form_label('Maximum Range', 'max_range');  ?>
                <?php echo form_input('max_range', set_value('max_range', $poster_range[0]->max_range));  ?>
            </li>
            <li>
                <?php echo form_label('Price', 'price');  ?><span>*</span>
                <?php echo form_input('price', set_value('price', $poster_range[0]->poster_price));  ?>
            </li>
            <li>
                <?php //echo form_button(array('id' => 'add-poster-btn', 'type' => 'submit', 'content' => 'Add Poster')); ?>
                <?php echo form_submit('', 'Save Changes'); ?>
            </li>
        </ul>
    <?php echo form_close();?>
</fieldset>
<h1>Poster List</h1>

<a href="<?php echo base_url().$this->uri->uri_string();?>/add/">Add Poster</a>

<table class="datatable">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Minimum Order</th>
<!--            <th>Price</th>-->
            <th>Size</th>
            <th>Delivery Charge</th>
            <th>Type</th>
            <th>Poster Color</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php if(isset($data) && is_array($data) && count($data)>0) { ?>
            <?php foreach($data as $poster) {?>
                <tr>
                    <td><?php print_r($poster->name) ?></td>
                    <td><?php print_r($poster->min_order) ?></td>
<!--                    <td><?php /* print_r($poster->price)*/ ?></td>-->
                    <td><?php print_r($poster->size) ?></td>
                    <td><?php print_r($poster->delivery_charge) ?></td>
                    <td><?php
                            $posterTypes = $this->config->item('poster_type');
                            echo $posterTypes[$poster->type];
                        ?>
                    </td>
                    <td><?php
                            $posterColors = $this->config->item('poster_colors');
                            echo $posterColors[$poster->poster_color];
                        ?>
                    </td>
                    <td><?php echo anchor(base_url().'admin/table/'.$table_id.'/edit/'.$poster->id, 'Edit'); ?></td>
                    <td><?php echo anchor(base_url().'admin/posters/delete/'.$poster->id, 'Delete'); ?></td>
                </tr>
            <?php } ?>
        <?php }else { ?>
            <tr>
                <td colspan="6"> got hereNo posters available.</td>
            </tr>
        <?php }?>
    </tbody>
</table>
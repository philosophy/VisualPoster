<h1>Poster Range List</h1>

<a href="<?php echo base_url().$this->uri->uri_string();?>/add/">Add Poster Range</a>

<table class="datatable">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Minimum Range</th>
            <th>Maximum Range</th>
            <th>Price</th>
        </tr>

        <?php if(isset($data) && is_array($data) && count($data)>0) { ?>
            <?php foreach($data as $poster_range) {?>
                <tr>
                    <td><?php print_r($poster_range->name) ?></td>
                    <td><?php print_r($poster_range->min_range) ?></td>
                    <td><?php print_r($poster_range->max_range) ?></td>
                    <td><?php print_r($poster_range->poster_price) ?></td>
                </tr>
            <?php } ?>
        <?php }else { ?>
            <tr>
                <td colspan="6"> got hereNo posters available.</td>
            </tr>
        <?php }?>
    </tbody>
</table>
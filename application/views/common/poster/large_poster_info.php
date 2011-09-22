<?php if(isset($posters) && is_array($posters) && count($posters)>0) {
    $posterColors = $this->config->item('poster_colors');
    ?>

    <?php foreach($posters as $poster) {?>
        <div class="poster-print redirect <?php echo $posterColors[$poster->poster_color]; ?>" id="bg-<?php echo strtolower($poster->name); ?>" data-url='pricing/show?poster=<?php echo strtolower($poster->name); ?>'>
            <h3>I want to print</h3>
            <h2><?php echo $poster->name; ?></h2>
            <h5><?php echo isset($poster->size) ? $poster->size : 'POSTER' ?></h5>
            <?php echo anchor('posters/show?poster='.strtolower($poster->name), 'View Specifications')/**/ ?>
        </div>
    <?php } ?>
<?php } ?>

<?php if(isset($posters) && is_array($posters) && count($posters)>0) {
    $posterColors = $this->config->item('poster_colors');
    ?>
    <?php
        foreach($otherPosters as $poster) {
            $posterId = 'poster'.$poster->id;
            $posterColor = $poster->poster_color;
            $name = $poster->name;
            $posterSize = $poster->size;


    ?>
            <div id="<?php echo $posterId; ?>" class="small-poster redirect <?php echo $posterColors[$posterColor]; ?>" data-url="/visualposter/index.php/pricing/show?poster=<?php echo strtolower($name); ?>">
                <h4>I want to print</h4>
                <h2><?php echo strtoupper($name); ?></h2>
                <h5><?php echo isset($posterSize) ? $posterSize : 'POSTER' ?></h5>
            </div>
        <?php } ?>
    <?php } ?>

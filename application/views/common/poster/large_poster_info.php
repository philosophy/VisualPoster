<?php if(isset($posters) && is_array($posters) && count($posters)>0) {
    $posterColors = $this->config->item('poster_colors');
    ?>

    <?php foreach($posters as $poster) {
        $class=(isset($noRedirect) && $noRedirect==true) ? ' ' : 'redirect ';
    ?>
        <div class="poster-print <?php echo $class; echo $posterColors[$poster->poster_color]; ?>" id="bg-<?php echo strtolower($poster->name); ?>" data-url='pricing/show?poster=<?php echo strtolower($poster->name); ?>'>
            <h3>I want to print</h3>
            <?php
                $name = $poster->name;

                if (strlen($name) < 4) {
                    echo "<h2>".$name."</h2";
                } else {
                    echo "<h2 class='long-poster-names'>".$name."</h2";
                }


            ?>

            <h5><?php echo isset($poster->size) ? $poster->size : 'POSTER' ?></h5>
            <?php echo anchor('posters/show?poster='.strtolower($poster->name), 'View Specifications')/**/ ?>
        </div>
    <?php } ?>
<?php } ?>

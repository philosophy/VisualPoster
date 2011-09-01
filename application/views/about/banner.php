<div id="banner">
    <div id="banner-left">
        <h2>Pricing</h2>
        <ul id="banner-menu">
            <li id="for-philosophy">
                <?php
                    echo anchor('about?category=philosophy', 'Our Philosophy', array('class'=> $category == 'philosophy' ? 'active' : ''));
                ?>
            </li>
            <li id="for-team">
                <?php echo anchor('about?category=team', 'Our Team', array('class'=> $category == 'team' ? 'active' : '')); ?>
            </li>
        </ul>
    </div>
    <div id="about-right">
    </div>
     <?php echo image_asset('lib/banner-about.png', '', array('width'=>900, 'height'=>225, 'alt'=>'Banner About')); ?>
</div>

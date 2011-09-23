<!--<div id="banner-left">
    <h2>
            We Print Posters
            <br />
            &amp; Flyers
    </h2>
    <p>
            We'll make it easy for you When it comes to poster printing, your probably just want to know
            <a href="#">how fast we can print</a>
            , what it
             and have all the other information in a tidy little list.
    </p>
    <a href="#" id="btn-prices">See Prices + Poster Sizes &#187;</a>
</div>
<div id="banner-right">
    <?php //echo image_asset('lib/banner-home.png', '', array('width'=>900, 'height'=>436, 'alt'=>'Banner Home Page')); ?>
</div>-->

<div id="slidedeck_frame" class="skin-stitch">
    <dl class="slidedeck">
        <dt>Slide 1</dt>
        <dd>
            <?php echo image_asset('lib/featured/featured1.png', ''); ?>
        </dd>
        <dt>Slide 2</dt>
        <dd>
            <?php echo image_asset('lib/featured/featured2.png', ''); ?>
        </dd>
        <dt>Slide 3</dt>
        <dd>
            <?php echo image_asset('lib/featured/featured3.png', ''); ?>
        </dd>
    </dl>
</div>
<script type="text/javascript">
    // The most basic implementation using the default options
    $(document).ready(function() {
        $('.slidedeck').slidedeck();
    });
</script>
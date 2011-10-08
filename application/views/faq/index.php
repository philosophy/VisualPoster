<div id="left-col">
    <?php $this->load->view('common/testimonials'); ?>
</div>
<article id="main-col">
    <header>
        <h3>HELPFUL PRACTICAL STUFF</h3>
    </header>
    <section id="content">
        <div class="title">
            <p>Here's where we keep all our commonly asked questions
                and tidbits to get your business rocking:
             </p>
        </div>
        <div class="desc-wrapper">
            <b><?php echo anchor('poster_sizes', 'POSTER SIZES', array('class'=>'external-link')); ?></b>
            <p>Poster Sizes, what they are, where they're used.</p>
        </div>

        <div class="desc-wrapper">
            <b><?php echo anchor('poster_timing', 'POSTER TIMING', array('class'=>'external-link')); ?></b>
            <p>Industry recommendations for when your posters
                should be visible.
        </div>

        <div class="desc-wrapper">
            <b><?php echo anchor('extra_effects', 'EXTRA SPECIAL EFFECTS', array('class'=>'external-link')); ?></b>
            <p>For when you want to be unique.</p>
        </div>

        <div class="desc-wrapper">
            <b><?php echo anchor('music_poster_history', 'MUSIC POSTER HISTORY', array('class'=>'external-link')); ?></b>
            <p>History of the Music Poster</p>
        </div>

<!--        <div class="desc-wrapper">
            <b><?php //echo anchor('poster_sizes', 'DESIGNER DIRECTORY', array('class'=>'external-link')); ?></b>
            <p>Awesome designers we're happy to recommend.</p>
        </div>

        <div class="desc-wrapper">
            <b><?php //echo anchor('poster_sizes', 'POSTER DISTRIBUTOR DIRECTORY', array('class'=>'external-link')); ?></b>
            <p>A list of the best people who'll make sure the
                great posters we print find an appreciative audience.
            </p>
        </div>-->

        <div class="desc-wrapper">
            <b><?php echo anchor('poster_sizes', 'FLURO PREPRINT COLOURS', array('class'=>'external-link')); ?></b>
            <p>Here are the colours we pre-print.
                Pre-print Fluros are much cheaper
                than custom colours.
            </p>
        </div>

        <div class="desc-wrapper">
            <b><?php echo anchor('payment_terms', 'PAYMENT TERMS', array('class'=>'external-link')); ?></b>
            <p>For the accounts person inside all of us.</p>
        </div>

    </section>
</article>

<div id="right-col">
    <?php $this->load->view('common/customers_pa');?>
</div>
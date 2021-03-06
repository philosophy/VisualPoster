<div id="main-col">
    <h2>Choose your poster type</h2>
    <h4 id="flyer-price">Or show me <a href="#">Flyer Pricing</a></h4>

    <?php
        $locals['noRedirect'] = true;
        $this->load->view('common/poster/large_poster_info', $locals);
        $posterPrice = $posters[0]->price;
        $posterSize = $posters[0]->size;
        $name = $posters[0]->name;
        $deliveryCharge = $posters[0]->delivery_charge;
        $posterType = $posters[0]->type
    ?>

    <div id="form-item">
        <form action="#" method="post">
            <div class="f-row">
                <label>How many?</label>
                <p class="bg-input bubble">
                    <input type="text" name="poster-num" id="poster-num" value="1" data-poster-price="<?php echo $posterPrice; ?>" data-delivery-charge="<?php echo $deliveryCharge; ?>"
                           data-poster="<?php echo $name; ?>" data-type="<?php $poster_type = $this->config->item('poster_type'); echo $poster_type[$posterType]; ?>" />
                    <a href="#" class="static-tooltip">link</a>
                </p>
                <div class="hide tooltip-content">
<!--                    In how many places do you want the stuff delivered?-->
                    How many posters you want to print? (e.g. 500)
                </div>
            </div>

            <div class="f-row">
                <label>Paper type?</label>
                <p class="bubble">
                    <select>
                        <option value="150gsm">150 gsm</option>
                        <option value="200gsm">200 gsm</option>
                        <option value="300gsm">300 gsm</option>
                    </select>
                    <a href="#" class="static-tooltip">link</a>
                </p>
                <div class="hide tooltip-content">
                    What paper type you want to use?
<!--                    In how many places do you want the stuff delivered?-->
                </div>
            </div>

            <div class="f-row">
                <label>Delivery points?</label>
                <p class="bg-input bubble">
                    <input id="delivery-points" type="text" name="delivery-points" value="1" />
                    <a href="#" class="static-tooltip">link</a>
                </p>
                <div class="hide tooltip-content">
                    In how many places do you want the stuff delivered?
                </div>
            </div>

            <input type="button" value="Compute" id="btn-compute" data-ajax-url='get_price'/>

            <div id="pricing-container">
                <p>Charge per delivery:35</p>
                <h5 class="price-gst">
                    <span class="price-label">Price:</span>
                    <span id="total-price">$0</span>
                </h5>
                <h5>
                    <span class="price-label">Price w/ 10%GST:</span>
                    <span id="total-price-gst">$0</span>
                </h5>
<!--                <br class="clear">-->
            </div>

            <div id="cheaper">
                <p><span class="highlight">$100 cheaper</span> when you<br> buy these <a href="#">with flyers</a></p>
            </div>

            <div class="getquote">
                <p><input type="button" name="get_quote" value="Get Quote" class="btn-quote coming_soon"></p>
                <p class="btn-result"><input type="button" id='btn-addresult' name="add_result" value="Add Results"></p>
                <p class="btn-result icon-export">
<!--                    <input type="button" id='btn-exportresult' name="export_result" value="Export Results" data-ajax-url='export_data'>-->
                    <a id='export-data-link' href="export_data" target='_blank'>Export Results</a>
                </p>
            </div>
        </form>
    </div>

    <table id="result-details">
        <tbody><tr>
                <th>Type</th>
                <th>Products</th>
                <th>Paper Type</th>
                <th>Charge per Delivery</th>
                <th>Delivery Points</th>
                <th>No.of Copies</th>
                <th>Price</th>
                <th>Price w/10% GST</th>
            </tr>
        </tbody></table>


    <div id="wrong-one">
        <h3>Chose the wrong one?</h3>
        <?php $this->load->view('common/poster/small_poster_info'); ?>
    </div>

</div>
<div id="main-col">
    <h2>Choose your poster type</h2>
    <h4 id="flyer-price">Or show me <a href="#">Flyer Pricing</a></h4>
    <div class="print" id="bg-<?php echo isset($poster_size) ? $poster_id : strtolower($poster);?>">
        <h3>I want to print</h3>
        <h2 class=<?php echo isset($poster_size) ? 'smallsize' : '' ?> >{poster}</h2>
        <h5><?php echo isset($poster_size) ? $poster_size : 'POSTERS' ?></h5>
<!--        <h4>${min_order_price}</h4>-->
<!--        <p class="min-order">Min.order {min_order} pieces</p>-->
<!--        <p class="excludes">PRICING EXCLUDES GST AND DELIVERY</p>-->
        <a href="#">View Specifications</a>
    </div>

    <div id="form-item">
        <form action="#" method="post">
            <div class="f-row">
                <label>How many?</label>
                <p class="bg-input bubble">
                    <input type="text" name="poster-num" id="poster-num" value="1" data-poster-price="{price}" data-delivery-charge="{delivery_charge}"
                           data-poster="{poster}" data-type="{type}"/>
                    <a href="#" class="static-tooltip">link</a>
                </p>
                <div class="hide tooltip-content">
                    In how many places do you want the stuff delivered?
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
                    In how many places do you want the stuff delivered?
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
                <p><input type="button" name="get_quote" value="Get Quote" class="btn-quote"></p>
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
<!--             <tr>
                <td>Poster</td>
                <td>A1</td>
                <td>Standard</td>
                <td>$35</td>
                <td>3</td>
                <td>500</td>
                <td>$935</td>
                <td class="icon-close">$1028.50</td>
            </tr>
            <tr class="odd">
                <td>Poster</td>
                <td>A1</td>
                <td>Standard</td>
                <td>$35</td>
                <td>3</td>
                <td>500</td>
                <td>$935</td>
                <td class="icon-close">$1028.50</td>
            </tr>
            <tr>
                <td>Poster</td>
                <td>A1</td>
                <td>Standard</td>
                <td>$35</td>
                <td>3</td>
                <td>500</td>
                <td>$935</td>
                <td class="icon-close">$1028.50</td>
            </tr>-->
        </tbody></table>
    <div id="wrong-one">
        <h3>Chose the wrong one?</h3>
        <div id="poster-1" class="small-poster">
            <h4>I want to print</h4>
            <h2>A2</h2>
            <h5>POSTERS</h5>
        </div>
        <div id="poster-2" class="small-poster">
            <h4>I want to print</h4>
            <h2>A3</h2>
            <h5>POSTERS</h5>
        </div>
<!--        <div id="poster-3" class="small-poster">
            <h4>I want to print</h4>
            <h2>fluro Prints 1</h2>
            <h5>688mm x 1000mm</h5>
        </div>
        <div id="poster-4" class="small-poster">
            <h4>I want to print</h4>
            <h2>Fluro Prints 2</h2>
            <h5>1350mm x 1960mm</h5>
        </div>
        <div id="poster-5" class="small-poster">
            <h4>I want to print</h4>
            <h2>Pole Posters</h2>
            <h5>688mm x 1000mm</h5>
        </div>-->
    </div>
</div>
<?php
get_header();
?>

<section class="parcelly-tool">
    <h1>Shipping Rate Calculator</h1>
    <p>Get Shipping Cost from Different Shipping Service Providers at One Place</p>

    <form onsubmit="return false">
        <input type="text" name="ship-from" placeholder="Ship From (Origin ZIP)" id="ship-from">
        <input type="text" name="ship-to" placeholder="Ship To (Destination ZIP)" id="ship-to">
        <input type="number" name="weight" placeholder="Weight (in grams)" id="weight" required><br>
        <button disabled type="submit" id="submit">Calculate Shipping Cost</button>
    </form>

    <div id="output">

        <div class="grid-two-column">
            <div id="parcelWeight"></div>
            <div id="shippingDistance"></div>
        </div>
        <div id="affordable">

        </div>
        <div id="hr"></div>
        <div class="grid-three-column">
            <div id="service">
                <div id="speedPost"></div>
            </div>
            <div id="service">
                <div id="fedex"></div>
            </div>
            <div id="service">
                <div id="dtdc"></div>
            </div>
        </div>
    </div>
</section>

<section class="working" id="working">
    <h1>How Calculator Works?</h1>
    <div class="grid-three-column">
        <div class="step">
            <h1>1.</h1>
            <p>Enter ZIP Codes of Origin and Destination City.</p>
        </div>
        <div class="step">
            <h1>2.</h1>
            <p>Enter approximate Weight of your parcel in grams.</p>
        </div>
        <div class="step">
            <h1>3.</h1>
            <p>Click on Calculate Shipping Charges.Get Your Results.</p>
        </div>
    </div>
    <p id="tc">*Highlighted Shipping partner provides affordable Service...</p>
</section>

<?php
get_footer();
?>
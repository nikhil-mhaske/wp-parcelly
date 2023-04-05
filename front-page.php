<?php
    get_header();
?>

    <section class="hero">
        <div class="grid-two-column">
            <div class="hero-content">
                <h1>GET YOUR BEST & AFFORDABLE<br> SHIIPING PARTNER</h1>
                <h3>Compare shipping charges on multiple trusted Platforms</h3>
                <a href="tool"><button>Calculate Shipping</button></a>
            </div>
            <div class="hero-image">
                <img src="<?php echo (get_template_directory_uri(). '/assets/images/hero-image.png') ?>" alt="courier service image">
            </div>
        </div>
    </section>

    <section class="howto" id="howto">
        <div class="grid-one-two">
            <div class="tool-image">
                <img src="<?php echo (get_template_directory_uri(). '/assets/images/Parcelly-Tool.png') ?>" alt="tool view">
                <p id="tc">*Demo of Parcelly</p>
            </div>
            <div class="working">
                <h1>How to Calculate Shipping Cost?</h1>
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
            </div>
        </div>
    </section>


    <section class="why">
        <div class="container">
            <h1>Why parcelly?</h1>
            <div class="grid-three-column">
                <div class="feature">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/free.png') ?>" alt="Free to Use">
                    <div class="details">
                        <h4>Free to Use</h4>
                        <p>No Registration or CC Details Required</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/compare.png') ?>" alt="Free to Use">
                    <div class="details">
                        <h4>Compare Costs</h4>
                        <p>All Shipping Costs from Different Service Providers</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/option.png') ?>" alt="Free to Use">
                    <div class="details">
                        <h4>Deal Highlight</h4>
                        <p>Affordable and Cheapest Deal will be Highlighted</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about container grid-one-two" id="about">

        <div class="about-image">
            <img src="<?php echo (get_template_directory_uri(). '/assets/images/about.png') ?>" alt="About Us">
        </div>

        <div class="about-text">
            <h1>About Parcelly</h1>
            <p>Multiple shipping companies are providing service in our nation and their charges differ. For small
                businesses, while shipping products to employees or clients it might be difficult to choose between the
                cheapest shipping partners. Everyone can do it by visiting different websites and calculating the rates
                but with “Parcelly” it can be done at a single destination.
            </p>
            <h4>Our USP's</h4>
            <p>
                1. Different Shipping service provider's rates at Single Page<br>
                2. All Top Indian Courier Partners Covered<br>
                3. Shipping Rates Accuracy up to 95%.<br>
                4. Easy to Use<br>
                5. No Registration is Required to generate Shipping charges

            </p>
        </div>
    </section>

    <section class="partners" id="partners">
        <div class="container">
            <h1>Our Courier Partners</h1>

            <div class="slide-track">
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/dtdc.png') ?>" alt="DTDC">
                </div>
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/Fedex.png') ?>" alt="DTDC">
                </div>
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/indianPost.jpg') ?>" alt="DTDC">
                </div>
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/dtdc.png') ?>" alt="DTDC">
                </div>
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/Fedex.png') ?>" alt="DTDC">
                </div>
                <div class="slide">
                    <img src="<?php echo (get_template_directory_uri(). '/assets/images/indianPost.jpg') ?>" alt="DTDC">
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>
<?php
    wp_head();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelly</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="<?php echo (get_template_directory_uri(). '/assets/images/2.png') ?>"  alt="logo" width="120px"></a>
        </div>
        <div class="nav-items">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="tool.html">Calculate Shipping</a></li>
                <li><a href="#howto">How To</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#partners">Our Partners</a></li>
                <li><a href="#footer">Contact Us</a></li>
            </ul>
        </div>
        <div class="menu-icon"><i class="fa fa-bars"></i></div>
        <div class="cancel-icon"><i class="fa fa-close"></i></div>
    </header>

    <section class="hero">
        <div class="grid-two-column">
            <div class="hero-content">
                <h1>GET YOUR BEST & AFFORDABLE<br> SHIIPING PARTNER</h1>
                <h3>Compare shipping charges on multiple trusted Platforms</h3>
                <a href="tool.html"><button>Calculate Shipping</button></a>
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

    <footer id="footer">
        <div class="grid-four-column">
            <div class="footer-logo">
                <a href="index.html"><img src="<?php echo (get_template_directory_uri(). '/assets/images/1.png') ?>" alt="Footer Logo"></a>
            </div>
            <div class="menu">
                <p id="title">Quick Links</p>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="tool.html">Calculate Shipping</a></li>
                    <li><a href="#howto">How To</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#partners">Our Partners</a></li>
                </ul>
            </div>
            <div class="connect">
                <p id="title">Connect with Us:</p>
                <p>Phone No: <br>+91 8888888888</p>
                <p>Email: <br>parcelly@gmail.com</p>
            </div>
            <div class="google">
                <p id="title">Locate Us: </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.383204960632!2d73.79355401502616!3d18.556754687387894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2beb590275f1b%3A0x7b9c7e88eff80325!2sWisdmLabs!5e0!3m2!1sen!2sin!4v1675326758400!5m2!1sen!2sin"
                    width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </footer>
    <div class="copyright">
        <p>&#169; Parcelly 2023 | Created at WisdmLabs</p>
    </div>
</body>

</html>
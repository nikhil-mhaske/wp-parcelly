<?php

wp_footer();

?>

<footer id="footer">
        <div class="grid-four-column">
            <div class="footer-logo">
                <a href="index.html"><img src="<?php echo (get_template_directory_uri(). '/assets/images/1.png') ?>" alt="Footer Logo"></a>
            </div>
            <div class="menu">
                <p id="title">Quick Links</p>
                <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'menu_id' => 'footer-menu',
            )); ?>
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
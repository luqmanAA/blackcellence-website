<section class="footer">
            <div class="w-layout-blockcontainer container w-container">
                <div class="footer-wrap">
                    <div class="footer-left">
                        <a href="/" aria-current="page" class="brand w-nav-brand w--current">
                            <img src="/assets/logo.png" loading="lazy" alt="blackcellence"/>
                        </a>
                        <p class="footer-info">Join us in our journey to make a difference. Together, we can create lasting change and unlock the potential of every person, regardless of their circumstances.</p>
                        <div class="footer-link-box">
                            <div class="contact-block">
                                <div class="link-label">
                                    <img src="/assets/ic-mail.svg" loading="lazy" alt="Icon"/>
                                    <div>Email:</div>
                                </div>
                                <a href="mailto:info@blackcellencenetwork.com" class="footer-link">info@blackcellencenetwork.com</a>
                            </div>
                        </div>
                        <a href="/become-a-volunteer" class="yellow-btn w-inline-block">
                            <div>Join us</div>
                            <img src="/assets/ic-arrow.svg" loading="lazy" alt="Arrow" class="arrow"/>
                        </a>
                    </div>
                    <div class="footer-right">
                        <div class="footer-menu">
                            <a href="/about-us" class="footer-link">About us</a>
                            <a href="https://www.paypal.com/donate/?hosted_button_id=64W84AK8BQGFC" class="footer-link" target="_blank">Donate</a>
                            <a href="/contact" class="footer-link">Contact us</a>
                        </div>
                        <div class="footer-menu">
                            <a href="/events" class="footer-link">Events</a>
                            <a href="/volunteers" class="footer-link">Volunteers</a>
                            <a href="/news" class="footer-link">News</a>
                            <a href="#" class="footer-link">Gallery</a>
                        </div>
                        <div class="footer-menu">
                            <a href="#" class="footer-link">Privacy Policy</a>
                            <a href="#" class="footer-link">Terms &amp;Conditions</a>
                        </div>
                    </div>
                </div>
                <div class="social-wrap">
                    <a href="https://facebook.com/blackcellencenetwork" target="_blank" class="social-icon w-inline-block" rel="noopener">
                        <img src="/assets/ic-facebook.svg" loading="lazy" alt="Icon"/>
                    </a>
                    <a href="https://www.instagram.com/blackcellencenetwork" target="_blank" class="social-icon w-inline-block" rel="noopener">
                        <img src="/assets/ic-insta.svg" loading="lazy" alt="Icon"/>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="footer-text">
                        <div>&copy; <?php echo date("Y"); ?> Blackcellence. All rights reserved.</div>
                        <div>
                            Powered by <a href="https://www.branderah.com/" target="_blank" class="footer-link" rel="noopener">Branderah</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f19f9e78bd6991e7ca7a2e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="/js/validations.js" type="text/javascript"></script>
        <script src="/js/scripts.js" type="text/javascript"></script>

        <?php if (!empty($include_paypal_script)) : ?>
            <script src="https://www.paypal.com/sdk/js?client-id=BAALF_lZLwaSmFtU9xHmR9uDk_3zVBuPIgTylukpCYOZ2GyfpKs2MVm08KcjMI1ara8pQIBbZ68eO6KQss&components=hosted-buttons&disable-funding=venmo&currency=CAD"></script>
            <script>
                paypal.HostedButtons({
                    hostedButtonId: "RC7FPHKYJAA6J",
                }).render("#paypal-container-RC7FPHKYJAA6J")
            </script>
        <?php endif; ?>

    </body>
</html>
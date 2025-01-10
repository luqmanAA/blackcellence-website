<?php 
    $pageTitle = "Contact Us";
    include '../includes/header.php';
 ?>
        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Contact us</div>
                </div>
                <h1 class="main-title">Get in touch</h1>
            </div>
        </div>
        <div class="page-data">
            <section class="contact">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="contact-wrap">
                        <div class="contact-form form">
                            <form id="wf-form-contact-form" name="wf-form-Contact-Form-2" data-name="Contact Form" method="get" data-wf-page-id="6625e8afe73234dba45044a5" data-wf-element-id="1ac29adc-50c2-228b-231d-a355e76e284d">
                                <div class="field-wrap">
                                    <input class="input w-node-_1ac29adc-50c2-228b-231d-a355e76e284f-a45044a5 w-input" maxlength="256" name="name" data-name="Name" placeholder="Full name" type="text" id="name" required=""/>
                                    <input class="input email w-input" maxlength="256" name="email" data-name="Email" placeholder="Email address" type="email" id="email" required=""/>
                                    <input class="input phone w-input" maxlength="256" name="phone" data-name="Phone" placeholder="Phone number" type="tel" id="phone" required=""/>
                                    <textarea id="message" name="message" maxlength="5000" data-name="Message" placeholder="Write your message here " required="" class="textarea w-node-_1ac29adc-50c2-228b-231d-a355e76e2852-a45044a5 w-input"></textarea>
                                </div>
                                <div class="form-btn">
                                    <input type="submit" data-wait="" class="submit-btn w-button" value="Submit Now"/>
                                </div>
                            </form>
                            <div class="success-message w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="error-message w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div>
                                <h3>Send us a message</h3>
                                <p class="single-text">Let &#x27;s start a conversation! Reach out to us today using the contact form or contact information provided below.</p>
                            </div>
                            <div class="contact-inner">
                                <div class="contact-info">
                                    
                                    <div class="contact-info-block">
                                        <div class="contact-label">
                                            <img src="/assets/ic-mail-black.svg" loading="lazy" alt="Icon"/>
                                            <div>Email:</div>
                                        </div>
                                        <a href="mailto:info@blackcellencenetwork.com" class="plain-link">info@blackcellencenetwork.com</a>
                                    </div>
                                </div>
                                <div class="contact-social">
                                    <a href="https://www.instagram.com/blackcellencenetwork" target="_blank" class="social w-inline-block">
                                        <img src="/assets/ic-insta.svg" loading="lazy" alt="Social Icon"/>
                                    </a>
                                    <a href="https://facebook.com/blackcellencenetwork" target="_blank" class="social w-inline-block">
                                        <img src="/assets/ic-facebook.svg" loading="lazy" alt="Social Icon"/>
                                    </a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php include '../includes/faq.php' ?>
            
        </div>

<?php include '../includes/footer.php'; ?>
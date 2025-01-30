<?php 
    $pageTitle = "Donate";
    include '../includes/header.php';
 ?>

        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="https://cdn.prod.website-files.com/65f19f9e78bd6991e7ca7a2e/66236e4ebf06e72e1b6a96a4_sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Support Our Cause</div>
                </div>
                <h1 class="main-title">Donate Today</h1>
            </div>
        </div>
        <div class="page-data">
            <section id="donation" class="donate-form">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="vf-wrap">
                        <div class="contact-form form">
                            <form id="donation-form" name="donation-Form" data-name="Donation Form" method="post" action="/donate/process_donation.php">
                                <div class="field-wrap">
                                    <input class="input w-node-_896e42b2-8908-6ec4-c8c8-52cb1f01418c-9302d6db w-input" maxlength="256" name="name" data-name="Name" placeholder="Full Name" type="text" id="Name-3" required=""/>
                                    <input class="input email w-input" maxlength="256" name="email" data-name="Email" placeholder="Email address" type="email" id="email" required=""/>
                                    <select id="payment-method" name="Payment-Method" data-name="Payment Method" class="input payment w-node-_1062751e-829a-1b36-ee80-49c1f7c03410-9302d6db w-select">
                                        <option value="">Payment Method</option>
                                        <option selected value="PayPal">PayPal</option>
                                    </select>
                                    <select id="donation-amount" name="amount" data-name="Donation Amount" class="input amount w-node-d15f6694-e4ee-55ee-1f64-506c9fc943ac-9302d6db w-select">
                                        <option value="">Donation Amount</option>
                                        <option value="10.00$">10.00$</option>
                                        <option value="25.00$">25.00$</option>
                                        <option value="50.00$">50.00$</option>
                                        <option value="75.00$">75.00$</option>
                                    </select>
                                    <textarea id="message" name="Message" maxlength="5000" data-name="Message" placeholder="Write your message here " required="" class="textarea w-node-_896e42b2-8908-6ec4-c8c8-52cb1f01418f-9302d6db w-input"></textarea>
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
                        <div class="vf-right">
                            <div>
                                <h3>Where Your Money Goes</h3>
                                <p class="single-text">Learn how your donation will be used to support programs and initiatives, directly benefiting those in need.</p>
                            </div>
                            <ul role="list" class="vf-checklist">
                                <li class="check-list-item">Empowerment Programs</li>
                                <li class="check-list-item">Long-Term Planning</li>
                                <li class="check-list-item">Education and Awareness</li>
                                <li class="check-list-item">Research and Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php include '../includes/faq.php' ?>
            
        </div>

<?php include '../includes/footer.php'; ?>
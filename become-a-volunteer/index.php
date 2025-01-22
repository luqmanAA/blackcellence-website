<?php 
    $pageTitle = "Join Our Team";
    include '../includes/header.php';
    session_start();
 ?>
        <div class="page-title">
            <div class="w-layout-blockcontainer container w-container">
                <div class="sub-title">
                    <img src="/assets/sub-title.svg" loading="lazy" alt="Icon"/>
                    <div>Volunteer With us</div>
                </div>
                <h1 class="main-title">Join Our Team</h1>
            </div>
        </div>
        <div class="page-data">
            <section class="volunteer-form">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="vf-wrap">
                        <div class="contact-form form">

                            <?php
                                // Display error or success message from session if set
                                if (isset($_SESSION['error'])) {
                                    echo "<div style='color: red;'>" . $_SESSION['error'] . "</div>";
                                    unset($_SESSION['error']);  // Clear the error after displaying it
                                } elseif (isset($_SESSION['success'])) {
                                    echo "<div style='color: green;'>" . $_SESSION['success'] . "</div>";
                                    unset($_SESSION['success']);  // Clear the success message after displaying it
                                }
                            ?>

                            <form method="post" action="/processors/process.php" onsubmit="return validateCheckboxes();">
                                <div class="field-wrap">
                                    <input class="input w-node-_3b474e04-5fdb-d502-5ddc-1da8eda59d20-6e632834 w-input" maxlength="256" name="Name" data-name="Name" placeholder="Full Name" type="text" id="name" required=""/>
                                    <input class="input email w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email address" type="email" id="email" required=""/>
                                    <input class="input phone w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone number" type="tel" id="phone" required=""/>
                                    
                                    <div class="form-group-wd">
                                        <p>In what area(s) can you volunteer?</p>
                                        <p id="error-message" style="display: none;">Please select at least one option.</p>
                                        <div class="checkbox-group" name="scope">
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Public Relations">
                                                Public Relations
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Photography / Videography">
                                                Photography / Videography
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="IT Support (Technical - Powerpoint, Cabling, Audio & Visual Set Up / Management)">
                                                IT Support (Technical - Powerpoint, Cabling, Audio & Visual Set Up / Management)
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Registration & Check in">
                                                Registration & Check in
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Ushering & Seating Services">
                                                Ushering & Seating Services
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Stage Management">
                                                Stage Management
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Logistics Coordination">
                                                Logistics Coordination
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Performer Coordination">
                                                Performer Coordination
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Award Distribution">
                                                Award Distribution
                                            </label>
                                            <label>
                                                <input type="checkbox" name="scope[]" value="Crowd Control">
                                                Crowd Control
                                            </label>
                                        </div>
                                    </div>

                                    <textarea id="message" name="Message" rows="3" maxlength="5000" data-name="Message" placeholder="What skills or experience do you have that make you suitable for the area(s) of interest you want to volunteer in?" required="" class="textarea w-node-_3b474e04-5fdb-d502-5ddc-1da8eda59d23-6e632834 w-input"></textarea>
                                    <fieldset class="form-group-wd">
                                        <legend>Consent & Verification:</legend>

                                        <div>
                                            <input type="checkbox" id="verification" name="verification" required />
                                            <label for="verification">I confirm that the information provided is accurate to the best of my knowledge.</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="consent" name="consent" required />
                                            <label for="consent">I understand that the information provided will be used for the purposes of evaluating my interest as a volunteer and contacting me if selected.</label>
                                        </div>
                                    </fieldset>
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
                                <h3>Connect and Contribute</h3>
                                <p class="single-text">By joining our community, you become part of a movement dedicated to uplifting lives and transforming societies.</p>
                            </div>
                            <ul role="list" class="vf-checklist">
                                <li class="check-list-item">Make a difference in the lives of others</li>
                                <li class="check-list-item">Build connections and make new friends</li>
                                <li class="check-list-item">Gain valuable skills and experience</li>
                                <li class="check-list-item">Contribute to positive social change</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php include '../includes/faq.php' ?>
        </div>
        

<?php include '../includes/footer.php'; ?>

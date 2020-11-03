<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include("../resources/tamplates/front/header.php") ?>












<!-- Contact Section -->

<div class="container">
    <h3><?php display_Message(); ?></h3>
    <div class="contact-form">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
            </div>
        </div>

        <form name="sentMessage" id="contactForm" method="POST" action="contact.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="contact_name" class="form-control" placeholder="Your Fullname *" id="name" required data-validation-required-message="Please enter your Full name.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="contact_email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="contact_subject" class="form-control" placeholder="Your Subject *" id="subject" required data-validation-required-message="Please enter your subject.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="contact_message" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <button name="submit" type="submit" class="btn btn-primary btn-login">Send Message</button>
                </div>
            </div>
        </form>


        <!--- SENDING MESSAGE FORMS-->
        <?php contact_message(); ?>

    </div>
</div>








<!-- /.container -->
<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>
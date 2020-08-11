<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include("../resources/tamplates/front/header.php") ?>


<!--Navigation -->






<!-- Contact Section -->

<div class="container main-content">
    <div class="contact-form">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" method="POST">
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
                            <div class="form-group">
                                <input type="text" name="contact_phone" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
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
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--- SENDING MESSAGE FORMS-->
<?php send_Message(); ?>

</div>
<!-- /.container -->
<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>
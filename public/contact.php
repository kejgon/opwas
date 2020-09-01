<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include("../resources/tamplates/front/header.php") ?>


<div class="fulid-container main-content">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Contact Us</h1>

    </header>
</div>




<div class="fuild-container" id="full-features">
    <div class="container" id="features">
        <div class="row">

            <div class=" features-box col-md-3">
                <div class="box-f">
                    <h3>Business Hours</h3>
                    <p class="text-center">8:00AM => 5:00PM</p>
                </div>
            </div>


            <div class="features-box col-md-3">
                <div class="box-f">
                    <h3>Email Us</h3>
                    <p class="text-center">Email: opwas@gmail.com</p>
                </div>
            </div>


            <div class="features-box col-md-3">
                <div class="box-f">
                    <h3>Phone</h3>
                    <p class="text-center">0700000000</p>
                </div>
            </div>

            <div class="features-box col-md-3">
                <div class="box-f">
                    <h3>Address</h3>

                    <p class="text-center">Ngong Road </br> Adams</p>
                </div>
            </div>

        </div>

    </div>
</div>





<!-- Contact Section -->

<div class="container">
    <div class="contact-form">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
            </div>
        </div>

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
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </div>
        </form>

    </div>
</div>


<!--- SENDING MESSAGE FORMS-->
<?php send_Message(); ?>


<div class="clearfix"></div>




<!-- /.container -->
<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>
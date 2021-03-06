<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="stylesheets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <section class="section-contact-1">
        <div class="container">
            <?php include "components/header.php"?>
        </div>
    </section>
    <section class="section-contact-2 container-fluid"></section>
    <section class="section-contact-3">
        <div class="features__head container">
            <h1>Get In Touch With Us</h1>
            <hr class="hr_all">
            <p class="p-for-all">We are here to help. Want to learn more about our services?<br>Please get in touch, we'd love to hear from you!</p>
            <div class="contact-form">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <form>
                            <input class="contact-form__input" type="text" placeholder="Name">
                            <input class="contact-form__input" type="text" placeholder="Email">
                            <input class="contact-form__input" type="text" placeholder="Phone">
                            <textarea class="contact-form__textarea" name="message" rows="10" cols="30" placeholder="Message"></textarea>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="information">
                            <h5 class="h_color h5_size ">Headquater</h5>
                            <div class="row">
                                <i class="fa fa-map-marker information__fa-fa" aria-hidden="true"></i>
                                <p class="p-for-all">610 Overlook Circle<br>Suite 323<br>Kalamazoo, MI 49009</p>
                            </div>
                            <div class="row">
                                <i class="fa fa-phone information__fa-fa" aria-hidden="true" ></i>
                                <p class="p-for-all">+62 202 55 0117</p>
                            </div>
                            <div class="row">
                                <i class="fa fa-envelope information__fa-fa" aria-hidden="true"></i>
                                <p style="color: #0f5f5c; font-weight: 500">hi@wapik.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-12 col-sm-6">
                        <button class="head-line__button">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact-4">
        <?php include "components/download.php"?>
    </section>
    <section class="section-contact-5">
        <?php include "components/footer.php"?>
    </section>
<script src="javascript/main.min.js"></script>
<script src="javascript/slick-slider.js"></script>
<script src="javascript/slick.js"></script>
</body>
</html>
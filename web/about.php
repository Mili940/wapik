<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="stylesheets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="section-about-1">
        <?php include "components/header.php"?>
        <div class="section_about_1__content">
            <h1 class="content-hero">Cras justo odio, dapibus ac facilisis in<br> egestas eget quam</h1>
            <button class="head-line__button">Start Your Free Trial</button>
        </div>
    </section>
    <section class="section-about-2">
        <div class="container">
            <div class="features__head">
                <h1 class="h_color h1_size">About Us</h1>
                <hr class="hr_all">
                <p class="p-for-all">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit<br> non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris<br> condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut<br> id elit. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <?php include  "components/feature-colum.php"?>
        </div>
    </section>
    <section class="section-about-3">
        <div class="container">
            <div class="features__head">
                <h1>Meet Our Team</h1>
                <hr class="hr_all">
                <p class="p-for-all">Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia<br> odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            <div class="slider-container row">
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/Joyice.png">
                    <div class="positionPara">
                        <p class="h_color p_f">Joyce Hudson</p>
                        <p class="p-for-all">Founder & Designer</p>
                    </div>
                </div>
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/Angela.png">
                    <div class="positionPara">
                        <p class="h_color p_f">Angela Campbell</p>
                        <p class="p-for-all">Project Manager</p>
                    </div>
                </div>
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/James.png">
                    <div class="positionPara">
                        <p class="h_color p_f">James Walker</p>
                        <p class="p-for-all">Developer</p>
                    </div>
                </div>
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/Joyice.png">
                    <div class="positionPara">
                        <p class="h_color p_f">Joyce Hudson</p>
                        <p class="p-for-all">Founder & Designer</p>
                    </div>
                </div>
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/Angela.png">
                    <div class="positionPara">
                        <p class="h_color p_f">Angela Campbell</p>
                        <p class="p-for-all">Project Manager</p>
                    </div>
                </div>
                <div class="slider-single col-md-3">
                    <img class="ourTeamImg" src="img/aboutUS/James.png">
                    <div class="positionPara">
                        <p class="h_color p_f">James Walker</p>
                        <p class="p-for-all">Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-about-4 container-fluid">
        <?php include "components/download.php"?>
    </section>
    <section class="section-about-5">
        <?php include "components/footer.php"?>
    </section>
<script src="javascript/main.min.js"></script>
<script src="javascript/slick-slider.js"></script>
<script src="javascript/slick.js"></script>
</body>
</html>
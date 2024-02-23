<?php
include "views/partials/header.php"
?>

<style>
    .about-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/AVIS-768x559.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top")[0].textContent = "About Us";
        document.title = "About Us";
    });
</script>

<div class="main-section">
    <div class="upper-text-content">
        <h1 class="heading first-child">About Us</h1>
        <p>
            Simba Corporation is an integrated business group headquartered in
            Nairobi, Kenya with controlling interests in diversified fields as
            motor sales and service, assembly, hospitality, finance and real
            estate. <br /><br />Founded in 1948 by Mr. Abdul Karim Popat, we have
            grown from a modest used-car sales enterprise into one of Kenya's
            foremost diversified business groups. Our rich heritage in the motor
            and hospitality industries enables us to provide world-class solutions
            at every touchpoint.
        </p>
    </div>
    <div class="vision-mission">
        <div class="vision-mission-cont">
            <img class="vision-img" src="images/siteImages/target.svg" alt="">
            <h1>Vision</h1>
            <p>
                To be a trusted, innovative, and diversified world-class Pan-African
                corporation.
            </p>
        </div>
        <div class="vision-mission-cont">
            <img class="mission-img" src="images/siteImages/hand-shake.svg" alt="">
            <h1>Mission</h1>
            <p>
                To establish a Pan-African corporation that creates value for our
                customers, employees, investors, partners and suppliers by nurturing
                mutually beneficial relationships, efficient operations and
                financial prudence.
            </p>
        </div>
    </div>
    <div class="carousel-section">
        <h1 class="heading-values">Our Values</h1>
        <div class="sect">
            <div class="container">
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/car.svg" alt="">
                                    <h2>Integrity</h2>
                                    <p>Integrity is the bedrock of our company. We are consistent, honest and we
                                        keep our word. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/insurance.png" alt="">
                                    <h2>Accountability</h2>
                                    <p>We are accountable to our stakeholders and we will be responsible for all
                                        corporate actions. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/competence.png" alt="">
                                    <h2>Stewardship</h2>
                                    <p>All actions and decisions will be made with full integrity with a view to
                                        protecting our stakeholders. We strive to promote a conducive environment
                                        for our customers and employees</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/people.png" alt="">
                                    <h2>People</h2>
                                    <p>From our employees to our customers, people are the foundation of our
                                        business. Respect and dignity are at the forefront of all our interactions.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/innovation.png" alt="">
                                    <h2>Innovation</h2>
                                    <p>We thrive on innovative approaches to existing products, processes, and
                                        ideas. This has been a critical instrument to our sustained success. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/hand-shake.png" alt="">
                                    <h2>Relationships</h2>
                                    <p>Relationships are the basis of our business at Simba Corp. We aspire to
                                        maintain trusted relationships with all our stakeholders. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img class="carousel-img" src="images/siteImages/entrepreneurship.png" alt="">
                                    <h2>Entrepreneurship</h2>
                                    <p>We are go getters. We aspire to be entrepreneurial in all aspects of our
                                        business.</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary leftLst"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M115 160 l-39 -40 39 -40 c21 -22 41 -37 44 -35 2 3 -11 21 -29 40
                       l-34 35 34 35 c18 19 31 37 29 40 -3 2 -23 -13 -44 -35z" />
                                </g>
                            </svg></button>
                        <button class="btn btn-primary rightLst"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M80 195 c0 -5 14 -24 32 -42 l32 -33 -34 -35 c-18 -19 -31 -37 -29
                       -40 3 -2 23 13 44 35 l39 40 -42 43 c-23 23 -42 37 -42 32z" />
                                </g>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="story-section">
        <h1 class="heading">Our Story</h1>
        <p class="our-story">
            Follow Simba Corporation’s journey from the late 40’s, through Kenya’s
            golden age to become one of the most successful homegrown entities in
            the field of motor vehicle sales & service. By preserving the unique
            aspects of our heritage, we have diversified into the fields of
            assembly, hospitality, finance and trade.
        </p>
        <div class="sect1">
            <div class="container">
                <div class="row">
                    <div class="MultiCarousel1" data-items="1,3,5,6" data-slide="1" id="MultiCarousel1" data-interval="1000">
                        <div class="red-line"></div>
                        <div class="MultiCarousel-inner1">
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text1">2021</h1>
                                    <img class="carousel-img-story1" src="images/siteImages/Nsk-Imageunder-restaurants-768x432.jpg" alt="">
                                    <p class="story-text">Launched the Nairobi Street Kitchen</p>
                                    <p class="story-text">Acquired Ashok Leyland Franchise </p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2020</h1>
                                    <img class="carousel-img-story" src="images/siteImages/m2-768x428.jpg" alt="">
                                    <p class="story-text">Commenced local assembly of Mahindra pick-ups, launched by
                                        H.E. the President at State House Nairobi</p>
                                    <p class="story-text">Launched local assemly and distribution of Proton,
                                        launched by H.E. the President at AVA Mombasa </p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2019</h1>
                                    <img class="carousel-img-story" src="images/siteImages/Proton-SAGA-Passanger-768x559.jpg" alt="">
                                    <p class="story-text">Acquired the Proton franchise</p>
                                    <p class="story-text">Acquired the Fieldking franchise</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2018</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-02-10-at-12.25.43.jpeg" alt="">
                                    <p class="story-text">Naresh Leekha appointed as Group Managing Director-Motor
                                        Division</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2017</h1>
                                    <img class="carousel-img-story" src="images/siteImages/celebrating-50-content-768x450.png" alt="">
                                    <p class="story-text">Completed the acquisition of Associated Vehicle Assemblers
                                        (AVA) as a wholly-owned subsidiary of Simba Corporation</p>
                                    <p class="story-text">Acquired 35% stake in Hemingways Group of hotels </p>
                                    <p class="story-text"> Adil Popat named Executive Chairman and Dinesh Kotecha
                                        appointed as Group CEO
                                    </p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2016</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-10-12-at-20.17.14-7-768x458.jpeg" alt="">
                                    <p class="story-text">Opened the state of the art Aspire Centre in Westlands,
                                        Nairobi</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2015</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-10-12-at-20.17.14-3-768x497.jpeg" alt="">
                                    <p class="story-text">Opened Acacia Premier Hotel Kisumu</p>
                                    <p class="story-text">Acquired the SAME franchise</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2014</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-08-17-at-19.24.162-768x576.jpeg" alt="">
                                    <p class="story-text">Acquired the Renault franchise</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2013</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-07-07-at-08.25.07-768x512.jpeg" alt="">
                                    <p class="story-text">Opened Villa Rosa Kempinski</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2012</h1>
                                    <img class="carousel-img-story" src="images/siteImages/xxl_153044399-768x432.jpg" alt="">
                                    <p class="story-text">Acquired Mahindra Franchise</p>
                                    <p class="story-text">Opened Olare Mara Kempinski</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2011</h1>
                                    <img class="carousel-img-story" src="images/siteImages/fishing-4842611_1280-768x512.jpeg" alt="">
                                    <p class="story-text">Simba Colt Kisumu branch opened</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2010</h1>
                                    <img class="carousel-img-story" src="images/siteImages/AVIS-768x559.jpg" alt="">
                                    <p class="story-text">Acquired AVIS Franchise</p>
                                    <p class="story-text">Established Simba Corporation as the Group’s Entity</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2008</h1>
                                    <img class="carousel-img-story" src="images/siteImages/AFMS-logo-1-768x559.png" alt="">
                                    <p class="story-text">Acquired majority shareholding in Africa Fleet Management
                                        Solutions (AFMS)</p>
                                    <p class="story-text"> Aquired the BMW franchise"</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2007</h1>
                                    <img class="carousel-img-story" src="images/siteImages/WhatsApp-Image-2021-06-29-at-10.29.43.jpeg" alt="">
                                    <p class="story-text">Mr. Adil Popat named CEO</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">2001</h1>
                                    <img class="carousel-img-story" src="images/siteImages/01511-768x450.jpg" alt="">
                                    <p class="story-text">Acquired Fuso Franchise</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">1997</h1>
                                    <img class="carousel-img-story" src="images/siteImages/bg-powerr-768x281.jpg" alt="">
                                    <p class="story-text">Founded Power Systems Division, Opened Simba Colt Mombasa
                                        Branch </p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">1981</h1>
                                    <img class="carousel-img-story" src="images/siteImages/Simba-Colt-Logo-recreated-768x543.png" alt="">
                                    <p class="story-text">Separated from CMC Motors and established Simba Colt
                                        Motors </p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">1968</h1>
                                    <img class="carousel-img-story" src="images/siteImages/mitsubishi-logo-lg-300x195-1.jpg" alt="">
                                    <p class="story-text">Acquired Mitsubishi Franchise</p>
                                </div>
                            </div>
                            <div class="item1">
                                <div class="pad15">
                                    <h1 class="transparent-text">1948</h1>
                                    <img class="carousel-img-story" src="images/siteImages/Late-chairman.jpg" alt="">
                                    <p class="story-text">Founded by Mr. Abdul Karim Popat as a used car dealership,
                                        Deluxe Motors Ltd. in Nairobi on Koinange Street.</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary leftLst1"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M115 160 l-39 -40 39 -40 c21 -22 41 -37 44 -35 2 3 -11 21 -29 40
                                    l-34 35 34 35 c18 19 31 37 29 40 -3 2 -23 -13 -44 -35z" />
                                </g>
                            </svg></button>
                        <button class="btn btn-primary rightLst1"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M80 195 c0 -5 14 -24 32 -42 l32 -33 -34 -35 c-18 -19 -31 -37 -29
                                    -40 3 -2 23 13 44 35 l39 40 -42 43 c-23 23 -42 37 -42 32z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <ul>
            <l1><a href="#">2021</a></l1>
            <l1><a href="#">2020</a></l1>
            <l1><a href="#">2019</a></l1>
            <l1><a href="#">2018</a></l1>
            <l1><a href="#">2017</a></l1>
            <l1><a href="#">2016</a></l1>
            <l1><a href="#">2015</a></l1>
            <l1><a href="#">2014</a></l1>
            <l1><a href="#">2013</a></l1>
            <l1><a href="#">2012</a></l1>
            <l1><a href="#">2011</a></l1>
            <l1><a href="#">2010</a></l1>
            <l1><a href="#">2008</a></l1>
            <l1><a href="#">2007</a></l1>
            <l1><a href="#">2001</a></l1>
            <l1><a href="#">1997</a></l1>
            <l1><a href="#">1981</a></l1>
            <l1><a href="#">1968</a></l1>
            <l1><a href="#">1948</a></l1>
        </ul>
    </div>
    <h1 class="heading">Leadership Team</h1>
    <div class="container-leadership-section">
        <div class="leadership-section">
            <div class="title1">
                <h2>Executive Directors</h2>
            </div>
            <div class="leader-container-card">
                <div class="person-leader-card">
                    <div class="personal-image">
                        <img src="images/siteImages/WhatsApp-Image-2021-06-29-at-10.29.43.jpeg" alt="">
                    </div>
                    <div class="personal-text">
                        <h3>Adil Popat</h3>
                        <p>Group Executive Chairman</p>
                    </div>
                </div>
                <div class="person-leader-card">
                    <div class="personal-image">
                        <img src="images/siteImages/Dinesh.jpeg" alt="">
                    </div>
                    <div class="personal-text">
                        <h3>Dinesh Kotecha</h3>
                        <p>Group CEO</p>
                    </div>
                </div>
                <div class="person-leader-card">
                    <div class="personal-image">
                        <img src="images/siteImages/Madatali.jpeg" alt="">
                    </div>
                    <div class="personal-text">
                        <h3>Madatali Premji</h3>
                        <p>Technical Director</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="leadership-section">
            <div class="title1">
                <h2>Non-Executive Directors</h2>
            </div>
            <div class="leader-container-card">
                <div class="person-leader-card">
                    <img src="images/siteImages/Paul-Kavuma.jpg" alt="">
                    <h3>Paul Kavumat</h3>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/Linus-Gitahi.jpg" alt="">
                    <h3>Linus W. Gitahi</h3>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/Agnes-Gathaiya.jpg" alt="">
                    <h3>Agness Gathaiya</h3>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/salim.jpg" alt="">
                    <h3>Salim Suleman</h3>
                </div>
            </div>
        </div>
        <div class="leadership-section">
            <div class="title1">
                <h2>Management Team</h2>
            </div>
            <div class="leader-container-card">
                <div class="person-leader-card">
                    <img src="images/siteImages/naresh.jpeg" alt="">
                    <h3>Naresh Leekha</h3>
                    <p>Managing Director, Motor Division</p>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/rita.jpeg" alt="">
                    <h3>Rita Mwangi</h3>
                    <p>Group Executive Chairman</p>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/thomas.jpeg" alt="">
                    <h3>Thomas Baertl</h3>
                    <p>Chief Operating Officer, Hospitality</p>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/suraj.jpeg" alt="">
                    <h3>Suraj Shah</h3>
                    <p>Chief Financial Officer</p>
                </div>
                <div class="person-leader-card">
                    <img src="images/siteImages/matt.jpeg" alt="">
                    <h3>Matt Lloyd</h3>
                    <p>Managing Director, Associated Vehicle Assemblers</p>
                </div>
            </div>
        </div>
    </div>
    <section class="location-distribution">
        <div class="left-section">
            <h1>Distribution Network</h1>
            <div class="branches-list-container">
                <div class="branches-left">
                    <h2>Branch Network</h2>
                    <ul class="branches-list">
                        <li>Nairobi</li>
                        <li>Mombasa</li>
                        <li>Kisumu</li>
                        <li>Kisii</li>
                        <li>Narok</li>
                        <li>Nyeri</li>
                    </ul>
                </div>
                <div class="branches-right">
                    <h2>Dealer Network</h2>
                    <ul class="branches-list">
                        <li>Nairobi</li>
                        <li>Nakuru</li>
                        <li>Eldoret</li>
                        <li>Nanyuki</li>
                        <li>Marsabit</li>
                        <li>Meru</li>
                        <li>Kericho</li>
                        <li>Thika</li>
                        <li>Machakos</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-section">
            <div class="branches-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.364608379728!2d36.79972892839004!3d-1.2681032269146408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f18222ae24c19%3A0x8d5b8d0fead27cb1!2sSimba%20Corp%20Head%20Office!5e0!3m2!1sen!2ske!4v1643468836287!5m2!1sen!2ske" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <?php
    include_once "views/partials/footer.php"
    ?>
<?php require_once('./assets/header.php')?>
<style>
    .about-page-padding{
        padding:20px 60px;
    }
    @media only screen and (max-width:800px){
        .about-page-padding{
            padding:unset;
        }    
    }
</style>
<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/about_banner.jpg" style="width:100%">
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading" style="color:#fff;">About ARS</h1>
            </div>
        </div>
    </div>
    <div style="background: #f2f9ff;" class="container col">
        <div id="about" class="about-page-padding about-panel"style="background:#f3faff">
            <div class="about-img">
                <div class="image-wrapper">
                    <img src="<?php echo SITE_PATH?>/images/ceo2.jpg">
                </div>
            </div>
            <div class="about-content">
                <h3 class="h3style">Message from CEO</h3>
                <p class="p-first font-cormorant-garamond-decent-stylist" style="font-size:18px">
                     At the mid of 2022, after working in Delhi NCR(Real Estate) for close to 7 years. I decided to start a new journey . As the fastest growing Real Estate, in Delhi NCR, it would be very excited to us to share our vision for the services we are commited to offering at ARS Landbase where we can bring a superior quality of service to each and every client. Whether you are selling, buying or investing, we are commited to helping you make informed decisions that align with your goals and aspirations. As your trusted partner we are here to find the perfect place call HOME. Your needs are our top priority. Our real estate professionals is here to helping our clients to achieve their real estate goals. We maintain unwavering ethical principles and a commitment to transparency in all our transactions, cultivating a sense and assurance. With a wealth of industry experience, we have earned our reputation as a reliable ally in the real estate arena.
                   
                </p>
            </div>
        </div>
        <div id="mission" class="about-panel about-page-padding row-rev background-focused-image">
            <div class="about-img">
                <div class="image-wrapper">
                    <img src="<?php echo SITE_PATH?>/images/mission.webp">
                </div>
            </div>
            <div class="about-content">
                <h3>Our Mission</h3>
                <p class="p-first font-cormorant-garamond-decent-stylist" style="font-size:18px">
                    At ARS LANDBASE, our mission is to provide our clients best-in- class service, expert recommendation and inventive  ideas that turns their dreams of real estate aspiration into reality. We upholds values of transparency, honesty and a focus on our clients need.
                    <br>
                    <br>
                    As real estate professional our goal is not just to assist in property transaction but to create lasting relationship that built on trust and exceptional services. We create value beyond real estate. Our priority is to provide state of the art customer service and convenience that is second to none. 
                    <br>
                    <br>
                    Our mission is to empower our team to deliver the best service for our clients and also empower our clients to reach their real estate goals.  We will succeed because we will not let our clients fail.
                </p>
            </div>
        </div>
        <div id="vision" class="about-panel about-page-padding"style="background:#f3faff">
            <div class="about-img">
                <div class="image-wrapper">
                    <img src="<?php echo SITE_PATH?>/images/vision.jpg">
                </div>
            </div>
            <div class="about-content">
                <h3>Our Vision</h3>
                <p class="p-first font-cormorant-garamond-decent-stylist" style="font-size:18px">
                    To imagine a future where ARS Landbase stands as the cornerstone of innovation and excellence in the real estate industry. We shape the future of how you work, live and play. Through exceptional services, hospitality, amenities and technology, we offer an advanced atmosphere of well being.
                    <br>
                    <br>
                    We imagine a world where every real estate transaction transforms into smooth expedition for that we will guide you through the process every step of the way so you are supported and  achieved your desired outcome.
                    <br>
                    <br>
                    Our vision is to foster lasting relationship with our clients where trust, transparency and unwavering dedication leads the way. In order to achieve all that we work together as a team for the benefits of our clients.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    <?php
    if(isset($section)){
    ?>
        window.location.href = "#<?php echo $section?>";
    <?php
    }
    ?>
</script>

<?php require_once('./assets/footer.php')?>
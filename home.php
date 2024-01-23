<?php 
require_once('./assets/header.php');
require_once('./assets/db_connect.php');
$quickSql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id JOIN quick ON properties.property_id = quick.property_id ORDER BY properties.property_id DESC";
$quickRes = mysqli_query($conn, $quickSql);

$exclSql = "SELECT properties.title, properties.image_url, cities.city_name FROM properties JOIN cities ON properties.city_id = cities.city_id JOIN exclusive ON properties.property_id = exclusive.property_id ORDER BY properties.property_id DESC";
$exclRes = mysqli_query($conn, $exclSql);
?>
<style>
    .banner-img .owl-item img{
        width:unset;
        min-width:100%;
    }
</style>
<div class="container col">
    <div class="banner container">
        <div id="banners"class="banner-img owl-carousel owl-theme">
            <div class="item" style="height:100%">
                <img src="<?php echo SITE_PATH?>/images/gurugram2.jpg" style="height:100%;min-height:800px;max-height:100vh">
            </div>
            <div class="item" style="height:100%">
                <img src="<?php echo SITE_PATH?>/images/gurugram4.jpg" style="height:100%;min-height:800px;max-height:100vh">
            </div>
        </div>
        <!--<video autoplay="" muted="" playsinline="" loop="" class="banner-img">-->
        <!--    <source src="<?php echo SITE_PATH?>/banner/banner_home.mp4" type="video/mp4">-->
        <!--</video>-->
        <div class="banner-cover container">
            <p class="font-cormorant-garamond-decent-stylist banner-head-tag" style="">Authentic  <span stlye="font-size:100px;color:#0a324c">.</span> Reliable  <span stlye="font-size:100px;color:#0a324c">.</span> Supportive  <span stlye="font-size:100px;color:#0a324c">.</span>
            </p>
            <p class="font-cormorant-garamond-decent-stylist banner-bottom-tag" style="">
            Exceptional Outreach for your remarkable outcomes
            </p>
            <!--             
            <div class="box-white row" >
                <select name="type" id="type_search" class="bannerer-box-input mobile-hide">
                    <option value="all" selected>All Types</option>
                    <option value="sco">SCO</option>
                    <option value="commercial">Commercial</option>
                    <option value="residential">Residential</option>
                </select>
                <input type="text" id="area_search" class="banner-box-input" placeholder="Area / Location"> -->
                <!--<select name="type" id="" class="banner-box-input mobile-hide">-->
                <!--    <option value="" selected>Price Range</option>-->
                <!--    <option value="">Min Price</option>-->
                <!--    <option value="">Max Price</option>-->
                <!--</select>-->
                <!-- <button class="banner-btn" onclick="show_properties()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="header-icon-path" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    <div id="btn-text">
                        Submit
                    </div>
                </button>
            </div> -->
        </div>
    </div>
    <div class="container col">
        
        <div class="container col w-100  parallax background-focused-image pb-90">
            <h2 class="big-heading" style="margin-top:20px"><span class="font-highlight">Quick</span>&nbsp;<span class="font-heading">Information</span></h2>
            <img src="<?php echo SITE_PATH."/images/line.png"?>" style="width: 300px;max-width: 90%;"/>
            <div class="container col">
                <div class="row col-sm center-flex">
                    <div class="row">
                        <button class="btn btn-select" id="btn-residential" onclick="viewProperties('residential')">Residential</button>
                        <button class="btn btn-select" id="btn-commercial" onclick="viewProperties('commercial')">Commercial</button>
                    </div>
                    <button class="btn btn-select" id="btn-sco" onclick="viewProperties('sco')">SCO</button>
                </div>
                <div class="cards w-85">
                    <div id="quick-info" class="w-100 grid-3-lg grid-2-md grid-1-sm">
                    </div>
                </div>        
            </div>   
        </div>
        <div id="informative-properties">
            <?php
            while($quick = mysqli_fetch_array($quickRes)){
            ?>
                <div class="<?php echo strtolower($quick['service_name'])?>">
                    <div class="cards_item">
                        <a href="#" class="card">
                            <div class="card_image">
                                <span class="call-btn" onclick="call()">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                </span>
                                <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $quick['image_url']?>" class="card-img-top" alt="..." loading="lazy" alt="" srcset="">
                            </div>
                            <div class="card_content">
                                <h3 class="card_title"><?php echo $quick['title']?></h3>
                                <div class="card_text">
                                    <ul class="property-details">
                                        <li class="property-type">
                                            <span class="property-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                            </span>
                                            <span>By <?php echo $quick['developer_name']?></span>
                                        </li>
                                        <?php
                                        if($quick['area'] != ''){
                                        ?>
                                        <li class="property-area">
                                            <span class="property-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M64 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16h80V400c0-26.5 21.5-48 48-48s48 21.5 48 48v64h80c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64zM0 64C0 28.7 28.7 0 64 0H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm88 40c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V104zM232 88h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V104c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V232zm144-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V232c0-8.8 7.2-16 16-16z"/></svg>
                                            </span>
                                            <span><?php echo $quick['area']?></span>
                                        </li>
                                        <?php } ?>
                                        <?php
                                        if($quick['city_name'] != ''){
                                        ?>
                                        <li class="property-location">
                                            <span class="property-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                            </span>
                                            <span><?php if($quick['address'] != '' && $quick['address'] != "--"){echo $quick['address'].", ";}?>
                                                <?php echo $quick['city_name']?>
                                            </span>
                                        </li>
                                        <?php } ?>
                                        <?php
                                        if($quick['price'] != ''){
                                        ?>
                                        <li class="property-price">
                                            <div class="row sb w-100 border-top">
                                                <div class="rowi">
                                                    <span class="property-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>
                                                    </span>
                                                    <span><?php echo $quick['price']?></span>
                                                </div>
                                                <div class="rowi">
                                                    <span style="margin-top:0" class="abt-btn">View Details</span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>     
        
        <h2 class="big-heading mbt-50"><span class="font-highlight">Exclusive</span>&nbsp;<span class="font-heading">Properties</span></h2>
        <div class="container  pb-90">
            <div class="cards w-85 center container col">
                <div class="row w-100 center col-normal-sm">
                    <?php
                    $i = 0;
                    while($i<3){
                        $excl = mysqli_fetch_array($exclRes);
                    ?>
                        <div class="cards_item">
                            <a href="#" class="small_card">
                                <div class="small_card_image">
                                    <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $excl['image_url']?>" class="small_card-img-top" alt="..." loading="lazy" alt="" srcset="">
                                </div>
                                <div class="small_card_content">
                                    <h3 class="small_card_title"><?php echo $excl['title']?></h3>
                                    <p class="small_card_text">
                                    <ul class="property-details">
                                            <li class="property-location">
                                                <span class="property-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="0.7em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                                </span>
                                                <span style="font-weight:bold"><?php echo $excl['city_name']?></span>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="row w-66 center col-normal-sm">
                <?php
                    while($i<5){
                        $excl = mysqli_fetch_array($exclRes);
                    ?>
                        <div class="cards_item">
                            <a href="#" class="small_card">
                                <div class="small_card_image">
                                    <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $excl['image_url']?>" class="small_card-img-top" alt="..." loading="lazy" alt="" srcset="">
                                </div>
                                <div class="small_card_content">
                                    <h3 class="small_card_title"><?php echo $excl['title']?></h3>
                                    <p class="small_card_text">
                                    <ul class="property-details">
                                            <li class="property-location">
                                                <span class="property-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="0.7em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                                </span>
                                                <span style="font-weight:bold"><?php echo $excl['city_name']?></span>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>        
        </div>        
        
        <div class="parallax background-world-image w-100 container col p-30 pb-90">
            <h3 class="big-heading mbt-50"><span class="font-highlight">Why You</span>&nbsp;<span class="font-heading">Chose Us ?</span></h3>
            <div class="grid-2-lg grid-1-md w-85" style="align-items:center">
                <div class="image-wrapper">
                    <img src="<?php echo SITE_PATH?>/images/why-us.jpg" alt="Why Chose Us">
                </div>
                <div class="why-us-content font-cormorant-garamond-decent-stylist" style="margin: 20px; text-align:justify">
                    <h4 class="small-heading"><strong>One Word: RESULT</strong></h4>
                    <p class="dark-text p-first" style="font-size:18px">
                       We understand that choosing the right partner in your real estate journey nowadays is crucial. Its important to find a real estate consultant that you can trust. We assure that our years of experience, local knowledge and dedication set us apart allowing us to achieve results that don't just meet but exceed our clients expectations. We are dedicated to our clients and work with each person on an individual basis. It's important that we understands the need and goals of our clients. There are typical "Wish Lists" that client have created of what sort of home they love and what's their price point are. You will be treated as an individual and we will seek out the homes that meets our criteria.                                                                   <br/>                                                   
                       We are there in every step of the way throughout the process of buying and selling the home. We would love to help you to find your "HOME". We ensure that our clients are treated like FAMILY.
                    </p>
                </div>
            </div>
        </div>
        
        <div id="mission" class="about-panel row-rev background-focused-image">
            <div class="about-img">
                <div class="image-wrapper">
                    <img src="<?php echo SITE_PATH?>/images/mission.webp">
                </div>
            </div>
            <div class="about-content">
                <h3 class="h3style">Our Mission</h3>
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
        
        <div class="about-panel background-grey-image parallax">
            <div class="about-img">
                <img src="<?php echo SITE_PATH?>/images/vision.jpg">
            </div>
            <div class="about-content" style="justify-content:center">
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
                

                <div >
                    <!--<a href="about.php" ><button class="abt-btn">READ MORE</button></a>-->
                </div>
            </div>
        </div>
        
        <div class="container col w-100 mbt-50">
            <h2 class="big-heading "><span class="font-highlight">Client</span>&nbsp; <span class="font-heading">Reviews</span></h2>
            <div class="container w-85">
                <div id="client-reviews" class="w-85 owl-carousel owl-theme container">
                    <div class="item">
                        <div class="review-item font-cormorant-garamond-decent-stylist">
                            <div class="review-image">
                                <img src="<?php echo SITE_PATH?>/images/user.png" alt="user">
                            </div>
                            <div class="review">
                                <div class="quotes">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                                </div>
                                <div class="review-content">
                                    <p class="card_title" style="margin-top:80px">Shivanshu Dixit</p>
                                    <p class="card_text">Anish helped us get our first house. Our experience with him was just awesome. Very professional and supportive to our requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-item font-cormorant-garamond-decent-stylist">
                            <div class="review-image">
                                <img src="<?php echo SITE_PATH?>/images/user.png" alt="user">
                            </div>
                            <div class="review">
                                <div class="quotes">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                                </div>
                                <div class="review-content">
                                    <p class="card_title" style="margin-top:80px">Vishal Sharma</p>
                                    <p class="card_text">I had the recent pleasure of collaborating with ARS LANDBASE in the pursuit of my dream home.
                                        <span style="display:none">
                                                    From beginning to end, it was an absolute delight! Throughout our initial conversations and the entire process,
                                                                    ARS LANDBASE exhibited professionalism. They possessed a deep understanding of the local real estate market and consistently ensured that I remained a top priority.<br>
                                                    At every stage of the process, ARS LANDBASE upheld their commitment to excellence..<br>
                                                    Throughout our journey,ARS LANDBASE displayed remarkable patience and a keen understanding of my circumstances. Whether I required more time for research or sought additional information about a specific property, they were accommodating. They went above and beyond, providing me with additional resources and a range of options to consider during my decision-making process.
                                        </span>
                                        <button class="read-more">Read More</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-item font-cormorant-garamond-decent-stylist">
                            <div class="review-image">
                                <img src="<?php echo SITE_PATH?>/images/user.png" alt="user">
                            </div>
                            <div class="review">
                                <div class="quotes">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                                </div>
                                <div class="review-content">
                                    <p class="card_title" style="margin-top:80px">Himanshu Gupta</p>
                                    <p class="card_text">I am  very pleased that I selected ARS LANDBASE  for my real estate needs. Their knowledge 
                                        <span style="display:none">
                                    and experience, coupled with their patient approach, transformed what could have been a stressful experience into a 
                                    smooth and successful one.I enthusiastically endorse them to anyone in search of exceptional real estate services!
                                        </span>
                                        <button class="read-more">Read More</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-item font-cormorant-garamond-decent-stylist">
                            <div class="review-image">
                                <img src="<?php echo SITE_PATH?>/images/user.png" alt="user">
                            </div>
                            <div class="review">
                                <div class="quotes">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                                </div>
                                <div class="review-content">
                                    <p class="card_title" style="margin-top:80px">Ashutosh Gautam</p>
                                    <p class="card_text">I am absolutely delighted with the service provided by ARS LANDBASE during my home purchase. 
                                        <span style="display:none">
                                    The process of buying a home can be quite overwhelming, but their entire team was exceptional at every step.
                                    From identifying potential properties to assisting me in negotiating a favorable contract, they were consistently available and explained how each aspect of the process would unfold. Their deep understanding of the local housing market helped us secure a fantastic deal that exceeded my expectations.I wholeheartedly recommend them to anyone seeking top-notch real estate services!
                                        </span>
                                        <button class="read-more">Read More</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="container col w-100 background-buildings-image pb-90">
            <h2 class="big-heading mbt-50"><span class="font-highlight">Developers</span>&nbsp;<span class="font-heading">- We Work With</span></h2>
            <div class="developers-row">
                <div id="app-developers" class="owl-carousel owl-theme container">
                    <?php
                    $developers = "SELECT * FROM developers";
                    $developers = mysqli_query($conn,$developers);
                    while($developer = mysqli_fetch_array($developers)){
                        $d_id = $developer['developer_id'];
                        if($d_id != 24 && $d_id != 37 && $d_id != 38 && $d_id != 39 && $d_id != 33 && $d_id != 34){
                            
                        ?>
                        
                    <div class="item">
                        <a href = <?php echo SITE_PATH."/properties/developers/".strtolower(urlencoder($developer['developer_name']))?> class="dev-logo-container">
                            <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/<?php echo $developer['developer_logo']?>" alt="<?php echo $developer['developer_name']?>">
                        </a>    
                    
                    </div>
                        
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container col w-100" style="background:#f3faff">
            <h2 class="big-heading" style="margin: 10px 0;"><span class="font-highlight">Connect</span>&nbsp;<span class="font-heading">with us</span></h2>
            <div class="container pb-30">
                <div class="cards grid-3-lg grid-2-md grid-1-sm w-80">
                    <div class="cards_item">
                        <a href="https://wa.me/919999820674" class="card w-100 background-grey-image center-flex">
                            <div class="card_content">
                                <h3 class="card_title">Whatsapp</h3>
                                <p class="card_text">
                                    <ul class="property-details center-flex">
                                        <li class="property-type center-flex">
                                            <div class="property-icon">
                                                <svg style="fill:#52c617"  xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                                            </div>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="cards_item ">
                        <a href="tel:+919999820674" class="card w-100  background-grey-image center-flex">
                            <div class="card_content">
                                <h3 class="card_title">Plan site visit</h3>
                                <p class="card_text">
                                    <ul class="property-details center-flex">
                                        <li class="property-type center-flex">
                                            <div class="property-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 640 512"><path d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1L428.2 68c-18.2-22.8-45.8-36-75-36H171.3c-39.3 0-74.6 23.9-89.1 60.3L40.6 196.4C16.8 205.8 0 228.9 0 256V368c0 17.7 14.3 32 32 32H65.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H385.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32V320c0-65.2-48.8-119-111.8-127zM434.7 368a48 48 0 1 1 90.5 32 48 48 0 1 1 -90.5-32zM160 336a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                            </div>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="cards_item ">
                        <a href="mailto:info@arslandbase.com" class="card w-100 center-flex  background-grey-image">
                            <div class="card_content">
                                <h3 class="card_title">Chat with us</h3>
                                <p class="card_text">
                                    <ul class="property-details center-flex">
                                        <li class="property-type center-flex">
                                            <div class="property-icon">
                                            <svg style="fill:#0b81b9" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                            </div>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once('./assets/footer.php')?>
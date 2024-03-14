<?php require_once('./assets/header.php')?>
<style>
    .contact-form textarea, .contact-form input{
        width:98%;
        margin:10px 1%;
    }
</style>
<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/leasing.jpg" style="width:100%">
        </div>
        <div class="banner-cover container">
            <div class="row center">
                <h1 class="big-heading font-heading uppercase" style="color:#fff;">Leasing</h1>
            </div>
        </div>
    </div>
    <div class="container col parallax background-grey-image">
        <div class="container "  style="padding:60px 0">
            <div class="w-80 grid-1-lg grid-1-md grid-1-sm">
                <div class="contact-form w-100">
                    <!--<h2 class="big-heading mbt-30">Leasing </h2>-->
                    <form class="w-100" action="mail_API/mail.php" method="post">
                        <div class="row w-100">
                            <input type="text" name="name" placeholder="Name*" required/>
                            <input type="email" name="email"  placeholder="Email*" required/>
                        </div>
                        <div class="row w-100">
                            <input type="number" name="mobile" placeholder="Phone Number*" required/>
                            <input type="text" name="looking_for" placeholder="What you are looking for?"/>
                        </div>
                        <input type="text" name="budget" placeholder="Your Budjet"/>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Write to us"></textarea>
                        <input type="submit" name="submit_leasing_form" value="Enquire Now"/>
                    </form>
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
<?php require_once('./assets/header.php')?>
<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/contact.jpg" style="width:100%">
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading uppercase" style="color:#fff;">Contact Us</h1>
            </div>
        </div>
    </div>
    <div style="padding:60px 0;background:#f3faff" class="container col contact">

        <div class="cards grid-3-lg grid-2-md grid-1-sm w-80">
            <div class="cards_item">
                <a href="tel:+919999820674" class="card background-theme w-100 center-flex">
                    <div class="card_content center-flex">
                        <h3 class="card_title">Phone</h3>
                        <p class="card_text">
                            <ul class="property-details center-flex">
                                <li class="property-type center-flex">
                                    <div class="property-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                    </div>
                                </li>
                                <li class="property-type center-flex">
                                    <div><br>+91-99998 20674</div>
                                </li>
                            </ul>
                        </p>
                    </div>
                </a>
            </div>
            <div class="cards_item">
                <a href="mailto:info@arslandbase.com"  class="card background-theme w-100 center-flex">
                    <div class="card_content center-flex">
                        <h3 class="card_title">Email</h3>
                        <p class="card_text">
                            <ul class="property-details center-flex">
                                <li class="property-type center-flex">
                                    <div class="property-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                    </div>
                                </li>
                                <li class="property-type center-flex">
                                    <div class="font-quicksand-decent"><br>info@arslandbase.com</div>
                                </li>
                            </ul>
                        </p>
                    </div>
                </a>
            </div>
            <div class="cards_item">
                <a href="https://maps.app.goo.gl/G8XSuzawRdfSdaLd6" rel="nofollow" class="card background-theme w-100 center-flex">
                    <div class="card_content center-flex">
                        <h3 class="card_title">Address</h3>
                        <p class="card_text">
                            <ul class="property-details center-flex">
                                <li class="property-type center-flex">
                                    <div class="property-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                    </div>
                                </li>
                                <li class="property-type center-flex">
                                    <div>323, 3rd floor Emerald Plaza, Sector - 65, Gurgaon - 122101</div>
                                </li>
                            </ul>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="grid-2-lg grid-1-md grid-1-sm w-80" style="margin-top: 40px;">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.443244380036!2d77.06313993008116!3d28.405879431931822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2268827039ed%3A0xa45dde6b8930b6f8!2sEMERALD%20PLAZA%2C%20Sector%2065%2C%20Gurugram%2C%20Haryana%20122102!5e0!3m2!1sen!2sin!4v1696534300097!5m2!1sen!2sin" style="border:0; width:95%; height:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form background-grey-image">
                <h3 class="small-heading">Write to us</h3>
                <form action="mail_API/mail.php" method="post">
                    <input type="text" name="name" placeholder="Name*" required/>
                    <input type="email" name="email" placeholder="Email*" required/>
                    <input type="number" name="mobile" placeholder="Phone Number*" required/>
                    <input type="text" name="city" placeholder="City (Optional)"/>
                    <input type="hidden" name="req_page" value="contact"/>
                    <input type="submit" name="submit_contact_form" value="Contact Now"/>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('./assets/footer.php')?>
<?php 
require_once('./assets/header.php');
require_once('./assets/db_connect.php');
$quickSql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id JOIN quick ON properties.property_id = quick.property_id ORDER BY properties.property_id DESC";
$quickRes = mysqli_query($conn, $quickSql);

$exclSql = "SELECT properties.title, properties.image_url, cities.city_name FROM properties JOIN cities ON properties.city_id = cities.city_id JOIN exclusive ON properties.property_id = exclusive.property_id ORDER BY properties.property_id DESC";
$exclRes = mysqli_query($conn, $exclSql);
?>

<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/career.jpg" style="width:100%">
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading" style="color:#fff;">Career</h1>
            </div>
        </div>
    </div>
    <div class="container col"style="margin-bottom:20px;margin-top:20px;">
        <h2 class="big-heading"><span class="font-highlight">Careers At </span>&nbsp;<span class="font-heading">ARS LANDBASE</span></h2>
        <img src="<?php echo SITE_PATH."/images/line.png"?>" style="width: 300px;max-width: 90%;"/>
        <div class="why-us-content font-cormorant-garamond-decent-stylist" style="text-align:center">
            <p class="dark-text" style="font-size:18px">
                Join Gurugram's growing consultant team.
            </p>
            <div class="container col" style="margin-top:50px">
                <div class="row col-sm center-flex">
                    <div class="row">
                        <button class="btn btn-select" onclick="show_career()">Apply Now</button>
                        <a href="/contact" class="btn btn-select">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="big-heading" style="margin-top:50px"><span class="font-highlight">Why</span>&nbsp;<span class="font-heading">ARS LANDBASE</span></h2>
        <img src="<?php echo SITE_PATH."/images/line.png"?>" style="width: 300px;max-width: 90%;"/>
        <div class="why-us-content font-cormorant-garamond-decent-stylist" style="text-align:center">
            <p class="dark-text" style="font-size:18px">
                We are Gurugram's mostprominent and leading consultant company.   
            </p>
        </div>
    </div>
</div>
<style>
    
    .career-overlay{
        position:fixed;
        top:0;
        left:0;
        background:#0000008f;
        width:100%;
        height:100vh;
        z-index:999;
        display:none;
        align-items:center;
        justify-content:center;
        
    }
    .contact-overlay{
        width:500px;
    }
    .contact-form{
        position : relative;
    }
    .close-btn{
        position : absolute;
        top:20px;
        right:10px;
        cursor:pointer;
    }
</style>

<div id="career-form" class="career-overlay">
    <div class="contact-overlay">
        <div class="contact-form background-grey-image font-cormorant-garamond-decent-stylist">
            <span class="close-btn" onclick="hide_career()">X</span>
            <h3 class="small-heading" style="font-weight:bold">Looking for a career change ?</h3>
            
            <p class="dark-text" style="font-size:18px">
                Submit your CV, we will contact you as soon as we have relevant opening.  
            </p>
            <form action="mail_API/mail.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Name*" required/>
                <input type="email" name="email" placeholder="Email*" required/>
                <input type="number" name="mobile" placeholder="Mobile*" required/>
                <div class="row w-100" style = "align-items:center">
                    <label for="resume"style="width:30%">Upload your resume</label><input type="file" name="resume" value="Upload Resume" style="width:70%" accept="image/jpeg,image/png,application/pdf" required/>
                </div>
                <input type="hidden" name="req_page" value="careers"/>
                <div class="row" style = "align-items:center">
                    <input type="checkbox" id="tnc" name="tnc" value="Accepted" style="width:30px" checked><label for="tnc">By submitting the form you agree our Terms & Conditions and Privacy Policy.</label>
                </div>
                <input type="submit" name="submit_career_form" value="Submit"/>
            </form>
        </div>
    </div>
</div>

<?php require_once('./assets/footer.php')?>
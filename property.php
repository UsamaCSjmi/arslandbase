<?php 
require_once('./assets/header.php');
require_once('./assets/db_connect.php');
$property_name = urldecoder($property_name);
$sql = "SELECT * FROM properties WHERE title = '$property_name'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "Yes";
    $result = mysqli_fetch_array($result);
}
else{
    echo "not";
    ?>
    <script>
        window.location.href = "<?php echo SITE_PATH?>";
    </script>
    <?php
}
?>
<style>
    * {
        font-family: var(--font-cinzel-stylist);
    }
</style>
<div style="margin-top:50px" class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $result['image_url']?>" style="width:100%">
        </div>
        <div class="banner-cover container">
            <div class="quick-call-property">
                <button type="button" onclick="showQuickEnq()">
                    <span class="quick-call-property-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                        </svg>
                    </span>
                    <span class="changing-color">Get a Quick Call</span>
                </button>
            </div>
            <div class="brochure">
                <button>
                    <a href="<?php echo SITE_PATH ?>/brochures/<?php if(isset($result['brochure']) && $result['brochure']!=""){echo $result['brochure'];}?>" target="_blank">Download Brochure</a>
                </button>
            </div>
        </div>

    </div>
    <div id="overview-container">
        <h1 class="big-heading" style="margin-top:20px"><?php echo $property_name?></h1>
        <div class="property-content">
            <?php
            if($result['overview']!=""){
                ?>
                <h2 class="description-heading">Overview</h2>
                <div class="description-content shown">
                    <p><?php echo $result['overview']?></p>
                </div>
                <?php
            }
            ?>
        </div>

    </div>

    <div class="container col property-page-details">
        <div class="propety-nav">
            <nav>
                <ul>
                    <li>
                        <a href="#overview" class="fp-nav active">Overview</a>
                    </li>
                    <li>
                        <a href="#floor-plan" class="fp-nav">Floor Plan</a>
                    </li>
                    <li>
                        <a href="#area-pricing" class="fp-nav">Area/Pricing</a>
                    </li>
                    <?php 
                   if($result['service_id']==1){
                    ?>
                    <li>
                        <a href="#amenities" class="fp-nav">Amenities</a>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="#" onclick="showQuickEnq()">Quick Enquiry</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div id="overview" class="overview-box">
            <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $result['image_url']?>" alt="<?php echo $result['title']?>">
            <div class="overview-content">
                <h3 class="">Overview</h3>
                <p class="text-grey font-small mt-30">Area Range</p>
                <p class="text-white"><?php echo $result['area']?></p>
                <p class="text-grey font-small mt-20">BASE PRICE</p>
                <p class="text-white"><?php echo $result['price']?></p>
                <p class="text-grey font-small mt-20">CURRENT STATUS</p>
                <p class="text-white"><?php echo $result['tagline']?></p>
            </div>
        </div>
        <div class="container col">
            <div class="grid-1-lg grid-1-md grid-1-sm w-100 p-30">
                <div class="property-info">
                    <div id="floor-plan" class="property-content">
                        <div class="property-content-header">Floor Plan</div>
                        <div class="floor-plans-buttons">
                                    <?php 
                                    $sql = "SELECT * FROM area WHERE property_id = ".$result['property_id'];
                                    $areas = mysqli_query($conn, $sql);
                                    $i=true;
                                    while($area = mysqli_fetch_array($areas)){
                                        if(isset($area['floor_plan_image']) && $area['floor_plan_image']!=""){
                                        ?>
                                        <button onclick="changeFloorPlan('<?php echo $area['floor_plan_image']?>',this)" class="fp-btn <?php if($i===true){echo "active";$i=$area['floor_plan_image'];}?>"><?php echo $area['type']?></button>
                                        <?php
                                        }
                                    }
                                    ?>
                        </div>
                        <div class="image-wrapper">
                            <?php
                            if($i != "" && $i != "1"){
                                ?>
                            <img id="floor-plan-image" src="<?php echo SITE_PATH ?>/images/floor-plans/<?php echo $i;?>" alt="Property">
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="area-pricing" class="property-content">
                        <div class="property-content-header">Area / Pricing</div>

                        <div class="property-content-table-wrapper">
                            <table>
                                <tbody>
                                    <?php 
                                    $sql = "SELECT * FROM area WHERE property_id = ".$result['property_id'];
                                    $areas = mysqli_query($conn, $sql);
                                    while($area = mysqli_fetch_array($areas)){
                                        if(isset($area['area']) && $area['area']!=""){
                                        ?>
                                        <tr>
                                            <td><?php echo $area['type']?></td>
                                            <td><?php echo $area['area']?></td>
                                        </tr>
                                        <?php
                                        }
                                    } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   <?php 
                   if($result['service_id']==1){
                    ?>
                    <div id="amenities" class="property-content">
                        <div class="property-content-header">Amenities</div>
                        <p style="font-family:var(--font-cormorant-garamond-decent-stylist); font-size:20px;font-weight:500; margin-top:20px;color:#959595"><?php echo $result['title']?> presents an exclusive opportunity to own a stunning home that offers all kinds of amenities and facilities.</p>
                        <div class="amenities-container">
                            <?php
                            $sql = "SELECT a.* FROM property_amenities pa JOIN all_amenities a ON pa.amenity_id=a.id WHERE pa.property_id = ".$result['property_id'];
                            $amenities = mysqli_query($conn,$sql);
                            while($amenity = mysqli_fetch_array($amenities)){
                                // echo $amenity['name']."->".$amenity['image']."<br>";
                                ?>
                                <div class="amenity">
                                    <p>
                                        <?php echo $amenity['name']?>
                                        <img src="<?php echo SITE_PATH?>/images/amenities/<?php echo $amenity['image']?>" alt="<?php echo $amenity['name']?>">
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- <div class="contact-wrapper p-20">
                    <div class="sticky-top">
                        <div class="contact-form">
                            <h3 class="small-heading">Contact Us</h3>
                            <form action="#" method="post">
                                <input type="text" placeholder="Name*" required />
                                <input type="email" placeholder="Email*" required />
                                <input type="phone" placeholder="Phone Number*" required />
                                <input type="text" placeholder="City (Optional)" />
                                <input type="submit" value="Contact Now" />
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script>
    let links = document.querySelectorAll(".fp-nav");
    links.forEach(link => {
        link.addEventListener("click",(e)=>{
            e.target.classList.add("active");
            links.forEach(l => {
                if(l!=e.target){
                    l.classList.remove("active");
                }
            })
        })
    })
    function changeFloorPlan(url,e){
        let image = document.getElementById('floor-plan-image');
        let buttons = document.getElementsByClassName('fp-btn');
        e = e || window.event;
        e.classList.add("active");
        for(let i = 0 ; i < buttons.length; i++){
            if(buttons[i]!=e)
            buttons[i].classList.remove("active");
        }
        image.src="<?php echo SITE_PATH ?>/images/floor-plans/"+url;
    }
</script>
<?php require_once('./assets/footer.php') ?>
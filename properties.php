<?php 
require_once('./assets/header.php');
require_once('./assets/db_connect.php');
if($table == "services"){
    $column = "service_name";
}
else if($table == "cities"){
    $column = "city_name";
}
else if($table == "developers"){
    $column = "developer_name";
    $filter = urldecoder($filter);
}
$banner_image_name = strtolower($filter);
if($filter == "all"){
    $filter = ucfirst($filter);
    $banner_image_name = "residential";
    $sql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id ORDER BY properties.developer_id ASC, properties.property_id DESC";

    if(isset($area) && $area!=""){
        $area = str_replace("-"," ",$area);
        $sql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id WHERE properties.address LIKE '%$area%' ORDER BY properties.developer_id ASC, properties.property_id DESC";
    }    
}
else{
    $filter = ucfirst($filter);
    $sql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id WHERE `$table`.`$column` = '$filter' ORDER BY properties.developer_id ASC, properties.property_id DESC";
    
    if(isset($area) && $area!=""){
        $area = str_replace("-"," ",$area);
        $sql = "SELECT properties.title, properties.image_url, services.service_name, properties.tagline, properties.address, developers.developer_name, cities.city_name, properties.area,properties.price FROM properties JOIN services ON properties.service_id = services.service_id JOIN developers ON developers.developer_id = properties.developer_id JOIN cities ON properties.city_id = cities.city_id WHERE `$table`.`$column` = '$filter' AND properties.address LIKE '%$area%' ORDER BY properties.developer_id ASC, properties.property_id DESC";
    }
}

$res = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($res);

?>

<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <?php
            if($table != "developers"){
                ?>
            <img src="<?php echo SITE_PATH?>/images/<?php echo $banner_image_name?>.jpg" style="width:100%">
                
                <?php
            }
            else{
                ?>
            <!-- <img src="<?php echo SITE_PATH?>/images/developers.avif" style="width:100%"> -->
            <img src="<?php echo SITE_PATH?>/images/properties/uploads/Empire.jpg" style="width:100%">
                <?php
            }
            ?>
            
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading" style="color:#fff;"><?php echo $filter; if(isset($area)&& $area!=""){ echo " Properties in ".$area;}?></h1>
            </div>
        </div>
    </div>
    
<!--<div style="margin-top:85px" class="container col">-->
    <div style="margin:60px 0" class="container col pad-prop">
        
        <!--<h2 class="big-heading mbt-50 font-heading"></h2>-->
        <div class="container" style="border-top: 1px solid #00000040;padding-top: 45px;">
            <?php
            if($num_rows > 0){
                ?>
            <div class="cards w-100 grid-3-lg grid-2-md grid-1-sm">
            <?php
            while($quick = mysqli_fetch_array($res)){
            ?>
                    <div class="cards_item">
                        <a href="#" class="card">
                            <div class="card_image">
                                <img src="<?php echo SITE_PATH ?>/images/properties/uploads/<?php echo $quick['image_url']?>" class="card-img-top" alt="..." loading="lazy" alt="" srcset="">
                                <span class="call-btn" onclick="call()">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                </span>
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
            <?php
            }
            ?>
            </div>
                <?php
            }
            else{
                ?>
                <p class="font-cormorant-garamond-decent-stylist small-heading">Properties Not Found !</p>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php require_once('./assets/footer.php')?>
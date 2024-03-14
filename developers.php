<?php 
require_once('./assets/header.php');
require_once('./assets/db_connect.php');
$sql = "SELECT * FROM developers";
$res = mysqli_query($conn,$sql);
?>
<div class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/properties/uploads/Empire.jpg" style="width:100%">
            <!-- <img src="<?php echo SITE_PATH?>/images/developers.avif" style="width:100%"> -->
        </div>
        <div class="banner-cover container">
            <div class="row center">
                <h1 class="big-heading font-heading uppercase" style="color:#fff;">Our Developers</h1>
            </div>
        </div>
    </div>
    <div style="margin:60px 0" class="container col">
        <!--<h2 class="big-heading mbt-50"></h2>-->
        <div class="container">
            <div class="cards w-100 grid-4-lg grid-3-md grid-2-sm">
            <?php
            while($dev = mysqli_fetch_array($res)){
            ?>

                <div class="cards_item">
                    <div  class="card">
                    <!--<a href = <?php echo SITE_PATH."/properties/developers/".strtolower($dev['developer_name'])?> class="card">-->
                        <div class="card_image"style="background:none">
                            <img src="<?php echo SITE_PATH ?>/images/developers/<?php echo $dev['developer_logo']?>" class="card-img-top" alt="..." loading="lazy" style="width:100%" srcset="">
                        </div>
                        <div class="card_content">
                            <h3 class="card_title"><?php echo $dev['developer_name']?></h3>
                        </div>
                    <!--</a>-->
                    </div>
                </div>

            <?php
            }
            ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./assets/footer.php')?>
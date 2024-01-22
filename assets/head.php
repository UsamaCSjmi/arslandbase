<?php //require_once('./assets/config.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="google-site-verification" content="AAGWrle0ipKvLuoZUt1lQZVhVbxiOSm3VHHPe0oqXgc" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PQNTHQCN');</script>
    <!-- End Google Tag Manager -->
    <link rel="icon" href="<?php echo SITE_PATH;?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/styles/style.css?v=<?php echo time()?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#0a324c" />
    <meta name="description" content="<?php if(isset($description[$current_page])) { echo $description[$current_page] ; } else { echo "ARS Landbase"; }?>"/>
    <link rel="apple-touch-icon" href="<?php echo SITE_PATH;?>/images/logo192.png" />
    <link rel="manifest" href="<?php echo SITE_PATH;?>/manifest.json" />
    <title><?php if(isset($title[$current_page])) { echo $title[$current_page] ; } else { echo "ARS Landbase"; }?></title>
    <?php if($current_page === 'home'){?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php } ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQNTHQCN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
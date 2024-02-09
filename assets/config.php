<?php

// Development Settings
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/arslandbase');
define('SITE_PATH','http://localhost/arslandbase');
define('BASE_PATH','/arslandbase');

define('DB_NAME', 'ars');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','https://arslandbase.com');
// define('BASE_PATH','');

// define('DB_NAME', 'u194879868_ars');
// define('DB_USER', 'u194879868_ars');
// define('DB_PASSWORD', 'c~#mz#3O');
// define('DB_HOST', 'localhost');
function urlencoder($str){
    $str = str_replace(" ","-",$str);
    return $str;
}
function urldecoder($str){
    $str = str_replace("-"," ",$str);
    return $str;
}

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "arslandbase" || $current_page == "index" ||$current_page == ""){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);

$description = array(
    "home" => "ARS Landbase offers expert real estate solutions, from property acquisitions to sales, purchase, and rent, leasing Discover our comprehensive offerings today.",
    "about" => "Discover ARS Landbase, a global leader in real estate solutions, offering unparalleled expertise in property development, investment, and consultancy services.",
    "properties" => "Properties",
    "property" => "Property",
    "residential" => "Explore the residential properties with ARS Landbase, offering exceptional real estate options for commercial property for sale and purchase residential property rent.",
    "commercial" => "The prime commercial real estate opportunities with ARS Landbase's expert guidance. commercial property for sale and purchase, commercial property for rent",
    "sco" => "Explore the comprehensive SCO property solutions offered by ARS Landbase, empowering real estate professionals with innovative strategies for success.",
    "Leasing" => "Explore seamless property leasing solutions with ARS Landbase. Our expert team ensures a smooth leasing process for residential and commercial spaces.",
    "delhi" => "Best Commercial properties in Gurugram and Delhi with ARS Landbase. Find premium office spaces, retail outlets, and more in  prime locations for your business ",
    "gurugram" => "ARS Landbase offers residential properties in Gurgaon and Delhi. Discover luxurious homes, apartments, and villas for sale and purchase in prime locations.",
    "contact" => "Connect with ARS Landbase for professional guidance and support in your real estate endeavors. Our experienced team offers the best solutions and expert advice",
    "careers" => "Career paths and rewarding Growing at ARS Landbase. Explore opportunities in our innovative and dynamic workplace for professional growth and excellence."
);
$title = array(
    "home" => "Your Trusted Real Estate Services Provider | ARS Landbase",
    "about" => "ARS Landbase: Redefining Real Estate Solutions Worldwide",
    "properties" => "Properties | ARS Landbase",
    "property" => "Property | ARS Landbase",
    "residential" => "Your Dream Home: Residential Properties with ARS Landbase",
    "commercial" => "Explore The Commercial Property Options with ARS Landbase",
    "sco" => "SCO Property Solutions: ARS Landbase for Real Estate Success",
    "Leasing" => "Discover Hassle-Free Property Leasing with ARS Landbase",
    "delhi" => "Prime Commercial Properties in Delhi and Gurugram | ARS Landbase",
    "gurugram" => "Residential Property in Gurgaon | ARS Landbase",
    "contact" => "Contact ARS Landbase for Expert Guidance and Assistance",
    "careers" => "Explore Exciting Career Opportunities with ARS Landbase"
);
?>
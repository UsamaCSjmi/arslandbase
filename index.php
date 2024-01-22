<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);

if($router == '/'){
    include_once('home.php');
}
elseif($router == '/about'){
    include_once('about.php');
}
elseif($router == '/about'){
    $arr = explode('#',$router);
    if(isset($arr[1])){
        $section = $arr[1];
    }
    include_once('about.php');
}
elseif($router == '/properties' || preg_match("/properties\/[a-z]/i",$router)){
    $arr = explode('/',$router);
    if(isset($arr[2])){
        $table = $arr[2];
        $filter = $arr[3];
    }
    if(isset($arr[4])){
        $area = $arr[4];
    }
    include_once('properties.php');
}
elseif($router == '/property'){
    include_once('property.php');
}
elseif($router == '/contact'){
    include_once('contact.php');
}
elseif($router == '/people'){
    include_once('people.php');
}
elseif($router == '/news'){
    include_once('news.php');
}
elseif($router == '/Leasing'){
    include_once('leasing.php');
}
elseif($router == '/developers'){
    include_once('developers.php');
}
elseif($router == '/careers'){
    include_once('careers.php');
}
elseif($router == '/terms-and-conditions'){
    include_once('terms-and-conditions.php');
}
elseif($router == '/faq'){
    include_once('faq.php');
}
elseif($router == '/privacy-policy'){
    include_once('privacy-policy.php');
}
else{
    include_once('404.php');
}

// echo $router;
?>
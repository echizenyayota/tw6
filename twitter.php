<?php
// tw_more4_3 メディアクエリによるレスポンシブデザイン対応

$consumerKey = "";
$consumerSecret = "";
$accessToken = "";
$accessTokenSecret = "";

$twObj = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);

$keywords = "京阪電車 -rt -bot";

$param = array(
    "q"=>$keywords,                  // keyword
    "lang"=>"ja",                   // language
    "count"=>200,                   // number of tweets
    // "result_type"=>"recent",       // result type
    "include_entities"=>true       // entities
);

$json = $twObj->OAuthRequest(
    "https://api.twitter.com/1.1/search/tweets.json",
    "GET",
    $param);

$result = json_decode($json, true);

?>


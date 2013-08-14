
<?php
require("twitteroauth/twitteroauth.php");  
session_start();


if(!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])){  
    // We've got everything we need  
} else {  
    // Something's missing, go back to square 1  
    header('Location: twitter_login.php');  
}  

// TwitterOAuth instance, with two new parameters we got in twitter_login.php  
$twitteroauth = new TwitterOAuth('CcIKBvSg5r52tffzw3BLw', 'gsQOicw91uqOFyKdeWHlaYRS9Brkz4a4wTTCnHhXZw', $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);  
// Let's request the access token  
$access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']); 
// Save it in a session var 
$_SESSION['access_token'] = $access_token; 
// Let's get the user's info 
$user_info = $twitteroauth->get('account/verify_credentials'); 
// Print user's info  
//print_r($user_info); 

if(!empty($_SESSION['username'])){  
    // User is logged in, redirect  
    header('Location: twitter_update.php'); 
} 

$twitteroauth->post('statuses/update', array('status' => 'yea this is indeed a fun twitter extension !'));
?> 





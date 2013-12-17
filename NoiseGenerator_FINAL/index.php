<?php

/*
Ns-aph-o-rism
Web3001 Final

Project by Albert Kim 

Thanks to
Jamie Kosoy
Alex Samuel
Fei Liu
*/

session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');


if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}

$access_token = $_SESSION['access_token'];


$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);


$content = $connection->get('account/verify_credentials');


$connection->post('statuses/update', array('status' => date(DATE_RFC822)));
//$connection->post('statuses/destroy', array('id' => 5437877770));
//$connection->post('friendships/create', array('id' => 9436992));
//$connection->post('friendships/destroy', array('id' => 9436992));

include('html.inc');






<?php 
session_start();
require('config/config.php');
require('model/functions.fn.php');

$userid = getUserid($db, $_GET['name']);
$countmusic = countMusic($db, $userid);

include 'view/_header.php';
include 'view/profile.php';
include 'view/_footer.php';





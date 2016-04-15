<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once( "config.php" );


$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch($action){
    case 'signup':
        signup();
        break;
    default:
        homepage();
}

function signup(){
    echo 'success';
}

function homepage(){
    include('home.php');
}



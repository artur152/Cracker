<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//require_once( "config.php" );

function homepage(){
    include('home.php');
}

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch($action){
    case 'signup':
        signup();
        break;
    case 'search':
        search();
        break;
    default:
        homepage();
}

function signup(){
    echo 'Successfully Registered';
}

function search(){
    echo 'Your Search Results';
}


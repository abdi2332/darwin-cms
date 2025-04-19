<?php

$action = $_GET['action'] ?? $_POST['action'] ?? 'show';

if($action == 'show') {  
include 'view/contact-us.html';
}
else if ($action == 'submit'){
    include 'view/thankyou.html';
}
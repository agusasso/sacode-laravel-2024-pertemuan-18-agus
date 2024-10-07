<?php

require_once('../app/controllers/Controllers.php');
$controllers = new Controllers;

if (isset($_GET['url'])) {
    $url = trim($_GET['url']);
}

// if ($url == 'kontak');





$controllers->index();

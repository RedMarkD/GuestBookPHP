<?php
declare(strict_types=1);
require 'app/model/PostLoader.php';
require 'app/model/Guestbook.php';
require 'app/model/Post.php';
require 'app/controller/Controller.php';

session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

if (isset($_POST["submit"])){
    (new PostLoader)->setUserPost();
    (new PostLoader)->getGuestBook();
}
whatIsHappening();
require 'app/view/view.php';

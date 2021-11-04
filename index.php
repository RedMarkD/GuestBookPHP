<?php
declare(strict_types=1);
session_start();

require 'app/model/Post.php';
require 'app/model/PostLoader.php';
require 'app/model/Guestbook.php';
require 'app/model/Profanity.php';
require 'app/controller/Controller.php';



function whatIsHappening() {
//    echo '<h2>$_GET</h2>';
//    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
//    echo '<h2>$_COOKIE</h2>';
//    var_dump($_COOKIE);
//    echo '<h2>$_SESSION</h2>';
//    var_dump($_SESSION);
}
$load = new PostLoader();
$prof = new Profanity();
//$load->getAllPosts();
if (isset($_POST['submit'])) {

    $safeTitle= htmlspecialchars($_POST['title'],ENT_SUBSTITUTE);
    $safeTitle= $prof->proCheck($safeTitle);
    $safeContent= htmlspecialchars($_POST['content'],ENT_SUBSTITUTE);
    $safeContent= $prof->proCheck($safeContent);
    $safeAuthor= htmlspecialchars($_POST['author'],ENT_SUBSTITUTE);
    $safeAuthor=$prof->proCheck($safeAuthor);

$post = new Post($safeTitle, date('D, d M Y H:i:s'), $safeContent, $safeAuthor);
$array= [$post->getTitle(),$post->getDate(), $post->getContent(),$post->getAuthor()];
$load->appendPost($array);
}
whatIsHappening();

require 'app/view/view.php';

$load->getAllPosts();


<?php
require "../view/view.php";
require "../model/Post.php";
require "../model/PostLoader.php";
require "../model/Guestbook.php";

class Controller
{
    private object $postUser;
    private string $date;

    $date = new Date;

    public function __construct(){
        $postUser = [$_POST("title"), $_POST("content"), $_POST("author"), $date];

    }
    public function addPost(){
        $now= file_put_contents(
            "../model/Guestbook.php",
             "posts",
            FILE_APPEND
        );
    }


}
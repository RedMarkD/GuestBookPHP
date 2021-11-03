<?php
declare(strict_types=1);


class PostLoader
//what does this do.
//postloader is DataController
//this should both get the data from the view,
//immediately write it into the Guestbook.
//then have a function to get the data from the guestbook
//to then send to view.
{
    private object $post;

    public function __construct(){
        $this->post = new Post($_POST["title"], date('D, d M Y H:i:s'),  $_POST["content"], $_POST["author"]);
    }
    public function setUserPost(){
        file_put_contents("file.json", $this->post, FILE_APPEND);
    }
    public function getUserPost(){
        file_get_contents("file.json");
    }
    public function getGuestBook(){
        $read = file_get_contents("file.json");
        $show = json_decode($read);
        echo $show;
    }
}
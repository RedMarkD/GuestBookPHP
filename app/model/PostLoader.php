<?php


require "Post.php";
require "Guestbook.php";


class PostLoader
//what does this do.
//postloader is DataController
//this should both get the data from the view,
//immediately write it into the Guestbook.
//then have a function to get the data from the guestbook
//to then send to view.
{
    private Post $post;
    private Guestbook $allposts;

    public function __construct($post){
        $this->post = $post;
    }
    public function getUserPost(){
        $this->post = new Post;


        if (isset( $_POST['submit'])){
            echo "posts" ;
        }
        else {
            $posts = [];
            foreach ($posts as $this->post) {
                array_push($posts, $this->post);
            }
    }

    }
    public function setGuestBook(){
        array_push($this->setPost(), $this->post);
    }

    //load posts
    //save posts
}
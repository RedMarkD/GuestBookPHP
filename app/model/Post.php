<?php

class Post
//what does this do.
//This should be the definition of what a post is specifically
//containing all the elements and then be able to be used by the controller
//to see what information the user posted and how we want to make it into an object.
//
{
    private Post $post

    public function __construct($post, $title) {
        $this->post = new Post();

    }
    public function getPost(){
        return $this->post;
    }
    public function getTitle()
    {
      return $this->title;
    }
}
<?php
require "PostLoader.php";

class Guestbook
//what does this do.
//contains all posts previously posted.
//should be used by the PostLoader to get the array of all posts
// to then select the last twenty and post them


{
    private Post $post;
    private array $allPosts;
        /**
     * @return array
     */

    public function __construct(){
        $this->post = new Post();
        $this->allPosts = $allPosts;
    }
    public function getGuestbook(): array
    {
        return $this->allPosts;
    }
    public function getPost(){
        $this->post;
    }
}
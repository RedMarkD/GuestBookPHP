<?php
declare(strict_types=1);

class Guestbook
//what does this do.
//contains all posts previously posted.
//should be used by the PostLoader to get the array of all posts
// to then select the last twenty and post them
{
    private string $guestbook;

    public function __construct(){
        $this->guestbook = file_get_contents("file.json");
    }
    public function getGuestbook(): string
    {
        return $this->guestbook;
    }
    public function getPost(){

    }
}
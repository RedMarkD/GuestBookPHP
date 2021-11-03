<?php
declare(strict_types=1);

//concept post, should always contain title,date, content, author.
class Post
//what does this do.
//This should be the definition of what a post is specifically
//containing all the elements and then be able to be used by the controller
//to see what information the user posted and how we want to make it into an object.
//
{
    private string $title;
    private string $date;
    private string $content;
    private string $author;

    public function __construct(string $title, string $date, string $content, string $author) {
            $this->title= $title;
            $this->date = $date;
            $this->content = $content;
            $this->author = $author;
    }
}
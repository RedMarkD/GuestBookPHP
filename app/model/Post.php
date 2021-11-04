<?php
declare(strict_types=1);

//concept post, should always contain title,date, content, author.
class Post{
    private string $title;
    private string $date;
    private string $content;
    private string $author;
    private array $post;

    public function __construct($title, $date, $content, $author){
        $this->title = $title;
        $this->date = $date;
        $this->content =$content;
        $this->author = $author;
        //$this->post = [$title, $date, $content, $author];
    }
    /*public function getPost(): array
    {
        return $this->post;
    }*/
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getDate(): string
    {
        return $this->date;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
}
//what does this do.
//This should be the definition of what a post is specifically post is defined and constructed;
// now using this definition i want to set a new post in guestbook using a postloader.
//containing all the elements and then be able to be used by the controller
//to see what information the user posted and how we want to make it into an object.
//
/*class Post{
    private string $title;
    private string $date;
    private string $content;
    private string $author;
    private array $post;

    public function __construct($title, $date, $content, $author){
        $this->post = [$title, $date, $content, $author];
    }
}*/
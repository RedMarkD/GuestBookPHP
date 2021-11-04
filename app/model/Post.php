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
    }

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

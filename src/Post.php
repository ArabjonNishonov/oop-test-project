<?php

//namespace Src\Post;

class Post{

    public static $pdo;
    public $title;
    public $content;
    public $createdAt;

    public $id;

//    public function __construct($title, $content, $createdAt, $id){
//        $this->title = $title;
//        $this->content = $content;
//        $this->createdAt = $createdAt;
//        $this->id = $id;
//    }

    public static function getAll(){
        $smtp = self::$pdo->prepare("SELECT * FROM posts");
        $smtp->setFetchMode(PDO::FETCH_CLASS, "Post");
        $smtp->execute();
        $posts = $smtp->fetchAll();
        return $posts;
    }
}
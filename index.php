<?php

require_once 'bootsrap.php';

$posts = Post::getAll();

//var_dump($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog OOP da</title>
</head>

<body>

<div>
    <h1>
        Php OOP Blog
    </h1>

    <ol>
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="post.php?id=<?=$post->id?>"><h4><?= $post->id . " - ". $post->title ?></h4></a>
                <p><?= $post->content ?></p>
            </li>
        <?php endforeach;?>
    </ol>
</div>

</body>
</html>

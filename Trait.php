<?php

trait Sharable{ // i) we define our trait using keyword trait

public function share($item){ // ii) we define public function share
    return $item; // iii) share returns $item as the value
    }
}

class Post{ // iv) we define class Post
    use Sharable; // v)class Post will use the trait Sharable
}
class Comment{ // vi) we define class Comment
    use Sharable;// vii) class Comment will also also use trait Sharable
}

$post = new Post(); // viii) we create the instance
echo $post->share('This is share post');

echo '<br>';

$comment = new Comment();
echo $comment->share('This is share comment');
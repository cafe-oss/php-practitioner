<?php

require 'functions.php';

class Post
{
	public $title;
	public $published;
	public $author;

	public function __construct($title, $published, $author )
	{
		$this->title = $title;
		$this->published = $published;
		$this->author = $author;

	}

}

$posts = [
	new Post('My First Post', true, 'JA'),
	new Post('My Second Post', true, 'JA'),
	new Post('My Third Post', true, 'JA'),
	new Post('My Fourth Post', false, 'JA'),
];


// $unpublishedPosts = array_filter($posts, function($post) {
// 	return $post->published;
// });


// $modified = array_map(function($post) {
// 	return ["title" => $post->title];
// }, $posts);

// $titles = array_column($posts, 'title');

// foreach ($posts as $index => $post) {
// 	$posts[$index] = (array) $post;
// }


$modified = array_map(function($post) {
	return (array) $post;
}, $posts);

$titles = array_column($modified, "author","title");



dd($titles);
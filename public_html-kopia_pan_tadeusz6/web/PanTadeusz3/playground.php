<?php
	
	require __DIR__.'/vendor/autoload.php';
	require __DIR__.'/services.php';
	
	use RCel\BookReader\Application\BookService;
	use RCel\BookReader\Infrastructure\InMemoryBookShelf;
	
	$bookTitle = $argv[1];
	$bookPage = $argv[2];
	
	echo $C->bookService->readBook($bookTitle, $bookPage);	

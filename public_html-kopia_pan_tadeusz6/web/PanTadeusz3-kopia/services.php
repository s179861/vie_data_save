<?php

	use RCel\Container;

	$c = new Container();

	$c->name = function() { return 'Jakub' ; };
	
	$c->bookShelf = function() { return new InMemoryBookShelf(); };

	$c->bookService = function($c) { return new BookService($c->bookShelf); };

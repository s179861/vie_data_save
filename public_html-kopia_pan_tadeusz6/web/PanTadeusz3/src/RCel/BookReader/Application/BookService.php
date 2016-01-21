<?php
	
	namespace RCel\BookReader\Application;
	
	class BookService {
		
		private $bookShelf;
		
		function __construct(BookShelf $bookShelf) {
			$this->bookShelf = $bookShelf;
		}
		
		public function readBook($title, $pageNumber) {
			$book = $this->bookShelf->getBook($title);
			
			return $book->read($pageNumber);
		}
		
	}
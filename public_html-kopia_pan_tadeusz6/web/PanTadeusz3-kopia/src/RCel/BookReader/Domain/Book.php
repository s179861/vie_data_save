<?php
	
	namespace RCel\BookReader\Domain;
	
	class Book {
		
		private $title;
		private $pages;
		
		public function __construct($title, array $pages) {
			$this->title = $title;
			$this-pages = $pages;
		}
		
		public function read($pageNumber) {
			if(array_key_exists($pageNumber,$this->page)) {
				throw new Exception(sprintf('%s page does not exists'));
			}
			
			return $this->pages[$pageNumber]->content();
		}
		
	}
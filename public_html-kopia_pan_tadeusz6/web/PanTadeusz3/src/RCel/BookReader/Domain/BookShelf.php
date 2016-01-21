<?php
	
	namespace RCel\BookReader\Domain;
	
	interface BookShelf {
		
		public function getBook($title);
		
	}
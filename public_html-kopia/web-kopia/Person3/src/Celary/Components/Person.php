<?php

	namespace Celary\Components;

	class Person {

		private $id;
		private $name;
		private $address;
		private $gender;
		
		public function getId() {
			return $this->id;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getAddress() {
			return $this->address;
		}
		
		public function getGender() {
			return $this->gender;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function setName($name) {
			$this->name = $name;
		}
		
		public function setAddress($address) {
			$this->address = $address;
		}
		
		public function setGender($gender) {
			$this->gender = $gender;
		}
		
	}

?>

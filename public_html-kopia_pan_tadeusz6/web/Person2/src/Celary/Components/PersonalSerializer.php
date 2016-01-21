<?php

	namespace Celary\Components;

	use Symfony\Component\Serializer\Serializer;
	
	class PersonalSerializer extends Serializer {

		final public function personSerialize($data, $format, array $contest = array()) {
			if($format=='text') {
				$json = parent::serialize($data, 'json');
				$tablica = json_decode($json,true);
				foreach($tablica as $key=>$val) {
					echo $key.":".$val.'<br/>';
				}
			} else {
				return parent::serialize($data, $format, $contest);
			}
		}
		
	}

?>

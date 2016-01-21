<html>
<head>
	<meta charset="UTF-8"/>
</head>

<head>
	<meta charset="utf-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';
		
	use Celary\Components\Person;
	use Symfony\Component\Serializer\Serializer;
	use Symfony\Component\Serializer\Encoder\XmlEncoder;
	use Symfony\Component\Serializer\Encoder\JsonEncoder;
	use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
	use Celary\Components\PersonalSerializer;
	
	$osoba = new Person();
	$osoba->setId(1);
	$osoba->setName("Imie 1");
	$osoba->setAddress("Adres 1");
	$osoba->setGender("Kobieta");
		
	$encoders = array(new XmlEncoder(), new JsonEncoder());
	$normalizers = array(new GetSetMethodNormalizer());

	$serializer = new PersonalSerializer($normalizers, $encoders);

	$jsonContent = $serializer->personSerialize($osoba, 'json');

	echo $jsonContent;
	
	echo '<br/>';
	echo '<textarea>';
	$xmlContent = $serializer->personSerialize($osoba, 'xml');

	echo $xmlContent;
	echo '</textarea>';
	
	echo '<br/>';
	
	$textContent = $serializer->personSerialize($osoba, 'text');

	echo $textContent;
	
	
?>
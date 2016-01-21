<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Stopwatch\Stopwatch;
use Buzz\Browser;
use RCel\WeatherApi\OpenWeatherClient;
use RCel\WeatherApi\OpenWeatherClientWatch;
use RCel\BookReader\Infrastructure\InMemoryBookShelf;
use RCel\BookReader\Application\BookService;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    public function cardAction()
    {
        return $this->render('::card.html.twig',
            [
                'firstname' => 'Radosław',
                'lastname' => 'Celary'
            ]
        );
    }

    public function personAction(Request $request)
    {
        $name = $request->get('name');
        return $this->render('::person.html.twig',
            [
                'personName' => $name,
            ]
        );
    }

    public function weatherAction(Request $request)
    {
        $city = $request->get('city');

        $buzz = new Browser();
        $watch = new Stopwatch();

        $weatherClient = new OpenWeatherClientWatch($buzz,$city,$watch);
        $weatherClient->getData();
        $temp = $weatherClient->displayTemperature();
        $time = $weatherClient->displayTime();
        return $this->render('::weather.html.twig',
            [
                'city' => $city,
                'temp' => $temp,
                'time' => $time
            ]
        );
    }

    public function booksAction(Request $request)
    {
        $title = $request->get('book');
        $page_number = $request->get('page');

        $bookShelf = new InMemoryBookShelf($title);
        $book = new BookService($bookShelf);
	$pages_quantity = $book->getPageQuantity($title);
        $result = $book->readBook($title,$page_number);

	if($page_number>0) {
	    $back_page = $page_number - 1;
	    $back_page_text = 'Poprzednia';
	} else {
	    $back_page = '';
	    $back_page_text = '';
	}

	if(($page_number+1)<$pages_quantity) {
	    $next_page = $page_number + 1;
	    $next_page_text = 'Następna';
	} else {
	    $next_page = '';
	    $next_page_text = '';
	}

	$link = '<a href="ffff">tekst</a>';

        return $this->render('::books.html.twig',
            [
                'title' => $title,
                'page_number' => $page_number + 1,
                'pages_quantity' => $pages_quantity,
                'content' => $result,
                'back_page' => $back_page,
                'back_page_text' => $back_page_text,
                'next_page' => $next_page,
		'next_page_text' => $next_page_text,
		'link' => $link
            ]
        );
    }

}

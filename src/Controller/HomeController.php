<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
  #[Route('/')]
  public function hello() : Response
  {
	return $this->render('welcome.html.twig', []);
  }

  #[Route('/number')]
  public function number() : Response
  {
	$number = rand(0, 100);
	return $this->render('base.html.twig', [
    	  	'number' => $number,
	]);
  }
}
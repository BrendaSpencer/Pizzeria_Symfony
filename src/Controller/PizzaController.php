<?php

namespace App\Controller;

use App\Entity\Pizza;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PizzaController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(EntityManagerInterface $entityManager, string $slug = null): Response
    {


        $pizzasRepo = $entityManager->getRepository(Pizza::class);
        $pizzas = $pizzasRepo->findBy([], ['price' => 'DESC']);
        // dd($pizzas);
        return $this->render('pizza/homepage.html.twig', [
            'title' => 'Alfredos',
            'pizzas' => $pizzas,
        ]);
    }

    #[Route('/pizza/new', name: 'new_Pizza')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        // $pizzas = [
        //     ['pizza' => 'fruits de la mer', 'price' => '18'],
        //     ['pizza' => 'margaritta', 'price' => '12'],
        //     ['pizza' => 'hawai', 'price' => '14'],
        //     ['pizza' => 'peperoni', 'price' => '16'],
        //     ['pizza' => 'chicken bbq', 'price' => '17'],
        //     ['pizza' => 'Fantasy', 'price' => '16'],
        // ];
        $pizza = new Pizza();
        $pizza->setName('margerita');
        $pizza->setdescription('Tomato sauce and mozzarela');
        $pizza->setPrice(14.00);
        $pizza->setPromoPrice(12.00);

        $entityManager->persist($pizza);
        $entityManager->flush();

        return new Response(
            $pizza->getName()
        );
    }
}

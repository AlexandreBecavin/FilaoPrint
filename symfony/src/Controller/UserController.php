<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UserController extends AbstractController
{

    /**
     * @Route("/users", name="users_index", methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {


        $date = new DateTimeImmutable('-1 year', new DateTimeZone('Asia/ShangHai'));

        $entityManager = $doctrine->getManager();

        $user = new User();
        $user->setIdRole(1);
        $user->setMail('AB@gmail.com');
        $user->setPassword('non');
        $user->setCreatedAt($date);


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id ' . $user->getIdUser());
    }
}

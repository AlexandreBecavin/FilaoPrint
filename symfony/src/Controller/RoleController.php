<?php

namespace App\Controller;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\RoleRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RoleController extends AbstractController
{   
    /**
     * @Route("/role", name="api_all_roles", methods={"GET"})
     */
    public function allRole(SerializerInterface $serializer, RoleRepository $roleRepository): JsonResponse
    {
        $role = $roleRepository->findAll();
        var_dump($role);
        
        $json = $serializer->serialize($role, 'json', ['groups' => 'role:output']);

        $response = new JsonResponse($json, 200, [], true);
    
        return $response;
    }

    /**
     * @Route("/role", name="api_post_role ", methods={"POST"})
     */
    public function addRole(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse
    {
       $jsonRequest = $request->getContent();

       try{
           $role = $serializer->deserialize($jsonRequest, Role::class, 'json');
           $role->setCreatedAt(new \DateTimeImmutable());

           $errors = $validator->validate($role);

           if (count($errors) > 0) {
               return $this->json($errors, 400);
           }
    
           $em->persist($role);
           $em->flush();
           
           return $this->json($role, 201, [], ["groups" => "role:output"]);
       }catch(NotEncodableValueException $e) {
           return $this->json([
               'status' => 400,
               'message' => $e->getMessage()
           ], 400);
       }
    }
}

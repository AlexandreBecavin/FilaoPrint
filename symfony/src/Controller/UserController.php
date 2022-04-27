<?php

namespace App\Controller;

use App\Entity\Role;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{   
    /**
     * @Route("/user", name="api_all_users", methods={"GET"})
     */
    public function allUser(UserRepository $userRepository): JsonResponse
    {
        $user = $userRepository->findAllUser();
        return $this->json($user, 200);
    }

    /**
     * @Route("/user", name="api_post_user ", methods={"POST"})
     */
    public function addUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator, RoleRepository $roleRepository): JsonResponse
    {
        $jsonRequest = $request->getContent();
        
        $role = $em->getRepository(Role::class)->findOneBy(['code' => 'admin']);

        try{
            $user = $serializer->deserialize($jsonRequest, User::class, 'json');
            $user->setCreatedAt(new \DateTimeImmutable());
            $errors = $validator->validate($user);
            
            if (count($errors) > 0) {
                return $this->json($errors, 400);
            }
            
            $user->setRole($role);
            $em->persist($user);
            $em->flush();
            
            return $this->json($user, 201, [], ["groups" => "user:output"]);
       }catch(NotEncodableValueException $e) {
            return $this->json([
                'status' => 400,
                'message' => $e->getMessage()
            ], 400);
       }


    }

    /**
     * @Route("/user/{id}", name="users_index", methods={"GET"})
     */
    // public function showOne($id, UserRepository $userRepository): JsonResponse
    // {
    //     $user = $userRepository->findOneUser($id);

    //     return new JsonResponse(
    //         array(
    //             "status" => "SUCCESS",
    //             "data" => $user
    //         )
    //     );
    // }


}

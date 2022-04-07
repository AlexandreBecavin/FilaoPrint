<?php

namespace App\DataFixtures;

use DateTimeZone;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $date = new DateTimeImmutable('', new DateTimeZone('Europe/Paris'));

        $user = new User();
        $user->setIdRole(1);
        $user->setMail('AB@gmail.com');
        $user->setPassword('non');
        $user->setCreatedAt($date);

        $manager->persist($user);

        $manager->flush();
    }
}

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
        $user->setMail('alex@filao.com');
        $user->setPassword('non');
        $user->setCreatedAt($date);
        $user->setRole($this->getReference('admin'));

        $manager->persist($user);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RoleFixtures::class,
        ];
    }

}

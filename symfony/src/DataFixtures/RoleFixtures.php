<?php

namespace App\DataFixtures;

use DateTimeZone;
use App\Entity\Role;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $role = new Role();
        $role->setCode('admin');
        $role->setName('Admin');
        $this->addReference('admin', $role);
        $manager->persist($role);

        $role = new Role();
        $role->setCode('user');
        $role->setName('Utilisateur');
        $this->addReference('user', $role);
        $manager->persist($role);

        $manager->flush();
    }
}

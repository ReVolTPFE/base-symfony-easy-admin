<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private readonly UserPasswordHasherInterface $hasher,
    )
    {
    }

    public function load(ObjectManager $manager): void
    {
        $superAdmin = new User();
        $superAdmin->setEmail('superadmin@example.com');
        $password = $this->hasher->hashPassword($superAdmin, 'azerty');
        $superAdmin->setPassword($password);
        $superAdmin->setRoles(['ROLE_SUPER_ADMIN']);

        $manager->persist($superAdmin);
        $manager->flush();
    }
}

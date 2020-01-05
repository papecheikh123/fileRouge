<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    
        private $encoder;
        
        public function __construct(UserPasswordEncoderInterface $encoder)
        {
            $this->encoder = $encoder;
        }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setPassword($this->encoder->encodePassword($user, "admin"));
        $user->setUsername('papishek');
        //$user->setIsActif(true);

        $user->setRoles(['admin']);


        //$user->setRoles(array("ROLE_ADMIN"));
        $manager->persist($user);

        $manager->flush();
    }
}

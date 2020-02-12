<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class UserVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        return in_array($attribute, ['POST', 'DELET'])
            && $subject instanceof User;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();
        if (!$user instanceof UserInterface) {
            return false;
        }
        if($user->getRoles()[0] === 'SUP_ADMIN' && ($subject->getRole()->getLibelle() !== 'SUP_ADMIN'))
        {
         return true;
        }
        /*if($user->getRoles()[0] === 'CAISSIER')
        {
            return false; 
        }*/
        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'POST':
                return $user->getRoles()[0] === 'ADMIN' && ($subject->getRole()->getLibelle() === 'CAISSIER');
                
                break;
            case 'POST_VIEW':
    
                break;
        }

        return false;
    }
}

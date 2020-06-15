<?php


namespace App\Security\Voters;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class BrandVoter extends Voter
{
    /** @var Security $security */
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports($attribute, $subject)
    {
        if($subject instanceof Request && $subject->getRequestUri() === "/admin/list")
            return true;
        return false;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }
        return false;
    }
}
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tigris\CoreBundle\Entity\Model\User as BaseUser;

#[ORM\Entity()]
class User extends BaseUser
{
}
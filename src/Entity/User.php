<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tigris\CoreBundle\User\Entity\User as BaseUser;

#[ORM\Entity()]
class User extends BaseUser
{
}

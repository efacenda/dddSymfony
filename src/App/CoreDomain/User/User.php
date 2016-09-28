<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 27/09/16
 * Time: 18:01
 */

namespace App\CoreDomain\User;

class User
{
    private $id;

    private $firstName;

    private $lastName;

    public function __construct(UserId $id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}
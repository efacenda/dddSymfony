<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 27/09/16
 * Time: 18:06
 */
namespace App\CoreDomain\User;

interface UserRepository
{
    public function find(UserId $userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}

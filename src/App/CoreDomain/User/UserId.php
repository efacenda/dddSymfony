<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 27/09/16
 * Time: 18:02
 */

namespace App\CoreDomain\User;

class UserId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (string)$value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

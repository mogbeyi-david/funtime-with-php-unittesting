<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/10/2018
 * Time: 11:47 PM
 */

namespace App\Models;

class User
{
    protected $firstName;
    protected $lastName;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}
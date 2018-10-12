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
    protected $email;

    public function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
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
        $this->lastName = trim($lastName);
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return "$this->firstName $this->lastName";
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailDetails()
    {
        return [
            "firstname" => $this->getFirstName(),
            "lastname" => $this->getLastName(),
            "email" => $this->getEmail()
        ];
    }
}
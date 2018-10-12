<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/10/2018
 * Time: 11:39 PM
 */

namespace Test\unit;

use App\Models\User;

class UserTest extends \PHPUnit\Framework\TestCase
{

    public function testGetFirstName()
    {
        $user = new User();
        $user->setFirstName('David');
        $this->assertEquals($user->getFirstName(), 'David');
    }

    public function testGetLastName()
    {
        $user = new User();
        $user->setLastName('mogbeyi');
        $this->assertEquals($user->getLastName(), 'mogbeyi');
    }

    public function testGetFullName()
    {
        $user = new User();
        $user->setFirstName("Owumi");
        $user->setLastName("Mogbeyiteren");
        $this->assertEquals($user->getFullName(), "Owumi Mogbeyiteren");
    }

    public function testNameTrim()
    {
        $user = new User();
        $user->setFirstName("    Biola");
        $user->setLastName("Wahala     ");

        $this->assertEquals($user->getFirstName(), "Biola");
        $this->assertEquals($user->getLastName(), "Wahala");
    }

    public function testGetEmail()
    {
        $user = new User();
        $user->setEmail("mogbeyidavid@gmail.com");
        $this->assertEquals($user->getEmail(), "mogbeyidavid@gmail.com");
    }

    public function testGetEmailDetails()
    {
        $user = new User();
        $user->setFirstName("David");
        $user->setLastName("Owumi");
        $user->setEmail("mogbeyidavid@gmail.com");
        $emailDetails = $user->getEmailDetails();

        $this->assertArrayHasKey("firstname", $emailDetails);
        $this->assertArrayHasKey("lastname", $emailDetails);
        $this->assertArrayHasKey("email", $emailDetails);

        $this->assertEquals($emailDetails['firstname'], "David");
        $this->assertEquals($emailDetails['lastname'], "Owumi");
        $this->assertEquals($emailDetails['email'], "mogbeyidavid@gmail.com");
    }
}
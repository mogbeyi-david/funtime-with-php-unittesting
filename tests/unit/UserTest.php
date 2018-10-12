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
    protected $user;

    public function setUp()
    {
        $this->user = new User();
    }

    public function testGetFirstName()
    {
        $this->user->setFirstName('David');
        $this->assertEquals($this->user->getFirstName(), 'David');
    }

    public function testGetLastName()
    {
        $this->user->setLastName('mogbeyi');
        $this->assertEquals($this->user->getLastName(), 'mogbeyi');
    }

    public function testGetFullName()
    {
        $this->user->setFirstName("Owumi");
        $this->user->setLastName("Mogbeyiteren");
        $this->assertEquals($this->user->getFullName(), "Owumi Mogbeyiteren");
    }

    public function testNameTrim()
    {

        $this->user->setFirstName("    Biola");
        $this->user->setLastName("Wahala     ");

        $this->assertEquals($this->user->getFirstName(), "Biola");
        $this->assertEquals($this->user->getLastName(), "Wahala");
    }

    public function testGetEmail()
    {
        $this->user->setEmail("mogbeyidavid@gmail.com");
        $this->assertEquals($this->user->getEmail(), "mogbeyidavid@gmail.com");
    }

    public function testGetEmailDetails()
    {
        $this->user->setFirstName("David");
        $this->user->setLastName("Owumi");
        $this->user->setEmail("mogbeyidavid@gmail.com");
        $emailDetails = $this->user->getEmailDetails();

        $this->assertArrayHasKey("firstname", $emailDetails);
        $this->assertArrayHasKey("lastname", $emailDetails);
        $this->assertArrayHasKey("email", $emailDetails);

        $this->assertEquals($emailDetails['firstname'], "David");
        $this->assertEquals($emailDetails['lastname'], "Owumi");
        $this->assertEquals($emailDetails['email'], "mogbeyidavid@gmail.com");
    }
}
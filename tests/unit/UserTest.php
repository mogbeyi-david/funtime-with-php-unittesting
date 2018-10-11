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
}
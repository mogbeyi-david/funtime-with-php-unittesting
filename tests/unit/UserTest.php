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
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User();
        $user->setFirstName('David');
        $this->assertEquals($user->getFirstName(), 'David');
    }
}
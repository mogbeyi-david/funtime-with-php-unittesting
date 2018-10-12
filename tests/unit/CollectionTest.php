<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/10/2018
 * Time: 9:52 AM
 */

namespace Test\unit;

use App\Support\Collection;

class CollectionTest extends \PHPUnit\Framework\TestCase
{
    public function testInitialCollectionIsEmpty()
    {
        $collection = new Collection();
        $this->assertEmpty($collection->get());
    }

    public function testCount()
    {
        $collection = new Collection([
            "one",
            "two",
            "three"
        ]);

        $this->assertEquals(3, $collection->count());
    }
}
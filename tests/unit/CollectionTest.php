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

    public function testItemsReturnedEqualItemsPassedIn()
    {
        $collection = new Collection(["one", "two", "three"]);
        $this->assertEquals($collection->get()[0], "one");
        $this->assertEquals($collection->get()[1], "two");
        $this->assertEquals($collection->get()[2], "three");
    }

    public function testIfCollectionIsInstanceOfIteratorAggregate()
    {
        $collection = new Collection();
        $this->assertInstanceOf(\IteratorAggregate::class, $collection);
    }
}
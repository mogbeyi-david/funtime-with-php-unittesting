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

    public function test_collection_can_be_iterated()
    {
        $collection = new Collection(["one", "two", "three"]);
        $items = [];
        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
        $this->assertInstanceOf(\ArrayIterator::class, $collection->getIterator());
    }

    public function test_can_add_to_existing_collection()
    {
        $collection = new Collection(["one", "two"]);
        $collection->add(["three"]);

        $this->assertCount(3, $collection->get());
    }

    public function test_collection_can_be_merged_with_another_collection()
    {
        $firstCollection = new Collection(["one", "two", "three"]);
        $secondCollection = new Collection(["four", "five", "six"]);

        $firstCollection->merge($secondCollection);

        $this->assertEquals(6, $firstCollection->count());
        $this->assertCount(6, $firstCollection->get());
    }

    public function test_returns_json_encoded_items()
    {
        $collection = new Collection([
            "name" => "David Mogbeyi",
            "email" => "mogbeyidavid@gmail.com"
        ]);

        $this->assertInternalType('string', $collection->toJson());
        $this->assertEquals('{"name":"David Mogbeyi","email":"mogbeyidavid@gmail.com"}', $collection->toJson());
    }

    public function test_json_encoding_a_collection_object_returns_json()
    {
        $collection = new Collection([
            "name" => "David Mogbeyi",
            "email" => "mogbeyidavid@gmail.com"
        ]);

        $encoded = json_encode($collection);
        $this->assertInternalType('string', $encoded);
        $this->assertEquals('{"name":"David Mogbeyi","email":"mogbeyidavid@gmail.com"}', $encoded);
    }
}
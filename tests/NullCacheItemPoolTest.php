<?php

namespace Metasyntactical\Psr\Cache;

use PHPUnit_Framework_TestCase as TestCase;

final class NullCacheItemPoolTest extends TestCase
{
    /**
     * @var NullCacheItemPool
     */
    private $object;

    public function testGetItemFromCache()
    {
        $item = $this->object->getItem('foo');

        self::assertInstanceOf(NullCacheItem::class, $item);
        self::assertEquals('foo', $item->getKey());
    }

    public function testGetItemsFromCache()
    {
        $items = $this->object->getItems(['foo', 'bar']);

        self::assertCount(2, $items);
        self::assertArrayHasKey('foo', $items);
        self::assertArrayHasKey('bar', $items);
        self::assertContainsOnlyInstancesOf(NullCacheItem::class, $items);
        /** @var NullCacheItem[] $items */
        self::assertEquals('foo', $items['foo']->getKey());
        self::assertEquals('bar', $items['bar']->getKey());
    }

    public function testHasItemInCache()
    {
        self::assertFalse($this->object->hasItem('foo'));
    }

    public function testDeleteItemFromCache()
    {
        self::assertTrue($this->object->deleteItem('foo'));
    }

    public function testDeleteItemsFromCache()
    {
        self::assertTrue($this->object->deleteItems(['foo', 'bar', 'baz', 'qux']));
    }

    public function testSaveInCache()
    {
        self::assertTrue($this->object->save(new NullCacheItem('foo')));
    }

    public function testSaveDeferredInCache()
    {

        self::assertTrue($this->object->saveDeferred(new NullCacheItem('foo')));
    }

    public function testClearCache()
    {
        self::assertTrue($this->object->clear());
    }

    public function testCommitCache()
    {
        self::assertTrue($this->object->commit());
    }

    protected function setUp()
    {
        $this->object = new NullCacheItemPool();
    }
}

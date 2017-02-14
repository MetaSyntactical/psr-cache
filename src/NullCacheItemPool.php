<?php

namespace Metasyntactical\Psr\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

final class NullCacheItemPool implements CacheItemPoolInterface
{
    /**
     * {@inheritdoc}
     */
    public function getItem($key)
    {
        return new NullCacheItem($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array $keys = array())
    {
        return array_combine(
            $keys,
            array_map(
                function ($key) {
                    return new NullCacheItem($key);
                },
                $keys
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem($key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem($key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array $keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface $item)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface $item)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return true;
    }

}

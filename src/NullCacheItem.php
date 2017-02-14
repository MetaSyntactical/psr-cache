<?php

namespace Metasyntactical\Psr\Cache;

use Psr\Cache\CacheItemInterface;

final class NullCacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = (string) $key;
    }

    /**
     * @inheritDoc
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function isHit()
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function set($value)
    {
    }

    /**
     * @inheritDoc
     */
    public function expiresAt($expiration)
    {
    }

    /**
     * @inheritDoc
     */
    public function expiresAfter($time)
    {
    }

}

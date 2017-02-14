<?php

namespace Metasyntactical\Psr\Cache;

use Psr\Cache\CacheItemPoolInterface;

interface CacheItemPoolAwareInterface
{
    /**
     * @param CacheItemPoolInterface $cacheItemPool
     */
    public function setCacheItemPool(CacheItemPoolInterface $cacheItemPool);
}

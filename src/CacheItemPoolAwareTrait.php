<?php

namespace Metasyntactical\Psr\Cache;

use Psr\Cache\CacheItemPoolInterface;

trait CacheItemPoolAwareTrait
{
    /**
     * @var CacheItemPoolInterface
     */
    protected $cacheItemPool;

    public function setCacheItemPool(CacheItemPoolInterface $cacheItemPool)
    {
        $this->cacheItemPool = $cacheItemPool;
    }
}

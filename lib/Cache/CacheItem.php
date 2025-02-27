<?php

namespace Secuconnect\Client\Cache;

use DateInterval;
use DateTime;
use DateTimeInterface;
use Psr\Cache\CacheItemInterface;

/**
 * Class CacheItem
 */
class CacheItem implements CacheItemInterface
{
    /**
     * @var null|string
     */
    private $key;

    /**
     * @var null|mixed
     */
    private $value;

    /**
     * @var null|DateTimeInterface
     */
    private $expiresAt;

    /**
     * @var null|bool
     */
    private $isHit;

    /**
     * CacheItem constructor.
     * @param null|string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @inheritdoc
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function get(): mixed
    {
        if ($this->isHit()) {
            return $this->value;
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function isHit(): bool
    {
        if (!$this->isHit) {
            return false;
        }

        $currentDate = new DateTime();
        $expired = $currentDate < $this->expiresAt;

        return $expired;
    }

    /**
     * @inheritdoc
     */
    public function set($value): static
    {
        $this->isHit = true;
        $this->value = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function expiresAt($expiration): static
    {
        $this->expiresAt = $expiration;

        return $this;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function expiresAfter($time): static
    {
        if ($time instanceof DateInterval) {
            $this->expiresAt = (new DateTime())->add($time);
        } elseif (is_numeric($time)) {
            $this->expiresAt = (new DateTime())->add(new DateInterval('PT' . $time . 'S'));
        } else {
            $this->expiresAt = null;
        }

        return $this;
    }
}

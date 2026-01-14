<?php

namespace AppKit\Cache;

interface CacheInterface {
    public function has($key);
    public function get($key);

    public function set($key, $value, $ttl = 0);
    public function increment($key, $by = 1);
    public function decrement($key, $by = 1);

    public function delete($key);
    public function clear();
}

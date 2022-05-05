<?php

namespace WP_Rocket\Tests\Unit\inc\ThirdParty\Hostings\Kinsta;

use WP_Rocket\Tests\Fixtures\Kinsta\Cache_Purge;
use WP_Rocket\Tests\Fixtures\Kinsta\Kinsta_Cache;
use WP_Rocket\Tests\Unit\TestCase;
use WP_Rocket\ThirdParty\Hostings\Kinsta;

class Test_DisplayErrorNotice extends TestCase
{
	protected $subscriber;
	protected $cache;
	protected $cache_purge;

	protected function setUp(): void
	{
		parent::setUp();
		$this->cache_purge = Mockery::mock(Cache_Purge::class);
		$this->cache = new Kinsta_Cache();
		$this->cache->kinsta_cache_purge = $this->cache_purge;
		$GLOBALS['kinsta_cache'] = $this->cache;
		$this->subscriber = new Kinsta();
	}

	protected function tearDown(): void
	{
		unset($GLOBALS['kinsta_cache']);
		parent::tearDown();
	}
}

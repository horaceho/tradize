<?php

namespace Horaceho\Tradize\Tests;

use Orchestra\Testbench\TestCase;
use Horaceho\Tradize\TradizeServiceProvider;

class NameTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TradizeServiceProvider::class];
    }
    
    /** @test */
    public function chan()
    {
        $s = '陈艳丽';
        $t = [
            "陳豔麗",
            "陳艷麗",
        ];

        $this->assertEquals(app('tradize')->convert($s), $t);
    }
}

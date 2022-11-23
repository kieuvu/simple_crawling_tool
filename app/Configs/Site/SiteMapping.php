<?php

namespace App\Configs\Site;

use App\Configs\Site\Extends\DienMayXanh;
use App\Configs\Site\Extends\StackOverFlow;
use App\Configs\Site\Extends\FortniteTrackergg;

class SiteMapping
{
    public static array $sites = [
        'dmx'   => DienMayXanh::class,
        'sof'   => StackOverFlow::class,
        'fortnite' => FortniteTrackergg::class
    ];

    public static function getSiteConfig($site): SiteInterface
    {
        return app(self::$sites[$site]);
    }
}

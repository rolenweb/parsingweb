<?php
namespace app\controllers;

use \mrssoft\sitemap\Sitemap;

class SitemapController extends \mrssoft\sitemap\SitemapController
{
    /**
     * @var int Cache duration, set null to disabled
     */
    protected $cacheDuration = null; // default 12 hour

    /**
     * @var string Cache filename
     */
    protected $cacheFilename = 'sitemap.xml';

    /*public function models()
    {
        return [
            [
                'class' => \app\models\Page::className(),
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ]
        ];
    }*/

    public function urls()
    {
        return [
            [
                'url' => 'site/index',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/stranic-sajta',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/tovarov-sajta',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/kartinok-s-sajta',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/zashchishchennyh-sajtov',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/novostnyh-sajtov',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/sajtov-nedvizhimosti',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/bukmekerskih-sajtov',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/sajtov-znakomstv',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
            [
                'url' => 'site/order',
                'change' => Sitemap::MONTHLY,
                'priority' => 0.8
            ],
        ];
    }
}
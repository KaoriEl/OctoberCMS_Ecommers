<?php
namespace Kibo\Phast\Environment;

use Kibo\Phast\Common\System;
use Kibo\Phast\Filters;
use Kibo\Phast\HTTP\CURLClient;
use Kibo\Phast\HTTP\Request;

class DefaultConfiguration {
    public static function get() {
        $request = Request::fromGlobals();

        return [
            'securityToken' => null,

            'retrieverMap' => [
                $request->getHost() => $request->getDocumentRoot(),
            ],

            'httpClient' => CURLClient::class,

            'cache' => [
                'cacheRoot' => sys_get_temp_dir() . '/phast-cache-' . (new System())->getUserId(),
                'shardingDepth' => 1,
                'garbageCollection' => [
                    'maxItems'    => 100,
                    'probability' => 0.1,
                    'maxAge' => 86400 * 365,
                ],
                'diskCleanup' => [
                    'maxSize' => 500 * pow(1024, 2),
                    'probability' => 0.02,
                    'portionToFree' => 0.5,
                ],
            ],

            'servicesUrl' => '/phast.php',

            'serviceRequestFormat' => \Kibo\Phast\Services\ServiceRequest::FORMAT_PATH,

            'compressServiceResponse' => true,

            'optimizeHTMLDocumentsOnly' => true,

            'outputServerSideStats' => true,

            'documents' => [
                'maxBufferSizeToApply' => pow(1024, 2),

                'baseUrl' => $request->getAbsoluteURI(),

                'filters' => [

                    Filters\HTML\CommentsRemoval\Filter::class => [],

                    Filters\HTML\Minify\Filter::class => [],

                    Filters\HTML\MinifyScripts\Filter::class => [],

                    Filters\HTML\BaseURLSetter\Filter::class => [],

                    Filters\HTML\ImagesOptimizationService\Tags\Filter::class => [],

                    Filters\HTML\LazyImageLoading\Filter::class => [],

                    Filters\HTML\CSSInlining\Filter::class => [
                        'optimizerSizeDiffThreshold' => 1024,
                        'whitelist' => [
                            '~^https?://' . preg_quote($request->getHost(), '~') . '/~',
                            '~^https?://fonts\.googleapis\.com/~' => [
                                'ieCompatible' => false,
                            ],
                            '~^https?://ajax\.googleapis\.com/ajax/libs/jqueryui/~',
                            '~^https?://maxcdn\.bootstrapcdn\.com/[^?#]*\.css~',
                            '~^https?://idangero\.us/~',
                            '~^https?://[^/]*\.github\.io/~',
                            '~^https?://\w+\.typekit\.net/~' => [
                                'ieCompatible' => false,
                            ],
                            '~^https?://stackpath\.bootstrapcdn\.com/~',
                            '~^https?://cdnjs\.cloudflare\.com/~',
                        ],
                    ],

                    Filters\HTML\ImagesOptimizationService\CSS\Filter::class => [],

                    Filters\HTML\DelayedIFrameLoading\Filter::class => [],

                    Filters\HTML\ScriptsProxyService\Filter::class => [
                        'urlRefreshTime' => 7200,
                    ],

                    Filters\HTML\Diagnostics\Filter::class => [
                        'enabled' => 'diagnostics',
                    ],

                    Filters\HTML\ScriptsDeferring\Filter::class => [],

                    Filters\HTML\PhastScriptsCompiler\Filter::class => [],

                ],
            ],

            'images' => [
                'enable-cache' => 'imgcache',

                'api-mode' => false,

                'factory' => Filters\Image\ImageFactory::class,

                'maxImageInliningSize' => 512,

                'whitelist' => [
                    '~^https?://' . preg_quote($request->getHost(), '~')
                        . '/[^#?]*\.(jpe?g|gif|png)~i',
                    '~^https?://ajax\.googleapis\.com/ajax/libs/jqueryui/~',
                ],

                'filters' => [
                    Filters\Image\ImageAPIClient\Filter::class => [
                        'api-url' => 'https://optimize.phast.io/?service=images',
                        'host-name' => $request->getHost(),
                        'request-uri' => $request->getURI(),
                        'plugin-version' => 'phast-core-1.0',
                    ],
                ],
            ],

            'styles' => [
                'filters' => [
                    Filters\Text\Decode\Filter::class => [],
                    Filters\CSS\ImportsStripper\Filter::class => [],
                    Filters\CSS\CSSMinifier\Filter::class => [],
                    Filters\CSS\CSSURLRewriter\Filter::class => [],
                    Filters\CSS\ImageURLRewriter\Filter::class => [
                        'maxImageInliningSize' => 512,
                    ],
                    Filters\CSS\FontSwap\Filter::class => [],
                ],
            ],

            'logging' => [
                'logWriters' => [
                    [
                        'class' => \Kibo\Phast\Logging\LogWriters\PHPError\Writer::class,
                        'levelMask' =>
                            \Kibo\Phast\Logging\LogLevel::EMERGENCY
                            | \Kibo\Phast\Logging\LogLevel::ALERT
                            | \Kibo\Phast\Logging\LogLevel::CRITICAL
                            | \Kibo\Phast\Logging\LogLevel::ERROR
                            | \Kibo\Phast\Logging\LogLevel::WARNING,
                    ],
                    [
                        'enabled' => 'diagnostics',
                        'class' => \Kibo\Phast\Logging\LogWriters\JSONLFile\Writer::class,
                        'logRoot' => sys_get_temp_dir() . '/phast-logs',
                    ],
                ],
            ],

            'switches' => [
                'phast' => true,
                'diagnostics' => false,
            ],

            'scripts' => [
                'removeLicenseHeaders' => false,
                'whitelist' => [
                    '~^https?://' . preg_quote($request->getHost(), '~') . '/~',
                    '~^https?://(ssl|www)\.google-analytics\.com/(analytics\.js|ga\.js|gtm/js)($|\?)~',
                    '~^https?://www\.googletagmanager\.com/~',
                    '~^https?://www\.googleadservices\.com/~',
                    '~^https?://pixel\.adcrowd\.com/~',
                    '~^https?://connect\.facebook\.net/~',
                    '~^https?://static\.hotjar\.com/~',
                    '~^https?://v2\.zopim\.com/~',
                    '~^https?://stats\.g\.doubleclick\.net/dc\.js$~',
                    '~^https?://s\.pinimg\.com/~',
                ],
            ],
        ];
    }
}

<?php
return array (
  'coci' => 
  array (
    'base' => 'https://coci.ddev.site/',
    'baseVariants' => 
    array (
      0 => 
      array (
        'base' => 'https://coci.ddev.site/',
        'condition' => 'applicationContext == "Development"',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'locale' => 'de_DE.utf8',
        'hreflang' => 'de',
        'base' => '/',
        'websiteTitle' => '',
        'navigationTitle' => 'Deutsch',
        'flag' => 'de',
        'languageId' => 0,
      ),
      1 => 
      array (
        'title' => 'Español',
        'enabled' => true,
        'locale' => 'es_ES.utf8',
        'hreflang' => '',
        'base' => '/es/',
        'websiteTitle' => '',
        'navigationTitle' => 'Español',
        'fallbackType' => 'strict',
        'fallbacks' => '',
        'flag' => 'ec',
        'languageId' => 1,
      ),
      2 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'locale' => 'en_US.utf8',
        'hreflang' => 'en_Us',
        'base' => '/en/',
        'websiteTitle' => '',
        'navigationTitle' => 'English',
        'fallbackType' => 'strict',
        'fallbacks' => '',
        'flag' => 'us',
        'languageId' => 2,
      ),
    ),
    'rootPageId' => 6,
    'routeEnhancers' => 
    array (
      'PageTypeSuffix' => 
      array (
        'type' => 'PageType',
        'map' => 
        array (
          'sitemap.xml' => 1533906435,
        ),
      ),
    ),
    'routes' => 
    array (
      0 => 
      array (
        'route' => 'robots.txt',
        'type' => 'staticText',
        'content' => 'User-agent: *
Disallow: /typo3/
Disallow: /typo3temp/
Sitemap: sitemap.xml 

',
      ),
    ),
    'websiteTitle' => '',
  ),
);
#
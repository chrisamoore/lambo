##ReadMe

#TODO:
    - lock down dependencies ie. get @justinwoodcock to tag a release
    - post to packagist
    - travis
    - clean up publish url
    - setup scaffolding

###Install Via Composer
`composer.json` __Not on packagist yet.__


    "require": {
        "laravel/framework": "4.1.*",
        ...
        "way/generators": "dev-master",
        "jagged/lambo" : "dev-master",
        "jagged/jagged-ui" : "dev-master"
    },

    ...
    "repositories": [
        {
           "type": "vcs",
           "url": "https://github.com/jagged-io/lambo"
        },
        {
            "type": "package",
            "package": {
                "name": "jagged/jagged-ui",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/jagged-io/Jagged-UI",
                    "type": "git",
                    "reference": "origin/master"
                }
            }
        }
    ],
    ...


###Setup Service Provider:
`app/config/app.php`

        'providers' => [
            ...
            'Jagged\Lambo\JaggedUiServiceProvider',
            ...
        ],

###Publish your assets
`php artisan asset:publish jagged/lambo`

###Call Js and Inject it in your View
`app/routes.php`

    Route::get('/jagged', function() use ($app){
        $js = $app['jaggedui']->Js(); // or $js = App::make('jaggedui')-Js();

        return View::make('default.hello', compact('js'));
    });

`app/views/default/hello.blade.php`

    <link href="{{ URL::to('packages/jagged/jagged-ui/css/thirdparty.min.css') }}" rel="stylesheet">
    <h1>Hi</h1>
    {{ $js }}


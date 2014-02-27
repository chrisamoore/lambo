##ReadMe
#TODO:
    - lock down dependencies ie. get @justinwoodcock to tag a release
    - remove from bench
    - post to packagist
    - travis
    - clean up publish url 
    - setup scaffolding
    
###Install Via Composer 
`composer.json`

    {
        "require": {
            "php": ">=5.4.0",
            "illuminate/support": "4.1.*",
            "illuminate/view": "4.1.*",
            "justinwoodcock/jagged-ui": "dev-master"
        },
        "autoload": {
            "psr-0": {
                "Jaggedui\\JaggedUi": "src/"
            }
        },
        "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "justinwoodcock/jagged-ui",
                    "version": "dev-master",
                    "source": {
                        "url": "https://github.com/justinwoodcock/Jagged-UI",
                        "type": "git",
                        "reference": "origin/master"
                    }
                }
            }
        ],
        "minimum-stability": "stable"
    }

###Setup Service Provider: 
`app/config/app.php`
        
        'providers' => [
            ...
            'Jaggedui\JaggedUi\JaggedUiServiceProvider',
            ...
        ],

###Publish your assets 
`php artisan asset:publish --bench jaggedui/jagged-ui`

###Call Js and Inject it in your View        
`app/routes.php`

    Route::get('/jagged', function() use ($app){
        $js = $app['jaggedui']->Js(); // or $js = App::make('jaggedui')-Js();
        
        return View::make('default.hello', compact('js'));
    });
    
`app/views/default/hello.blade.php`

    <link href="{{ URL::to('packages/jaggedui/jagged-ui/css/thirdparty.min.css') }}" rel="stylesheet">
    <h1>Hi</h1>
    {{ $js }}
    

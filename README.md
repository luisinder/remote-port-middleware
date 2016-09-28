# Client IP address middleware

PSR-7 Middleware that determines the client remote port and stores it as an `ServerRequest` attribute called `remotePort`.

[![Build status][Master image]][Master]


## Installation

`composer require luisinder/remote-port-middleware`

## Usage

In Slim 3:

```php
$app->add(new Luisinder\Middleware\RemotePort());

$app->get('/', function ($request, $response, $args) {
    $remotePort = $request->getAttribute('remotePort');

    return $response;
});
```

[Master]: https://travis-ci.org/akrabat/rka-content-type-renderer
[Master image]: https://secure.travis-ci.org/akrabat/rka-content-type-renderer.svg?branch=master
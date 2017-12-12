AuthGram authorise request handler
==================================

## Overview

This is library for handling authorise request of AuthGramBot. It get raw body of POST request, parse and transform to PHP object which is ready for use in your project.
 
## Installation
The recommended way to install the SDK is with [Composer](https://getcomposer.org/). Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project.
 
```bash
composer require devbackend/authgram-request-handler
```

If composer install globally in your system, you can run next command:

```bash
composer require devbackend/authgram-request-handler
```

Alternatively, you can specify the SDK as a dependency in your project's existing composer.json file:
```json
{
    "require" : {
        "devbackend/authgram-request-handler": "^2.0" 
    }
}
```

After installing, you need to require Composer's autoloader:

```php
require vendor/autoload.php;
```

And create instance of request handler by passing to it constructor your application token:
```php
$requestHandler = new Devbackend\AuthGramRequestHandler\AuthGramRequestHandler('[APPLICATION_TOKEN]');

if ($requestHandler->isValidToken()) {
    $request = $requestHandler->getRequest();

    $authKey  = $request->getAuthKey();
    $user     = $request->getUser();    
    $username = $user->getUsername();
}
```

Installation
----------------------------------------------------------------

Require the bundle and its dependencies with composer:

    $ composer require next-sentence/afterbuy-sdk
 
Usage
----------------------------------------------------------------

```php
<?php
      
      require_once __DIR__ . './../vendor/autoload.php';
      
      $config = array(
          'userId'     => 'userid',
          'userPass' => 'userpass',
          'partnerId'    => '123456',
          'partnerPass'    => '123',
          'errorLang'    => 'en',
      );
      
      
      $factory  = new Ns\Afterbuy\Factory();
      $api = $factory->createRequest($config);
      try {
          $soldItems =  $api->getSoldItems();
          $result = $soldItems->getResult();
          var_dump($result);
      } catch (Exception $e) {
          echo $e;
      }
```

The response will be an instance of `Ns\Afterbuy\Model\UpdateSoldItems\UpdateSoldItemsResponse`.

Dependencies
----------------------------------------------------------------
* `jms/serializer` - Allows you to easily serialize, and deserialize data of any complexity
* `guzzlehttp/guzzle` - Guzzle is a PHP HTTP client library
* `monolog/monolog` - Monolog lib

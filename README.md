# PhalconPHP
An example application built with the Phalcon PHP extension.

### Local Setup

As PhalconPHP exists in memory, and does not live within the vendor folder, to get PHPStorm to not show errors on it's 
dependencies. You can install the Phalcon-4-autocomplete plugin.

[https://github.com/ruudboon/phpstorm-phalcon-4-autocomplete](https://github.com/ruudboon/phpstorm-phalcon-4-autocomplete)

To setup you local environment you must run the following command:

```bash
docker-compose up
```

Once built the application is accessible at: [http://localhost:8080/](http://localhost:8080/)

### Testing

To test phpcs you can run:

```bash
composer run phpcs
```
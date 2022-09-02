# PHP-CS-FIXER
- [github php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

## PHP CS Fixer
The PHP Coding Standards Fixer (PHP CS Fixer) tool fixes your code to follow standards. See: [SensioLabs](https://cs.symfony.com)

### Install
You will need to install it into the project vendors to run in CI jobs:
```bash
$ composer require --dev friendsofphp/php-cs-fixer
```

### Setting
You should include our coding standard rules' [config file](/tools/php-cs-fixer/php-cs-fixer.dist.php) into the root of your project for the fixer
to use when fixing code. You may need to adjust the `Finder` paths to suite your project.

> For list of all rule sets visit https://mlocati.github.io/php-cs-fixer-configurato
>
> !!! You may ADD additional rules to your project, but you MUST NOT remove/disable any rules defined in our coding
> standard rules file above !!!



#
[return to main page](../README.md)
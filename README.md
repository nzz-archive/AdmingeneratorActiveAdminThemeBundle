# The rails admin theme for the symfony2 generator ![project status](http://stillmaintained.com/cedriclombardot/AdmingeneratorActiveAdminThemeBundle.png)#

AdmingeneratorActiveAdminTheme is a theme for the [AdmingeneratorGeneratorBundle](https://github.com/cedriclombardot/AdmingeneratorGeneratorBundle)

## This skin in picture

![Preview of list](https://github.com/cedriclombardot/AdmingeneratorActiveAdminThemeBundle/raw/master/Resources/doc/list-preview.png)

## Installation

````
git submodule add git://github.com/cedriclombardot/AdmingeneratorActiveAdminThemeBundle.git vendor/bundles/Admingenerator/ActiveAdminThemeBundle
````

Add it to the `AppKernel` class:

````
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        // Admin Generator
        new Admingenerator\GeneratorBundle\AdmingeneratorGeneratorBundle(),
        new Admingenerator\ActiveAdminThemeBundle\AdmingeneratorActiveAdminThemeBundle(),
    );

    // ...
}
````

## With assetic

````
admingenerator_generator:
    base_admin_template: AdmingeneratorActiveAdminThemeBundle::base_admin.html.twig
````

## Without assetic

````
admingenerator_generator:
    base_admin_template: AdmingeneratorActiveAdminThemeBundle::base_admin_assetic_less.html.twig
````

## With or without assetic

Publish assets:

````
    php app/console assets:install web/
````

This theme use Super Mono Icons from Double-J Design (http://www.doublejdesign.co.uk)
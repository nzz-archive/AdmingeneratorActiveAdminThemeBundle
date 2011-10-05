# The rails admin theme for the symfony2 generator

AdmingeneratorActiveAdminTheme is a theme for the [AdmingeneratorGeneratorBundle](https://github.com/cedriclombardot/AdmingeneratorGeneratorBundle)

## Installation

````
git submodule add git://github.com/cedriclombardot/AdmingeneratorGeneratorBundle.git vendor/bundles/Admingenerator/ActiveAdminThemeBundle
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

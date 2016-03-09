# GuzzleStereoBundle

[![Latest Stable Version](https://poser.pugx.org/estahn/guzzle-stereo-bundle/version.png)](https://packagist.org/packages/estahn/guzzle-stereo-bundle)
[![Total Downloads](https://poser.pugx.org/estahn/guzzle-stereo-bundle/d/total.png)](https://packagist.org/packages/estahn/guzzle-stereo-bundle)
[![Dependency Status](https://www.versioneye.com/user/projects/56e04e13df573d003f20b20d/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56e04e13df573d003f20b20d)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6fffbf31-044d-468f-8dba-e962d8fd626d/mini.png)](https://insight.sensiolabs.com/projects/6fffbf31-044d-468f-8dba-e962d8fd626d)
[![Build Status](https://travis-ci.org/estahn/guzzle-stereo-bundle.png?branch=master)](https://travis-ci.org/estahn/guzzle-stereo-bundle)
[![StyleCI](https://styleci.io/repos/53498097/shield)](https://styleci.io/repos/53498097)


Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require estahn/guzzle-stereo-bundle --dev
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EnricoStahn\Bundle\GuzzleStereoBundle\GuzzleStereoBundle(),
        );

        // ...
    }

    // ...
}
```
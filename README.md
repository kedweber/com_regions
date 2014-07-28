# com_regions

## Introduction

Several CTA websites, e.g. [Web2fordev](http://web2fordev.net) have the requirement that content can be filtered by
region. Therefore, a taxonomy-based Regions component was developed. This component is designed to integrate
seamlessly with the Moyo CCK.

The regions component was developed by [Moyo Web Architects](http://moyoweb.nl).

## Requirements

* Joomla 2.5 or 3.X .
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* Moyo Components
    * com_articles
    * com_cck
    * com_moyo
    * com_routes
    * com_taxonomy
    * com_translations

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "cta-platform/regions",
    "type": "vcs",
    "url": "https://git.assembla.com/cta-platform.regions.git"
}
```

The require section should contain the following line:

```json
    "cta-platform/regions": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

## Usage

There is only an administrative backend. The administrative backend can be accessed by navigating to 'Components >> Regions'.
Regions are saved as CCK taxonomies in the database. Please consult the documentation for taxonomies for more information.

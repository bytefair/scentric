# Scentric, a responsive development system for Wordpress

## Overview

Scentric is a responsive development system for Wordpress sites or blogs that is based on Automattic's _s theme, which is a starter theme meant for hardcore themers and CSS artists. I strongly disagree with some of the choices they have made with the foundations of _s, so I replaced the foundations of _s with Normalize.css and the helper classes from HTML5 Boilerplate. I think this makes Scentric a much saner place to begin theming for people who code using developer tools in their browsers.

I also am adding cool new features for coder-types like fancy code highlighting for technical bloggers, a customizable development grid overlay, useful custom WP functions, and possibly more. I want this to become a theme that has everything you'd want for WP theming and nothing you don't.

Please submit patches on Github if you find bugs or would like to make improvements.

## How to Start Developing with Scentric

### Getting Started

1. Scentric is not suitable for parent theming (yet), it is meant to be updated directly.
2. Scentric requires WP 3.4 or greater. I tend to remove deprecated functionality immediately.

### Customizing JavaScript

1. All scripts are loaded from scentric_scripts() in functions.php. Modernizr is loaded in the head, jQuery is loaded the default way, and js/plugins.js and js/scripts.js are loaded in the footer. If want to use something else, change it here.
2. jQuery plugins go into plugins.js and custom scripts go in scripts.js.

## Scentric Changelog

__v0.1__

* Switched the reset from Blueprint's to Normalize.css, which is superior for developer tools and arguably for developers too
* Switched some of the header elements over to Boilerplate style and CSS style as well as fixing most CSS collisions

__v0.2__

* Added Rainbow.js for code theming out of the box. This jQuery plugin is located in plugins.js
* Moved all the Boilerplate style loading over to be handled by WordPress, like it wants

__v0.3__

* Many small bugfixes including fixing the buttons and input sizing from _s defaults

__v0.4__

* Brought in tons of bugfixes from _s 1.1

__v0.5__

* Updated content.php and removed Google Analytics snippet from footer.php

__v0.7__

* Switched all CSS to Compass format for easier management. Files are located in `sass/` and are compiled from `style.scss` to `style.css` in the root directory. I still use Normalize rather than Compass reset but that may change before 1.0.

__v0.9__

* Merging of features from mens-tk, another WP framework I was working on. I am now merging these themes.
* Readded small-menu.js and removed rainbow.js
* Ran theme against many checks and removed deprecated function overrides and other deprecated functionality

__v1.0__

* Theme validates and meets all normal expectations for WP.org themes aside from post thumbnail support built in.
* Lots of minor cleanup of the code.
* Finally created a screenshot.png file

## Components

* [Normalize.css](http://necolas.github.com/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [_s WordPress theme](https://github.com/Automattic/_s)
* [Sass](http://sass-lang.com) & [Compass](http://compass-style.org)

## License

Copyright (C) 2011-2012 Paul Edmon Graham

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

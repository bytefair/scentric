# Scentric, a responsive-ready development system for WordPress

## Overview

Scentric is a development skeleton for WordPress aimed at people who want to build totally custom WP themes without writing basic content display code. Scentric is based on the _s theme from Automattic which is meant to be a modern toolkit for theme work. Scentric in particular makes it easy to replace the default reset with Normalize using Sass and Compass. Scentric also uses many elements from the HTML5 Boilerplate in its templates.

One of the coolest things about Scentric is that it's totally responsive-ready. It does not include any grid systems or any assumptions about what sort of layout you might want, but it does include responsive units wherever possible as well as a full copy of Modernizr with the HTML5 shim for proper progressive enhancement.

## Components

* [Normalize.css](http://necolas.github.com/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [_s WordPress theme](https://github.com/Automattic/_s)
* [Sass](http://sass-lang.com) & [Compass](http://compass-style.org)
* [Modernizr](http://modernizr.com/)

Please submit patches on Github at bytefair/scentric if you find bugs or would like to make improvements.

## How to Start Developing with Scentric

### Requirements

1. WordPress 3.4 installation or highers
2. Method to compile Compass/Sass be it the Unix tools, CodeKit, etc. __Scentric does not come with a default stylesheet out of the box.__ The stylesheet must be compiled from sass/style.scss.
3. PHP 5.3

### Development Steps

1. Scentric is not suitable for parent theming (yet), it is meant to be updated directly. There's little in here that you would need to upgrade. The JS libraries and such are self-upgradeable. Some functions may be moved to core or deprecated, but you should be dealing with that on an individual basis and checking your themes with the popular testing tools anyway.
2. [Set up your basic CSS](#customizing-css) in sass/style.scss.
3. [Set up your basic JS stack](#customizing-javascript).
4. Install the testing tools [located here on the WP codex](http://codex.wordpress.org/Theme_Unit_Test) and also on [this page about the Theme Reviewers team](http://make.wordpress.org/themes/about/how-to-join-wptrt/). This will assure your theme works correctly.
5. If you want to [define custom types or taxonomies in your theme](#how-to-build-custom-post-types-or-taxonomies-with-the-scentric-custom-types-helper), use the helper class defined in inc/custom-types.php and define those types in functions.php. If you do not need them, consider deleting inc/custom-types.php and all references.
6. There are several dynamic widget areas, 2 in the sidebar and 4 in the footer. Disable them if you don't need them or create more. They are definied in functions.php and called in sidebar.php and footer.php.
7. _s has several desirable tweaks located in inc/tweaks.php. You might want to include them in functions.php. They are located in a separate file because their functionality is likely to move into core. They are disabled by default.
8. Once your theme is developed and it passes your testing plugins satisfactorily, it's ready for deployment.
9. Make sure you minimize and compress your CSS and JS. Scentric includes the development versions of the JS libraries only. You will need to include compressed ones or link to CDN versions yourself.
10. If you use Apache, consider adding the directives in add-to-htaccess.txt to your .htaccess file.

### Customizing CSS

Scentric utilizes Sass and Compass for organizing CSS styles. It's entirely possible that the helpers and such will even be rewritten in Sass entirely to make them as small as possible. For now, they are simply carved out of _s theme's styles.

1. Choose whether you want to use Compass's default reset (Eric Meyer's) or Normalize.css (recommended). If you use Normalize, you will probably have to edit some of the default WP styles in sass/partials/_wp-styles.scss.
2. Set up the way you want your CSS compiled in sass/style.scss. Editor styles are defined in sass/editor-style.scss.
3. Boilerplate helpers are in sass/partials/_bp-helpers.scss. You probably want to keep these classes.
4. Include your own Sass files in style.scss under the line specified in the Sass file.
5. Compile your Sass file to generate style.css in the theme root. You will need to use the command line tools or a third party tool like Compass.app or CodeKit to do this.

### Customizing JavaScript

1. All scripts are loaded from scentric_scripts() in functions.php. Modernizr is loaded in the head, jQuery is loaded the default way, and js/plugins.js and js/scripts.js are loaded in the footer. If want to use something else, change it here.
2. jQuery plugins go into plugins.js and custom scripts go in scripts.js.
3. If you don't need a menu, remove small-menu.js. If you don't need any JS, obviously remove all of this and the script loaders from functions.php.

### How to Build Custom Post Types or Taxonomies with the Scentric Custom Types Helper

There's nothing particularly wrong with defining custom functionality in your themes, just be aware that you will have to carry this functionality over to another theme if you want to access it from your administrative backend. You might want to consider doing this with a plugin instead.

If you can handle doing it in your theme, Scentric comes with some nice helper classes for taxonomies and class types. Meta boxes have not been integrated into the helpers yet and you must create these manually for now.

You define custom types and taxonomies in functions.php. There are examples of function calls at the bottom of this file. Scentric establishes sane defaults for most options, but you will of course want to pass in any options as an array like in the example.

If you need help with custom types or taxonomies, [WordPress has an extremely informative Codex page](http://codex.wordpress.org/Post_Types) about this. If you do not need custom types, please consider deleting all the content related to them.

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
* Added 4 more widget areas to footer
* Added more informative documentation

__v1.1__

* Added jQuery 1.8.0 and had it queued by default. Change the line in functions.php if you want to use 1.7.2. It will be removed if there are few problems with jQuery 1.8.
* Removed old Modernizr library.

__v1.1.1__

* Updated Normalize.css to v1.0

__v1.2__

* Updated Normalize.css to v1.0.1
* Added Normalize.css 2.0.1
* Updated to jQuery 1.8.2
* Updated to Modernizr 2.6.2

__v1.5__

* Updated all the core files to reflect new code in the bases (_s theme and HTML5 Boilerplate)
* Bumped the versions of Normalize 2 and jQuery 1.8.3
* Added new JS code from _s
* Reorganized Sass files and removed all _s styles
* Now only include the print helpers from Boilerplate
* Preperations for drastic changes in 2.0, will include many advanced Sass features like heavy use of Compass and Susy and opinionated style choices

## Planned Additions

* (Definitely) Include code for configuring Nginx as well as Apache.
* (Likely) Include helper class for meta boxes in custom-types.php
* (Likely) Include several Sassified grid systems for easy responsive development. I'm not sure how I want to do this yet or which systems I should even include.
* (Possibly) Move custom types to a plugin, which is probably the way to go. In the meantime, I endorse using [Easy Custom Content Types for WordPress](http://codecanyon.net/item/easy-custom-content-types-for-wordpress/234182). I've heavily examined the code and it's of extremely high quality and uses almost entirely native WP functionality. You don't even need to keep the plugin installed once you've generated the code. If you'd like to do custom types as a plugin, use this.
* (Possibly) Write an admin backend for custom types
* (Possibly) Write a default template handler for custom types.

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

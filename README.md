# README

Trax is a base WordPress project, with the Sixth Story theme, to get you up and running with building a WordPress website.

Trax is to be used in conjunction with Laravel Valet.

## Set up

-   Ensure you have Laravel Valet installed and setup
-   Clone/Download the repo to your local project folder and add to new repo
-   Run `composer install` from within the public directory
-   Set up a .env file in public with your local details to be used in the wordmove file and wp-config
-   cd into the 'public' directory of the site folder, and run 'valet link NAME', making sure it's not the same as the outer project folder name
-   Access your project in your browser via NAME.test
-   Switch to use Sixth Story theme
-   Add ACF Pro license key (this can be found in 1Password) to the updates page of the plugin.

## Running Gulp

-   In terminal, cd into the theme folder and run 'npm install' to install all of the gulp dependencies
-   Once installed, run 'gulp' in Terminal

## Database Access

### MySQL

We now have remote SQL Databases for sites going forward (from December 2019). Follow these steps to set up your local database

-   Search 'Local Databases' on 1Password and log into the cpanel using the details provided here
-   Click MySQL Database Wizard and follow the steps provided. Please try and make the database name and username the same. The password will also need to be used when you set up the staging site datbase.
-   All the database details for local and staging should be put into 1Password within the same entry.
-   You can then use the details in your .env file

## Plugins

There are some plugins installed on Trax as standard. These have all been vetted and approved for use by Sixth Story developers. Plugins are not just to be added whenever you fancy, "there's a plugin for that" is not the answer.

### ACF Content Analysis for Yoast SEO

Ensure that Yoast SEO analyses all Advanced Custom Fields 4 and 5 content including Flexible Content and Repeaters.

### Advanced Custom Fields PRO

Allows the addition of custom fields to WordPress admin pages.

### Classic Editor

Allows the old-style view of WordPress - we’re not quite ready for Gutenburg yet.

### Contact Form 7

Contact Form plugin.

### EWWW Image Optimiser

Reduces file sizes for images within WordPress. All images added by Sixth Story should still be run through TinyPNG before being added.

### Mailgun

Mailgun integration for WordPress - see section on Mailgun for more info

### Nested Pages

Provides a drag and drop interface for managing pages in the Wordpress admin, while enhancing quick edit.

### WP Cerber Security, Antispam & Malware Scan

Defends WordPress against hacker attacks, spam, trojans, and viruses. Malware scanner and integrity checker.

### WP Fastest Cache

Enables caching. Essential for improving the speed of sites.

### Yoast SEO

Used for everything SEO. Meta titles, meta descriptions, sitemaps etc.

## Features

### Bootstrap

Version 4 of Bootstrap is included in the project as default. We mainly just use the grid structure and utility classes from this. It is imported in the project using npm and then included in the app.scss file.

### Font Awesome

Font Awesome PRO is included in the project with npm.

Make sure you have Font Awesome Pro set up globally on your computer, do this with the following commands (getting the token from 1Password):

```
npm config set "@fortawesome:registry" https://npm.fontawesome.com/ && \
npm config set "//npm.fontawesome.com/:_authToken" TOKEN
```

It should then download automatically on your initial npm install, but if it doesn't then run the following command in the theme root:

```
npm install --save-dev @fortawesome/fontawesome-pro
```

### Animate.css

Animate.css is included in Trax as standard within the app.scss file. It's installed using npm and then imported into the app.scss file. If you cannot get it working then please consult the Font Awesome section of this README.

### WOW.js

wow.js is included in the project by default. It is installed using npm and then pulled into the project in the app.js file. The initialisation of it us already included too.

### Smooth Scroll JS Function

There is a js function included already that enable smooth scroll of anchor links. It's setup to smooth scroll any link that has a href that's prefixed with #anchor- eg.

```
<a href="#anchor-top">Link</a>
```

### Archive.php Pagination Fix

In /includes/core/theme-support.php, there is a function included to fix the posts per page bug that exists within WordPress. Please set how many posts you would like for each post type archive page here.

### Cache Busting CSS and Javascript

Using Gulp, we have created a method of compiling our assets that will mean a client never has to clear their cache ever again. It generates the files with hashes within the names when changes are made, deleting the older files while it’s at it, and putting the file names into a rev-manifest.json file. There is then a php function within the enqueue file that will pull the hashed names of the files from a rev-manifest.json file, meaning every time changes are made to the CSS and JS files, the browser will recognise these as new files, so it won’t use the cached versions.

## SASS Folder Structure

-   Settings – used with preprocessors and contain font, colors definitions, etc.
-   Tools – globally used mixins and functions. It’s important not to output any CSS in the first 2 layers.
-   Generic – reset and/or normalize styles, box-sizing definition, etc. This is the first layer which generates actual CSS.
-   Elements – styling for bare HTML elements (like H1, A, etc.). These come with default styling from the browser so we can redefine them here.
-   Objects – class-based selectors which define undecorated design patterns, for example media object known from OOCSS
-   Components – specific UI components. This is where the majority of our work takes place and our UI components are often composed of Objects and Components
-   Helpers – utilities and helper classes with ability to override anything which goes before in the triangle, eg. hide helper class

More info can be found here: https://www.xfive.co/blog/itcss-scalable-maintainable-css-architecture/

# Control Panel Style

A plugin to create a more visual appealing Craft CMS Control Panel for you and your clients.

## Requirements

This plugin requires Craft CMS 5.x or later, and PHP 8.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Control Panel Style”. Then press “Install”.

#### With Composer

Run the following command in the root directory of your Craft project:

```bash
# go to the project directory
cd /path/to/my-project.site

# tell Composer to load the plugin
composer require vaughndtaylor/craft-control-panel-style

```

## Theme Chooser

This is by far the easiest way to add style to your control panel. If you like the overall theme, but want to tweak small parts, you can do that with the CSS Editor which will override the theme.

## CSS Editor

Choose this option if you want to add just a few lines of CSS, or even hundreds of lines.


## Static CSS File(s)

It's your CMS, so why not create a custom look? After you've created your own CSS, simply put it in a publicly accessible location on your server, eg. `/web/dist/css/fancy.css` and add the path to the Static CSS file field. Toggle the field on, and turn on cache busting if necessary.

## CSS Variables

Craft uses TailwindCSS for styling which presents us with a bunch of CSS variables used for color, radiuses, padding, margins and more. Get crazy and set the the border radiuses to small=16, medium=18, and large=20 for pill buttons and soft corners!

## Control Panel Structure

The prebuilt themes are based on the page structure as specified in `./vendor/craftcms/cms/src/templates/_layouts/cp.twig`.

    ┌────────────────────────────────────────────────────────────────────────────────────┐
    │                                 #global-container                                  │
    │   ┌─────┐   ┌──────────────────────────────────────────────────────────────────┐   │
    │   │     │   │                         #page-container                          │   │
    │   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
    │   │     │   │   │                      #global-header                      │   │   │
    │   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
    │   │     │   │                                                                  │   │
    │   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
    │   │     │   │   │                          #main                           │   │   │
    │   │  #  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
    │   │  g  │   │   │   │                #header-container                 │   │   │   │
    │   │  l  │   │   │   └──────────────────────────────────────────────────┘   │   │   │
    │   │  o  │   │   │                                                          │   │   │
    │   │  b  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
    │   │  a  │   │   │   │                  #main-content                   │   │   │   │
    │   │  l  │   │   │   │   ┌─────┐   ┌──────────────────────┐   ┌─────┐   │   │   │   │
    │   │  -  │   │   │   │   │     │   │                      │   │     │   │   │   │   │
    │   │  s  │   │   │   │   │  #  │   │                      │   │  #  │   │   │   │   │
    │   │  i  │   │   │   │   │  s  │   │                      │   │  d  │   │   │   │   │
    │   │  d  │   │   │   │   │  i  │   │                      │   │  e  │   │   │   │   │
    │   │  e  │   │   │   │   │  d  │   │       #content       │   │  t  │   │   │   │   │
    │   │  b  │   │   │   │   │  e  │   │                      │   │  a  │   │   │   │   │
    │   │  a  │   │   │   │   │  b  │   │                      │   │  i  │   │   │   │   │
    │   │  r  │   │   │   │   │  a  │   │                      │   │  l  │   │   │   │   │
    │   │     │   │   │   │   │  r  │   │                      │   │  s  │   │   │   │   │
    │   │     │   │   │   │   │     │   │                      │   │     │   │   │   │   │
    │   │     │   │   │   │   └─────┘   └──────────────────────┘   └─────┘   │   │   │   │
    │   │     │   │   │   │                                                  │   │   │   │
    │   │     │   │   │   └──────────────────────────────────────────────────┘   │   │   │
    │   │     │   │   │                                                          │   │   │
    │   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
    │   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
    │   │     │   │   │                      #global-footer                      │   │   │
    │   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
    │   └─────┘   └──────────────────────────────────────────────────────────────────┘   │
    │                                                                                    │
    └────────────────────────────────────────────────────────────────────────────────────┘

## TAILWIND CSS GENERATED COLOR PALETTE:

There are a bunch of color variables to choose from all created by TailwindCSS's default palette. Of course you can also generate your own palette of colors using a custom TailwindCSS config file.

## NOTES ON CRAFT'S PALETTE:

Some of the default TailwindCSS colors are missing from Craft's implemenation of the palette: slate, zinc, neutral, and stone – basically the gray tones have been limited to a cold and arguably lifeless palette.

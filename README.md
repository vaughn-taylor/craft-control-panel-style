# Control Panel Style

A plugin to create a more visual appealing Craft CMS Control Panel for you and your clients.

## Requirements

This plugin requires Craft CMS 5.1.0 or later, and PHP 8.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Control Panel Style”. Then press “Install”.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require vaughndtaylor/craft-control-panel-style

# tell Craft to install the plugin
./craft plugin/install control-panel-style
```

## CONTROL PANEL STRUCTURE

From ./vendor/craftcms/cms/src/templates/_layouts/cp.twig
The nested CSS above is based on this structure. Nesting will add specificity to the CSS,
so be aware that this CSS is a very strong force. For more information, read this 
article which was originally posted in 2005, but is still very relevant regarding CSS
specificity: https://stuffandnonsense.co.uk/archives/css_specificity_wars.html

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

There are a bunch of color variables to choose from all created by TailwindCSS's default palette. Of course you can also generate your own palette of colors using a custom Tailwind config file, but it's not recommended that you simply override the variables below with different colors – this could get very messy!

## NOTES ON CRAFT'S PALETTE:

Craft CMS has remapped the gray palette from defaults to HSL variations.
Some of the default TailwindCSS palette colors are missing from this list:
slate, zinc, neutral, and stone – basically the gray tones have been limited to a cold
and arguably lifeless palette.

## GENERATE YOUR OWN PALETE:

It's your CMS, so why not create a custom palette? If you decide generate your own palette, you should keep your CMS-related configuration separate from your Front-facing Tailwind config (the CSS that styles your website). Luckily, having multiple configs is now a core function of TailwindCSS using the @config directive: https://tailwindcss.com/docs/functions-and-directives#config

## VARIABLES FROM TAILWINDCSS

The following variables are already present in the compiled CSS from Craft CMS:

    --white: #fff;
    --black: #000;
    --gray-050-hsl: 212,60%,97%;
    --gray-100-hsl: 212,50%,93%;
    --gray-150-hsl: 212,40%,89%;
    --gray-200-hsl: 212,30%,85%;
    --gray-300-hsl: 211,13%,65%;
    --gray-350-hsl: 211,11%,59%;
    --gray-400-hsl: 210,10%,53%;
    --gray-500-hsl: 211,12%,43%;
    --gray-550-hsl: 210,13%,40%;
    --gray-600-hsl: 209,14%,37%;
    --gray-700-hsl: 209,18%,30%;
    --gray-800-hsl: 209,20%,25%;
    --gray-900-hsl: 210,24%,16%;
    --gray-1000-hsl: 210,24%,10%;
    --gray-050: hsl(var(--gray-050-hsl));
    --gray-100: hsl(var(--gray-100-hsl));
    --gray-150: hsl(var(--gray-150-hsl));
    --gray-200: hsl(var(--gray-200-hsl));
    --gray-300: hsl(var(--gray-300-hsl));
    --gray-350: hsl(var(--gray-350-hsl));
    --gray-400: hsl(var(--gray-400-hsl));
    --gray-500: hsl(var(--gray-500-hsl));
    --gray-550: hsl(var(--gray-550-hsl));
    --gray-600: hsl(var(--gray-600-hsl));
    --gray-700: hsl(var(--gray-700-hsl));
    --gray-800: hsl(var(--gray-800-hsl));
    --gray-900: hsl(var(--gray-900-hsl));
    --gray-1000: hsl(var(--gray-1000-hsl));
    --red-050: #fef2f2;
    --red-100: #fee2e2;
    --red-200: #fecaca;
    --red-300: #fca5a5;
    --red-400: #f87171;
    --red-500: #ef4444;
    --red-600: #dc2626;
    --red-700: #b91c1c;
    --red-800: #991b1b;
    --red-900: #7f1d1d;
    --red-950: #450a0a;
    --orange-050: #fff7ed;
    --orange-100: #ffedd5;
    --orange-200: #fed7aa;
    --orange-300: #fdba74;
    --orange-400: #fb923c;
    --orange-500: #f97316;
    --orange-600: #ea580c;
    --orange-700: #c2410c;
    --orange-800: #9a3412;
    --orange-900: #7c2d12;
    --orange-950: #431407;
    --amber-050: #fffbeb;
    --amber-100: #fef3c7;
    --amber-200: #fde68a;
    --amber-300: #fcd34d;
    --amber-400: #fbbf24;
    --amber-500: #f59e0b;
    --amber-600: #d97706;
    --amber-700: #b45309;
    --amber-800: #92400e;
    --amber-900: #78350f;
    --amber-950: #451a03;
    --yellow-050: #fefce8;
    --yellow-100: #fef9c3;
    --yellow-200: #fef08a;
    --yellow-300: #fde047;
    --yellow-400: #facc15;
    --yellow-500: #eab308;
    --yellow-600: #ca8a04;
    --yellow-700: #a16207;
    --yellow-750: #93580b;
    --yellow-800: #854d0e;
    --yellow-900: #713f12;
    --yellow-950: #422006;
    --lime-050: #f7fee7;
    --lime-100: #ecfccb;
    --lime-200: #d9f99d;
    --lime-300: #bef264;
    --lime-400: #a3e635;
    --lime-500: #84cc16;
    --lime-600: #65a30d;
    --lime-700: #4d7c0f;
    --lime-800: #3f6212;
    --lime-900: #365314;
    --lime-950: #1a2e05;
    --green-050: #f0fdf4;
    --green-100: #dcfce7;
    --green-200: #bbf7d0;
    --green-300: #86efac;
    --green-400: #4ade80;
    --green-500: #22c55e;
    --green-600: #16a34a;
    --green-700: #15803d;
    --green-800: #166534;
    --green-900: #14532d;
    --green-950: #052e16;
    --emerald-050: #ecfdf5;
    --emerald-100: #d1fae5;
    --emerald-200: #a7f3d0;
    --emerald-300: #6ee7b7;
    --emerald-400: #34d399;
    --emerald-500: #10b981;
    --emerald-600: #059669;
    --emerald-700: #047857;
    --emerald-800: #065f46;
    --emerald-900: #064e3b;
    --emerald-950: #022c22;
    --teal-050: #f0fdfa;
    --teal-100: #ccfbf1;
    --teal-200: #99f6e4;
    --teal-300: #5eead4;
    --teal-400: #2dd4bf;
    --teal-500: #14b8a6;
    --teal-550: #11a697;
    --teal-600: #0d9488;
    --teal-700: #0f766e;
    --teal-800: #115e59;
    --teal-900: #134e4a;
    --teal-950: #042f2e;
    --cyan-050: #ecfeff;
    --cyan-100: #cffafe;
    --cyan-200: #a5f3fc;
    --cyan-300: #67e8f9;
    --cyan-400: #22d3ee;
    --cyan-500: #06b6d4;
    --cyan-600: #0891b2;
    --cyan-700: #0e7490;
    --cyan-800: #155e75;
    --cyan-900: #164e63;
    --cyan-950: #083344;
    --sky-050: #f0f9ff;
    --sky-100: #e0f2fe;
    --sky-200: #bae6fd;
    --sky-300: #7dd3fc;
    --sky-400: #38bdf8;
    --sky-500: #0ea5e9;
    --sky-600: #0284c7;
    --sky-700: #0369a1;
    --sky-800: #075985;
    --sky-900: #0c4a6e;
    --sky-950: #082f49;
    --blue-050: #eff6ff;
    --blue-100: #dbeafe;
    --blue-200: #bfdbfe;
    --blue-300: #93c5fd;
    --blue-400: #60a5fa;
    --blue-500: #3b82f6;
    --blue-600: #2563eb;
    --blue-700: #1d4ed8;
    --blue-800: #1e40af;
    --blue-900: #1e3a8a;
    --blue-950: #172554;
    --indigo-050: #eef2ff;
    --indigo-100: #e0e7ff;
    --indigo-200: #c7d2fe;
    --indigo-300: #a5b4fc;
    --indigo-400: #818cf8;
    --indigo-500: #6366f1;
    --indigo-600: #4f46e5;
    --indigo-700: #4338ca;
    --indigo-800: #3730a3;
    --indigo-900: #312e81;
    --indigo-950: #1e1b4b;
    --violet-050: #f5f3ff;
    --violet-100: #ede9fe;
    --violet-200: #ddd6fe;
    --violet-300: #c4b5fd;
    --violet-400: #a78bfa;
    --violet-500: #8b5cf6;
    --violet-600: #7c3aed;
    --violet-700: #6d28d9;
    --violet-800: #5b21b6;
    --violet-900: #4c1d95;
    --violet-950: #2e1065;
    --purple-050: #faf5ff;
    --purple-100: #f3e8ff;
    --purple-200: #e9d5ff;
    --purple-300: #d8b4fe;
    --purple-400: #c084fc;
    --purple-500: #a855f7;
    --purple-600: #9333ea;
    --purple-700: #7e22ce;
    --purple-800: #6b21a8;
    --purple-900: #581c87;
    --purple-950: #3b0764;
    --fuchsia-050: #fdf4ff;
    --fuchsia-100: #fae8ff;
    --fuchsia-200: #f5d0fe;
    --fuchsia-300: #f0abfc;
    --fuchsia-400: #e879f9;
    --fuchsia-500: #d946ef;
    --fuchsia-600: #c026d3;
    --fuchsia-700: #a21caf;
    --fuchsia-800: #86198f;
    --fuchsia-900: #701a75;
    --fuchsia-950: #4a044e;
    --pink-050: #fdf2f8;
    --pink-100: #fce7f3;
    --pink-200: #fbcfe8;
    --pink-300: #f9a8d4;
    --pink-400: #f472b6;
    --pink-500: #ec4899;
    --pink-600: #db2777;
    --pink-700: #be185d;
    --pink-800: #9d174d;
    --pink-900: #831843;
    --pink-950: #500724;
    --rose-050: #fff1f2;
    --rose-100: #ffe4e6;
    --rose-200: #fecdd3;
    --rose-300: #fda4af;
    --rose-400: #fb7185;
    --rose-500: #f43f5e;
    --rose-600: #e11d48;
    --rose-700: #be123c;
    --rose-800: #9f1239;
    --rose-900: #881337;
    --rose-950: #4c0519;

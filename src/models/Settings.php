<?php

/**
 * Control Panel Style plugin for Craft CMS
 *
 * Add elegant style to your control panel.
 *
 * @author    Vaughn D. Taylor
 * @link      https://vaughndtaylor.com/
 * @copyright Copyright (c) 2024 Vaughn D. Taylor
 * @license https://craftcms.github.io/license/ Craft License
 */

namespace vaughndtaylor\craftcontrolpanelstyle\models;

use Craft;
use craft\base\Model;

/**
 * Control Panel Style Settings
 */
class Settings extends Model
{
    /**
     * @var string Path to the static CSS file.
     */
    public string $cssStaticFile = '';

    /**
     * @var string Additional CSS styling from the Code Editor.
     */
    public string $cssCodeEditor = '';

    /**
     * @var bool Toggle additional CSS on/off.
     */
    public bool $includeCodeEditor = false;

    /**
     * @var bool Toggle static CSS on/off.
     */
    public bool $includeCssStaticFile = false;

    /**
     * @var bool Boolean to enable hash-based cache busting.
     */
    public bool $cacheBusting = false;

    /**
     * @var string Small border radius for panes.
     */
    public string $smallBorderRadius = '';

    /**
     * @var string Medium border radius for panes.
     */
    public string $mediumBorderRadius = '';

    /**
     * @var string Large border radius for panes.
     */
    public string $largeBorderRadius = '';

    /**
     * @var string XS size variable.
     */
    public string $xsSize = '';

    /**
     * @var string S size variable.
     */
    public string $sSize = '';

    /**
     * @var string M size variable.
     */
    public string $mSize = '';

    /**
     * @var string L size variable.
     */
    public string $lSize = '';

    /**
     * @var string XL size variable.
     */
    public string $xlSize = '';

    /**
     * @var string global padding size variable.
     */
    public string $paddingSize = '';

    /**
     * @var string global sidebar width.
     */
    public string $globalSidebarWidth = '';

    /**
     * @var string sidebar width.
     */
    public string $sidebarWidth = '';

    /**
     * @var string header height.
     */
    public string $headerHeight = '';

    /**
     * @var string details pane width.
     */
    public string $detailsWidth = '';

    /**
     * @var string touch target size.
     */
    public string $touchTargetSize = '';

    /**
     * @var bool Toggle CSS variables on/off.
     */
    public bool $includeCSSVariables = false;

    /**
     * @var string Theme chooser.
     */
    public string $themeChooser = '';

    /**
     * @var bool Toggle Theme on/off.
     */
    public bool $includeTheme = false;

}

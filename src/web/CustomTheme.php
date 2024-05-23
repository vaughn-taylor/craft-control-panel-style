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

namespace vaughndtaylor\craftcontrolpanelstyle\web;

use Craft;
use craft\helpers\App;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;
use vaughndtaylor\craftcontrolpanelstyle\ControlPanelStyle;
use vaughndtaylor\craftcontrolpanelstyle\models\Settings;

class CustomTheme extends AssetBundle 
{
    public function init(): void 
    {
        parent::init();

        $this->sourcePath = "@vaughndtaylor/craftcontrolpanelstyle/web/dist/css";

        // Default CP assets must be loaded first
        $this->depends = [CpAsset::class];

        // Get plugin settings
        /** @var Settings $settings */
        $settings = ControlPanelStyle::$plugin->getSettings();

        $showTheme = $settings->includeTheme;

        if($showTheme) {

            // Get the theme file
            $file = trim($settings['themeChooser']);

            // If no file was specified, bail
            if (!$file) {
                return;
            }

            $this->css = [
                "cps-".trim($settings->themeChooser).".css",
            ];

        }

    }
}

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

class CustomAssets extends AssetBundle
{

    public function init(): void
    {
        parent::init();

        // Default CP assets must be loaded first
        $this->depends = [CpAsset::class];

        // Get plugin settings
        /** @var Settings $settings */
        $settings = ControlPanelStyle::$plugin->getSettings();

        // Get the file (or files) specified
        $file = trim($settings['cssStaticFile']);

        // If no file was specified, bail
        if (!$file) {
            return;
        }

        $fileActive = $settings['includeCssStaticFile'];

        if ($fileActive) {
            // Allow for comma-separated file paths
            $files = explode(',', $file);

            // Loop through specified files
            foreach ($files as $file) {

                // Parse each filename for aliases
                $file = App::parseEnv(trim($file));

                // If no file specified, skip to the next
                if (!$file) {
                    continue;
                }

                // If cache busting is enabled
                if ($settings['cacheBusting']) {
                    // Reference file with a hash
                    $this->css[] = $this->_addHash($file);
                } else {
                    // Reference file without a hash
                    $this->css[] = $file;
                }

            }
        }

    }

    /**
     * Add a unique file hash for cache busting.
     *
     * @param string $file
     * @return string
     */
    private function _addHash(string $file): string
    {
        // Get file contents
        $contents = @file_get_contents($file);

        // If unable to retrieve file contents
        if (!$contents) {
            // Log warning
            Craft::warning("Control Panel Style could not bust the cache because it was unable to load the contents of $file");
            // Return file without hash
            return $file;
        }

        // Get hash of contents
        $hash = @sha1($contents);

        // If unable to hash file contents
        if (!$hash) {
            // Log warning
            Craft::warning("Control Panel Style could not bust the cache because it was unable to hash contents of $file");
            // Return file without hash
            return $file;
        }

        // Return file with hash
        return "{$file}?e={$hash}";
    }

}

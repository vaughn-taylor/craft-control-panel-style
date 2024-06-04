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

namespace vaughndtaylor\craftcontrolpanelstyle\assetbundles;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class CpStyleAssetBundle extends AssetBundle 
{
    public function init(): void 
    {

        $this->sourcePath = "@vaughndtaylor/craftcontrolpanelstyle/resources/dist";

        $this->depends = [CpAsset::class];

        // $this->js = [
        //     'js/control-panel-style.js',
        // ];

        $this->css = [
            "css/control-panel-style.css",
        ];

        parent::init();

    }
}

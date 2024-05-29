<?php

namespace vaughndtaylor\craftcontrolpanelstyle;

use Craft;
use craft\base\Model;
use craft\base\Plugin;
use craft\web\View;
use vaughndtaylor\craftcontrolpanelstyle\models\Settings;
use vaughndtaylor\craftcontrolpanelstyle\web\CustomAssets;
use vaughndtaylor\craftcontrolpanelstyle\web\CustomTheme;
use yii\base\Event;

/**
 * Control Panel Style plugin
 *
 * @method static ControlPanelStyle getInstance()
 * @method Settings getSettings()
 * @author vaughndtaylor <vaughn.taylor+cpstyle@gmail.com>
 * @copyright vaughndtaylor
 * @license https://craftcms.github.io/license/ Craft License
 */

class ControlPanelStyle extends Plugin
{
    /** @var string */
    public string $schemaVersion = '1.0.0';

    /** @var ControlPanelStyle */
    public static ControlPanelStyle $plugin;

    /** @var bool */
    public bool $hasCpSettings = true;

    public function init(): void
    {
        parent::init();

        self::$plugin = $this;

        // If the request did not come from the CP, get out
        if (!Craft::$app->getRequest()->getIsCpRequest()) {
            return;
        }

        // Load custom CSS before page render
        Event::on(
            View::class,
            View::EVENT_BEFORE_RENDER_PAGE_TEMPLATE,
            function (Event $event) {
                // Get view
                $view = Craft::$app->getView();

                // Load custom CSS from filepath
                $view->registerAssetBundle(CustomAssets::class);

                // Load custom CSS entered in form
                /** @var Settings $settings */
                $settings = $this->getSettings();

                $showAdditional = $settings->includeCodeEditor;
                if ($showAdditional) {
                    $css = trim($settings->cssCodeEditor);
                    if ($css) {
                        $view->registerCss($css);
                    }
                }

                $showCSSVariables = $settings->includeCSSVariables;
                if ($showCSSVariables) {
                    $smallRadius = trim($settings->smallBorderRadius);
                    $mediumRadius = trim($settings->mediumBorderRadius);
                    $largeRadius = trim($settings->largeBorderRadius);
                    $xsSize = trim($settings->xsSize);
                    $sSize = trim($settings->sSize);
                    $mSize = trim($settings->mSize);
                    $lSize = trim($settings->lSize);
                    $xlSize = trim($settings->xlSize);
                    $paddingSize = trim($settings->paddingSize);
                    $sidebarWidth = trim($settings->sidebarWidth);
                    $globalSidebarWidth = trim($settings->globalSidebarWidth);
                    $headerHeight = trim($settings->headerHeight);
                    $detailsWidth = trim($settings->detailsWidth);
                    $touchTargetSize = trim($settings->touchTargetSize);

                    $cssVars = array();

                    if ('' != $smallRadius) {
                        $cssVars['--small-border-radius'] = $smallRadius.'px';
                    }
                    if ('' != $mediumRadius) {
                        $cssVars['--medium-border-radius'] = $mediumRadius.'px';
                    }
                    if ('' != $largeRadius) {
                        $cssVars['--large-border-radius'] = $largeRadius.'px';
                    }
                    if ('' != $xsSize) {
                        $cssVars['--xs'] = $xsSize.'px';
                    }
                    if ('' != $sSize) {
                        $cssVars['--s'] = $sSize.'px';
                    }
                    if ('' != $mSize) {
                        $cssVars['--m'] = $mSize.'px';
                    }
                    if ('' != $lSize) {
                        $cssVars['--l'] = $lSize.'px';
                    }
                    if ('' != $xlSize) {
                        $cssVars['--xl'] = $xlSize.'px';
                    }
                    if ('' != $paddingSize) {
                        $cssVars['--padding'] = 'var('.$paddingSize.')';
                    }
                    if ('' != $globalSidebarWidth) {
                        $cssVars['--global-sidebar-width'] = $globalSidebarWidth.'rem';
                    }
                    if ('' != $sidebarWidth) {
                        $cssVars['--sidebar-width'] = $sidebarWidth.'rem';
                    }
                    if ('' != $headerHeight) {
                        $cssVars['--header-height'] = $headerHeight.'rem';
                    }
                    if ('' != $detailsWidth) {
                        $cssVars['--details-width'] = $detailsWidth.'px';
                    }
                    if ('' != $touchTargetSize) {
                        $cssVars['--touch-target-size'] = $touchTargetSize.'rem';
                    }

                    if (count($cssVars) > 0) {
                        $cssVarsComp = ":root{\n";
                        foreach ($cssVars as $k => $v) {
                            $cssVarsComp .= sprintf("\t%s:%s;\n", $k, $v);
                        }

                        $cssVarsComp .= "}";
                        $view->registerCss($cssVarsComp);
                    }
                }

                // Load theme from plugin filepath
                $view->registerAssetBundle(CustomTheme::class);
            }
        );
    }

    /**
     * Creates and returns the model used to store the plugin’s settings.
     *
     * @return Model|null
     */
    protected function createSettingsModel(): ?Model
    {
        return new Settings();
    }

    protected function settingsHtml(): ?string
    {
        // Get the override keys
        $overrideKeys = array_keys(Craft::$app->getConfig()->getConfigFromFile('control-panel-style'));

        return Craft::$app->getView()->renderTemplate('control-panel-style/_settings', [
            'settings' => $this->getSettings(),
            'overrideKeys' => $overrideKeys,
            'docsUrl' => $this->documentationUrl,
        ]);
    }
}

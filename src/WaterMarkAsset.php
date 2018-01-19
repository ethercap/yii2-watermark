<?php
namespace ethercap\watermark;

/**
 * Asset bundle for [[WaterMark]] widget
 *
 * @author Lishipeng <lspbupt@sina.com>
 * @since 1.0
 */
class WaterMarkAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/water.js']);
        parent::init();
    }
}

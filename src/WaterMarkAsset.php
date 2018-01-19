<?php
namespace ethercap\watermark;

use yii\web\AssetBundle;
/**
 * Asset bundle for [[WaterMark]] widget
 *
 * @author Lishipeng <lspbupt@sina.com>
 * @since 1.0
 */
class WaterMarkAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $js = [
        'js/watermark.js' 
    ];
}

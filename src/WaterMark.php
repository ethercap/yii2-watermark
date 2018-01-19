<?php
namespace ethercap\watermark;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Asset bundle for [[WaterMark]] widget
 *
 * @author Lishipeng <lspbupt@sina.com>
 * @since 1.0
 */
class WaterMark extends Widget
{
    public $id = 'wm_div_id';       //水印总体的id
    public $txt = "测试水印";        //水印的内容
    public $x = 20;                 //水印起始位置x轴坐标
    public $y = 20;                 //水印起始位置Y轴坐标
    public $rows = 0;               //水印行数
    public $cols = 0;               //水印列数
    public $xSpace = 100;          //水印x轴间隔
    public $ySpace = 50;           //水印y轴间隔
    public $font = '微软雅黑';      //水印字体
    public $color = 'black';       //水印字体颜色
    public $fontSize = '18px';     //水印字体大小
    public $alpha = 0.15;          //水印透明度，要求设置在大于等于0.003
    public $width = 150;           //水印宽度
    public $height = 100;          //水印长度
    public $angle = 15;            //水印倾斜度数

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        WaterMarkAsset::register($view);
        $js = 'watermark.load({ 
            watermark_id: "'.$this->id.'",
            watermark_txt: "'.$this->txt.'",
            watermark_x: '.$this->x.',
            watermark_y: '.$this->y.',
            watermark_rows: '.$this->rows.',
            watermark_cols: '.$this->cols.',
            watermark_x_space: '.$this->xSpace.',
            watermark_y_space: '.$this->ySpace.',
            watermark_font: "'.$this->font.'",
            watermark_color: "'.$this->color.'",
            watermark_fontsize: "'.$this->fontSize.'",
            watermark_alpha: '.$this->alpha.',
            watermark_width: '.$this->width.',
            watermark_height: '.$this->height.',
            watermark_angle: '.$this->angle.',
        })';
        $view->registerJs($js);
    }
}

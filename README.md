# yii2-watermark

## 安装

## 使用
在后台需要有水印的页面上，加入如下的代码即可：
```php
\ethercap\watermark\WaterMark::widget([]);
```
会出现如下的水印：



如果对默认的参数不满意，可以通过参数修改配置：   
```php
\ethercap\watermark\WaterMark::widget([
    'id' => 'xxx',             //水印总体的id
    'txt' => "测试水印",        //水印的内容
    'x' => 20,                 //水印起始位置x轴坐标
    'y' => 20,                 //水印起始位置Y轴坐标
    'rows' => 0,               //水印行数
    'cols' => 0,               //水印列数
    'xSpace' => 100,           //水印x轴间隔
    'ySpace' => 50,            //水印y轴间隔
    'font' => '微软雅黑',       //水印字体
    'color' => 'black',        //水印字体颜色
    'fontSize' => '18px',      //水印字体大小
    'alpha' => 0.15,           //水印透明度，要求设置在大于等于0.003
    'width' => 150,            //水印宽度
    'height' => 100,           //水印长度
    'angle' => 15,             //水印倾斜度数
]);
```


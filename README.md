# yii2-watermark


yii2框架的水印代码，可以自动给页面打水印。 

前端代码主要来自于https://github.com/saucxs/watermark，感谢saucxs的付出，如有版权问题，欢迎联系我！

在此处可以查看本扩展的[许可](LICENSE.md)  


安装
------------

推荐的方式是通过composer 进行下载安装[composer](http://getcomposer.org/download/)。  

在命令行执行  
```
php composer.phar require --prefer-dist "ethercap/watermark" "1.0.0"
```

或加入  

```
"ethercap/watermark": "1.0.0"
```

到你的`composer.json`文件中的require段。  


使用
--------------
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


<?php
/**
 * @copyright Copyright (c) 2017 Anvar Ulugov
 * @license https://github.com/anvarulugov/numeraljs/blob/master/LICENSE
 * @link http://anvar.ulugov.uz
 */

namespace anvarulugov\numeraljs\assets;

use yii\web\AssetBundle;

class NumeralJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/adamwdraper/Numeral-js/min';
    public $css = [
    ];
    public $js = [
        'numeral.min.js',
    ];
    public $depends = [
    ];
}

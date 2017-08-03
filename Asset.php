<?php
/**
 * @copyright Copyright (c) 2017 Anvar Ulugov
 * @license https://github.com/anvarulugov/numeraljs/blob/master/LICENSE
 * @link http://anvar.ulugov.uz
 */

namespace anvarulugov\numeraljs;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@bower/numeral/min';
    public $css = [
    ];
    public $js = [
        'numeral.min.js',
    ];
    public $depends = [
    ];
}

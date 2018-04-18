<?php
/**
 * Created by PhpStorm.
 * User: wangyuhao
 * Date: 2018/4/18
 * Time: 上午 10:31
 */

namespace app\controllers\test;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionTest_1()
    {
        echo 'test_1 success';
    }

    public function actionTest_2()
    {
        echo 'test_222 success';
    }
}
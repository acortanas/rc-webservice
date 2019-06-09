<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    //  ==========  ADDED BY AJENG [2019 june 7]    ==========
    public $modelClass = 'app\models\RestaurantCatering';
}

<?php

namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;    //  added by ajeng [2019 june 13]

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    public function behaviors()
    {
        //  ==========  ADDED BY AJENG [2019 june 13]   ==========
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
        // ==========
    }

    //  ==========  ADDED BY AJENG [2019 june 7]    ==========
    public $modelClass = 'app\models\RestaurantCatering';
}

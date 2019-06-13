==========	AUTHENTICATION RESTFUL WEBSERVICE (YII2)	==========



Step 1	-	Configure the 'user' application component
	Developing RESTful APIs,
		-	set the 'enableSession' => false
		-	loginUrl => null, it used to show HTTP 403 error instead of redirecting to login page
		this step is not require, but recommended for RESTful APIs which should be stateless.
		/app/config/web.php
		place this code
		'user' => [
				'identityClass' => 'app\models\User',
				//  ==========  ADDED BY AJENG [2019 june 9]    ==========
				'enableSession' => false,
				'loginUrl' => null,
				//  ==========
			],
		'enableSession' => false	-->	to make the login not using session, authentication will be performed for every request
	Developing RESTful APIs as a module, put in the module's init method
		public function init()
		{
			parent::init();
			\Yii::$app->user->enableSession = false;
		}
		
		
Step 2	-	Replace modul User.php
	replace with user modul from yii2 advance
	i set the basic User modul as _User.php so it cant be detected
	https://github.com/yiisoft/yii2-app-advanced/blob/master/common/models/User.php
	
	
Step 3	-	Change namespace
	\app\models\User.php
		namespace app\models;
	

Step 4	-	Change findIdentityByAccessToke function
	place this code
		public static function findIdentityByAccessToken($token, $type = null)
		{
			//throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
			return static::findOne(['auth_key' => $token, 'status' => self::STATUS_ACTIVE]);
		}
	using auth_key field as token
	
	
Step 5	-	Configure authenticator behavior
	controller : \app\controllers\RestaurantCateringController.php
	api controller : \app\modules\api\controllers\DefaultController.php (working on this)	-->	http://localhost/rest-api/rc-webservice/web/api/default
	\app\modules\api\controllers\DefaultController.php
	place this code
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
		?>
	use yii\filters\auth\QueryParamAuth;	-->	yii class for auth via token
	
	
Step 6	-	Testing
	http://localhost/rest-api/rc-webservice/web/api/default/index	-->	401 http error, "type": "yii\\web\\UnauthorizedHttpException"
	http://localhost/rest-api/rc-webservice/web/api/default/index?access-token=ff4ab0d892ebc9657d3a2aec3cf4a61b		-->	using token from auth_key field
	
	
	
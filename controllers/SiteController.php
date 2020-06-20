<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		if(!Yii::$app->user->isGuest)
		{
			return $this->redirect(['login']);
		}

		$model=new LoginForm();
		if($model->load(Yii::$app->request->post())&&$model->login())
		{
			return $this->redirect(['login']);
		}

		$model->password='';
		return $this->render('login',[
			'model'=>$model,
		]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        return $this->render('index');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionLk()
    {
        return $this->render('lk');
        // $model = new ContactForm();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');

        //     return $this->refresh();
        // }
        // return $this->render('contact', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionStore()
    {
        return $this->render('store');
    }

    public function actionGame()
    {
        return $this->render('game');
    }

    public function actionMyIdea()
    {
        return $this->render('my-idea');
    }

    public function actionAddIdea()
    {
        return $this->render('add-idea');
    }

    public function actionFavoriteIdea()
    {
        return $this->render('favorite-idea');
    }

    public function actionIdeaDel()
    {
        return $this->render('idea-del');
    }

    public function actionModerIdeaClose()
    {
        return $this->render('moder-idea-close');
    }

    public function actionHistoryStore()
    {
        return $this->render('history-store');
    }

    public function actionBuyProduct()
    {
        return $this->render('buy-product');
    }

    public function actionIdeaMore()
    {
        return $this->render('idea-more');
    }

    public function actionCreate()
    {
        $model = new IdeaUsers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_idea_user]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

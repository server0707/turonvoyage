<?php

namespace app\controllers;

use app\models\Category;
use app\models\Client;
use app\models\Slider;
use app\models\Team;
use app\models\Uzb;
use app\models\Travels;
use app\models\About;
use app\models\Aloqa;
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
        $this->layout='site_main';
        $slider = Slider::find()->all();
        $event = Travels::find()->orderBy(['id'=>SORT_DESC])->limit(9)->all();
        $day="day_".Yii::$app->language;
        $name="name_".Yii::$app->language;
        $lavozim="lavozim_".Yii::$app->language;
        $teams = Team::find()->all();
        $client = Client::find()->all();
        $addres="addres_".Yii::$app->language;
        $text="text_".Yii::$app->language;
        $title="title_".Yii::$app->language;

        $names =Yii::$app->request->post('name');
        $email =Yii::$app->request->post('email');
        $tel =Yii::$app->request->post('tel');        
        $texts =Yii::$app->request->post('text');
        $date =Yii::$app->request->post('date');
        if($name){

            $aloqa = new Aloqa();
            $aloqa->name = $names;
            $aloqa->email = $email;
            $aloqa->phone = $tel;
            $aloqa->date = $date;
            $aloqa->message = $texts;
            $aloqa->save();
           Yii::$app->session->setFlash('Success'); 
        }

        return $this->render('index',[

            'event'=>$event,
            'title'=>$title,
            'name'=>$name,
            'lavozim'=>$lavozim,
            'day'=>$day,
            'slider'=>$slider,
            'teams'=>$teams,
            'client'=>$client,
            'addres'=>$addres,
            'text'=>$text,

        ]);
    }

    public function actionUzb()
    {

        $this->layout='site_main';
        
        $text="text_".Yii::$app->language;
        $uzb = Uzb::find()->all();
          
          $name="name_".Yii::$app->language;

          return $this->render('uzb',[

            'uzb'=>$uzb,
            'name'=>$name,
            'text'=>$text,

            

        ]);
    
    }
    public function actionView($id)
    {

        $this->layout='site_main';
        
        $uzb = Travels::find()->where(['id'=>$id])->one();
        $text="text_".Yii::$app->language;
        $day="day_".Yii::$app->language;
        $title="title_".Yii::$app->language;
        $name="name_".Yii::$app->language;

          return $this->render('view',[

            'uzb'=>$uzb,
            'name'=>$name,
            'text'=>$text,
            'day'=>$day,
            'title'=>$title,
            
        ]);
    
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
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
    public function actionContact()
    {
        $this->layout='site_main';

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout='site_main';
        $name="name_".Yii::$app->language;
        $text="text_".Yii::$app->language;
        $lavozim="lavozim_".Yii::$app->language;
        $abouts = About::find()->one();
        $teams = Team::find()->all();

        return $this->render('about',[

            'name'=>$name,
            'text'=>$text,
            'abouts'=>$abouts,
            'lavozim'=>$lavozim,
            'teams'=>$teams,
        ]);
    }
    public function actionCategory($id)
    {
        $this->layout='site_main';
        $event = Travels::find()->where(['cate'=>$id])->orderBy(['id'=>SORT_DESC])->all();
        $cate = Category::find()->where(['id'=>$id])->one();
        $client = Client::find()->all();
        $addres="addres_".Yii::$app->language;
        $text="text_".Yii::$app->language;
        $day="day_".Yii::$app->language;
        $name="name_".Yii::$app->language;

        return $this->render('cate',[
            'event'=>$event,
            'day'=>$day,
            'cate'=>$cate,
            'name'=>$name,
            'client'=>$client,
            'addres'=>$addres,
            'text'=>$text,
        ]);
    }
}

<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Order;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
        $this->metaTagIndex();
        return $this->render('index');
    }

    /**
     * Displays StranicySajta.
     *
     * @return string
     */
    public function actionStranicSajta()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagStranicySajta();
        return $this->render('stranicy-sajta',[
                'order' => $order,
            ]);
    }

    /**
     * Displays TovarovSajta.
     *
     * @return string
     */
    public function actionTovarovSajta()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagTovarovSajta();
        return $this->render('tovarov-sajta',[
                'order' => $order,
            ]);
    }

    /**
     * Displays KartinkiSSajta.
     *
     * @return string
     */
    public function actionKartinokSSajta()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagKartinkiSSajta();
        return $this->render('kartinki-s-sajta',[
                'order' => $order,
            ]);
    }

    /**
     * Displays ZashhishhennyeSajty.
     *
     * @return string
     */
    public function actionZashchishchennyhSajtov()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagZashhishhennyeSajty();
        return $this->render('zashhishhennye-sajty',[
                'order' => $order,
            ]);
    }

    /**
     * Displays SajtovZnakomstv.
     *
     * @return string
     */
    public function actionSajtovZnakomstv()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagSajtovZnakomstv();
        return $this->render('sajtov-znakomstv',[
                'order' => $order,
            ]);
    }

    /**
     * Displays BukmekerskihSajtov.
     *
     * @return string
     */
    public function actionBukmekerskihSajtov()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagBukmekerskihSajtov();
        return $this->render('bukmekerskih-sajtov',[
                'order' => $order,
            ]);
    }

    /**
     * Displays NovostnyhSajtov.
     *
     * @return string
     */
    public function actionNovostnyhSajtov()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagNovostnyhSajtov();
        return $this->render('novostnyh-sajtov',[
                'order' => $order,
            ]);
    }

    /**
     * Displays SajtovNedvizhimosti.
     *
     * @return string
     */
    public function actionSajtovNedvizhimosti()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagSajtovNedvizhimosti();
        return $this->render('sajtov-nedvizhimosti',[
                'order' => $order,
            ]);
    }

     /**
     * Displays DannyhSSajta.
     *
     * @return string
     */
    public function actionDannyhSSajta()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagDannyhSSajta();
        return $this->render('dannyh-s-sajta',[
                'order' => $order,
            ]);
    }

    /**
     * Displays Order.
     *
     * @return string
     */
    public function actionOrder()
    {

        $order = new Order();
        if ($order->load(Yii::$app->request->post()) && $order->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->metaTagOrder();
        return $this->render('order',[
                'order' => $order,
            ]);
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function metaTagIndex()
    {
        Yii::$app->view->title = "Сервис парсинга сайтов";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Сервис парсинга сайтов - моментальная публикация новостей, динамическое обновление программы телепередач, расписания матчей и погоды – все это становится возможным с помощью нашего сервиса.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'cервис парсинга сайтов',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Сервис парсинга сайтов - моментальная публикация новостей, динамическое обновление программы телепередач, расписания матчей и погоды – все это становится возможным с помощью нашего сервиса.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/index'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }

    public function metaTagStranicySajta()
    {
        Yii::$app->view->title = "Парсинг страниц сайта";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Стремительно развивающийся и постоянно расширяющийся интернет требует регулярного обновления информации и постоянного дополнения существующего на сайте контента. Раньше всё это приходилось делать вручную, сейчас же на помощь приходят специальные программы, осуществляющие анализ и выявление необходимой информации.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг страниц сайта',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Стремительно развивающийся и постоянно расширяющийся интернет требует регулярного обновления информации и постоянного дополнения существующего на сайте контента. Раньше всё это приходилось делать вручную, сейчас же на помощь приходят специальные программы, осуществляющие анализ и выявление необходимой информации.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/stranic-sajta'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }

    public function metaTagTovarovSajta()
    {
        Yii::$app->view->title = "Парсинг товаров сайта";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Администраторам интернет ресурсов, веб-мастерам, владельцам онлайн-магазинов сложно вручную проводить работу по сбору, обработке и размещению большого количества информации на своих сайтах. Процесс этот рутинный, трудоемкий, отнимающий много времени. Автоматизировать его помогают парсеры, способные за небольшое количество времени перебрать огромное количество информации.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг товаров сайта',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Администраторам интернет ресурсов, веб-мастерам, владельцам онлайн-магазинов сложно вручную проводить работу по сбору, обработке и размещению большого количества информации на своих сайтах. Процесс этот рутинный, трудоемкий, отнимающий много времени. Автоматизировать его помогают парсеры, способные за небольшое количество времени перебрать огромное количество информации.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/tovarov-sajta'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    
    public function metaTagKartinkiSSajta()
    {
        Yii::$app->view->title = "Парсинг картинок с сайта";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Объектом парсинга может быть любой ресурс в Интернете. К примеру, возможно выбрать заинтересовавший интернет-магазин, собрать с него всю информацию (описание товаров, картинки, технические характеристики), перевести ее в требуемый формат и выгрузить на новый сайт.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг картинок с сайта, парсинг яндекс картинок, парсинг картинок с титлами',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Объектом парсинга может быть любой ресурс в Интернете. К примеру, возможно выбрать заинтересовавший интернет-магазин, собрать с него всю информацию (описание товаров, картинки, технические характеристики), перевести ее в требуемый формат и выгрузить на новый сайт.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/kartinok-s-sajta'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    

    public function metaTagZashhishhennyeSajty()
    {
        Yii::$app->view->title = "Парсинг защищенных сайтов";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'На сайте данные защищены посредством captcha? Хотите срочно спарсить содержимое с закрытого раздела интернет-ресурса, на котором необходимо пройти авторизацию? Заказать парсинг сайта вы можете у нас. Наши специалисты готовы выполнить парсинг даже сложных сайтов.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг защищенных сайтов',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'На сайте данные защищены посредством captcha? Хотите срочно спарсить содержимое с закрытого раздела интернет-ресурса, на котором необходимо пройти авторизацию? Заказать парсинг сайта вы можете у нас. Наши специалисты готовы выполнить парсинг даже сложных сайтов.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/zashchishchennyh-sajtov'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    
    public function metaTagSajtovZnakomstv()
    {
        Yii::$app->view->title = "Парсинг сайтов знакомств";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Хотите создать свой сайт знакомств, но не знаете, как и чем его заполнить? Не можете самостоятельно справиться с таким большим объемом информации? Есть выход! Можно заказать парсинг данных с сайта у специалистов – это оптимальное решение подобных проблем, что позволит сэкономить ваши деньги и время.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг сайтов знакомств',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Хотите создать свой сайт знакомств, но не знаете, как и чем его заполнить? Не можете самостоятельно справиться с таким большим объемом информации? Есть выход! Можно заказать парсинг данных с сайта у специалистов – это оптимальное решение подобных проблем, что позволит сэкономить ваши деньги и время.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/sajtov-znakomstv'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    
    public function metaTagSajtovNedvizhimosti()
    {
        Yii::$app->view->title = "Парсинг сайтов недвижимости";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Парсинг данных с сайта недвижимости – эффективный способ сбора, группировки и обработки информации в автоматическом режиме. Парсер позволяет оперативно получить полный отчет об объявлениях, телефонных номерах, ценах на определенные виды недвижимости, описаниях и фотографиях.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг сайтов недвижимости',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Парсинг данных с сайта недвижимости – эффективный способ сбора, группировки и обработки информации в автоматическом режиме. Парсер позволяет оперативно получить полный отчет об объявлениях, телефонных номерах, ценах на определенные виды недвижимости, описаниях и фотографиях.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/sajtov-nedvizhimosti'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    
    public function metaTagBukmekerskihSajtov()
    {
        Yii::$app->view->title = "Парсинг букмекерских сайтов";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Чтобы воспользоваться всеми возможностями функционала необходимо запустить парсинг сайтов онлайн, что под силу профессиональным специалистам. Чтобы проделать это с букмекерскими сайтами понадобится парсинг коэффициентов, событий по различным командным типам спортивных состязаний.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг букмекерских сайтов',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Чтобы воспользоваться всеми возможностями функционала необходимо запустить парсинг сайтов онлайн, что под силу профессиональным специалистам. Чтобы проделать это с букмекерскими сайтами понадобится парсинг коэффициентов, событий по различным командным типам спортивных состязаний.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/bukmekerskih-sajtov'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
    
    public function metaTagNovostnyhSajtov()
    {
        Yii::$app->view->title = "Парсинг новостных сайтов";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'В случае, если у вас есть свой новостной сайт или портал с новостным разделом, вы столкнетесь с необходимостью решить проблему контента. Оптимальным решением проблемы в этом случае будет самый банальный вариант – на просторах сети.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг новостных сайтов',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'В случае, если у вас есть свой новостной сайт или портал с новостным разделом, вы столкнетесь с необходимостью решить проблему контента. Оптимальным решением проблемы в этом случае будет самый банальный вариант – на просторах сети.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/novostnyh-sajtov'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }

    public function metaTagOrder()
    {
        Yii::$app->view->title = "Заказать парсинг сайта";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Моментальная публикация новостей, динамическое обновление программы телепередач, расписания матчей и погоды – все это становится возможным с помощью автоматического парсинга сайтов.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'заказать парсинг сайта',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Моментальная публикация новостей, динамическое обновление программы телепередач, расписания матчей и погоды – все это становится возможным с помощью автоматического парсинга сайтов.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/order'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }

    public function metaTagDannyhSSajta()
    {
        Yii::$app->view->title = "Парсинг данных с сайта";

        Yii::$app->view->registerMetaTag(
            [
                'name' => 'description',
                'content' => 'Парсинг информации с сайта позволяет собрать необходимое тематические ядро, извлекая из огромного объёма всего контента, только ту информацию, которая задана конкретным запросом. При этом происходит автоматическая конвертация – информация может быть подана в Excel, RDF, XML, CSV или любых других конфигурационных файлах.',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'name' => 'keywords',
                'content' => 'парсинг данных с сайта',

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:title',
                'content' => Yii::$app->view->title,

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:description',
                'content' => 'Парсинг информации с сайта позволяет собрать необходимое тематические ядро, извлекая из огромного объёма всего контента, только ту информацию, которая задана конкретным запросом. При этом происходит автоматическая конвертация – информация может быть подана в Excel, RDF, XML, CSV или любых других конфигурационных файлах. ',

                    ]
            );
        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:url',
                'content' => Url::to(['site/dannyh-s-sajta'],true),

                    ]
            );

        Yii::$app->view->registerMetaTag(
            [
                'property' => 'og:image',
                'content' => Url::to('/images/logo.png', true),

                    ]
            );
    }
}

<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);


//$this->registerCssFile('../css/css_gypEgtlRvYu1WHmKes6mEXoj3Zf3sk2YcN4cIYKPUcI.css');
//$this->registerCssFile('../css/css_lQaZfjVpwP_oGNqdtWCSpJT1EMqXdMiU84ekLLxQnc4.css');
//$this->registerCssFile('../css/css_o5m5YfhNvCAmTYElqKpCQG6h1HjE4crK0Lriiytig8I.css');
//$this->registerCssFile('../css/css_vHo3gQdCqF0aRTA3r6WfnlQfhq_O2_NZcDfs-xLFGPw.css');
//$this->registerCssFile('../css/css_zy075VUTfcBGG737uKSc8dJGGp1HYV83QrGdFUMzk5Y.css');


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="../img/touring-cars-logo.png" style="margin-top: -25px" />',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Идеи для отдыха', 'url' => ['/site/about']],
            ['label' => 'Цены', 'url' => ['/site/prize']],
            ['label' => 'Главная информация', 'url' => ['/site/aboutmain']],
            ['label' => 'Заказать сейчас', 'url' => ['/site/contact']],
            /*['label' => 'Contact', 'url' => ['/site/contact']],*/
            /*Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )*/
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">

    <div class="container footercenter">
        <h2 class="block-title">САМАЯ КРУПНАЯ КОМПАНИЯ ПО АРЕНДЕ КЕМПЕРОВ В СЕВЕРНОЙ ЕВРОПЕ</h2>
        <p class="rtecenter">Компания Touring Cars - ведущий поставщик кемперов для путешествия по Северной Европе. Имея свыше 34 лет опыта, мы сдаем в аренду качественные дома на колесах и поддерживаем высокие стандарты в работе с клиентами в Исландии, Норвегии, Швеции, Финляндии и Эстонии. Качество сервиса компании Touring Cars гарантированно всегда!</p>
        <p class="rtecenter">Sales Office: +358 (9) 849 4050<br><a href="mailto:info@touringcars.eu">info@touringcars.eu</a></p>
    </div>


    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>




<?php $this->endPage() ?>

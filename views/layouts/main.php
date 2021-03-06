<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);



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
        'brandLabel' => 'VanTour',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
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
        <h2 class="block-title">САМАЯ КРУПНАЯ КОМПАНИЯ ПО АРЕНДЕ КЕМПЕРОВ В КЫРГЫЗСТАНЕ</h2>
        <p class="rtecenter">Компания Kg Car Tour - ведущий поставщик кемперов для путешествия по Кыргызстану. Имея свыше 14 лет опыта,
            мы сдаем в аренду качественные дома на колесах и поддерживаем высокие стандарты в работе с клиентами
            в Бишкеке, Чолпон-Ате, Бостери, Каракол. Качество сервиса компании Kg Car Tour гарантированно всегда!</p>
        <p class="rtecenter">Отдел продаж: +996 703 18 41 37<br><a href="mailto:info@touringcars.eu">softwww@yandex.ru</a></p>
    </div>


    <div class="container">
        <p class="pull-left">&copy; Kg Car Tour <?= date('Y') ?></p>
        <p class="pull-right">Разработано SoftWWW</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>




<?php $this->endPage() ?>

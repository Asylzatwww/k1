<?php

namespace app\controllers;

use Yii;
use app\models\Phoneactivation;
use app\models\PhoneactivationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhoneactivationController implements the CRUD actions for Phoneactivation model.
 */
class PhoneactivationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Phoneactivation models.
     * @return mixed
     */
    public function actionIndex()
    {





        $connection = Yii::$app->getDb();



        $model = Phoneactivation::find()->where(['phone'=> '0553106808'])->one();

        if(!$model):



            $command = $connection->createCommand('

    INSERT INTO phone (phone, money) VALUES(:phone,
          (
             SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone=:phone AND active="0"
          )
      )

    ', [':phone' => '0553106808']);

            $result = $command->queryAll();



        endif;





        $command = $connection->createCommand("

UPDATE phone SET money=(
             SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone=:phone AND active=\"0\"
    ) WHERE phone=:phone

    ", [':phone' => '0553106808']);

        $command->queryAll();


        $command = $connection->createCommand("

UPDATE phoneactivation SET active=\"1\" WHERE phone=:phone

    ", [':phone' => '0553106808']);

        //$result = $command->queryAll();






        $searchModel = new PhoneactivationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Phoneactivation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Phoneactivation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Phoneactivation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Phoneactivation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Phoneactivation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Phoneactivation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Phoneactivation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Phoneactivation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

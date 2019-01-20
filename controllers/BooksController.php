<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:55
 */
namespace app\controllers;

use Yii;
use app\models\Books;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BooksController extends Controller
{
    public function actionIndex ()
    {
        $query = Books::find();
        //$pagination = new Pagination([
        //    'defaultPageSize' => 5,
        //    'totalCount' => $query->count(),
        //]);

        //$books = $query->orderBy('name')
        //    ->offset($pagination->offset)
        //    ->limit($pagination->limit)
        //    ->all();
        //var_dump($books);
        //var_dump($pagination);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_ASC,
                ]
            ]
        ]);
        return $this->render('index', [ 'books' => $dataProvider ]);
    }

    public function actionCreate ()
    {
        $model = new Books();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate ($id)
    {
        $model = $this -> findModel($id);

        if ($model -> load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', ['model' => $model]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionView ($id) {
        return $this->render('view', ['model' => $this->findModel($id)]);
    }

    public function actionDelete ($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Books::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(\Yii::t('app', 'The requested page does not exist.'));
    }
}
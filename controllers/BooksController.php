<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:55
 */
namespace app\controllers;

use app\models\Books;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\data\Pagination;

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
                    //'created_at' => SORT_DESC,
                    'name' => SORT_ASC,
                ]
            ]
        ]);
//var_dump($dataProvider);
        return $this->render('index', [
           'books' => $dataProvider
           //'pagination' => $pagination
        ]);
    }
}
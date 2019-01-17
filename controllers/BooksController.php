<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 0:55
 */
namespace app\controllers;

use app\models\Books;
use yii\web\Controller;
use yii\data\Pagination;

class BooksController extends Controller
{
    public $tablePrefix = 't_';
    public function actionIndex ()
    {
        $query = Books::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $books = $query->orderBy('name')
            //->offset($pagination->offset)
            //->limit($pagination->limit)
            ->all();
        print_r($books);
        //
        //return $this->render('index', [
        //   'books'=>$books,
        //   '$pagination'=>$pagination
        //]);
    }
}
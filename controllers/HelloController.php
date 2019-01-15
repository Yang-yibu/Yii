<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/14
 * Time: 22:19
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        $hello_str = 'Hi, God<script>alert(1)</script>';

        $data = array();
        $data['view_hello_str'] = $hello_str;
        // 渲染的视图文件 可省略后缀名
        return $this->renderPartial('index.php', $data);
    }

    public $layout = 'common'; // 没有的话 使用默认的
    public function actionLayout1()
    {

        return $this->render('about');
    }

    public function actionRequest()
    {
        /********************* 请求组件 *********************/
        // \YII 全局类使用 \ 访问
        $request = \YII::$app->request;

        echo $request->get('id', 20);
        echo '<br>';
        $request->post('name', 333);

        // 请求是否是 get 请求
        if ($request->isGet) {
            echo 'this is Get request</br>';
        }
        if ($request->isPost) {
            echo 'this is Post request</br>';
        }

        echo $request->userIp;
        /********************* end 请求组件 *********************/
    }

    public function actionResponse()
    {
        /********************* 响应组件 *********************/
        // https://www.yiichina.com/doc/guide/2.0/runtime-responses
        $response = \Yii::$app->response;
        //$response->statusCode = 201;
        //$response->headers->add('X-Test', 'no-cache');
        //$response->headers->set('Pragma', 'max-age=5');
        //$values = $response->headers->remove('Pragma');

        // 跳转
        // 不会跳转 ？
        //$response->headers->add('location', 'http://www.baidu.com');

        //$this->redirect('http://ww.baidu.com', 302);

        //$response->headers->add('content-disposition', 'attachment;filename="a.jpg"');
        $response->sendFile('./robots.txt');

        /********************* end 响应组件 *********************/
    }
}
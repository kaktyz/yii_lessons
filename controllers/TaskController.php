<?php
/**
 * Created by PhpStorm.
 * User: accadmin
 * Date: 13.10.2018
 * Time: 17:08
 */

namespace app\controllers;
use app\models\tables\Users;
use app\models\testModel;
use app\models\User;
use yii\web\Controller;

class TaskController extends Controller
{
//    public function actionIndex(){
//        return $this->render('index', [
//            'hiWord' => 'Hi',
//            'exlane' => 'It`s a word'
//        ]);
//    }

    public function actionIndex(){
        $model = new testModel();
        $model->even = 2;
        $model->odd = 3;
        var_dump($model->validate());
    }

    public function actionTest(){
//        $id = 1;
//        $res = \Yii::$app->db->createCommand("
//            SELECT * FROM test WHERE id = :id
//        ")
//            ->bindParam(':id', $id)
//            ->queryOne();
//        var_dump($res);
        /*Создание новой строчки в таблице*/
//        $user = new Users();
//        $user->login = "Ivanov";
//        $user->password = md5("qwer");
//        $user->role = 1;
//
//        //валидирует автоматом
//        $user->save();
        /*Чтение*/
//
//        $user = Users::findOne(1);
//        var_dump($user);

        /*Del*/

        $user = Users::findOne(2);
        var_dump($user->getRole());
    }
}
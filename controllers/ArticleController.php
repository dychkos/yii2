<?php

namespace app\controllers;

use app\models\Article;
use phpDocumentor\Reflection\Types\This;
use yii\web\Controller;

class ArticleController extends Controller
{
    public function actionCreate()
    {
        $model = new Article();

        if($model->load(\Yii::$app->request->post()) && $model->saveArticle()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($model->load(\Yii::$app->request->post()) && $model->saveArticle()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

}
<?php

namespace app\controllers;

use Yii;
use app\models\software;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OportunidadesController implements the CRUD actions for oportunidades model.
 */
class SoftwareController extends Controller
{
    
    public function actionIndex()
    {
        $model = new software();

        return $this->render('index', [
            'model' => $model
        ]);
    }
}

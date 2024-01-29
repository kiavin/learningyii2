<?php

namespace app\modules\Teachers\controllers;

use app\models\LoginForm;
use app\modules\Teachers\models\Teacherssearch;
use app\modules\Teachers\models\Teachers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\db\Expression;
use Yii;

/**
 * Default controller for the `Teachers` module
 */
class DefaultController extends Controller
{
    
    
    /**
     * {@inheritdoc}
     */


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';              

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'searchModel' => new Teacherssearch(),
            'dataProvider' => new \yii\data\ActiveDataProvider([
                'query' => \app\modules\Teachers\models\Teachers::find(),
            ]),
        
        ]);
    }

    /**
     * Displays a single Teachers model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Teachers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if(yii::$app->user->can('create-Teachers')){
        $model = new Teachers();
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                //get the instance of the uploaded file
                $model->generateEmailVerificationToken();
                $model->generateAuthKey();
                $model->created_at = new Expression('NOW()');
                $model->updated_at = new Expression('NOW()');
                if ($model->save()) {
                    //send email to verify email
                    
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }else{
        throw new \yii\web\ForbiddenHttpException('You are not allowed to perform this action.');
    }
}

    /**
     * Updates an existing Teachers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Teachers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Teachers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Teachers::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    //student action for teachers
    public function actionStudents()
    {
        return $this->redirect(['/Students/default/create']);
    }

    public function actionAllstudents()
    {
        return $this->redirect(['/Students/default/index']);
    }
}

<?php

namespace app\modules\Teachers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Teachers module definition class
 */
class Teachers extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\Teachers\controllers';

    //layout
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this -> layout = 'TeachersLayout';

        // custom initialization code goes here
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'update', 'delete', 'view', 'students', 'allstudents'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
}

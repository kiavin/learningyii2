<?php

use app\modules\Teachers\models\Teachers;
use app\modules\Teachers\models\Teacherssearch;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\Teachers\models\Teacherssearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teachers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    

<p>
        <?= Html::a('Create Student', ['students'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('All Students', ['allstudents'], ['class' => 'btn btn-success']) ?>
    </p>
    


</div>
<?php

use app\modules\Admin\models\Administrator;
use app\modules\Students\models\Students;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\modules\Admin\Administratorsearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'reg_no',
            'Fname',
            'Lname',
            
            //'email:email',
            //'password_hash',
            //'authkey',
            //'password_reset_token',
            //'accessToken',
            //'status',
            //'created_at',
            //'updated_at',
            //'phone',
            //'user_img',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Students $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>

<?php pjax::end(); ?>
</div>

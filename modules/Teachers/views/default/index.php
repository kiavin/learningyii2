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
    <u><h2>Class schedule</h2></u>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Subject</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Monday</td>
                <td>9:00 AM - 11:00 AM</td>
                <td>Mathematics</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>9:00 AM - 11:00 AM</td>
                <td>Science</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>9:00 AM - 11:00 AM</td>
                <td>English</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>9:00 AM - 11:00 AM</td>
                <td>History</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>9:00 AM - 11:00 AM</td>
                <td>Art</td>
            </tr>
        </tbody>
    </table>
    <h2>Annoucements:</h2>
    <h3>End of semester exams</h3>
    <p>End of semester exams will be held on 15th of December. .</p>
    <!--renderupdate own profile-->
   <p> <?= Html::a('Update Profile', ['update', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-primary']) ?></p>
<!--view students-->
    <p><?= Html::a('View Students', ['allstudents'], ['class' => 'btn btn-primary']) ?></p>





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
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cilisting1 */

$this->title = 'Update Cilisting1: ' . ' ' . $model->ciid;
$this->params['breadcrumbs'][] = ['label' => 'Cilisting1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ciid, 'url' => ['view', 'id' => $model->ciid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cilisting1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

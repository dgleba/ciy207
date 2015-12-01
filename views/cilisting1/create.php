<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cilisting1 */

$this->title = 'Create Cilisting1';
$this->params['breadcrumbs'][] = ['label' => 'Cilisting1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cilisting1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

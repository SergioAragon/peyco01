<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */

$this->title = $model->id_pedido;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pedido], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pedido], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pedido',
            'cliente_id',
            'nombre_expo',
            'nombre_empresa',
            'frente',
            'fondo',
            'Referencia_stand',
            'cantidad_stand',
            'direccion',
            'fecha_pedido',
            'telefono',
            'municipio_id',
            'estado_id',
            'updated_at',
        ],
    ]) ?>

</div>

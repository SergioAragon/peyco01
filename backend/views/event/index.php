<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use yii\bootstrap\Modal;
use yii\yii2fullcalendar\yii2fullcalendar;
use yii\jui\JuiAsset;
// use yii\jui\Dialog;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>

        <!-- <link rel="stylesheet" href="css/fullcalendar.css">
        <script src="js/moment.min.js" ></script>
        <script src="js/jquery.min.js" ></script>
        <script src="js/fullcalendar.js" ></script> -->
        <script>
            $(document).ready(function() {
           // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                        // put your options and callbacks here

                
                        })

                     });
            </script>


<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><?= Html::a('Registrar Evento', ['create'], ['class' => 'btn btn-success']) ?></p>

    <div id="calendar">
        <!-- <script>
            $(document).ready(function() {

                    // page is now ready, initialize the calendar...

                    $('#calendar').fullCalendar({
                        // put your options and callbacks here
                    })

                });
        </script> -->
    

    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'events'=> $events, 
      ));
      ?>



    </div>

</div>

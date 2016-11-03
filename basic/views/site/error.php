<?php
use yii\helpers\Html;
$this->title = $name;
?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
                
            </div>
        </div>
</section>

<section class="container">
        
        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>
</section>

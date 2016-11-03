<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Парсинг картинок с сайта</h1>
                </div>
                
            </div>
        </div>
</section>
<section class="container">
        
        <p>Парсинг – поэтапный синтаксический анализ данных, находящихся на интернет-страницах. Проводится при помощи парсеров – скриптов или программ, занимающихся сбором, анализом, преобразованием необходимой информации. Полученные данные представляются в определенном виде, по заложенным разработчиком правилам и алгоритмам.</p>

        

</section>
<section id="order" class="container">
        <div class="row-fluid">
			<div class="span2"></div>
            <div class="span8">
                <h3>Заказать парсинг картинок с сайта</h3>
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div class="alert alert-success">
		            Ваш заказ принят. Мы свяжимся с вами в ближайшее время
		        </div>
		        <?php else: ?>
                <p>Опишите как можно детельнее, что вам нужно парсить и в каком виде предоставлять результат. От этого зависит точность расчета стоимости и времени.</p>
                <?php endif; ?>
                <div class="status alert alert-success" style="display: none"></div>
				
				<?php $form = ActiveForm::begin([
						'id' => 'order',
						'options' => [
							'class' => 'contact-form',
							'name' => 'order',
						]
					]);
				?>
                
                  <div class="row-fluid">
                    <div class="span5">
                    	<?= $form->field($order, 'name')->textInput(['autofocus' => true,'class' => 'input-block-level','required' => 'required','placeholder' => 'Ваше имя'])->label('Имя') ?>
                        
                        <?= $form->field($order, 'site')->textInput(['class' => 'input-block-level','required' => 'required','placeholder' => 'Сайт(ы) которые нужно парсить'])->label('Сайт(ы)') ?>
                        
                        <?= $form->field($order, 'email')->textInput(['class' => 'input-block-level','required' => 'required','placeholder' => 'Email'])->label('Email') ?>

						<?= $form->field($order, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="span5">{image}</div><div class="span6">{input}</div>',
                        'options' => [
                        	'required' => 'required'
                        ]
                    ])->label('Подтвердите что вы не робот') ?>
                    </div>
                    <div class="span7">
                    	<?= $form->field($order, 'body')->textarea(['rows' => 16,'class' => 'input-block-level'])->label('Детали') ?>
                        
                    </div>

                </div>
                
                <?= Html::submitButton('Заказать', ['class' => 'btn btn-primary btn-large pull-right', 'name' => 'order-button']) ?>
                

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</section>
<section class="container">
        <h2>Для чего нужен парсинг, его виды</h2>
        <p>
            Объектом парсинга может быть любой ресурс в Интернете. К примеру, возможно выбрать заинтересовавший интернет-магазин, собрать с него всю информацию (описание товаров, картинки, технические характеристики), перевести ее в требуемый формат и выгрузить на новый сайт. Вручную сделать такой объем работы достаточно сложно, поэтому все чаще  прибегают к автоматизации данного процесса. <strong>Парсинг другого сайта</strong> поможет в следующих случаях:
            
        </p>
        <ul>
            <li>когда нужно разделить предоставленную информацию по типам и отобрать только самую важную</li>
            <li>если требуется за короткий промежуток времени обработать большой объем данных</li>
            <li>когда нужно предоставить результаты в каком-либо определенном виде</li>
        </ul>
        
        

</section>
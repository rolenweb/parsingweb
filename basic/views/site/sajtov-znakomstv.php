<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->registerJsFile('//cdn.tinymce.com/4/tinymce.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Парсинг сайтов знакомств</h1>
                </div>
                
            </div>
        </div>
</section>
<section class="container">
        <p>
            Хотите создать свой сайт знакомств, но не знаете, как и чем его заполнить? Не можете самостоятельно справиться с таким большим объемом информации? Есть выход! Можно заказать <?= Html::a('парсинг данных с сайта',['site/dannyh-s-sajta'],['title' => 'парсинг данных с сайта']) ?> у специалистов – это оптимальное решение подобных проблем, что позволит сэкономить ваши деньги и время. Регулярное использование программ-парсеров в тандеме с тщательно продуманной тактикой SEO-оптимизации является практически беспроигрышной комбинацией для последующего продвижения вашего сайта знакомств.
        </p>
</section>
<section id="order" class="container">
        <div class="row-fluid">
			<div class="span1"></div>
            <div class="span10">
                <h3>Заказать парсинг сайтов знакомств</h3>
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
        <h2>
            Преимущества парсинга: 
        </h2>
        <ul>
                <li>
                    Универсальность. Парсеры добавляют необходимые данные (картинки, контент) на сайт.
                </li>
                <li>
                    Парсинг способствует дальнейшему продвижению вашего сайта в поисковиках. При грамотном подборе стратегии и использовании парсинг-программ ваш сайт знакомств можно будет продвинуть в ТОП поисковиков.
                </li>
                <li>
                    Экономия денежных средств по сравнению с услугами других специалистов. <strong>Парсинг контента с сайта</strong> лучше всего подойдет для сайта знакомств, где не ставится упор на оригинальный контент.
                </li>
                <li>
                    Безошибочность и высокая скорость. Специальная программа не допускает ошибок при сборе данных с сайта знакомств, что нельзя гарантировать при наполнении вашего интернет-ресурса вручную.
                </li>
        </ul>
        
        <h2>
            Доверьте парсинг сайта знакомств профессионалам
        </h2>
        <p>
            Наша компания предоставляет услуги парсинга сайта знакомств. Мы можем спарсить контент любой сложности: графический, текстовый, медиа-контент и смешанный, включающий в себя сразу нескольких категорий. Наши специалисты осуществляют автоматический сбор информации с различных сайтов знакомств и генерируют все полученные данные в удобный для вас формат. 
        </p>
        Следует отметить, что единого шаблонного решения не существует. Мы разрабатываем программы-парсеры для конкретного заказа. Наши специалисты проведут для вас синтаксический анализ любой сложности в самые кратчайшие сроки. Вы можете заказать у нас <?= Html::a('парсинг картинок с сайта',['site/kartinok-s-sajta'],['title' => 'парсинг картинок с сайта']) ?>, так и контента для наполнения собственного интернет-ресурса.
</section>
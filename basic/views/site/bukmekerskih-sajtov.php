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
                    <h1>Парсинг букмекерских сайтов</h1>
                </div>
                
            </div>
        </div>
</section>
<section class="container">
        
        <p>Представим такую ситуацию: вы пришли в библиотеку и нашли десятки книг по интересующей ваc теме. В ваши цели входит размещение полезных текстов на своем сайте. Вам придется потратить много времени, чтобы отсканировать содержимое страниц и привести их в подходящий формат. А что, если можно при помощи одного нажатия кнопки сделать все и сразу? Именно это и осуществляет <?= Html::a('парсинг данных с сайта',['site/dannyh-s-sajta'],['title' => 'парсинг данных с сайта']) ?>, который значительно облегчает жизнь. </p>

        

</section>
<section id="order" class="container">
        <div class="row-fluid">
			<div class="span1"></div>
            <div class="span10">
                <h3>Заказать парсинг букмекерских сайтов</h3>
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
    <h2>Что такое парсинг и зачем он нужен?</h2>
    <p>
        Это программа или особый скрипт для семантического анализа интернет-ресурсов. Проще говоря, при помощи данного инструмента можно произвести сбор информации в нужном формате в один клик с множества сайтов, а не делать это вручную. Эта автоматизированная система позволяет отбирать подходящую информацию с самых различных площадок: справочников, интернет-магазинов, блогов, форумов и букмекерских сайтов. Этот функционал является эффективным при необходимости постоянно обновлять какие-либо события или контент на сайтах.
    </p>
    <p>
        Среди отличительных особенностей парсинга выделяют:
        
    </p>
    <ul>
            <li>Оперативную обработку внушительного количества страниц.</li>
            <li>Отделение всех типов информации и отбор необходимой.</li>
            <li>Упаковку итогов в указанном формате.</li>
    </ul>
    <p>
        Чтобы воспользоваться всеми возможностями функционала необходимо запустить <strong>парсинг сайтов онлайн</strong>, что под силу профессиональным специалистам. Чтобы проделать это с букмекерскими сайтами понадобится парсинг коэффициентов, событий по различным командным типам спортивных состязаний. Это может быть баскетбол, футбол, регби или волейбол. Настройка скриптов происходит по конкретным событиям — исходам, формам, тоталам, удалениям и другим. 
    </p>
    <h2>
        Как запустить парсинг: основные составляющие
    </h2>
    <p>
        Использование программы в независимости от задач требует необходимости:
        
    </p>
    <ul>
            <li>Скачать код страниц, нужных для извлечения данных. Популярным вариантом для получения кода сегодня можно назвать библиотеку cURL для языка PHP.</li>
            <li>Проанализировать полученную информацию. Данный этап включает извлечение нужного контента из всего полученного. Для этого понадобится использование регулярных выражений.</li>
            <li>
                Обработать и преобразовать данные. Их приводят в подходящий формат.
            </li>
    </ul>
    <p>
        Если вам понадобился <?= Html::a('парсинг защищенных сайтов',['site/zashchishchennyh-sajtov'],['title' => 'парсинг защищенных сайтов']) ?> нужно обратиться к компетентным специалистам. Благодаря этому скрипту можно получить лучший способ для автоматизированного сбора и сохранения информации. При помощи парсера создаются и обновляются сайты, похожие по оформлению, структуре и содержимому. Скрипт, изготовленный для этого на заказ — гарантия его создания с учетом технического задания, и возможность оказаться на лидерских позициях в конкретном сегменте.
    </p>
    <p>
        Преимущества парсинга:
        
    </p>
    <ul>
            <li>Быстрое и грамотное наполнение интернет-ресурса, что позволить экономить не только время, но и деньги.</li>
            <li>Присутствие всегда актуальной информации. Автоматическое обновление при помощи разработанной программы позволяет избегать многих ошибок, которые может совершить человек.</li>
            <li>
                Работа с большими объемами. Чтобы конкурировать в своем сегменте, порой ручного наполнения не хватает. В виде дополнительного функционала используют автоматизированный парсинг, заполняющий базу ваших сайтов со сторонних площадок.
            </li>
    </ul>
    <p>
        Использование всех возможностей данной программы — верный выбор для актуализации и продвижения своих площадок. Наша компания готова помочь в разработке и создании качественного помощника, способного облегчить вашу жизнь!
    </p>
</section>
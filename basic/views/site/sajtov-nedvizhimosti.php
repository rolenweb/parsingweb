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
                    <h1>Парсинг сайтов недвижимости</h1>
                </div>
                
            </div>
        </div>
</section>
<section class="container">
        <p>
            Парсинг данных с сайта недвижимости – эффективный способ сбора, группировки и обработки информации в автоматическом режиме. Парсер позволяет оперативно получить полный отчет об объявлениях, телефонных номерах, ценах на определенные виды недвижимости, описаниях и фотографиях, заблокировать объявления от агентов, отфильтровать данные и т.д., то есть настроить программу под задачи пользователя. 
        </p>
</section>
<section id="order" class="container">
        <div class="row-fluid">
			<div class="span1"></div>
            <div class="span10">
                <h3>Заказать парсинг сайтов недвижимости</h3>
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
        <h2>Кому необходим сервис парсинга сайтов?</h2>
        <p>
            Малые, средние и крупные компании, работающие на рынке недвижимости, заинтересованы в оперативном получении сведений о новых объектах и покупателях. Ведь от числа сделок купли, продажи и аренды зависит их прибыль.  
        </p>
        <p>
            В пору высоких технологий сбор и обработка данных вручную – малоэффективная методика организации рабочего процесса. Площадок объявлений о недвижимости уйма, новые объявления в сети появляются ежесекундно, поэтому обзор и анализ даже внушительным числом сотрудников не гарантирует полный и своевременный охват информационного пространства. При таком подходе конкуренты окажутся не на шаг, а на все 100 шагов впереди. К тому же, содержание большого штата сотрудников требует соответствующих расходов. 
        </p>
        <p>
            Другое дело – специализированное программное обеспечение, благодаря которому вы в любое время сможете в автоматическом режиме получать полезную информацию, необходимую для продуктивной работы. 
        </p>
        <h2>Подробнее о сервисе</h2>
        <p>
            Под парсингом сайтов недвижимости подразумевается разработка ПО, задачей которого является собирать, преобразовывать, отфильтровывать и анализировать информацию с тематических интернет-площадок. Программный функционал разрабатывается в соответствии с конкретными нуждами клиента. В итоге работы программы пользователь получает готовую базу данных либо документ со всеми требуемыми ему сведениями. 
        </p>
        <p>
            Сервис может быть использован как для крупных порталов (к примеру, <strong>парсинг авито</strong>, <strong>парсинг из рук в руки</strong>), так и малоизвестных сайтов частных объявлений, <?= Html::a('новостных ресурсов',['site/novostnyh-sajtov'],['парсинг новостных ресурсов']) ?> и т.д. Заказчик сам решает, откуда он хочет получать информацию, какую именно и в каком формате. Парсер работает в онлайновом режиме 24 часа в сутки. По завершении обработки данных программа выдает определенный сигнал, свидетельствующий об окончании процесса. 
        </p>
        <h2>Этапы работы</h2>
        <p>
            Парсинг включает несколько последовательных шагов:
            
        </p>
        <ul>
                <li>
                    Сбор сведений в исходном варианте. На данном этапе осуществляется загрузка нужной интернет-страницы/страниц. 
                </li>
                <li>
                    Преобразование данных в необходимый формат. Парсером извлекаются сведения из кодов web-страниц и преобразовываются.
                </li>
                <li>
                    Генерация информации в нужный вид. Парсер переводит данные в текстовый формат и записывает в базу либо документ, предназначенный заказчику.
                </li>
        </ul>
        <p>
            Плюсы
            
        </p>
        <ul>
                <li>
                    Оперативность. Процесс сканирования посредством парсера осуществляется намного быстрее аналогичной работы человеком.
                </li>
                <li>
                    Доступ к большим информационным объемам. За 60 секунд программа обрабатывает 200-500 страниц
                </li>
                <li>
                    Полностью автоматизированный процесс. Всего лишь нужно настроить программу по собственному усмотрению, запустить, а по окончании работы получить результаты
                </li>
                <li>
                    Экономия финансовых ресурсов. ПО не только эффективнее, но и гораздо дешевле оплаты труда специалистов
                </li>
        </ul>
        <p>
            Минусы - У парсинга есть единственный минус – невозможность получать исключительно достоверную информацию. Следить за содержанием контента нужно самостоятельно. 
            
        </p>
        <p>
            Услуга станет незаменимой везде, где требуется непрерывный либо частый процесс сбора и обработки информации об объявлениях недвижимости.
        </p>
</section>
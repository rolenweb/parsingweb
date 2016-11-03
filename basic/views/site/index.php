<?php
use yii\helpers\Html;
?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Сервис парсинга сайтов</h1>
                </div>
                
            </div>
        </div>
    </section>
    <!-- / .title -->  
<section class="services">
        <div class="container">
            <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-time icon-large"></i>
                        <p> </p>
                        <h4>Время - Деньги</h4>
                        <p>Быстрое и грамотное наполнение интернет-ресурса, что позволить экономить не только время, но и деньги.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-refresh icon-large"></i>
                        <p> </p>
                        <h4>Актуальность информации</h4>
                        <p>Автоматическое обновление при помощи разработанной программы позволяет избегать многих ошибок, которые может совершить человек.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-book icon-large"></i>
                        <p> </p>
                        <h4>Объемы данных</h4>
                        <p>Чтобы конкурировать в своем сегменте, порой ручного наполнения не хватает. Автоматизированный парсинг наполнит базу ваших сайтов со сторонних площадок. </p>
                    </div>
                </div>

            </div>

            
            <div class="center">
                
                <?= Html::a('Заказать парсинг',['site/order'],['title' => 'Заказать парсинг', 'class' => 'btn btn-primary btn-large']) ?>
            </div>
            <p>&nbsp;</p>

        </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Мы предлагаем парсинг</h3>
            
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-key icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Защищенных сайтов</h4>
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-table icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Товаров магазинов </h4>
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-picture icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Картинок с сайтов</h4>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-building icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Сайтов недвижимости</h4>
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-money icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Букмекерских сайтов</h4>
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-th-list icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Новостных сайтов</h4>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Недавние спарщенные сайты</h3>
            
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt="Парсинг яндекс новости" src="images/portfolio/thumb/item1.jpg">
                </div>
                <div class="desc">
                    <h5>Яндекс новости</h5>
                </div>
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt="Парсинг авито" src="images/portfolio/thumb/item2.jpg">
                </div>
                <div class="desc">
                    <h5>Авито</h5>
                </div>

            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt="Парсинг вконтакте" src="images/portfolio/thumb/item3.jpg">
                    
                </div>
                <div class="desc">
                    <h5>Вконтакте</h5>
                </div>
                
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt="Парсинг Nutcall" src="images/portfolio/thumb/item4.jpg">
                    
                </div>
                <div class="desc">
                    <h5>Nutcall</h5>
                </div>
                
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>

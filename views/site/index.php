<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

/*
 *
 #page-header:before {
    background-color: #FFFFFF !important;
    background-image: url(http://www.touringcars.eu/sites/default/files/styles/1600x900/public/default_images/default_header_2.jpg?itok=YHp18irO) !important;
    background-repeat: no-repeat !important;
    background-attachment: scroll !important;
    background-position: center top !important;
}
 * */

$this->registerCss('
 #page-header:before {
    background-color: #FFFFFF !important;
    background-image: url(../img/header-front-touringcars.jpg) !important;
    background-repeat: no-repeat !important;
    background-attachment: scroll !important;
    background-position: center top !important;
}

');



?>

</div>









<div class="main-container container-fluid">

    <header role="banner" id="page-header">

        <div class="region region-header">
            <section id="block-block-5" class="block block-block container text-center clearfix">


                <p class="rtecenter"><img alt="Change your backyard every day" src="../img/change-your-backyard-every-day-touringcars.png" style="height:231px; width:494px"></p>

            </section>
            <section id="block-booking-bookingblock" class="block block-booking container clearfix">


                <form class="col-xs-12 col-sm-8 col-md-10 col-lg-8 col-sm-offset-2 col-md-offset-1 col-lg-offset-2" action="https://booking.touringcars.eu/" method="post" id="bookingform-form" accept-charset="UTF-8"><div><input type="hidden" name="departurePlaceName" value="null">
                        <input type="hidden" name="returnPlaceName" value="null">
                        <input type="hidden" name="departureDate" value="null">
                        <input type="hidden" name="returnDate" value="null">
                        <div class="col-xs-12 col-md-6"><fieldset class="panel panel-default form-wrapper" id="edit-group1">
                                <legend class="panel-heading">
                                    <span class="panel-title fieldset-legend">Страна</span>
                                </legend>
                                <div class="panel-body">
                                    <div class="form-item form-item-departurecountry form-type-select form-group formskin"> <label class="control-label" for="edit-departurecountry">Страна <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
                                        <div class="formskin-select"><select class="form-control form-select required formskin-processed" id="edit-departurecountry" name="departureCountry"><option value="" selected="selected">- Выберите -</option><option value="EE">Estonia</option><option value="FI">Finland</option><option value="IS">Iceland</option><option value="NO">Norway</option><option value="SE">Sweden</option><option value="ES">Spain</option><option value="GB">United Kingdom</option><option value="PL">Poland</option><option value="LV">Latvia</option></select><span>- Выберите -</span></div></div>  </div>
                            </fieldset>
                        </div><div class="col-xs-12 col-md-6"><fieldset class="panel panel-default form-wrapper" id="edit-group2">
                                <legend class="panel-heading">
                                    <span class="panel-title fieldset-legend">Место</span>
                                </legend>
                                <div class="panel-body">
                                    <div class="form-item form-item-departurecode form-type-select form-group formskin"> <label class="control-label" for="edit-departurecode">Город <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
                                        <div class="formskin-select"><select class="form-control form-select required formskin-processed" id="edit-departurecode" name="departureCode"><option value="" selected="selected">- Выберите -</option></select><span>- Выберите -</span></div></div>  </div>
                            </fieldset>
                        </div><div class="col-xs-12 col-md-6"><fieldset class="panel panel-default form-wrapper" id="edit-group3">
                                <legend class="panel-heading">
                                    <span class="panel-title fieldset-legend">Pick-up</span>
                                </legend>
                                <div class="panel-body">
                                    <div class="container-inline-date"><div class="form-item form-item-departuredate form-type-date-popup form-group"> <label class="control-label" for="edit-departuredate--2">Дата</label>
                                            <div id="edit-departuredate--2" class="date-padding clearfix"><div class="form-item form-item-departuredate-date form-type-textfield form-group"> <label class="control-label" for="edit-departuredate--2-datepicker-popup-0">Дата</label>
                                                    <span class="custom-date-popup"><input class="form-control form-text" type="text" id="edit-departuredate--2-datepicker-popup-0" name="departureDate[date]" value="" size="20" maxlength="30"></span></div></div></div></div><div class="form-item form-item-departuretime form-type-select form-group formskin"> <label class="control-label" for="edit-departuretime">Время</label>
                                        <div class="formskin-select"><select class="form-control form-select formskin-processed" id="edit-departuretime" name="departureTime"><option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option><option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option><option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option><option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:50">16:30</option><option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option><option value="18:30">18:30</option></select><span>08:00</span></div></div>  </div>
                            </fieldset>
                        </div><div class="col-xs-12 col-md-6"><fieldset class="panel panel-default form-wrapper" id="edit-group4">
                                <legend class="panel-heading">
                                    <span class="panel-title fieldset-legend">Return</span>
                                </legend>
                                <div class="panel-body">
                                    <div class="container-inline-date"><div class="form-item form-item-returndate form-type-date-popup form-group"> <label class="control-label" for="edit-returndate--2">Дата</label>
                                            <div id="edit-returndate--2" class="date-padding clearfix"><div class="form-item form-item-returndate-date form-type-textfield form-group"> <label class="control-label" for="edit-returndate--2-datepicker-popup-0">Дата</label>
                                                    <span class="custom-date-popup"><input class="form-control form-text" type="text" id="edit-returndate--2-datepicker-popup-0" name="returnDate[date]" value="" size="20" maxlength="30"></span></div></div></div></div><div class="form-item form-item-returntime form-type-select form-group formskin"> <label class="control-label" for="edit-returntime">Время</label>
                                        <div class="formskin-select"><select class="form-control form-select formskin-processed" id="edit-returntime" name="returnTime"><option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option><option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option><option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option><option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:50">16:30</option><option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option><option value="18:30">18:30</option></select><span>08:00</span></div></div>  </div>
                            </fieldset>
                        </div><button type="submit" id="edit-submit--2" name="op" value="ЗАКАЗАТЬ ПРЯМО СЕЙЧАС" class="btn btn-default form-submit">ЗАКАЗАТЬ ПРЯМО СЕЙЧАС</button>
                        <input type="hidden" name="form_build_id" value="form-5GxMFLU_oHlfIqApbUk0YI2O0L1A6_zGQnHDI0P9Ar8">
                        <input type="hidden" name="form_id" value="bookingform_form">
                    </div></form>
            </section>
            <section id="block-block-13" class="block block-block clearfix">


                <a href="http://booking.touringcars.eu" id="book-now-button"><img alt="" src="/sites/default/files/book-now-button.png" style="height:34px; width:148px"></a>

            </section>
        </div>
    </header> <!-- /#page-header -->

    <div class="row">


        <section class="col-sm-12">

            <a id="main-content"></a>
            <div class="region region-content">
                <section id="block-views-summary-block" class="block block-views container clearfix">


                    <div class="view view-summary view-id-summary view-display-id-block view-dom-id-1e10ef4d941a116016a1e351d572ea08">



                        <div class="view-content">
                            <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">

                                <div class="views-field views-field-nothing col-xs-12 col-sm-3 col-md-5 pull-right">
                                    <span class="field-content"><a href="#setups" class="button bw">Setups</a>
                                    <a href="#" class="button bw">Best routes</a>
                                    <a href="#" class="button bw">Destinations</a>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
                <section id="block-system-main" class="block block-system clearfix">


                    <div id="node-163" class="node node-page clearfix" about="" typeof="foaf:Document">

                        <span property="dc:title" content="АРЕНДУЙТЕ ДОМ НА КОЛЕСАХ!" class="rdf-meta element-hidden"></span>
                        <span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>

                        <div class="content">
                        </div>

                    </div>

                </section>
                <section id="block-block-7" class="block block-block text-center container clearfix">


                    <h1>Аренда дома на колесах в северной европе</h1>
                    <h2>Аренда автодома &nbsp;в Исландии, Норвегии, Швеции, Финляндии и Эстонии</h2>
                    <p>Компания по прокату домов на колесах или как их еще называют «кемперов» Touring Cars
                        является одной из старейших и наиболее крупных организаций в своем роде в Северной Европе.
                        Если вы ищите наилучшее сочетание цены и качества, то Touring Cars- это то, что вам нужно.
                        Помимо &nbsp;современных и хорошо оснащенных моделей кемперов, а также дружелюбного и
                        профессионального персонала по работе с клиентами, компания Touring Cars предлагает трансфер
                        из аэропорта и обратно *, 24/7 помощь при поломке автодомов на дороге, при необходимости
                        услугу по его замене, а также возможность сдачи или приема в аренду выбранного кемпера в любое
                        время суток. Абсолютная гибкость нашего сервиса, белые ночи, сотни тысяч озер и исландские
                        плато застывшей лавы гарантируют вам незабываемый отпуск в доме на колесах!</p>
                    <p>&nbsp;</p>

                </section>
                <section id="block-block-6" class="block block-block clearfix">


                    <p class="rtecenter"><a class="button blue" href="/holiday-ideas#offers">
                            Просмотрите специальные предложения</a></p>

                </section>
                <section id="block-views-destinations-block" class="block block-views masonry-block masonry clearfix"
                         style="position: relative; width: 1200px; height: 2400px; visibility: visible; display: block;">


                    <div class="view view-destinations view-id-destinations view-display-id-block view-dom-id-fcc1ca96c43c4b4ef1949825d686a2ee">



                        <div class="view-content">


                            <div class="views-row view-header" style="position: absolute; left: 0px; top: 0px;">
                                <h2 class="rtecenter">Аренда дома на колесах в северной европе</h2>

                                <p class="rtecenter">Аренда автодома &nbsp;в Исландии, Норвегии, Швеции, Финляндии и Эстонии</p>

                                <p>Компания по прокату домов на колесах или как их еще называют «кемперов» Touring Cars является
                                    одной из старейших и наиболее крупных организаций в своем роде в Северной Европе. Если вы ищите
                                    наилучшее сочетание цены и качества, то Touring Cars- это то, что вам нужно. Помимо &nbsp;современных и
                                    хорошо оснащенных моделей кемперов, а также дружелюбного и профессионального персонала по работе с клиентами,
                                    компания Touring Cars предлагает трансфер из аэропорта и обратно *, 24/7 помощь при поломке автодомов на
                                    дороге, при необходимости услугу по его замене, а также возможность сдачи или приема в аренду выбранного
                                    кемпера в любое время суток. Абсолютная гибкость нашего сервиса, белые ночи, сотни тысяч озер и
                                    исландские плато застывшей лавы гарантируют вам незабываемый отпуск в доме на колесах!</p>

                                <p class="rtecenter"><a class="button blue" href="/node/26">Check out our holiday ideas</a></p>
                            </div>

                            <div class="views-row views-row-1 views-row-odd views-row-first"
                                 style="position: absolute; left: 600px; top: 0px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/sunset-1664960_1920_0.jpg?itok=uejeszG3" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content">
                                        <h2>Latvia</h2>
                                        <p></p>
                                        <p>Camper rental in Latvia is a fantastic option. The country is full of versatile
                                            destinations from verdant nature and parks to the cultural cities with
                                            historical attractions and exciting adventures.&nbsp;
                                        </p>
                                        <p></p>
                                        <a href="/ru/destinations/motorhome-vacation-latvia" class="button transparent">
                                            ЧИТАТЬ ПОДРОБНЕЕ
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="views-row views-row-2 views-row-even"
                                 style="position: absolute; left: 0px; top: 600px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/camper_rental_sweden.jpg?itok=rHi5Qzog" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content">
                                        <h2>Швеции </h2> <p></p>
                                        <p>иСТОРИЧЕСКИЕ ГОРОДА, дЕСЯТКИ ЗОН НЕТРОНУТОЙ ПРИРОДЫ И БОГАТАЯ САМОБЫТНЫМИ И
                                            ВЕСЕЛЫМИ ПРАЗДНИКАМИ КУЛЬТУРА. оТПУСК, ПРОВЕДЕННЫЙ В АРЕНДОВАНОМ АВТОДОМЕ В
                                            ШВЕЦИИ,&nbsp;ОСТАВИТ ВАМ НЕПЕРЕДАВАЕМЫЕ ВПЕЧАТЛЕНИЯ.&nbsp;</p>
                                        <p></p>
                                        <a href="" class="button transparent">ЧИТАТЬ ПОДРОБНЕЕ</a>
                                    </span>
                                </div>
                            </div>
                            <div class="views-row views-row-3 views-row-odd"
                                 style="position: absolute; left: 600px; top: 600px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/finland-espoo-kaitalampi-lake_0.jpg?itok=kyt9T1VF" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content">
                                        <h2>ФИНЛЯНДИЯ</h2> <p></p>
                                        <p>ТЫСЯЧИ РОСКОШНЫХ ОЗЕР, ОДИН ИЗ САМЫХ ВЕЛИЧЕСТВЕННЫХ&nbsp; АРХИПЕЛАГОВ МИРА,
                                            ТАИНСТВЕННАЯ ЛАПЛАНДИЯ В СОЧЕТАНИИ&nbsp; С ВОЗМОЖНОСТЬЮ СВОБОДНОГО
                                            СТРАНСТВОВАНИЯ ГАРАНТИРУЕТ ВАМ ИДЕАЛЬНЫЙ ОТПУСК В АРЕНДОВАННОМ ДОМЕ НА КОЛЕСАХ.
                                        </p>
                                        <p></p> <a href="" class="button transparent">ЧИТАТЬ ПОДРОБНЕЕ</a>
                                    </span>
                                </div>
                            </div>
                            <div class="views-row views-row-4 views-row-even" style="position: absolute; left: 0px; top: 1200px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/norway_fjord_83752543.jpg?itok=GcaJ-LAy" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content"><h2>НОРВЕГИЯ</h2> <p></p>
                                        <p>ЗАХВАТЫВАЮЩИЕ ДУХ ВИДЫ НА ФЬОРДЫ, ВОЗМОЖНОСТЬ ОТДОХНУТЬ И РАССЛАБИТЬСЯ НА КРАЮ, ОМЫВАЕМОЙ АРКТИЧЕСКИМ МОРЕМ,
                                            МНОГИМИ СОТНЯМИ МЕТРОВ НИЖЕ, ГОРЫ. &nbsp;</p>
                                        <p></p>
                                        <a href="" class="button transparent">ЧИТАТЬ ПОДРОБНЕЕ</a>
                                    </span>
                                </div>
                            </div>
                            <div class="views-row views-row-5 views-row-odd"
                                 style="position: absolute; left: 600px; top: 1200px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/motorhome_rental_estonia.jpg?itok=NCrPhXAl" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content"><h2>ШВЕЦИЯ</h2> <p></p>
                                        <p>иСТОРИЧЕСКИЕ ГОРОДА, дЕСЯТКИ зон НЕТРОНУТОЙ ПРИРОДЫ И БОГАТАЯ САМОБЫТНЫМИ И ВЕСЕЛЫМИ ПРАЗДНИКАМИ
                                            культура. оТПУСК, ПРОВЕДЕННЫЙ В АРЕНДОвАННОМ АВТОДОМЕ В ШВЕЦИИ,&nbsp;ОСТАВИТ ВАм
                                            НЕПЕРЕДАВАЕМЫЕ ВПЕЧАТЛЕНИЯ.&nbsp;</p>
                                        <p></p>
                                        <a href="" class="button transparent">ЧИТАТЬ ПОДРОБНЕЕ</a>
                                    </span>
                                </div>
                            </div>
                            <div class="views-row views-row-6 views-row-even views-row-last"
                                 style="position: absolute; left: 0px; top: 1800px;">

                                <div class="views-field views-field-field-background-image">
                                    <div class="field-content">
                                        <img class="adaptive-image img-responsive" typeof="foaf:Image"
                                             src="http://www.touringcars.eu/sites/default/files/styles/800x800/adaptive-image/public/background/islanti_1.jpg?itok=8XTfm-2T" alt="">
                                    </div>
                                </div>
                                <div class="views-field views-field-path">
                                    <span class="field-content"><h2>ИСЛАНДИИ</h2> <p></p>
                                        <p>лЕДНИКИ, ПОЛЯ ЗАСТЫВШЕЙ ЛАВЫ И ГЕЙЗЕРЫ. аРЕНДА ДОМОВ НА КОЛЕСАХ В ИСЛАНДИИ ПОДАРИТ ВАМ НЕЗАБЫВАЕМЫЕ ВПЕЧАТЛЕНИЯ.</p>
                                        <p></p>
                                        <a href="" class="button transparent">ЧИТАТЬ ПОДРОБНЕЕ</a>
                                    </span>
                                </div>
                            </div>
                        </div>






                    </div>
                </section>
            </div>
        </section>


    </div>
</div>



<div class="container">

@extends('frontend.layouts.master')
@section('head')
    <title>Вакансии Rebus</title>
@endsection

@section('content')
    

    <section id="page-title">

        <div class="container clearfix">

            <h1>Вакансии</h1>

            <ul class="breadcrumb"><li><a href="/">Главная</a></li>
<li class="active">Вакансии</li>
</ul>
        </div>

    </section><!-- #page-title end -->

<section id="content">
    
    <div class="content-wrap">

        
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="list-group list-group-horizontal">
                <a href="/vacancies" class="list-group-item active">Вакансии</a>
                <a href="/fillform" class="list-group-item">Заполнить онлайн анкету</a>
            </div>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="row">
        <div role="tabpanel">
            <div class="col-sm-3">
                <ul class="tree">
                    <li><a class="trigger collapsed">Вакансии</a>
                        <ul>
                                                            <li class="brand-nav"><a href="vacancies#tab1"
                                                         data-toggle="tab"><span>Технолог</span></a>
                                </li>
                                                            <li class="brand-nav"><a href="vacancies#tab2"
                                                         data-toggle="tab"><span>Механик</span></a>
                                </li>
                                                            <li class="brand-nav"><a href="vacancies#tab3"
                                                         data-toggle="tab"><span>Лаборант</span></a>
                                </li>
                                                            <li class="brand-nav"><a href="vacancies#tab4"
                                                         data-toggle="tab"><span>Бухгалтер</span></a>
                                </li>
                                                    </ul>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div>
                    <p>Если ни одна из открытых на сегодняшний день вакансий не заинтересовала Вас, Вы можете прислать
                        нам свое резюме на <a href="vacancies#">hr@artelgroup.uz</a> либо заполнить
                        <a href="fillform">анкету</a> и мы обязательно свяжемся с Вами, как только подходящая
                        для Вас позиция станет вакантной.
                        Узнайте больше о <a href="selection">процессе отбора персонала.</a></p>
                </div>
                <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                            <table>
                                <tr>
                                    <th>Место работы:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Образование</th>
                                    <td>Высшее</td>
                                </tr>
                                <tr>
                                    <th>Занятость:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Заработная плата:</th>
                                    <td>конфиденциально</td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>25-45 лет</td>
                                </tr>
                                <tr>
                                    <th>Пол:</th>
                                    <td>Мужской</td>
                                </tr>
                                <tr>
                                    <th>Обязанности:</th>
                                    <td>Разработка технологических норматив, инструкций, схем сборки, маршрутных карт и другой документации</td>
                                </tr>
                                <tr>
                                    <th>Требования к кандидату:</th>
                                    <td>Русский, узбекский</td>
                                </tr>
                                <tr>
                                    <th>Дополнительные сведения:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Срок подачи анкет:</th>
                                    <td></td>
                                </tr>
                            </table>

                            <p><a href="/fillform/1"> Подать анкету на эту вакансию</a></p>
                        </div>
                                            <div class="tab-pane" id="tab2">
                            <table>
                                <tr>
                                    <th>Место работы:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Образование</th>
                                    <td>Среднее техническое</td>
                                </tr>
                                <tr>
                                    <th>Занятость:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Заработная плата:</th>
                                    <td>конфиденциально</td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>25-45 лет</td>
                                </tr>
                                <tr>
                                    <th>Пол:</th>
                                    <td>Мужской</td>
                                </tr>
                                <tr>
                                    <th>Обязанности:</th>
                                    <td>Обеспечение безаварийной и надежной работы всех видов оборудования, их правильной эксплуатации, своевременного качественного ремонта и технического обслуживания, проведение работ по его модернизации и повышение экономичности ремонтного обслуживания оборуд</td>
                                </tr>
                                <tr>
                                    <th>Требования к кандидату:</th>
                                    <td>Русский, узбекский</td>
                                </tr>
                                <tr>
                                    <th>Дополнительные сведения:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Срок подачи анкет:</th>
                                    <td></td>
                                </tr>
                            </table>

                            <p><a href="/fillform/2"> Подать анкету на эту вакансию</a></p>
                        </div>
                                            <div class="tab-pane" id="tab3">
                            <table>
                                <tr>
                                    <th>Место работы:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Образование</th>
                                    <td>Среднее/ высшее</td>
                                </tr>
                                <tr>
                                    <th>Занятость:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Заработная плата:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>25-35 лет</td>
                                </tr>
                                <tr>
                                    <th>Пол:</th>
                                    <td>Не имеет значения</td>
                                </tr>
                                <tr>
                                    <th>Обязанности:</th>
                                    <td>Выполняет лабораторные анализы, испытания, измерения и другие виды работ при проведении исследований</td>
                                </tr>
                                <tr>
                                    <th>Требования к кандидату:</th>
                                    <td>Русский, узбекский</td>
                                </tr>
                                <tr>
                                    <th>Дополнительные сведения:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Срок подачи анкет:</th>
                                    <td></td>
                                </tr>
                            </table>

                            <p><a href="/fillform/3"> Подать анкету на эту вакансию</a></p>
                        </div>
                                            <div class="tab-pane" id="tab4">
                            <table>
                                <tr>
                                    <th>Место работы:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Образование</th>
                                    <td>Высшее</td>
                                </tr>
                                <tr>
                                    <th>Занятость:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Заработная плата:</th>
                                    <td>конфиденциально</td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>25-35 лет</td>
                                </tr>
                                <tr>
                                    <th>Пол:</th>
                                    <td>Не имеет значения</td>
                                </tr>
                                <tr>
                                    <th>Обязанности:</th>
                                    <td>Хорошие знания бухгалтерского учета</td>
                                </tr>
                                <tr>
                                    <th>Требования к кандидату:</th>
                                    <td>Русский, узбекский</td>
                                </tr>
                                <tr>
                                    <th>Дополнительные сведения:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Срок подачи анкет:</th>
                                    <td></td>
                                </tr>
                            </table>

                            <p><a href="/fillform/4"> Подать анкету на эту вакансию</a></p>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</div>


    </div>
</section>    <!-- #content end -->
@endsection
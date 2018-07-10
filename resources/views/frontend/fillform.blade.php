@extends('frontend.layouts.master')
@section('head')
    <title>Заполнить анкету Rebus</title>
@endsection

@section('content')
    
<section id="page-title">

    <div class="container clearfix">
        <h1>Заполнить онлайн анкету</h1>

        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active">Заполнить онлайн анкету</li>
        </ul>
    </div>

</section><!-- #page-title end -->

<section id="content">
    
    <div class="content-wrap">

        


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="list-group list-group-horizontal">
                    <a href="/vacancies" class="list-group-item">
                        Вакансии                    </a>
                    <a href="/fillform" class="list-group-item active">
                        Заполнить онлайн анкету                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container clearfix">
        <form class="form" name="fill" action="#">
        <div class="row">
            <div class="col-md-4">
                <div class="tabSwitch list-group wizard-menu">
                    <a href="fillform#tab11" data-toggle="pill" class="list-group-item active">
                        <h4 class="list-group-item-heading">1.
                            Личные данные                        </h4>
                        <br>
                    </a>
                    <a href="fillform#tab22" data-toggle="pill" class="list-group-item">
                        <h4 class="list-group-item-heading">2.
                            Работа                        </h4>
                        <br>
                    </a>
                    <a href="fillform#tab33" data-toggle="pill" class="list-group-item">
                        <h4 class="list-group-item-heading">3.
                            Навыки                        </h4>
                        <br>
                    </a>
                    <a href="fillform#tab44" data-toggle="pill" class="list-group-item">
                        <h4 class="list-group-item-heading">4.
                            Сведения о родственниках                        </h4>
                        <br>
                    </a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content">
                    <div class="step-1 tab-pane active" id="tab11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Ф.И.О.*                                    </label>
                                    <input id="name" name="name" type="name" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Дата рождения*                                    </label>
                                    <input id="birthday" name="birthday" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Место рождения*                                    </label>
                                    <input id="birthplace" name="birthplace" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Контактный номер*                                    </label>
                                    <input id="number" name="number" type="tel" class="form-control" placeholder="+998 XX XXX XXXX">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input id="email" name="email" type="email" class="form-control"
                                           placeholder="email@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Адрес прописки*                                    </label>
                                    <input id="main_address" name="main_address" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Адрес места жительства*                                    </label>
                                    <input id="living_address" name="living_address" type="text" class="form-control">
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="radios">
                                        Наличие судимости                                    </label>
                                    <div class="controls">
                                        <label class="radio inline" for="radios-0">
                                            <input name="radios2" id="radios-0" type="radio" checked="checked"
                                                   value="да">
                                            да                                        </label>
                                        <label class="radio inline" for="radios-1">
                                            <input name="radios2" id="radios-1" type="radio" value="нет">
                                            нет                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Наличие хронических заболеваний (если есть, то какие)                                    </label>
                                    <input id="inputEx1" name="illness" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Вредные привычки                                    </label>
                                    <input id="inputEx1" name="bad_habits" type="text" class="form-control" placeholder="">
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="step-2 tab-pane" id="tab22">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="otherFieldOption">
                                        Вакансия                                    </label>
                                    <select id="otherFieldOption" class="form-control" name="Items">

                                                                                    <option                                                 value="Технолог">Технолог</option>
                                                                                    <option                                                 value="Механик">Механик</option>
                                                                                    <option                                                 value="Лаборант">Лаборант</option>
                                                                                    <option                                                 value="Бухгалтер">Бухгалтер</option>
                                        
                                        <option value="otherField">
                                            Другая                                        </option>
                                    </select>
                                </div>
                                <div class="form-group hiddenForOther" id="otherField">
                                    <label for="inputEx1">
                                        Укажите предпочтительную Сферу Деятельности                                    </label>
                                    <input id="inputEx1" name="otherField" type="text" class="form-control textfield">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx2">
                                        Сведения о предыдущей работе (последние три)                                    </label>
                                    <input id="inputEx2" name="prev_work1" type="text" class="form-control"
                                           placeholder="период работы, организация, должность, основные обязанности / если опыта нет, указать «НЕТ»">
                                    <input id="inputEx2" name="prev_work2" type="text" class="form-control" placeholder="">
                                    <input id="inputEx2" name="prev_work3" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Кем бы Вы хотели работать у нас на предприятии                                    </label>
                                    <input id="inputEx1" name="like_work" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Работали ли Вы ранее в ГП "ARTEL"                                    </label>
                                    <input id="inputEx1" name="did_u_work" type="text" class="form-control"
                                           placeholder="кем вы работали, на каком предприятии">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Откуда (от кого) Вы узнали об этом вакантном месте                                    </label>
                                    <input id="inputEx1" name="who_said" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Предполагаемая зарплата                                    </label>
                                    <input id="inputEx1" name="wanted_salary" type="text" class="form-control">
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="step-3 tab-pane" id="tab33">
                        <div class="row">
                            <div class="col-md-12">
                                <table>
                                    <tr>
                                        <td style="width: 50%;">
                                            Название учебного заведения                                        </td>
                                        <td style="width: 15%;">
                                            Год окончания                                        </td>
                                        <td style="width: 35%;">
                                            Специальность (квалификация)                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;"><input name="university1" id="inputEx1" type="text" class="form-control"></td>
                                        <td style="width: 15%;"><input name="grad_year1" id="inputEx1" type="text" class="form-control"></td>
                                        <td style="width: 35%;"><input name="specialty1" id="inputEx1" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;"><input name="university2" id="inputEx1" type="text" class="form-control"></td>
                                        <td style="width: 15%;"><input name="grad_year2" id="inputEx1" type="text" class="form-control"></td>
                                        <td style="width: 35%;"><input name="specialty2" id="inputEx1" type="text" class="form-control"></td>
                                    </tr>

                                </table>
                                <div class="form-group">
                                    <label for="inputEx1">
                                        Дополнительные навыки                                    </label>
                                    <input id="inputEx1" name="skills1" type="text" class="form-control">
                                    <input id="inputEx1" name="skills2" type="text" class="form-control">
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="radios">
                                        Знание языков                                    </label>
                                    <div class="controls">
                                        <table>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    плохо                                                </td>
                                                <td>
                                                    хорошо                                                </td>
                                                <td>
                                                    отлично                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Русский                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-0">
                                                        <input name="radios3" id="radios-0" type="radio" value="плохо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-1">
                                                        <input name="radios3" id="radios-1" type="radio"
                                                               checked="checked" value="хорошо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-2">
                                                        <input name="radios3" id="radios-2" type="radio" value="отлично">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Английский                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-0">
                                                        <input name="radios4" id="radios-0" type="radio" value="плохо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-1">
                                                        <input name="radios4" id="radios-1" type="radio"
                                                               checked="checked" value="хорошо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-2">
                                                        <input name="radios4" id="radios-2" type="radio" value="отлично">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Узбекский                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-0">
                                                        <input name="radios5" id="radios-0" type="radio" value="плохо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-1">
                                                        <input name="radios5" id="radios-1" type="radio"
                                                               checked="checked" value="хорошо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-2">
                                                        <input name="radios5" id="radios-2" type="radio" value="отлично">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input id="inputEx1" name="anotherlang1" type="text" class="form-control"></td>
                                                <td>
                                                    <label class="radio inline" for="radios-0">
                                                        <input name="radios6" id="radios-0" type="radio" value="плохо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-1">
                                                        <input name="radios6" id="radios-1" checked="checked" type="radio" value="хорошо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-2">
                                                        <input name="radios6" id="radios-2" type="radio" value="отлично">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input id="inputEx1" name="anotherlang2" type="text" class="form-control"></td>
                                                <td>
                                                    <label class="radio inline" for="radios-0">
                                                        <input name="radios7" id="radios-0" type="radio" value="плохо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-1">
                                                        <input name="radios7" id="radios-1" type="radio" checked="checked" value="хорошо">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="radio inline" for="radios-2">
                                                        <input name="radios7" id="radios-2" type="radio" value="отлично">
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="step-4 tab-pane" id="tab44">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputEx1">
                                            Ваше семейное положение                                        </label>
                                        <input id="inputEx1" name="marital_status" type="text" class="form-control" >
                                    </div>
                                    <table>
                                        <tr>
                                            <td>
                                                Степень родства                                            </td>
                                            <td>
                                                Ф.И.О.                                            </td>
                                            <td>
                                                Год и место рождения                                            </td>
                                            <td>
                                                Место работы и должность                                            </td>
                                            <td>
                                                Адрес и место жительства                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember1" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname1" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday1" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork1" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress1" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember2" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname2" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday2" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork2" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress2" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember3" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname3" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday3" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork3" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress3" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember4" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname4" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday4" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork4" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress4" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember5" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname5" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday5" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork5" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress5" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember6" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname6" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday6" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork6" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress6" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="fmember7" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fname7" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fbirthday7" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="fwork7" id="inputEx1" type="text" class="form-control"></td>
                                            <td><input name="faddress7" id="inputEx1" type="text" class="form-control"></td>
                                        </tr>
                                    </table>
                                </div>
                                                                <div class="form-group">
                                    <label><input type="checkbox" name="agree" value="1" required="required"> Я ПОДТВЕРЖДАЮ, ЧТО ВСЕ ПРИВЕДЕННЫЕ МНОЮ СВЕДЕНИЯ ДОСТОВЕРНЫ И ПРАВИЛЬНЫ.
                                        Я ПОНИМАЮ, ЧТО ЗАПОЛНЕНИЕ ДАННОЙ АНКЕТЫ НЕ ЯВЛЯЕТСЯ ГАРАНТИЕЙ ПРЕДОСТАВЛЕНИЯ МНЕ РАБОТЫ.</label>                                </div>
                                <div class="pull-right">
                                    <div class="error" id="error">Заполните все обязательные поля</div>
                                    <div class="emailError" id="emailError">Недопустимый формат электронной почты</div>
                                    <button type="submit" id="fill-button" class="btn btn-success fillBtn" name="send-button">Отправить</button>                                    </form>                                </div>
                                    <div class="fileError" id="fileError">Слишком большой размер файла</div>
                                    <form action="#" method="post" data-pjax="0" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="SzJVNEdfb2glWDtAdy4WHxFkJl10MwcAOVsjcBMIFzwCdB1rPSw1UA==">                                    <label class="btn btn-default btn-file">
                                        загрузка
                                        <input type="file" id="fileUp" class="btn btn-default" name="file" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx">                                    </label>
                                    <button type="submit" id="fileSend" class="btn btn-default" name="upload-button" disabled="disabled">Отправить резюме</button>                                    </form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>    <!-- #content end -->

@endsection
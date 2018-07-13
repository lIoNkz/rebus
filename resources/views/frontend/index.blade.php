@extends('frontend.layouts.master')
@section('head')
    <title>Rebus - магазин бытовой техники</title>
@endsection

@section('content')
           <!-- Slider Home pahe
        ============================================= -->
        

    <section id="slider" class=" clearfix">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/sliders/home/ru/tv.jpg" alt="Baner1" title="" style="width: 100%;">
              </div>

              <div class="item">
                 <img src="img/sliders/home/ru/stove.jpg" alt="Ban4" title="" style="width: 100%;">
              </div>
            
              <div class="item">
                <img src="img/sliders/home/ru/wash.jpg" alt="Ban6" title="" style="width: 100%;">
              </div>
              <div class="item">
                <img src="img/sliders/home/ru/small.jpg" alt="Ban6" title="" style="width: 100%;">
              </div>
              <div class="item">
                <img src="img/sliders/home/ru/oven.jpg" alt="Ban6" title="" style="width: 100%;">
              </div>
              <div class="item">
                <img src="img/sliders/home/ru/gas.jpg" alt="Ban6" title="" style="width: 100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
                

    </section>

    
    
    
    <!-- Content
    ============================================= -->
    
<!-- Page Title
        ============================================= -->


<section id="content">
    
    <div class="content-wrap">

        
<!-- ********** Product Categories ********** -->
    <div class="row bottommargin-lgsm">
        <div class="container clearfix">
            <div class="heading-block center nomargin">
                <h1>Наша продукция</h1>
            </div>
        </div>
    </div>
    <div id="portfolio"
         class="portfolio portfolio-nomargin portfolio-notitle portfolio-full clearfix">
         <div class="row">
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/subcategory/11"><img src="/img/categories/11.jpg" alt="Мелкая бытовая техника"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/subcategory/11"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/subcategory/11">Мелкая бытовая техника</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/subcategory/1"><img src="/img/categories/1.jpg" alt="Плиты"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/subcategory/1"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/subcategory/1">Телевизоры</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/subcategory/2"><img src="/img/categories/2.jpg" alt="Стиральные машины"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/subcategory/2"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/subcategory/2">Стиральные машины</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/subcategory/3"><img src="/img/categories/3.jpeg" alt="Встраиваемая техника"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/subcategory/3"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/subcategory/3">Плиты</a>                    </h3>
                </div>
            </article>             
         </div>
<div class="row">
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/category/12"><img src="/img/categories/12.jpg" alt="Кондиционеры"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/12"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/12">Кондиционеры</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item ">
                <div class="portfolio-image">
                    <a href="/category/13"><img src="/img/categories/13.jpg" alt="Телевизоры"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/13"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/13">Холодильники</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item">
                <div class="portfolio-image">
                    <a href="/subcategory/15"><img src="/img/categories/15.jpg" alt="Холодильники"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/subcategory/15"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/subcategory/15">Печи</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item">
                <div class="portfolio-image">
                    <a href="/category/16"><img src="/img/categories/16.jpg" alt="Микроволновые печи"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/16"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/16">Пылесосы</a>                    </h3>
                </div>
            </article>    
</div>

<div class="row">
                     <article class="portfolio-item  hidden-categories">
                <div class="portfolio-image">
                    <a href="/category/17"><img src="/img/categories/17.jpg" alt="Мини-печи"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/17"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/17">Вытяжки</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item hidden-categories">
                <div class="portfolio-image">
                    <a href="/category/30"><img src="/img/categories/30.jpg" alt="Пылесосы"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/30"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/30">Отопительные котлы</a>                    </h3>
                </div>
            </article>
                    <article class="portfolio-item hidden-categories">
                <div class="portfolio-image">
                    <a href="/category/31"><img src="/img/categories/31.jpg" alt="Вытяжки"></a>                    <div class="portfolio-overlay">
                        <a class="center-icon" href="/category/31"><i class="icon-line-ellipsis"></i></a>                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3>
                        <a href="/category/31">Музыкальное оборудование</a>                    </h3>
                </div>
            </article>   
</div>

            </div>
    <div class="clear"></div>
            <div class="button button-full button-dark center tright more-categories">
            <div class="container clearfix">
                <b>Больше<i class="icon-caret-down moreCategory"></i></b>
            </div>
        </div>
    <!-- #product categories end -->

<!-- ********** Icon With Text ********** -->
<div class="section nobottommargin notopmargin">
        <div class="container clear-bottommargin clearfix">

            <div class="row bottommargin-lg topmargin-sm clearfix">

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-center fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="page/help-choice"><i class="i-alt noborder icon-question"></i></a>
                        </div>
                        <h3>Помощь в выборе
                            <span class="subtitle">Испытываете трудности с выбором Ваших будущих помощников? Мы всегда готовы помочь!</span>
                        </h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-center fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="/page/service-centers"><i class="i-alt noborder icon-line-ribbon"></i></a>
                        </div>
                        <h3>Сервисные центры
                            <span class="subtitle">Возникли вопросы по эксплуатации или гарантийному обслуживанию? Обратитесь в ближайший сервисный центр.</span>
                        </h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-center fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="/page/contacts"><i class="i-alt noborder icon-line-briefcase"></i></a>
                        </div>
                        <h3>Пожелания и предложения
                            <span class="subtitle">Будем рады узнать Ваше мнение!</span>
                        </h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin col_last">
                    <div class="feature-box fbox-center fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="page/videos"><i class="i-alt noborder icon-line2-film"></i></a>
                        </div>
                        <h3>Видео
                            <span class="subtitle">Наше видео производства продукции, реклама.</span>
                        </h3>
                    </div>
                </div>

                <div class="clear"></div>

            </div>

        </div>
    </div><!-- #icon with text end -->

<!-- ********** Statistics ********** -->
<!-- #statistics end -->


    <div class="section notopmargin">
        <div class="container clearfix">

            <div class="row topmargin-sm">

                <div class="heading-block center">
                    <h2>Новости</h2>
                </div>

                
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="news/"><img class="grayscale-h" src="img/articles/1.jpg" alt="Image"></a>                            </div>
                            <div class="entry-title">
                                <h3><a href="news/">Rebus на выставке-ярмарке отечественных производителей </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li>
                                    <i class="icon-calendar3"></i> 05-08-2017                                </li>
                                <li><i class="icon-eye-open"></i> 2757</li>
                            </ul>
                            <div class="entry-content">
                                <p>В Душанбе прошла Национальная выставка промышленных товаров.&nbsp;</p>
                            </div>
                        </div>
                    </div>

                
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="news/"><img class="grayscale-h" src="img/articles/2.jpg" alt="Image"></a>                            </div>
                            <div class="entry-title">
                                <h3><a href="news/">Презентация бытовой техники Rebus</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li>
                                    <i class="icon-calendar3"></i> 05-08-2017                                </li>
                                <li><i class="icon-eye-open"></i> 1799</li>
                            </ul>
                            <div class="entry-content">
                                <p><span class="newsContent">1го августа в<i>&nbsp;</i></span><span class="newsContent2">Шымкенте&nbsp;</span><span class="newsContent">успешно прошла грандиозная презентация бытовой техники Rebus.&nbsp;</span></p>
                            </div>
                        </div>
                    </div>

                
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="news/"><img class="grayscale-h" src="img/articles/3.jpg" alt="Image"></a>                            </div>
                            <div class="entry-title">
                                <h3><a href="news/">Rebus на универсальной выставке «Международное экономическое развитие – 2017»</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li>
                                    <i class="icon-calendar3"></i> 22-06-2017                                </li>
                                <li><i class="icon-eye-open"></i> 2197</li>
                            </ul>
                            <div class="entry-content">
                                <p>В Астане 20-21 июня проходила универсальная выставка &laquo;Международное экономическое развитие &ndash; 2017&raquo;.&nbsp;</p>
                            </div>
                        </div>
                    </div>

                
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="news/"><img class="grayscale-h" src="img/articles/4.jpg" alt="Image"></a>                            </div>
                            <div class="entry-title">
                                <h3><a href="news/">Rebus на международной выставке Redun Tiger</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li>
                                    <i class="icon-calendar3"></i> 17-04-2017                                </li>
                                <li><i class="icon-eye-open"></i> 4315</li>
                            </ul>
                            <div class="entry-content">
                                <p>Rebus успешно представил свою экспозицию на международной выставке Redun Tiger 2017</p>
                            </div>
                        </div>
                    </div>

                

            </div>

        </div>
    </div>

    <div class="container clearfix">
        <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="10"
             data-loop="true" data-nav="false" data-autoplay="4000" data-pagi="false" data-items-xxs="2"
             data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">
                            <div class="oc-item">
                    <a href="http://www.samsung.com/ru/home/" target="_blank"><img class="image_fade" src="img/partners/Untitled-1-300x157.jpg" alt="samsung"></a>                </div>
                            <div class="oc-item">
                    <a href="http://www.lg.com/ru" target="_blank"><img class="image_fade" src="img/partners/lg.png" alt="LG"></a>                </div>
                            <div class="oc-item">
                    <a href="http://www.embraco.com/" target="_blank"><img class="image_fade" src="img/partners/embraco.png" alt="embraco"></a>                </div>
                            <div class="oc-item">
                    <a href="http://www.changhong.com/" target="_blank"><img class="image_fade" src="img/partners/Changhong.png" alt="changhong"></a>                </div>
                            <div class="oc-item">
                    <a href="http://www.ulvac.com/" target="_blank"><img class="image_fade" src="img/partners/ulvac.png" alt="ulvac"></a>                </div>
                            <div class="oc-item">
                    <a href="http://www.h-t-s.com.tr/" target="_blank"><img class="image_fade" src="img/partners/hts.png" alt="hts"></a>                </div>
                            <div class="oc-item">
                    <a href="http://shivaki.com/" target="_blank"><img class="image_fade" src="img/partners/Shivaki.png" alt="Shivaki"></a>                </div>
                    </div>
    </div>

    </div>
</section>    <!-- #content end -->


@endsection
@extends('frontend.layouts.master')
@section('head')
    <title>Категории Rebus</title>
@endsection

@section('content')
    <section id="page-title">

        <div class="container clearfix">

            <h1>{{ $category }}</h1>

            <ul class="breadcrumb"><li><a href="/">Главная</a></li>
<li><a href="/brand">Rebus</a></li>
<li class="active">{{ $category }}</li>
</ul>
        </div>

    </section><!-- #page-title end -->

<section id="content">
    
    <div class="content-wrap">

        
<div class="container clearfix">

            <div class="clear"></div>


            <!-- Products
        ============================================= -->
        <div class="portfolio grid-container portfolio-5 clearfix">

                @foreach($products as $product)
                <article class="portfolio-item pf-icons pf-illustrations" style="height: 320px">
                    <div class="portfolio-image">
                        
                        
                        <a href="/products/#"><img src="/img/products/4.jpg"></a>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a class="left-icon" href="/img/products/4.jpg" data-lightbox="gallery-item"><i class="icon-line-zoom-in"></i></a>                            <a class="right-icon" href="/product/{{ $product->id }}"><i class="icon-line-ellipsis"></i></a>                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>
                            <a href="/product/{{ $product->id }}">{{ $product->name }}</a>                        </h3>
                    </div>
                </article>
                @endforeach
 
        </div><!-- #products end -->

<!--         <div align="center">
    <ul class="pagination"><li class="prev disabled"><span>&laquo;</span></li>
<li class="active"><a href="43@page=1" data-page="0">1</a></li>
<li><a href="43@page=2" data-page="1">2</a></li>
<li class="next"><a href="43@page=2" data-page="1">&raquo;</a></li></ul>        </div>

    
</div> -->

    </div>
</section>    <!-- #content end -->

@endsection
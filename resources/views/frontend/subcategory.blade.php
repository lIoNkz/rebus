@extends('frontend.layouts.master')
@section('head')
    <title>Бренд Rebus</title>
@endsection

@section('content')
<section id="page-title">

        <div class="container clearfix">

            <h1>{{ $category }}</h1>

            <ul class="breadcrumb"><li><a href="/">Главная</a></li>
<li class="active">{{ $category }}</li>
</ul>
        </div>

    </section><!-- #page-title end -->

<section id="content">
    
    <div class="content-wrap">

        
<div class="container clearfix">
            <div class="clear"></div>

        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio grid-container clearfix">
            @foreach($categories as $cat)
                <article class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="/@if($cat->descendants->all() != null){{ $a = 'subcategory' }}@else{{ $a = 'category'}}@endif/{{ $cat->id }}">
                            <img src="/img/categories/{{ $cat->img }}" alt="{{ $cat->name }}">
                        </a>                        
                        <div class="portfolio-overlay">
                            <a class="center-icon" href="/@if($cat->descendants->all() != null){{ $a = 'subcategory' }}@else{{ $a = 'category' }}@endif/{{ $cat->id }}">
                                <i class="icon-line-ellipsis"></i>
                            </a>                        
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>
                            <a href="/@if($cat->descendants->all() != null){{ $a = 'subcategory' }}@else{{ $a = 'category' }}@endif/{{ $cat->id }}">{{ $cat->name }}</a>                        
                        </h3>
                    </div>
                </article>
            @endforeach
        </div><!-- #portfolio end -->

        <div class="clear"></div>
        <div class="line"></div>
    
        </div><!-- Container end-->

    </div>
</section>    <!-- #content end -->


@endsection
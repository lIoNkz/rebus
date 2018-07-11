@extends('frontend.layouts.master')
@section('head')
    <title>Товар Rebus</title>
@endsection

@section('content')
    <section id="page-title">

        <div class="container clearfix">

            <h1>{{ $product->name }}</h1>

            <ul class="breadcrumb"><li><a href="/">Home</a></li>
<li><a href="/category/136">{{ $product->category_id }}</a></li>
<li class="active">{{ $product->name }}</li>
</ul>
        </div>

    </section><!-- #page-title end -->

<section id="content">
    
    <div class="content-wrap">

        
<div class="container clearfix">

    <div class="single-product">

        <div class="product product-view">

            <div class="col_half nobottommargin">

                <!-- Product Single - Gallery
                ============================================= -->
                <div class="product-image">
                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                        <div class="flexslider">
                            <div class="slider-wrap" data-lightbox="gallery">
                                
                                    <div class="slide">
                                        <a href="/img/products/images/if2FqrskDv8oWFTNMiApmNwtv6KCp6SE.jpg" title="R_WH_1.5_30" data-lightbox="gallery-item"><img src="/img/products/images/if2FqrskDv8oWFTNMiApmNwtv6KCp6SE.jpg" alt="R_WH_1.5_30"></a>                                    </div>

                                                            </div>
                        </div>
                    </div>
                </div><!-- Product Single - Gallery End -->

            </div>

            <div class="col_half col_last product-desc">

                <a class="button bottommargin-sm" href="###" target="_blank">Buy</a><div class="clear"></div>                <!-- Product Single - Short Description
                ============================================= -->
                
                <!-- Product Single - Meta
                ============================================= -->
                <div class="panel panel-default product-meta">
                    <div class="panel-body">
                        <span itemprop="productID" class="sku_wrapper">Название:<span
                                class="sku">{{ $product->name }}</span></span>
                        <<!-- span class="posted_in">
                            Category: <a href="../category/136">Electrical water heaters</a>                        </span> -->

                        <span class="tagged_as">
                            Brand: <a href="../brand/14">LG</a>                        </span>
                    </div>
                </div><!-- Product Single - Meta End -->

            </div>

            <div class="clear"></div>
            <div class="line"></div>

            <div class="col_full nobottommargin">
                <h2>Технические характеристики</h2>

<div class="table-responsive">
<table class="table table-bordered nobottommargin">
	<tbody>
		<tr>
			<td>Capacity, l</td>
			<td>30</td>
		</tr>
		<tr>
			<td>Power</td>
			<td>220V /50 Hz</td>
		</tr>
		<tr>
			<td>Power off, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Heating element power, W</td>
			<td>1500</td>
		</tr>
		<tr>
			<td>Heating regulator, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Protector, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Thermometer, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Security valve, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Protective shutting device, unit</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Diameter, mm</td>
			<td>350</td>
		</tr>
		<tr>
			<td>Height, mm</td>
			<td>644</td>
		</tr>
		<tr>
			<td>Average heating time &Delta;t=40&deg;С, min (not superior)</td>
			<td>56</td>
		</tr>
		<tr>
			<td>Thermoisolation width, mm</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Heater weight, empty, kg (not superior)</td>
			<td>16,8</td>
		</tr>
		<tr>
			<td>Heater weight, full, kg (not superior)</td>
			<td>48,8</td>
		</tr>
		<tr>
			<td>Manufacturer&rsquo;s warranty (service and repair parts)</td>
			<td>3 year</td>
		</tr>
	</tbody>
</table>
</div>
            </div>

        </div>

    </div>

    <div class="clear"></div>

</div>
    </div>
</section>    <!-- #content end -->

@endsection
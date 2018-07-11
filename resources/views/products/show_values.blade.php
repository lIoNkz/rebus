@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Технические характеристики товара<br>
        <a href="{{ route('products.index') }}">Назад</a>
        </h1>
        <h1 class="pull-right">
            <a href="{{ route('add_value',[$product_id]) }}">Добавить</a>
        </h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('products.values')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


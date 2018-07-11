@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Products</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('products.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'values.store']) !!}
                    
                    <input type="hidden" value="{{ $product_id }}" name="product_id">
                    <input type="hidden" value="{{ $product_id }}" name="toProduct">
                    <!-- Attribute  Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('attr_name', 'Характеристика:') !!}
                        {!! Form::select('attr_name', $array , null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Value  Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('attr_value', 'Значение:') !!}
                        {!! Form::text('attr_value', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('show_values_of_product', [$product_id]) !!}" class="btn btn-default">Отмена</a>
                    </div>

                    {{ csrf_field() }}
                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


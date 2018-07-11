@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Редактирование характеристики товара
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::model($value, ['route' => ['values.update', $value->id], 'method' => 'patch']) !!}

                              

                    <!-- Attr Name Field -->
                    <div class="form-group col-sm-3">
                        <b>Attr Name:</b><br>
                        <p style="font-size: 2em;">{{ $value->attr_name }}</p>
                    </div>

                    <!-- Attr Value Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('attr_value', 'Attr Value:') !!}
                        {!! Form::text('attr_value', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('show_values_of_product', $product_id) !!}" class="btn btn-default">Cancel</a>
                    </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

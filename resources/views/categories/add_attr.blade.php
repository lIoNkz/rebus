@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Новый атрибут категории</h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'attributes.store']) !!}
                    
                    <input type="hidden" value="{{ $category_id }}" name="category_id">
                    <!-- Name  Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('attr_name', 'Значение:') !!}
                        {!! Form::text('attr_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('show_attrs_of_category', [$category_id]) !!}" class="btn btn-default">Отмена</a>
                    </div>

                    {{ csrf_field() }}
                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Attr Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attr_name', 'Attr Name:') !!}
    {!! Form::text('attr_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Attr Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attr_value', 'Attr Value:') !!}
    {!! Form::text('attr_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('values.index') !!}" class="btn btn-default">Cancel</a>
</div>

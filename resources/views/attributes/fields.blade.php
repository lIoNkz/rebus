<!-- Attr Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attr_name', 'Attr Name:') !!}
    {!! Form::text('attr_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::select('category_id', $array , ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('attributes.index') !!}" class="btn btn-default">Cancel</a>
</div>

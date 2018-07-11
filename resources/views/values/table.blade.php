<table class="table table-responsive" id="values-table">
    <thead>
        <tr>
            <th>Product Id</th>
        <th>Attr Name</th>
        <th>Attr Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($values as $value)
        <tr>
            <td>{!! $value->product_id !!}</td>
            <td>{!! $value->attr_name !!}</td>
            <td>{!! $value->attr_value !!}</td>
            <td>
                {!! Form::open(['route' => ['values.destroy', $value->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('values.show', [$value->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('values.edit', [$value->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
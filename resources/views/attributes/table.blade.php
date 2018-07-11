<table class="table table-responsive" id="attributes-table">
    <thead>
        <tr>
            <th>Attr Name</th>
        <th>Category Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($attributes as $attribute)
        <tr>
            <td>{!! $attribute->attr_name !!}</td>
            <td>{!! $attribute->category_id !!}</td>
            <td>
                {!! Form::open(['route' => ['attributes.destroy', $attribute->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('attributes.show', [$attribute->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('attributes.edit', [$attribute->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
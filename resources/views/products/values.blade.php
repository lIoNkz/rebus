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

                <div class='btn-group'>
                    <a href="{!! route('edit_values', [$value->id, $value->product_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
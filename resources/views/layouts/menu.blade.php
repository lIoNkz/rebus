<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('attributes*') ? 'active' : '' }}">
    <a href="{!! route('attributes.index') !!}"><i class="fa fa-edit"></i><span>Attributes</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('values*') ? 'active' : '' }}">
    <a href="{!! route('values.index') !!}"><i class="fa fa-edit"></i><span>Values</span></a>
</li>


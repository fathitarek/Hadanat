<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Name En</th>
        <th>Name Ar</th>
        <th>Image</th>
        <th>Logo</th>
        <th>Desc En</th>
        <th>Desc Ar</th>
        <th>Advantages En</th>
        <th>Advantages En</th>
        <th>Address</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Conditions</th>
        <th>Conditions</th>
        <th>Category Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{!! $products->name_en !!}</td>
            <td>{!! $products->name_ar !!}</td>
            <td>{!! $products->cover !!}</td>
            <td>{!! $products->logo !!}</td>
            <td>{!! $products->desc_en !!}</td>
            <td>{!! $products->desc_ar !!}</td>
            <td>{!! $products->advantages_en !!}</td>
            <td>{!! $products->advantages_en !!}</td>
            <td>{!! $products->address !!}</td>
            <td>{!! $products->latitude !!}</td>
            <td>{!! $products->longitude !!}</td>
            <td>{!! $products->conditions !!}</td>
            <td>{!! $products->conditions !!}</td>
            <td>{!! $products->category_id !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
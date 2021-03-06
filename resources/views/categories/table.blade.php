<table class="table table-responsive" id="categories-table">
    <thead>
        <tr>
            <th>Name En</th>
        <th>Name Ar</th>
        <th>Desc En</th>
        <th>Desc Ar</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $categories)
        <tr>
            <td>{!! $categories->name_en !!}</td>
            <td>{!! $categories->name_ar !!}</td>
            <td>{!! $categories->desc_en !!}</td>
            <td>{!! $categories->desc_ar !!}</td>
            <td>{!! $categories->image !!}</td>
            <td>
                {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$categories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$categories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
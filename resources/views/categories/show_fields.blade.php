<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $categories->id !!}</p>
</div>

<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name En:') !!}
    <p>{!! $categories->name_en !!}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    <p>{!! $categories->name_ar !!}</p>
</div>

<!-- Desc En Field -->
<div class="form-group">
    {!! Form::label('desc_en', 'Desc En:') !!}
    <p>{!! $categories->desc_en !!}</p>
</div>

<!-- Desc Ar Field -->
<div class="form-group">
    {!! Form::label('desc_ar', 'Desc Ar:') !!}
    <p>{!! $categories->desc_ar !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><div>{!!$categories->image ? '<img src="/uploads/category/'.$categories->image.'" height="100"/>':''!!}</div>                        
</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $categories->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $categories->updated_at !!}</p>
</div>


<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $products->id !!}</p>
</div>

<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name En:') !!}
    <p>{!! $products->name_en !!}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    <p>{!! $products->name_ar !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('cover', 'Cover:') !!}
          <p><div>{!!$products->cover ? '<img src="/uploads/products/'.$products->cover.'" height="100"/>':''!!}</div>                        

</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
        <p><div>{!!$products->logo ? '<img src="/uploads/products/'.$products->logo.'" height="100"/>':''!!}</div>                        

</div>

<!-- Desc En Field -->
<div class="form-group">
    {!! Form::label('desc_en', 'Desc En:') !!}
    <p>{!! $products->desc_en !!}</p>
</div>

<!-- Desc Ar Field -->
<div class="form-group">
    {!! Form::label('desc_ar', 'Desc Ar:') !!}
    <p>{!! $products->desc_ar !!}</p>
</div>

<!-- Advantages En Field -->
<div class="form-group">
    {!! Form::label('advantages_en', 'Advantages En:') !!}
    <p>{!! $products->advantages_en !!}</p>
</div>

<!-- Advantages En Field -->
<div class="form-group">
    {!! Form::label('advantages_ar', 'Advantages Ar:') !!}
    <p>{!! $products->advantages_ar !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{!! $products->address !!}</p>
</div>

<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{!! $products->latitude !!}</p>
</div>

<!-- Longitude Field -->
<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{!! $products->longitude !!}</p>
</div>

<!-- Conditions Field -->
<div class="form-group">
    {!! Form::label('conditions_en', 'Conditions En:') !!}
    <p>{!! $products->conditions_en !!}</p>
</div>

<!-- Conditions Field -->
<div class="form-group">
    {!! Form::label('conditions_ar', 'Conditions Ar:') !!}
    <p>{!! $products->conditions_ar !!}</p>
</div>
<!-- Conditions Field -->
<div class="form-group">
    {!! Form::label('total_rate', 'Total Rate:') !!}
    <p>{!! $products->total_rate !!}</p>
</div>
<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category :') !!}
    <p>{!! $products->category->name_en !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $products->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $products->updated_at !!}</p>
</div>


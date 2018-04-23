<!-- Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_en', 'Name En:') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    {!! Form::text('name_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
</div>
<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover', 'cover:') !!}
    {!! Form::file('cover', null, ['class' => 'form-control']) !!}</div>
<!-- Desc En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_en', 'Desc En:') !!}
    {!! Form::textarea('desc_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_ar', 'Desc Ar:') !!}
    {!! Form::textarea('desc_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Advantages En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advantages_en', 'Advantages En:') !!}
    {!! Form::text('advantages_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Advantages ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advantages_ar', 'Advantages Ar:') !!}
    {!! Form::text('advantages_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','id'=>'us2-address','autocomplete'=>'off']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control','id'=>'us2-lat','readonly' => 'true']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control','id'=>'us2-lon','readonly' => 'true']) !!}
</div>

<!-- Conditions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conditions_en', 'Conditions:') !!}
    {!! Form::text('conditions_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Conditions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conditions_ar', 'Conditions:') !!}
    {!! Form::text('conditions_ar', null, ['class' => 'form-control']) !!}
</div>
<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {{ Form::select('category_id',$categories,null,['placeholder' => 'Select Category...','class'=> 'form-control','id'=>'category_id'],['option'=>'Please Select Category']) }}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products') !!}" class="btn btn-default">Cancel</a>
</div>

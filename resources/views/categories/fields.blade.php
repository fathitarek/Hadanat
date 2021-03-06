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

<!-- Desc En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_en', 'Desc En:') !!}
    {!! Form::text('desc_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_ar', 'Desc Ar:') !!}
    {!! Form::text('desc_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories') !!}" class="btn btn-default">Cancel</a>
</div>
@extends('auth.layouts.app')


@section('content')
<section class="content-header">
    <h1>
        Products
    </h1>
</section>
<div class="content">
    <!--@include('adminlte-templates::common.errors')-->
    <div class="box box-primary">

        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'products_add','files'=>true]) !!}

                @include('products.fields')
<!--Location: <input type="text" id="us2-address" style="width: 200px"/>
Radius: <input type="text" id="us2-radius"/>-->
                <div id="us2" style="width: 500px; height: 400px;"></div>
                <!--Lat.: <input type="text" id="us2-lat"/>
                Long.: <input type="text" id="us2-lon"/>-->
                <script>$('#us2').locationpicker({
                        location: {latitude: 30.044281, longitude: 31.340002},
                        radius: 300,
                        inputBinding: {
                            latitudeInput: $('#us2-lat'),
                            longitudeInput: $('#us2-lon'),
                            radiusInput: $('#us2-radius'),
                            locationNameInput: $('#us2-address')
                        }, enableAutocomplete: true

                    });
                </script>



                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

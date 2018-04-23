@extends('auth.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categories
        </h1>
    </section>
    <div class="content">
        <!--@include('adminlte-templates::common.errors')-->
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'categories_add','files'=>true]) !!}

                    <!--<form action="/admin/categories/store" method="POST">-->  
                        @include('categories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@if($errors->any())
    <div class="alert alert-danger ">
        <button class="close" aria-hidden="true" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">{{ Lang::get('main.error') }}</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }} </li>
            @endforeach
        </ul>
    </div>
@endif
@if(!empty( Session::get('success') ))
    <div class="alert  alert-success">
        <button class="close" aria-hidden="true" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading"> {!! Session::get('success') !!}</h4>
        {{ Session::forget('success') }}
    </div>
@endif
@if(!empty( Session::get('error') ))
    <div class="alert  alert-danger">
        <button class="close" aria-hidden="true" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading"> {!! Session::get('error') !!}</h4>
        {{ Session::forget('error') }}
    </div>
@endif
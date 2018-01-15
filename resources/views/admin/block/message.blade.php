@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{!! $error !!}</li>
        @endforeach
    </ul>
@endif
@if (Session::has('flash_message'))
    <div class="alert alert-{!! Session::get('flash_level') !!} slideUp">
        {!! Session::get('flash_message') !!}
    </div>
@endif
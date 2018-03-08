@if (isset($errors)&&count($errors) > 0)
    <div class="btn btn-raised m-b-10 btn-danger btn-block waves-effect">
        <button type="button" class="btn btn-raised m-b-10 btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                data-animate-enter="" data-animate-exit="" data-color-name="alert-danger" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach ($errors->all() as $error)
            <li><strong>{!! $error !!}</strong></li>
        @endforeach
    </div>
@endif


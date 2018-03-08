@if (session()->has('success'))
    <div class="btn btn-raised m-b-10 btn-success btn-block waves-effect">
        <button type="button" class="btn btn-raised m-b-10 btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                data-animate-enter="" data-animate-exit="" data-color-name="alert-success"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif

{{--<div class="col-sm-12 col-md-4 col-lg-3">--}}
    {{--<button type="button" class="btn btn-raised m-b-10 btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"--}}
            {{--data-animate-enter="" data-animate-exit="" data-color-name="alert-success"> SUCCESS </button>--}}
{{--</div>--}}
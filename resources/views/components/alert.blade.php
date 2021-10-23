<div>
    @if (Session::has('danger'))
    <div class="alert alert-danger">
        {{ Session::get('danger') }}
        @php
        Session::forget('danger');
        @endphp
        <p id="close" class=" float-right btn btn-sm btn-danger">X</p>
    </div>

    @elseif (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
        <p id="close" class=" float-right btn btn-sm btn-success">X</p>
    </div>

    @endif
</div>

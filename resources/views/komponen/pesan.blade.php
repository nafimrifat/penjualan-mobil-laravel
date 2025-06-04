

@if (Session::has('success'))
    <div class="pt-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>


@endif


@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger  mx-auto alert-dismissible fade show" role="alert" style="width: 80%;">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
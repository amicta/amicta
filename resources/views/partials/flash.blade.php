@if (session('status'))
    <div class="alert alert-{{ session('status.element') }} alert-has-icon alert-dismissible show fade">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        {{ session('status.message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

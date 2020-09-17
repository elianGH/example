@if (count($errors) > 0)
    <div class="notification notify-danger" data-timeout="5000" data-pos="top-right">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="notification notify-success" data-timeout="5000" data-pos="top-right">
        {{ session('success') }}
    </div>
@endif

@if(session('info'))
    <div class="uk-notification notify-primary" data-timeout="5000" data-pos="top-right">
        {{ session('info') }}
    </div>
@endif

@if(session('warning'))
    <div class="uk-notification notify-warning" data-timeout="5000" data-pos="top-right">
        {{ session('warning') }}
    </div>
@endif

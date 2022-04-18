@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div style="color: red;">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

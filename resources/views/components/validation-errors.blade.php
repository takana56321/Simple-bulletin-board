@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'mb-4']) }}>
        <ul class="text-sm text-red-600 space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session()->has('success'))
    @component('layouts.partials.alerts._alerts_component', ['class' => 'bg-green-300'])
        {{ session('success') }}
    @endcomponent
@endif

@if (session()->has('error'))
    @component('layouts.partials.alerts._alerts_component', ['class' => 'bg-red-300'])
        {{ session('error') }}
    @endcomponent
@endif

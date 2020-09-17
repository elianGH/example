@component('components.aside.menu-item', [
    'route' => route('dashboard.index'),
    'icon' => 'material',
    'iconName' => 'inbox',
    'isActive' => true])

    {{ __('Dashboard') }}
@endcomponent

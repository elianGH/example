@component('components.aside.menu-item-nested', [
    'icon' => 'material',
    'iconName' => 'people',
    'isActive' => false,
    'nestedList' => [
            [
                'name' => 'TeamResource',
                'route' => route('team.index')
            ],
            [
                'name' => 'Users',
                'route' => '#'
            ],
        ]
    ])

    {{ __('Users') }}
@endcomponent

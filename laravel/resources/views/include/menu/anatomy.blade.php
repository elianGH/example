@component('components.aside.menu-item-nested', [
    'icon' => 'material',
    'iconName' => 'web_asset',
    'isActive' => false,
    'nestedList' => [
            [
                'name' => 'Body types',
                'route' => route('body_type.index')
            ],
            [
                'name' => 'Body parts',
                'route' => route('body_part.index')
            ],
            [
                'name' => 'Muscles',
                'route' => route('muscle.index')
            ],
        ]
    ])

    {{ __('Anatomy') }}
@endcomponent

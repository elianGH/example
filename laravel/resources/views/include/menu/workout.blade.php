@component('components.aside.menu-item-nested', [
    'icon' => 'material',
    'iconName' => 'web_asset',
    'isActive' => false,
    'nestedList' => [
            [
                'name' => 'Programs',
                'route' => route('workout.program.index')
            ],
            [
                'name' => 'Exercises',
                'route' => route('workout.exercise.index')
            ],
            [
                'name' => 'Equipments',
                'route' => route('workout.equipment.index')
            ],
        ]
    ])

    {{ __('Workout') }}
@endcomponent

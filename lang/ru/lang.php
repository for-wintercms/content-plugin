<?php return [
    'plugin' => [
        'name' => 'Контент контроль',
        'description' => 'Менеджер управления контентом'
    ],
    'permissions' => [
        'items'         => 'Управления контентом',
        'items_changes' => 'Управление блоками контента (только для разработчиков)',
    ],
    'controllers' => [
        'items' => [
            'list_title'   => 'Список',
            'create_title' => 'Создать контент',
            'update_title' => 'Обновить - :title [:name]',
            'no_content'   => 'Добавьте область управления',
            'errors' => [
                'repeater_example'  => 'Правильный пример:',
                'items_empty'       => 'Выберите шаблон репитера',
                'items_no_repeater' => 'Репитер :repeater не найден',
            ],
        ],
    ],
];
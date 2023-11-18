<?php return [
    'prompt' => 'Добавить новый элемент',
    'items'  => [
        'title_label' => 'Название',
        'name_label'  => 'Ключ',
        'name_cmt'    => 'Имя по которому будете получать контент. Допустимые символы: a-z_-',
        'items_label' => 'Контент',
        'sort_order'  => 'Сортировка',
        'create_at'   => 'Создано',
        'updated_at'  => 'Обновлено',
    ],
    'pages' => [
        'tab_main'    => 'Основные',
        'section_settings' => 'Страница',
        'field_title' => 'Название',
        'field_slug'  => 'Слаг (часть URN)',
        'field_icon'  => 'Иконка',
        'field_order' => 'Порядок',
    ],
    'list' => [
        'title'      => 'Список',
        'create_btn' => 'Создать блок',
        'sort_btn'   => 'Сортировать блоки',
        'no_content' => 'Добавьте область управления',
        'delete_selected_btn' => 'Удалить выбранные блоки',
        'page_config_example' => 'Правильный пример:',
    ],
    'form' => [
        'title'         => 'Обновить - :title',
        'items_empty'   => 'Форма пустая',
        'items_missing' => 'Форма отсутствует',
        'fill_and_save' => 'Заполнить пустые и Сохранить',
    ],
    'tabs' => [
        'content'  => 'Контент',
        'settings' => 'Настройки',
    ],
    'submenu' => [
        'create_page_btn' => 'Создать',
    ],
    'popup' => [
        'page' => [
            'title_create' => 'Создать страницу',
            'title_clone'  => 'Клонировать страницу',
            'field_ready_tmp' => 'Готовые шаблоны',
            'field_option_create_new_tmp' => 'Создать новый шаблон...',
        ],
        'block' => [
            'title_create'   => 'Создать блок для страницы - :page',
            'btn_new_item'   => 'Новый шаблон',
            'btn_ready_item' => 'Готовый шаблон',
            'field_ready_tmp_label' => 'Шаблон',
            'field_ready_tmp_empty' => 'Готовые шаблоны отсутствуют',
            'optgroup_ready_tmp_current' => 'Для текущей странице',
            'optgroup_ready_tmp_global'  => 'Общие шаблоны',
            'field_ready_tmp_title' => 'Название шаблона',
            'field_ready_tmp_key'   => 'Ключ шаблона',
        ],
        'rename_block' => [
            'title_rename' => 'Переименовать блок',
        ],
    ],
    'errors' => [
        'pages_list'  => 'Правильно объявите пункт списка блоков в файле ":fileName"',
        'page_config' => 'Неверный синтаксис в конфигурационном файле страниц ":fileName"',
        'section_config'  => 'Неверный синтаксис в конфигурационном файле секций ":fileName"',
        'no_page'         => 'Не найдена страница настроек ":pageSlug"',
        'no_item'         => 'Контент блок ":itemSlug" не найден',
        'no_item_tmp'     => 'Шаблон ":itemSlug" не найден',
        'no_exists_item'  => 'Контент блок ":itemSlug" уже существует',
        'available_item'  => 'В контент странице ":pageSlug" настройка ":itemSlug" уже имеется',
        'non_item_create' => 'Запрещено добавлять блоки',
        'non_item_create_new_tmp'   => 'Запрещено добавлять новые блоки',
        'non_item_create_ready_tmp' => 'Запрещено добавлять шаблонные блоки',
        'non_item_rename' => 'Запрещено переименовать шаблоны',
        'non_item_delete' => 'Запрещено удалять шаблоны',
        'non_page_create' => 'Запрещено создавать страницы',
        'non_page_clone'  => 'Запрещено клонировать страницы',
        'non_page_edit'   => 'Запрещено редактировать страницы',
        'non_page_delete' => 'Запрещено удалять страницы',
        'no_exists_page'  => 'Страница со слагом ":slug" уже существует',
        'add_item_type'   => 'Неверный тип добавляемого блока',
        'item_slug'       => 'Неверное название ключа блока ":itemSlug"',
        'no_section_file' => 'Файл шаблон секции ":sectionFile" не найден',
    ],
    'success' => [
        'create_item' => 'Контент блок ":itemName" успешно добавлен',
        'rename_item' => 'Контент блок успешно переименован',
        'create_page' => 'Страница ":page" успешно создана',
        'clone_page'  => 'Страница ":page" успешно скопирована',
        'edit_page'   => 'Страница ":page" успешно изменена',
        'delete_page' => 'Страница успешно удалена',
    ],
    'msg' => [
        'confirm_page_delete' => 'Страница будет удалена безвозвратно! Вы действительно хотите удалить страницу ":page"?',
    ],
];
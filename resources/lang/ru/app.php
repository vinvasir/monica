<?php

return [
    'update' => 'Обновить',
    'save' => 'Сохранить',
    'add' => 'Добавить',
    'cancel' => 'Отмена',
    'delete' => 'Удалить',
    'edit' => 'Редактировать',
    'upload' => 'Закачать',
    'close' => 'Закрыть',
    'create' => 'Create',
    'remove' => 'Убрать',
    'revoke' => 'Revoke',
    'done' => 'Done',
    'verify' => 'Verify',
    'for' => 'for',
    'unknown' => 'I don’t know',
    'load_more' => 'Load more',
    'loading' => 'Loading...',
    'with' => 'with',

    'application_title' => 'Monica – a CRM for your friends and family',
    'application_description' => 'Monica is a tool to manage your interactions with your loved ones, friends and family.',
    'application_og_title' => 'Have better relations with your loved ones. Free Online CRM for friends and family.',

    'markdown_description' => 'Хотите форматировать ваш текст? Мы поддерживаем Markdown для добавления этих функций',
    'markdown_link' => 'Читать документацию',

    'header_settings_link' => 'Настройки',
    'header_logout_link' => 'Выйти',

    'main_nav_cta' => 'Добавить людей',
    'main_nav_dashboard' => 'Обзор',
    'main_nav_family' => 'контакты',
    'main_nav_journal' => 'Журнал',
    'main_nav_activities' => 'Активности',
    'main_nav_tasks' => 'Задачи',
    'main_nav_trash' => 'Корзина',

    'footer_remarks' => 'Есть предложения?',
    'footer_send_email' => 'Отправьте мне email',
    'footer_privacy' => 'Политика конфиденциальности',
    'footer_release' => 'Примечания к выпуску',
    'footer_newsletter' => 'Рассылка',
    'footer_source_code' => 'Contribute',
    'footer_version' => 'Версия: :version',
    'footer_new_version' => 'Доступна новая версия',

    'footer_modal_version_whats_new' => 'Что нового',
    'footer_modal_version_release_away' => 'You are 1 release behind the latest version available. You should update your instance.|You are :number releases behind the latest version available. You should update your instance.',

    'breadcrumb_dashboard' => 'Обзор',
    'breadcrumb_list_contacts' => 'Список контактов',
    'breadcrumb_journal' => 'Журнал',
    'breadcrumb_settings' => 'Настройки',
    'breadcrumb_settings_export' => 'Экспорт',
    'breadcrumb_settings_users' => 'Пользователи',
    'breadcrumb_settings_users_add' => 'Добавить пользователя',
    'breadcrumb_settings_subscriptions' => 'Подписка',
    'breadcrumb_settings_import' => 'Импорт',
    'breadcrumb_settings_import_report' => 'Импортировать отчёт',
    'breadcrumb_settings_import_upload' => 'Закачать',
    'breadcrumb_settings_tags' => 'Тэги',
    'breadcrumb_add_significant_other' => 'Add significant other',
    'breadcrumb_edit_significant_other' => 'Edit significant other',
    'breadcrumb_add_note' => 'Add a note',
    'breadcrumb_edit_note' => 'Edit a note',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'How did you meet',
    'breadcrumb_settings_personalization' => 'Personalization',
    'breadcrumb_settings_security' => 'Security',
    'breadcrumb_settings_security_2fa' => 'Two Factor Authentication',

    'gender_male' => 'Мужской',
    'gender_female' => 'Женский',
    'gender_none' => 'Неизвестно',

    'error_title' => 'Whoops! Something went wrong.',
    'error_unauthorized' => 'You don\'t have the right to edit this resource.',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'Love relationships',
    'relationship_type_group_family' => 'Family relationships',
    'relationship_type_group_friend' => 'Friend relationships',
    'relationship_type_group_work' => 'Work relationships',
    'relationship_type_group_other' => 'Other kind of relationships',

    'relationship_type_partner' => 'significant other',
    'relationship_type_partner_female' => 'significant other',
    'relationship_type_partner_reverse' => 'significant other',
    'relationship_type_partner_reverse_female' => 'significant other',
    'relationship_type_partner_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_female_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_reverse_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_reverse_female_with_name' => ':name&#39;s significant other',

    'relationship_type_spouse' => 'spouse',
    'relationship_type_spouse_female' => 'spouse',
    'relationship_type_spouse_reverse' => 'spouse',
    'relationship_type_spouse_reverse_female' => 'spouse',
    'relationship_type_spouse_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_female_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_reverse_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_reverse_female_with_name' => ':name&#39;s spouse',

    'relationship_type_date' => 'date',
    'relationship_type_date_female' => 'date',
    'relationship_type_date_reverse' => 'date',
    'relationship_type_date_reverse_female' => 'date',
    'relationship_type_date_with_name' => ':name&#39;s date',
    'relationship_type_date_female_with_name' => ':name&#39;s date',
    'relationship_type_date_reverse_with_name' => ':name&#39;s date',
    'relationship_type_date_reverse_female_with_name' => ':name&#39;s date',

    'relationship_type_lover' => 'lover',
    'relationship_type_lover_female' => 'lover',
    'relationship_type_lover_reverse' => 'lover',
    'relationship_type_lover_reverse_female' => 'lover',
    'relationship_type_lover_with_name' => ':name&#39;s lover',
    'relationship_type_lover_female_with_name' => ':name&#39;s lover',
    'relationship_type_lover_reverse_with_name' => ':name&#39;s lover',
    'relationship_type_lover_reverse_female_with_name' => ':name&#39;s lover',

    'relationship_type_inlovewith' => 'in love with',
    'relationship_type_inlovewith_female' => 'in love with',
    'relationship_type_inlovewith_reverse' => 'loved by',
    'relationship_type_inlovewith_reverse_female' => 'loved by',
    'relationship_type_inlovewith_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_female_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_reverse_with_name' => ':name&#39;s secret lover',
    'relationship_type_inlovewith_reverse_female_with_name' => ':name&#39;s secret lover',

    'relationship_type_lovedby' => 'loved by',
    'relationship_type_lovedby_female' => 'loved by',
    'relationship_type_lovedby_reverse' => 'in love with',
    'relationship_type_lovedby_reverse_female' => 'in love with',
    'relationship_type_lovedby_with_name' => ':name&#39;s secret lover',
    'relationship_type_lovedby_female_with_name' => ':name&#39;s secret lover',
    'relationship_type_lovedby_reverse_with_name' => 'someone :name is in love with',
    'relationship_type_lovedby_reverse_female_with_name' => 'someone :name is in love with',

    'relationship_type_ex' => 'ex-boyfriend',
    'relationship_type_ex_female' => 'ex-girlfriend',
    'relationship_type_ex_reverse' => 'ex-boyfriend',
    'relationship_type_ex_reverse_female' => 'ex-girlfriend',
    'relationship_type_ex_with_name' => ':name&#39;s ex-boyfriend',
    'relationship_type_ex_female_with_name' => ':name&#39;s ex-girlfriend',
    'relationship_type_ex_reverse_with_name' => ':name&#39;s ex-boyfriend',
    'relationship_type_ex_reverse_female_with_name' => ':name&#39;s ex-girlfriend',

    'relationship_type_parent' => 'father',
    'relationship_type_parent_female' => 'mother',
    'relationship_type_parent_reverse' => 'son',
    'relationship_type_parent_reverse_female' => 'daughter',
    'relationship_type_parent_with_name' => ':name&#39;s father',
    'relationship_type_parent_female_with_name' => ':name&#39;s mother',
    'relationship_type_parent_reverse_with_name' => ':name&#39;s son',
    'relationship_type_parent_reverse_female_wit1h_name' => ':name&#39;s daughter',

    'relationship_type_child' => 'son',
    'relationship_type_child_female' => 'daughter',
    'relationship_type_child_reverse' => 'father',
    'relationship_type_child_reverse_female' => 'mother',
    'relationship_type_child_with_name' => ':name&#39;s son',
    'relationship_type_child_female_with_name' => ':name&#39;s daughter',
    'relationship_type_child_reverse_with_name' => ':name&#39;s father',
    'relationship_type_child_reverse_female_with_name' => ':name&#39;s mother',

    'relationship_type_sibling' => 'brother',
    'relationship_type_sibling_female' => 'sister',
    'relationship_type_sibling_reverse' => 'brother',
    'relationship_type_sibling_reverse_female' => 'sister',
    'relationship_type_sibling_with_name' => ':name&#39;s brother',
    'relationship_type_sibling_female_with_name' => ':name&#39;s sister',
    'relationship_type_sibling_reverse_with_name' => ':name&#39;s brother',
    'relationship_type_sibling_reverse_female_with_name' => ':name&#39;s sister',

    'relationship_type_grandparent' => 'grand parent',
    'relationship_type_grandparent_female' => 'grand parent',
    'relationship_type_grandparent_reverse' => 'grand child',
    'relationship_type_grandparent_reverse_female' => 'grand child',
    'relationship_type_grandparent_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandparent_female_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandparent_reverse_with_name' => ':name&#39;s grand child',
    'relationship_type_grandparent_reverse_female_with_name' => ':name&#39;s grand child',

    'relationship_type_grandchild' => 'grand child',
    'relationship_type_grandchild_female' => 'grand child',
    'relationship_type_grandchild_reverse' => 'grand parent',
    'relationship_type_grandchild_reverse_female' => 'grand parent',
    'relationship_type_grandchild_with_name' => ':name&#39;s grand child',
    'relationship_type_grandchild_female_with_name' => ':name&#39;s grand child',
    'relationship_type_grandchild_reverse_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandchild_reverse_female_with_name' => ':name&#39;s grand parent',

    'relationship_type_uncle' => 'uncle',
    'relationship_type_uncle_female' => 'aunt',
    'relationship_type_uncle_reverse' => 'nephew',
    'relationship_type_uncle_reverse_female' => 'niece',
    'relationship_type_uncle_with_name' => ':name&#39;s uncle',
    'relationship_type_uncle_female_with_name' => ':name&#39;s aunt',
    'relationship_type_uncle_reverse_with_name' => ':name&#39;s nephew',
    'relationship_type_uncle_reverse_female_with_name' => ':name&#39;s niece',

    'relationship_type_nephew' => 'nephew',
    'relationship_type_nephew_female' => 'niece',
    'relationship_type_nephew_reverse' => 'uncle',
    'relationship_type_nephew_reverse_female' => 'aunt',
    'relationship_type_nephew_with_name' => ':name&#39;s nephew',
    'relationship_type_nephew_female_with_name' => ':name&#39;s niece',
    'relationship_type_nephew_reverse_with_name' => ':name&#39;s uncle',
    'relationship_type_nephew_reverse_female_with_name' => ':name&#39;s aunt',

    'relationship_type_cousin' => 'cousin',
    'relationship_type_cousin_female' => 'cousin',
    'relationship_type_cousin_reverse' => 'cousin',
    'relationship_type_cousin_reverse_female' => 'cousin',
    'relationship_type_cousin_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_female_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_reverse_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_reverse_female_with_name' => ':name&#39;s cousin',

    'relationship_type_godfather' => 'godfather',
    'relationship_type_godfather_female' => 'godmother',
    'relationship_type_godfather_reverse' => 'godson',
    'relationship_type_godfather_reverse_female' => 'goddaughter',
    'relationship_type_godfather_with_name' => ':name&#39;s godfather',
    'relationship_type_godfather_female_with_name' => ':name&#39;s godmother',
    'relationship_type_godfather_reverse_with_name' => ':name&#39;s godson',
    'relationship_type_godfather_reverse_female_with_name' => ':name&#39;s goddaughter',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_reverse' => 'godfather',
    'relationship_type_godson_reverse_female' => 'godmother',
    'relationship_type_godson_with_name' => ':name&#39;s godson',
    'relationship_type_godson_female_with_name' => ':name&#39;s goddaughter',
    'relationship_type_godson_reverse_with_name' => ':name&#39;s godfather',
    'relationship_type_godson_reverse_female_with_name' => ':name&#39;s godmother',

    'relationship_type_friend' => 'friend',
    'relationship_type_friend_female' => 'friend',
    'relationship_type_friend_reverse' => 'friend',
    'relationship_type_friend_reverse_female' => 'friend',
    'relationship_type_friend_with_name' => ':name&#39;s friend',
    'relationship_type_friend_female_with_name' => ':name&#39;s friend',
    'relationship_type_friend_reverse_with_name' => ':name&#39;s friend',
    'relationship_type_friend_reverse_female_with_name' => ':name&#39;s friend',

    'relationship_type_bestfriend' => 'best friend',
    'relationship_type_bestfriend_female' => 'best friend',
    'relationship_type_bestfriend_reverse' => 'best friend',
    'relationship_type_bestfriend_reverse_female' => 'best friend',
    'relationship_type_bestfriend_with_name' => ':name&#39;s best friend',
    'relationship_type_bestfriend_female_with_name' => ':name&#39;s best friend',
    'relationship_type_bestfriend_reverse_with_name' => ':name&#39;s best friend',
    'relationship_type_bestfriend_reverse_female_with_name' => ':name&#39;s best friend',

    'relationship_type_colleague' => 'colleague',
    'relationship_type_colleague_female' => 'colleague',
    'relationship_type_colleague_reverse' => 'colleague',
    'relationship_type_colleague_reverse_female' => 'colleague',
    'relationship_type_colleague_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_female_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_reverse_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_reverse_female_with_name' => ':name&#39;s colleague',

    'relationship_type_boss' => 'boss',
    'relationship_type_boss_female' => 'boss',
    'relationship_type_boss_reverse' => 'subordinate',
    'relationship_type_boss_reverse_female' => 'subordinate',
    'relationship_type_boss_with_name' => ':name&#39;s boss',
    'relationship_type_boss_female_with_name' => ':name&#39;s boss',
    'relationship_type_boss_reverse_with_name' => ':name&#39;s subordinate',
    'relationship_type_boss_reverse_female_with_name' => ':name&#39;s subordinate',

    'relationship_type_subordinate' => 'subordinate',
    'relationship_type_subordinate_female' => 'subordinate',
    'relationship_type_subordinate_reverse' => 'boss',
    'relationship_type_subordinate_reverse_female' => 'boss',
    'relationship_type_subordinate_with_name' => ':name&#39;s subordinate',
    'relationship_type_subordinate_female_with_name' => ':name&#39;s subordinate',
    'relationship_type_subordinate_reverse_with_name' => ':name&#39;s boss',
    'relationship_type_subordinate_reverse_female_with_name' => ':name&#39;s boss',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentor',
    'relationship_type_mentor_reverse' => 'protege',
    'relationship_type_mentor_reverse_female' => 'protege',
    'relationship_type_mentor_with_name' => ':name&#39;s mentor',
    'relationship_type_mentor_female_with_name' => ':name&#39;s mentor',
    'relationship_type_mentor_reverse_with_name' => ':name&#39;s protege',
    'relationship_type_mentor_reverse_female_with_name' => ':name&#39;s protege',

    'relationship_type_protege' => 'protege',
    'relationship_type_protege_female' => 'protege',
    'relationship_type_protege_reverse' => 'mentor',
    'relationship_type_protege_reverse_female' => 'mentor',
    'relationship_type_protege_with_name' => ':name&#39;s protege',
    'relationship_type_protege_female_with_name' => ':name&#39;s protege',
    'relationship_type_protege_reverse_with_name' => ':name&#39;s mentor',
    'relationship_type_protege_reverse_female_with_name' => ':name&#39;s mentor',
];

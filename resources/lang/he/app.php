<?php

return [
    'update' => 'עדכון',
    'save' => 'שמירה',
    'add' => 'הוספה',
    'cancel' => 'ביטול',
    'delete' => 'מחיקה',
    'edit' => 'עריכה',
    'upload' => 'העלאה',
    'close' => 'סגירה',
    'create' => 'יצירה',
    'remove' => 'הסרה',
    'revoke' => 'שלילה',
    'done' => 'סיום',
    'verify' => 'אימות',
    'for' => 'for',
    'unknown' => 'לא ידוע לי',
    'load_more' => 'לטעון עוד',
    'loading' => 'בטעינה…',
    'with' => 'עם',

    'application_title' => 'מוניקה - ניהול קשרים עם חברים ומשפחה',
    'application_description' => 'מוניקה היא כלי לניהול הקשרים החברתיים שלך עם אהוביך, חבריך ומשפחתך.',
    'application_og_title' => 'חיזוק הקשר עם אהוביך. מערכת ניהול מקוונת בחינם לקשרים עם חברים ומשפחה.',

    'markdown_description' => 'רוצה להוסיף קצת עניין לטקסט שלך? במערכת זו קיימת תמיכה ב־Markdown כדי להוסיף הדגשה, הטיה, רשימות ועוד.',
    'markdown_link' => 'קריאת התיעוד',

    'header_settings_link' => 'הגדרות',
    'header_logout_link' => 'יציאה',

    'main_nav_cta' => 'הוספת אנשים',
    'main_nav_dashboard' => 'לוח מחוונים',
    'main_nav_family' => 'אנשי קשר',
    'main_nav_journal' => 'יומן',
    'main_nav_activities' => 'פעילויות',
    'main_nav_tasks' => 'משימות',
    'main_nav_trash' => 'אשפה',

    'footer_remarks' => 'יש הערות?',
    'footer_send_email' => 'ניתן לשלוח לי דוא״ל',
    'footer_privacy' => 'מדיניות פרטיות',
    'footer_release' => 'הערות הוצאה לאור',
    'footer_newsletter' => 'רשימת דיוור',
    'footer_source_code' => 'תרומה',
    'footer_version' => 'גרסה: :version',
    'footer_new_version' => 'גרסה חדשה זמינה',

    'footer_modal_version_whats_new' => 'מה חדש',
    'footer_modal_version_release_away' => 'גרסה זו יצאה לאור גרסה אחת לפני הגרסה העדכנית הנוכחית. עליך לעדכן את העותק שלך.|גרסה זו יצאה לאור :number גרסאות לפני הגרסה העדכנית הנוכחית. עליך לעדכן את העותק שלך.',

    'breadcrumb_dashboard' => 'לוח מחוונים',
    'breadcrumb_list_contacts' => 'רשימת אנשים',
    'breadcrumb_journal' => 'יומן',
    'breadcrumb_settings' => 'הגדרות',
    'breadcrumb_settings_export' => 'יצוא',
    'breadcrumb_settings_users' => 'משתמשים',
    'breadcrumb_settings_users_add' => 'הוספת משתמש',
    'breadcrumb_settings_subscriptions' => 'הרשמה',
    'breadcrumb_settings_import' => 'יבוא',
    'breadcrumb_settings_import_report' => 'דוח יבוא',
    'breadcrumb_settings_import_upload' => 'העלאה',
    'breadcrumb_settings_tags' => 'תגיות',
    'breadcrumb_add_significant_other' => 'הוספת קשר זוגי',
    'breadcrumb_edit_significant_other' => 'עריכת קשר זוגי',
    'breadcrumb_add_note' => 'הוספת הערה',
    'breadcrumb_edit_note' => 'עריכת הערה',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'איך הכרתם',
    'breadcrumb_settings_personalization' => 'התאמה אישית',
    'breadcrumb_settings_security' => 'אבטחה',
    'breadcrumb_settings_security_2fa' => 'אימות דו־שלבי',

    'gender_male' => 'גבר',
    'gender_female' => 'אישה',
    'gender_none' => 'שמור במערכת',

    'error_title' => 'אופס! משהו השתבש.',
    'error_unauthorized' => 'אין לך את ההרשאה לערוך את המשאב הזה.',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'קשרים רומנטיים',
    'relationship_type_group_family' => 'קשרים משפחתיים',
    'relationship_type_group_friend' => 'קשרים חברתיים',
    'relationship_type_group_work' => 'קשרי עבודה',
    'relationship_type_group_other' => 'סוגי קשר אחרים',

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

    'relationship_type_parent' => 'אבא',
    'relationship_type_parent_female' => 'אימא',
    'relationship_type_parent_reverse' => 'בן',
    'relationship_type_parent_reverse_female' => 'בת',
    'relationship_type_parent_with_name' => 'אבא של :name',
    'relationship_type_parent_female_with_name' => 'אימא של :name',
    'relationship_type_parent_reverse_with_name' => 'הבן של :name',
    'relationship_type_parent_reverse_female_wit1h_name' => 'הבת של :name',

    'relationship_type_child' => 'בן',
    'relationship_type_child_female' => 'בת',
    'relationship_type_child_reverse' => 'אבא',
    'relationship_type_child_reverse_female' => 'אימא',
    'relationship_type_child_with_name' => 'הבן של :name',
    'relationship_type_child_female_with_name' => 'הבת של :name',
    'relationship_type_child_reverse_with_name' => 'אבא של :name',
    'relationship_type_child_reverse_female_with_name' => 'אימא של :name',

    'relationship_type_sibling' => 'אח',
    'relationship_type_sibling_female' => 'אחות',
    'relationship_type_sibling_reverse' => 'אח',
    'relationship_type_sibling_reverse_female' => 'אחות',
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

    'relationship_type_friend' => 'חבר',
    'relationship_type_friend_female' => 'חברה',
    'relationship_type_friend_reverse' => 'חבר',
    'relationship_type_friend_reverse_female' => 'חבר',
    'relationship_type_friend_with_name' => ':name&#39;s friend',
    'relationship_type_friend_female_with_name' => 'חברה של :name',
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

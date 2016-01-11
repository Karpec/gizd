<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Skupiny';
$txt['viewing_groups'] = 'Zobrazit skupiny';

$txt['membergroups_title'] = 'Editovat skupiny';
$txt['membergroups_description'] = 'Uživatelé zařazení do skupin mají podobné nastavení práv, vzhledu nebo přístupových práv. Některé skupiny jsou rozlišeny počtem příspěvků. Uživatele můžeš do skupiny přiřadit tak, že z jeho profilu změníš nastavení účtu.';
$txt['membergroups_modify'] = 'Změnit';

$txt['membergroups_add_group'] = 'Přidat skupinu';
$txt['membergroups_regular'] = 'Běžné skupiny';
$txt['membergroups_post'] = 'Skupiny podle počtu příspěvků';

$txt['membergroups_group_name'] = 'Jméno skupiny';
$txt['membergroups_new_board'] = 'Viditelné diskuse';
$txt['membergroups_new_board_desc'] = 'Diskuse, které může vidět člen skupiny.';
$txt['membergroups_new_board_post_groups'] = '<em>Poznámka: skupiny založené na počtu příspěvků většinou nepotřebují explicitně vyjmenovat přístupné diskuse, práva zdědí ze skupiny, ve které jsou zařazeni.</em>';
$txt['membergroups_new_as_inherit'] = 'dědit z';
$txt['membergroups_new_as_type'] = 'podle typu';
$txt['membergroups_new_as_copy'] = 'nebo odvozená z';
$txt['membergroups_new_copy_none'] = '(nic)';
$txt['membergroups_can_edit_later'] = '(možno upravit později.)';

$txt['membergroups_edit_group'] = 'Editovat skupinu';
$txt['membergroups_edit_name'] = 'Jméno skupiny';
$txt['membergroups_edit_inherit_permissions'] = 'Dědit práva';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Vyber &quot;Ne&quot;, aby měla skupina vlastní oprávnění.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Ne - Použít vlastní oprávnění';
$txt['membergroups_edit_inherit_permissions_from'] = 'Dědit z';
$txt['membergroups_edit_hidden'] = 'Viditelnost';
$txt['membergroups_edit_hidden_no'] = 'Viditelná';
$txt['membergroups_edit_hidden_boardindex'] = 'Viditelná - kromě přehledu skupin';
$txt['membergroups_edit_hidden_all'] = 'Neviditelná';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Jsi si jistý, že chceš zakázat přirazování této skupiny jako primární skupiny?\\n\\nTo způsobí, že tato skupina pouze zadat jako další skupina a přenastaví všechny, kdo ji mají jako primární skupinu, že se jim přemístí do dalších skupin.';
$txt['membergroups_edit_desc'] = 'Popis skupiny';
$txt['membergroups_edit_group_type'] = 'Typ skupiny';
$txt['membergroups_edit_select_group_type'] = 'Vybrat typ skupiny';
$txt['membergroups_group_type_private'] = 'Soukromá <span class="smalltext">(Členství musí být přiděleno)</span>';
$txt['membergroups_group_type_protected'] = 'Chráněná <span class="smalltext">(Pouze administrátoři můžou spravovat a zařazovat)</span>';
$txt['membergroups_group_type_request'] = 'Uzavřená <span class="smalltext">(Uživatel smí požádat o členství)</span>';
$txt['membergroups_group_type_free'] = 'Volná <span class="smalltext">(Uživatel smí opustit a vstoupit do skupiny pod libosti)</span>';
$txt['membergroups_group_type_post'] = 'Podle příspěvků <span class="smalltext">(Členství podle počtu příspěvků)</span>';
$txt['membergroups_min_posts'] = 'Vyžadováno příspěvků';
$txt['membergroups_online_color'] = 'Barva v seznamu uživatelů online';
$txt['membergroups_star_count'] = 'Počet hvězdiček';
$txt['membergroups_star_image'] = 'Jméno souboru s hvězdičkou';
$txt['membergroups_star_image_note'] = '(můžeš použít $language pro jazyk uživatele.)';
$txt['membergroups_max_messages'] = 'Maximální počet soukromých zpráv';
$txt['membergroups_max_messages_note'] = '(0 = bez omezení)';
$txt['membergroups_edit_save'] = 'Uložit';
$txt['membergroups_delete'] = 'Smazat';
$txt['membergroups_confirm_delete'] = 'Jsi si jistý, že chceš smazat tuto skupinu?!';

$txt['membergroups_members_title'] = 'Zobrazení všech členů skupiny';
$txt['membergroups_members_group_members'] = 'Uživatelé ve skupině';
$txt['membergroups_members_no_members'] = 'Tato skupina je prázdná';
$txt['membergroups_members_add_title'] = 'Přidat člena do této skupiny';
$txt['membergroups_members_add_desc'] = 'Vyplň seznam členů k přidání';
$txt['membergroups_members_add'] = 'Přidat členy';
$txt['membergroups_members_remove'] = 'Odstranit ze skupiny';
$txt['membergroups_members_last_active'] = 'Naposledy aktivní';
$txt['membergroups_members_additional_only'] = 'Přidávat jen jako další skupinu';
$txt['membergroups_members_group_moderators'] = 'Moderátoři skupiny';
$txt['membergroups_members_description'] = 'Popis';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Jsi si jistý, že chceš odstranit sám sebe ze skupiny administrátorů?';

$txt['membergroups_postgroups'] = 'Skupiny';
$txt['membergroups_settings'] = 'Nastavení skupiny';
$txt['groups_manage_membergroups'] = 'Skupiny s právy měnit skupiny';
$txt['membergroups_select_permission_type'] = 'Vybrat profil práv';
$txt['membergroups_images_url'] = '{URL tématu}/images/';
$txt['membergroups_select_visible_boards'] = 'Zobrazit diskuse';
$txt['membergroups_members_top'] = 'uživatelé';
$txt['membergroups_name'] = 'Jméno';
$txt['membergroups_stars'] = 'Hvězdiček';

$txt['admin_browse_approve'] = 'Uživatelé, kteří čekají na schválení';
$txt['admin_browse_approve_desc'] = 'Odsud můžeš spravovat všechny uživatele, kteří čekají na schválení účtu.';
$txt['admin_browse_activate'] = 'Uživatelé, kteří čekají na aktivaci';
$txt['admin_browse_activate_desc'] = 'Zde je výpis všech uživatelů, kteří si ještě neaktivovali účet na tomto fóru.';
$txt['admin_browse_awaiting_approval'] = 'Čeká na schválení <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Čeká na aktivaci <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Jméno';
$txt['admin_browse_email'] = 'Email';
$txt['admin_browse_ip'] = 'IP adresa';
$txt['admin_browse_registered'] = 'Registrován';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Vybrané';
$txt['admin_browse_no_members_approval'] = 'Žádní uživatelé nečekají na schválení.';
$txt['admin_browse_no_members_activate'] = 'Žádní uživatelé nyní nemají účty bez aktivace.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'všechny vybrané uživatele?';
$txt['admin_browse_outstanding_warn'] = 'všechny dotčené uživatele?';
$txt['admin_browse_w_approve'] = 'Schválit';
$txt['admin_browse_w_activate'] = 'Aktivovat';
$txt['admin_browse_w_delete'] = 'Smazat';
$txt['admin_browse_w_reject'] = 'Odmítnout';
$txt['admin_browse_w_remind'] = 'Připomenout';
$txt['admin_browse_w_approve_deletion'] = 'Schválit (Smazat účty)';
$txt['admin_browse_w_email'] = 'a poslat email';
$txt['admin_browse_w_approve_require_activate'] = 'Schválit a vyžadovat aktivaci';

$txt['admin_browse_filter_by'] = 'Filtrovat podle';
$txt['admin_browse_filter_show'] = 'Zobrazuji';
$txt['admin_browse_filter_type_0'] = 'Neaktivované nové účty';
$txt['admin_browse_filter_type_2'] = 'Neaktivované změny emailu';
$txt['admin_browse_filter_type_3'] = 'Neschválené nové účty';
$txt['admin_browse_filter_type_4'] = 'Neschválená smazání účtu';
$txt['admin_browse_filter_type_5'] = 'Neschválené účty nezletilých';

$txt['admin_browse_outstanding'] = '\'Visící\' uživatelé';
$txt['admin_browse_outstanding_days_1'] = 'Všichni uživatelé, kteří se zaregistrovali více než před';
$txt['admin_browse_outstanding_days_2'] = 'dny';
$txt['admin_browse_outstanding_perform'] = 'Proveď tuto činnost';
$txt['admin_browse_outstanding_go'] = 'Proveď činnost';

$txt['check_for_duplicate'] = 'Kontrolovat duplicity';
$txt['dont_check_for_duplicate'] = 'Nekontrolovat duplicity';
$txt['duplicates'] = 'Duplicity';

$txt['not_activated'] = 'Neaktivován';

?>
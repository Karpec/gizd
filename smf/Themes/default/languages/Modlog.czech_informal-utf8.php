<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Datum';
$txt['modlog_member'] = 'Uživatel';
$txt['modlog_position'] = 'Pozice';
$txt['modlog_action'] = 'Akce';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Výsledky vyhledávání';
$txt['modlog_total_entries'] = 'Celkem záznamů';
$txt['modlog_ac_approve_topic'] = 'Schválil téma &quot;{topic}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Schválil zprávu &quot;{subject}&quot; v &quot;{topic}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zamkl &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Varoval {member} za &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Odemkl &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Připíchnul &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odpíchnul &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Smazal &quot;{subject}&quot; od &quot;{member}&quot; z &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Smazal uživatele &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Smazal téma &quot;{topic}&quot; z &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Editoval &quot;{message}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Sloučil témata do &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Rozdělil &quot;{topic}&quot; do &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Přesunul &quot;{topic}&quot; z &quot;{board_from}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Editoval profil &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Smazal příspěvky starší než {days} dní';
$txt['modlog_ac_news'] = 'Editoval novinky';
$txt['modlog_enter_comment'] = 'Zadej poznámku k akci';
$txt['modlog_moderation_log'] = 'Zobrazit log moderace';
$txt['modlog_moderation_log_desc'] = 'Níže je seznam moderačních akcí provedených moderátory fóra.<br /><strong>Upozornění:</strong> Záznamy mohou být odstraněny nejdříve po 24 hodinách.';
$txt['modlog_no_entries_found'] = 'Nejsou žádné moderační záznamy.';
$txt['modlog_remove'] = 'Smazat';
$txt['modlog_removeall'] = 'Smazat vše';
$txt['modlog_go'] = 'Ok';
$txt['modlog_add'] = 'Přidat';
$txt['modlog_search'] = 'Rychlé vyhledávání';
$txt['modlog_by'] = 'od';
$txt['modlog_id'] = '<em>Smazán - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Přidal šablonu varování: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Editoval šablonu varování: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Smazal šablonu varování: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Přidány metody zákazu:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Uživatel:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email} ';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range} ';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Adresa:</em> {hostname}';

$txt['modlog_admin_log'] = 'Administrační log';
$txt['modlog_admin_log_desc'] = 'Níže je seznam administračních akcí, které byly zaznamenány na tvém fóru.<br /><strong>Upozornění:</strong> Záznamy mohou být odstraněny nejdříve po 24 hodinách.';
$txt['modlog_admin_log_no_entries_found'] = 'Nejsou žádné administrační záznamy.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Aktualizoval fórum na verzi {version}';
$txt['modlog_ac_install'] = 'Nainstaloval verzi {version}';
$txt['modlog_ac_add_board'] = 'Přidal novou diskusi: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Editoval diskusi &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'Smazal diskusi &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'Přidal novou kategorii, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Edited kategorii &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Smazal kategorii &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Smazal skupinu &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'Přidal skupinu &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'Editoval skupinu &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'Přidal &quot;{member}&quot; do skupiny &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'Odstranil &quot;{member}&quot; ze skupiny &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'Odstranil &quot;{member}&quot; ze všech skupin';

$txt['modlog_ac_remind_member'] = 'Poslal upozornění &quot;{member}&quot;, aby si aktivoval účet';
$txt['modlog_ac_approve_member'] = 'Schválil/Aktivoval účet uživatele &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Poslal oznámení';

$txt['modlog_ac_install_package'] = 'Installed new package: &quot;{package}&quot;, version {version}';
$txt['modlog_ac_upgrade_package'] = 'Upgraded package: &quot;{package}&quot; to version {version}';
$txt['modlog_ac_uninstall_package'] = 'Uninstalled package: &quot;{package}&quot;, version {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Obnovil téma &quot;{topic}&quot; z diskuse &quot;{board}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Obnovil příspěvky z &quot;{subject}&quot; do tématu &quot;{topic}&quot; v diskusi &quot;{board}&quot;.';

$txt['modlog_parameter_guest'] = '<em>Host</em>';

?>
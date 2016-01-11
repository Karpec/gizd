<?php
// Version: 2.0; ModerationCenter

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['moderation_center'] = 'Centrum moderace';
$txt['mc_main'] = 'Hlavní';
$txt['mc_posts'] = 'Příspěvky';
$txt['mc_groups'] = 'Skupiny';

$txt['mc_view_groups'] = 'Zobrazit skupiny';

$txt['mc_description'] = 'Toto je tvé &quot;Centrum moderace&quot;. Zde můžeš provádět veškeré moderační akce, které ti povolil administrátor. Tato stránka obsahuje souhrn posledního dění na tvém fóru. Můžeš si ji upravit podle sebe <a href="' . $scripturl . '?action=moderate;area=settings">zde</a>.';
$txt['mc_group_requests'] = 'Žádosti o skupiny';
$txt['mc_unapproved_posts'] = 'Neschválené příspěvky';
$txt['mc_watched_users'] = 'Nedávno sledovaní uživatelé';
$txt['mc_watched_topics'] = 'Sledovaná témata';
$txt['mc_scratch_board'] = 'Moderátorská poznámková tabule';
$txt['mc_latest_news'] = 'Simple Machines novinky';
$txt['mc_recent_reports'] = 'Nedávno nahlášená témata';
$txt['mc_warnings'] = 'Varování';
$txt['mc_notes'] = 'Poznámky moderátorů';

$txt['mc_cannot_connect_sm'] = 'Nemůžeš se spojit se simplemachines.org, abys stáhl poslední soubor s novinkami.';

$txt['mc_recent_reports_none'] = 'V současné době nejsou žádná hlášení';
$txt['mc_watched_users_none'] = 'V současné době nejsou žádná sledování.';
$txt['mc_group_requests_none'] = 'V současné době není žádná žádost o členství ve skupině.';

$txt['mc_seen'] = '%1$s naposledy spatřen %2$s ';
$txt['mc_seen_never'] = '%1$s nikdy neviděn';
$txt['mc_groupr_by'] = 'od';

$txt['mc_reported_posts_desc'] = 'Zde lze zkoumat hlášení oznámená uživateli.';
$txt['mc_reportedp_active'] = 'Aktivní hlášení';
$txt['mc_reportedp_closed'] = 'Stará hlášení';
$txt['mc_reportedp_by'] = 'od';
$txt['mc_reportedp_reported_by'] = 'Nahlásil';
$txt['mc_reportedp_last_reported'] = 'Naposledy nahlášeno';
$txt['mc_reportedp_none_found'] = 'Žádná hlášení';

$txt['mc_reportedp_details'] = 'Detaily';
$txt['mc_reportedp_close'] = 'Zavřít';
$txt['mc_reportedp_open'] = 'Otevřít';
$txt['mc_reportedp_ignore'] = 'Ignorovat';
$txt['mc_reportedp_unignore'] = 'Neignorovat';
// Do not use numeric entries in the below string.
$txt['mc_reportedp_ignore_confirm'] = 'Jsi si jistý, že chceš ignorovat další hlášení o tomto příspěvku?\\n\\nTo vypne další hlášení pro všechny moderátory na fóru.';
$txt['mc_reportedp_close_selected'] = 'Zavřít vybrané';

$txt['mc_groupr_group'] = 'Skupiny';
$txt['mc_groupr_member'] = 'Uživatel';
$txt['mc_groupr_reason'] = 'Důvod';
$txt['mc_groupr_none_found'] = 'Nejsou žádné nevyřízené žádosti o členství ve skupině.';
$txt['mc_groupr_submit'] = 'Odeslat';
$txt['mc_groupr_reason_desc'] = 'Důvod pro odmítnutí žádosti uživatele %1$s k přidání do &quot;%2$s&quot;';
$txt['mc_groups_reason_title'] = 'Důvod pro odmítnutí';
$txt['with_selected'] = 'S vybranými';
$txt['mc_groupr_approve'] = 'Schválit žádost';
$txt['mc_groupr_reject'] = 'Odmítnout žádost (bez zdůvodnění)';
$txt['mc_groupr_reject_w_reason'] = 'Odmítnou žádost se zdůvodněním';
// Do not use numeric entries in the below string.
$txt['mc_groupr_warning'] = 'Jsi si jistý, že to chceš udělat?';

$txt['mc_unapproved_attachments_none_found'] = 'Žádné přílohy nečekají na schválení';
$txt['mc_unapproved_replies_none_found'] = 'Žádné příspěvky nečekají na schválení';
$txt['mc_unapproved_topics_none_found'] = 'Žádná témata nečekají na schválení';
$txt['mc_unapproved_posts_desc'] = 'Zde můžeš schvalovat nebo mazat příspěvky, které čekají na schválení.';
$txt['mc_unapproved_replies'] = 'Příspěvky';
$txt['mc_unapproved_topics'] = 'Témata';
$txt['mc_unapproved_by'] = 'od';
$txt['mc_unapproved_sure'] = 'Jsi si jistý, že to chceš udělat?';
$txt['mc_unapproved_attach_name'] = 'Jméno přílohy';
$txt['mc_unapproved_attach_size'] = 'Délka';
$txt['mc_unapproved_attach_poster'] = 'Uživatel';
$txt['mc_viewmodreport'] = 'Moderační hlášení o %1$s od %2$s';
$txt['mc_modreport_summary'] = 'Existuje %1$d hlášení o tomto příspěvku. Poslední hlášení bylo %2$s.';
$txt['mc_modreport_whoreported_title'] = 'Uživatelé, kteří hlásili tento příspěvek';
$txt['mc_modreport_whoreported_data'] = 'Hlášeno uživatelem %1$s v %2$s.  Napsal tuto zprávu:';
$txt['mc_modreport_modactions'] = 'Akce provedené jinými moderátory';
$txt['mc_modreport_mod_comments'] = 'Komentáře moderátorů';
$txt['mc_modreport_no_mod_comment'] = 'Nejsou zatím žádné komentáře moderátorů';
$txt['mc_modreport_add_mod_comment'] = 'Přidat komentář';

$txt['show_notice'] = 'Text poznámky';
$txt['show_notice_subject'] = 'Předmět';
$txt['show_notice_text'] = 'Text';

$txt['mc_watched_users_title'] = 'Uživatelé pod dozorem';
$txt['mc_watched_users_desc'] = 'Zde můžeš dohlížet na uživatele, kterým byl nastaven moderátory &quot;dozor&quot;.';
$txt['mc_watched_users_post'] = 'Podle příspěvků';
$txt['mc_watched_users_warning'] = 'Úroveň varování';
$txt['mc_watched_users_last_login'] = 'Poslední přihlášení';
$txt['mc_watched_users_last_post'] = 'Poslední příspěvek';
$txt['mc_watched_users_no_posts'] = 'Nejsou příspěvky od hlídaných uživatelů.';
// Don't use entities in the two strings below.
$txt['mc_watched_users_delete_post'] = 'Jsi si jistý, že chceš smazat tento příspěvek?';
$txt['mc_watched_users_delete_posts'] = 'Jsi si jistý, že chceš smazat tyto příspěvky?';
$txt['mc_watched_users_posted'] = 'Poslal';
$txt['mc_watched_users_member'] = 'Uživatel';

$txt['mc_warnings_description'] = 'V této sekci můžeš sledovat varování, která obdrželi uživatelé fóra. Můžeš také přidávat a měnit šablony upozornění, které se posílají při udělení varování.';
$txt['mc_warning_log'] = 'Log';
$txt['mc_warning_templates'] = 'Vlastní šablony';
$txt['mc_warning_log_title'] = 'Zobrazit log varování';
$txt['mc_warning_templates_title'] = 'Vlastní šablony varování';

$txt['mc_warnings_none'] = 'Ještě nebyla udělena žádná varování!';
$txt['mc_warnings_recipient'] = 'Obdržel';

$txt['mc_warning_templates_none'] = 'Ještě nebyly vytvořeny žádné šablony';
$txt['mc_warning_templates_time'] = 'Čas vytvoření';
$txt['mc_warning_templates_name'] = 'Šablona';
$txt['mc_warning_templates_creator'] = 'Vytvořil';
$txt['mc_warning_template_add'] = 'Přidat šablonu';
$txt['mc_warning_template_modify'] = 'Editovat šablonu';
$txt['mc_warning_template_delete'] = 'Smazat vybrané';
$txt['mc_warning_template_delete_confirm'] = 'Jsi si jistý, že chceš smazat vybrané šablony?';

$txt['mc_warning_template_desc'] = 'Zde vyplň detaily šablony. Jméno šablony není součástí šablony. Toto upozornění se posílá jako SZ, takže můžeš používat BBC. Pokud použiješ proměnnou {MESSAGE}, pak tato šablona nebude dostupná, když budeš udělovat obecné varování (tj. varování nesvázané s příspěvkem).';
$txt['mc_warning_template_title'] = 'Jméno šablony';
$txt['mc_warning_template_body_desc'] = 'Obsah upozornění. Můžeš používat následující zkraty.<ul style="margin-top: 0px;"><li>{MEMBER} - Jméno uživatele.</li><li>{MESSAGE} - Odkaz na závadný příspěvek. (pokud možno)</li><li>{FORUMNAME} - Jméno fóra.</li><li>{SCRIPTURL} - Webová adresa fóra.</li><li>{REGARDS} - Standardní pozdrav.</li></ul>';
$txt['mc_warning_template_body_default'] = '{MEMBER},' . "\n\n" . 'Bylo ti uděleno varování za nevhodné aktivity. Prosím, zdrž se jich v budoucnosti a dodržuj pravidla fóra, nebo budeme muset přistoupit k dalším opatřením.' . "\n\n" . '{REGARDS}';
$txt['mc_warning_template_personal'] = 'Soukromá šablona';
$txt['mc_warning_template_personal_desc'] = 'Pokud zvolíš tuto volbu, pouze ty budeš moci vidět, editovat a používat tuto šablonu. Jinak ji budou moci použít všichni moderátoři.';
$txt['mc_warning_template_error_empty'] = 'Musíš vyplnit jméno i tělo šablony.';

$txt['mc_prefs'] = 'Nastavení';
$txt['mc_settings'] = 'Změnit nastavení';
$txt['mc_prefs_title'] = 'Nastavení moderace';
$txt['mc_prefs_desc'] = 'V této sekci můžeš nastavovat osobní nastavení pro moderační aktivity, jako například emailová upozornění.';
$txt['mc_prefs_homepage'] = 'Prvky zobrazené na hlavní stránce centra';
$txt['mc_prefs_latest_news'] = 'SM novinky';
$txt['mc_prefs_show_reports'] = 'Zobrazovat počet nevyřešených hlášení v hlavičce fóra';
$txt['mc_prefs_notify_report'] = 'Oznámení o nahlášení tématu';
$txt['mc_prefs_notify_report_never'] = 'Nikdy';
$txt['mc_prefs_notify_report_moderator'] = 'Pouze v diskusích, které moderuji';
$txt['mc_prefs_notify_report_always'] = 'Vždy';
$txt['mc_prefs_notify_approval'] = 'Upozornit na položky podléhající schválení';

// Use entities in the below string.
$txt['mc_click_add_note'] = 'Přidat poznámku';
$txt['mc_add_note'] = 'Přidat';

?>
<?php
// Version: 2.0.10; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'cs_CZ.utf8';
$txt['lang_dictionary'] = 'cs';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$txt['days_short'] = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
$txt['months_titles'] = array(1 => 'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
$txt['months_short'] = array(1 => 'Led', 'Úno', 'Bře', 'Dub', 'Kvě', 'Črn', 'Črv', 'Srp', 'Zář', 'Říj', 'Lis', 'Pro');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'je nová';
$txt['newmessages1'] = 'nových';
$txt['newmessages3'] = 'Nové';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Administrace';
$txt['moderate'] = 'Moderace';

$txt['save'] = 'Uložit';

$txt['modify'] = 'Změnit';
$txt['forum_index'] = '%1$s - Index ';
$txt['members'] = 'uživatelů';
$txt['board_name'] = 'Jméno diskuse';
$txt['posts'] = 'Příspěvků';

$txt['member_postcount'] = 'Příspěvků';
$txt['no_subject'] = '(Bez předmětu)';
$txt['view_profile'] = 'Zobrazit profil';
$txt['guest_title'] = 'Host';
$txt['author'] = 'Autor';
$txt['on'] = 'kdy';
$txt['remove'] = 'Odstranit';
$txt['start_new_topic'] = 'Založit nové téma';

$txt['login'] = 'Přihlásit';
// Use numeric entities in the below string.
$txt['username'] = 'Uživatel';
$txt['password'] = 'Heslo';

$txt['username_no_exist'] = 'Uživatelské jméno neexistuje.';
$txt['no_user_with_email'] = 'S tímto emailem nejsou svázána žádná uživatelská jména.';

$txt['board_moderator'] = 'Moderátor diskuse';
$txt['remove_topic'] = 'Smazat téma';
$txt['topics'] = 'témat';
$txt['modify_msg'] = 'Změnit zprávu';
$txt['name'] = 'Jméno';
$txt['email'] = 'Email';
$txt['subject'] = 'Předmět';
$txt['message'] = 'Zpráva';
$txt['redirects'] = 'Přesměrování';
$txt['quick_modify'] = 'Upravit zde';

$txt['choose_pass'] = 'Zvol heslo';
$txt['verify_pass'] = 'Ověř heslo';
$txt['position'] = 'Pozice';

$txt['profile_of'] = 'Zobraz profil uživatele';
$txt['total'] = 'Počet';
$txt['posts_made'] = 'příspěvků';
$txt['website'] = 'Web';
$txt['register'] = 'Registrovat';
$txt['warning_status'] = 'Úroveň varování';
$txt['user_warn_watch'] = 'Uživatel je na seznamu dozoru';
$txt['user_warn_moderate'] = 'Uživatelovy příspěvky se řadí do fronty ke schválení';
$txt['user_warn_mute'] = 'Uživatel má zakázáno přispívat';
$txt['warn_watch'] = 'Sledová';
$txt['warn_moderate'] = 'Moderován';
$txt['warn_mute'] = 'Umlčen';

$txt['message_index'] = 'Index zpráv';
$txt['news'] = 'Novinky';
$txt['home'] = 'Domů';

$txt['lock_unlock'] = 'Zamknout/odemknout téma';
$txt['post'] = 'Poslat';
$txt['error_occured'] = 'Nastala chyba!';
$txt['at'] = 'v';
$txt['logout'] = 'Odhlásit';
$txt['started_by'] = 'Založil';
$txt['replies'] = 'Odpovědí';
$txt['last_post'] = 'Poslední příspěvek';
$txt['admin_login'] = 'Přihlášení administrátora';
// Use numeric entities in the below string.
$txt['topic'] = 'Téma';
$txt['help'] = 'Nápověda';
$txt['notify'] = 'Upozornit';
$txt['unnotify'] = 'Neupozorňovat';
$txt['notify_request'] = 'Chceš dostat upozornění, když někdo odpoví na toto téma?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'S pozdravem,' . "\n" . 'tým ' . $context['forum_name'] . '.';
$txt['notify_replies'] = 'Upozornění na odpovědi';
$txt['move_topic'] = 'Přemístit téma';
$txt['move_to'] = 'Přemístit kam';
$txt['pages'] = 'Stran';
$txt['users_active'] = 'Aktivní uživatelé v posledních %1$d minutách';
$txt['personal_messages'] = 'Soukromé zprávy';
$txt['reply_quote'] = 'Odpověď s citací';
$txt['reply'] = 'Odpověď';
$txt['reply_noun'] = 'Odpověď';
$txt['approve'] = 'Schválit';
$txt['approve_all'] = 'schválit vše';
$txt['awaiting_approval'] = 'Čeká na schválení';
$txt['attach_awaiting_approve'] = 'Přílohy čekající na schválení';
$txt['post_awaiting_approval'] = 'Upozornění: Tento příspěvek čeká na schválení moderátorem.';
$txt['there_are_unapproved_topics'] = 'V této diskusi je %1$s témat a %2$s příspěvků, které čekají na schválení. Klikni <a href="%3$s">sem</a>, abys je všechny viděl.';

$txt['msg_alert_none'] = 'Žádné zprávy...';
$txt['msg_alert_you_have'] = 'máš';
$txt['msg_alert_messages'] = 'zpráv';
$txt['remove_message'] = 'Smazat tuto zprávu';

$txt['online_users'] = 'Uživatelů online';
$txt['personal_message'] = 'Soukromá zpráva';
$txt['jump_to'] = 'Skočit na';
$txt['go'] = 'Hop!';
$txt['are_sure_remove_topic'] = 'Jsi si jistý, že chceš smazat toto téma?';
$txt['yes'] = 'Ano';
$txt['no'] = 'Ne';

$txt['search_end_results'] = 'Konec výsledků';
$txt['search_on'] = 'kdy';

$txt['search'] = 'Vyhledávání';
$txt['all'] = 'Vše';

$txt['back'] = 'Zpět';
$txt['password_reminder'] = 'Připomenutí hesla';
$txt['topic_started'] = 'Téma založeno';
$txt['title'] = 'Název';
$txt['post_by'] = 'Přispěvatel';
$txt['memberlist_searchable'] = 'Seznam registrovaných uživatelů.';
$txt['welcome_member'] = 'Vítej';
$txt['admin_center'] = 'Administrační centrum';
$txt['last_edit'] = 'Poslední změna';
$txt['notify_deactivate'] = 'Chtěl bys zrušit upozornění pro toto téma?';

$txt['recent_posts'] = 'Poslední příspěvky';

$txt['location'] = 'Místo';
$txt['gender'] = 'Pohlaví';
$txt['date_registered'] = 'Datum registrace';

$txt['recent_view'] = 'Zobrazit nejnovější příspěvky na fóru.';
$txt['recent_updated'] = 'je naposledy změněné téma';

$txt['male'] = 'Mužské';
$txt['female'] = 'Ženské';

$txt['error_invalid_characters_username'] = 'V uživatelském jménu byl použit neplatný znak.';

$txt['welcome_guest'] = 'Vítej, <strong>%1$s</strong>. Prosím <a href="' . $scripturl . '?action=login">přihlaš se</a> nebo <a href="' . $scripturl . '?action=register">se zaregistruj</a>.';
$txt['login_or_register'] = 'Prosím <a href="' . $scripturl . '?action=login">přihlaš se</a> nebo <a href="' . $scripturl . '?action=register">zaregistruj</a>.';
$txt['welcome_guest_activate'] = '<br />Nedostal jsi svůj <a href="' . $scripturl . '?action=activate">aktivační email?</a>';
$txt['hello_member'] = 'Čau';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Vítej,';
$txt['welmsg_hey'] = 'Čau,';
$txt['welmsg_welcome'] = 'Vítej,';
$txt['welmsg_please'] = 'Prosím';
$txt['select_destination'] = 'Prosím vyber cíl';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Poslal';

$txt['icon_smiley'] = 'Úsměv';
$txt['icon_angry'] = 'Hněv';
$txt['icon_cheesy'] = 'Smích';
$txt['icon_laugh'] = 'Řehot';
$txt['icon_sad'] = 'Smutek';
$txt['icon_wink'] = 'Mrknutí';
$txt['icon_grin'] = 'Škleb';
$txt['icon_shocked'] = 'Šok';
$txt['icon_cool'] = 'Super!';
$txt['icon_huh'] = 'Co???';
$txt['icon_rolleyes'] = 'Kroutím očima';
$txt['icon_tongue'] = 'Vyplazuji jazyk';
$txt['icon_embarrassed'] = 'Jsem v rozpacích';
$txt['icon_lips'] = 'Neřeknu';
$txt['icon_undecided'] = 'Nevím co si myslet/Nerozhodný';
$txt['icon_kiss'] = 'Polibek';
$txt['icon_cry'] = 'Pláč';

$txt['moderator'] = 'Moderátor';
$txt['moderators'] = 'Moderátoři';

$txt['mark_board_read'] = 'Označit v této diskusi všechna témata jako přečtená';
$txt['views'] = 'Shlédnutí';
$txt['new'] = 'Nové';

$txt['view_all_members'] = 'Zobrazit všechny uživatele';
$txt['view'] = 'Zobrazit';

$txt['viewing_members'] = 'Zobrazeni uživatelé %1$s do %2$s';
$txt['of_total_members'] = 'z celkových %1$s uživatelů';

$txt['forgot_your_password'] = 'Zapomněl jsi heslo?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Od';
$txt['check_new_messages'] = 'Zkontrolovat nové zprávy';
$txt['to'] = 'Komu';

$txt['board_topics'] = 'témat';
$txt['members_title'] = 'Uživatelé';
$txt['members_list'] = 'Seznam uživatelů';
$txt['new_posts'] = 'Nové příspěvky';
$txt['old_posts'] = 'Žádné nové příspěvky';
$txt['redirect_board'] = 'Přesměrovací diskuse';

$txt['sendtopic_send'] = 'Poslat';
$txt['report_sent'] = 'Tvé oznámení bylo úspěšně odesláno.';

$txt['time_offset'] = 'Časový posun';
$txt['or'] = 'nebo';

$txt['no_matches'] = 'Je mi líto, ale nic nebylo nalezeno';

$txt['notification'] = 'Upozornění';

$txt['your_ban'] = 'Lituji %1$s, na tomto fóru máš zákaz!';
$txt['your_ban_expires'] = 'Tento zákaz vyprší %1$s.';
$txt['your_ban_expires_never'] = 'Tento zákaz je trvalý.';
$txt['ban_continue_browse'] = 'Můžeš si prohlížet fórum jako host.';

$txt['mark_as_read'] = 'Označit všechny zprávy jako přečtené';

$txt['hot_topics'] = 'Žhavé téma (Více než %1$d příspěvků)';
$txt['very_hot_topics'] = 'Velmi žhavé téma (Více než %1$d příspěvků)';
$txt['locked_topic'] = 'Zamčené téma';
$txt['normal_topic'] = 'Normální téma';
$txt['participation_caption'] = 'Téma s tvým příspěvkem';

$txt['go_caps'] = 'Ok';

$txt['print'] = 'Tisk';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Shrnutí tématu';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = 'Zpráva';
$txt['name_in_use'] = 'Toto jméno již používá jiný uživatel.';

$txt['total_members'] = 'celkem';
$txt['total_posts'] = 'Celkem příspěvků';
$txt['total_topics'] = 'Celkem témat';

$txt['mins_logged_in'] = 'Doba přihlášení';

$txt['preview'] = 'Prohlédnout';
$txt['always_logged_in'] = 'Zůstat stále přihlášen';

$txt['logged'] = 'Zaznamenáno';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'od';

$txt['hours'] = 'hodin';
$txt['days_word'] = 'dní';

$txt['newest_member'] = ', náš nejnovější uživatel.';

$txt['search_for'] = 'Hledat podle';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Haló.+Je+tu+někdo?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Toto fórum je v \'Módu údržby\'.';

$txt['read'] = 'Přečteno';
$txt['times'] = 'krát';

$txt['forum_stats'] = 'Statistiky fóra';
$txt['latest_member'] = 'Nejnovější uživatel';
$txt['total_cats'] = 'Celkem kategorií';
$txt['latest_post'] = 'Poslední příspěvek';

$txt['you_have'] = 'Máš';
$txt['click'] = 'Klikni';
$txt['here'] = 'sem';
$txt['to_view'] = 'abys je viděl.';

$txt['total_boards'] = 'Celkem diskusí';

$txt['print_page'] = 'Tisknout stránku';

$txt['valid_email'] = 'Musí obsahovat platnou emailovou adresu.';

$txt['geek'] = 'Jsem geek!!';
$txt['info_center_title'] = '%1$s - Info centrum';

$txt['send_topic'] = 'Poslat téma';

$txt['sendtopic_title'] = 'Poslat téma &quot;%s&quot; příteli.';
$txt['sendtopic_sender_name'] = 'Tvé jméno';
$txt['sendtopic_sender_email'] = 'Tvá adresa';
$txt['sendtopic_receiver_name'] = 'Jméno příjemce';
$txt['sendtopic_receiver_email'] = 'Adresa příjemce';
$txt['sendtopic_comment'] = 'Přidej komentář';

$txt['allow_user_email'] = 'Dovolit uživatelům, ať mi emailují';

$txt['check_all'] = 'Vše';

// Use numeric entities in the below string.
$txt['database_error'] = 'Chyba databáze';
$txt['try_again'] = 'Prosím, zkus to znovu. Pokud opět uvidíš tuto chybu, nahlas ji moderátorovi.';
$txt['file'] = 'Soubor';
$txt['line'] = 'Řádek';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF odhalilo a automaticky se pokusilo opravit chybu v databázi. Pokud budou problémy pokračovat, nebo budeš dostávat tyto emaily, kontaktuj svého provozovatele.';
$txt['database_error_versions'] = '<strong>Note:</strong> It appears that your database <em>may</em> require an upgrade. Your forum\'s files are currently at version %1$s, while your database is at version %2$s. The above error might possibly go away if you execute the latest version of upgrade.php. ';
$txt['template_parse_error'] = 'Chyba procházení šablony!';
$txt['template_parse_error_message'] = 'Vypadá to, že se něco pokazilo v systému šablon. Tento problém by měl být pouze dočasný, takže se zkus vrátit později a zkus to znovu. Pokud nadále uvidíš toto hlášení, kontaktuj prosím administrátora.<br /><br />Můžeš taky zkusit <a href="javascript:location.reload();">obnovit tuto stránku</a>.';
$txt['template_parse_error_details'] = 'Je problém s přečtením souboru <tt><b>%1$s</b></tt>. Prosím, zkontroluj jeho syntaxi a zkus to znovu - pamatuj na to, že jednoduché uvozovky (<tt>\'</tt>) musí být často se zpětným lomítkem (<tt>\\</tt>). Abys viděl přesnější chybové hlášení PHP, pokus se <a href="' . $boardurl . '%1$s">přistoupit na soubor přímo</a>.<br /><br />Můžeš taky zkusit <a href="javascript:location.reload();">obnovit tuto stránku</a> nebo <a href="' . $scripturl . '?theme=1">použít výchozí téma</a>.';

$txt['today'] = '<strong>Dnes</strong> v ';
$txt['yesterday'] = '<strong>Včera</strong> v ';
$txt['new_poll'] = 'Nová anketa';
$txt['poll_question'] = 'Otázka';
$txt['poll_vote'] = 'Hlasuj';
$txt['poll_total_voters'] = 'Celkem hlasovalo';
$txt['shortcuts'] = 'zkratky: stiskni alt+s k odeslání nebo alt+p k prohlédnutí';
$txt['shortcuts_firefox'] = 'zkratky: stiskni shift+alt+s k odeslání nebo shift+alt+p k prohlédnutí';
$txt['poll_results'] = 'Zobrazit výsledky.';
$txt['poll_lock'] = 'Pozastavit hlasování';
$txt['poll_unlock'] = 'Obnovit hlasování';
$txt['poll_edit'] = 'Změnit anketu';
$txt['poll'] = 'Anketa';
$txt['one_day'] = '1 den';
$txt['one_week'] = '1 týden';
$txt['one_month'] = '1 měsíc';
$txt['forever'] = 'napořád';
$txt['quick_login_dec'] = 'Přihlaš se uživatelským jménem, heslem a délkou sezení';
$txt['one_hour'] = '1 hodina';
$txt['moved'] = 'Přemístění';
$txt['moved_why'] = 'Prosím, zadej krátký popis,<br />proč bylo téma přemístěno.';
$txt['board'] = 'Diskuse';
$txt['in'] = 'v';
$txt['sticky_topic'] = 'Připíchnuté téma';

$txt['delete'] = 'Smazat';

$txt['your_pms'] = 'Tvé soukromé zprávy';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Více statistik]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Kód';
$txt['code_select'] = '[Vybrat]';
$txt['quote_from'] = 'Citace';
$txt['quote'] = 'Citovat';

$txt['merge_to_topic_id'] = 'ID cílového tématu';
$txt['split'] = 'Rozdělit téma';
$txt['merge'] = 'Slučovat témata';
$txt['subject_new_topic'] = 'Předmět pro nové téma';
$txt['split_this_post'] = 'Oddělit pouze tento příspěvek.';
$txt['split_after_and_this_post'] = 'Oddělit tento příspěvek a všechny za ním.';
$txt['select_split_posts'] = 'Vyber příspěvky k rozdělení.';
$txt['new_topic'] = 'Nové téma';
$txt['split_successful'] = 'Téma bylo úspěšně rozděleno.';
$txt['origin_topic'] = 'Původní téma';
$txt['please_select_split'] = 'Prosím, vyber příspěvky k rozdělení.';
$txt['merge_successful'] = 'Témata úspěšně sloučena.';
$txt['new_merged_topic'] = 'Nové sloučené téma';
$txt['topic_to_merge'] = 'Témata k sloučení';
$txt['target_board'] = 'Cílová diskuse';
$txt['target_topic'] = 'Cílové téma';
$txt['merge_confirm'] = 'Jsi si jistý, že chceš sloučit';
$txt['with'] = 's';
$txt['merge_desc'] = 'Tato funkce sloučí příspěvky dvou témat do jednoho. Příspěvky budou setříděny podle data poslání.';

$txt['set_sticky'] = 'Připíchnout téma';
$txt['set_nonsticky'] = 'Odpíchnout téma';
$txt['set_lock'] = 'Zamknout téma';
$txt['set_unlock'] = 'Odemknout téma';

$txt['search_advanced'] = 'Pokročilé vyhledávání';

$txt['security_risk'] = 'ZÁVAŽNÁ BEZPEČNOSTNÍ CHYBA:';
$txt['not_removed'] = 'Neodstranil jsi ';
$txt['not_removed_extra'] = '%1$s je záložní kopie %2$s, která nebyla vygenerovaná SMF. Může být přímo přístupná a zneužita k neoprávněnému přístupu na tvé fórum. Měl bys ji okamžitě smazat.';

$txt['cache_writable_head'] = 'Výkonové varování';
$txt['cache_writable'] = 'Adresář cache nemá práva k zápisu - to negativně ovlivní výkon fóra.';

$txt['page_created'] = 'Stránka vytvořena za ';
$txt['seconds_with'] = ' sekund, ';
$txt['queries'] = ' dotazů.';

$txt['report_to_mod_func'] = 'Použij tuto funkci, abys informoval moderátory a administrátory o urážlivé nebo nesprávně odeslané zprávě.<br /><em>Uvědom si, že tvá emailová adresa bude sdělena moderátorům, pokud použiješ tuto funkci.</em> ';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Soukromá zpráva (Online)';
$txt['pm_offline'] = 'Soukromá zpráva (Offline)';
$txt['status'] = 'Stav';

$txt['go_up'] = 'Nahoru';
$txt['go_down'] = 'Dolů';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2014</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Narozeniny:';
$txt['events'] = 'Události:';
$txt['birthdays_upcoming'] = 'Blížící se narozeniny:';
$txt['events_upcoming'] = 'Blížící se události:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Měsíc:';
$txt['calendar_year'] = 'Rok:';
$txt['calendar_day'] = 'Den:';
$txt['calendar_event_title'] = 'Jméno události';
$txt['calendar_event_options'] = 'Volby události';
$txt['calendar_post_in'] = 'Přispět do:';
$txt['calendar_edit'] = 'Editovat událost';
$txt['event_delete_confirm'] = 'Smazat tuto událost?';
$txt['event_delete'] = 'Smazat událost';
$txt['calendar_post_event'] = 'Poslat událost';
$txt['calendar'] = 'Kalendář';
$txt['calendar_link'] = 'Spojit s kalendářem';
$txt['calendar_upcoming'] = 'Kalendář';
$txt['calendar_today'] = 'Kalendář pro dnešek';
$txt['calendar_week'] = 'Týden';
$txt['calendar_week_title'] = 'Týden %1$d z %2$d';
$txt['calendar_numb_days'] = 'Počet dní:';
$txt['calendar_how_edit'] = 'jak upravit tyto události?';
$txt['calendar_link_event'] = 'Spojit událost s příspěvkem:';
$txt['calendar_confirm_delete'] = 'Jsi si jistý, že chceš smazat tuto událost?';
$txt['calendar_linked_events'] = 'Spojené události';
$txt['calendar_click_all'] = 'klikni k zobrazení všech %1$s';

$txt['moveTopic1'] = 'Poslat i přesměrovávací příspěvek';
$txt['moveTopic2'] = 'Změnit předmět tématu';
$txt['moveTopic3'] = 'Nový předmět';
$txt['moveTopic4'] = 'Změnit předmět všech příspěvků';
$txt['move_topic_unapproved_js'] = 'Upozornění! Toto téma ještě nebylo schváleno.\\n\\nNedoporučuje se vytvořit přesměrovávací příspěvek, pokud nehodláš okamžitě příspěvek po přemístění schválit. ';

$txt['theme_template_error'] = 'Nemohu načíst šablonu \'%s\'.';
$txt['theme_language_error'] = 'Nemohu načíst jazykový soubor \'%s\'.';

$txt['parent_boards'] = 'Podřízené diskuse';

$txt['smtp_no_connect'] = 'Nemůžu se spojit se serverem SMTP';
$txt['smtp_port_ssl'] = 'Nastavení SMTP portu je nesprávné, pro SSL servery by to mělo být 465.';
$txt['smtp_bad_response'] = 'Nemohu zjistit kódy odpovědí mailového serveru';
$txt['smtp_error'] = 'Při posílání mailu nastaly problémy. Chyba: ';
$txt['mail_send_unable'] = 'Nebylo možno zaslat mail na adresu \'%s\'';

$txt['mlist_search'] = 'Hledat uživatele';
$txt['mlist_search_again'] = 'Hledat znovu';
$txt['mlist_search_email'] = 'Hledat email';
$txt['mlist_search_messenger'] = 'Hledat přezdívku messengeru';
$txt['mlist_search_group'] = 'Hledat podle pozice';
$txt['mlist_search_name'] = 'Hledat podle jména';
$txt['mlist_search_website'] = 'Hledat podle webu';
$txt['mlist_search_results'] = 'Prohledávat výsledky na';
$txt['mlist_search_by'] = 'Hledat podle %1$s';
$txt['mlist_menu_view'] = 'Prohlížet seznam uživatelů';

$txt['attach_downloaded'] = 'staženo';
$txt['attach_viewed'] = 'prohlédnuto';
$txt['attach_times'] = 'krát';

$txt['settings'] = 'Nastavení';
$txt['never'] = 'Nikdy';
$txt['more'] = 'více';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Promiň, %s, ale máš zákaz přispívat nebo posílat soukromé zprávy na tomto fóru.';
$txt['ban_reason'] = 'Důvod';

$txt['tables_optimized'] = 'Tabulky databáze zoptimalizovány';

$txt['add_poll'] = 'Přidat anketu';
$txt['poll_options6'] = 'Můžeš vybrat pouze %s voleb.';
$txt['poll_remove'] = 'Smazat anketu';
$txt['poll_remove_warn'] = 'Jsi si jistý, že chceš odstranit tuto anketu z tématu?';
$txt['poll_results_expire'] = 'Výsledky budou zobrazeny, až hlasování skončí';
$txt['poll_expires_on'] = 'Hlasování skončí';
$txt['poll_expired_on'] = 'Hlasování ukončeno';
$txt['poll_change_vote'] = 'Odebrat hlas';
$txt['poll_return_vote'] = 'Nastavení hlasování';
$txt['poll_cannot_see'] = 'V současné chvíli nemůžeš vidět výsledky ankety.';

$txt['quick_mod_approve'] = 'Schválit vybrané';
$txt['quick_mod_remove'] = 'Smazat vybrané';
$txt['quick_mod_lock'] = 'Zamknout/odemknout vybrané';
$txt['quick_mod_sticky'] = 'Připíchnout/odpíchnout vybrané';
$txt['quick_mod_move'] = 'Přemístit vybrané do';
$txt['quick_mod_merge'] = 'Sloučit vybrané';
$txt['quick_mod_markread'] = 'Označit vybrané jako přečtené';
$txt['quick_mod_go'] = 'Do toho!';
$txt['quickmod_confirm'] = 'Jsi si jistý, že to chceš opravdu udělat?';

$txt['spell_check'] = 'Zkontrolovat pravopis';

$txt['quick_reply'] = 'Rychlá odpověď';
$txt['quick_reply_desc'] = 'S <em>rychlou odpovědí</em> můžeš napsat příspěvek, aniž by se musela natahovat nová stránka. Lze používat BBC i emotikony, jako v normálním příspěvku. ';
$txt['quick_reply_warning'] = 'Varování: toto téma je zamčené!<br />Pouze administrátoři a moderátoři můžou odpovídat.';
$txt['quick_reply_verification'] = 'Po odeslání příspěvku budeš přesměrován na běžnou stránku s příspěvkem, kde budeš moci provést ověření příspěvku %1$s. ';
$txt['quick_reply_verification_guests'] = '(vyžadováno pro hosty) ';
$txt['quick_reply_verification_posts'] = '(vyžadováno pro všechny uživatele s méně než %1$d příspěvky) ';
$txt['wait_for_approval'] = 'Upozornění: tato zpráva se nezobrazí, dokud ji neschválí moderátor.';

$txt['notification_enable_board'] = 'Jsi si jistý, že chceš zapnout upozornění na nová témata v této diskusi?';
$txt['notification_disable_board'] = 'Jsi si jistý, že chceš vypnout upozornění na nová témata v této diskusi?';
$txt['notification_enable_topic'] = 'Jsi si jistý, že chceš zapnout upozornění na nové příspěvky v tomto tématu?';
$txt['notification_disable_topic'] = 'Jsi si jistý, že chceš vypnout upozornění na nové příspěvky v tomto tématu?';

$txt['report_to_mod'] = 'Nahlásit moderátorovi';
$txt['issue_warning_post'] = 'Udělit varování kvůli tomuto příspěvku';

$txt['unread_topics_visit'] = 'Nejnovější nepřečtená témata';
$txt['unread_topics_visit_none'] = 'Od tvé poslední návštěvy nejsou žádná nová nepřečtená témata.<br><a href="' . $scripturl . '?action=unread;all">Klikni sem, abys viděl všechna nepřečtená témata</a>.';
$txt['unread_topics_all'] = 'Všechna nepřečtená témata';
$txt['unread_replies'] = 'Aktualizovaná témata';

$txt['who_title'] = 'Kdo je online';
$txt['who_and'] = ' a ';
$txt['who_viewing_topic'] = ' prohlíží toto téma.';
$txt['who_viewing_board'] = ' prohlíží tuto diskusi.';
$txt['who_member'] = 'Uživatel';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Poháněno PHP';
$txt['powered_by_mysql'] = 'Poháněno MySQL';
$txt['valid_css'] = 'Validní CSS!';

// Current footer strings
$txt['valid_html'] = 'Validní HTML 4.01!';
$txt['valid_xhtml'] = 'Validní XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Host';
$txt['guests'] = 'Hostů';
$txt['user'] = 'Uživatel';
$txt['users'] = 'Uživatelů';
$txt['hidden'] = 'Skrytých';
$txt['buddy'] = 'Kámoš';
$txt['buddies'] = 'Kámošů';
$txt['most_online_ever'] = 'Nejvíc online';
$txt['most_online_today'] = 'Nejvíc online (dnes)';

$txt['merge_select_target_board'] = 'Vybrat cílovou diskusi pro sloučené téma';
$txt['merge_select_poll'] = 'Vybrat, kterou anketu bude mít sloučené téma';
$txt['merge_topic_list'] = 'Vybrat témata k sloučení';
$txt['merge_select_subject'] = 'Vybrat předmět sloučeného tématu';
$txt['merge_custom_subject'] = 'Jiný předmět';
$txt['merge_enforce_subject'] = 'Změnit předmět všech zpráv';
$txt['merge_include_notifications'] = 'Včetně upozornění?';
$txt['merge_check'] = 'Sloučit?';
$txt['merge_no_poll'] = 'Žádná anketa';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Aktuální ikona';
$txt['message_icon'] = 'Ikona zprávy';

$txt['smileys_current'] = 'Aktuální sada emotikonů';
$txt['smileys_none'] = 'Žádné emotikony';
$txt['smileys_forum_board_default'] = 'Výchozí nastavení fóra';

$txt['search_results'] = 'Výsledky vyhledávání';
$txt['search_no_results'] = 'Žádné výsledky nenalezeny';

$txt['totalTimeLogged1'] = 'Celková doba přihlášení: ';
$txt['totalTimeLogged2'] = ' dnů, ';
$txt['totalTimeLogged3'] = ' hodin a ';
$txt['totalTimeLogged4'] = ' minut.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Je';
$txt['approve_thereare'] = 'Jsou';
$txt['approve_member'] = 'jeden uživatel';
$txt['approve_members'] = 'uživatelé';
$txt['approve_members_waiting'] = 'očekávající schválení.';

$txt['notifyboard_turnon'] = 'Chceš upozornění, když někdo pošle nové téma do této diskuse?';
$txt['notifyboard_turnoff'] = 'Jsi si jistý, že již nechceš dostávat upozornění pro tuto diskusi?';

$txt['activate_code'] = 'Tvůj aktivační kód je';

$txt['find_members'] = 'Hledat uživatele';
$txt['find_username'] = 'Jméno, uživatelské jméno nebo emailová adresa';
$txt['find_buddies'] = 'Ukázat jen kámoše?';
$txt['find_wildcards'] = 'Povolené žolíky: *, ?';
$txt['find_no_results'] = 'Žádné výsledky';
$txt['find_results'] = 'Výsledky';
$txt['find_close'] = 'Zavři';

$txt['unread_since_visit'] = 'Zobrazit nepřečtené příspěvky od poslední návštěvy.';
$txt['show_unread_replies'] = 'Zobrazit nové odpovědi na tvé příspěvky.';

$txt['change_color'] = 'Změnit barvu';

$txt['quickmod_delete_selected'] = 'Smazat vybrané';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Dostal jsi jednu nebo více soukromých zpráv.\\nChceš si je nyní prohlédnout (v novém okně)?';

$txt['previous_next_back'] = '&laquo; předchozí';
$txt['previous_next_forward'] = 'další &raquo;';

$txt['movetopic_auto_board'] = '[Diskuse]';
$txt['movetopic_auto_topic'] = '[Odkaz na téma]';
$txt['movetopic_default'] = 'Toto téma bylo přemístěno do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Sbal nebo rozbal hlavičku.';

$txt['mark_unread'] = 'Vše nepřečteno';

$txt['ssi_not_direct'] = 'Prosím nepřistupuj k SSI.php přímo pomocí URL adresy; Můžeš buď použít cestu (%s) nebo přidat ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nebylo schopno natáhnout sezení! To může znamena problém s odhlášením a dalšími funkcemi - ujisti se, že SSI.php je vloženo před čímkoli jiným ve tvých skriptech!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Prohlédnout příspěvek';
$txt['preview_fetch'] = 'Zobrazuji náhlad...';
$txt['preview_new'] = 'Nový příspěvek';
$txt['error_while_submitting'] = 'Následující chyba nastala při posílání této zprávy:';
$txt['error_old_topic'] = 'Pozor: do tohoté tématu nikdo nepřispěl aspoň %1$d dní.<br />Pokud si nejsi úplně jistý, že chceš odpovědět, zvaž založení nového tématu. ';

$txt['split_selected_posts'] = 'Vybrané příspěvky';
$txt['split_selected_posts_desc'] = 'Příspěvky níže utvoří nové téma po rozdělení.';
$txt['split_reset_selection'] = 'vymazat výběr';

$txt['modify_cancel'] = 'Storno';
$txt['mark_read_short'] = 'Označit jako přečtené';

$txt['pm_short'] = 'Moje zprávy';
$txt['pm_menu_read'] = 'Číst své zprávy';
$txt['pm_menu_send'] = 'Poslat zprávu';

$txt['hello_member_ndt'] = 'Nazdar';

$txt['unapproved_posts'] = 'Neschválené příspěvky (Témat: %1$d, Příspěvků: %2$d)';

$txt['ajax_in_progress'] = 'Nahrávám...';

$txt['mod_reports_waiting'] = 'Je otevřeno %1$d hlášení pro moderátory.';

$txt['view_unread_category'] = 'Nepřečtené příspěvky';
$txt['verification'] = 'Ověření';
$txt['visual_verification_description'] = 'Napiš písmena podle obrázku';
$txt['visual_verification_sound'] = 'Přehrát písmena';
$txt['visual_verification_request_new'] = 'Vyžádat nový obrázek';

// Sub menu labels
$txt['summary'] = 'Shrnutí';
$txt['account'] = 'Nastavení účtu';
$txt['forumprofile'] = 'Osobní profil';

$txt['modSettings_title'] = 'Nastavení a volby';
$txt['package'] = 'Balíčky';
$txt['errlog'] = 'Log chyb';
$txt['edit_permissions'] = 'Oprávnění';
$txt['mc_unapproved_attachments'] = 'Neschválené přílohy';
$txt['mc_unapproved_poststopics'] = 'Neschválené příspěvky a témata';
$txt['mc_reported_posts'] = 'Nahlášené příspěvky';
$txt['modlog_view'] = 'Log moderace';
$txt['calendar_menu'] = 'Zobrazit kalendář';

//!!! Send email strings - should move?
$txt['send_email'] = 'Poslat email';
$txt['send_email_disclosed'] = 'Toto uvidí adresát.';
$txt['send_email_subject'] = 'Předmět emailu';

$txt['ignoring_user'] = 'Ignoruješ tohoto uživatele.';
$txt['show_ignore_user_post'] = 'Zobrazit příspěvek.';

$txt['spider'] = 'Robot';
$txt['spiders'] = 'Robotů';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Stažení';
$txt['filesize'] = 'Velikost';
$txt['subscribe_webslice'] = 'Přihlásit k Webslice';

// Restore topic
$txt['restore_topic'] = 'Obnovit téma';
$txt['restore_message'] = 'Obnovit';
$txt['quick_mod_restore'] = 'Obnovit vybrané';

// Editor prompt.
$txt['prompt_text_email'] = 'Prosím vlož emailovou adresu.';
$txt['prompt_text_ftp'] = 'Prosím zadej ftp adresu.';
$txt['prompt_text_url'] = 'Prosím zadej URL na které chceš odkazovat.';
$txt['prompt_text_img'] = 'Vlož umístění obrázku';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Smazat položku';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Šablony:';
$txt['debug_subtemplates'] = 'Podšablony:';
$txt['debug_language_files'] = 'Jazykové soubory:';
$txt['debug_stylesheets'] = 'Style sheety:';
$txt['debug_files_included'] = 'Souborů vloženo:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'zobrazit';
$txt['debug_cache_hits'] = 'Vybavení z cache:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytů';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss na %2$s bytů';
$txt['debug_queries_used'] = 'Použito dotazů: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Použito dotazů: %1$d, %2$d varování. ';
$txt['debug_query_in_line'] = 'v <em>%1$s</em>, řádek <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'což trvalo %1$s sekund. ';
$txt['debug_query_which_took_at'] = 'což trvalo %1$s sekund v %2$s v rámci požadavku. ';
$txt['debug_show_queries'] = '[Zobrazit dotazy]';
$txt['debug_hide_queries'] = '[Skrýt dotazy]';

?>
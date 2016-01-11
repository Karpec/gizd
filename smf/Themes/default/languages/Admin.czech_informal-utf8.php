<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Diskuse';
$txt['admin_users'] = 'Uživatelé';
$txt['admin_newsletters'] = 'Bulletiny';
$txt['admin_edit_news'] = 'Novinky';
$txt['admin_groups'] = 'Skupiny';
$txt['admin_members'] = 'Spravovat uživatele';
$txt['admin_members_list'] = 'Následuje seznam všech členů zaregistrovaných na tomto fóru.';
$txt['admin_next'] = 'Dále';
$txt['admin_censored_words'] = 'Cenzurovaná slova';
$txt['admin_censored_where'] = 'Napiš cenzurované slovo vlevo, vpravo pak, na co se má změnit.';
$txt['admin_censored_desc'] = 'Mohou existovat jistá slova, které bys jako administrátor nerad viděl, aby se objevovala v příspěvcích. Níže můžeš vypsat slova, která chceš cenzurovat.<br />Vyprázdni pole, aby se slovo odstranilo.';
$txt['admin_reserved_names'] = 'Vyhrazená jména';
$txt['admin_template_edit'] = 'Editovat šablonu fóra';
$txt['admin_modifications'] = 'Nastavení modifikací';
$txt['admin_security_moderation'] = 'Bezpečnost a moderace';
$txt['admin_server_settings'] = 'Nastavení serveru';
$txt['admin_reserved_set'] = 'Nastavit vyhrazená jména';
$txt['admin_reserved_line'] = 'Jedno vyhrazené slovo na řádek.';
$txt['admin_basic_settings'] = 'Zde můžeš změnit základní nastavení fóra. Změny prováděj velice opatrně, protože mohou snadno vyřadit fórum z provozu.';
$txt['admin_maintain'] = 'Zapnout mód údržby';
$txt['admin_title'] = 'Jméno fóra';
$txt['admin_url'] = 'URL fóra';
$txt['cookie_name'] = 'Jméno cookie';
$txt['admin_webmaster_email'] = 'Emailová adresa správce';
$txt['boarddir'] = 'SMF adresář';
$txt['sourcesdir'] = 'Adresář Sources';
$txt['cachedir'] = 'Adresář Cache';
$txt['admin_news'] = 'Povolit novinky';
$txt['admin_guest_post'] = 'Povolit příspěvky hostů?';
$txt['admin_manage_members'] = 'Uživatelé';
$txt['admin_main'] = 'Hlavní';
$txt['admin_config'] = 'Konfigurace';
$txt['admin_version_check'] = 'Detailní ověření verze';
$txt['admin_smffile'] = 'Soubor SMF';
$txt['admin_smfpackage'] = 'Balíček SMF';
$txt['admin_maintenance'] = 'Údržba';
$txt['admin_image_text'] = 'Zobrazovat tlačítka jako obrázky, nikoli text';
$txt['admin_credits'] = 'Poděkování';
$txt['admin_agreement'] = 'Zobrazit a vyžadovat souhlas s podmínkami při registraci';
$txt['admin_agreement_default'] = 'Výchozí';
$txt['admin_agreement_select_language'] = 'Editovat jazyk';
$txt['admin_agreement_select_language_change'] = 'Změnit';
$txt['admin_delete_members'] = 'Smazat vybrané uživatele';
$txt['admin_repair'] = 'Opravit všechna témata a diskuse';
$txt['admin_main_welcome'] = 'Toto je tvé &quot;%1$s&quot;.  Tady můžeš měnit nastavení, spravovat své fórum, prohlížet logy, instalovat balíčky, měnit vzhled a spoustu dalších věcí.<div style="margin-top: 1ex;">Pokud máš nějaké problémy, nahlédni do panelu &quot;Běžné problémy&quot;. Pokud ti zde obsažené informace nebudou postačovat, klidně se <a href="http://www.simplemachines.org/community/index.php" target="_blank">na nás obrať</a> se svým problémem.</div>Odpovědi můžeš nalézt rovněž po kliknutí na symbol <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> u problémového místa.';
$txt['admin_news_desc'] = 'Napiš do pole jednu položku novinek. Některé BB kódy, jako například <span title="tučné písmo">[b]</span>, <span title="kurzíva">[i]</span> a <span title="podtržené písmo">[u]</span> jsou povoleny, stejně jako emotikony nebo HTML. Vymaž pole se zprávou, abys ji vymazal.';
$txt['administrators'] = 'Administrátoři fóra';
$txt['admin_reserved_desc'] = 'Vyhrazená jména znemožní uživatelům registraci pod těmito jmény, nebo použití v zobrazovaném jméně.';
$txt['admin_activation_email'] = 'Po registraci zasílat novým uživatelům aktivační mail';
$txt['admin_match_whole'] = 'Kontroluj pouze celé jméno. Pokud není zaškrtnuto, hledá i podřetězce.';
$txt['admin_match_case'] = 'Kontrolovat velká/malá.';
$txt['admin_check_user'] = 'Kontrolovat jméno.';
$txt['admin_check_display'] = 'Kontrolovat zobrazované jméno.';
$txt['admin_newsletter_send'] = 'Z této stránky můžeš poslat email komukoli. Adresy členů vybraných skupin by měly být níže, ale můžeš přidat nebo ubrat libovolné adresy. Jen se ujisti, že jsou adresy odděleny takto: \'adresa1; adresa2\'.';
$txt['admin_fader_delay'] = 'Čas v milisekundách potřebný k zobrazení položky v news faderu';
$txt['admin_bbc'] = 'Zobrazovat BBC tlačítka při psaní příspěvků a SZ';

$txt['admin_backup_fail'] = 'Chyba při vytváření zálohy Settings.php - ujisti se, že Settings_bak.php existuje a má právo zápisu.';
$txt['modSettings_info'] = 'Nastav nebo změň volby, které určují, jak funguje toto fórum.';
$txt['database_server'] = 'Databázový server';
$txt['database_user'] = 'Databázový uživatel';
$txt['database_password'] = 'Databázové heslo';
$txt['database_name'] = 'Jméno databáze';
$txt['registration_agreement'] = 'Editovat registrační smlouvu';
$txt['registration_agreement_desc'] = 'Tato informace je zobrazena pouze pokud jsi nastavil, aby byla zobrazována při registraci.';
$txt['database_prefix'] = 'Prefix databázových tabulek';
$txt['errors_list'] = 'Seznam chyb na fóru';
$txt['errors_found'] = 'Následující chyby kazí fórum';
$txt['errors_fix'] = 'Chtěl by ses pokusit o opravu těchto chyb?';
$txt['errors_do_recount'] = 'Všechny chyby opraveny - byla vytvořena záchranná oblast. Klikni na tlačítko níže, aby se přepočetly klíčové statistky.';
$txt['errors_recount_now'] = 'Přepočítat statistiky';
$txt['errors_fixing'] = 'Opravuji chyby fóra';
$txt['errors_fixed'] = 'Všechny chyby opraveny! Měl bys prozkoumat všechny vytvořené kategorie, diskuse nebo témata a rozhodnout, co s nimi provedeš.';
$txt['attachments_avatars'] = 'Přílohy a avatary';
$txt['attachments_desc'] = 'Odsud můžeš spravovat přílohy. Mùžeš je vymazávat podle velikosti nebo podle data. Jsou k dispozici i statistiky příloh.';
$txt['attachment_stats'] = 'Statistiky příloh';
$txt['attachment_integrity_check'] = 'Kontrola integrity příloh';
$txt['attachment_integrity_check_desc'] = 'Tato funkce ověří integritu a velikosti příloh a souborů v databázi a, pokud to bude nutné, opraví nalezené chyby.';
$txt['attachment_check_now'] = 'Spustit kontrolu';
$txt['attachment_pruning'] = 'Promazání příloh';
$txt['attachment_pruning_message'] = 'Přidat zprávu k příspěvku';
$txt['attachment_pruning_warning'] = 'Jsi si jístý, že chceš smazat tyto přílohy?\\nNelze to vrátit zpět!';
$txt['attachment_total'] = 'Celkem příloh';
$txt['attachmentdir_size'] = 'Celková velikost adresáře s přílohami';
$txt['attachmentdir_size_current'] = 'Celková velikost současného adresáře s přílohami';
$txt['attachment_space'] = 'Volné místo v adresáři s přílohami';
$txt['attachment_space_current'] = 'Volné místo v současném adresáři s přílohami';
$txt['attachment_options'] = 'Nastavení příloh';
$txt['attachment_log'] = 'Log příloh';
$txt['attachment_remove_old'] = 'Odstranit přílohy starší než';
$txt['attachment_remove_size'] = 'Odstranit přílohy větší než';
$txt['attachment_name'] = 'Jméno přílohy';
$txt['attachment_file_size'] = 'Velikost';
$txt['attachmentdir_size_not_set'] = 'Maximální velikost adresáře nenastavena';
$txt['attachment_delete_admin'] = '[příloha smazaná administrátorem]';
$txt['live'] = 'Živě ze Simple Machines...';
$txt['remove_all'] = 'Smazat vše';
$txt['approve_new_members'] = 'Adminstrátor musí schválit všechny členy';
$txt['agreement_not_writable'] = 'Pozor - agreement.txt nemá právo zápisu, změny, které provedeš, nebudou uloženy.';

$txt['version_check_desc'] = 'Zde vidíš verze souborů tvé instalace ve srovnání s aktuální verzí. Pokud jsou některé soubory zastaralé, měl by sis stáhnout a aktualizovat nejnovější verzi z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(detailněji)';

$txt['lfyi'] = 'Nemůžeš se spojit se simplemachines.org, abys stáhl poslední soubor s novinkami.';

$txt['manage_calendar'] = 'Kalendář';
$txt['manage_search'] = 'Vyhledávání';

$txt['smileys_manage'] = 'Emotikony a sady emotikonů';
$txt['smileys_manage_info'] = 'Instaluj nové sady emotikonů, nebo přidávej nové do stávajících sad.';
$txt['package_info'] = 'Instaluj nové vlastnosti nebo modifikuj stávající.';
$txt['theme_admin'] = 'Nastavení vzhledu';
$txt['theme_admin_info'] = 'Nastav a spravuj svá témata a jejich volby.';
$txt['registration_center'] = 'Správa registrací';
$txt['member_center_info'] = 'Prohlédni seznam uživatelů, hledej členy and spravuj neschválené členy a členy bez aktivace.';

$txt['viewmembers_name'] = 'Jméno (k zobrazení)';
$txt['viewmembers_online'] = 'Naposledy online';
$txt['viewmembers_today'] = 'Dnes';
$txt['viewmembers_day_ago'] = 'den zpátky';
$txt['viewmembers_days_ago'] = 'dní zpátky';

$txt['display_name'] = 'Jméno';
$txt['email_address'] = 'Emailová adresa';
$txt['ip_address'] = 'IP adresa';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'neznámá';
$txt['security_wrong'] = 'Pokus o přihlášení administrátora!' . "\n" .
	'Referer: ' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'neznámý') . "\n" .
	'Prohlížeč: ' . $_SERVER['HTTP_USER_AGENT'] . "\n" .
	'IP: ' . $GLOBALS['user_info']['ip'];

$txt['email_as_html'] = 'Poslat ve formátu HTML. (s touto volbou můžeš psát HTML značky v těle mailu.)';
$txt['email_parsed_html'] = 'Přidat &lt;br /&gt; a &amp;nbsp; k této zprávě.';
$txt['email_variables'] = 'V této zprávě můžeš použít pár &quot;proměnných&quot;. Klikni <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">sem</a> pro víc informací.';
$txt['email_force'] = 'Poslat i uživatelům, kteří si zakázali příjem oznámení.';
$txt['email_as_pms'] = 'Poslat těmto skupinám jako soukromou zprávu.';
$txt['email_continue'] = 'Pokračovat';
$txt['email_done'] = 'hotovo.';

$txt['ban_title'] = 'Zakázat uživatele';
$txt['ban_ip'] = 'Zákaz podle IP: (napø. 192.168.12.213 nebo 128.0.*.*) - jeden záznam na řádek';
$txt['ban_email'] = 'Zákaz podle emailu: (např. blb@nekde.cz) - jeden záznam na řádek';
$txt['ban_username'] = 'Zákaz podle jména: (např. p1t0m3c) - jeden záznam na řádek';

$txt['ban_description'] = 'Zde můžeš zakázat problematické uživatele podle IP adresy, jména počítače, uživatelského jména nebo emailu.';
$txt['ban_add_new'] = 'Přidat zákaz';
$txt['ban_banned_entity'] = 'Zakázaná entita';
$txt['ban_on_ip'] = 'Zakaž IP (např. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Zakaž počítač (např. *.vlada.cz)';
$txt['ban_on_email'] = 'Zakaž email (např. *@parlament.cz)';
$txt['ban_on_username'] = 'Zakaž jméno';
$txt['ban_notes'] = 'Poznámky';
$txt['ban_restriction'] = 'Omezení';
$txt['ban_full_ban'] = 'Úplný zákaz';
$txt['ban_partial_ban'] = 'Částečný zákaz';
$txt['ban_cannot_post'] = 'Zákaz&nbsp;příspěvků';
$txt['ban_cannot_register'] = 'Zákaz&nbsp;registrace';
$txt['ban_cannot_login'] = 'Není možno se přihlásit';
$txt['ban_add'] = 'Přidat';
$txt['ban_edit_list'] = 'Editovat seznam zákazů';
$txt['ban_type'] = 'Typ zákazu';
$txt['ban_days'] = 'den(dnů)';
$txt['ban_will_expire_within'] = 'Zákaz vyprší za';
$txt['ban_added'] = 'Přidán';
$txt['ban_expires'] = 'Vyprší';
$txt['ban_hits'] = 'Záznamů';
$txt['ban_actions'] = 'Akce';
$txt['ban_expiration'] = 'Ukončení';
$txt['ban_reason_desc'] = 'Důvod zákazu, který se zobrazí zakázanému uživateli.';
$txt['ban_notes_desc'] = 'Poznámky pro další správce.';
$txt['ban_remove_selected'] = 'Smazat vybrané';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Jsi si jistý, že chceš smazat vybrané zákazy?';
$txt['ban_modify'] = 'Změnit';
$txt['ban_name'] = 'Jméno zákazu';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Změnit zákaz';
$txt['ban_add_notes'] = '<b>Poznámka</b>: po vytvoření zákazu můžeš přidat další metody, kterými se zákaz kontroluje, jako IP adresy, jména počítačů a emailové adresy.';
$txt['ban_expired'] = 'Prošlý / zakázaný';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Není vybráno žádné omezení.';

$txt['ban_triggers'] = 'Metody';
$txt['ban_add_trigger'] = 'Přidat metodu';
$txt['ban_add_trigger_submit'] = 'Přidat';
$txt['ban_edit_trigger'] = 'Změnit';
$txt['ban_edit_trigger_title'] = 'Změnit metodu';
$txt['ban_edit_trigger_submit'] = 'Změnit';
$txt['ban_remove_selected_triggers'] = 'Odebrat vybrané metody zákazu';
$txt['ban_no_entries'] = 'V současné době nejsou žádné zákazy.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Jsi si jistý, že chceš odebrat vybrané metody zákazu?';
$txt['ban_trigger_browse'] = 'Procházet metody zákazu';
$txt['ban_trigger_browse_description'] = 'Zde jsou vidět všechny zákazy seřazené podle IP adresy, jména počítače, emailu a uživatelského jména.';

$txt['ban_log'] = 'Log zákazů';
$txt['ban_log_description'] = 'Log zákazů zobrazuje všechny pokusy zakázaných uživatelů o vstup na fórum (pouze pro \'Úplný zákaz\' a \'Zákaz registrace\').';
$txt['ban_log_no_entries'] = 'Žádné záznamy';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Emailová adresa';
$txt['ban_log_member'] = 'Uživatel';
$txt['ban_log_date'] = 'Datum';
$txt['ban_log_remove_all'] = 'Smazat vše';
$txt['ban_log_remove_all_confirm'] = 'Jsi si jistý, že chceš smazat všechny záznamy?';
$txt['ban_log_remove_selected'] = 'Smazat vybrané';
$txt['ban_log_remove_selected_confirm'] = 'Jsi si jistý, že chceš smazat vybrané záznamy?';
$txt['ban_no_triggers'] = 'Žádné metody zákazů';

$txt['settings_not_writable'] = 'Tato nastavení nemohou být změněna, protože Settings.php je pouze pro čtení.';

$txt['maintain_title'] = 'Údržba fóra';
$txt['maintain_info'] = 'Optimalizuj tabulky, proveď zálohy, zkontroluj chyby a vyčisti fóra těmito nástroji.';
$txt['maintain_sub_database'] = 'Databáze';
$txt['maintain_sub_routine'] = 'Rutinní';
$txt['maintain_sub_members'] = 'Uživatelé';
$txt['maintain_sub_topics'] = 'Témata';
$txt['maintain_done'] = 'Údržba provedena.';
$txt['maintain_no_errors'] = 'Gratuluji, nebyly nalezeny žádné chyby. Díky za otestování.';

$txt['maintain_tasks'] = 'Naplánované úkoly';
$txt['maintain_tasks_desc'] = 'Spravuj všechny naplánované úkoly.';

$txt['scheduled_log'] = 'Log úkolů';
$txt['scheduled_log_desc'] = 'Zobrazuje záznamy o proběhlých naplánovaných úkolech.';
$txt['admin_log'] = 'Adminiční log';
$txt['admin_log_desc'] = 'Zobrazuje administrační úkony, které provedli administrátoři tohoto fóra.';
$txt['moderation_log'] = 'Zobrazit log moderace';
$txt['moderation_log_desc'] = 'Zobrazuje moderační aktivity, které provedli moderátoři tohoto fóra.';
$txt['spider_log_desc'] = 'Zde lze prohlédnout záznamy týkající se aktivity vyhledávacích robotů.';
$txt['pruning_log_desc'] = 'Použij tyto nástroje k odstranění starých položek z různých logů.';

$txt['mailqueue_title'] = 'Pošta';

$txt['db_error_send'] = 'Poslat email, když dojde k chybě spojení s databází';
$txt['db_persist'] = 'Používat trvalé připojení';
$txt['ssi_db_user'] = 'Databázové jméno pro SSI mód';
$txt['ssi_db_passwd'] = 'Databázové heslo pro SSI mód';

$txt['default_language'] = 'Výchozí jazyk fóra';

$txt['maintenance_subject'] = 'Předmět k zobrazení';
$txt['maintenance_message'] = 'Text k zobrazení';

$txt['errlog_desc'] = 'Chybový log vede přehled o chybách vzniklých na fóru. Zaškrtní chybové záznamy, které si přeješ odstranit z datbáze a stistkni tlačítko %1$s button dole na stránce.';
$txt['errlog_no_entries'] = 'V současnosti nejsou žádné chybové logy.';

$txt['theme_settings'] = 'Nastavení vzhledu';
$txt['theme_current_settings'] = 'Nastavení současného vzhledu';

$txt['dvc_your'] = 'Tvá verze';
$txt['dvc_current'] = 'Poslední verze';
$txt['dvc_sources'] = 'Zdrojáky';
$txt['dvc_default'] = 'Výchozí témata';
$txt['dvc_templates'] = 'Současná témata';
$txt['dvc_languages'] = 'Jazykové soubory';

$txt['smileys_default_set_for_theme'] = 'Vychozí sada emotikonů pro tento vzhled';
$txt['smileys_no_default'] = '(použít výchozí sadu emotikonů)';

$txt['censor_test'] = 'Otestovat cenzurovaná slova';
$txt['censor_test_save'] = 'Testovat';
$txt['censor_case'] = 'Ignorovat velká/malá';
$txt['censor_whole_words'] = 'Kontrolovat pouze celá slova';

$txt['admin_confirm_password'] = '(potvrdit)';
$txt['admin_incorrect_password'] = 'Špatné heslo';

$txt['date_format'] = '(RRRR-MM-DD) ';
$txt['undefined_gender'] = 'Nedefinováno';
$txt['age'] = 'Věk uživatele';
$txt['activation_status'] = 'Stav aktivace';
$txt['activated'] = 'Aktivován';
$txt['not_activated'] = 'Neaktivován';
$txt['primary'] = 'Primární';
$txt['additional'] = 'Další';
$txt['messenger_address'] = 'Messenger adresa';
$txt['wild_cards_allowed'] = 'Žolíkové znaky * and ? jsou povoleny';
$txt['search_for'] = 'Hledat podle';
$txt['member_part_of_these_membergroups'] = 'Uživatel je člen těchto skupin';
$txt['membergroups'] = 'Skupiny';
$txt['confirm_delete_members'] = 'Jsi si jistý, že chceš smazat vybrané uživatele?';

$txt['support_credits_title'] = 'Podpora a poděkování';
$txt['support_credits_info'] = 'Zobraz podporu k běžným problémům a informace o verzích software, pokud máš nějaké problémy.';
$txt['support_title'] = 'Informace pro podporu';
$txt['support_versions_current'] = 'Současná verze SMF';
$txt['support_versions_forum'] = 'Verze fóra';
$txt['support_versions_php'] = 'Verze PHP';
$txt['support_versions_db'] = 'verze %1$s';
$txt['support_versions_server'] = 'Verze serveru';
$txt['support_versions_gd'] = 'Verze GD';
$txt['support_versions'] = 'Informace o verzích';
$txt['support_resources'] = 'Možnosti podpory';
$txt['support_resources_p1'] = 'Náš <a href="%1$s">online manuál</a> obsahuje hlavní dokumentaci pro SMF. Obsahuje řadu dokumentů, které pomáhají zodpovídat dotazy a vysvětlují <a href="%2$s">vlastnosti</a>, <a href="%3$s">nastavení</a>, <a href="%4$s">vzhledy</a>, <a href="%5$s">balíčky</a>, atd. Online manuál podrobně dokumentuje každou část SMF a mě by rychle zodpovědět většinu otázek. ';
$txt['support_resources_p2'] = 'Pokud nenajdeš odpovědi na tvé otázky v online manuálu, můžeš chtít vyhledávat na naší <a href="%1$s">Support Community</a> nebo požádat o radu buď na našem <a href="%2$s">anglickém</a> nebo na řadě našich <a href="%3$s">mezinárodních diskusích podpory</a>. SMF Support Community lze využít pro <a href="%4$s">podporu</a>, <a href="%5$s">úpravy</a>, a mnoho dalších záležitostí, jako například diskuse o SMF, vyhledání poskytovatele nebo konzultovat administrační problémy s administrátory jiných fór. ';

$txt['support_latest'] = 'Běžné problémy';
$txt['support_latest_fetch'] = 'Stahuji informace podpory...';

$txt['edit_permissions_info'] = 'Změň omezení a dostupné vlastnosti, ať už globálně nebo pro určité diskuse.';
$txt['membergroups_members'] = 'Nezařazení členové';
$txt['membergroups_guests'] = 'Neregistrovaní hosté';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Přidat skupinu';
$txt['membergroups_permissions'] = 'Práva';

$txt['permitgroups_restrict'] = 'Restriktivní';
$txt['permitgroups_standard'] = 'Standardní';
$txt['permitgroups_moderator'] = 'Moderátor';
$txt['permitgroups_maintenance'] = 'Údržba';
$txt['permitgroups_inherit'] = 'Dědit';

$txt['confirm_delete_attachments_all'] = 'Jsi si jistý, že chceš smazat všechny přílohy?';
$txt['confirm_delete_attachments'] = 'Jsi si jistý, že chceš smazat vybrané přílohy?';
$txt['attachment_manager_browse_files'] = 'Procházet soubory';
$txt['attachment_manager_repair'] = 'Spravovat';
$txt['attachment_manager_avatars'] = 'Avatary';
$txt['attachment_manager_attachments'] = 'Přílohy';
$txt['attachment_manager_thumbs'] = 'Náhledy';
$txt['attachment_manager_last_active'] = 'Naposledy aktivní';
$txt['attachment_manager_member'] = 'Uživatel';
$txt['attachment_manager_avatars_older'] = 'Smazat avatary členů neaktivních více než';
$txt['attachment_manager_total_avatars'] = 'Celkem avatarů';

$txt['attachment_manager_avatars_no_entries'] = 'Nejsou zde žádné avatary.';
$txt['attachment_manager_attachments_no_entries'] = 'Nejsou zde žádné přílohy.';
$txt['attachment_manager_thumbs_no_entries'] = 'Nejsou zde žádné náhledy.';

$txt['attachment_manager_settings'] = 'Nastavení příloh';
$txt['attachment_manager_avatar_settings'] = 'Nastavení avatarů';
$txt['attachment_manager_browse'] = 'Procházet soubory';
$txt['attachment_manager_maintenance'] = 'Správa souborů';
$txt['attachment_manager_save'] = 'Uložit';

$txt['attachmentEnable'] = 'Mód příloh';
$txt['attachmentEnable_deactivate'] = 'Zakázat přílohy';
$txt['attachmentEnable_enable_all'] = 'Povolit všechny přílohy';
$txt['attachmentEnable_disable_new'] = 'Zakázat nové přilohy';
$txt['attachmentCheckExtensions'] = 'Kontrolovat přípony příloh';
$txt['attachmentExtensions'] = 'Povolené přílohy příloh';
$txt['attachmentRecodeLineEndings'] = 'Překódovat konce řádků textových příloh';
$txt['attachmentShowImages'] = 'Zobrazovat obrázkové přílohy jako obrázky pod zprávou';
$txt['attachmentEncryptFilenames'] = 'Šifrovat uložená jména souborů';
$txt['attachmentUploadDir'] = 'Adresář s přílohami';
$txt['attachmentUploadDir_multiple'] = 'Adresáře s přílohami';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Nastavit více adresářů s přílohami]</a>';
$txt['attachmentDirSizeLimit'] = 'Maximální velikost adresáře s přílohami';
$txt['attachmentPostLimit'] = 'Maximální velikost příloh na jednu zprávu';
$txt['attachmentSizeLimit'] = 'Maximální velikost přílohy';
$txt['attachmentNumPerPostLimit'] = 'Maximální počet příloh na jednu zprávu';
$txt['attachment_gd_warning'] = 'Modul GD není nainstalován; překódování obrázků není možné.';
$txt['attachment_image_reencode'] = 'Překódovat potenciálně nebezpečné obrázkové přílohy';
$txt['attachment_image_reencode_note'] = '(vyžaduje modul GD)';
$txt['attachment_image_paranoid_warning'] = 'Důkladné kontroly mohou vést k vysokému počtu odmítnutých příloh.';
$txt['attachment_image_paranoid'] = 'Provádět důkladné bezpečnostní kontroly obrázkových příloh';
$txt['attachmentThumbnails'] = 'Zmenšovat obrázky, když se zobrazují pod zprávami';
$txt['attachment_thumb_png'] = 'Ukládat náhledy jako PNG';
$txt['attachmentThumbWidth'] = 'Maximální šířka náhledu';
$txt['attachmentThumbHeight'] = 'Maximální výška náhledu';

$txt['attach_dir_does_not_exist'] = 'neexistuje';
$txt['attach_dir_not_writable'] = 'nelze zapisovat';
$txt['attach_dir_files_missing'] = 'soubor chybí (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Opravit</a>)';
$txt['attach_dir_unused'] = 'nepoužito';
$txt['attach_dir_ok'] = 'Ok';

$txt['attach_path_manage'] = 'Konfigurovat cesty příloh';
$txt['attach_paths'] = 'Cesty příloh';
$txt['attach_current_dir'] = 'Aktualní adresář';
$txt['attach_path'] = 'Cesta';
$txt['attach_current_size'] = 'Současná velikost (KB)';
$txt['attach_num_files'] = 'Souborů';
$txt['attach_dir_status'] = 'Stav';
$txt['attach_add_path'] = 'Přidat cestu';
$txt['attach_path_current_bad'] = 'Neplatná cesta k přílohám.';

$txt['mods_cat_avatars'] = 'Avatary';
$txt['avatar_directory'] = 'Adresář s avatary';
$txt['avatar_url'] = 'URL s avatary';
$txt['avatar_dimension_note'] = '(0 = bez omezení)';
$txt['avatar_max_width_external'] = 'Maximální šířka externího avataru';
$txt['avatar_max_height_external'] = 'Maximální výška externího avataru';
$txt['avatar_action_too_large'] = 'Pokud je avatar příliš velký...';
$txt['option_refuse'] = 'Odmítnout';
$txt['option_html_resize'] = 'Zmenšit pomocí HTML';
$txt['option_js_resize'] = 'Zmenšit pomoci JavaScriptu';
$txt['option_download_and_resize'] = 'Stáhnout a zmenšit (vyžaduje modul GD)';
$txt['avatar_max_width_upload'] = 'Maximální šířka nahraného avataru';
$txt['avatar_max_height_upload'] = 'Maximální výška nahraného avataru';
$txt['avatar_resize_upload'] = 'Zmenšit příliš velké avatary';
$txt['avatar_resize_upload_note'] = '(vyžaduje modul GD)';
$txt['avatar_download_png'] = 'Použít formát PNG pro zmenšené avatary?';
$txt['avatar_gd_warning'] = 'Modul GD není nainstalován - některé vlastnosti avatarů jsou vypnuty.';
$txt['avatar_external'] = 'Externí avatary';
$txt['avatar_upload'] = 'Uploadovatelné avatary';
$txt['avatar_server_stored'] = 'Avatary uložené na serveru';
$txt['avatar_server_stored_groups'] = 'Skupiny s oprávněním zvolit avatar uložený na serveru';
$txt['avatar_upload_groups'] = 'Skupiny s oprávněním nahrát avatar na server';
$txt['avatar_external_url_groups'] = 'Skupiny s oprávněním použít externí URL';
$txt['avatar_select_permission'] = 'Vybrat práva pro každou skupinu';
$txt['avatar_download_external'] = 'Stáhnout avatar z URL';
$txt['custom_avatar_enabled'] = 'Nahrát avatary do...';
$txt['option_attachment_dir'] = 'Adresáře s přílohami';
$txt['option_specified_dir'] = 'Vybraného adresáře...';
$txt['custom_avatar_dir'] = 'Adresář s uploady';
$txt['custom_avatar_dir_desc'] = 'Mělo by se jednat o jiný adresář, než je ten pro serverové avatary.';
$txt['custom_avatar_url'] = 'URL s uploady';
$txt['custom_avatar_check_empty'] = 'Adresář pro avatary je prázdný nebo neplatný. Ujisti se, že nastavení jsou v pořádku.';
$txt['avatar_reencode'] = 'Překódovat potenciálně nebezpečné avatary';
$txt['avatar_reencode_note'] = '(vyžaduje modul GD)';
$txt['avatar_paranoid_warning'] = 'Důkladné kontroly mohou vést k vysokému počtu odmítnutých avatarů.';
$txt['avatar_paranoid'] = 'Provádět důkladné bezpečnostní kontroly avatarů';

$txt['repair_attachments'] = 'Spravovat přílohy';
$txt['repair_attachments_complete'] = 'Údržba dokončena';
$txt['repair_attachments_complete_desc'] = 'Všechny vybrané chyby byly opraveny';
$txt['repair_attachments_no_errors'] = 'Nebyly nalezeny žádné chyby!';
$txt['repair_attachments_error_desc'] = 'Během údržby byly nalezeny tyto chyby. Zaškrtni políčko vedle chyby, kterou chceš opravit, a stiskni Pokračovat.';
$txt['repair_attachments_continue'] = 'Pokračovat';
$txt['repair_attachments_cancel'] = 'Storno';
$txt['attach_repair_missing_thumbnail_parent'] = '%d náhledů chybí původní příloha';
$txt['attach_repair_parent_missing_thumbnail'] = '%d příloh má záznam o náhledu, který ale není k nalezení';
$txt['attach_repair_file_missing_on_disk'] = '%d příloh/avatarů má záznam, ale neexistují na disku';
$txt['attach_repair_file_wrong_size'] = '%d příloh/avatarů má špatnou délku';
$txt['attach_repair_file_size_of_zero'] = '%d příloh/avatarů má nulovou délku na disku. (budou smazány)';
$txt['attach_repair_attachment_no_msg'] = '%d příloh není svázaných s žádným příspěvkem';
$txt['attach_repair_avatar_no_member'] = '%d avatarů není spojeno s žádným uživatelem';
$txt['attach_repair_wrong_folder'] = '%1$d příloh je v nesprávné složce';

$txt['news_title'] = 'Novinky a bulletiny';
$txt['news_settings_desc'] = 'Zda můžeš měnit nastavení a práva vztahující se k novinkám a bulletinům.';
$txt['news_settings_submit'] = 'Uložit';
$txt['news_mailing_desc'] = 'Odsud můžeš posílat zprávy všem zaregistrovaným členům, kteří zadali svoji emailovou adresu. Můžeš upravit distribuční list, nebo poslat všem. Je to užitečné k rozeslání informací o důležitých aktualizacích či novinkách.';
$txt['groups_edit_news'] = 'Skupiny s oprávněním měnit novinky';
$txt['groups_send_mail'] = 'Skupiny s oprávněním rozesílat bulletiny';
$txt['xmlnews_enable'] = 'Povolit XML/RSS novinky';
$txt['xmlnews_maxlen'] = 'Maximální délka příspěvku:<div class="smalltext">(0 = bez limitu; špatný nápad.)</div>';
$txt['editnews_clickadd'] = 'Klikni sem pro přidání další položky.';
$txt['editnews_remove_selected'] = 'Smazat vybrané';
$txt['editnews_remove_confirm'] = 'Jsi si jist, že chceš smazat vybrané položky novinek?';
$txt['censor_clickadd'] = 'Klikni sem pro přidání dalšího slova.';

$txt['layout_controls'] = 'Fórum';
$txt['logs'] = 'Logy';
$txt['generate_reports'] = 'Vytvořit přehledy';

$txt['update_available'] = 'Aktualizace je k dispozici!';
$txt['update_message'] = 'Používáš zastaralou verzi SMF, která obsahuje You\'re již opravené chyby. Doporučujeme ti, abys <a href="" id="update-link">aktualizoval fórum</a> na nejnovější verzi, jakmile to bude možné. Trvá to jen chvilku!';

$txt['manageposts'] = 'Příspěvky a témata';
$txt['manageposts_title'] = 'Spravovat příspěvky a témata';
$txt['manageposts_description'] = 'Zde můžeš měnit veškerá nastavení týkající se témat a příspěvků.';

$txt['manageposts_seconds'] = 'sekund';
$txt['manageposts_minutes'] = 'minut';
$txt['manageposts_characters'] = 'znaků';
$txt['manageposts_days'] = 'dnů';
$txt['manageposts_posts'] = 'příspěvků';
$txt['manageposts_topics'] = 'témat';

$txt['manageposts_settings'] = 'Nastavení příspěvků';
$txt['manageposts_settings_description'] = 'Zde můžeš nastavit všechno, co se týká příspěvků a jejich posílání.';
$txt['manageposts_settings_submit'] = 'Uložit';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin board code se používá pro zvýrazňování zpráv na fóru. Například pro zvýraznění slova \'dům\' můžeš napsat [b]dům[/b]. Všechny značky Bulletin board code jsou ohraničeny hranatými závorkami (\'[\' a \']\').';
$txt['manageposts_bbc_settings_title'] = 'Nastavení Bulletin Board Code';
$txt['manageposts_bbc_settings_submit'] = 'Uložit';

$txt['manageposts_topic_settings'] = 'Nastavení témat';
$txt['manageposts_topic_settings_description'] = 'Zde můžeš měnit veškerá nastavení týkající se témat.';
$txt['manageposts_topic_settings_submit'] = 'Uložit';

$txt['removeNestedQuotes'] = 'Odstranit vnořené citace při citování';
$txt['enableEmbeddedFlash'] = 'Vkládat flash do příspěvků';
$txt['enableEmbeddedFlash_warning'] = 'může se jednat o bezpečnostní problém!';
$txt['enableSpellChecking'] = 'Povolit kontrolu pravopisu';
$txt['enableSpellChecking_warning'] = 'nefunguje na všech serverech!';
$txt['disable_wysiwyg'] = 'Nepovolit WYSIWYG editor';
$txt['max_messageLength'] = 'Maximální velikost příspěvku';
$txt['max_messageLength_zero'] = '0 - bez omezení';
$txt['fixLongWords'] = 'Rozdělovat slova s více znaky než';
$txt['fixLongWords_zero'] = '0 - bez omezení';
$txt['fixLongWords_warning'] = 'nefunguje na všech serverech!';
$txt['topicSummaryPosts'] = 'Počet příspěvků na seznamu témat';
$txt['spamWaitTime'] = 'Čas mezi příspěvky ze stejného IP';
$txt['edit_wait_time'] = 'Doba, po kterou je ještě možno skrytě upravit příspěvek';
$txt['edit_disable_time'] = 'Maximální doba, po kterou je možno upravovat příspěvek';
$txt['edit_disable_time_zero'] = '0 - bez omezení';

$txt['enableBBC'] = 'Povolit bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Povolit <i>základní</i> HTML v příspěvcích';
$txt['autoLinkUrls'] = 'Automaticky převádět URL na odkazy';
$txt['disabledBBC'] = 'Povolené značky BBC';
$txt['bbcTagsToUse'] = 'Povolené značky BBC';
$txt['bbcTagsToUse_select'] = 'Vyber značky, které je možno používat';
$txt['bbcTagsToUse_select_all'] = 'Vybrat vše';

$txt['enableStickyTopics'] = 'Povolit připíchnutá témata';
$txt['enableParticipation'] = 'Zobrazit \'přispívací\' ikony';
$txt['oldTopicDays'] = 'Varovat uživatele, pokud je poslední příspěvek v tématu starší než';
$txt['oldTopicDays_zero'] = '0 - bez omezení';
$txt['defaultMaxTopics'] = 'Počet témat na stránku';
$txt['defaultMaxMessages'] = 'Počet příspěvků na stránku';
$txt['hotTopicPosts'] = 'Počet příspěvků ve žhavém tématu';
$txt['hotTopicVeryPosts'] = 'Počet příspěvků ve velmi žhavém tématu';
$txt['enableAllMessages'] = 'Maximální počet příspěvku v tématu, aby se zobrazily všechny příspěvky';
$txt['enableAllMessages_zero'] = '0 - nikdy nezobrazovat &quot;Vše&quot;';
$txt['disableCustomPerPage'] = 'Zakázat vlastní nastavení počtu témat/příspěvku na stránce';
$txt['enablePreviousNext'] = 'Povolit odkazy na předcházející/další témata';

$txt['not_done_title'] = 'Ještě není hotovo!';
$txt['not_done_reason'] = 'Aby nedošlo k přetížení serveru, proces se dočasně přerušil. Měl by automaticky pokračovat za pár sekund. Pokud tomu tak není, stiskni tlačítko Pokračovat.';
$txt['not_done_continue'] = 'Pokračovat';

$txt['general_settings'] = 'Obecné';
$txt['database_paths_settings'] = 'Databáze a cesty';
$txt['cookies_sessions_settings'] = 'Cookies a sezení';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load Balancing';

$txt['language_configuration'] = 'Jazyky';
$txt['language_description'] = 'V této sekci můžeš editovat jazyky instalované na tvém fóru, stahovat nové ze Simple Machines. Také je možno měnit nastavení jazyků..';
$txt['language_edit'] = 'Editovat jazyky';
$txt['language_add'] = 'Přidat jazyk';
$txt['language_settings'] = 'Nastavení';

$txt['advanced'] = 'Pokročilé';
$txt['simple'] = 'Jednoduché';

$txt['admin_news_select_recipients'] = 'Prosím vyber, kdo má obdržet informační bulletin';
$txt['admin_news_select_group'] = 'Skupiny';
$txt['admin_news_select_group_desc'] = 'Vybrat skupiny, které mají obdržet bulletin.';
$txt['admin_news_select_members'] = 'Uživatelé';
$txt['admin_news_select_members_desc'] = 'Další uživatelé, kteří mají obdržet bulletin.';
$txt['admin_news_select_excluded_members'] = 'Vyloučení uživatelé';
$txt['admin_news_select_excluded_members_desc'] = 'Uživatelé, kteří nemají obdržet bulletin.';
$txt['admin_news_select_excluded_groups'] = 'Vyloučené skupiny';
$txt['admin_news_select_excluded_groups_desc'] = 'Vyber skupiny, které určitě nemají dostat bulletin.';
$txt['admin_news_select_email'] = 'Emailové adresy';
$txt['admin_news_select_email_desc'] = 'Středníky oddělený seznam emailových adres, které mají dostat bulletin. (tj. adresa1; adresa2)';
$txt['admin_news_select_override_notify'] = 'Ignoruj nastavení upozornění';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Nemůžeš poslat soukromou zprávu na emailovou adresu. Když budeš pokračovat, všechny zadané emailové adresy budou ignorovány.\\n\\nJsi si jistý, že chceš pokračovat?';

$txt['mailqueue_browse'] = 'Procházet frontu';
$txt['mailqueue_settings'] = 'Nastavení';

$txt['admin_search'] = 'Rychlé vyhledávání';
$txt['admin_search_type_internal'] = 'Úkol/nastavení';
$txt['admin_search_type_member'] = 'Uživatel';
$txt['admin_search_type_online'] = 'Online manuál';
$txt['admin_search_go'] = 'Ok';
$txt['admin_search_results'] = 'Výsledky vyhledávání';
$txt['admin_search_results_desc'] = 'Výsledky vyhledávání: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Hledat znovu';
$txt['admin_search_results_none'] = 'Nic nenalezeno!';

$txt['admin_search_section_sections'] = 'Sekce';
$txt['admin_search_section_settings'] = 'Nastavení';

$txt['core_settings_title'] = 'Hlavní moduly';
$txt['mods_cat_features'] = 'Obecné';
$txt['mods_cat_security_general'] = 'Obecné';
$txt['antispam_title'] = 'Antispam';
$txt['mods_cat_modifications_misc'] = 'Různé';
$txt['mods_cat_layout'] = 'Vzhled';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderace';
$txt['signature_settings_short'] = 'Podpisy';
$txt['custom_profile_shorttitle'] = 'Položky profilu';
$txt['pruning_title'] = 'Mazání logů';

$txt['boardsEdit'] = 'Změnit diskuse';
$txt['mboards_new_cat'] = 'Vytvořit novou kategorii';
$txt['manage_holidays'] = 'Editovat svátky';
$txt['calendar_settings'] = 'Nastavení kalendáře';
$txt['search_weights'] = 'Váhy';
$txt['search_method'] = 'Metody vyhledávání';

$txt['smiley_sets'] = 'Sady emotikonů';
$txt['smileys_add'] = 'Přidat emotikon';
$txt['smileys_edit'] = 'Editovat emotikony';
$txt['smileys_set_order'] = 'Pořadí emotikonů';
$txt['icons_edit_message_icons'] = 'Editovat ikony zpráv';

$txt['membergroups_new_group'] = 'Přidat skupinu';
$txt['membergroups_edit_groups'] = 'Editovat skupiny';
$txt['permissions_groups'] = 'Obecná práva';
$txt['permissions_boards'] = 'Práva diskusí';
$txt['permissions_profiles'] = 'Editovat profily';
$txt['permissions_post_moderation'] = 'Postmoderace';

$txt['browse_packages'] = 'Procházet balíčky';
$txt['download_packages'] = 'Stáhnout balíčky';
$txt['installed_packages'] = 'Nainstalované balíčky';
$txt['package_file_perms'] = 'Práva souborů';
$txt['package_settings'] = 'Volby';
$txt['themeadmin_admin_title'] = 'Spravovat a instalovat';
$txt['themeadmin_list_title'] = 'Nastavení vzhledu';
$txt['themeadmin_reset_title'] = 'Volby uživatelů';
$txt['themeadmin_edit_title'] = 'Modifikovat vzhled';
$txt['admin_browse_register_new'] = 'Registrovat nového uživatele';

$txt['search_engines'] = 'Vyhledávače';
$txt['spiders'] = 'Roboti';
$txt['spider_logs'] = 'Log robotů';
$txt['spider_stats'] = 'Statistiky';

$txt['paid_subscriptions'] = 'Předplatné';
$txt['paid_subs_view'] = 'Prohlédnout předplatné';

?>
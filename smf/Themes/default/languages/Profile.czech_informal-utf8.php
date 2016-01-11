<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'Nemůžeš měnit profil tohoto uživatele.';
$txt['website_title'] = 'Název webu';
$txt['website_url'] = 'URL webu';
$txt['signature'] = 'Podpis';
$txt['profile_posts'] = 'Příspěvků';
$txt['change_profile'] = 'Změnit profil';
$txt['delete_user'] = 'Smazat uživatele';
$txt['current_status'] = 'Současný stav:';
$txt['personal_text'] = 'Osobní text';
$txt['personal_picture'] = 'Osobní obrázek';
$txt['no_avatar'] = 'No avatar';
$txt['choose_avatar_gallery'] = 'Vybrat avatar z galerie';
$txt['picture_text'] = 'Obrázek/Text';
$txt['reset_form'] = 'Vymazat formulář';
$txt['preferred_language'] = 'Preferovaný jazyk';
$txt['age'] = 'Stáří';
$txt['no_pic'] = '(bez obrázku)';
$txt['latest_posts'] = 'Poslední příspěvky: ';
$txt['additional_info'] = 'Další informace';
$txt['avatar_by_url'] = 'Použij avatar z URL. (např. <em>http://vvv.mojestranka.cz/muj.gif</em>)';
$txt['my_own_pic'] = 'Použít avatar z URL';
$txt['date_format'] = 'Podle tohoto formátu se bude zobrazovat datum.';
$txt['time_format'] = 'Formát data';
$txt['display_name_desc'] = 'Toto jméno vidí ostatní uživatelé.';
$txt['personal_time_offset'] = 'Počet hodin, které se musí přidat/ubrat, aby se zobrazený čas shodoval s tvým lokálním časem.';
$txt['dob'] = 'Datum narození';
$txt['dob_month'] = 'Měsíc (MM)';
$txt['dob_day'] = 'Den (DD)';
$txt['dob_year'] = 'Rok (RRRR)';
$txt['password_strength'] = 'Pro nejvyšší bezpečnost bys měl používat osm a více znaků - kombinovaně písmena, čísla a speciální znaky.';
$txt['include_website_url'] = 'Musíš zadat, pokud zadáváš URL níže.';
$txt['complete_url'] = 'Musí obsahovat kompletní URL.';
$txt['your_icq'] = 'Tvoje ICQ číslo.';
$txt['your_aim'] = 'Tvoje přezdívka pro AOL Instant Messenger.';
$txt['your_yim'] = 'Tvoje přezdívka pro Yahoo! Instant Messenger.';
$txt['sig_info'] = 'Podpisy se zobrazují na konci každého příspěvku nebo soukromé zprávy. Můžeš použít BBCode anebo emotikony.';
$txt['max_sig_characters'] = 'Maximálně znaků: %1$d; zbývá: ';
$txt['send_member_pm'] = 'Poslat tomuto uživateli soukromou zprávu';
$txt['hidden'] = 'Skrytých';
$txt['current_time'] = 'Současný čas na fóru';
$txt['digits_only'] = 'Políčko s počtem příspěvků může obsahovat pouze čísla.';

$txt['language'] = 'Jazyk';
$txt['avatar_too_big'] = ' Rozměry avataru jsou příliš velké, prosím, zmenši jej a zkus to znovu (max';
$txt['invalid_registration'] = 'Špatné datum registrace, platný příklad:';
$txt['msn_email_address'] = 'Tvoje adresa pro MSN messenger';
$txt['current_password'] = 'Současné heslo';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Z bezpečnostních důvodů musíš zadat své současné heslo, když chceš provést změny svého nastavení';

$txt['timeoffset_autodetect'] = '(auto detekce)';

$txt['secret_question'] = 'Tajná otázka';
$txt['secret_desc'] = 'Můžeš sem zadat otázku a odpověď, kterou nikdo nezná, aby sis ulehčil získání zapomenutého hesla.';
$txt['secret_desc2'] = 'Vybírej pečlivě, nechceš přeci, aby někdo uhodl tvou odpověď!';
$txt['secret_answer'] = 'Odpověď';
$txt['secret_ask'] = 'Odpovím na tajnou otázku';
$txt['cant_retrieve'] = 'Většinou pomáháme obnovit vaše heslo náhodným vygenerováním nového a zasláním na vaši emailovou adresu. Přesto, pokud chcete, můžete se pokusit odpovědět na svou tajnou otázku (tak jak je zadána ve vašem profilu). Odpovíte-li správně, můžete si hned zvolit nové heslo.';
$txt['incorrect_answer'] = 'Lituji, ale nezadal jsi správnou kombinaci Tajné otázky a odpovědi ve svém profilu. Zmáčkni tlačítko Zpět a použij jinou metodu získání hesla.';
$txt['enter_new_password'] = 'Prosím zadej odpověď na svou otázku a heslo, které bys chtěl používat. Heslo bude nastaveno v případě, že odpovíš správně.';
$txt['password_success'] = 'Heslo bylo úspěšně změněno.<br />Klikni <a href="' . $scripturl . '?action=login">sem</a>, aby ses mohl přihlásit';
$txt['secret_why_blank'] = 'proč je tu prázdno?';

$txt['authentication_reminder'] = 'Připomenutí hesla';
$txt['password_reminder_desc'] = 'Pokud jsi zapomněl své přihlašovací údaje, neklesej na mysli, mohou být vyhledány. Pro započetí tohoto procesu, zadej níže svou emailovou adresu nebo uživatelské jméno.';
$txt['authentication_options'] = 'Prosím, vyber jednu z následujících voleb';
$txt['authentication_openid_email'] = 'Pošli mi připomenutí mé OpenID identity';
$txt['authentication_openid_secret'] = 'Odpovím &quot;tajnou otázku&quot;, abych obdržel svou OpenID identitu';
$txt['authentication_password_email'] = 'Pošli mi nové heslo emailem';
$txt['authentication_password_secret'] = 'Nastavím si nové heslo po zodpovězení &quot;tajné otázky&quot;';
$txt['openid_secret_reminder'] = 'Prosím, zadej odpověď na následující otázku. Pokud bude odpověď správná, zobrazám tvou OpenID identitu.';
$txt['reminder_openid_is'] = 'OpenID identita pro tvůj účet je:<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Prosím, poznamenej si ji pro příště.';
$txt['reminder_continue'] = 'Pokračovat';

$txt['current_theme'] = 'Současný vzhled';
$txt['change'] = '(změnit)';
$txt['theme_preferences'] = 'Nastavení vzhledu';
$txt['theme_forum_default'] = 'Výchozí vzhled pro fórum';
$txt['theme_forum_default_desc'] = 'Toto je výchozí vzhled, což znamená, že se bude měnit podle nastavení administrátora a diskusí, které zrovna navštěvuješ.';

$txt['profileConfirm'] = 'Opravdu chceš smazat tohoto uživatele?';

$txt['custom_title'] = 'Vlastní titulek';

$txt['lastLoggedIn'] = 'Naposledy aktivní';

$txt['notify_settings'] = 'Nastavení upozorňování:';
$txt['notify_save'] = 'Uložit nastavení';
$txt['notify_important_email'] = 'Dostávat bulletiny, oznámení a důležitá upozornění emailem.';
$txt['notify_regularity'] = 'Pro témata a diskuse, kde jsem si vyžádal upozornění, informuj mě';
$txt['notify_regularity_instant'] = 'Okamžitě';
$txt['notify_regularity_first_only'] = 'Okamžitě - ale pouze pro první nepřečtený příspěvek';
$txt['notify_regularity_daily'] = 'Denně';
$txt['notify_regularity_weekly'] = 'Týdně';
$txt['auto_notify'] = 'Zapnout upozornění pro každý příspěvek nebo odpověď.';
$txt['notify_send_types'] = 'Pro témata a diskuse, kde jsem si vyžádal upozornění, posílej mi je jen v případě, že se jedná o';
$txt['notify_send_type_everything'] = 'Odpovědi a moderování';
$txt['notify_send_type_everything_own'] = 'Moderování, pokud jsem založil téma';
$txt['notify_send_type_only_replies'] = 'Pouze odpovědi';
$txt['notify_send_type_nothing'] = 'Nic';
$txt['notify_send_body'] = 'Současně s upozorněním o odpovědi, vlož odpověď do emailu (ale prosím, neodpovídej na takové emaily)';

$txt['notifications_topics'] = 'Současná upozornění na téma';
$txt['notifications_topics_list'] = 'Dostáváš upozornění na následující témata';
$txt['notifications_topics_none'] = 'Nedostáváš žádná upozornění.';
$txt['notifications_topics_howto'] = 'Abys dostával upozornění na téma, klikni na tlačítko &quot;upozornění&quot; při čtení tématu.';
$txt['notifications_boards'] = 'Současná upozornění na diskusi';
$txt['notifications_boards_list'] = 'Dostáváš upozornění na nová témata v těchto diskusích';
$txt['notifications_boards_none'] = 'Nedostáváš žádná upozornění.';
$txt['notifications_boards_howto'] = 'Abys dostával upozornění na diskusi, klikni na tlačítko &quot;upozornění&quot; v indexu dané diskuse.';
$txt['notifications_update'] = 'Odhlásit';

$txt['statPanel_showStats'] = 'Statistiky uživatele ';
$txt['statPanel_users_votes'] = 'Počet hlasů';
$txt['statPanel_users_polls'] = 'Počet založených anket';
$txt['statPanel_total_time_online'] = 'Celkový čas strávený online';
$txt['statPanel_noPosts'] = 'Nemáš žádné příspěvky!';
$txt['statPanel_generalStats'] = 'Základní statistiky';
$txt['statPanel_posts'] = 'příspěvků';
$txt['statPanel_topics'] = 'témat';
$txt['statPanel_total_posts'] = 'Všech příspěvků';
$txt['statPanel_total_topics'] = 'Všech založených témat';
$txt['statPanel_votes'] = 'hlasů';
$txt['statPanel_polls'] = 'anket';
$txt['statPanel_topBoards'] = 'Nejoblíbenější diskuse podle příspěvků';
$txt['statPanel_topBoards_posts'] = '%1$d příspěvků z %2$d příspěvků diskuse (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d příspěvků z %2$d příspěvků uživatele (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Nejoblíbenější diskuse podle aktivity';
$txt['statPanel_activityTime'] = 'Aktivita podle času';
$txt['statPanel_activityTime_posts'] = '%1$d příspěvků (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Hodiny';

$txt['deleteAccount_warning'] = 'Pozor - tyto akce jsou nevratné!';
$txt['deleteAccount_desc'] = 'Zde můžeš smazat účet uživatele a jeho příspěvky.';
$txt['deleteAccount_member'] = 'Smaž účet tohoto uživatele';
$txt['deleteAccount_posts'] = 'Příspěvky uživatele, které mají být smazány';
$txt['deleteAccount_none'] = 'Žádné';
$txt['deleteAccount_all_posts'] = 'Všechny příspěvky';
$txt['deleteAccount_topics'] = 'Témata a příspěvky';
$txt['deleteAccount_confirm'] = 'Jsi si zcela jistý, že chceš smazat tohoto uživatele?';
$txt['deleteAccount_approval'] = 'Vem prosím na vědomí, že moderátoři musí smazání účtu schválit.';

$txt['profile_of_username'] = 'Profil uživ. %1$s';
$txt['profileInfo'] = 'Informace o profilu';
$txt['showPosts'] = 'Zobrazit příspěvky';
$txt['showPosts_help'] = 'V této sekci lze prohlížet všechny příspěvky napsané tímto uživatelem. Uvidíš pouze příspěvky ze sekcí, kam máš přístup.';
$txt['showMessages'] = 'Zprávy';
$txt['showTopics'] = 'Témata';
$txt['showAttachments'] = 'Přílohy';
$txt['statPanel'] = 'Zobrazit statistiky';
$txt['editBuddyIgnoreLists'] = 'Seznam přátel/ignorací';
$txt['editBuddies'] = 'Editovat seznam přátel';
$txt['editIgnoreList'] = 'Editovat seznam ignorací';
$txt['trackUser'] = 'Sledovat uživatele';
$txt['trackActivity'] = 'Aktivita';
$txt['trackIP'] = 'Sledovat IP';

$txt['authentication'] = 'Autentikace';
$txt['change_authentication'] = 'V této sekci si můžeš vybrat, jak se budeš přihlašovat na fórum. Buď pomocí účtu OpenID nebo pomocí jména a hesla.';

$txt['profileEdit'] = 'Modifikace profilu';
$txt['account_info'] = 'Toto jsou nastavení tvého účtu. Tato strana obsahuje všechny důležité údaje, které tě identifikují na tomto fóru. Z bezpečnostních důvodů budeš muset zadat své současné heslo k potvrzení změn.';
$txt['forumProfile_info'] = 'Zde můžeš změnit informace o své osobě. Tyto informace se budou zobrazovat na fóru ' . $context['forum_name'] . '. Pokud si myslíš, že některá informace je příliš citlivá, prostě ji přeskoč.';
$txt['theme'] = 'Nastavení vzhledu';
$txt['theme_info'] = 'Tato část ti umožní nastavit vzhled fóra.';
$txt['notification'] = 'Upozornění a email';
$txt['notification_info'] = 'Je možno dostávat upozornění na odpovědi příspěvků, nová témata a oznámení. Nastavení můžeš měnit buď tady, nebo v jednotlivých tématech nebo fórech.';
$txt['groupmembership'] = 'Členství ve skupinách';
$txt['groupMembership_info'] = 'V této sekci profilu si můžeš změnit členství ve skupinách, kam patříš.';
$txt['ignoreboards'] = 'Nastavení ignorování diskusí';
$txt['ignoreboards_info'] = 'Zde si můžeš nastavit ignorování vybraných diskusí. Když je diskuse ignorovaná, nebude se ti zobrazovat jako nepřečtená na indexu. Nové příspěvky v ní se ti nebudou zobrazovat při výběru nepřečtených příspěvků. Ignorované diskuse stále zůstanou na hlavním indexu a při vstupu do nich uvidíš nepřečtené příspěvky. Vyhledávání nepřečtených odpovědí bere v potaz i odpovědi v ignorovaných diskusích.';
$txt['pmprefs'] = 'Nastavení soukromých zpráv';

$txt['profileAction'] = 'Akce';
$txt['deleteAccount'] = 'Smazat účet';
$txt['profileSendIm'] = 'Poslat soukromou zprávu';
$txt['profile_sendpm_short'] = 'Poslat SZ';

$txt['profileBanUser'] = 'Zakázat uživatele';

$txt['display_name'] = 'Viditelné jméno';
$txt['enter_ip'] = 'Zadej IP (rozsah)';
$txt['errors_by'] = 'Chybová hlášení uživatele';
$txt['errors_desc'] = 'Následuje seznam všech posledních chyb, které vygeneroval tento uživatel.';
$txt['errors_from_ip'] = 'Chybová hlášení z IP adresy (rozsahu)';
$txt['errors_from_ip_desc'] = 'Níže je seznam všech posledních chybových hlášení generovaných z této IP (rozsahu).';
$txt['ip_address'] = 'IP adresa';
$txt['ips_in_errors'] = 'IP adresy použité v chybových hlášeních';
$txt['ips_in_messages'] = 'IP adresy použité v čerstvých příspěvcích';
$txt['members_from_ip'] = 'Hlášení z IP adresy (rozsahu)';
$txt['members_in_range'] = 'Uživatelé pravděpodobně ve stejném rozsahu IP';
$txt['messages_from_ip'] = 'Příspěvky poslané z IP adresy (rozsahu)';
$txt['messages_from_ip_desc'] = 'Níže je seznam příspěvků poslaných z této IP (adresy).';
$txt['most_recent_ip'] = 'Nejnovější IP adresy';
$txt['why_two_ip_address'] = 'Proč jsou zobrazené dvě IP adresy?';
$txt['no_errors_from_ip'] = 'Žádná chybová hlášení z této IP';
$txt['no_errors_from_user'] = 'Žádná chybová hlášení zadaného uživatele';
$txt['no_members_from_ip'] = 'Žádní uživatelé z této IP';
$txt['no_messages_from_ip'] = 'Žádná hlášení z této IP';
$txt['none'] = 'Žádné';
$txt['own_profile_confirm'] = 'Opravdu chceš smazat vlastní účet?';
$txt['view_ips_by'] = 'Zobrazit IP adresy uživatele';

$txt['avatar_will_upload'] = 'Nahraju si vlastní obrázek';

$txt['activate_changed_email_title'] = 'Změněná emailová adresa';
$txt['activate_changed_email_desc'] = 'Změnil sis emailovou adresu. Aby mohla být ověřena její platnost, obdržíš email. Klikni na odkaz v emailu, abys znovu aktivoval svůj účet.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Nebylo možno poslat upozorňovací email.';
$txt['send_email'] = 'Pošli email uživateli';
$txt['to_ask_password'] = 'zeptat se na tvé autentikační detaily';

$txt['user_email'] = 'Uživ. jméno/Email';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nové heslo pro ' . $context['forum_name'];
$txt['reminder_mail'] = 'Tento mail jsi dostal, protože na fóru byl použit odkaz \'Zapomněl jsi heslo\'. Aby sis mohl nastavit nové heslo, klikni na následující odkaz';
$txt['reminder_sent'] = 'Na tvou adresu byl zaslán email. Klikni na odkaz, který obsahuje, aby sis mohl nastavit nové heslo.';
$txt['reminder_openid_sent'] = 'Tvá OpenID identita byla zaslána na tvou emailovou adresu.';
$txt['reminder_set_password'] = 'Nastavit heslo';
$txt['reminder_password_set'] = 'Heslo nastaveno';
$txt['reminder_error'] = 'Uživatel %s neodpověděl správně na svou tajnou otázku, když se snažil změnit zapomenuté heslo.';

$txt['registration_not_approved'] = 'Lituji, ale tento účet nebyl ještě schválen. Pokud si chceš změnit svou emailovou adresu, klikni';
$txt['registration_not_activated'] = 'Lituji, ale tento účet nebyl ještě aktivován. Pokud si chceš nechat znovu zaslat aktivační mail, klikni';

$txt['primary_membergroup'] = 'Primární skupina';
$txt['additional_membergroups'] = 'Další skupiny';
$txt['additional_membergroups_show'] = '[ zobraz další skupiny ]';
$txt['no_primary_membergroup'] = '(žádná primární skupina)';
$txt['deadmin_confirm'] = 'Jsi si jistý, že si chceš natrvalo odstranit svůj status administrátora?';

$txt['account_activate_method_2'] = 'Účet vyžaduje reaktivaci v případě změny emailu';
$txt['account_activate_method_3'] = 'Účet ještě není schválen';
$txt['account_activate_method_4'] = 'Účet čeká na schválení smazání';
$txt['account_activate_method_5'] = 'Účet čeká na schválení kvůli nízkému věku';
$txt['account_not_activated'] = 'Účet není aktivován';
$txt['account_activate'] = 'aktivovat';
$txt['account_approve'] = 'schválit';
$txt['user_is_banned'] = 'Uživatel má právě zákaz';
$txt['view_ban'] = 'Zobrazit';
$txt['user_banned_by_following'] = 'Uživatel má právě tyto zákazy';
$txt['user_cannot_due_to'] = 'Uživatel (se) nemůže %s, kvůli tomuto zákazu: &quot;%s&quot;';
$txt['ban_type_post'] = 'přispívat';
$txt['ban_type_register'] = 'registrovat';
$txt['ban_type_login'] = 'přihlašovat';
$txt['ban_type_access'] = 'navštěvovat fórum';

$txt['show_online'] = 'Ukázat ostatním svůj online status?';

$txt['return_to_post'] = 'Vrátit se zpět na téma po zadání příspěvku.';
$txt['no_new_reply_warning'] = 'Nevarovat na nové odpovědi během posílání příspěvku.';
$txt['posts_apply_ignore_list'] = 'Nezobrazovat zprávy uživatelů z mého listu ignorací.';
$txt['recent_posts_at_top'] = 'Zobrazovat nejnovější příspěvky nahoře.';
$txt['recent_pms_at_top'] = 'Zobrazovat nejnovější soukromé zprávy nahoře.';
$txt['wysiwyg_default'] = 'Zobrazování WYSIWYG editoru jako výchozího.';

$txt['timeformat_default'] = '(Výchozí nastavení)';
$txt['timeformat_easy1'] = 'Měsíc Den, Rok, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Měsíc Den, Rok, HH:MM:SS (armádní čas)';
$txt['timeformat_easy3'] = 'RRRR-MM-DD, HH:MM:SS';
$txt['timeformat_easy4'] = 'DD Měsíc RRRR, HH:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-RRRR, HH:MM:SS';

$txt['poster'] = 'Uživatel';

$txt['board_desc_inside'] = 'Zobrazovat popis diskuse uvnitř diskuse.';
$txt['show_children'] = 'Zobrazovat pod-diskuse na každé stránce diskuse, nikoli jen na první.';
$txt['use_sidebar_menu'] = 'Používat menu vlevo pokud je to možné.';
$txt['show_no_avatars'] = 'Nezobrazovat avatary ostatních uživatelů.';
$txt['show_no_signatures'] = 'Nezobrazovat podpisy ostatních uživatelů.';
$txt['show_no_censored'] = 'Neprovádět cenzuru.';
$txt['topics_per_page'] = 'Témat na stránku:';
$txt['messages_per_page'] = 'Příspěvků na stránku:';
$txt['per_page_default'] = 'výchozí nastavení fóra';
$txt['calendar_start_day'] = 'První den týdne v kalendáři';
$txt['display_quick_reply'] = 'Zobrazovat rychlou odpověď při zobrazení tématu: ';
$txt['display_quick_reply1'] = 'nezobrazovat';
$txt['display_quick_reply2'] = 'zobrazovat sbalenou';
$txt['display_quick_reply3'] = 'zobrazovat rozbalenou';
$txt['display_quick_mod'] = 'Zobrazovat rychlou moderaci v indexu zpráv jako ';
$txt['display_quick_mod_none'] = 'nezobrazovat.';
$txt['display_quick_mod_check'] = 'zaškrtávátka.';
$txt['display_quick_mod_image'] = 'ikony.';

$txt['whois_title'] = 'Vyhledat IP adresu na regionálním whois serveru';
$txt['whois_afrinic'] = 'AfriNIC (Afrika)';
$txt['whois_apnic'] = 'APNIC (Asie a Tichomoří)';
$txt['whois_arin'] = 'ARIN (Severní Amerika, část Karibiku a subsaharská Afrika)';
$txt['whois_lacnic'] = 'LACNIC (Latinská Amerika a Karibik)';
$txt['whois_ripe'] = 'RIPE (Evropa, Střední Východ a části Afriky a Asie)';

$txt['moderator_why_missing'] = 'proč tu není moderátor?';
$txt['username_change'] = 'změnit';
$txt['username_warning'] = 'Abys mohl změnit jméno uživatele, fórum musí vymazat i jeho heslo, které pak bude uživateli zasláno emailem i s novým uživatelským jménem.';

$txt['show_member_posts'] = 'Zobrazit příspěvky uživatele';
$txt['show_member_topics'] = 'Zobrazit témata uživatele';
$txt['show_member_attachments'] = 'Zobrazit přílohy uživatele';
$txt['show_posts_none'] = 'Nebyly napsány žádné příspěvky.';
$txt['show_topics_none'] = 'Nebyla napsána žádná témata.';
$txt['show_attachments_none'] = 'Nebyly poslány žádné přílohy.';
$txt['show_attach_filename'] = 'Soubor';
$txt['show_attach_downloads'] = 'Stažení';
$txt['show_attach_posted'] = 'Posláno';

$txt['showPermissions'] = 'Zobrazit práva';
$txt['showPermissions_status'] = 'Stav práv';
$txt['showPermissions_help'] = 'V této sekci lze prohlédnout všecna oprávnění tohoto uživatele (zakázaná oprávnění jsou <del>přeškrtnutá</del>).';
$txt['showPermissions_given'] = 'Uděleno';
$txt['showPermissions_denied'] = 'Zakázáno';
$txt['showPermissions_permission'] = 'Právo (zakázaná práva jsou <del>přeškrtnutá</del>)';
$txt['showPermissions_none_general'] = 'Tento uživatel nemá nastavena žádná obecná práva.';
$txt['showPermissions_none_board'] = 'Tento uživatel nemá žádná práva specifická pro diskuse.';
$txt['showPermissions_all'] = 'Jako administrátor, tento uživatel má všechna práva.';
$txt['showPermissions_select'] = 'Specifická práva diskuse';
$txt['showPermissions_general'] = 'Obecná práva';
$txt['showPermissions_global'] = 'Všechna fóra';
$txt['showPermissions_restricted_boards'] = 'Zakázané diskuse';
$txt['showPermissions_restricted_boards_desc'] = 'Tyto diskuse jsou pro tohoto uživatele zakázané';

$txt['local_time'] = 'Lokální čas';
$txt['posts_per_day'] = 'denně';

$txt['buddy_ignore_desc'] = 'V této oblasti můžeš spravovat své seznamy přátel a ignorací. Přidáním uživatelů do těchto seznamů umožní, mimo jiné, kontrolovat úroveň počtu emailů a soukromých zpráv podle tvých nastavení.';

$txt['buddy_add'] = 'Přidat do přátel';
$txt['buddy_remove'] = 'Odebrat z přátel';
$txt['buddy_add_button'] = 'Přidat';
$txt['no_buddies'] = 'Tvůj seznam přátel je prázdný';

$txt['ignore_add'] = 'Přidat to ignorací';
$txt['ignore_remove'] = 'Odebrat z ignorací';
$txt['ignore_add_button'] = 'Přidat';
$txt['no_ignore'] = 'Tvůj seznam ignorací je prázdný';

$txt['regular_members'] = 'Registrovaní členové';
$txt['regular_members_desc'] = 'Každý uživatel fóra je členem této skupiny.';
$txt['group_membership_msg_free'] = 'Tvé členství ve skupině bylo uloženo.';
$txt['group_membership_msg_request'] = 'Tvá žádost byla odeslána, prosím počkej, než bude žádost zvážena.';
$txt['group_membership_msg_primary'] = 'Tvá primární skupina byla uložena';
$txt['current_membergroups'] = 'Současné skupiny';
$txt['available_groups'] = 'Možné skupiny';
$txt['join_group'] = 'Přidat ke skupině';
$txt['leave_group'] = 'Opustit skupinu';
$txt['request_group'] = 'Vyžádat členství';
$txt['approval_pending'] = 'Probíhá schvalování';
$txt['make_primary'] = 'Nastavit jako primární';

$txt['request_group_membership'] = 'Vyžádat členství ve skupině';
$txt['request_group_membership_desc'] = 'Než můžeš vstoupit do této skupiny, tvé členství musí schválit moderátor. Prosím, sděl mu důvod své žádosti';
$txt['submit_request'] = 'Odeslat žádost';

$txt['profile_updated_own'] = 'Tvůj profil byl úspěšně uložen.';
$txt['profile_updated_else'] = 'Profil uživatele %1$s byl úspěšně uložen.';

$txt['profile_error_signature_max_length'] = 'Tvůj podpis nemůže být delší než %1$d znaků';
$txt['profile_error_signature_max_lines'] = 'Tvůj podpis nemůže přesahovat %1$d řádek';
$txt['profile_error_signature_max_image_size'] = 'Obrázky ve tvém podpisu nesmí být větší než %1$dx%2$d pixelů';
$txt['profile_error_signature_max_image_width'] = 'Obrázky ve tvém podpisu nesmí být širší než %1$d pixelů';
$txt['profile_error_signature_max_image_height'] = 'Obrázky ve tvém podpisu nesmí být vyšší než %1$d pixelů';
$txt['profile_error_signature_max_image_count'] = 'Nemůžeš mít víc než %1$d obrázků ve tvém podpisu';
$txt['profile_error_signature_max_font_size'] = 'Text ve tvém podpisu musí být menší velikosti než %1$s';
$txt['profile_error_signature_allow_smileys'] = 'Nesmíš mít žádné emotikony ve svém podpisu';
$txt['profile_error_signature_max_smileys'] = 'Nemůžeš mít víc než %1$d emotikonů ve svém podpisu';
$txt['profile_error_signature_disabled_bbc'] = 'Následující BBC není povolen ve tvém podpisu: %1$s';

$txt['profile_view_warnings'] = 'Zobrazit varování';
$txt['profile_issue_warning'] = 'Varovat';
$txt['profile_warning_level'] = 'Úroveň varování';
$txt['profile_warning_desc'] = 'V této sekci lze upravovat uživatelovu úroveň varování a poslat jim i psané varování. Lze také sledovat historii varování a efekty způsobené úrovní varování podle administrátorských nastavení.';
$txt['profile_warning_name'] = 'Uživatel';
$txt['profile_warning_impact'] = 'Výsledek';
$txt['profile_warning_reason'] = 'Důvod varování';
$txt['profile_warning_reason_desc'] = 'Je to vyžadováno a bude zaznamenáno.';
$txt['profile_warning_effect_none'] = 'Žádný.';
$txt['profile_warning_effect_watch'] = 'Uživatel bude v seznamu dozoru.';
$txt['profile_warning_effect_own_watched'] = 'Jsi v seznamu dozoru.';
$txt['profile_warning_is_watch'] = 'sledován';
$txt['profile_warning_effect_moderation'] = 'Všechny uživatelovy příspěvky budou moderovány.';
$txt['profile_warning_effect_own_moderated'] = 'Všechny tvé příspěvky budou moderovány.';
$txt['profile_warning_is_moderation'] = 'příspěvky jsou moderovány';
$txt['profile_warning_effect_mute'] = 'Uživatel nebude moci přispívat.';
$txt['profile_warning_effect_own_muted'] = 'Nebudeš moci přispívat.';
$txt['profile_warning_is_muted'] = 'nemůže přispívat';
$txt['profile_warning_effect_text'] = 'Úroveň >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Poslat upozornění';
$txt['profile_warning_notify_template'] = 'Vybrat šablonu:';
$txt['profile_warning_notify_subject'] = 'Předmět upozornění';
$txt['profile_warning_notify_body'] = 'Text upozornění';
$txt['profile_warning_notify_template_subject'] = 'Bylo ti uděleno varování';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Bylo ti uděleno varování za %1$s. Prosím, zdrž se do budoucna těchto aktivit, nebo budeme muset přistoupit k dalším opatřením.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Bylo ti uděleno varování za %1$s ve spojitosti s tímto příspěvkem:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Prosím, zdrž se do budoucna těchto aktivit, nebo budeme muset přistoupit k dalším opatřením.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'spamování';
$txt['profile_warning_notify_title_spamming'] = 'Spam';
$txt['profile_warning_notify_for_offence'] = 'posílání nevhodného obsahu';
$txt['profile_warning_notify_title_offence'] = 'posílání nevhodného obsahu';
$txt['profile_warning_notify_for_insulting'] = 'urážení uživatelů nebo moderátorů';
$txt['profile_warning_notify_title_insulting'] = 'Urážení uživatelů/týmu';
$txt['profile_warning_issue'] = 'Varovat';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Můžeš změnit úroveň varování jen o %1$d%% bodů za 24 hodin.';
$txt['profile_warning_errors_occured'] = 'Varování nebyl odesláno kvůli následujícím chybám';
$txt['profile_warning_success'] = 'Varování úspěšně uděleno';
$txt['profile_warning_new_template'] = 'Nová šablona';

$txt['profile_warning_previous'] = 'Předchozí varování';
$txt['profile_warning_previous_none'] = 'Tento uživatel ještě neměl varování.';
$txt['profile_warning_previous_issued'] = 'Vydal';
$txt['profile_warning_previous_time'] = 'Čas';
$txt['profile_warning_previous_level'] = 'Bodů';
$txt['profile_warning_previous_reason'] = 'Důvod';
$txt['profile_warning_previous_notice'] = 'Zobrazit odeslané upozornění';

$txt['viewwarning'] = 'Zobrazit varování';
$txt['profile_viewwarning_for_user'] = 'Varování pro %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Žádná varování ještě nebyla udělena.';
$txt['profile_viewwarning_desc'] = 'Níže je přehled varování, která byla udělena administračním týmem.';
$txt['profile_viewwarning_previous_warnings'] = 'Předchozí varování';
$txt['profile_viewwarning_impact'] = 'Závažnost varování';

$txt['subscriptions'] = 'Předplatné';

$txt['pm_settings_desc'] = 'Z této stránky můžeš měnit různá nastavení soukromých zpráv, včetně toho, jak mají být zobrazeny a kdo ti je může posílat.';
$txt['email_notify'] = 'Upozornit emailem, kdykoli dostaneš soukromou zprávu:';
$txt['email_notify_never'] = 'Nikdy';
$txt['email_notify_buddies'] = 'Jen od přátel';
$txt['email_notify_always'] = 'Vždy';

$txt['pm_receive_from'] = 'Dostávat soukromé zprávy od:';
$txt['pm_receive_from_everyone'] = 'Všech';
$txt['pm_receive_from_ignore'] = 'Všech, kromě těch z listu ignorací';
$txt['pm_receive_from_admins'] = 'Admininstrátorů';
$txt['pm_receive_from_buddies'] = 'Přátel a administrátorů';

$txt['copy_to_outbox'] = 'Uložit kopii každé soukromé zprávy do složky pro odeslání.';
$txt['popup_messages'] = 'Zobrazit okno, když obdržíš novou soukromou zprávu?';
$txt['pm_remove_inbox_label'] = 'Odstranit značku inbox při přidání jiné značky';
$txt['pm_display_mode'] = 'Zobrazovat soukromé zprávy';
$txt['pm_display_mode_all'] = 'Všechny najednou';
$txt['pm_display_mode_one'] = 'Po jedné';
$txt['pm_display_mode_linked'] = 'Jako konverzaci';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Aby bylo možno zcela využít toto nastavení, doporučujeme, abys zapnul &quot;Uložit kopii každé soukromé zprávy do složky pro odeslání&quot;\\n\\nTo zajistí, že uvidíš úplný tok diskuse, protože budou vidět obě strany konverzace.';

$txt['tracking'] = 'Sledování';
$txt['tracking_description'] = 'V této sekci lze sledovat akce provedené v profilu uživatele a také sledovat jeho IP adresu.';

$txt['trackEdits'] = 'Editace profilu';
$txt['trackEdit_deleted_member'] = 'Smazání uživatele';
$txt['trackEdit_no_edits'] = 'Tento uživatel ještě neprovedl žádné změny.';
$txt['trackEdit_action'] = 'Položka';
$txt['trackEdit_before'] = 'Hodnota před';
$txt['trackEdit_after'] = 'Hodnota po';
$txt['trackEdit_applicator'] = 'Změnil';

$txt['trackEdit_action_real_name'] = 'Jméno uživatele';
$txt['trackEdit_action_usertitle'] = 'Vlastní titulek';
$txt['trackEdit_action_member_name'] = 'Jméno';
$txt['trackEdit_action_email_address'] = 'Emailová adresa';
$txt['trackEdit_action_id_group'] = 'Primární skupina';
$txt['trackEdit_action_additional_groups'] = 'Další skupiny';

?>
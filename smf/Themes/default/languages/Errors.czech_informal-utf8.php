<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Nemáš přístup do této sekce';
$txt['wireless_error_notyet'] = 'Lituji, ale tato sekce není pro mobilní uživatele v dané chvíli dostupná.';

$txt['mods_only'] = 'Pouze moderátoři mohou přímo odstraňovat zprávy, tuto zprávu můžeš odstranit pomocí funkce &quote;Změnit&quote;.';
$txt['no_name'] = 'Nevyplnil jsi jméno. Je to povinné.';
$txt['no_email'] = 'Nevyplnil jsi email. Je to povinné.';
$txt['topic_locked'] = 'Téma je zamčené, nemáš dost práv do něj přispívat nebo měnit zprávy...';
$txt['no_password'] = 'Pole pro heslo je prázdné';
$txt['already_a_user'] = 'Jméno, které ses snažil použít, již existuje.';
$txt['cant_move'] = 'Nemáš právo přesouvat témata...';
$txt['login_to_post'] = 'Abys mohl přispívat, musíš se přihlásit. Pokud ještě nemáš účet, <a href="' . $scripturl . '?action=register">zaregistruj</a> se.';
$txt['passwords_dont_match'] = 'Hesla nejsou stejná.';
$txt['register_to_use'] = 'Než budeš moci použít tuto funkci, musíš se zaregistrovat.';
$txt['password_invalid_character'] = 'V hesle byly použity neplatné znaky.';
$txt['name_invalid_character'] = 'Ve jméně byly použity neplatné znaky.';
$txt['email_invalid_character'] = 'V emailu byly použity neplatné znaky.';
$txt['username_reserved'] = 'Uživatelské jméno, které jsi zkusil, obsahuje zakázané jméno \'%1$s\'. Prosím, zkus jiné jméno.';
$txt['numbers_one_to_nine'] = 'Do tohoto pole lze zadat pouze čísla 0-9';
$txt['not_a_user'] = 'Uživatel, jehož profil se pokoušíš prohlížet, neexistuje.';
$txt['not_a_topic'] = 'Toto téma neexistuje.';
$txt['not_approved_topic'] = 'Toto téma ještě nebylo schváleno.';
$txt['email_in_use'] = 'Tato emailová adresa (%1$s) je již používaná registrovaným uživatelem. Pokud si myslíš, že se jedná o chybu, jdi na přihlašovací stránky a použij připomenutí hesla s tímto emailem.';

$txt['didnt_select_vote'] = 'Nezvolil jsi v anketě žádnou možnost.';
$txt['poll_error'] = 'Anketa buď neexistuje, byla zamčena, nebo ses pokusil hlasovat dvakrát.';
$txt['members_only'] = 'Tato volba je přístupná pouze pro registrované členy.';
$txt['locked_by_admin'] = 'Toto bylo zamčeno administrátorem. Nemůžeš to odemknout.';
$txt['not_enough_posts_karma'] = 'Lituji, nemáš dost příspěvků k použití karmy - potřebuješ nejméně %1$d.';
$txt['cant_change_own_karma'] = 'Lituji, ale nemůžeš měnit svoji karmu.';
$txt['karma_wait_time'] = 'Lituji, ale nemůžeš opakovat akci karmy bez čekání %1$s %2$s.';
$txt['feature_disabled'] = 'Lituji, ale tato funkce je vypnutá.';
$txt['cant_access_upload_path'] = 'Není možno přistoupit k adresáři s přílohami!';
$txt['file_too_big'] = 'Tvůj soubor je příliš velký. Maximální velikost přílohy je %1$d KB.';
$txt['attach_timeout'] = 'Při ukládání přílohy nastala chyba, prosím, zkus to znovu.';
$txt['filename_exists'] = 'Lituji, ale toto jméno souboru je již zadané! Prosím, přejmenuj soubor a zkus to znovu.';
$txt['bad_attachment'] = 'Tvá příloha neprošla kontrolou bezpečnosti a nebyla nahrána. Prosím, kontaktuj administrátora.';
$txt['ran_out_of_space'] = 'Adresář pro přílohy je plný. Zkus menší soubor nebo kontaktuj administrátora.';
$txt['couldnt_connect'] = 'Nemohu se spojit se serverem nebo nalézt soubor';
$txt['no_board'] = 'Diskuse, kterou jsi zadal, neexistuje';
$txt['cant_split'] = 'Nemáš oprávnění rozdělovat témata';
$txt['cant_merge'] = 'Nemáš oprávnění slučovat témata';
$txt['no_topic_id'] = 'Zadal jsi neplatný identifikátor tématu.';
$txt['split_first_post'] = 'Nemůžeš rozdělit téma u první zprávy.';
$txt['topic_one_post'] = 'Toto téma obsahuje pouze jednu zprávu a tak nemůže být rozděleno.';
$txt['no_posts_selected'] = 'nebyly vybrány žádné zprávy';
$txt['selected_all_posts'] = 'Není možno provést rozdělení. Vybral jsi všechny příspěvky.';
$txt['cant_find_messages'] = 'Nemohu nalézt příspěvky';
$txt['cant_find_user_email'] = 'Nelze nalézt emailovou adresu uživatele.';
$txt['cant_insert_topic'] = 'Nemohu vložit téma';
$txt['already_a_mod'] = 'Vybral jsi jméno již existujícího moderátora. Vyber jiné jméno';
$txt['session_timeout'] = 'Čas trvání tvého sezení vypršel. Prosím, přihlaš se znovu.';
$txt['session_verify_fail'] = 'Ověření sezení selhalo. Odhlaš se, přihlaš se a zkus to znovu.';
$txt['verify_url_fail'] = 'Nebylo možno ověřit odkazující url. Vrať se zpět a zkus to znovu.';
$txt['guest_vote_disabled'] = 'Hosté nemůžou hlasovat v této anketě.';

$txt['cannot_access_mod_center'] = 'Nemáš oprávnění ke vstupu do centra moderace.';
$txt['cannot_admin_forum'] = 'Nejsi oprávněn administrovat toto fórum.';
$txt['cannot_announce_topic'] = 'Nemáš oprávnění oznamovat témata v této diskusi.';
$txt['cannot_approve_posts'] = 'Nemáš oprávnění schvalovat položky.';
$txt['cannot_post_unapproved_attachments'] = 'Nemáš oprávnění odesílat neschválené přílohy.';
$txt['cannot_post_unapproved_topics'] = 'Nemáš oprávnění zakládat nechválená témata.';
$txt['cannot_post_unapproved_replies_own'] = 'Nemáš oprávnění posílat neschválené příspěvky do svých témat.';
$txt['cannot_post_unapproved_replies_any'] = 'Nemáš oprávnění posílat neschválené příspěvky do cizích témat.';
$txt['cannot_calendar_edit_any'] = 'Nemůžeš měnit události v kalendáři.';
$txt['cannot_calendar_edit_own'] = 'Nemáš dost práv na měnění vlastních událostí.';
$txt['cannot_calendar_post'] = 'Vkládání událostí není povoleno - lituji.';
$txt['cannot_calendar_view'] = 'Lituji, ale nemáš povolení prohlížet kalendář.';
$txt['cannot_remove_any'] = 'V této diskusi není dovoleno mazat žádné téma.';
$txt['cannot_remove_own'] = 'V této diskusi nemáš dovoleno mazat vlastní příspěvky.';
$txt['cannot_edit_news'] = 'V tomto fóru není dovoleno měnit texty novinek.';
$txt['cannot_pm_read'] = 'Lituji, ale nemůžeš si přečíst své soukromé zprávy.';
$txt['cannot_pm_send'] = 'Nemáš povoleno posílání soukromých zpráv.';
$txt['cannot_karma_edit'] = 'Nemáš povoleno měnit karmu ostatním lidem.';
$txt['cannot_lock_any'] = 'Nemáš povolení tu uzamknout žádné libovolné téma.';
$txt['cannot_lock_own'] = 'Je mi líto, ale zde nemůžeš uzamknout vlastní témata.';
$txt['cannot_make_sticky'] = 'Nemáš povoleno připíchnout toto téma.';
$txt['cannot_manage_attachments'] = 'Nemáš povoleno spravovat přílohy nebo avatary.';
$txt['cannot_manage_bans'] = 'Nemáš povoleno měnit seznam zakázaných členů.';
$txt['cannot_manage_boards'] = 'Nemáš povoleno spravovat diskuse a kategorie.';
$txt['cannot_manage_membergroups'] = 'Nemáš oprávnění měnit nebo přiřazovat skupinu členů.';
$txt['cannot_manage_permissions'] = 'Nemáš oprávnění spravovat oprávnění.';
$txt['cannot_manage_smileys'] = 'Nemáš povoleno spravovat emotikony.';
$txt['cannot_mark_any_notify'] = 'Nemáš dostatečná práva k získávání upozornění z tohoto tématu.';
$txt['cannot_mark_notify'] = 'Lituji, ale nemáš povoleno požadovat upozornění z této diskuse.';
$txt['cannot_merge_any'] = 'Nemáš povoleno slučovat témata v jedné ze zvolených diskusí.';
$txt['cannot_moderate_forum'] = 'Nemáš povoleno moderovat toto fórum.';
$txt['cannot_moderate_board'] = 'You are not allowed to moderate this board.';
$txt['cannot_modify_any'] = 'Nemůžeš změnit žádný příspěvek.';
$txt['cannot_modify_own'] = 'Lituji, ale nemáš povoleno měnit vlastní příspěvky.';
$txt['cannot_modify_replies'] = 'Přestože je tento příspěvek odpovědí na tvé téma, nemůžeš jej měnit.';
$txt['cannot_move_own'] = 'Nemáš právo přesunovat vlastní témata v této diskusi.';
$txt['cannot_move_any'] = 'V této diskusi nemáš povoleno přesouvat témata.';
$txt['cannot_poll_add_own'] = 'Lituji, ale v této diskusi nemáš povoleno přidávat anketu k vlastním tématům.';
$txt['cannot_poll_add_any'] = 'Nemáš možnost přidat anketu k tomuto tématu.';
$txt['cannot_poll_edit_own'] = 'Nemůžeš změnit tuto anketu, přestože je tvoje vlastní.';
$txt['cannot_poll_edit_any'] = 'Byl ti zrušen přístup k měnění anket v této diskusi.';
$txt['cannot_poll_lock_own'] = 'V této diskusi nemáš dovoleno zamykat své ankety.';
$txt['cannot_poll_lock_any'] = 'Lituji, ale nemáš dovoleno zamknout žádnou anketu.';
$txt['cannot_poll_post'] = 'V této diskusi nemáš dovoleno vytvářet ankety.';
$txt['cannot_poll_remove_own'] = 'Nemáš povoleno odstranit tuto anketu ze svého tématu.';
$txt['cannot_poll_remove_any'] = 'V této diskusi nemůžeš odstranit žádnou anketu.';
$txt['cannot_poll_view'] = 'V této diskusi nemáš povoleno prohlížet ankety.';
$txt['cannot_poll_vote'] = 'Lituji, ale v této diskusi nemůžeš hlasovat v anketách.';
$txt['cannot_post_attachment'] = 'Nemáš dovoleno zde posílat přílohy.';
$txt['cannot_post_new'] = 'Lituji, v této diskusi nemůžeš založit nové téma.';
$txt['cannot_post_reply_any'] = 'V této diskusi nemáš povoleno odpovídat na příspěvky v tématech.';
$txt['cannot_post_reply_own'] = 'V této diskusi nemáš povoleno odpovídat ani na vlastní témata.';
$txt['cannot_profile_remove_own'] = 'Lituji, ale nemáš povoleno smazat svůj účet.';
$txt['cannot_profile_remove_any'] = 'Nemáš povoleno mazat účty ostatních uživatelů!';
$txt['cannot_profile_extra_any'] = 'Nemáš oprávnění měnit nastavení profilu.';
$txt['cannot_profile_identity_any'] = 'Nemáš dovoleno měnit nastavení účtu.';
$txt['cannot_profile_title_any'] = 'Nemáš dovoleno měnit vlastní titulky ostatních uživatelů.';
$txt['cannot_profile_extra_own'] = 'Lituji, ale nemáš oprávnění potřebné ke změně údajů svého profilu.';
$txt['cannot_profile_identity_own'] = 'Právě teď nemůžeš změnit svou identitu.';
$txt['cannot_profile_title_own'] = 'Nemáš povoleno měnit vlastní titulek.';
$txt['cannot_profile_server_avatar'] = 'Nemáš oprávnění použít místní avatar.';
$txt['cannot_profile_upload_avatar'] = 'Nemáš oprávnění nahrát avatar.';
$txt['cannot_profile_remote_avatar'] = 'Nemáš oprávnění použít vzdálený avatar.';
$txt['cannot_profile_view_own'] = 'Velmi lituji, ale nemůžeš si prohlížet svůj profil.';
$txt['cannot_profile_view_any'] = 'Velmi lituji, ale nemůžeš si prohlížet žádný profil.';
$txt['cannot_delete_own'] = 'V této diskusi nemůžeš vymazat vlastní témata.';
$txt['cannot_delete_replies'] = 'Lituji, ale tyto příspěvky nemůžeš smazat, i když jsou to odpovědi v tvém tématu.';
$txt['cannot_delete_any'] = 'Lituji, ale nemáš právo na vymazání žádného tématu.';
$txt['cannot_report_any'] = 'Nemáš povoleno nahlásit příspěvek z této diskuse.';
$txt['cannot_search_posts'] = 'V tomto fóru nemáš povoleno vyhledávat příspěvky.';
$txt['cannot_send_mail'] = 'Nemáš oprávnění posílat emaily.';
$txt['cannot_issue_warning'] = 'Lituji, ale nemáš oprávnění udělovat varování.';
$txt['cannot_send_topic'] = 'Lituji, ale administrátoři v této diskusi znemožnili zasílání témat.';
$txt['cannot_split_any'] = 'V této diskusi je zakázáno rozdělovat témata.';
$txt['cannot_view_attachments'] = 'Zdá se, že v této diskusi nemáš povoleno prohlížet nebo stahovat přílohy k příspěvkům.';
$txt['cannot_view_mlist'] = 'Nemůžeš si prohlédnout seznam členů, protože k tomu nemáš oprávnění.';
$txt['cannot_view_stats'] = 'Nemáš dovoleno prohlížet statistiky fóra.';
$txt['cannot_who_view'] = 'Lituji - nemáš povolení prohlížet Seznam online uživatelů.';

$txt['no_theme'] = 'Toto téma neexistuje.';
$txt['theme_dir_wrong'] = 'Výchozí adresář vzhledu je špatný, prosím opravte to kliknutím na tento text.';
$txt['registration_disabled'] = 'Lituji, registrace je nyní uzavřena.';
$txt['registration_no_secret_question'] = 'Lituji, tento uživatel si nenastavil tajnou otázku.';
$txt['poll_range_error'] = 'Lituji, anketa musí běžet déle než 0 dní.';
$txt['delFirstPost'] = 'Nemáš oprávnění smazat první příspěvek v tématu. <p>Chceš-li smazat toto téma, klikni na odkaz \'Smazat téma\', nebo požádej moderátora/administrátora, aby to pro tebe udělal.</p>';
$txt['parent_error'] = 'Nelze vytvořit diskusi!';
$txt['login_cookie_error'] = 'Nebylo možné tě přihlásit. Prosím ověř nastavení cookies ve svém prohlížeči.';
$txt['incorrect_answer'] = 'Lituji, ale nezodpověděl jsi svou otázku správně. Klikni na tlačítko \'Zpět\' pro zopakování, nebo klikni zpět dvakrát a použij standardní metodu získání hesla.';
$txt['no_mods'] = 'Moderátoři nenalezeni!';
$txt['parent_not_found'] = 'Špatná struktura diskusí: nelze nalézt nadřazenou diskusi';
$txt['modify_post_time_passed'] = 'Nemůžeš měnit tento příspěvek, protože vypršel čas, po který jej můžeš upravovat.';

$txt['calendar_off'] = 'Teď nemůžeš do kalendáře, protože je vypnutý.';
$txt['invalid_month'] = 'Špatný měsíc.';
$txt['invalid_year'] = 'Špatný rok.';
$txt['invalid_day'] = 'Neplatná hodnota dne.';
$txt['event_month_missing'] = 'Chybí měsíc události.';
$txt['event_year_missing'] = 'Chybí rok události.';
$txt['event_day_missing'] = 'Chybí den události.';
$txt['event_title_missing'] = 'Chybí titulek události.';
$txt['invalid_date'] = 'Špatné datum.';
$txt['no_event_title'] = 'Nebyl zadán titulek události.';
$txt['missing_event_id'] = 'Chybí ID události.';
$txt['cant_edit_event'] = 'Nemáš oprávnění editovat tuto událost.';
$txt['missing_board_id'] = 'Chybí ID diskuse.';
$txt['missing_topic_id'] = 'Chybí ID tématu.';
$txt['topic_doesnt_exist'] = 'Téma neexistuje.';
$txt['not_your_topic'] = 'Nejsi majitel tohoto tématu.';
$txt['board_doesnt_exist'] = 'Diskuse neexistuje.';
$txt['no_span'] = 'Vícedenní události jsou momentálně zakázány.';
$txt['invalid_days_numb'] = 'Špatný počet dní vícedenní události.';

$txt['moveto_noboards'] = 'Nejsou žádné diskuse, kam by se dalo téma přesunout!';

$txt['already_activated'] = 'Tvůj účet byl již aktivován.';
$txt['still_awaiting_approval'] = 'Tvůj účet stále čeká na schválení administrátorem.';

$txt['invalid_email'] = 'Neplatná e-mailová adresa / skupina adres.<br />Příklad správné e-mailové adresy: bill.gates@microsoft.com.<br />Příklad správné skupiny adres: *@*.microsoft.com';
$txt['invalid_expiration_date'] = 'Neplatné datum vypršení';
$txt['invalid_hostname'] = 'Neplatné host name / skupina host name.<br />Příklad správného host name: proxy4.microsoft.com<br />Příklad správné skupiny host name: *.microsoft.com';
$txt['invalid_ip'] = 'Neplatná IP adresa / skupina IP adres.<br />Příklad správné IP adresy: 127.0.0.1<br />Příklad správné skupiny IP adres: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Neplatná IP adresa / skupina IP adres.<br />Příklad správné IP adresy: 127.0.0.1<br />Příklad správné skupiny IP adres: 127.0.0-20.*';
$txt['invalid_username'] = 'Jméno člena nenalezeno';
$txt['no_ban_admin'] = 'Nemůžeš zakázat admina. Nejprve ho musíš zbavit práv!';
$txt['no_bantype_selected'] = 'Nebyl zvolen typ zákazu';
$txt['ban_not_found'] = 'Zákaz nenalezen';
$txt['ban_unknown_restriction_type'] = 'Neznámý typ omezení';
$txt['ban_name_empty'] = 'Jméno zákazu zůstalo prázdné';
$txt['ban_name_exists'] = 'Jméno zákazu (%1$s) již existuje. Prosím vyber jiné jméno.';
$txt['ban_trigger_already_exists'] = 'Metoda zákazu (%1$s) již existuje v %2$s.';

$txt['recycle_no_valid_board'] = 'Pro recyklovaná témata nebyla zvolena platná diskuse';

$txt['login_threshold_fail'] = 'Lituji, ale vyčerpal jsi své pokusy o přihlášení. Zkus to později.';
$txt['login_threshold_brute_fail'] = 'Lituji, ale vyčerpal jsi počet pokusů k přihlášení. Prosím počkej 30 sekund a zkus to znovu.';

$txt['who_off'] = 'Teď nemůžeš prohlížet Kdo je online, protože je stránka vypnutá.';

$txt['merge_create_topic_failed'] = 'Chyba při vytváření nového tématu.';
$txt['merge_need_more_topics'] = 'Slučování témat požaduje alespoň dvě témata ke sloučení.';

$txt['postWaitTime_broken'] = 'Poslední příspěvek z tvé IP adresy byl odeslán před méně než %1$d sekundami. Prosím, zkus to znovu později.';
$txt['registerWaitTime_broken'] = 'Právě před %d sekundami jsi se zaregistroval!';
$txt['loginWaitTime_broken'] = 'Budeš muset čekat asi %d sekund, než se budeš moci přihlásit znovu.';
$txt['pmWaitTime_broken'] = 'Poslední soukromá zpráva z tvé IP adresy byla poslána méně než před %1$d sekundami. Prosím, zkus to znovu později.';
$txt['reporttmWaitTime_broken'] = 'Poslední nahlášení tématu z tvé IP adresy bylo odesláno méně než před %1$d sekundami. Prosím, zkus to znovu později.';
$txt['sendtopcWaitTime_broken'] = 'Poslední téma z tvé IP adresy bylo založeno před méně než %1$d sekundami. Prosím, zkus to znovu později.';
$txt['sendmailWaitTime_broken'] = 'Poslední email z tvé IP adresy byl odeslán před méně než %1$d sekundami. Prosím, zkus to znovu později.';
$txt['searchWaitTime_broken'] = 'Poslední vyhledávání z tvé IP adresy bylo provedeno před méně než %1$d sekundami. Prosím, zkus to znovu později.';

$txt['email_missing_data'] = 'Musíš něco napsat do kolonek předmět i zpráva.';

$txt['topic_gone'] = 'Téma nebo diskuse, které hledáš buď chybí, nebo leží mimo tvé možnosti.';
$txt['theme_edit_missing'] = 'Soubor, který se snažíš editovat, není možné najít!';

$txt['attachments_no_write'] = 'Adresář pro ukládání příloh není otevřen pro zápis. Tvá příloha nebo avatar nemohly být uloženy';
$txt['attachments_limit_per_post'] = 'Nemůžeš nahrát více než %d příloh v jednom příspěvku';

$txt['no_dump_database'] = 'Pouze administrátoři mohou zálohovat databázi!';
$txt['pm_not_yours'] = 'Soukromá zpráva, kterou chceš citovat buď není tvoje, nebo neexistuje. Použij tlačítko Zpět a zkus to znovu.';
$txt['mangled_post'] = 'Údaje z formuláře se pokazily. Prosím použij tlačítko Zpět a zkus to znovu';
$txt['quoted_post_deleted'] = 'Příspěvek, ze kterého se snažíš citovat, buď neexistuje, nebo byl smazán nebo jej nemůžeš vidět.';
$txt['pm_too_many_per_hour'] = 'Přesáhl jsi hranici %1$d soukromých zpráv za hodinu.';
$txt['labels_too_many'] = 'Lituji, %1$s zpráv má již maximální počet povolených značek!';

$txt['register_only_once'] = 'Lituji, ale nemůžeš si registrovat více účtů v jeden čas z jednoho počítače.';
$txt['admin_setting_coppa_require_contact'] = 'Musíš zadat poštovní nebo faxový kontakt, když je vyžadován souhlas rodičů/zákonných zástupců.';

$txt['error_long_name'] = 'Jméno které jsi chtěl použít bylo moc dlouhé.';
$txt['error_no_name'] = 'Nebylo zadáno jméno.';
$txt['error_bad_name'] = 'Zadané jméno nejde použít, protože obsahuje rezervované jméno.';
$txt['error_no_email'] = 'Nebyla zadána e-mailová adresa.';
$txt['error_bad_email'] = 'Byla zadána neplatná e-mailová adresa.';
$txt['error_no_event'] = 'Nebylo zadáno jméno události.';
$txt['error_no_subject'] = 'Nebyl vyplněn předmět.';
$txt['error_no_question'] = 'V této anketě nebyla zadána otázka.';
$txt['error_no_message'] = 'Tělo zprávy zůstalo prázdné.';
$txt['error_long_message'] = 'Zpráva přesáhla maximální povolenou délku (' . $modSettings['max_messageLength'] . ' znaků).';
$txt['error_no_comment'] = 'Kolonka komentář zůstala nevyplněna.';
$txt['error_session_timeout'] = 'Tvé sezení vypršelo, zatímco jsi psal příspěvek. Prosím zkus jej zaslat znovu.';
$txt['error_no_to'] = 'Nebyli zadáni adresáti.';
$txt['error_bad_to'] = 'Jeden nebo více adresátů (\'komu\') nebylo nalezeno.';
$txt['error_bad_bcc'] = 'Jeden nebo více adresátů (\'bcc\') nebylo nalezeno.';
$txt['error_form_already_submitted'] = 'Již jsi tento příspěvek poslal!  Možná jsi nedopatřením klikl dvakrát, nebo se pokusil obnovit okno.';
$txt['error_poll_few'] = 'Musíš zadat nejméně dvě možnosti!';
$txt['error_need_qr_verification'] = 'Prosím, vyplň oveřovací sekci níže, abys mohl dokončit svůj příspěvek.';
$txt['error_wrong_verification_code'] = 'Písmena, která jsi zadal, neodpovídají těm na obrázku.';
$txt['error_wrong_verification_answer'] = 'You did not answer the verification questions correctly.';
$txt['error_need_verification_code'] = 'Please enter the verification code below to continue to the results.';
$txt['error_bad_file'] = 'Sorry but the file specified could not be opened: %1$s';
$txt['error_bad_line'] = 'The line you specified is invalid.';

$txt['smiley_not_found'] = 'Emotikon nenalezen.';
$txt['smiley_has_no_code'] = 'Tomuto emotikonu nebyl přiřazen žádný kód.';
$txt['smiley_has_no_filename'] = 'Nebylo zadáno jméno souboru pro tento emotikon.';
$txt['smiley_not_unique'] = 'Emotikon s tímto kódem již existuje.';
$txt['smiley_set_already_exists'] = 'Sada emotikonů s tímto URL již existuje';
$txt['smiley_set_not_found'] = 'Sada emotikonů nenalezena';
$txt['smiley_set_path_already_used'] = 'URL sady emotikonů je již používáno jinou sadou.';
$txt['smiley_set_unable_to_import'] = 'Nelze importovat sadu emotikonů. Buď je adresář neplatný, nebo je nepřístupný.';

$txt['smileys_upload_error'] = 'Nepodařilo se nahrát soubor.';
$txt['smileys_upload_error_blank'] = 'Všechny sady emotikonů musí mít obrázek!';
$txt['smileys_upload_error_name'] = 'Všechny emotikony musí mít stejný název souboru!';
$txt['smileys_upload_error_illegal'] = 'Nepodporovaný typ.';

$txt['search_invalid_weights'] = 'Váhy pro vyhledávání nejsou správně nakonfigurovány. Nejméně jedna váha musí být nenulová. Prosím nahlas tuto chybu administrátorovi.';
$txt['unable_to_create_temporary'] = 'Vyhledávání nemohlo vytvořit dočasné tabulky. Prosím nahlas tuto chybu administrátorovi.';

$txt['package_no_file'] = 'Nemůžu najít soubor s balíčkem!';
$txt['packageget_unable'] = 'Spojení se serverem se nezdařilo. Prosím, zkus <a href="%s" target="_blank">toto URL</a>.';
$txt['not_on_simplemachines'] = 'Lituji, ale takovéto balíčky se dají stahovat pouze ze serveru simplemachines.org.';
$txt['package_cant_uninstall'] = 'Tento balíček buď nikdy nebyl nainstalován nebo už byl odinstalován - takže teď odinstalovat nejde.';
$txt['package_cant_download'] = 'Nemůžeš stahovat nebo instalovat nové balíčky, protože adresář Packages nemá práva zápisu!';
$txt['package_upload_error_nofile'] = 'Nevybral jsi žádný balíček k nahrání.';
$txt['package_upload_error_failed'] = 'Nemůžu nahrát balíček, zkontroluj práva adresáře!';
$txt['package_upload_error_exists'] = 'Soubor, který nahráváš, už na serveru existuje. Prosím, nejdříve ho smaž a pak to zkus znovu.';
$txt['package_upload_error_supports'] = 'Správce balíčků v současnosti podporuje pouze tyto typy souborů: %1$s.';
$txt['package_upload_error_broken'] = 'Nahrání balíčku selhalo kvůli této chybě:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'The package you are trying to install cannot be located. You may want to manually upload the package to your Packages directory.';
$txt['package_get_error_missing_xml'] = 'The package you are attempting to install is missing the package-info.xml that must be in the root package directory.';
$txt['package_get_error_is_zero'] = 'Although the package was downloaded to the server it appears to be empty. Please check the Packages directory, and the &quot;temp&quot; sub-directory are both writable. If you continue to experience this problem you should try extracting the package on your PC and uploading the extracted files into a subdirectory in your Packages directory and try again. For example, if the package was called shout.tar.gz you should:<br />1) Download the package to your local PC and extract it into files.<br />2) Using an FTP client create a new directory in your &quot;Packages&quot; folder, in this example you may call it "shout".<br />3) Upload all the files from the extracted package to this directory.<br />4) Go back to the package manager browse page and the package will be automatically found by SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF was unable to find any valid information within the package-info.xml file included within the Package. There may be an error with the modification, or the package may be corrupt.';

$txt['no_membergroup_selected'] = 'Nebyla vybrána žádná skupina';
$txt['membergroup_does_not_exist'] = 'Skupina neexistuje nebo je neplatná.';

$txt['at_least_one_admin'] = 'Na fóru musí být aspoň jeden administrátor!';

$txt['error_functionality_not_windows'] = 'Lituji, ale tato funkčnost v současné době není dostupná na serverech s Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Příloha nenalezena.';

$txt['error_no_boards_selected'] = 'Nebyla vybrána žádná platná diskuse!';
$txt['error_invalid_search_string'] = 'Zapomněl jsi napsat, co mám vůbec hledat?';
$txt['error_invalid_search_string_blacklist'] = 'Tvůj vyhledávací dotaz obsahoval pouze příliš jednoduchá slova. Zkus to prosím znovu s jiným dotazem.';
$txt['error_search_string_small_words'] = 'Každé slovo musí být dlouhé aspoň dva znaky.';
$txt['error_query_not_specific_enough'] = 'Dotaz nebyl dostatečně podrobný. Použij delší slova nebo méně běžné fráze.';
$txt['error_no_messages_in_time_frame'] = 'V tomto časovém rozsahu nebyly nalezeny žádné příspěvky.';
$txt['error_no_labels_selected'] = 'Nebyly zvoleny žádné značky!';
$txt['error_no_search_daemon'] = 'Nelze se spojit s vyhledávacím procesem';

$txt['profile_errors_occurred'] = 'Nastaly tyto chyby při ukládání tvého profilu';
$txt['profile_error_bad_offset'] = 'Časový posun je mimo meze';
$txt['profile_error_no_name'] = 'Kolonka se jménem je prázdná';
$txt['profile_error_name_taken'] = 'Toto jméno je již zabráno';
$txt['profile_error_name_too_long'] = 'Zvolené jméno je příliš dlouhé. Nemělo by být delší než 60 znaků';
$txt['profile_error_no_email'] = 'Kolonka s emailem je prázdná';
$txt['profile_error_bad_email'] = 'Nezadal jsi platnou emailovou adresu';
$txt['profile_error_email_taken'] = 'Jiný uživatel je již registrován s takovou adresou';
$txt['profile_error_no_password'] = 'Nezadal jsi heslo';
$txt['profile_error_bad_new_password'] = 'Nová hesla nejsou stejná';
$txt['profile_error_bad_password'] = 'Heslo není platné';
$txt['profile_error_bad_avatar'] = 'Avatar, který sis vybral je buď příliš velký, nebo není avatar';
$txt['profile_error_password_short'] = 'Heslo musí být aspoň ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' znaky/znaků dlouhé.';
$txt['profile_error_password_restricted_words'] = 'Heslo nemůže obsahovat uživatelské jméno, emailovou adresu nebo běžné výrazy.';
$txt['profile_error_password_chars'] = 'Heslo musí obsahovat směs velkých a malých písmen a číslic.';
$txt['profile_error_already_requested_group'] = 'O členství v této skupině jsi již požádal!';
$txt['profile_error_openid_in_use'] = 'Jiný uživatel už používá toto autentikační URL OpenID';

$txt['mysql_error_space'] = ' - zkontroluj volné místo pro databázi nebo kontaktuj administrátora.';

$txt['icon_not_found'] = 'Ikona nebyla nalezena ve výchozím vzhledu - prosím zkontroluj, že ikona byla nahrána a zkus to znovu.';
$txt['icon_after_itself'] = 'Ikona nemůže být umístěna sama za sebe!';
$txt['icon_name_too_long'] = 'Jména souborů ikon mohou mít maximálně 16 znaků';

$txt['name_censored'] = 'Lituji, ale jméno, které ses snažil použít - %s, obsahuje slova, která byla zakázána. Prosím, zvol si jiné jméno.';

$txt['poll_already_exists'] = 'Téma může mít pouze jednu anketu!';
$txt['poll_not_found'] = 'Toto téma nemá žádnou anketu!';

$txt['error_while_adding_poll'] = 'Nastala tato chyba při přidávání ankety';
$txt['error_while_editing_poll'] = 'Nastala tato chyba při úpravě ankety';

$txt['loadavg_search_disabled'] = 'Kvůli vysoké zátěži serveru bylo vyhledávání automaticky dočasně vypnuto. Zkus to prosím za chvíli znovu.';
$txt['loadavg_generic_disabled'] = 'Lituji, ale kvůli vysoké zátěži serveru, je tato vlastnost právě nedostupná.';
$txt['loadavg_allunread_disabled'] = 'Kvůli vysoké zátěži serveru není nyní možno vyhledat témata, která jsi ještě nečetl.';
$txt['loadavg_unreadreplies_disabled'] = 'Server je pod příliš vysokou zátěží. Prosím, zkus to za chvíli znovu.';
$txt['loadavg_show_posts_disabled'] = 'Prosím, zkus to za chvíli znovu. Příspěvky tohoto uživatele nyní nejdou prohlédnout, protože server trpí příliš vysokou zátěží.';
$txt['loadavg_unread_disabled'] = 'The server\'s resources are temporarily under too high a demand to list out the topics you have not read.';

$txt['cannot_edit_permissions_inherited'] = 'You cannot edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'You need to specify which report you wish to view.';
$txt['mc_no_modreport_found'] = 'The specified report either doesn\'t exist or is off limits to you';

$txt['st_cannot_retrieve_file'] = 'Could not retrieve the file %1$s.';
$txt['admin_file_not_found'] = 'Could not load the requested file: %1$s.';

$txt['themes_none_selectable'] = 'At least one theme must be selectable.';
$txt['themes_default_selectable'] = 'The overall forum default theme must be a selectable theme.';
$txt['ignoreboards_disallowed'] = 'The option to ignore boards has not been enabled.';

$txt['mboards_delete_error'] = 'Nebyla vybrána žádná kategorie!';
$txt['mboards_delete_board_error'] = 'Není vybrána žádná diskuse!';

$txt['mboards_parent_own_child_error'] = 'Unable to make a parent its own child!';
$txt['mboards_board_own_child_error'] = 'Unable to make a board its own child!';

$txt['smileys_upload_error_notwritable'] = 'Tyto adresáře s emotikony nemají právo zápisu: %1$s';
$txt['smileys_upload_error_types'] = 'Přípony obrázků s emotikony smějí mít pouze tyto přípony: %1$s.';

$txt['change_email_success'] = 'Tvá emailová adresa byla změněna a byl na ní poslán nový aktivační email.';
$txt['resend_email_success'] = 'Nový aktivační mail byl úspěšně odeslán.';

$txt['custom_option_need_name'] = 'Položka profilu musí mít jméno!';
$txt['custom_option_not_unique'] = 'Jméno položky není unikátní!';

$txt['warning_no_reason'] = 'You must enter a reason for altering the warning state of a member';
$txt['warning_notify_blank'] = 'You selected to notify the user but did not fill in the subject/message fields';

$txt['cannot_connect_doc_site'] = 'Could not connect to the Simple Machines Online Manual. Please check that your server configuration allows external internet connections and try again later.';

$txt['movetopic_no_reason'] = 'You must enter a reason for moving the topic, or uncheck the option to \'post a redirection topic\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'The requested identifier did not return the proper information.';
$txt['openid_return_no_mode'] = 'The identity provider did not respond with the OpenID mode.';
$txt['openid_not_resolved'] = 'The identity provider did not approve your request.';
$txt['openid_no_assoc'] = 'Could not find the requested association with the identity provider.';
$txt['openid_sig_invalid'] = 'The signature from the identity provider is invalid.';
$txt['openid_load_data'] = 'Could not load the data from your login request.  Please try again.';
$txt['openid_not_verified'] = 'The OpenID address given has not been verified yet.  Please log in to verify.';

$txt['error_custom_field_too_long'] = 'Položka &quot;%1$s&quot; nesmí být delší než %2$d znaků.';
$txt['error_custom_field_invalid_email'] = 'Položka &quot;%1$s&quot; musí obsahovat platnou emailovou adresu.';
$txt['error_custom_field_not_number'] = 'Položka &quot;%1$s&quot; musí mít číselný obsah.';
$txt['error_custom_field_inproper_format'] = 'Položka &quot;%1$s&quot; nemá platný formát.';
$txt['error_custom_field_empty'] = 'Položka &quot;%1$s&quot; nemůže zůstat nevyplněna.';

$txt['email_no_template'] = 'Šablona emailu &quot;%1$s&quot; není k nalezení.';

$txt['search_api_missing'] = 'The search API could not be found! Please contact the admin to check they have uploaded the correct files.';
$txt['search_api_not_compatible'] = 'The selected search API the forum is using is out of date - falling back to standard search. Please check file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'You cannot restore the first post in a topic.';
$txt['parent_topic_missing'] = 'The parent topic of the post you are trying to restore has been deleted.';
$txt['restored_disabled'] = 'The restoration of topics has been disabled.';
$txt['restore_not_found'] = 'The following messages could not be restored; the original topic may have been removed:<ul style="margin-top: 0px;">%1$s</ul>You will need to move these manually.';

$txt['error_invalid_dir'] = 'Adresář, který jsi zadal, je neplatný.';

$txt['error_sqlite_optimizing'] = 'Sqlite is optimizing the database, the forum can not be accessed until it has finished.  Please try refreshing this page momentarily.';

?>
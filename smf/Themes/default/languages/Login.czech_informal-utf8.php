<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Registrační smlouva';
$txt['agreement_agree'] = 'Souhlasím s registrační smlouvou.';
$txt['agreement_agree_coppa_above'] = 'Souhlasím s registrační smlouvou a jsem starší než %1$d.';
$txt['agreement_agree_coppa_below'] = 'Souhlasím s registrační smlouvou a jsem mladší než %1$d.';

// Registration form.
$txt['registration_form'] = 'Registrační formulář';
$txt['need_username'] = 'Musíš vyplnit uživatelské jméno';
$txt['no_password'] = 'Nezadal jsi heslo';
$txt['incorrect_password'] = 'Nesprávné heslo';
$txt['choose_username'] = 'Vyber uživatelské jméno';
$txt['maintain_mode'] = 'Mód údržby';
$txt['registration_successful'] = 'Registrace probìhla úspěšně';
$txt['now_a_member'] = 'Úspěch! Teď už jsi uživatelem tohoto fóra.';
// Use numeric entities in the below string.
$txt['your_password'] = 'Tvé heslo je';
$txt['valid_email_needed'] = 'Prosím, zadej platnou emailovou adresu, %1$s.';
$txt['required_info'] = 'Požadovaná informace';
$txt['identification_by_smf'] = 'Použito k identifikaci na fóru.';
$txt['additional_information'] = 'Další informace';
$txt['warning'] = 'Pozor!';
$txt['only_members_can_access'] = 'Pouze registrovaní uživatelé mají přístup do této sekce.';
$txt['login_below'] = 'Prosím, přihlaš se níže nebo';
$txt['register_an_account'] = 'zaregistrujte účet';
$txt['login_with_forum'] = 's %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Mùžeš jej změnit po přihlášení na své stránce s profilem, nebo na tomto odkazu:';
$txt['your_username_is'] = 'Tvoje uživatelské jméno je: ';

$txt['login_hash_error'] = 'Byla zvýšena bezpečnost hesel. Prosím, zadej znovu své heslo.';

$txt['ban_register_prohibited'] = 'Lituji, ale na tomto fóru se nesmíš registrovat';
$txt['under_age_registration_prohibited'] = 'Lituji, ale uživatelé, kteří mají méně než %d let, se nesmí registrovat na tomto fóru.';

$txt['activate_account'] = 'Aktivace účtu';
$txt['activate_success'] = 'Účet byl úspěšně aktivován. Teď se můžeš přihlásit.';
$txt['activate_not_completed1'] = 'Tvoje adresa musí být ověřena než se přihlásíš.';
$txt['activate_not_completed2'] = 'Potřebuješ další aktivační email?';
$txt['activate_after_registration'] = 'Díky za registraci. Brzy dostaneš email s odkazem pro aktivaci tvého účtu.';
$txt['invalid_userid'] = 'Uživatel neexistuje';
$txt['invalid_activation_code'] = 'Chybný aktivační kód';
$txt['invalid_activation_username'] = 'Uživatelské jméno nebo email';
$txt['invalid_activation_new'] = 'Pokud ses zaregistroval s neplatnou emailovou adresou, napiš sem novou a své heslo.';
$txt['invalid_activation_new_email'] = 'Nová emailová adresa';
$txt['invalid_activation_password'] = 'Staré heslo';
$txt['invalid_activation_resend'] = 'Poslat znovu aktivační kód';
$txt['invalid_activation_known'] = 'Pokud již znáš svůj aktivační kód, napiš ho prosím sem.';
$txt['invalid_activation_retry'] = 'Aktivační kód';
$txt['invalid_activation_submit'] = 'Aktivovat';

$txt['coppa_no_concent'] = 'Administrátor stále neobdžel souhlas rodičů/zákonných zástupců se zřízením tvého účtu.';
$txt['coppa_need_more_details'] = 'Potřebuješ více detailů?';

$txt['awaiting_delete_account'] = 'Tento účet je označen jako smazaný!<br />Pokud chceš obnovit svůj účet, zaškrtni &quot;Reaktivuj účet&quot; a znovu se přihlaš.';
$txt['undelete_account'] = 'Reaktivuj účet';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detaily o novém heslu';
$txt['change_password_login'] = 'Tvé přihlašovací údaje na';
$txt['change_password_new'] = 'byly změněny a heslo přegenerováno. Níže jsou tvé nové přihlašovací údaje.';

$txt['in_maintain_mode'] = 'Toto fórum je v módu údržby.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Prosím, přečti si a souhlas s pravidly než odsouhlasíš formulář.';
$txt['register_passwords_differ_js'] = 'Hesla, která jsi zadal, nejsou stejná!';

$txt['approval_after_registration'] = 'Díky za registraci. Administrátor musí schválit tvou registraci dříve, než budeš moci použít svůj účet; zanedlouho obdržíš email, který tě bude informovat o rozhodnutí administrátora.';

$txt['admin_settings_desc'] = 'Zde můžeš měnit řadu nastavení, týkajících se ně registrace nových členů.';

$txt['setting_enableOpenID'] = 'Povolit uživatelům použití OpenID';

$txt['setting_registration_method'] = 'Metoda registrace nových členů';
$txt['setting_registration_disabled'] = 'Registrace zakázána';
$txt['setting_registration_standard'] = 'Okamžitá registrace';
$txt['setting_registration_activate'] = 'Aktivace emailem';
$txt['setting_registration_approval'] = 'Schválení administrátorem';
$txt['setting_notify_new_registration'] = 'Upozornit administrátory, když se přihlásí nový uživatel';
$txt['setting_send_welcomeEmail'] = 'Poslat novým členům uvítací email';

$txt['setting_coppaAge'] = 'Věk, pod kterým se budou uplatňovat omezení věku';
$txt['setting_coppaAge_desc'] = '(0 - bez omezení)';
$txt['setting_coppaType'] = 'Akce, když se zkusí přihlásit mladší uživatel';
$txt['setting_coppaType_reject'] = 'Nepovolit registraci';
$txt['setting_coppaType_approval'] = 'Vyžadovat souhlas rodičů/zákonných zástupců';
$txt['setting_coppaPost'] = 'Poštovní adresa, kam mají být zasílány formuláře se souhlasem';
$txt['setting_coppaPost_desc'] = 'Bere se v potaz pouze v případě, že je zavedeno věkové omezení';
$txt['setting_coppaFax'] = 'Faxové číslo, kam mají být faxovány formuláře se souhlasem';
$txt['setting_coppaPhone'] = 'Kontaktní číslo pro rodiče, kvùli dotazům o omezení věku';

$txt['admin_register'] = 'Registrace nového uživatele';
$txt['admin_register_desc'] = 'Zde můžeš registrovat nové uživatele; případně jim poslat detaily emailem.';
$txt['admin_register_username'] = 'Nové jméno';
$txt['admin_register_email'] = 'Emailová adresa';
$txt['admin_register_password'] = 'Heslo';
$txt['admin_register_username_desc'] = 'Jméno nového uživatele';
$txt['admin_register_email_desc'] = 'Emailová adresa uživatele';
$txt['admin_register_password_desc'] = 'Heslo pro nového uživatele';
$txt['admin_register_email_detail'] = 'Pošli uživateli nové heslo';
$txt['admin_register_email_detail_desc'] = 'Emailová adresa je vyžadována, i když toto není zaškrtnuto';
$txt['admin_register_email_activate'] = 'Uživatel musí svůj účet aktivovat';
$txt['admin_register_group'] = 'Primární skupina';
$txt['admin_register_group_desc'] = 'Primární skupina, kam bude uživatel patřit';
$txt['admin_register_group_none'] = '(žádná primární skupina)';
$txt['admin_register_done'] = 'Uživatel %s byl úspěšně zaregistrován!';

$txt['coppa_title'] = 'Fórum s omezením pro nezletilé';
$txt['coppa_after_registration'] = 'Díka za registraci na fóru ' . $context['forum_name'] . '.<br /><br />Protože máš méně než {MINIMUM_AGE} let, vyžaduje se, aby ti tvojí rodiče nebo zákonní zástupci dali svolení, než budeš moci používat svůj účet. Aby ti účet mohl být schválen, vytiskni prosím formulář:';
$txt['coppa_form_link_popup'] = 'Zobraz formulář v novém okně';
$txt['coppa_form_link_download'] = 'Stáhni formulář jako textový soubor';
$txt['coppa_send_to_one_option'] = 'Pak zařiď, aby tvoji rodiče/zákonní zástupci zaslali formulář takto:';
$txt['coppa_send_to_two_options'] = 'Pak zařiď, aby tvoji rodiče/zákonní zástupci zaslali formulář jedním z těchto způsobů:';
$txt['coppa_send_by_post'] = 'Poštou, na tuto adresu:';
$txt['coppa_send_by_fax'] = 'Faxem, na toto číslo:';
$txt['coppa_send_by_phone'] = 'Popřípadě je nech zavolat na administrátorovo telefonní číslo {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Schvalovací formulář pro registraci na fóru ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Já, {PARENT_NAME},<br /><br />dávám svolení svému dítěti{CHILD_NAME} (jméno dítěte), aby se stalo plně registrovaným členem fóra: ' . $context['forum_name'] . ', pod uživatelským jménem: {USER_NAME}.<br /><br />Souhlasím s tím, že jisté osobní údaje information zadané {USER_NAME} mohou být viditelné pro ostatní uživatele fóra.<br /><br />Podpis:<br />{PARENT_NAME} (Rodič/Zákonný zástupce).';

$txt['visual_verification_sound_again'] = 'Přehrát znovu';
$txt['visual_verification_sound_close'] = 'Zavřít okno';
$txt['visual_verification_sound_direct'] = 'Máš problém s poslechem? Zkus přímý odkaz.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Jméno je k dispozici';
$txt['registration_username_unavailable'] = 'Jméno není k dispozici';
$txt['registration_username_check'] = 'Otestovat, zda je jméno k dispozici';
$txt['registration_password_short'] = 'Heslo je příliš krátké';
$txt['registration_password_reserved'] = 'Heslo obsahuje tvé jméno/email';
$txt['registration_password_numbercase'] = 'Heslo musí obsahovat velká a malá písmena a čísla';
$txt['registration_password_no_match'] = 'Hesla nesouhlasí';
$txt['registration_password_valid'] = 'Heslo je v pořádku';

$txt['registration_errors_occurred'] = 'Tyto chyby byly nalezeny v tvé registraci. Prosím, oprav je:';

$txt['authenticate_label'] = 'Autentizační metoda';
$txt['authenticate_password'] = 'Heslo';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'Autentizační URL OpenID';

?>
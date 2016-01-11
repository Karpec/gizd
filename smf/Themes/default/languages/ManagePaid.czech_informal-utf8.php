<?php
// Version: 2.0.10; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Jiné';

$txt['paid_username'] = 'Uživ. jméno';

$txt['paid_subscriptions_desc'] = 'V této sekci můžeš přidávat, ubírat a editovat metody předplatného na tvém fóru.';
$txt['paid_subs_settings'] = 'Nastavení';
$txt['paid_subs_settings_desc'] = 'Zde lze editovat platební metody přístupné uživatelům.';
$txt['paid_subs_view'] = 'Prohédnout předplatné';
$txt['paid_subs_view_desc'] = 'V této sekci lze prohlížet předplatné.';

// Setting type strings.
$txt['paid_enabled'] = 'Povolit předplatné';
$txt['paid_enabled_desc'] = 'Toto musí být zaškrtnuto, aby na fóru mohlo fungovat předplatné.';
$txt['paid_email'] = 'Posílat upozorňovací maily';
$txt['paid_email_desc'] = 'Informují admina, že se změnilo předplatné.';
$txt['paid_email_to'] = 'Nastavit email';
$txt['paid_email_to_desc'] = 'Čárkou oddělený seznam emailů, kam ještě zasílat upozornění kromě adminů.';
$txt['paidsubs_test'] = 'Povolit testovací mód';
$txt['paidsubs_test_desc'] = 'Toto přepne předplatné do &quot;testovacího&quot; módu, což zapne, kdekoli je možné, použití \'sandboxových\' platebních metod PayPal, Authorize.net atd. Nezapínej, pokud nevíš, co děláš!';
$txt['paidsubs_test_confirm'] = 'Jsi si jistý, že chceš povolit testovací mód?';
$txt['paid_email_no'] = 'Neposílat upozornění';
$txt['paid_email_error'] = 'Posílat, jen když se předplatné nezdaří';
$txt['paid_email_all'] = 'Informovat o všech změnách';
$txt['paid_currency'] = 'Vybrat měnu';
$txt['paid_currency_code'] = 'Kód měny';
$txt['paid_currency_code_desc'] = 'Kód používaný platebními bránami';
$txt['paid_currency_symbol'] = 'Symbol používany platební metodou';
$txt['paid_currency_symbol_desc'] = 'Použij \'%1.2f\' pro umístění hodnoty, např. $%1.2f, %1.2fKč apod.';
$txt['paypal_email'] = 'Emailová adresa pro Paypal';
$txt['paypal_email_desc'] = 'Nechat prázdné, když nechceš používat PayPal.';
$txt['worldpay_id'] = 'Instalační ID WorldPay';
$txt['worldpay_id_desc'] = 'Instalační ID (Install ID) generované WorldPay. Nechat prázdné, když nepoužíváš WorldPay';
$txt['worldpay_password'] = 'WorldPay Callback heslo';
$txt['worldpay_password_desc'] = 'Ujisti se, když nastavuješ toto heslo ve WorldPay, že je unikátní a není stejné jako tvé WorldPay/administrátorské heslo!';
$txt['authorize_id'] = 'Instalační ID Authorize.net';
$txt['authorize_id_desc'] = 'Instalační ID (Install ID) generované Authorize.net. Nechat prázdné, když nepoužíváš Authorize.net';
$txt['authorize_transid'] = 'Transakční ID Authorize.Net';
$txt['2co_id'] = 'Instalační ID 2co.com';
$txt['2co_id_desc'] = 'Instalační ID (Install ID) generované 2co.com. Nechat prázdné, když nepoužíváš 2co.com';
$txt['2co_password'] = 'Tajné slovo 2co.com';
$txt['2co_password_desc'] = 'Tvé tajné slovo (server word) z 2checkout.';
$txt['nochex_email'] = 'Emailová adresa Nochex';
$txt['nochex_email_desc'] = 'Emailová adresar obchodního účtu u Nochex. Nechat prázdné, když nepoužíváš Nochex';
$txt['paid_settings_save'] = 'Uložit';

$txt['paid_note'] = '<strong class="alert">Upozronění:</strong><br />Aby mohlo být předplatné automaticky připsáno tvým uživatelům, musíš nastavit u svých platebních metod návratové url (return URL). Pro všechny druhy platebních bran, url by mělo být toto:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>' . $boardurl . '/subscriptions.php</strong><br /><br />
	Pro PayPal to lze nastavit přímo <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">zde</a>.<br />
	Pro jiné brány (pokud jsou nainstalovány) můžeš tuto informaci nalézt v jejich konfiguračních panelech, většinou pod termíny &quot;Return URL&quot; nebo &quot;Callback URL&quot;.';

$txt['paypal_additional_emails'] = 'Primary PayPal email address';
$txt['paypal_additional_emails_desc'] = 'If different (for business account)';

// View subscription strings.
$txt['paid_name'] = 'Jméno';
$txt['paid_status'] = 'Stav';
$txt['paid_cost'] = 'Cena';
$txt['paid_duration'] = 'Trvání';
$txt['paid_active'] = 'Aktivní';
$txt['paid_pending'] = 'Očekávaná platba';
$txt['paid_finished'] = 'Ukončeno';
$txt['paid_total'] = 'Celkem';
$txt['paid_is_active'] = 'Aktivováno';
$txt['paid_none_yet'] = 'Nejsou nastaveny žádné předplatné.';
$txt['paid_payments_pending'] = 'Očekávané platby';
$txt['paid_order'] = 'Objednat';

$txt['yes'] = 'Ano';
$txt['no'] = 'Ne';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Přidat předplatné';
$txt['paid_edit_subscription'] = 'Změnit předplatné';
$txt['paid_delete_subscription'] = 'Smazat předplatné';

$txt['paid_mod_name'] = 'Jméno předplatného';
$txt['paid_mod_desc'] = 'Popis';
$txt['paid_mod_reminder'] = 'Poslat upomínku';
$txt['paid_mod_reminder_desc'] = 'Počet dní před ukončením předplatného, kdy je uživateli zaslána upomínka. (0 - neposílat)';
$txt['paid_mod_email'] = 'Email při úspěšném předplacení';
$txt['paid_mod_email_desc'] = 'Kde {NAME} je uživatelské jméno; {FORUM} je jméno fóra. Předmět mailu by měl být na první řádce. Nech prázdné, pokud nechceš zasílat upozornění.';
$txt['paid_mod_cost_usd'] = 'Cena (USD)';
$txt['paid_mod_cost_eur'] = 'Cena (EUR)';
$txt['paid_mod_cost_gbp'] = 'Cena (GBP)';
$txt['paid_mod_cost_blank'] = 'Vynechat, když nechceš nabízet tuto měnu.';
$txt['paid_mod_span'] = 'Délka předplatného';
$txt['paid_mod_span_days'] = 'Dní';
$txt['paid_mod_span_weeks'] = 'Týdnů';
$txt['paid_mod_span_months'] = 'Měsíců';
$txt['paid_mod_span_years'] = 'Let';
$txt['paid_mod_active'] = 'Aktivní';
$txt['paid_mod_active_desc'] = 'Předplatné musí být aktivní, aby si ho mohli zvolit noví uživatelů.';
$txt['paid_mod_prim_group'] = 'Primární skupina při předplacení';
$txt['paid_mod_prim_group_desc'] = 'Do jaké primární skupiny umístit uživatele, když si předplatí.';
$txt['paid_mod_add_groups'] = 'Další skupiny při předplacení';
$txt['paid_mod_add_groups_desc'] = 'Do jakých dalších skupin přidat uživatele, když si předplatí.';
$txt['paid_mod_no_group'] = 'Beze změny';
$txt['paid_mod_edit_note'] = 'Protože tato skupina má předplatitele, nastavení skupiny nelze měnit!';
$txt['paid_mod_delete_warning'] = '<strong>POZOR</strong><br /><br />Pokud smažeš toto předplatné, všichni uživatelé, kteří ho používají, ztratí přístupová prává, která předplatným získali. Pokud si nejsi jistý, že to chceš udělat, doporučuje se, abys předplatné deaktivoval a ne smazal.<br />';
$txt['paid_mod_repeatable'] = 'Povolit uživateli automatické obnovení předplatného';
$txt['paid_mod_allow_partial'] = 'Povolit částečné předplatné';
$txt['paid_mod_allow_partial_desc'] = 'Pokud je povolena tato volba, v případě, že uživatel zaplatí méně, je mu předplacena jen poměrná část období.';
$txt['paid_mod_fixed_price'] = 'Předplatné za pevnou cenu a čas';
$txt['paid_mod_flexible_price'] = 'Cena předplatného se liší podle délky předplatného';
$txt['paid_mod_price_breakdown'] = 'Pružné rozdělení plateb';
$txt['paid_mod_price_breakdown_desc'] = 'Nadefinuj, jak moc má být cena předplatného závislá na délce předplatného. Například můžeš účtovat 120 Kč měsíčně, ale jen 1000 Kč ročně. Pokud nechceš určit cenu za některou délku, vynech ji.';
$txt['flexible'] = 'Pružná';

$txt['paid_per_day'] = 'Cena za den';
$txt['paid_per_week'] = 'Cena za týden';
$txt['paid_per_month'] = 'Cena za měsíc';
$txt['paid_per_year'] = 'Cena za rok';
$txt['day'] = 'Den';
$txt['week'] = 'Týden';
$txt['month'] = 'Měsíc';
$txt['year'] = 'Rok';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Zobrazit uživatele';
$txt['view_users_subscribed'] = 'Zobrazit uživatele předplácející &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Toto předplatné nemá žádné předplatitele!';
$txt['add_subscriber'] = 'Přidat předplatitele';
$txt['edit_subscriber'] = 'Změnit předplatitele';
$txt['delete_selected'] = 'Smazat vybrané';
$txt['complete_selected'] = 'Dokončit vybrané';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Jsi si jistý, že chceš smazat všechny záznamy o vybraných předplatných?';
$txt['complete_are_sure'] = 'Jsi si jistý, že chceš dokončit vybrané předplatné?';

$txt['start_date'] = 'Počáteční datum';
$txt['end_date'] = 'Koncové datum';
$txt['start_date_and_time'] = 'Počáteční datum a čas';
$txt['end_date_and_time'] = 'Koncové datum a čas';
$txt['edit'] = 'EDITOVAT';
$txt['one_username'] = 'Prosím, zadej jen jedno jméno.';
$txt['hour'] = 'Hodina';
$txt['minute'] = 'Minuta';
$txt['error_member_not_found'] = 'Uživatel nebyl nalezen';
$txt['member_already_subscribed'] = 'Tento uživatel již má toto předplatné. Prosím, edituj jeho předplatné.';
$txt['search_sub'] = 'Hledat uživatele';

// Make payment.
$txt['paid_confirm_payment'] = 'Potvrdit platbu';
$txt['paid_confirm_desc'] = 'Pro pokračování, zkontroluj platbu a stiskni &quot;Objednat&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Pro zaplacení <a href="http://www.paypal.com">PayPal</a>em klini na tlačítko níže. Budeš přesměrován na stránky PayPal k dokončení platby.';
$txt['paid_paypal_order'] = 'Zaplatit přes PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Pro zaplacení přes <a href="http://www.worldpay.com">WorldPay</a> klikni na tlačítko níže. Budeš přesměrování na stránky WorldPay k dokončení platby.';
$txt['paid_worldpay_order'] = 'Zaplatit přes WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Pro zaplacení přes <a href="http://www.nochex.com">Nochex</a> klikni na tlačítko níže. Budeš přesměrování na stránky Nochex k dokončení platby.';
$txt['paid_nochex_order'] = 'Zaplatit přes Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Pro zaplacení přes <a href="http://www.authorize.net">Authorize.Net</a> klikni na tlačítko níže. Budeš přesměrování na stránky Authorize.Net k dokončení platby.';
$txt['paid_authorize_order'] = 'Zaplatit přes Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Pro zaplacení přes <a href="http://www.2co.com">2co.com</a> klikni na tlačítko níže. Budeš přesměrování na stránky 2co.com k dokončení platby.';
$txt['paid_2co_order'] = 'Zaplatit přes 2co.com';
$txt['paid_done'] = 'Platba dokončena';
$txt['paid_done_desc'] = 'Díky za platbu. Jakmile bude transakce ověřena, bude předplatné aktivováno.';
$txt['paid_sub_return'] = 'Zpět na předplatné';
$txt['paid_current_desc'] = 'Níže je seznam tvých stávajících a předchozích předplatných. Pro prodloužení předplatného, vyber ho z možností uvedených výše.';
$txt['paid_admin_add'] = 'Přidat toto předplatné';

$txt['paid_not_set_currency'] = 'Zatím ji nenastavil žádnou měnu. Proveď to prosím v sekci <a href="%1$s">Nastavení</a>.';
$txt['paid_no_cost_value'] = 'Musíš zadat cenu a délku předplatného.';
$txt['paid_all_freq_blank'] = 'Musíš zadat cenu pro aspoň jedno časové období.';

// Some error strings.
$txt['paid_no_data'] = 'Skript neobdržel žádná platná data.';

$txt['paypal_could_not_connect'] = 'Nelze se spojit se serverem PayPal';
$txt['paid_sub_not_active'] = 'Toto předplatné nepřijímá další uživatele!';
$txt['paid_disabled'] = 'Předplatné je v současné době vypnuto!';
$txt['paid_unknown_transaction_type'] = 'Neznámý typ transakce předplatného.';
$txt['paid_empty_member'] = 'Zpracovatel předplatného nemůže zjistit uživatelovo ID';
$txt['paid_could_not_find_member'] = 'Zpracovatel předplatného nemůže najít uživatele s ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Zpracovatel předplatného nemůže najít předplatné pro uživatele ID: %1$s, ID předplatného: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Zpracovatel předplatného nemůže najít záznam o předplatném uživatele ID: %1$s, ID předplatného: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Nelze nalézt nevyřízenou platbu pro uživatele ID: %1$s, ID předplatného: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Lituji, ale administrátor ještě nedokončil nastavení předplatného. Vrať se sem později.';
$txt['paid_make_recurring'] = 'Nastavit jako opakovanou platbu';

$txt['subscriptions'] = 'Předplatné';
$txt['subscription'] = 'Předplatné';
$txt['paid_subs_desc'] = 'Níže je seznam předplatných, které jsou k dispozici na tomto fóru.';
$txt['paid_subs_none'] = 'Nejsou k dispozici žádné předplatné!';

$txt['paid_current'] = 'Stávající předplatné';
$txt['pending_payments'] = 'Očekávané platby';
$txt['pending_payments_desc'] = 'Tento uživatel se pokusil provést následující platby kvůli předplatnému, ale neobdrželi jsme automatické potvrzení. Jestli jsi si jist, že platba byla provedena, klikni na &quot;přijmou&quot;, pro zahájení předplatného. Jinak likni na &quot;Smazat&quot; k odstranění všech informací o platbě.';
$txt['pending_payments_value'] = 'Hodnota';
$txt['pending_payments_accept'] = 'Přijmout';
$txt['pending_payments_remove'] = 'Smazat';

?>
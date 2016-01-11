<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Seznam soukromých zpráv';
$txt['send_message'] = 'Poslat zprávu';
$txt['pm_add'] = 'Přidat';
$txt['make_bcc'] = 'Přidat skrytou kopii';
$txt['pm_to'] = 'Komu';
$txt['pm_bcc'] = 'Skrytá kopie';
$txt['inbox'] = 'Přijaté';
$txt['conversation'] = 'Konverzace';
$txt['messages'] = 'Zprávy';
$txt['sent_items'] = 'Odeslané';
$txt['new_message'] = 'Nová zpráva';
$txt['delete_message'] = 'Smazat zprávy';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Smazat všechny zprávy ve schránce PMBOX';
$txt['delete_all_confirm'] = 'Jsi si jistý, že chceš smazat všechny zprávy?';
$txt['recipient'] = 'Příjemce';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nová soukromá zpráva: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Právě jsi dostal soukromou zprávu od uživatele SENDER z fóra ' . $context['forum_name'] . '.' . "\n\n" . 'DŮLEŽITÉ: Toto je pouze upozornění. Neodpovídej na tento email.' . "\n\n" . 'Zpráva, kterou ti poslal, následuje:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(více adresátů: \'jméno1, jméno2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Na tuto soukromou zprávu odpověz zde:';

$txt['delete_selected_confirm'] = 'Jsi si jistý, že chceš smazat všechny vybrané zprávy?';

$txt['sent_to'] = 'Adresát';
$txt['reply_to_all'] = 'Odpovědět všem';
$txt['delete_conversation'] = 'Smazat konverzaci';

$txt['pm_capacity'] = 'Kapacita';
$txt['pm_currently_using'] = '%s zpráv, %s%% obsazeno.';
$txt['pm_sent'] = 'Tvá zpráva byla úspěšně odeslána.';

$txt['pm_error_user_not_found'] = 'Nemůžu najít uživatele \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Uživatel \'%s\' blokuje tvé soukromé zprávy.';
$txt['pm_error_data_limit_reached'] = 'Soukromá zpráva nemohla být zaslána uživateli  \'%s\', protože překročil limit zpráv!';
$txt['pm_error_user_cannot_read'] = 'Uživatel \'%1$s\' nepřijímá soukromé zprávy.';
$txt['pm_successfully_sent'] = 'Soukromá zpráva úspěšně zaslána \'%s\'.';
$txt['pm_send_report'] = 'Poslat hlášení';
$txt['pm_save_outbox'] = 'Založit kopii mezi odeslané';
$txt['pm_undisclosed_recipients'] = 'Skrytí adresáti';
$txt['pm_too_many_recipients'] = 'Nemůžeš poslat soukromou zprávu více než %d uživatelům najednou.';

$txt['pm_read'] = 'Přečteno';
$txt['pm_replied'] = 'Odpovězeno';

// Message Pruning.
$txt['pm_prune'] = 'Promazat zprávy';
$txt['pm_prune_desc1'] = 'Smazat všechny zprávy starší než';
$txt['pm_prune_desc2'] = 'dní.';
$txt['pm_prune_warning'] = 'Jsi si jistý, že chceš promazat své soukromé zprávy?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Další akce';
$txt['pm_actions_delete_selected'] = 'Smazat vybrané';
$txt['pm_actions_filter_by_label'] = 'Filtrovat podle značky';
$txt['pm_actions_go'] = 'Ok';

// Manage Labels Screen.
$txt['pm_apply'] = 'Použít';
$txt['pm_manage_labels'] = 'Spravovat značky';
$txt['pm_labels_delete'] = 'Jsi si jistý, že chce smazat vybrané značky?';
$txt['pm_labels_desc'] = 'Zde můžeš přidávat, měnit a mazat značky pro použití ,k označování soukromých zpráv.';
$txt['pm_label_add_new'] = 'Přidat značku';
$txt['pm_label_name'] = 'Jméno značky';
$txt['pm_labels_no_exist'] = 'Nemáš nastavené žádné značky!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Značka';
$txt['pm_msg_label_title'] = 'Označ zprávu';
$txt['pm_msg_label_apply'] = 'Přidej značku';
$txt['pm_msg_label_remove'] = 'Odstraň značku';
$txt['pm_msg_label_inbox'] = 'Přijaté';
$txt['pm_sel_label_title'] = 'Označ vybrané';

// Sidebar Headings.
$txt['pm_labels'] = 'Značky';
$txt['pm_messages'] = 'Zprávy';
$txt['pm_actions'] = 'Akce';
$txt['pm_preferences'] = 'Nastavení';

$txt['pm_is_replied_to'] = 'Toto je buď přeposlaná nebo zodpovězená zpráva.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Nahlásit adminovi';
$txt['pm_report_title'] = 'Hlášení soukromé zprávy';
$txt['pm_report_desc'] = 'Z této stránky můžeš nahlašovat soukromé zprávy členům administrátorského teamu tohoto fóra. Prosím, uveď důvod, proč nahlašuješ tuto zprávu - bude odeslán spolu s původním zněním nahlašované zprávy.';
$txt['pm_report_admins'] = 'Adminstrátor, kterému poslat hlášení';
$txt['pm_report_all_admins'] = 'Poslat všem administrátorům';
$txt['pm_report_reason'] = 'Důvod, proč nahlašuješ tuto zprávu';
$txt['pm_report_message'] = 'Nahlásit zprávu';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[HLÁŠENÍ] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = 'Uživatel {REPORTER} nahlásil následující soukromou zprávu, odeslanou uživatelem {SENDER}, z tohoto důvodu:';
$txt['pm_report_pm_other_recipients'] = 'Ostatní příjemci této zprávy:';
$txt['pm_report_pm_hidden'] = '%d skrytých příjemců';
$txt['pm_report_pm_unedited_below'] = 'Níže je původní obsah nahlášené soukromé zprávy:';
$txt['pm_report_pm_sent'] = 'Odeslal:';

$txt['pm_report_done'] = 'Díky za nahlášení této zprávy. Brzy by se ti měl ozvat někdo z týmu adminů.';
$txt['pm_report_return'] = 'Zpět do přijatých';

$txt['pm_search_title'] = 'Prohledávat soukromé zprávy';
$txt['pm_search_bar_title'] = 'Prohledávat zprávy';
$txt['pm_search_text'] = 'Výraz';
$txt['pm_search_go'] = 'Hledat';
$txt['pm_search_advanced'] = 'Pokročilé vyhledávání';
$txt['pm_search_user'] = 'podle uživatele';
$txt['pm_search_match_all'] = 'Všechna slova';
$txt['pm_search_match_any'] = 'Některá slova';
$txt['pm_search_options'] = 'Volby';
$txt['pm_search_post_age'] = 'Stáří';
$txt['pm_search_show_complete'] = 'Ve výsledcích zobrazovat celou zprávu.';
$txt['pm_search_subject_only'] = 'Vyhledávat pouze podle tématu a autora.';
$txt['pm_search_between'] = 'Mezi';
$txt['pm_search_between_and'] = 'a';
$txt['pm_search_between_days'] = 'dny';
$txt['pm_search_order'] = 'Seřadit výsledky podle';
$txt['pm_search_choose_label'] = 'Vybrat značky podle kterých vyhledávat nebo vyhledávat vše';

$txt['pm_search_results'] = 'Výsledky vyhledávání';
$txt['pm_search_none_found'] = 'Nenalezeny žádné zprávy';

$txt['pm_search_orderby_relevant_first'] = 'Relevance';
$txt['pm_search_orderby_recent_first'] = 'Stáří';
$txt['pm_search_orderby_old_first'] = 'Stáří (od nejstarších)';

$txt['pm_visual_verification_label'] = 'Ověření';
$txt['pm_visual_verification_desc'] = 'Prosím zadej kód z obrázku, abys mohl odeslat tuto zprávu.';

$txt['pm_settings'] = 'Změnit nastavení';
$txt['pm_change_view'] = 'Změnit prohlížeč';

$txt['pm_manage_rules'] = 'Nastavit pravidla';
$txt['pm_manage_rules_desc'] = 'Pravidla zpráv ti umožní automaticky třídit příchozí zprávy podle řady definovaných podmínek. Níže jsou pravidla, která jsi již vytvořil. K úpravě pravidla prostě klikni na jeho jméno.';
$txt['pm_rules_none'] = 'Nemáš nastavena žádná pravidla.';
$txt['pm_rule_title'] = 'Pravidlo';
$txt['pm_add_rule'] = 'Přidat pravidlo';
$txt['pm_apply_rules'] = 'Použít pravidla';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Jsi si jistý, že chceš použít platná pravidla na všechny soukromé zprávy?';
$txt['pm_edit_rule'] = 'Upravit pravidlo';
$txt['pm_rule_save'] = 'Uložit pravidlo';
$txt['pm_delete_selected_rule'] = 'Smazat vybraná pravidla';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Jsi si jistý, že chceš smazat vybraná pravidla?';
$txt['pm_rule_name'] = 'Jméno';
$txt['pm_rule_name_desc'] = 'Pod jakým jménem uložit pravidlo';
$txt['pm_rule_name_default'] = '[Jméno]';
$txt['pm_rule_description'] = 'Popis';
$txt['pm_rule_not_defined'] = 'Přidej nějaké podmínky, aby se zde začal skládat popis pravidla.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Pozor:</strong>Vypadá to, že máš zakázaný javascript. Doporučujeme ti zapnou javascript, abysmohl používat tuto funkcionalitu.</span>';
$txt['pm_rule_criteria'] = 'Podmínky';
$txt['pm_rule_criteria_add'] = 'Přidat podmínku';
$txt['pm_rule_criteria_pick'] = 'Vyber podmínku';
$txt['pm_rule_mid'] = 'Jméno odesílatele';
$txt['pm_rule_gid'] = 'Skupina odesílatele';
$txt['pm_rule_sub'] = 'Předmět zprávy obsahuje';
$txt['pm_rule_msg'] = 'Tělo zprávy obsahuje';
$txt['pm_rule_bud'] = 'Odesílatel je přítel';
$txt['pm_rule_sel_group'] = 'Vybrat skupinu';
$txt['pm_rule_logic'] = 'Při testování podmínek';
$txt['pm_rule_logic_and'] = 'Všechny podmínky musí být splněny';
$txt['pm_rule_logic_or'] = 'Některé podmínky musí být splněny';
$txt['pm_rule_actions'] = 'Akce';
$txt['pm_rule_sel_action'] = 'Vybrat akci';
$txt['pm_rule_add_action'] = 'Přidat akci';
$txt['pm_rule_label'] = 'Označkovat zprávu';
$txt['pm_rule_sel_label'] = 'Vybrat značku';
$txt['pm_rule_delete'] = 'Smazat zprávu';
$txt['pm_rule_no_name'] = 'Zapomně jsi zadat jménol.';
$txt['pm_rule_no_criteria'] = 'Pravidlo musí mít aspoň jednu podmínku a jednu akci.';
$txt['pm_rule_too_complex'] = 'Pravidlo, které jsi vytvořil, je příliš dlouhé. Zkus ho rozdělit na kratší pravidla.';

$txt['pm_readable_and'] = '<em>a</em>';
$txt['pm_readable_or'] = '<em>nebo</em>';
$txt['pm_readable_start'] = 'Když ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'je zpráva od &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'je odesílatel ze skupiny &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'předmět zprávy obsahuje &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'tělo zprávy obsahuje &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'je odesílatel přítel';
$txt['pm_readable_label'] = 'použij značku &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'smaž zprávu';
$txt['pm_readable_then'] = ', <strong>pak</strong>';

?>
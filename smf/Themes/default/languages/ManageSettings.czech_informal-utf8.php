<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Na této stránce můžeš měnit nastavení vlastností a základních voleb tvého fóra. Další nastavení jsou v <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;;th=%1$s;%3$s=%2$">nastavení vzhledu</a>.  Klikni na ikonu s otazníkem pro další informace o nastavení.';
$txt['security_settings_desc'] = 'Tato stránka ti umožňuje nastavit volby vázající se k bezpečnosti a moderaci tohoto fóra, včetně nastavení antispamu.';
$txt['modification_settings_desc'] = 'Tato stránka obsahuje nastavení přidané balíčky modifikací';

$txt['modification_no_misc_settings'] = 'Ještě žádný balíček modifikací nepřidal žádné volby.';

$txt['pollMode'] = 'Nastavení anket';
$txt['disable_polls'] = 'Zakázat ankety';
$txt['enable_polls'] = 'Povolit ankety';
$txt['polls_as_topics'] = 'Zobrazit existující ankety jako témata';
$txt['allow_guestAccess'] = 'Umožnit hostům procházet fórum';
$txt['userLanguage'] = 'Umožnit uživatelům výběr jazyka';
$txt['allow_editDisplayName'] = 'Umožnit uživatelům editaci zobrazovaného jména';
$txt['allow_hideOnline'] = 'Umožnit uživatelům skrýt svůj online stav?';
$txt['guest_hideContacts'] = 'Nezobrazovat hostům kontaktní detaily uživatelů';
$txt['titlesEnable'] = 'Povolit vlastní titulky';
$txt['enable_buddylist'] = 'Povolit seznam kámošů/ignorací';
$txt['default_personal_text'] = 'Výchozí osobní text<div class="smalltext">Osobní text, který je nastaven nově registrovaným uživatelům.</div>';
$txt['number_format'] = 'Výchozí číselný formát';
$txt['time_format'] = 'Výchozí časový formát';
$txt['setting_time_offset'] = 'Celkový časový posun <div class="smalltext">(připočítává se k uživatelskému nastavení.)</div>';
$txt['setting_default_timezone'] = 'Časová zóna serveru';
$txt['failed_login_threshold'] = 'Limit špatných přihlášení';
$txt['lastActive'] = 'Doba pro výpočet času online';
$txt['trackStats'] = 'Zaznamenávat denní statistiky';
$txt['hitStats'] = 'Zaznamenávat počet přístupů (statistiky musí být zapnuty)';
$txt['enableCompressedOutput'] = 'Povolit komprimovaný výstup';
$txt['disableTemplateEval'] = 'Zakázat "eval" šablon';
$txt['databaseSession_enable'] = 'Používat databázi pro správu sezení';
$txt['databaseSession_loose'] = 'Povolit prohlížečům skočit zpět na stránky v cache';
$txt['databaseSession_lifetime'] = 'Sekundy před uplynutím nepoužívaného sezení';
$txt['enableErrorLogging'] = 'Zaznamenávat chyby';
$txt['enableErrorQueryLogging'] = 'Vkládat databázové dotazy do logu chyb';
$txt['pruningOptions'] = 'Povolit mazání logů';
$txt['pruneErrorLog'] = 'Smazat záznamy chyb starší než <div class="smalltext">(0 - nemazat)</div>';
$txt['pruneModLog'] = 'Smazat záznamy moderačního logu starší než<div class="smalltext">(0 - nemazat)</div>';
$txt['pruneBanLog'] = 'Smazat záznamy logu zákazů starší než <div class="smalltext">(0 - nemazat)</div>';
$txt['pruneReportLog'] = 'Smazat hlášení moderátorovi starší než <div class="smalltext">(0 - nemazat)</div>';
$txt['pruneScheduledTaskLog'] = 'Smazat záznamy logu naplánovaných úkolů starší než<div class="smalltext">(0 - nemazat)</div>';
$txt['pruneSpiderHitLog'] = 'Smazat záznamy logu robotů starší než <div class="smalltext">(0 - nemazat)</div>';
$txt['cookieTime'] = 'Výchozí doba přihlašovacích cookie (v minutách)';
$txt['localCookies'] = 'Umožnit lokální ukládání cookies<div class="smalltext">(SSI nebude fungovat.)</div>';
$txt['globalCookies'] = 'Používat cookies nezávislé na subdoménách<div class="smalltext">(nejdříve vypni lokální cookies!)</div>';
$txt['secureCookies'] = 'Nastavit cookies jako bezpečné<div class="smalltext">(Toto platí pouze tehdy, kdy používáš HTTPS - jinak nepoužívat!)</div>';
$txt['securityDisable'] = 'Zakázat administrační zabezpečení';
$txt['send_validation_onChange'] = 'Poslat nové heslo při změně emailu';
$txt['approveAccountDeletion'] = 'Vyžadovat schválení administrátorem při smazání účtu';
$txt['autoOptMaxOnline'] = 'Maximální počet uživatelů online během optimalizace<div class="smalltext">(0 = bez maxima)</div>';
$txt['autoFixDatabase'] = 'Automaticky opravovat poškozené tabulky';
$txt['allow_disableAnnounce'] = 'Povolit uživatelům zakázat oznámení';
$txt['disallow_sendBody'] = 'Neposílat text příspěvku v upozornění';
$txt['queryless_urls'] = 'URL přátelská k vyhledávačům<div class="smalltext"><strong>Pouze pro Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = 'Maximální šířka posílaných obrázků (0 = bez limitu)';
$txt['max_image_height'] = 'Maximální výška posílaných obrázků (0 = bez limitu)';
$txt['enableReportPM'] = 'Povolit oznámení soukromých zpráv';
$txt['max_pm_recipients'] = 'Maximální počet příjemců v soukromé zprávě<div class="smalltext">(0 - neomezeno, administrátoři mají výjimku)</div>';
$txt['pm_posts_verification'] = 'Počet příspěvků, který musí mít uživatel, aby nemusel procházet verifikací při posílání soukromých zpráv<div class="smalltext">(0 - neomezeno, administrátoři mají výjimku)</div>';
$txt['pm_posts_per_hour'] = 'Počet soukromých zpráv, které může uživatel poslat za hodinu<div class="smalltext">(0 - neomezeno, moderátoři mají výjimku)</div>';
$txt['compactTopicPagesEnable'] = 'Omezit počet zobrazených odkazů na stránky';
$txt['contiguous_page_display'] = 'Počet sousedících stránek k zobrazení';
$txt['to_display'] = 'k zobrazení';
$txt['todayMod'] = 'Povolit zkracování data';
$txt['today_disabled'] = 'Vypnuto';
$txt['today_only'] = 'Pouze Dnes';
$txt['yesterday_today'] = 'Dnes a včera';
$txt['topbottomEnable'] = 'Zobrazovat tlačítka Nahoru a Dolů';
$txt['onlineEnable'] = 'Zobrazovat online/offline v příspěvcích a soukromých zprávách';
$txt['enableVBStyleLogin'] = 'Zobrazovat rychlé přihlášení na každé stránce';
$txt['defaultMaxMembers'] = 'Uživatelů na stránku v seznamu uživatelů';
$txt['timeLoadPageEnable'] = 'Zobrazit čas potřebný k vytvoření stránky';
$txt['disableHostnameLookup'] = 'Zakázat dotazy na doménové jméno';
$txt['who_enabled'] = 'Povolit seznam uživatelů online';
$txt['make_email_viewable'] = 'Povolit zobrazení emailových adres';
$txt['meta_keywords'] = 'Meta klíčová slova asociovaná s fórem<div class="smalltext">Pro vyhledávače. Nechat prázdné pro výchozí nastavení.</div>';

$txt['karmaMode'] = 'Mód karmy';
$txt['karma_options'] = 'Zakázat karmu|Povolit součty karmy|Povolit kladnou/zápornou karmu';
$txt['karmaMinPosts'] = 'Minimální počet příspěvků nutný ke změně karmy';
$txt['karmaWaitTime'] = 'Nastavit čekací dobu v hodinách';
$txt['karmaTimeRestrictAdmins'] = 'I administrátoři musí respektovat čekací dobu';
$txt['karmaLabel'] = 'Titulek karmy';
$txt['karmaApplaudLabel'] = 'Titulek potlesku';
$txt['karmaSmiteLabel'] = 'Titulek pískotu';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>Důležité! Čti před zapnutím této funkce.</strong></div><br />
	SMF podporuje caching pomocí použití akcelerátorů. Podporované jsou:<br />

	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Ne Zend Optimizer)</li>
		<li>XCache</li>
        </ul>
	Caching bude fungovat jen tehdy, když je na tvém serveru PHP zkompilováno s jedním z vyjmenovaných akcelerátorů nebo je k dispozici memcache. 
        Pokud nemáš nainstalován žádný optimalizér, SMF bude používat souborové cachování.<br /><br />
	SMF provádí caching na různých úrovních. Vyšší úroveň cachingu znamená více času procesoru stráveného vyhledáváním cachované informace. Pokud máš k dispozici stroj s cachingem, doporučujeme, abys nejdřív využil caching na úrovni 1.
	<br /><br />
	Pokud používáš memcached, musíš mu nastavit detaily serverů v políčku níže. Měl bys je zadat jako seznam oddělený čárkami:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Pokud nezadáš žádný port, SMF bude používat port 11211. SMF se pokusí provádět hrubé/náhodné rozložení zátěže mezi servery.

	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF nebylo schopno detekovat žádný akcelerátor.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF detekovalo APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF detekovalo instalaci eAcceleratoru.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF detekovalo instalaci MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF detekovalo instalaci Zendu.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF detekovalo instalaci Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF detekovalo instalaci XCache.</strong>';

$txt['cache_enable'] = 'Úroveň cachingu';
$txt['cache_off'] = 'Bez cachingu';
$txt['cache_level1'] = 'Úroveň 1 cachingu (Doporučeno)';
$txt['cache_level2'] = 'Úroveň 2 cachingu';
$txt['cache_level3'] = 'Úroveň 3 cachingu (Nedoporučeno)';
$txt['cache_memcached'] = 'Nastavení Memcache';

$txt['loadavg_warning'] = '<span class="error">Pozor: níže uvedená nastavení je nutno upravovat velmi opatrně. Pokud je nastavíš příliž nízká, fórum bude <strong>nepoužitelné</strong>! Současná hodnota load average je <strong>%01.2f</strong></span> ';
$txt['loadavg_enable'] = 'Povolit load balancing na základě load averages';
$txt['loadavg_auto_opt'] = 'Práh pro zakázání automatických optimalizací databáze';
$txt['loadavg_search'] = 'Práh pro zakázání vyhledávání';
$txt['loadavg_allunread'] = 'Práh pro zákaz vyhledávání nepřečtených témat';
$txt['loadavg_unreadreplies'] = 'Práh pro zákaz vyhledávání nepřečtených odpovědí';
$txt['loadavg_show_posts'] = 'Práh pro zákah vyhledání příspěvků uživatele';
$txt['loadavg_forum'] = 'Práh pro <strong>úplné</strong> odstavení fóra';
$txt['loadavg_disabled_windows'] = '<span class="error">Podpora pro load balancing není na Windows k dispozici.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Podpora pro load balancing není povolena v konfiguraci tvého serveru.</span>';

$txt['setting_password_strength'] = 'Vyžadovaná síla hesla';
$txt['setting_password_strength_low'] = 'Nízká - minimálně 4 znaky';
$txt['setting_password_strength_medium'] = 'Střední - nesmí obsahovat uživatelské jméno';
$txt['setting_password_strength_high'] = 'Vysoká - mix různých znaků';

$txt['antispam_Settings'] = 'Anti-Spamová ochrana';
$txt['antispam_Settings_desc'] = 'Tato sekce ti umožní nastavit ověření, zda je uživatel člověk a ne robot a vybrat jak a kde se použijí.';
$txt['setting_reg_verification'] = 'Vyžadovat verifikaci na registrační stránce';
$txt['posts_require_captcha'] = 'Počet příspěvků, pod kterým musí uživatelé projít ověřením při přispívání';
$txt['posts_require_captcha_desc'] = '(0 - neomezeně, moderátoři mají výjimku)';
$txt['search_enable_captcha'] = 'Vyžadovat verifikaci při vyhledávání hosty';
$txt['setting_guests_require_captcha'] = 'Hosté musí projít ověřením při přispívání';
$txt['setting_guests_require_captcha_desc'] = '(Automaticky nastaveno, když specifikuješ minimální počet příspěvků níže)';
$txt['guests_report_require_captcha'] = 'Hosté musí projít ověřením než nahlásí příspěvěk';

$txt['configure_verification_means'] = 'Konfigurace verifikačních metod';
$txt['setting_qa_verification_number'] = 'Počet verifikační otázek, které musí uživatel zodpovědět';
$txt['setting_qa_verification_number_desc'] = '(0 - vypnuto; otázky jsou níže)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Níže můžeš nastavit, které antispamové vlastnosti chceš mít zapnuté, kdykoli chceš ověřit, že uživatel je člověk. Uživatel musí projít <em>všemi</em> ověřenímí, takže když nastavíš obě metody, budou muset projít oběma.</span>';
$txt['setting_visual_verification_type'] = 'Vizuální verifikační obrázek';
$txt['setting_visual_verification_type_desc'] = 'Čím složitější obrázek, tím hůře může být roboty proražen';
$txt['setting_image_verification_off'] = 'Žádný';
$txt['setting_image_verification_vsimple'] = 'Velmi jednoduchý - pouze text';
$txt['setting_image_verification_simple'] = 'Jednoduchý - překrývající se barevná písmena bez šumu';
$txt['setting_image_verification_medium'] = 'Střední - překrývající se barevná písmena se šumem a čárami';
$txt['setting_image_verification_high'] = 'Obtížný - zkřivená písmena, vysoké zašumění';
$txt['setting_image_verification_extreme'] = 'Extrémní - zkřivená písmena, zašumění a obdélníky';
$txt['setting_image_verification_sample'] = 'Vzorek';
$txt['setting_image_verification_nogd'] = '<strong>Upozornění:</strong> protože tento server nemá knihovnu GD, nastavení složitosti nemají žádný význam.';
$txt['setup_verification_questions'] = 'Verifikační otázky';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Pokud chceš, aby uživatelé procházeli ověřovacími otázkami, měl bys nastavit několik otázek níže. Měl bys vybírat relativně snadné otázky, odpovědi ignorují malá/velká písmena. Lze používat BBC, když chceš otázku odstranit, smaž obsah daného řádku.</span>';
$txt['setup_verification_question'] = 'Otázka';
$txt['setup_verification_answer'] = 'Odpověď';
$txt['setup_verification_add_more'] = 'Přidat otázku';

$txt['moderation_settings'] = 'Nastavení moderace';
$txt['setting_warning_enable'] = 'Povolit systém varování';
$txt['setting_warning_watch'] = 'Úroveň varování pro dozor<div class="smalltext">Kdy se nastaví uživateli dozor - 0 k vypnutí.</div>';
$txt['setting_warning_moderate'] = 'Úroveň varování pro postmoderaci<div class="smalltext">Kdy má uživatel všechny příspěvky moderované - 0 k vypnutí.</div>';
$txt['setting_warning_mute'] = 'Úroveň varování pro umlčení<div class="smalltext">Kdy už uživatel nemůže vůbec přispívat - 0 k vypnutí.</div>';
$txt['setting_user_limit'] = 'Maximální počet varovných bodů na den<div class="smalltext">Tato hodnota určuje maximální počet varovných bodů, které může jeden moderátor udělit za 24 hodin - 0 - neomezeno.</div>';
$txt['setting_warning_decrement'] = 'Automatické odmazávání varovných bodů za 24 hodin<div class="smalltext">Pouze pro uživatele, kteří nebyli v posledních 24 hodinách varováni - 0 k vypnutí.</div>';
$txt['setting_warning_show'] = 'Uživatelé, kteří smí vidět stav varování<div class="smalltext">Kdo na fóru smí vidět status varování.</div>';
$txt['setting_warning_show_mods'] = 'Pouze moderátoři';
$txt['setting_warning_show_user'] = 'Moderátoři a varovaní uživatelé';
$txt['setting_warning_show_all'] = 'Všichni';

$txt['signature_settings'] = 'Nastavení podpisů';
$txt['signature_settings_desc'] = 'Zde můžeš nastavit, jak se bude SMF chovat k podpisům.';
$txt['signature_settings_warning'] = 'Nastavení podpisů se netýká již existujících podpisů. Klikni <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">sem</a>, aby se to týkalo i existujících.';
$txt['signature_enable'] = 'Povolit podpisy';
$txt['signature_max_length'] = 'Maximální počet znaků<div class="smalltext">(0 - neomezeno)</div>';
$txt['signature_max_lines'] = 'Maximální počet řádků<div class="smalltext">(0 - neomezeno)</div>';
$txt['signature_max_images'] = 'Maximální počet obrázků<div class="smalltext">(0 - neomezeno - kromě emotikonů)</div>';
$txt['signature_allow_smileys'] = 'Povolit emotikony v podpisech';
$txt['signature_max_smileys'] = 'Maximální počet emotikonů<div class="smalltext">(0 - neomezeno)</div>';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixely)<div class="smalltext">(0 - neomezeno)</div>';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixely)<div class="smalltext">(0 - neomezeno)</div>';
$txt['signature_max_font_size'] = 'Maximální velikost písma v podpisu<div class="smalltext">(0 - neomezeno, v pixelech)</div>';
$txt['signature_bbc'] = 'Povolené značky BBC';

$txt['custom_profile_title'] = 'Vlastní položky profilu';
$txt['custom_profile_desc'] = 'Zde můžeš vytvářet položky profilu, který se lépe bude blížit potřebám tvého fóra';
$txt['custom_profile_active'] = 'Aktivní';
$txt['custom_profile_fieldname'] = 'Jméno položky';
$txt['custom_profile_fieldtype'] = 'Typ položky';
$txt['custom_profile_make_new'] = 'Nová položka';
$txt['custom_profile_none'] = 'Ještě jsi nevytvořil žádné vlastní položky profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Dlouhý text';
$txt['custom_profile_type_select'] = 'Select Box';
$txt['custom_profile_type_radio'] = 'Radio Button';
$txt['custom_profile_type_check'] = 'Checkbox';

$txt['custom_add_title'] = 'Přidat položku profilu';
$txt['custom_edit_title'] = 'Editovat položku profilu';
$txt['custom_edit_general'] = 'Zobrazení';
$txt['custom_edit_input'] = 'Vkládání';
$txt['custom_edit_advanced'] = 'Pokročilé';
$txt['custom_edit_name'] = 'Jméno';
$txt['custom_edit_desc'] = 'Popis';
$txt['custom_edit_profile'] = 'Sekce profilu';
$txt['custom_edit_profile_desc'] = 'Ve které části profilu se tato položka edituje.';
$txt['custom_edit_profile_none'] = 'V žádné';
$txt['custom_edit_registration'] = 'Zobrazovat při registraci';
$txt['custom_edit_registration_disable'] = 'Ne';
$txt['custom_edit_registration_allow'] = 'Ano';
$txt['custom_edit_registration_require'] = 'Ano, a vyžaduj zadání';
$txt['custom_edit_display'] = 'Zobrazovat v tématu';
$txt['custom_edit_picktype'] = 'Typ položky';

$txt['custom_edit_max_length'] = 'Maximální délka';
$txt['custom_edit_max_length_desc'] = '(0 - neomezeně)';
$txt['custom_edit_dimension'] = 'Rozměry';
$txt['custom_edit_dimension_row'] = 'Řádků';
$txt['custom_edit_dimension_col'] = 'Sloupců';
$txt['custom_edit_bbc'] = 'Povolit BBC';
$txt['custom_edit_options'] = 'Volby';
$txt['custom_edit_options_desc'] = 'Nech položku prázdnou k odstranění. Radio button volí výchozí volbu.';
$txt['custom_edit_options_more'] = 'Více';
$txt['custom_edit_default'] = 'Výchozí stav';
$txt['custom_edit_active'] = 'Aktivní';
$txt['custom_edit_active_desc'] = 'Pokud nebude zvoleno, tuto položku nikdo neuvidí.';
$txt['custom_edit_privacy'] = 'Soukromí';
$txt['custom_edit_privacy_desc'] = 'Kdo uvidí a může editovat tuto položku.';
$txt['custom_edit_privacy_all'] = 'Uživatelé uvidí, majitel smí editovat';
$txt['custom_edit_privacy_see'] = 'Uživatelé uvidí, administrátoři smí editovat';
$txt['custom_edit_privacy_owner'] = 'Uživatelé nevidí, majitel a administrátoři smí editova.';
$txt['custom_edit_privacy_none'] = 'Vidí pouze administrátoři';
$txt['custom_edit_can_search'] = 'Prohledatelné';
$txt['custom_edit_can_search_desc'] = 'Z může být tato položka prohledávaná ze seznamu uživatelů.';
$txt['custom_edit_mask'] = 'Vstupní maska';
$txt['custom_edit_mask_desc'] = 'Pro textové položky lze specifikovat vstupní masku k validaci dat.';
$txt['custom_edit_mask_email'] = 'Platný email';
$txt['custom_edit_mask_number'] = 'Číslo';
$txt['custom_edit_mask_nohtml'] = 'Žádné HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Pokročilé)';
$txt['custom_edit_enclose'] = 'Zobrazit v textu (Volitelnél)';
$txt['custom_edit_enclose_desc'] = '<strong>Důrazně</strong> doporučujeme použít vstupní masku k validaci uživatelských vstupů.';

$txt['custom_edit_placement'] = 'Vybrat umístění';
$txt['custom_edit_placement_standard'] = 'Standardní (s titulkem)';
$txt['custom_edit_placement_withicons'] = 'U ikon';
$txt['custom_edit_placement_abovesignature'] = 'Nad podpisem';
$txt['custom_profile_placement'] = 'Umístění';
$txt['custom_profile_placement_standard'] = 'Standardní';
$txt['custom_profile_placement_withicons'] = 'U ikon';
$txt['custom_profile_placement_abovesignature'] = 'Nad podpisem';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Jsi si jistý, že chceš smazat tuto položku - všechna uživatelská data s ní svázaná budou smazána!';

$txt['standard_profile_title'] = 'Standardní položky profilu';
$txt['standard_profile_field'] = 'Položka';

$txt['core_settings_welcome_msg'] = 'Vítej u svého nového fóra';
$txt['core_settings_welcome_msg_desc'] = 'Doporučujeme, aby sis vybral, které hlavní moduly SMF chceš povolit. Nejlepší je povolit pouze ty moduly, které potřebuješ!';
$txt['core_settings_item_cd'] = 'Kalendář';
$txt['core_settings_item_cd_desc'] = 'Tento modul otvírá mnoho možností, které umožní uživatelům zobrazovat kalendář, přidávat a prohlížet události, vidět narozeniny a mnoho dalšího.';
$txt['core_settings_item_cp'] = 'Rozšíření profilu';
$txt['core_settings_item_cp_desc'] = 'Toto umožňuje schovávat standardní položky profilu, přidávat nutné položky při registraci a vytvářet nové položky profilu.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma je modul, který ukazuje popularitu uživatele. Uživatelé, pokud jim je to dovoleno, mohou \'tleskat\' nebo \'(vy)pískat\' jiné uživatele, z čehož se pak vypočítává popularita.';
$txt['core_settings_item_ml'] = 'Moderační, administrátorské a uživatelské logy';
$txt['core_settings_item_ml_desc'] = 'Povolit moderační a administrátorské logy a udržovat záznamy o klíčových akcích provedených na fóru. Také umožnění sledování historie změn v uživatelských profilech..';
$txt['core_settings_item_pm'] = 'Postmoderace';
$txt['core_settings_item_pm_desc'] = 'Postmoderace ti umožní vybrat skupiny a diskuse, kde musí být příspěvky schvalovány, než jsou zveřejněny. Ujisti se, že po zapnutí nastavíš všechna oprávnění, která jsou k tomu potřeba.';
$txt['core_settings_item_ps'] = 'Předplatné';
$txt['core_settings_item_ps_desc'] = 'Předplatné umožňuje uživatelům platit za změnu skupiny na fóru a tím zvýšit jejich uživatelská práva.';
$txt['core_settings_item_rg'] = 'Generace přehledů';
$txt['core_settings_item_rg_desc'] = 'Tento modul umožnuje generaci tisknutelných přehledů, které prezentují informace o nastavení fóra v jednoduše přehledné formě - velmi užitečné pro velká fóra.';
$txt['core_settings_item_sp'] = 'Hlídání vyhledávačů';
$txt['core_settings_item_sp_desc'] = 'Povolení tohoto modulu umožní administrátorům sledovat vyhledávací roboty při indexování fóra.';
$txt['core_settings_item_w'] = 'Systém varování';
$txt['core_settings_item_w_desc'] = 'Tato funkčnosti umožňuje administrátorům a moderátorům udělovat varování uživatelům; také to umožňuje odebírat automaticky práva, když se jim zvyšuje úroveň varování. Aby byla tato vlastnost plně využitelná,  &quot;Postmoderace&quot; by měla být rovněž zapnuta.';
$txt['core_settings_switch_on'] = 'Klikni pro zapnutí';
$txt['core_settings_switch_off'] = 'Klikni pro vypnutí';
$txt['core_settings_enabled'] = 'Zapnuto';
$txt['core_settings_disabled'] = 'Vypnuto';

$txt['languages_lang_name'] = 'Jméno jazyka';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Výchozí';
$txt['languages_character_set'] = 'Znaková sada';
$txt['languages_users'] = 'Uživatelů';
$txt['language_settings_writable'] = 'Upozornění: Settings.php nemá právo zápisu, nastavení výchozího jazyka nemůže být uloženo.';
$txt['edit_languages'] = 'Editovat jazyky';
$txt['lang_file_not_writable'] = '<strong>Upozornění:</strong> Soubor primárního jazyka (%1$s) nemá právo zápisu. Musíš povolit zápis, než budeš moci dělat změny.';
$txt['lang_entries_not_writable'] = '<strong>Upozornění:</strong> Jazykový soubor, který chceš upravovat (%1$s) nemá právo zápisu. is not writable. Musíš povolit zápis, než budeš moci dělat změny.';
$txt['languages_ltr'] = 'Zprava do leva';

$txt['add_language'] = 'Přidat jazyk';
$txt['add_language_smf'] = 'Stáhnout ze Simple Machines';
$txt['add_language_smf_browse'] = 'Napiš jméno jazyka pro vyhledání nebo nech prázdno pro prohledání všech.';
$txt['add_language_smf_install'] = 'Instalovat';
$txt['add_language_smf_found'] = 'Byly nalezeny tyto jazyky. Klikni na Instalovat vedle vybraného jazyka, budeš pak přesměrován do správce balíčku k instalaci.';
$txt['add_language_error_no_response'] = 'Web Simple Machines neodpovídá. Zkus to prosím později.';
$txt['add_language_error_no_files'] = 'Nebyly nalezeny žádné soubory.';
$txt['add_language_smf_desc'] = 'Popis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Verze';

$txt['edit_language_entries_primary'] = 'Následují hlavní nastavení pro tento jazykový balíček.';
$txt['edit_language_entries'] = 'Editovat položky jazyka';
$txt['edit_language_entries_file'] = 'Vybrat položky k úpravě';
$txt['languages_dictionary'] = 'Slovník';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'Toto je pro <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - když je nainstalován';
$txt['languages_rtl'] = 'Povolit mód &quot;Zprava do leva&quot;';

$txt['lang_file_desc_index'] = 'Obecné řetězce';
$txt['lang_file_desc_EmailTemplates'] = 'Emailové šablony';

$txt['languages_download'] = 'Stáhnout jazykový balíček';
$txt['languages_download_note'] = 'Tento seznam obsahuje všechny soubory, které jsou obsaženy v tomto jazykovém balíčku a užitečné informace o každém z nich. Všechny soubory, které jsou zaškrtnuty, budou zkopírovány.';
$txt['languages_download_info'] = '<strong>upozornění:</strong>
	<ul class="normallist">
		<li>Soubory, které nemají status &quot;Modofikovatelné&quot; což znamená, že do nich SMF nemůže zapsat a musíš nejdříve povolit zápis, ať už manuálně nebo přes ftp klienta na konci stránky.</li>
		<li>Informace o verzi ukazuje poslední verzi SMF, pro kterou byl soubor upraven. Pokud je zeleně, je novější než nainstalovaná. Pokud oranžově, je stejná a pokud červeně, máš novější soubory než jsou v balíčku.</li>
		<li>Pokud soubor existuje, sloupec &quot;Již existuje&quot; může nabývat dvou hodnot. &quot;Stejný&quot; znamená, že soubor existuje v identické formě není třeba ho přepisovat.. &quot;Jiný&quot; znamená, že obsah se nějak liší a přepis je dobré řešení.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primární soubory';
$txt['languages_download_theme_files'] = 'Soubory vzhledu';
$txt['languages_download_filename'] = 'Jméno souboru';
$txt['languages_download_dest'] = 'Cílová cesta';
$txt['languages_download_writable'] = 'Modifikovatelné';
$txt['languages_download_version'] = 'Verze';
$txt['languages_download_older'] = 'Máš nainstalovanou novější verzi tohoto souboru, přepis se nedoporučuje.';
$txt['languages_download_exists'] = 'Již existuje';
$txt['languages_download_exists_same'] = 'Stejný';
$txt['languages_download_exists_different'] = 'Jiný';
$txt['languages_download_copy'] = 'Kopírovat';
$txt['languages_download_not_chmod'] = 'Nemůžeš pokračovat s instalací dokud nebudou všechny vybrané soubory s právy zápisu.';
$txt['languages_download_illegal_paths'] = 'Balíček obsahuje neplatné cesty - prosím kontaktuj Simple Machines';
$txt['languages_download_complete'] = 'Instalace dokončena';
$txt['languages_download_complete_desc'] = 'Jazykový balíček byl úspěšně nainstalován. Klikni <a href="%1$s">sem</a> pro návrat na stránku s jazyky';
$txt['languages_delete_confirm'] = 'Jsi si jistý, že chceš smazat tento jazyk?';

?>
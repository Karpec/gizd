<?php
$language['ACP_BAN_IP']='Banovat IP';
$language["ACP_ADD_WARN"]="Torrent moderation reasons";
$language["WARN_TITLE"]="Title of reason";
$language["WARN_TEXT"]="Explain reason";
$language["WARN_ADD_REASON"]="Add new reason";
$language["TRUSTED"]="Trusted";
$language["TRUSTED_MODERATION"]="Trusted moderation";
$language["TORRENT_STATUS"]="Torrent status";
$language["TORRENT_MODERATION"]="Moderation";
$language["MODERATE_TORRENT"] = "Moderate";
$language["MODERATE_STATUS_OK"] = "Ok";
$language["MODERATE_STATUS_BAD"] = "Bad";
$language["MODERATE_STATUS_UN"] = "Unmoderated";
$language["FRM_CONFIRM_VALIDATE"] = "Confirm revalidation";
$language["MODERATE_PANEL"] = "Mod Torrent Panel";
$language["ACP_RATIO_EDITOR"] = "Ratio Editor";
$language["RATIO_USERNAME"] = "Username";
$language["RATIO_UPLOADED"] = "Uploaded";
$language["RATIO_DOWNLOADED"] = "Downloaded";
$language["RATIO_INPUT_MEASURE"] = "Select input measure:";
$language["RATIO_BYTES"] = "Bytes";
$language["RATIO_K_BYTES"] = "KBytes";
$language["RATIO_M_BYTES"] = "MBytes";
$language["RATIO_G_BYTES"] = "GBytes";
$language["RATIO_T_BYTES"] = "TBytes";
$language["RATIO_ACTION"] = "Action:";
$language["RATIO_ADD"] = "Add";
$language["RATIO_REMOVE"] = "Remove";
$language["RATIO_REPLACE"] = "Replace";
$language["RATIO_HEADER"] = "Update users ratio";
$language["RATIO_SUCCES"] = "Succes";
$language["RATIO_UPDATE_SUCCES"] = "You succesfully updated this users ratio";
$language["SB_UPDATE_SUCCES"] = "You succesfully updated this users seedbonus";
$language['ACP_FORUM']='Nastavení fóra';
$language['ACP_USER_GROUP']='Nastavení skupin';
$language['ACP_STYLES']='Nastavení vzhledu';
$language['ACP_LANGUAGES']='Nastavení jazyka';
$language['ACP_CATEGORIES']='Nastavení kategorií';
$language['ACP_TRACKER_SETTINGS']='Nastavení Trackeru';
$language['ACP_OPTIMIZE_DB']='Optimalizovat Vaší Databázi';
$language['ACP_CENSORED']='Nastavení cenzury slov';
$language['ACP_DBUTILS']='Příslušenství Databáze';
$language['ACP_HACKS']='Hacky';
$language['ACP_HACKS_CONFIG']='Nastavení hacků';
$language['ACP_MODULES']='Moduly';
$language['ACP_MODULES_CONFIG']='Nastavení modulů';
$language['ACP_MASSPM']='Hromadné PM';
$language['ACP_MASSEMAIL']='Hromadný EMAIL';
$language['ACP_PRUNE_TORRENTS']='Pročištění torrentů';
$language['ACP_GOLD']='Nastavení Gold torrentů';
$language['ACP_PRUNE_USERS']='Pročištění uživatelů';
$language['ACP_SITE_LOG']='Zobrazit Log';
$language['ACP_SEARCH_DIFF']='Vyhledat rozdíly';
$language['ACP_BLOCKS']='Nastavení bloků stránky';
$language['ACP_POLLS']='Nastavení Anket';
$language['ACP_MENU']='Admin Menu ';
$language['ACP_FRONTEND']='Nastavení obsahu';
$language['ACP_USERS_TOOLS']='Uživatelské nástroje';
$language['ACP_TORRENTS_TOOLS']='Nástroje Torrentů';
$language['ACP_OTHER_TOOLS']='Ostatní nástroje';
$language['ACP_MYSQL_STATS']='MySql Statistika';
$language['XBTT_BACKEND']='xbtt možnosti';
$language['XBTT_USE']='Použít <a href="http://xbtt.sourceforge.net/tracker/" target="_blank">xbtt</a> as backend?';
$language['XBTT_URL']='Základní xbtt url např. http://localhost:2710';
$language['GENERAL_SETTINGS']='Hlavní nastavení';
$language['TRACKER_NAME']='Jméno&rsquo;s serveru';
$language['TRACKER_BASEURL']=' Základní URL Trackeru(bez poslední /)';
$language['TRACKER_ANNOUNCE']='URL Announce trackeru(Jednu URL na řádek)'.($XBTT_USE?'<br />'."\n".'<span style="color:#FF0000; font-weight: bold;"> Zkontroluje si svou Annouce URL dvakrát !! Máte povolené xbtt backend...</span>':'');
$language['TRACKER_EMAIL']='Email majitele Trackeru';
$language['TORRENT_FOLDER']='Složka pro torrenty';
$language['ALLOW_EXTERNAL']='Povolit Externí torrenty ';
$language['ALLOW_GZIP']='Povolit GZIP';
$language['ALLOW_DEBUG']='Ukázat Debug informace na  spodní části stránky ';
$language['ALLOW_DHT']='Zakázat DHT (privátní nastevení v torrentu)<br />'."\n".'bude nastaveno pouze pro nově uploadnuté torrenty';
$language['ALLOW_LIVESTATS']='Umožnět Live Stats (auto aktualizace torrentů) (varování vysoké zatížení serveru !)';
$language['ALLOW_SITELOG']='Povolit Základní Log serveru (log mění Torrenty/Usery)';
$language['ALLOW_HISTORY']='Povolit základní historii (torrenty/Usery)';
$language['ALLOW_PRIVATE_ANNOUNCE']='Privátní Announce';
$language['ALLOW_PRIVATE_SCRAPE']='Privátní Scrape';
$language['SHOW_UPLOADER']='Zobrazovat nick Uploaderů';
$language['USE_POPUP']='Použít Popup pro detaily torrentu či peeru';
$language['DEFAULT_LANGUAGE']='Defaultní jazyk';
$language['DEFAULT_CHARSET']='Defaultní kodování stránek<br />'."\n".'(pokud není Váš jazyk zobrazen správně, zkuste UTF-8)';
$language['DEFAULT_STYLE']='Defaultní Styl';
$language['MAX_USERS']='Max Userů (číslo, 0 = bez limitu)';
$language['MAX_TORRENTS_PER_PAGE']='Torrentů na stránku';
$language['SPECIFIC_SETTINGS']='Specifické nastavení trackeru';
$language['SETTING_INTERVAL_SANITY']='Interval čištění (číselně sekund, 0 = vypnuto)<br />Dobrá hodnota, pokud je povoleno je 1800 (30 minut)';
$language['SETTING_INTERVAL_EXTERNAL']='Obnova externího internalu (číselně sekund, 0 = vypnuto)<br />Záleží na množství externích torrentů';
$language['SETTING_INTERVAL_MAX_REANNOUNCE']='Maximální interval obnovy announce (číselně sekund)';
$language['SETTING_INTERVAL_MIN_REANNOUNCE']='Maximální interval obnovy announce (číselně sekund)';
$language['SETTING_MAX_PEERS']='Max počet peeru na požádání (číselně )';
$language['SETTING_DYNAMIC']='Povolit dynamické Torrenty(Není doporučeno)';
$language['SETTING_NAT_CHECK']='NAT kontrola';
$language['SETTING_PERSISTENT_DB']='Trválé spojení (Databáze, Není doporučeno)';
$language['SETTING_OVERRIDE_IP']='Povolit uživatelům přepsat detekovanou IP';
$language['SETTING_CALCULATE_SPEED']='Počítat Rychlost a Download v bytech';
$language['SETTING_PEER_CACHING']='Cache tabulky (uvolní vytížení databáze)';
$language['SETTING_SEEDS_PID']='Max mož. seederů se stejným PID';
$language['SETTING_LEECHERS_PID']='Max mož. leechů se stejným PID';
$language['SETTING_VALIDATION']='Režim validace';
$language['SETTING_CAPTCHA']='Bezpečný Registrace(užívá ImageCode, GD+Freetype) )';
$language['SETTING_FORUM']='Link na FORUM může být :<br /><li><font color="#FF0000">Vnitřní</font>prázdná (žádná hodnota) pro vnitřní fórum </li><li><font color="#FF0000">smf</font> externí <a target="_new" href="http://www.simplemachines.org">Simple Machines Forum</a></li><li>Vaše vlastní řešení fóra (specifikuje url) </li>';
$language['BLOCKS_SETTING']='Nastavení stránky Index/Blocks';
$language['SETTING_CLOCK']='Typ hodin';
$language['SETTING_NUM_NEWS']='Limit pro blok posledních zpráv (číslo)';
$language['SETTING_NUM_POSTS']='Limit pro Forum blok (číslo) ';
$language['SETTING_NUM_LASTTORRENTS']='Limit pro blok Poslední Torrenty (číslo)';
$language['SETTING_NUM_TOPTORRENTS']='Limit pro blok  Nejvíce Populární Torrenty (číslo)';
$language['CLOCK_ANALOG']='Analogové';
$language['CLOCK_DIGITAL']='Digitální';
$language['CONFIG_SAVED']='Změny uloženy!';
$language['CACHE_SITE']='Interval cache (sekundy číselně, 0 = vypnuto)';
$language['ALL_FIELDS_REQUIRED']='Všechny položky jsou požadovány!';
$language['SETTING_CUT_LONG_NAME']='Uřízni dlouhé názvy torrentů za x znaků (0 = vypnuto)';
$language['MAILER_SETTINGS']='Mailer';
$language['SETTING_MAIL_TYPE']='Mail typ';
$language['SETTING_SMTP_SERVER']='SMTP Server';
$language['SETTING_SMTP_PORT']='SMTP Port';
$language['SETTING_SMTP_USERNAME']='SMTP Uživatel';
$language['SETTING_SMTP_PASSWORD']='SMTP Heslo';
$language['SETTING_SMTP_PASSWORD_REPEAT']='SMTP Heslo (znova)';
$language['XBTT_TABLES_ERROR']='Můžete importovat xbtt tabulky (podívejte se na instalační instrukce) do Vaší databáze před aktivací xbtt verze!';
$language['XBTT_URL_ERROR']='xbtt základní URL je povinná!';
// BAN FORM
$language['BAN_NOTE']='V této části administrace, můžete vidět banované IP adresy přístupu na tracker.<br />'."\n".'Musíte vložit rozsah od (první IP) do (poslední IP).';
$language['BAN_NOIP']='Nejsou žádné banované IP';
$language['BAN_FIRSTIP']='První IP';
$language['BAN_LASTIP']='Poslední IP';
$language['BAN_COMMENTS']='Komentáře';
$language['BAN_REMOVE']='Odstranit';
$language['BAN_BY']='Kým';
$language['BAN_ADDED']='Datum';
$language['BAN_INSERT']='Vložte nový rozsah banované IP';
$language['BAN_IP_ERROR']='Špatná IP adresa.';
$language['BAN_NO_IP_WRITE']='Nenapsali jste žádnou IP adresu. Sorry!';
$language['BAN_DELETED']='Rozsah IP adres byl odstraněn z databáze.<br />'."\n".'<br />'."\n".'<a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=banip&amp;action=read">Zpět do Banovat IP</a>';
// LANGUAGES
$language['LANGUAGE_SETTINGS']='Nastavení jazyka';
$language['LANGUAGE']='Jazyk';
$language['LANGUAGE_ADD']='Vložte nový Jazyk';
$language['LANGUAGE_SAVED']='Gratulujeme, jazyky byl přidán.';
// STYLES
$language['STYLE_SETTINGS']='Style/Themes nastavení';
$language['STYLE_EDIT']='Úprava Style';
$language['STYLE_ADD']='Vložte nový styl';
$language['STYLE_NAME']='Jméno stylu';
$language['STYLE_URL']='URL stylu';
$language['STYLE_FOLDER']='Složka stylu';
$language['STYLE_NOTE']='V této sekci můžete nastavovat styl, ale musíte uploadovat soubory pomocí FTP nebo SFTP.';
// CATEGORIES
$language['CATEGORY_SETTINGS']='Nastavení Kategorií';
$language['CATEGORY_IMAGE']='Obrázek kategorie';
$language['CATEGORY_ADD']='Vložte novou kategorii';
$language['CATEGORY_SORT_INDEX']='Sort Index';
$language['CATEGORY_FULL']='Kategorie';
$language['CATEGORY_EDIT']='Editovat Kategorie';
$language['CATEGORY_SUB']='Sub-Kategorie';
$language['CATEGORY_NAME']='Kategorie';
// CENSORED
$language['CENSORED_NOTE']='Napište <b>Jedno slovo na řádku</b> aby jste slovo CENZOROVALI (bude změněno na  *censored*)';
$language['CENSORED_EDIT']='Editovat cenzorovaná slova';
// BLOCKS
$language['BLOCKS_SETTINGS']='Nastavení bloku';
$language['ENABLED']='Povolené';
$language['ORDER']='Pořadí';
$language['BLOCK_NAME']='Jméno bloku';
$language['BLOCK_POSITION']='Pozice';
$language['BLOCK_TITLE']='Titulek pro jazyk (bude použitý pro zobrazení překladu např. HRA v eng potom bude GAMES)';
$language['BLOCK_USE_CACHE']='Cache this block?';
$language['ERR_BLOCK_NAME']='Musíte vybrat jedno z povolených souborů v liště!';
$language['BLOCK_ADD_NEW']='Přidat nový blok';
// POLLS (more in lang_polls.php)
$language['POLLS_SETTINGS']='Nastavení Anket';
$language['POLLID']='Hlasuj';
$language['INSERT_NEW_POLL']='Vlož novou Anketu';
$language['CANT_FIND_POLL']='Nemohu najít žádnou anketu';
$language['ADD_NEW_POLL']='Přidej anketu';
// GROUPS
$language['USER_GROUPS']='Nastavení skupin (klikněte na jméno skupiny pro Editaci)';
$language['VIEW_EDIT_DEL']='Zobrazit/ Editovat/ Smazat';
$language['CANT_DELETE_GROUP']='Tento Level/Skupina nemůže být Zrušena!';
$language['GROUP_NAME']='Jméno skupiny';
$language['GROUP_VIEW_NEWS']='Zobrazit novinky';
$language['GROUP_VIEW_FORUM']='Zobrazit Forum';
$language['GROUP_EDIT_FORUM']='Editace Fóra';
$language['GROUP_BASE_LEVEL']='Vyber základní level';
$language['GROUP_ERR_BASE_SEL']='Error nebyl vybrán základní level!';
$language['GROUP_DELETE_NEWS']='Mazání novinky';
$language['GROUP_PCOLOR']='Prefix barva (něco jako ';
$language['GROUP_SCOLOR']='Suffix barva (něco jako ';
$language['GROUP_VIEW_TORR']='Zobrazit torrenty';
$language['GROUP_EDIT_TORR']='Edit Torrents';
$language['GROUP_VIEW_USERS']='Zobrazit Uživatele';
$language['GROUP_DELETE_TORR']='Mazání torrenty';
$language['GROUP_EDIT_USERS']='Editovat Uživatele';
$language['GROUP_DOWNLOAD']='Umožnit stahování';
$language['GROUP_DELETE_USERS']='Mazání Uživatele';
$language['GROUP_DELETE_FORUM']='Mazání Forum';
$language['GROUP_GO_CP']='Může vstoupit do Admin CP';
$language['GROUP_EDIT_NEWS']='Editovat novinky';
$language['GROUP_ADD_NEW']='Přidat novou skupinu';
$language['GROUP_UPLOAD']='Umožnit uploadovat';
$language['GROUP_WT']='Čekací doba pokud je ratio <1 ';
$language['GROUP_EDIT_GROUP']='Editovat skupinu';
$language['GROUP_VIEW']='Zobrazit';
$language['GROUP_EDIT']='Editovat';
$language['GROUP_DELETE']='Mazání';
$language['INSERT_USER_GROUP']='Vložit novou uživatelskou skupinu';
$language['ERR_CANT_FIND_GROUP']='Nemohu nalést skupinu!';
$language['GROUP_DELETED']='Skupina byla smazána!';
// MASS PM
$language['USERS_FOUND']='Uživatelé nalezeni';
$language['USERS_PMED']='Obeslaní uživatelé';
$language['WHO_PM']=' Komu má být PM zaslána?';
$language['MASS_SENT']='Hromadná PM odeslána!!!';
$language['MASS_PM']='Hromadná PM';
$language['MASS_PM_ERROR']='Možná by nebylo špatné něco napsat před odesláním!!!';
$language['RATIO_ONLY']='Pouze toto ratio';
$language['RATIO_GREAT']='Vyšší než toto ratio';
$language['RATIO_LOW']='Nižší než toto ratio';
$language['RATIO_FROM']='Od';
$language['RATIO_TO']='Komu';
$language['MASSPM_INFO']='Info';
// PRUNE USERS
$language['PRUNE_USERS_PRUNED']='Pročištění uživatelů';
$language['PRUNE_USERS']='Pročisti uživatele';
$language['PRUNE_USERS_INFO']='Vložte počet dnů za které bude uživatel považován za "mrtvého" (nepřipojený od x dny)';
// SEARCH DIFF
$language['SEARCH_DIFF']='Vyhledat rozdíly';
$language['SEARCH_DIFF_MESSAGE']='Zpráva';
$language['DIFFERENCE']='Rozdíly';
$language['SEARCH_DIFF_CHANGE_GROUP']='Změn uživatelskou skupinu';
// PRUNE TORRENTS
$language['PRUNE_TORRENTS_PRUNED']='Pročištění torrentů';
$language['PRUNE_TORRENTS']='Pročisti torrenty';
$language['PRUNE_TORRENTS_INFO']='Vložte počet dnů za které bude torrent považován za "mrtvý"';
$language['LEECHERS']='leechů';
$language['SEEDS']='seedů';
// GOLD TORRENTS
$language['GOLD_PICTURE']='Obrázek pro zlatý';
$language['SILVER_PICTURE']='Obrázek pro stříbrný';
$language['GOLD_LEVEL']='Uživatelská hodnost';
$language['GOLD_DESCRIPTION']='Popis zlatého torrentu';
$language['SILVER_DESCRIPTION']='Popis stříbrného torrentu';
$language['CLASSIC_DESCRIPTION']='Popis klasického torrentu';
// DBUTILS
$language['DBUTILS_TABLENAME']='Jméno tabulky';
$language['DBUTILS_RECORDS']='Nahrávka';
$language['DBUTILS_DATALENGTH']='Velikost dat';
$language['DBUTILS_OVERHEAD']='Overhead';
$language['DBUTILS_REPAIR']='Opravit';
$language['DBUTILS_OPTIMIZE']='Optimalizovat';
$language['DBUTILS_ANALYSE']='Analyzovat';
$language['DBUTILS_CHECK']='Zkontolovat';
$language['DBUTILS_DELETE']='Smazat';
$language['DBUTILS_OPERATION']='Operace';
$language['DBUTILS_INFO']='Info';
$language['DBUTILS_STATUS']='Status';
$language['DBUTILS_TABLES']='Tabulky';
// MYSQL STATUS
$language['MYSQL_STATUS']='MySQL Status';
// SITE LOG
$language['SITE_LOG']='Besttracker Log';
// FORUMS
$language['FORUM_MIN_CREATE']='Min skupina pro vytvořit';
$language['FORUM_MIN_WRITE']='Min skupina pro psaní';
$language['FORUM_MIN_READ']='Min skupina pro čtení';
$language['FORUM_SETTINGS']='Nastavení Fóra';
$language['FORUM_EDIT']='Editovat Forum';
$language['FORUM_ADD_NEW']='přidat nové Forum';
$language['FORUM_PARENT']='Zdroj Fóra';
$language['FORUM_SORRY_PARENT']='(Sorry, Nemůžu mít rodiče, protože jsem já sám rodič fóra)';
$language['FORUM_PRUNE_1']=' Toto forum obsahuje topiky nebo příspěvky!<br />Ztratíte všechna data...<br />';
$language['FORUM_PRUNE_2']='Opravdu chcete zrušit toto forum?';
$language['FORUM_PRUNE_3']='Nebo jít zpět.';
$language['FORUM_ERR_CANNOT_DELETE_PARENT']='Nemůžete smazat forum má potomky, přesuňte potomky na jiné místo a zkuste to znovu';
// MODULES
$language['ADD_NEW_MODULE']='Přidej nový modul';
$language['TYPE']='Druh';
$language['DATE_CHANGED']='Datum změny ';
$language['DATE_CREATED']='Datum vytvoření';
$language['ACTIVE_MODULES']='Aktivní moduly: ';
$language['NOT_ACTIVE_MODULES']='Ne - Aktivní Moduly: ';
$language['TOTAL_MODULES']='Celkově Modulů: ';
$language['DEACTIVATE']='Deaktivovat';
$language['ACTIVATE']='Aktivovat';
$language['STAFF']='Vedení';
$language['MISC']='Různé';
$language['TORRENT']='Torrent';
$language['STYLE']='Style';
$language['ID_MODULE']='ID';
// HACKS
$language['HACK_TITLE']='Název';
$language['HACK_VERSION']='Verze';
$language['HACK_AUTHOR']='Autor';
$language['HACK_ADDED']='Přidáno';
$language['HACK_NONE']='Nejsou instalované žádné hacky';
$language['HACK_ADD_NEW']='Přidej nový hack';
$language['HACK_SELECT']='Vyber';
$language['HACK_STATUS']='Status';
$language['HACK_INSTALL']='Instalul';
$language['HACK_UNINSTALL']='Odinstaluj';
$language['HACK_INSTALLED_OK']=' Hack byl ÚSPĚŠNĚ  instalovanán !<br />'."\n".'Aby jste viděli které hacky jsou instalované jděte zpět do <a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=hacks&amp;action=read">Admin CP (Hacky)</a>';
$language['HACK_BAD_ID']=' Error chybné ID hacku.';
$language['HACK_UNINSTALLED_OK']=' Hack byl ÚSPĚŠNĚ odinstalován!<br />'."\n".'Aby jste viděli které hacky jsou instalované jděte zpět do  <a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=hacks&amp;action=read">Admin CP (Hacky)</a>';
$language['HACK_OPERATION']='Operace';
$language['HACK_SOLUTION']='Řešení';
// added rev 520
$language['HACK_WHY_FTP']='Některé soubory instalovaného hacku potřebují upravit nejsou zapisovatelné (CHMOD). <br />'."\n".'Toto je možné udělat přes FTP změnou chmod nebo vytvořením souborů a/nebo složek. <br />'."\n".'Vaše FTP informace mohou být dočasně uložené pro pozdější operace instalace hacku.';
$language['HACK_FTP_SERVER']='FTP Server';
$language['HACK_FTP_PORT']='FTP Port';
$language['HACK_FTP_USERNAME']='FTP Uživatelské jméno';
$language['HACK_FTP_PASSWORD']='FTP Heslo';
$language['HACK_FTP_BASEDIR']='Local path for xbtit (path from the root when you login using FTP)';
// USERS TOOLS
$language['USER_NOT_DELETE']='Nemůžete smazat uživatele Guest nebo sám sebe!';
$language['USER_NOT_EDIT']='Nemůžete editovat uživatele Guest nebo sám sebe';
$language['USER_NOT_DELETE_HIGHER']='Nemůžete smazat uživatele s vyšší hodností než máte!.';
$language['USER_NOT_EDIT_HIGHER']='Nemůžete editovat uživatele s vyšší hodností než máte!';
$language['USER_NO_CHANGE']='Žádné změny nebyly provedeny.';


$language["BLACKJACK_ADMIN"]="Blackjack Administation";
$language["BLACKJACK_STAKE"]="Cost per game (MB)";
$language["BLACKJACK_PRIZE"]="Beating the dealer with Blackjack pays";
$language["NORMAL_PRIZE"]="Beating the dealer normally pays";
$language["BLACKJACK_UPDATED"]="Blackjack settings updated, please note the new settings may take a minute to apply.<br /><br /><a href='javascript: history.go(-1);'>Return to previous page</a>";
$language["BLACKJACK_INFO"]="<br />Typical Blackjack pays 1:1 for beating the dealer or 3:2 (1.5:1) for beating the dealer with Blackjack<br />however you can set the prize to whatever you like. These are the prizes for the current settings:<br /><br /><li>On a stake of ".makesize($btit_settings["bj_blackjack_stake"])." Beating the dealer with Blackjack pays ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_blackjack_prize"])+$btit_settings["bj_blackjack_stake"])."</li><li>On a stake of ".makesize($btit_settings["bj_blackjack_stake"])." Beating the dealer pays ".makesize(($btit_settings["bj_blackjack_stake"]*$btit_settings["bj_normal_prize"])+$btit_settings["bj_blackjack_stake"])."</li>";


//Manual Hack Install
$language['MHI_VIEW_INSRUCT'] = 'View manual installation instructions?';
$language['MHI_MAN_INSRUCT_FOR'] = 'Manual Installation instructions for';
$language['MHI_RUN_QUERY'] = 'Run the following SQL Query via phpMyAdmin';
$language['MHI_IN'] = 'In';
$language['MHI_ALSO_IN'] = 'Also in';
$language['MHI_FIND_THIS'] = 'find this';
$language['MHI_ADD_THIS'] = 'Add this';
$language['MHI_IT'] = 'it';
$language['MHI_REPLACE'] = 'Replace with';
$language['MHI_COPY'] = 'Copy';
$language['MHI_AS'] = 'as';

$language["ACP_SECSUI_SET"]="Security Suite Settings";
$language["SECSUI_QUAR_SETTING"]="Uploaded Files Quarantine Settings";
$language["SECSUI_QUAR_TERMS_1"]="Quarantine Search Terms (one per line)";
$language["SECSUI_QUAR_TERMS_2"]="Please add words that will trigger file quarantine below:";
$language["SECSUI_QUAR_TERMS_3"]="NOTE: It is not advisable to add <b><&#63;</b> or <b>&#63;></b> as these may occur naturally in the file, instead you should set the value of <b>short_open_tag</b> to <b>Off</b> in php.ini, this will prevent your site from executing php code which starts with <b><&#63;</b> and will force potential hackers to use the long php open tag (<b><&#63;php</b>) instead.<br /><br />The current value is:<br />";
$language["SECSUI_QUAR_DIR_1"]="Quarantine Directory";
$language["SECSUI_QUAR_DIR_2"]="This folder should ideally be impossible to access via the internet and be at least one level above your tracker root folder for example:";
$language["SECSUI_QUAR_DIR_3"]="Please ensure that you CHOWN/CHMOD this directory appropriately so that the server can write files to it.";
$language["SECSUI_QUAR_PM"]="Tracker ID to PM when files are quarantined";
$language["SECSUI_QUAR_INV_USR"]="Invalid User";
$language["SECSUI_PASS_SETTINGS"]="Password Settings";
$language["SECSUI_PASS_TYPE"]="Password Hashing Method";
$language["SECSUI_PASS_INFO"]="Here you can select the password hashing algorithm you'd like xbtit to use when it stores the password in the database:";
$language["SECSUI_NO_MEMBER"]="No member exists with that tracker id";
$language["SECSUI_GAZ_TITLE"]="Gazelle Site Salt";
$language["SECSUI_GAZ_DESC"]="You should set a random value here, once set you should not change it whilst this hashing method in use otherwise everyone will have to recover their passwords.";
$language["SECSUI_COOKIE_SETTINGS"]="Cookie Settings";
$language["SECSUI_COOKIE_PRIMARY"]="Main Cookie Settings";
$language["SECSUI_COOKIE_TYPE"]="Cookie Type";
$language["SECSUI_COOKIE_EXPIRE"]="Cookie will expire in";
$language["SECSUI_COOKIE_T1"]="Classic xbtit";
$language["SECSUI_COOKIE_T2"]="New xbtit (Regular)";
$language["SECSUI_COOKIE_T3"]="New xbtit (Session)";
$language["SECSUI_COOKIE_NAME"]="Cookie Name";
$language["SECSUI_COOKIE_ITEMS"]="Cookie Items";
$language["SECSUI_COOKIE_PATH"]="Cookie Path";
$language["SECSUI_COOKIE_DOMAIN"]="Cookie Domain";
$language["SECSUI_COOKIE_MIN"]="Minute";
$language["SECSUI_COOKIE_MINS"]="Minutes";
$language["SECSUI_COOKIE_HOUR"]="Hour";
$language["SECSUI_COOKIE_HOURS"]="Hours";
$language["SECSUI_COOKIE_DAY"]="Day";
$language["SECSUI_COOKIE_DAYS"]="Days";
$language["SECSUI_COOKIE_WEEK"]="Week";
$language["SECSUI_COOKIE_WEEKS"]="Weeks";
$language["SECSUI_COOKIE_MONTH"]="Month";
$language["SECSUI_COOKIE_MONTHS"]="Months";
$language["SECSUI_COOKIE_YEAR"]="Year";
$language["SECSUI_COOKIE_YEARS"]="Years";
$language["SECSUI_COOKIE_TOO_FAR"]="I'm sorry, that would put the expire date past the current limit of Tue, 19 Jan 2038 03:14:07 GMT, please adjust your expire date accordingly!";
$language["SECSUI_COOKIE_PSALT"]="Password Salt";
$language["SECSUI_COOKIE_UAGENT"]="User Agent";
$language["SECSUI_COOKIE_ALANG"]="Accept Language";
$language["SECSUI_COOKIE_IP"]="IP Address";
$language["SECSUI_COOKIE_DEF"]="NOTE: All cookie types will include the following by default:<br /><br /><li>Tracker ID</li><li>Password Hash</li><li>Random Number</li>";
$language["SECSUI_COOKIE_PD"]="NOTE: If you're not sure what to put for \"Cookie Path\" or \"Cookie Domain\", you should just leave them blank and the defaults will be used";
$language["SECSUI_COOKIE_IP_TYPE_1"] = "1st octet only (Y.N.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_2"] = "2nd octet only (N.Y.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_3"] = "3rd octet only (N.N.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_4"] = "4th octet only (N.N.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_5"] = "1st & 2nd octets (Y.Y.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_6"] = "2nd & 3rd octets (N.Y.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_7"] = "3rd & 4th octets (N.N.Y.Y)";
$language["SECSUI_COOKIE_IP_TYPE_8"] = "1st & 3rd octets (Y.N.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_9"] = "1st & 4th octets (Y.N.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_10"] = "2nd & 4th octets (N.Y.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_11"] = "1st, 2nd & 3rd octets (Y.Y.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_12"] = "2nd, 3rd & 4th octets (N.Y.Y.Y)";
$language["SECSUI_COOKIE_IP_TYPE_13"] = "Entire IP address (Y.Y.Y.Y)";
$language["SECSUI_PASSHASH_TYPE_1"] = "Classic xbtit";
$language["SECSUI_PASSHASH_TYPE_2"] = "TBDev";
$language["SECSUI_PASSHASH_TYPE_3"] = "TorrentStrike";
$language["SECSUI_PASSHASH_TYPE_4"] = "Gazelle";
$language["SECSUI_PASSHASH_TYPE_5"] = "Simple Machines Forum";
$language["SECSUI_PASSHASH_TYPE_6"] = "New xbtit";
$language["SECSUI_PASS_MUST"] = "Password must";
$language["SECSUI_PASS_BE_AT_LEAST"] = "Be at least";
$language["SECSUI_PASS_HAVE_AT_LEAST"] = "Have at least";
$language["SECSUI_PASS_CHAR_IN_LEN"] = "character in length";
$language["SECSUI_PASS_CHAR_IN_LEN_A"] = "characters in length";
$language["SECSUI_PASS_LC_LET"] = "lower case letter";
$language["SECSUI_PASS_LC_LET_A"] = "lower case letters";
$language["SECSUI_PASS_UC_LET"] = "upper case letter";
$language["SECSUI_PASS_UC_LET_A"] = "upper case letters";
$language["SECSUI_PASS_NUM"] = "number";
$language["SECSUI_PASS_NUM_A"] = "numbers";
$language["SECSUI_PASS_SYM"] = "symbol";
$language["SECSUI_PASS_SYM_A"] = "symbols";
$language["SECSUI_PASS_ERR_1"] = "You cannot have a higher value for Upper Case + Lower Case + Numbers + Symbols";
$language["SECSUI_PASS_ERR_2"] = "than you have for the minimum number of characters needed in the password";

$language["SMF_MIRROR"] = "SMF Mirror";
$language["GROUP_SMF_MIRROR"] = "Mirroring rank on the SMF forum for rank changes etc.";
$language["SMF_LIST"] = "<b><u>Current SMF Group List from the database</u></b><br />";

$language["IPB_AUTO_ID"] = "IPB Autopost ID";
$language["IPB_MIRROR"] = "IPB Mirror";
$language["GROUP_IPB_MIRROR"] = "Mirroring rank on the IPB forum for rank changes etc.";
$language["IPB_LIST"] = "<b><u>Current IPB Group List from the database</u></b><br />";

$language["STYLE_TYPE"]="Style Type"; 
$language["CLA_STYLE"]="xbtit classic style system"; 
$language["ATM_STYLE"]="atmoner's style system"; 
$language["PET_STYLE"]="Petr1fied's style system";

$language["ACP_STICKY_TORRENTS"]="Sticky settings";
$language["STICKY_SETTINGS"]="Sticky settings";
$language["COLOR"]="Color";
$language["LEVEL_STICKY"]="Who can add sticky torrents? (default: Uploader)";

$language["ACP_SEEDBONUS"]="SeedBonus Settings";
$language["BONUS"]="Points per torrent in hour";
$language["PRICE_VIP"]="Price for rank VIP";
$language["PRICE_CT"]="Price for CustomTitle";
$language["PRICE_NAME"]="Price for change username";
$language["PRICE_GB"]="Price for GB";
$language["POINTS"]="Points";
$language["SEEDBONUS_UPDATED"]="SeedBonus settings updated";

$language['ACP_DONATE']='VIP & Donate Settings';

$language['ACP_DON_HIST']='Donation Historie';
$language['ACP_FREECTRL']='Free Leech Settings';
$language["AVATAR_UPLOAD"] = "Avatar Upload";
$language["MAX_FILE_SIZE"] = "Max. size of the file! (in kb)";
$language["MAX_IMAGE_SIZE"] = "Max. size of the image!";
$language["IMAGE_WIDTH"] = "Width";
$language["IMAGE_HEIGHT"] = "Height";$language['ACP_FLUSH']='Flush All Ghost Torrents';$language['GROUP_MAX_TORRENTS']='Max Active Torrents ';

$language["IMAGE_SETTING"]="Image Settings";
$language["ALLOW_IMAGE_UPLOAD"]="Allow image upload";
$language["ALLOW_SCREEN_UPLOAD"]="Allow screens upload";
$language["IMAGE_UPLOAD_DIR"]="Image upload dir";
$language["FILE_SIZELIMIT"]="Image size limit";

#######Beny
$language['ACP_MAC']='MAC Address(es) Tools';
$language['ACP_BANMAC_CONFIG']='Ban/Unban MAC adres';
$language['ACP_DUPMAC_CONFIG']='Shodné MAC adresy';
$language['BAN_MAC_NOTE']='V této části admin panelu, se zobrazují zakázané MAC Addresy. Zde také můžete další MAC adresy zakázat a tím znepřístupnit dané adrese tracker..<br />'."\n".'Pokud chcete blokovat pouze jednu MAC adresu v danou chvíli napište ji ve formátu s dvojtečkou.';
$language['BANNED_MAC']='Zakázané MAC adresy';
$language['BAN_NOMAC']='Žádné zakázané MAC adresy';
$language['BAN_MAC_DELETED']='Zakázaná MAC adresa byla odstraněna !<br />'."\n".'<br />'."\n".'<a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=banmac&amp;action=read">Spět na odebírání zakázaných MAC</a>';
$language['LAST_MAC']='Last MAC Address(es)';
$language['BAN_MAC_INSERT']='Vlož zakázanou MAC adresu';
$language['BAN_MAC_ERROR']='Špatná MAC adresa.';
$language['BAN_NO_MAC_WRITE']='Nenapsal si MAC adresu!';
$language['USERS_SAME_MAC_NOT_FOUND']='Žádní uživatelé se schodnou MAC adresou!';
$language['BAN_CLIENT']='List uživatelů se stejnou MAC';
###
$language["DEL_SHOUT"]="Vyčistit pokec";
$language["SETTING_MIN_DLRATIO"]="Minimální ratio pro stahování torrentů";
$language["SETTING_CUSTOM_SETTINGS"]="Vlastní Nastavení";
$language["BYPASS_DLCHECK"]="Nekontorolovat download";
$language["ACP_SEEDBONUS"]="Nastavení SeedBonus ";
$language["BONUS"]="Bodů na torrent za hodinu";
$language["PRICE_VIP"]="Počet Bodů na hodnost VIP ";
$language["PRICE_CT"]="Počet Bodů na Osobní Titul ";
$language["PRICE_NAME"]="Počet Bodů na změnu uživatelského jména ";
$language["PRICE_GB"]="Počet bodů za GB";
$language["POINTS"]="Bodů";
$language["SEEDBONUS_UPDATED"]="Nastavení SeedBonusu uloženo";
$language["IMAGE_SETTING"]="Nastavení obrázků";
$language["ALLOW_IMAGE_UPLOAD"]="Povolit upload obrázků";
$language["ALLOW_SCREEN_UPLOAD"]="Povolit upload screenů";
$language["IMAGE_UPLOAD_DIR"]="Složka pro obrázky";
$language["FILE_SIZELIMIT"]="Limit velikosti obrázků";
$language["ACP_RATIO_EDITOR"] = "Editace Ratia";
$language["RATIO_USERNAME"] = "Uživatelské jméno";
$language["RATIO_UPLOADED"] = "Upload";
$language["RATIO_DOWNLOADED"] = "Download";
$language["RATIO_INPUT_MEASURE"] = "Zvolte použité jednotky:";
$language["RATIO_BYTES"] = "Bytes";
$language["RATIO_K_BYTES"] = "KBytes";
$language["RATIO_M_BYTES"] = "MBytes";
$language["RATIO_G_BYTES"] = "GBytes";
$language["RATIO_T_BYTES"] = "TBytes";
$language["RATIO_ACTION"] = "Action:";
$language["RATIO_ADD"] = "Přidej";
$language["RATIO_REMOVE"] = "Odeber";
$language["RATIO_REPLACE"] = "Nahraď";
$language["RATIO_HEADER"] = " Změna uživatelského ratia";
$language["RATIO_SUCCES"] = "Úspěch vše OK";
$language["RATIO_UPDATE_SUCCES"] = "Úspěšně jste aktualizovali ratio tohoto uživatele";
$language["ACP_RULES_GROUP"]="Skupiny pravidel";
$language["ACP_RULES"]="Pravidla";
$language["ACP_FAQ_GROUP"]="Skupiny napovědy";
$language["ACP_FAQ"]="Nápověda";
$language["ACP_FAQ_QUESTION"]="Dotazy";

// begin modification
// hack: Duplicate Accounts
// operation #0
$language["DUPLICATES"]="Duplicitní účty";
$language["ERROR"]="Error";
$language["ERR_USERS_NOT_FOUND"]="Žádní uživatelé Nenalezeni!";
// end modification
// hack: Duplicate Accounts
// operation #0
$language["ACP_LOTTERY"]="Loterie";
$language["LOTT_SETTINGS"]="Nastavení loterie";
$language["EXPIRE_DATE"]="Datum ukončení";
$language["EXPIRE_TIME"]="Čas ukončení";
$language["EXPIRE_DATE_VIEW"]="(0000-00-00 musí být v tomto formátu)";
$language["EXPIRE_TIME_VIEW"]="V celých hodinách";
$language["IS_SET"]="je aktuální datatum a čas)";
$language["NUM_WINNERS"]="Počet výherců";
$language["TICKET_COST"]="Cena za tiket";
$language["MIN_WIN"]="Min částka k výhře";
$language["LOTTERY_STATUS"]="Loterie spuštěna";
$language["VIEW_SELLED"]="Zobraz prodané tikety";
$language["ACP_SELLED_TICKETS"]="Prodané tikety";
$language["NO_TICKET_SOLD"]="Žádné tikety nebyly prodány";
$language["TICKETS"]="Tikety";
$language["PURCHASE"]="Koupit";
$language["SOLD_TICKETS"]="Tikety prodány";
$language["LOTTERY"]="Loterie";
$language["MAX_BUY"]="Max množ tiketů, které může uživatel koupit ";
$language["LOTT_ID"] = "Id";
$language["LOTT_USERNAME"] = "Uživatelské jméno";
$language["LOTT_NUMBER_OF_TICKETS"] = "Množství tiketů";
$language["BACK_TO_LOTTERY"]="Zpět do loterie";
$language["LOTT_SENDER_ID"]="ID příjemce PM";
$language["DEL_SHOUT"]="Smazat pokec";
$language["AUTO_PRUNE_USERS"]="Automaticky pročistit nastavení uživatů";
$language["ALLOW_AUTO_PRUNE"]="Povolit automatické pročištění(";
$language["ALLOW_EMAIL_ON_PRUNE"]="Povolit odeslání emailu před pročištěním";
$language["DAYS_MEMBERS"]="Neaktivních dnů do pročištění";
$language["DAYS_NOT_CONFIRM"]="Počet dnů neschválených uživatelů.";
$language["DAYS_TO_EMAIL"]="Dnů NEaktivity do odeslání";
$language["AUTO_PRUNE"]="Automaticky pročistit";
$language["ACP_FEATURED"]="Doporučený Torrent";
$language["ACP_OFFLINE"]="Offline system";
$language["OFFLINE_SETTING"]="Tracker je nyní vypnutý?";
$language["OFFLINE_MESSAGE"]="Zpráva pro uživatele (max 200 znaků, pouze admin může uzavžit tracker)";
$language["ACP_VISIBLE_TORRENTS"]="Zobrazování torrentu";
$language["VISIBLE_SETTINGS"]="Nastavení zobrazování torrentu";
$language["LEVEL_VISIBLE"]="Uploadovat torrenty pro vybranou skupinu může zvolená hodnost! (standartně: Uploader)";
// NEW USER DONATE UPLOAD
$language["SETTINGS_UPLOAD"]="Hodnota uploadu nově registrovaných uživatelů.";
$language["VALUE_UPLOAD"]="Zadej velikost uploadu";
$language["KB"]="Kb";
$language["MB"]="Mb";
$language["GB"]="Gb";
$language["TB"]="Tb";
$language["AVATAR_UPLOAD"] = "Upload Avataru";
$language["MAX_FILE_SIZE"] = "Max. velikost souboru! (v kb)";
$language["MAX_IMAGE_SIZE"] = "Max. velikost Avataru!";
$language["IMAGE_WIDTH"] = "Šířka";
$language["IMAGE_HEIGHT"] = "Výška";
// begin modification
// hack: Detect & Blacklist Proxy
// operation #0

$language["ACP_PROXY"]="Uživatelé přicházející přes proxy";
$language["ACP_BLACKLIST"]="Blacklist";

// end modification
// hack: Detect & Blacklist Proxy
// operation #0

$language["ACP_COMMENTS"]="Comments Spy";

//RULES
$language["ACP_RULES_GROUP"]="Rules groups";
$language["ACP_RULES"]="Rules";
//FAQ
$language["ACP_FAQ_GROUP"]="Faq groups";
$language["ACP_FAQ"]="Faq";
$language["ACP_FAQ_QUESTION"]="Faq questions";
      
$language["ACP_FEATURED"]="Featured Torrent";

$language["WHERE_HEARD"] = 'Heard About Us';

$language['SB_CONTROL']= 'Seed Bonus Control';
$language["ACP_MENU_COOLY"]="Welcome Message";
$language["COOLYS_USERSTUFF"]="Welcome Message";
$language["UP_CONTROL"]="Uploader Control";
      
$language["RHUS_HIGH_UL_SUP"] = "High UL Speed Report";
$language["RHUS_EN_SYS"] = "Enable System";
$language["RHUS_DIS"] = "disabled";
$language["RHUS_REP_FROM"] = "Report Speed From";
$language["RHUS_REP_TU"] = "Report Times / User";
$language["RHUS_ONLY_ONCE"] = "only once";
$language["RHUS_NO_LIM"] = "no limits";

$language['ACP_LRB']='Low Ratio Warn & Ban';
$language["ACP_MASSEMAIL"]="Mass E-Mail";
$language["DUPLICATES"]="IP Duplicates";
$language["ERROR"]="Error";
$language["ERR_USERS_NOT_FOUND"]="No users found!";
$language["ACP_OFFLINE"]="Offline Settings";
$language["OFFLINE_SETTING"]="Site is Offline?";
$language["OFFLINE_MESSAGE"]="Offline message to users (max 200 chars, only admin could access offline site)";
      
$language["ACP_BIRTHDAY"]="Birthday Hack Settings";
$language["BIRTHDAY_LOWER_LIMIT"]="Minimum User Age";
$language["BIRTHDAY_UPPER_LIMIT"]="Maximum User Age";
$language["BIRTHDAY_BONUS"]="Birthday Bonus per year (GB)";
$language["BIRTHDAY_UPDATED"]="Thank you, your Birthday Hack settings have now been updated";

$language["ACP_LOTTERY"]="Lottery";
$language["LOTT_SETTINGS"]="Lottery Settings";
$language["EXPIRE_DATE"]="Expire date";
$language["EXPIRE_TIME"]="Expire time";
$language["EXPIRE_DATE_VIEW"]="(0000-00-00 must be this format)";
$language["EXPIRE_TIME_VIEW"]="in whole hours";
$language["IS_SET"]="is current date and time)";
$language["NUM_WINNERS"]="Number of winners";
$language["TICKET_COST"]="Amount to pay (per ticket)";
$language["MIN_WIN"]="Min Amount to win";
$language["LOTTERY_STATUS"]="Lottery enabled";
$language["VIEW_SELLED"]="View Sold Tickets";
$language["ACP_SELLED_TICKETS"]="Sold Tickets";
$language["NO_TICKET_SOLD"]="No tickets sold";
$language["TICKETS"]="tickets";
$language["PURCHASE"]="Purchase";
$language["SOLD_TICKETS"]="Tickets Sold";
$language["LOTTERY"]="Lottery";
$language["MAX_BUY"]="Maximun amount user can buy";
$language["LOTT_ID"] = "Id";
$language["LOTT_USERNAME"] = "Username";
$language["LOTT_NUMBER_OF_TICKETS"] = "Number of tickets";
$language["BACK_TO_LOTTERY"]="Back to Lottery";
$language["LOTT_SENDER_ID"]="Sender ID for PM";//INVITATION SYSTEM
$language['ACP_INVITATION_SYSTEM']='Invitation System';
$language['ACTIVE_INVITATIONS']='Activate Invitation System:';
$language['PRIVATE_TRACKER']='Private Tracker';
$language['PRIVATE_TRACKER_INFO']='For improved security, when setting the tracker to "Private",<br />"Max users" will also be changed to "1".';
$language['ACP_INVITATIONS']='Invitations';
$language['VALID_INV_MODE']='Inviter Confirmation Required';
$language['INVITE_TIMEOUT']='Dead time for invitations<br />( on days )';
$language['INVITED_BY']='Invited by';
$language['SENT_TO']='Sent to';
$language['DATE_SENT']='Date Sent';
$language['INV_WELCOME']='Welcome to Invitation System Panel.<br />Activating this option will prevent users from<br />signing up without an invitation code.';
$language['HASH']='Hash';
$language['VALID_INV_MODE']='Confirmation needed';
$language['VALID_INV_EXPL']='<i>Inviter will have to confirm invited user account</i>';
$language['INVITE_TIMEOUT']='Dead time for invitations<br />( on days )';
$language['GIVE_INVITES_TO']='Give Invitations';
$language['NUM_INVITES']='Number of Invitations';
$language['INVITES_SETTINGS']='Settings';
$language['INVITES_LIST']='Invitation List';
$language['SENDINV_CONFIRM']='Are you sure you want to send this invitation?';
$language['ERR_SENDINVS']='Please, choose username or user level.';
$language['SENDINV_EXPL']='If username is not inserted, rank will be chosen instead.';
$language['RECYCLE_DATE']='Recycle period';
$language['RECYCLE_EXPL']='<i>Period in <u>days</u> after which invitations will be recycled</i>';
        
$language["REPUTATION"]="Reputation Settings";
$language["REPUTATION_LIST"]="Reputation Spy";
      
$language["AUTO_PRUNE_USERS"]="Auto prune users settings";
$language["ALLOW_AUTO_PRUNE"]="Allow auto prune";
$language["ALLOW_EMAIL_ON_PRUNE"]="Allow email before prune user";
$language["DAYS_MEMBERS"]="Inactive days to prune";
$language["DAYS_NOT_CONFIRM"]="Days for not confirmed users";
$language["DAYS_TO_EMAIL"]="Inactive days to email message";
$language["AUTO_PRUNE"]="Auto prune";

$language['BAN_CLIENT']='Ban BitTorrent Client';
$language['REMOVE_CLIENTBAN']='Remove BitTorrent Client Ban';
$language['CLIENT_REMOVED']='This client has been removed from the banned list.<br /><br />';
$language['RETURN']='Return';
$language['UNBAN_MAIN']='By visiting this page you are indicating that you wish to remove the ban on the following client:';
$language['CONFIRM_ACTION']='Are you sure you want to do this? (you will receive no further confirmation).';
$language['CLIENT_ALREADY_BANNED']='This client is already banned!';
$language['ALL_VERSIONS']='All versions';
$language['CLIENT_ADDED']='This client has been added to the banned list<br /><br />';
$language['NEED_A_REASON']='You must enter a reason!';
$language['BAN_MAIN']='By visiting this page you are indicating that you want to ban the following client:';
$language['BAN_ALL_VERSIONS']='Ban all versions?';
$language['REASON']='Reason';

//GOLD
$language["ACP_GOLD"]="Gold torrents settings";

$language['ACP_CLIENTS']='Recommended Settings';
$language["ACP_FREELEECH_REQ"]="Free Leech Request";
$language["SEEDBONUS"]="SeedBonus";
      
//Add New Users in AdminCP
$language["ACP_ADD_USER"]='Add New User';
$language["NEW_USER_EMAIL"]='Send an email to new user with password';
$language["NEW_USER_EMAIL_TEXT"]='
Hi %s,

You\'ve just be added at %s,
username: %s
password: %s

Hope you\'ll enjoy staying with us
Greetings
The Staff';

$language["VFL"] = "FreeLeech";
$language["ACP_ISPY"]="Message Spy";

if ($CURUSER["id_level"]=='8')
{
$language['ACP_OWNER'] = 'For Owner,s Eyes Only';
$language['TIM']= 'Timed Ranks Control';
}
$language['MO']= 'Are you shure you want to set this user,s old rank back?';
$language['MA']= 'Undo';
$language['AUSER']= 'User';
$language['OL']= 'Old Rank';
$language['NE']= 'New Rank';
$language['BY']= 'Action By';
$language['DA']= 'When';
$language['T_EXP']= 'Expire';
$language['SC']= 'Staff Control';
$language['ST']= 'Timed Ranks Staff Control';
$language["ACP_BB"]="Ban Button - IP Range";
$language["ACP_BB_USER"]="Ban Button - User";
$language["ACP_BOOTU"]="Booted Users";
$language["ACP_BOOTED"]="Boot Panel";
$language["ACP_BOOTED1"]="Booted List";
$language["ACP_BOOTEDUN"]="Username";
$language["ACP_BOOTEEXP"]="Expire Time";
$language["ACP_BOOTEREA"]="Booted Reason";
$language["ACP_BOOTEADDB"]="Boot Added By";      
$language["ACP_PROXY"]="Users Behind Proxy";
$language["ACP_BLACKLIST"]="Blacklist";
$language["ACP_HITRUN"]="Hit & Run Settings";
$language["BAN_CHEAPMAIL"]="Ban Cheapmail Domains";
$language["ERR_WILDCARD_1"]="The wildcard ";
$language["ERR_WILDCARD_2"]=" is already on the list of Cheapmail Domains so there is no need to add ";
$language["ERR_WILDCARD_3"]=" to the list.";
$language["CHEAP_CONFIRM_1"]="Are you sure you want to delete ";
$language["CHEAP_CONFIRM_2"]="You will receive no further confirmations";
$language["CHEAP_DELETED_1"]=" has been deleted";
$language["CHEAP_DELETED_2"]="Click Here";
$language["CHEAP_DELETED_3"]=" to return";
$language["ERR_CHEAP_SUBMIT"]="You must enter a value in the Text Box!!";
$language["CHEAP_ADDED"]=" was added to the list of Cheapmail Domains";
$language["ERR_CHEAP_DUPE"]=" is already on the list of Cheapmail Domains";
$language["CHEAP_CURRENT"]="Current Cheapmail domains";
$language["ADDED_BY"]="Added by";
$language["CHEAP_COUNT_1"]="Found ";
$language["CHEAP_COUNT_2"]=" Cheapmail Domains";
$language["CHEAP_ADD"]="Add Cheapmail Domain:";
//Hide Language & Style Menu
$language['ACP_HIDDEN']='Hidden';
$language['ACP_VISIBLE']='Visible';
$language['ACP_HIDE_LANGUAGE']='Hide/Unhide Language Menu';
$language['ACP_HIDE_STYLE']='Hide/Unhide Style Menu';
$language['ACP_HIDE_STYLE_LANGUAGE']='Hide Style & Language Menu';
$language["ACP_LOGLOG"]="Invalid Login Attempts";
$language["LOGLOG_IP"]="IP";
$language["LOGLOG_FAIL"]="Failed";
$language["LOGLOG_REM"]="Remaining";
$language["LOGLOG_UNIK"]="Username if known";
$language["LOGLOG_NOTH"]="Nothing";
$language["LOGLOG_HERE"]="Here";
$language["LOGLOG_YET"]="Yet";
$language['tmsg1']="Ticker Message 1";
$language['tmsg2']="Ticker Message 2";
$language['tmsg3']="Ticker Message 3";
$language['tmsg4']="Ticker Message 4";
$language["ACP_AUTORANK"] = "Autorank Administration";
$language["AUTORANK_INVALID"] = "Invalid Input, please enter a number between 1 and 23";
$language["AUTORANK_MAIN_1"] = "To save on excessive load only users who are connected to torrents will be scanned for rank changes regularly. The entire memberbase will be scanned once every 24 hours and you should set the time for this scan below.<br /><br /><b>Please Note:</b> You should set this overall scan time to something off-peak but it also needs to be a time when there are still users likely to be browsing your site otherwise it will probably not get triggered.<br /><br />Valid values are 0-23 (0 = midnight, 1 = 1:00am, 5=5:00am, 14=2:00pm etc.)";
$language["AUTORANK_MAIN_2"] = "Full Scan Time";
$language["AUTORANK_MAIN_3"] = "You can set all the other values from";
$language["AUTORANK_MAIN_4"] = "here";
$language["SUBMIT"] = "Submit";
// FORUM AUTO-TOPIC
$language['ACP_CATFORUM_CONFIG']='Forum Auto-Topic Configuration';
$language['ACP_CATFORUM_SELECT']='Forum Auto-Topic';
$language['AUTOTOPIC_MESS1']='<br />Here you may activate auto-topic upon torrent upload in your forum.<br>You can choose Internal or SMF Forum in Tracker\'s Settings in order to use this functionality.';
$language['AUTOTOPIC_MESS2']='<br>Select which forum goes to which category.<br>Modifications will apply imediatelly. You may choose only one forum per torrent category.<br>Only torrents uploaded after activation will have automatic forum topic.<br />';
$language['AUTOTOPIC_ACTIVE']='Activate SMF Auto-Topic';
$language['AUTOTOPIC_PREFIX']='Topic Name Prefix<br />Choose a prefix to post before topic\'s name, e.g. \"[Post] \".';
$language["DEL_SHOUT"]="Clean Shoutbox";
$language["CLEAN_SHOUT"]="Shoutbox Cleaned";
$language["CLEAN_CONFIRM"]="Clean Shoutbox";	  
$language['GROUP_STYLE']='Season';
$language["IRC_SETTINGS"]="Irc settings";
$language["SETTING_IRC_SERVER"]="Irc Server (without irc://)";
$language["SETTING_IRC_PORT"]="Irc Port";
$language["SETTING_IRC_CHANNEL"]="Irc Channel (without #)";

$language["DUPLICATES_PAS"]="Password Duplicates";
$language["ERROR_PAS"]="Error";
$language["ERR_USERS_NOT_FOUND_PAS"]="No users found!";
$language['VIEW_CAT']='View category';
$language['VIEW_TORR_LIST']='View torrent list';
$language['VIEW_TORR_DET']='View torrent detail';
$language['MIN_RATIO']='Minimal ratio';
$language['DOWNLOAD_RATIO']='Minimum download to count ratio (in bytes)';

$language["ACP_SB_EDITOR"] = "Seed Bonus Editor";
$language["RATIO_USERNAME"] = "Username";
$language["SB"] = "SB";
$language["RATIO_UPDATE_SUCCESS"] = "You succesfully updated this users seedbonus";
$language["RATIO_HEADERR"] = "Update users Seed Bonus";

$language["RATIO_FIX"] = "Overall Ratio Fix";
$language["ACP_MENU_SUPPORT"]="Contact Us";
$language["SUPPORT"]="Contact Us";
$language["ACP_CONNECT"]="None Connectable Users";
$language['ACP_KHEZ']='Hack Settings';
$language['ACP_KOCS']='Backup Tools';
$language["ACP_MENU_CAT"]="Calculator";
$language["CALCU"]="Calculator";


// --------> modpanel
$language['ACP_MODPANEL']='Staff Panel Settings';
$language['MODCP_SECTION']='Section (the section you want to allow your mod/admin, it\'s the do=xxxx part in the link):';
$language['MODCP_DESC']='Description (if you use a language definition, then language string will be used, else the string you wrote. eg: you put "ACP_BAN_IP" it\'ll display "'.$language['ACP_BAN_IP'].'" ):';
$language['MODCP_URL']='URL (the url to access the resource, {uid} will be replaced by user\'s id and {ucode} eg: link for banip is http://localhost/xbtit/index.php?page=admin&user={uid}&code={ucode}&do=category&action=read):';
$language['MODCP_NEWSECTION']='Add a new section';
$language['NO_SECTION_ACCESS']='You can\'t access this section.';
// --------> modpanel

?>
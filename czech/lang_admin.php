<?php
$language['ACP_BAN_IP']='Banovat IP';
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

?>
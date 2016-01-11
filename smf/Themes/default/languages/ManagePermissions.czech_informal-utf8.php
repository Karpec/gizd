<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Editovat oprávnění';
$txt['permissions_modify'] = 'Změnit';
$txt['permissions_view'] = 'Zobrazit';
$txt['permissions_allowed'] = 'Povolit';
$txt['permissions_denied'] = 'Zakázat';
$txt['permission_cannot_edit'] = '<strong>Varování:</strong> Nemůžeš editovat tento profil oprávnění, protože je to zabudovaný profil, který je součástí instalace fóra. Pokud chceš změnit oprávnění v tomto profilu, je nutno vytvořit jeho kopii. To lze provést <a href="%1$s">zde</a>. ';

$txt['permissions_for_profile'] = 'Oprávnění pro profil';
$txt['permissions_boards_desc'] = 'Seznam níže ukazuje, která sady oprávnění jsou přiřazeny k jednotlivým diskusím. Můžeš kliknout na jméno diskuse a tam vybrat profil oprávnění, nebo zvolit &quot;změnit všechny&quot;. K editaci profilu samotného klikni na jeho jméno. ';
$txt['permissions_board_all'] = 'Změnit všechny';
$txt['permission_profile'] = 'Profil oprávnění';
$txt['permission_profile_desc'] = 'Kterou <a href="%1$s">sadu oprávnění</a> by měla diskuse používat. ';
$txt['permission_profile_inherit'] = 'Dědit z rodičovské diskuse';

$txt['permissions_profile'] = 'profil';
$txt['permissions_profiles_desc'] = 'Profily oprávnění jsou přiřazeny jednotlivým skupinám a umožňují ti tak jednoduše spravovat tvé nastavení bezpečnosti. Zde můžeš vytvářet, měnit a mazat profily oprávnění.';
$txt['permissions_profiles_change_for_board'] = 'Měnit profil práv pro: &quot;%1$s&quot; ';
$txt['permissions_profile_default'] = 'Výchozí';
$txt['permissions_profile_no_polls'] = 'Bez anket';
$txt['permissions_profile_reply_only'] = 'Jen odpovídat';
$txt['permissions_profile_read_only'] = 'Jen číst';

$txt['permissions_profile_rename'] = 'Přejmenovat';
$txt['permissions_profile_edit'] = 'Editovat profily';
$txt['permissions_profile_new'] = 'Nový profil';
$txt['permissions_profile_new_create'] = 'Vytvořit';
$txt['permissions_profile_name'] = 'Jméno profilu';
$txt['permissions_profile_used_by'] = 'Používán';
$txt['permissions_profile_used_by_one'] = '1 diskusí';
$txt['permissions_profile_used_by_many'] = '%1$d diskusemi';
$txt['permissions_profile_used_by_none'] = 'žádnou diskusí';
$txt['permissions_profile_do_edit'] = 'Editovat';
$txt['permissions_profile_do_delete'] = 'Smazat';
$txt['permissions_profile_copy_from'] = 'Kopírovat oprávnění z';

$txt['permissions_includes_inherited'] = 'Odděděné skupiny';

$txt['permissions_all'] = 'vše';
$txt['permissions_none'] = 'nic';
$txt['permissions_set_permissions'] = 'Nastavit oprávnění';

$txt['permissions_advanced_options'] = 'Pokročilá nastavení';
$txt['permissions_with_selection'] = 'Na výběru';
$txt['permissions_apply_pre_defined'] = 'Aplikovat předdefinovaný profil oprávnění';
$txt['permissions_select_pre_defined'] = 'Vybrat profil';
$txt['permissions_copy_from_board'] = 'Kopírovat práva z této diskuse';
$txt['permissions_select_board'] = 'Vybrat diskusi';
$txt['permissions_like_group'] = 'Nastavit oprávnění podle této skupiny';
$txt['permissions_select_membergroup'] = 'Vybrat skupinu';
$txt['permissions_add'] = 'Přidat oprávnění';
$txt['permissions_remove'] = 'Ubrat oprávnění';
$txt['permissions_deny'] = 'Zakázat oprávnění';
$txt['permissions_select_permission'] = 'Vybrat oprávnění';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Můžeš nastavit pouze jednu akci ke změně oprávnění';
$txt['permissions_no_action'] = 'Nebyla vybrána žádná akce';
$txt['permissions_deny_dangerous'] = 'Hodláš zakázat jedno nebo více práv.\\nTo může být nebezpečné a způsobit neočekávané důsledky, pokud nemáš jistotu, že nikdo není \\"náhodou\\" ve skupině nebo skupinách, kterým tato práva zakazuješ.\\n\\nJsi si jistý, že chceš pokračovat?';

$txt['permissions_modify_group'] = 'Upravit skupinu';
$txt['permissions_general'] = 'Obecná oprávnění';
$txt['permissions_board'] = 'Globální oprávnění pro diskusi';
$txt['permissions_board_desc'] = '<strong>Upozornění</strong>: změna těchto oprávnění diskuse se promítne do všech diskusí, které mají nastavený profil oprávnění &quot;Vychozí&quot;. Diskuse nepoužívající profil &quot;Výchozí&quot; nebudou těmito změnami zasaženy. ';
$txt['permissions_commit'] = 'Uložit změny';
$txt['permissions_on'] = 'v diskusi';
$txt['permissions_local_for'] = 'Lokální oprávnění pro skupinu';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'Z';
$txt['permissions_option_desc'] = 'Pro každé oprávnění můžeš vybrat \'Povolit\' (P), \'Nepovolit\' (N), nebo <span style="color: red;">\'Zakázat\' (Z)</span>.<br /><br />Když zakážeš právo, jakýkoli uživatel, včetně moderátorů, který je v dané skupině, bude mít toto právo zakázáno.<br />Z toho důvodu by se zakazování mělo používat opatrně, pouze v případě nutnosti. Nepovolení zakazuje operace jen pokud nejsou jinde povoleny.';
$txt['permissions_change_view'] = 'Změnit prohlížeč';
$txt['permissions_view_simple'] = 'Jednoduchý';
$txt['permissions_view_classic'] = 'Klasický';

$txt['permissiongroup_general'] = 'Obecné';
$txt['permissionname_view_stats'] = 'Prohlížet statistiky fóra';
$txt['permissionhelp_view_stats'] = 'Statistiky fóra je stránka sumarizující všechny statistiky fóra, jako je počet členů, denní počet příspěvků, a několik dalších &quot;Top 10&quot; statistik. Zapnutí této volby přidá na konec Seznamu diskusí odkaz (\'[Více statistik]\').';
$txt['permissionname_view_mlist'] = 'Prohlížet seznam uživatelů';
$txt['permissionhelp_view_mlist'] = 'Seznam uživatelů zobrazí všechny členy registrované na tvém fóru. Seznam může být tříděn a prohledáván. Přes jména/čísla členů na něj vedou odkazy jak ze seznamu diskusí, tak ze stránky se statistikami fóra.';
$txt['permissionname_who_view'] = 'Prohlížet, kdo je online';
$txt['permissionhelp_who_view'] = '\'Kdo je online\' zobrazí všechny členy, kteří jsou právě online, a činnosti, které právě provádějí. Toto oprávnění funguje pouze tehdy, je-li současně zapnuto v sekci \'Nastavení a volby\'. Okno \'Kdo je online\' otevřeš kliknutím na sekci \'Uživatelů online\' na seznamu diskusí.';
$txt['permissionname_search_posts'] = 'Vyhledávat v příspěvcích a tématech';
$txt['permissionhelp_search_posts'] = 'Oprávnění vyhledávat dovolí uživatelům prohledávat všechny diskuse, ke kterým má povolen přístup. Je-li uděleno právo vyhledávat, bude do tlačítkového pruhu přidáno tlačítko \'Vyhledávání\'.';
$txt['permissionname_karma_edit'] = 'Měnit karmu jiných uživatelů';
$txt['permissionhelp_karma_edit'] = 'Karma ukazuje popularitu člena. Abys mohl tuto funkci používat, musíš ji zapnout v sekci \'Nastavení a volby\'. Toto oprávnění dovolí hlasovat o popularitě členům skupiny, nemá efekt na hosty.';

$txt['permissiongroup_pm'] = 'Soukromé zprávy';
$txt['permissionname_pm_read'] = 'Číst soukromé zprávy';
$txt['permissionhelp_pm_read'] = 'Toto oprávnění dovolí uživatelům zpřístupnit sekci Soukromých zpráv a číst své soukromé zprávy. Bez tohoto oprávnění není uživatel schopen posílat soukromé zprávy.';
$txt['permissionname_pm_send'] = 'Posílat soukromé zprávy';
$txt['permissionhelp_pm_send'] = 'Poslat soukromou zprávu ostatním registrovaným uživatelům. Vyžaduje oprávnění \'Číst soukromé zprávy\'.';

$txt['permissiongroup_calendar'] = 'Kalendář';
$txt['permissionname_calendar_view'] = 'Zobrazit kalendář';
$txt['permissionhelp_calendar_view'] = 'Kalendář ukazuje narozeniny, události a svátky každý měsíc. Toto oprávnění řídí přístup ke kalendáři. Je-li uděleno, na tlačítkový pruh bude přidáno tlačítko a  ve spodní části seznamu diskusí bude zobrazen seznam se současnými a blížícími se narozeninami, událostmi a svátky. Kalendář musí být zapnutý v sekci \'Editovat nastavení a volby\'.';
$txt['permissionname_calendar_post'] = 'Vytvářet události v kalendáři';
$txt['permissionhelp_calendar_post'] = 'Událost je téma propojené s datem nebo určitým obdobím. Události se vytváří v kalendáři. Událost může být vytvořena pouze pokud uživatel, který ji vytváří, má současně povoleno zakládat nová témata.';
$txt['permissionname_calendar_edit'] = 'Měnit události v kalendáři';
$txt['permissionhelp_calendar_edit'] = 'Událost je téma propojené s datem nebo určitým obdobím. Událost je možno změnit v okně kalendáře kliknutím na červenou hvězdičku (*) vedle události. Uživatel musí mít dostatek práv na editaci prvního příspěvku v diskusi, aby mohl události měnit.';
$txt['permissionname_calendar_edit_own'] = 'Vlastní události';
$txt['permissionname_calendar_edit_any'] = 'Libovolné události';

$txt['permissiongroup_maintenance'] = 'Administrace fóra';
$txt['permissionname_admin_forum'] = 'Administrovat fórum a databázi';
$txt['permissionhelp_admin_forum'] = 'Toto oprávnění dovolí uživateli měnit nastavení fóra a vzhledu, spravovat balíčky a používat nástroje pro údržbu fóra a databáze. Uděluj toto oprávnění s rozvahou, protože je velmi silné.';
$txt['permissionname_manage_boards'] = 'Spravovat diskuse a kategorie';
$txt['permissionhelp_manage_boards'] = 'Toto oprávnění dovolí vytvářet, editovat a měnit diskuse a kategorie.';
$txt['permissionname_manage_attachments'] = 'Spravovat přílohy a avatary';
$txt['permissionhelp_manage_attachments'] = 'Toto oprávnění zpřístupňuje Centrum příloh, které zobrazuje a umožní manipulaci se všemi přílohami a avatary.';
$txt['permissionname_manage_smileys'] = 'Spravovat emotikony';
$txt['permissionhelp_manage_smileys'] = 'Umožní přístup k Centru emotikonů. V něm můžeš přidávat, měnit a mazat jednotlivé emotikony i celé jejich skupiny.';
$txt['permissionname_edit_news'] = 'Editovat novinky';
$txt['permissionhelp_edit_news'] = 'Funkce \'Novinky\' zobrazení v horní části stránky řádku s náhodně vybranou novinkou. Abys mohl tuto funkci používat ji musíš zapnout v nastavení fóra.';
$txt['permissionname_access_mod_center'] = 'Navštívit administrační centrum';
$txt['permissionhelp_access_mod_center'] = 'S tímto oprávněním mohou uživatelé vstupovat do Centra moderace. Toto neuděluje oprávnění k moderaci.';

$txt['permissiongroup_member_admin'] = 'Správa uživatelů';
$txt['permissionname_moderate_forum'] = 'Spravovat uživatele';
$txt['permissionhelp_moderate_forum'] = 'Toto oprávnění zahrnuje všechny důležité funkce pro správu uživatelů:<ul><li>Přístup ke správě registrací</li><li>Přístup k oknu pro prohlížení/mazání členů</li><li>Rozsáhlé informace o profilu uživatele, včetně možnosti sledovat IP uživatele a (skrytý) online status</li><li>Aktivaci účtů</li><li>Zisk upozornění o schválení a schvalování účtů</li><li>Imunitu proti ignorovaným soukromým zprávám.</li><li>několik dalších drobností</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Spravovat a zařazovat do skupin';
$txt['permissionhelp_manage_membergroups'] = 'Toto oprávnění umožní uživateli editovat skupiny uživatelů a přiřazovat členy fóra do skupin.';
$txt['permissionname_manage_permissions'] = 'Spravovat práva';
$txt['permissionhelp_manage_permissions'] = 'Toto oprávnění dovolí uživateli editovat všechna práva skupiny, globální či individuálně pro jednotlivé diskuse.';
$txt['permissionname_manage_bans'] = 'Spravovat seznam zákazů';
$txt['permissionhelp_manage_bans'] = 'Toto oprávnění umožní uživateli přidávat nebo mazat uživatelská jména, IP adresy, jména hostitelského počítače a e-mailové adresy v seznamu zakázaných uživatelů. Také zpřístupní a umožní manipulaci se záznamy o těch zakázaných členech, kteří se pokusili přihlásit.';
$txt['permissionname_send_mail'] = 'Posílat mail uživatelům';
$txt['permissionhelp_send_mail'] = 'Hromadná pošta všem členům fóra, nebo pouze několika skupinám buď e-mailem, nebo soukromou zprávou (to ovšem vyžaduje oprávnění \'Poslat soukromou zprávu\').';
$txt['permissionname_issue_warning'] = 'Udělovat varování uživatelům';
$txt['permissionhelp_issue_warning'] = 'Udělovat varování uživatelům fóra a měnit jejich úroveň varování. Vyžaduje zapnutý systém varování.';

$txt['permissiongroup_profile'] = 'Profily uživatelů';
$txt['permissionname_profile_view'] = 'Prohlížet profil a statistiky';
$txt['permissionhelp_profile_view'] = 'Toto oprávnění umožní uživateli kliknutím na jméno jiného člena vidět jeho nastavení profilu, nějaké statistiky a všechny jeho příspěvky.';
$txt['permissionname_profile_view_own'] = 'Vlastní profil';
$txt['permissionname_profile_view_any'] = 'Libovolný profil';
$txt['permissionname_profile_identity'] = 'Modifikovat nastavení účtu';
$txt['permissionhelp_profile_identity'] = 'Nastavení účtu je základní nastavení profilu, jako je heslo, e-mailová adresa, příslušnost ke skupině a preferovaný jazyk.';
$txt['permissionname_profile_identity_own'] = 'Vlastní profil';
$txt['permissionname_profile_identity_any'] = 'Libovolný profil';
$txt['permissionname_profile_extra'] = 'Modifikovat rozšířené nastavení účtu';
$txt['permissionhelp_profile_extra'] = 'Rozšířená nastavení profilu obsahují možnosti pro avatary, vzhledy, upozorňování a soukromé zprávy.';
$txt['permissionname_profile_extra_own'] = 'Vlastní profil';
$txt['permissionname_profile_extra_any'] = 'Libovolný profil';
$txt['permissionname_profile_title'] = 'Modifikovat vlastní titulek';
$txt['permissionhelp_profile_title'] = 'Vlastní titulek je zobrazen na stránce s tématem, pod profilem uživatele, který má vlastní titulek.';
$txt['permissionname_profile_title_own'] = 'Vlastní profil';
$txt['permissionname_profile_title_any'] = 'Libovolný profil';
$txt['permissionname_profile_remove'] = 'Smazat účet';
$txt['permissionhelp_profile_remove'] = 'Toto oprávnění umožňuje uživateli smazat svůj účet, je-li nastaveno na \'Vlastní účet\'.';
$txt['permissionname_profile_remove_own'] = 'Vlastní účet';
$txt['permissionname_profile_remove_any'] = 'Libovolný účet';
$txt['permissionname_profile_server_avatar'] = 'Vybrat avatar na serveru';
$txt['permissionhelp_profile_server_avatar'] = 'Pokud je povoleno, umožní uživateli vybrat si avatar instalovaný na serveru.';
$txt['permissionname_profile_upload_avatar'] = 'Nahrát avatar na server';
$txt['permissionhelp_profile_upload_avatar'] = 'Toto oprávnění umožňuje uživateli nahrát avatar na server.';
$txt['permissionname_profile_remote_avatar'] = 'Nastavit si vzdálený avatar';
$txt['permissionhelp_profile_remote_avatar'] = 'Protože avatary mohou negativně ovlivnit dobu generování stránky, je možné některým skupinám uživatelů zakázat použití avatarů z externích serverů. ';

$txt['permissiongroup_general_board'] = 'Obecné';
$txt['permissionname_moderate_board'] = 'Moderovat diskusi';
$txt['permissionhelp_moderate_board'] = 'Povolení moderovat diskusi dodá několik oprávnění, které z moderátora udělají skutečného moderátora. Oprávnění obsahují právo odpovídat na uzamčené diskuse, měnit dobu vypršení ankety a prohlížet výsledky anket.';

$txt['permissiongroup_topic'] = 'Témata';
$txt['permissionname_post_new'] = 'Zakládat nová témata';
$txt['permissionhelp_post_new'] = 'Toto oprávnění umožní zakládat nová témata. Nedovolí však odpovídat na již existující témata.';
$txt['permissionname_merge_any'] = 'Slučovat témata';
$txt['permissionhelp_merge_any'] = 'Sloučí dvě či více témat do jednoho. Pořadí zpráv ve sloučeném tématu bude založeno na času vytvoření zpráv. Uživatel může slučovat témata pouze v těch diskusích, kde k tomu má oprávnění. Aby mohl slučovat více témat najednou, musí uživatel ve svém nastavení profilu aktivovat rychlou moderaci.';
$txt['permissionname_split_any'] = 'Rozdělovat témata';
$txt['permissionhelp_split_any'] = 'Rozdělí téma ve dvě samostatná témata.';
$txt['permissionname_send_topic'] = 'Posílat témata přátelům';
$txt['permissionhelp_send_topic'] = 'Toto oprávnění umožňuje uživatelům zaslat téma příteli. Požaduje se přitom zadání e-mailové adresy a k odkazu je možnost přidat zprávu.';
$txt['permissionname_make_sticky'] = 'Připichovat témata';
$txt['permissionhelp_make_sticky'] = 'Připíchnutá témata jsou témata, která zůstávají na čele seznamu témat. Mohou být použity pro důležité zprávy nebo oznámení.';
$txt['permissionname_move'] = 'Přesunovat témata';
$txt['permissionhelp_move'] = 'Přesuň téma z jedné diskuse do druhé. Uživatelé mohou jako cílovou diskusi zvolit pouze tu dikusi, do které mají přístup.';
$txt['permissionname_move_own'] = 'Vlastní téma';
$txt['permissionname_move_any'] = 'Libovolné téma';
$txt['permissionname_lock'] = 'Zamykat témata';
$txt['permissionhelp_lock'] = 'Toto oprávnění dovolí uživateli zamknout téma a tak zajistit, že do něj již nikdo další nepřispěje. Pouze uživatelé s právem \'Moderovat diskuse\' mohou přispívat do zamčených témat.';
$txt['permissionname_lock_own'] = 'Vlastní téma';
$txt['permissionname_lock_any'] = 'Libovolné téma';
$txt['permissionname_remove'] = 'Odstraňovat témata';
$txt['permissionhelp_remove'] = 'Odstraní celé téma. Pozor - toto oprávnění neumožňuje mazat jednotlivé příspěvky v tématu!';
$txt['permissionname_remove_own'] = 'Vlastní téma';
$txt['permissionname_remove_any'] = 'Libovolné téma';
$txt['permissionname_post_reply'] = 'Odpovídat v tématech';
$txt['permissionhelp_post_reply'] = 'Toto oprávnění dovolí odpovídat na témata.';
$txt['permissionname_post_reply_own'] = 'Vlastní téma';
$txt['permissionname_post_reply_any'] = 'Libovolné téma';
$txt['permissionname_modify_replies'] = 'Měnit příspěvky ve vlastních tématech';
$txt['permissionhelp_modify_replies'] = 'Toto oprávnění umožní uživateli, který začal téma, měnit všechny příspěvky v daném tématu.';
$txt['permissionname_delete_replies'] = 'Mazat odpovědi na vlastní témata';
$txt['permissionhelp_delete_replies'] = 'Toto oprávnění umožňuje uživateli, který založil téma, aby v něm odmazával libovolné odpovědi.';
$txt['permissionname_announce_topic'] = 'Upozornit na téma';
$txt['permissionhelp_announce_topic'] = 'Dovolí rozeslat e-mail upozorňující na téma všem členům fóra, nebo jen vybraným skupinám.';

$txt['permissiongroup_post'] = 'Příspěvky';
$txt['permissionname_delete'] = 'Mazat příspěvky';
$txt['permissionhelp_delete'] = 'Odstraní příspěvky. Nedovolí ale uživateli smazat první příspěvek tématu.';
$txt['permissionname_delete_own'] = 'Vlastní příspěvek';
$txt['permissionname_delete_any'] = 'Jakýkoli příspěvek';
$txt['permissionname_modify'] = 'Měnit příspěvky';
$txt['permissionhelp_modify'] = 'Umožní editovat příspěvky.';
$txt['permissionname_modify_own'] = 'Vlastní příspěvek';
$txt['permissionname_modify_any'] = 'Jakýkoli příspěvek';
$txt['permissionname_report_any'] = 'Nahlašovat příspěvky moderátorům';
$txt['permissionhelp_report_any'] = 'Toto oprávnění přidá ke každému příspěvku odkaz, který umožní nahlášení příspěvku moderátorovi. V případě nahlášení obdrží všichni moderátoři dané diskuse e-mail s odkazem na příspěvek a popisem problému (jak je podán uživatelem, který příspěvek nahlásil).';

$txt['permissiongroup_poll'] = 'Ankety';
$txt['permissionname_poll_view'] = 'Prohlížet ankety';
$txt['permissionhelp_poll_view'] = 'Toto oprávnění umožní uživateli vidět anketu. Bez něj uvidí uživatelé pouze téma.';
$txt['permissionname_poll_vote'] = 'Hlasovat v anketách';
$txt['permissionhelp_poll_vote'] = 'Toto oprávnění umožní registrovaným uživatelům dát svůj hlas v anketách. Neplatí pro hosty.';
$txt['permissionname_poll_post'] = 'Vytvářet ankety';
$txt['permissionhelp_poll_post'] = 'Toto oprávnění umožní uživateli vytvářet nové ankety. Jelikož jsou ankety zvláštním případem témat, nelze toto právo použít bez udělení povolení \'Zakládat nová témata\'.';
$txt['permissionname_poll_add'] = 'Přidávat ankety k tématům';
$txt['permissionhelp_poll_add'] = 'Přidat anketu k tématům dovolí uživateli přidat anketu až poté, co bylo dané téma založeno. Toto oprávnění vyžaduje dostatečná práva k editaci prvního příspěvku v tématu.';
$txt['permissionname_poll_add_own'] = 'Vlastní témata';
$txt['permissionname_poll_add_any'] = 'Jakákoli témata';
$txt['permissionname_poll_edit'] = 'Měnit ankety';
$txt['permissionhelp_poll_edit'] = 'Toto oprávnění umožní editovat možnosti anket a nulovat ankety. Pro změnu maximálního počtu hlasů a data ukončení ankety potřebuje uživatel právo \'Moderovat diskuse\'.';
$txt['permissionname_poll_edit_own'] = 'Vlastní anketa';
$txt['permissionname_poll_edit_any'] = 'Jakákoli anketa';
$txt['permissionname_poll_lock'] = 'Zamykat ankety';
$txt['permissionhelp_poll_lock'] = 'Zamknutí ankety je ochrání před přijmutím dalších hlasů.';
$txt['permissionname_poll_lock_own'] = 'Vlastní anketa';
$txt['permissionname_poll_lock_any'] = 'Jakákoli anketa';
$txt['permissionname_poll_remove'] = 'Mazat ankety';
$txt['permissionhelp_poll_remove'] = 'Toto oprávnění dovolí mazání anket.';
$txt['permissionname_poll_remove_own'] = 'Vlastní anketa';
$txt['permissionname_poll_remove_any'] = 'Jakákoli anketa';

$txt['permissiongroup_approval'] = 'Postmoderace';
$txt['permissionname_approve_posts'] = 'Schvalovat položky čekající na moderaci';
$txt['permissionhelp_approve_posts'] = 'Toto oprávnění umožňuje uživateli schvalovat zatím neschválené položky v diskusi.';
$txt['permissionname_post_unapproved_replies'] = 'Přispívat do témat skrytě, dokud nebudou příspěvky schváleny';
$txt['permissionhelp_post_unapproved_replies'] = 'Toto oprávnění umožňuje uživateli přispět do tématu, a poté čekat na schválení administrátorem.';
$txt['permissionname_post_unapproved_replies_own'] = 'Vlastní téma';
$txt['permissionname_post_unapproved_replies_any'] = 'Libovolné téma';
$txt['permissionname_post_unapproved_topics'] = 'Zakládat nová témata, ale skrytě, dokud nebudou schválena';
$txt['permissionhelp_post_unapproved_topics'] = 'Toto oprávnění umožní uživateli založit nové téma a pak čekat na schválení.';
$txt['permissionname_post_unapproved_attachments'] = 'Posílat přílohy, ale skrytě, dokud nebudou schváleny';
$txt['permissionhelp_post_unapproved_attachments'] = 'Toto oprávnění umožní uživateli přiložit soubory a pak čekat na jejich schválení.';

$txt['permissiongroup_notification'] = 'Upozornění';
$txt['permissionname_mark_any_notify'] = 'Vyžadovat upozornění na odpovědi';
$txt['permissionhelp_mark_any_notify'] = 'Tato funkce fóra umožní uživatelům obdržet upozornění kdykoliv někdo odpoví na téma, které nechali &quot;hlídat&quot;.';
$txt['permissionname_mark_notify'] = 'Vyžadovat upozornění na nová témata';
$txt['permissionhelp_mark_notify'] = 'Upozornění na nová témata je vlastnost, která dovolí uživatelům obdržet e-mail pokaždé, je-li na jimi sledované diskusi vytvořeno nové téma.';

$txt['permissiongroup_attachment'] = 'Přílohy';
$txt['permissionname_view_attachments'] = 'Prohlížet přílohy';
$txt['permissionhelp_view_attachments'] = 'Přílohy jsou soubory připojené k zasílaným příspěvkům. Tato funkce může být zapnuta a nakonfigurována v okně \'Editovat nastavení a volby\'. Protože k přílohám není přistupováno přímo, udělením/neudělením práva je prohlížet můžeš uživatelům povolit či zakázat jejich stahování.';
$txt['permissionname_post_attachment'] = 'Posílat přílohy';
$txt['permissionhelp_post_attachment'] = 'Přílohy jsou soubory připojené k zasílaným příspěvkům. Jedna zpráva může obsahovat více příloh.';

$txt['permissiongroup_simple_view_basic_info'] = 'Používat základní funkce fóra';
$txt['permissiongroup_simple_use_pm_system'] = 'Kontaktovat uživatele systémem soukromých zpráv';
$txt['permissiongroup_simple_post_calendar'] = 'Zakládat události v kalendáři';
$txt['permissiongroup_simple_edit_profile'] = 'Upravovat si profil';
$txt['permissiongroup_simple_delete_account'] = 'Mazat svůj účet';
$txt['permissiongroup_simple_use_avatar'] = 'Vybrat nebo nahrát avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderovat fórum';
$txt['permissiongroup_simple_administrate'] = 'Administrovat fórum';

$txt['permissionname_simple_calendar_edit_own'] = 'Měnit vlastní události v kalendáři';
$txt['permissionname_simple_calendar_edit_any'] = 'Měnit cizí události v kalendáři';
$txt['permissionname_simple_profile_view_own'] = 'Zobrazovat vlastní profil';
$txt['permissionname_simple_profile_view_any'] = 'Zobrazovat cizí profily';
$txt['permissionname_simple_profile_identity_own'] = 'Měnit vlastní nastavení';
$txt['permissionname_simple_profile_identity_any'] = 'Měnit cizí nastavení účtu';
$txt['permissionname_simple_profile_extra_own'] = 'Měnit vlastní nastavení profilu';
$txt['permissionname_simple_profile_extra_any'] = 'Měnit cizí nastavení profilu';
$txt['permissionname_simple_profile_title_own'] = 'Zvolit si vlastní titulek';
$txt['permissionname_simple_profile_title_any'] = 'Měnit cizí titulky';
$txt['permissionname_simple_profile_remove_own'] = 'Mazat vlastní účet';
$txt['permissionname_simple_profile_remove_any'] = 'Mazat cizí účty';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Přispívat do diskuse <span style="text-decoration: underline">pouze</span> po schválení';
$txt['permissiongroup_simple_make_posts'] = 'Přispívat do diskuse';
$txt['permissiongroup_simple_post_polls'] = 'Zakládat ankety';
$txt['permissiongroup_simple_participate'] = 'Zobrazovat dodatečný obsah diskuse';
$txt['permissiongroup_simple_modify'] = 'Měnit vlastní příspěvky';
$txt['permissiongroup_simple_notification'] = 'Vyžadovat upozornění';
$txt['permissiongroup_simple_attach'] = 'Posílat přílohy';
$txt['permissiongroup_simple_moderate'] = 'Moderovat diskusi';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Přispívat do vlastního tématu - se schvalováním';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Přispívat do všech témat - se schvalováním';
$txt['permissionname_simple_post_reply_own'] = 'Přispívat do vlastního tématu';
$txt['permissionname_simple_post_reply_any'] = 'Přispívat do libovolných témat';
$txt['permissionname_simple_move_own'] = 'Přemístit vlastní téma';
$txt['permissionname_simple_move_any'] = 'Přemístit cizí téma';
$txt['permissionname_simple_lock_own'] = 'Zamknout vlastní téma';
$txt['permissionname_simple_lock_any'] = 'Zamknout cizí téma';
$txt['permissionname_simple_remove_own'] = 'Smazat vlastní téma';
$txt['permissionname_simple_remove_any'] = 'Smazat cizí téma';
$txt['permissionname_simple_delete_own'] = 'Smazat vlastní příspěvek';
$txt['permissionname_simple_delete_any'] = 'Smazat cizí přispěvek';
$txt['permissionname_simple_modify_own'] = 'Změnit vlastní příspěvek';
$txt['permissionname_simple_modify_any'] = 'Změnit cizí příspěvek';
$txt['permissionname_simple_poll_add_own'] = 'Založit anketu ve vlastním tématu';
$txt['permissionname_simple_poll_add_any'] = 'Založit anketu v lib. tématu';
$txt['permissionname_simple_poll_edit_own'] = 'Změnit vlastní anketu';
$txt['permissionname_simple_poll_edit_any'] = 'Změnit cizí anketu';
$txt['permissionname_simple_poll_lock_own'] = 'Zamknout vlastní anketu';
$txt['permissionname_simple_poll_lock_any'] = 'Zamknout cizí anketu';
$txt['permissionname_simple_poll_remove_own'] = 'Smazat vlastní anketu';
$txt['permissionname_simple_poll_remove_any'] = 'Smazat cizí anketu';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Nastavení oprávnění';
$txt['groups_manage_permissions'] = 'Skupiny s oprávněním měnit oprávnění';
$txt['permission_settings_submit'] = 'Uložit';
$txt['permission_settings_enable_deny'] = 'Povolit zákaz oprávnění';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Vypnutí této volby změní oprávnění \\\'Zakázat\\\' na \\\'Nepovolit\\\'.';
$txt['permission_by_board_desc'] = 'Zde můžeš nastavit, zda diskuse používá globální nastavení oprávnění, nebo zda má zvláštní režim. S použitím lokálních oprávnění můžeš nastavovat každé oprávnění zvlášť pro každou skupinu.';
$txt['permission_settings_desc'] = 'Zde můžeš nastavit, kdo má oprávnění měnit oprávnění a také jak vychytralý má být systém oprávnění.';
$txt['permission_settings_enable_postgroups'] = 'Povolit oprávnění pro skupiny založené na počtu příspěvků';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Pokud vypneš toto nastavení, smažou se všechna oprávnění přiřazená skupinám s počtem příspěvků.';

$txt['permissions_post_moderation_desc'] = 'Na této stránce můžeš snadno změnit, které diskuse budou používat které profily oprávnění.';
$txt['permissions_post_moderation_deny_note'] = 'Všimni si, že i když máš povolena rozšířená oprávnění, nemůžeš přiřadit &quot;zákaz&quot; oprávnění na tomto místě. Edituj oprávnění přímo, pokud chceš použít zákaz oprávnění. ';
$txt['permissions_post_moderation_select'] = 'Vybrat profil';
$txt['permissions_post_moderation_new_topics'] = 'Nová témata';
$txt['permissions_post_moderation_replies_own'] = 'Vlastní příspěvky';
$txt['permissions_post_moderation_replies_any'] = 'Libovolné příspěvky';
$txt['permissions_post_moderation_attachments'] = 'Přílohy';
$txt['permissions_post_moderation_legend'] = 'Popis';
$txt['permissions_post_moderation_allow'] = 'Může vytvořit';
$txt['permissions_post_moderation_moderate'] = 'Může vytvořit, schválení nutné';
$txt['permissions_post_moderation_disallow'] = 'Nemůže vytvořit';
$txt['permissions_post_moderation_group'] = 'Skupina';

$txt['auto_approve_topics'] = 'Zakládat nová témata bez schválení';
$txt['auto_approve_replies'] = 'Přispívat do témat bez schválení';
$txt['auto_approve_attachments'] = 'Posílat přilohy bez schválení';

?>
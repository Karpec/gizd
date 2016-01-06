<?php
$language['BLOCK_USER']='Panel uživatele';
$language['BLOCK_INFO']='Tracker Info';
$language['BLOCK_MAINMENU']=''; # this is the Main Menu no name needed, some dipshit took this out ... not nice!!
# We leave this name (drop down menu) blank so it doesnt use the block head showing its name, it looks unsightly and non professional imho!! TreetopClimber 
$language['BLOCK_DDMENU']='';
$language['BLOCK_MENU']='Navigační menu';
$language['BLOCK_CALENDAR']='Calendar';
$language['BLOCK_CLOCK']='Hodiny';
$language['BLOCK_FORUM']='Forum';
$language['BLOCK_LASTMEMBER']='Nový člen';
$language['BLOCK_ONLINE']='Online';
$language['BLOCK_ONTODAY']='Dnes online';
$language['BLOCK_SHOUTBOX']='Pokec - diskuse - zábava';
$language['BLOCK_SHOUTBOX_TEAM']='Pokec BST Teamu';
$language['BLOCK_TOPTORRENTS']='Nejůspěšnější Torrenty';
$language['BLOCK_LASTTORRENTS']='Nejnovější Torrenty';
$language['BLOCK_NEWS']='Aktuálně';
$language['BLOCK_SERVERLOAD']='Server Load';
$language['BLOCK_POLL']='Anketa';
global $CURUSER;
if($CURUSER['tor']=='last' or $CURUSER['tor']=='')
$language['BLOCK_LASTTORRENTS']='Last Upload';

if($CURUSER['tor']=='top')
$language['BLOCK_LASTTORRENTS']='Top Torrents';

if($CURUSER['tor']=='seed')
$language['BLOCK_LASTTORRENTS']='Seed Wanted Torrents';
$language['BLOCK_SEEDWANTED']='Torrenty bez seedu';
$language['BLOCK_PAYPAL']='Podpořte Nás';
$language['BLOCK_MAINTRACKERTOOLBAR']='Main Tracker Toolbar';
$language['BLOCK_MAINUSERTOOLBAR']='Main User Toolbar';
$language['WELCOME_LASTUSER']=' Welcome to our Tracker ';
$language['BLOCK_MINCLASSVIEW']='Minimum rank that can view';
$language['BLOCK_MAXCLASSVIEW']='Maximum rank that can view';
$language["LC"]="Latest Comments";

$language["BLACKJACK_STATS"]="Your Blackjack Stats";

$language['BLOCK_REQUEST'] = 'Most Voted Requests';
$language["BLOCK_TOPU"]="Top Uploaders";
$language["BLOCK_FEATURED"]="Last Torrents";
$language["BLOCK_ADMIN"]="Admin Checks";
$language["BLOCK_WARN"]="Low Ratio Warnings";
$language['Ticker']='Info and News';

$language["BLOCK_BIRTHDAY"]="Today's Birthdays";
$language["BLOCK_NO_BIRTHDAY"]="No members are celebrating a birthday today";
$language['BLOCK_MAINTRACKERTOOLBAR']='Hlavní Panel trackeru';
$language['BLOCK_MAINUSERTOOLBAR']='Hlavní Uživatelský Panel ';
$language['WELCOME_LASTUSER']='Nový člen Besttrackeru';
$language['BLOCK_MINCLASSVIEW']='Minimální hodnost pro zobrazení';
$language['BLOCK_MAXCLASSVIEW']='Maximální hodnost pro zobrazeníw';
$language['BLOCK_RADIO']='On-Line Radio';
$language['BAN_BLOCK']='Reklama';
$language["BLOCK_LOTTERY"]="Loterie";
$language["BLOCK_DISCLAIMER"]="Upozornění";
$language["BLOCK_BITTORRENT"]="Bittorrent Klienti";
$language["BLOCK_CDCOVER"]="Covers";
$language["BLOCK_IMDB"]="IMDB Vyhledavač";
$language["BLOCK_TODAY"]="Návštěvnost";
$language["BLOCK_FEATURED"]="Doporučený Torrent";
$language["BLOCK_BIRTH"]="Dnes má narozeniny";
$language["BLOCK_EVENT"]="Události";
$language["Ticker"]="Informační servis Besttrackeru";
$language["DIV_BLOCK"]="Registrační informace";
$language["BLOCK_SEARCH"]="Vyhledávání";
$language["BLOCK_UPDO"]="Aktuální up/down";
$language["BLOCK_REQUEST"]="Nejžádanější torrenty";
$language["REC_BLOCK"]="Besttracker doporučuje";
$language["BLOCK_WARN"]="Tvoje rátio";
$language["BLOCK_ADMIN"]="Admin panel";
$language["BLOCK_TOPU"]="Top uploadeři";
$language["LC"]="Nejnovější komentáře";
$language["BLOCK_HIT"]="Upozornění";
$language["BLOCK_CAT"]="Kategorie torrentů";
$language["CLIENT"]="Recommended";
$language["BLOCK_HIT"]="HIT & RUN Warning";
$language['REC_BLOCK']='Recommended By Staff';
$language['gallery']='Gallery';
$language['SUB_BLOCK']='Subtitles';
$language['DIV_BLOCK']='Singup Info';
$language["BLOCK_FEATUREDD"]="Torrent of the Day";
$language['ARCADE']='Arcade';
$language["BLOCK_EVENT"]="Event Counter";
$language['BLOCK_UPDO']='Last up/downloads';
$language["BLOCK_CAT"]="Categories";
$language['BLOCK_SB']='Seedbox';
$language['MP']='MP3 Player';

$language['BLOCK_SEARCH']='Search';

        $language['BLOCK_LINKS']='Our Partners';
      
    $language['BLOCK_SB']='Seedbox';
?>
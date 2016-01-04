<?php
$language['ACP_BAN_IP']='Ban IPs';
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
$language['ACP_FORUM']='Forum&rsquo;s Settings';
$language['ACP_USER_GROUP']='Users Group Settings';
$language['ACP_STYLES']='Styles Settings';
$language['ACP_LANGUAGES']='Languages Settings';
$language['ACP_CATEGORIES']='Categories Settings';
$language['ACP_TRACKER_SETTINGS']='Tracker&rsquo;s Settings';
$language['ACP_OPTIMIZE_DB']='Optimize your Database';
$language['ACP_CENSORED']='Censored words Settings';
$language['ACP_DBUTILS']='Database Utilities';
$language['ACP_HACKS']='Hacks';
$language['ACP_HACKS_CONFIG']='Hacks Settings';
$language['ACP_MODULES']='Modules';
$language['ACP_MODULES_CONFIG']='Modules Settings';
$language['ACP_MASSPM']='Mass Private Mail';
$language['ACP_PRUNE_TORRENTS']='Prune Torrents';
$language['ACP_PRUNE_USERS']='Prune Users';
$language['ACP_SITE_LOG']='View Site Log';
$language['ACP_SEARCH_DIFF']='Search Diff.';
$language['ACP_BLOCKS']='Block Settings';
$language['ACP_POLLS']='Poll Settings';
$language['ACP_MENU']='Admin Menu';
$language['ACP_FRONTEND']='Content Settings';
$language['ACP_USERS_TOOLS']='User&rsquo;s Tools';
$language['ACP_TORRENTS_TOOLS']='Torrent&rsquo;s Tools';
$language['ACP_OTHER_TOOLS']='Other Tools';
$language['ACP_MYSQL_STATS']='MySql Statistics';
$language['XBTT_BACKEND']='xbtt Option';
$language['XBTT_USE']='Use <a href="http://xbtt.sourceforge.net/tracker/" target="_blank">xbtt</a> as backend?';
$language['XBTT_URL']='xbtt base url e.g. http://localhost:2710';
$language['GENERAL_SETTINGS']='General settings';
$language['TRACKER_NAME']='Site&rsquo;s Name';
$language['TRACKER_BASEURL']='Base Tracker&rsquo;s URL (without last /)';
$language['TRACKER_ANNOUNCE']='Tracker&rsquo;s Announce URLS (one url per row)'.($XBTT_USE?'<br />'."\n".'<span style="color:#FF0000; font-weight: bold;">Check your announce urls twice, you&rsquo;ve enable xbtt backend...</span>':'');
$language['TRACKER_EMAIL']='Tracker&rsquo;s/owner&rsquo;s email';
$language['TORRENT_FOLDER']='Torrent folder';
$language['ALLOW_EXTERNAL']='Allow External torrents';
$language['ALLOW_GZIP']='enabled GZIP';
$language['ALLOW_DEBUG']='Show Debug infos on page&rsquo;s bottom';
$language['ALLOW_DHT']='Disable DHT (private flag in torrent)<br />'."\n".'will be set only on  new uploaded torrents';
$language['ALLOW_LIVESTATS']='Enable Live Stats (warning to high server load!)';
$language['ALLOW_SITELOG']='Enable Basic Site Log (log change on torrents/users)';
$language['ALLOW_HISTORY']='Enable Basic History (torrents/users)';
$language['ALLOW_PRIVATE_ANNOUNCE']='Private Announce';
$language['ALLOW_PRIVATE_SCRAPE']='Private Scrape';
$language['SHOW_UPLOADER']='Show Uploader&rsquo;s nick';
$language['USE_POPUP']='Use Popup for Torrents details/peers';
$language['DEFAULT_LANGUAGE']='Default Language';
$language['DEFAULT_CHARSET']='Default Charset Encoding<br />'."\n".'(if your language don&rsquo;t display correctly, try UTF-8)';
$language['DEFAULT_STYLE']='Default Style';
$language['MAX_USERS']='Max Users (numeric, 0 = no limits)';
$language['MAX_TORRENTS_PER_PAGE']='Torrents per page';
$language['SPECIFIC_SETTINGS']='Tracker&rsquo;s specific settings';
$language['SETTING_INTERVAL_SANITY']='Sanity interval (numeric seconds, 0 = disabled)<br />Good value, if enabled, is 1800 (30 minutes)';
$language['SETTING_INTERVAL_EXTERNAL']='Update External interval (numeric seconds, 0 = disabled)<br />Depending of how many external torrents';
$language['SETTING_INTERVAL_MAX_REANNOUNCE']='Maximum reannounce interval (numeric seconds)';
$language['SETTING_INTERVAL_MIN_REANNOUNCE']='Minimum reannounce interval (numeric seconds)';
$language['SETTING_MAX_PEERS']='Max N. of peers for request (numeric)';
$language['SETTING_DYNAMIC']='Allow Dynamic Torrents (not recommended)';
$language['SETTING_NAT_CHECK']='NAT checking';
$language['SETTING_PERSISTENT_DB']='Persistent connections (Database, not recommended)';
$language['SETTING_OVERRIDE_IP']='Allow users to override detected ip';
$language['SETTING_CALCULATE_SPEED']='Calculate Speed and Downloaded bytes';
$language['SETTING_PEER_CACHING']='Table caches (should decrease a little load)';
$language['SETTING_SEEDS_PID']='Max num. of seeds with same PID';
$language['SETTING_LEECHERS_PID']='Max num. of leechers with same PID';
$language['SETTING_VALIDATION']='Validation Mode';
$language['SETTING_CAPTCHA']='Secure Registration (use ImageCode, GD+Freetype libraries needed)';
$language['SETTING_FORUM']='Forum link, can be:<br /><li><font color="#FF0000">internal</font> or empty (no value) for internal forum</li><li><font color="#FF0000">smf</font> for integrated <a target="_new" href="http://www.simplemachines.org">Simple Machines Forum</a> (1.x.x)</li><li><font color="#FF0000">smf2</font> for integrated <a target="_new" href="http://www.simplemachines.org">Simple Machines Forum</a> (2.x)</li><li><font color="#FF0000">ipb</font> for integrated <a target="_new" href="http://www.invisionpower.com">Invision Power Board</a> (3.x.x)</li><li>Your own forum solution (Specify url in the box)</li>';
$language['BLOCKS_SETTING']='Index/Blocks page settings';
$language['SETTING_CLOCK']='Clock type';
$language['SETTING_FORUMBLOCK']='Forum Block Type';
$language['SETTING_NUM_NEWS']='Limit for Latest News block (numeric)';
$language['SETTING_NUM_POSTS']='Limit for Forum block (numeric)';
$language['SETTING_NUM_LASTTORRENTS']='Limit for Latest Torrents block (numeric)';
$language['SETTING_NUM_TOPTORRENTS']='Limit for Most Popular Torrents block (numeric)';
$language['CLOCK_ANALOG']='Analog';
$language['CLOCK_DIGITAL']='Digital';
$language['FORUMBLOCK_POSTS']='Last Posts';
$language['FORUMBLOCK_TOPICS']='Last Active Topics';
$language['CONFIG_SAVED']='The configuration has been saved correctly!';
$language['CACHE_SITE']='Cache interval (numeric seconds, 0 = disabled)';
$language['ALL_FIELDS_REQUIRED']='All fields are required!';
$language['SETTING_CUT_LONG_NAME']='Cut long torrent&rsquo;s name after x chars (0 = don&rsquo;t cut)';
$language['MAILER_SETTINGS']='Mailer';
$language['SETTING_MAIL_TYPE']='Mail Type';
$language['SETTING_SMTP_SERVER']='SMTP Server';
$language['SETTING_SMTP_PORT']='SMTP Port';
$language['SETTING_SMTP_USERNAME']='SMTP Username';
$language['SETTING_SMTP_PASSWORD']='SMTP Password';
$language['SETTING_SMTP_PASSWORD_REPEAT']='SMTP Password (Repeat)';
$language['XBTT_TABLES_ERROR']='You should have to import xbtt tables (look at xbtt installation instructions) into your database before activate xbtt backend!';
$language['XBTT_URL_ERROR']='xbtt base url is mandatory!';
// BAN FORM
$language['BAN_NOTE']='In this part of the admin panel, you can see the banned IPs and ban new IPs from accessing the tracker.<br />'."\n".'You must insert a range from (first IP) to (last IP).';
$language['BAN_NOIP']='There are no banned IPs';
$language['BAN_FIRSTIP']='First IP';
$language['BAN_LASTIP']='Last IP';
$language['BAN_COMMENTS']='Comments';
$language['BAN_REMOVE']='Remove';
$language['BAN_BY']='By';
$language['BAN_ADDED']='Date';
$language['BAN_INSERT']='Insert New Banned IP Range';
$language['BAN_IP_ERROR']='Bad IP address.';
$language['BAN_NO_IP_WRITE']='You haven&rsquo;t wrote an IP address. Sorry!';
$language['BAN_DELETED']='The IP range has been deleted from database.<br />'."\n".'<br />'."\n".'<a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=banip&amp;action=read">Go back to Ban IP</a>';
// LANGUAGES
$language['LANGUAGE_SETTINGS']='Language Settings';
$language['LANGUAGE']='Language';
$language['LANGUAGE_ADD']='Insert new Language';
$language['LANGUAGE_SAVED']='Congratulations, language has been modified';
// STYLES
$language['STYLE_SETTINGS']='Style/Themes Settings';
$language['STYLE_EDIT']='Edit Style';
$language['STYLE_ADD']='Insert new Style';
$language['STYLE_NAME']='Style Name';
$language['STYLE_URL']='Style URL';
$language['STYLE_FOLDER']='Style&rsquo;s folder ';
$language['STYLE_NOTE']='In this section you can manage your style settings, but you must upload files by ftp or sftp.';
// CATEGORIES
$language['CATEGORY_SETTINGS']='Categories Settings';
$language['CATEGORY_IMAGE']='Category Image';
$language['CATEGORY_ADD']='Insert new Category';
$language['CATEGORY_SORT_INDEX']='Sort Index';
$language['CATEGORY_FULL']='Category';
$language['CATEGORY_EDIT']='Edit Category';
$language['CATEGORY_SUB']='Sub-Category';
$language['CATEGORY_NAME']='Category';
// CENSORED
$language['CENSORED_NOTE']='Write <b>one word per line</b> to ban it (will be changed into *censored*)';
$language['CENSORED_EDIT']='Edit Censored Words';
// BLOCKS
$language['BLOCKS_SETTINGS']='Block Configuration';
$language['ENABLED']='Enabled';
$language['ORDER']='Order';
$language['BLOCK_NAME']='Block&rsquo;s name';
$language['BLOCK_POSITION']='Position';
$language['BLOCK_TITLE']='Language title (will be used to display the translated title)';
$language['BLOCK_USE_CACHE']='Cache this block?';
$language['ERR_BLOCK_NAME']='You must select one of the enabled file in the name&rsquo;s dropdown!';
$language['BLOCK_ADD_NEW']='Add a New Block';
// POLLS (more in lang_polls.php)
$language['POLLS_SETTINGS']='Poll Configuration';
$language['POLLID']='Pollid';
$language['INSERT_NEW_POLL']='Add new Poll';
$language['CANT_FIND_POLL']='Can&rsquo;t find poll';
$language['ADD_NEW_POLL']='Add Poll';
// GROUPS
$language['USER_GROUPS']='Users Group Settings (click on group&rsquo;s name to edit)';
$language['VIEW_EDIT_DEL']='View/Edit/Del';
$language['CANT_DELETE_GROUP']='This Level/Group can&rsquo;t be canceled!';
$language['GROUP_NAME']='Group&rsquo;s name';
$language['GROUP_VIEW_NEWS']='View News';
$language['GROUP_VIEW_FORUM']='View Forum';
$language['GROUP_EDIT_FORUM']='Edit Forum';
$language['GROUP_BASE_LEVEL']='Choose base level';
$language['GROUP_ERR_BASE_SEL']='Error on base level select!';
$language['GROUP_DELETE_NEWS']='Delete News';
$language['GROUP_PCOLOR']='Prefix Color (like ';
$language['GROUP_SCOLOR']='Suffix Color (like ';
$language['GROUP_VIEW_TORR']='View Torrents';
$language['GROUP_EDIT_TORR']='Edit Torrents';
$language['GROUP_VIEW_USERS']='View Users';
$language['GROUP_DELETE_TORR']='Delete Torrents';
$language['GROUP_EDIT_USERS']='Edit Users';
$language['GROUP_DOWNLOAD']='Can Download';
$language['GROUP_DELETE_USERS']='Delete Users';
$language['GROUP_DELETE_FORUM']='Delete Forum';
$language['GROUP_GO_CP']='Can access Admin CP';
$language['GROUP_EDIT_NEWS']='Edit News';
$language['GROUP_ADD_NEW']='Add New Group';
$language['GROUP_UPLOAD']='Can Upload';
$language['GROUP_WT']='Waitingtime if Ratio <1';
$language['GROUP_EDIT_GROUP']='Edit Group';
$language['GROUP_VIEW']='View';
$language['GROUP_EDIT']='Edit';
$language['GROUP_DELETE']='Delete';
$language['INSERT_USER_GROUP']='Insert new User Group';
$language['ERR_CANT_FIND_GROUP']='Can&rsquo;t find this group!';
$language['GROUP_DELETED']='The group has been deleted!';
// MASS PM
$language['USERS_FOUND']='users found';
$language['USERS_PMED']='users PMed';
$language['WHO_PM']='Who will the pm be sent to?';
$language['MASS_SENT']='Mass PM sent!!!';
$language['MASS_PM']='Mass PM';
$language['MASS_PM_ERROR']='It maybe a good idea to actually write something before submitting it!!!!';
$language['RATIO_ONLY']='this ratio only';
$language['RATIO_GREAT']='greater then this ratio';
$language['RATIO_LOW']='lower then this ratio';
$language['RATIO_FROM']='From';
$language['RATIO_TO']='To';
$language['MASSPM_INFO']='Info';
// PRUNE USERS
$language['PRUNE_USERS_PRUNED']='Pruned users';
$language['PRUNE_USERS']='Prune users';
$language['PRUNE_USERS_INFO']='Input the number of days which the users are to be considered as "dead" (not connected from x days OR has signed from x days and still validating)';
// SEARCH DIFF
$language['SEARCH_DIFF']='Search Diff.';
$language['SEARCH_DIFF_MESSAGE']='Message';
$language['DIFFERENCE']='Difference';
$language['SEARCH_DIFF_CHANGE_GROUP']='Change User Group';
// PRUNE TORRENTS
$language['PRUNE_TORRENTS_PRUNED']='Pruned torrents';
$language['PRUNE_TORRENTS']='Prune torrents';
$language['PRUNE_TORRENTS_INFO']='Input the number of days which the torrents are to be considered as "dead"';
$language['LEECHERS']='leecher(s)';
$language['SEEDS']='seed(s)';
// DBUTILS
$language['DBUTILS_TABLENAME']='Table Name';
$language['DBUTILS_RECORDS']='Records';
$language['DBUTILS_DATALENGTH']='Data Length';
$language['DBUTILS_OVERHEAD']='Overhead';
$language['DBUTILS_REPAIR']='Repair';
$language['DBUTILS_OPTIMIZE']='Optimize';
$language['DBUTILS_ANALYSE']='Analyze';
$language['DBUTILS_CHECK']='Check';
$language['DBUTILS_DELETE']='Delete';
$language['DBUTILS_OPERATION']='Operation';
$language['DBUTILS_INFO']='Info';
$language['DBUTILS_STATUS']='Status';
$language['DBUTILS_TABLES']='Tables';
// MYSQL STATUS
$language['MYSQL_STATUS']='MySQL Status';
// SITE LOG
$language['SITE_LOG']='Site Log';
// FORUMS
$language['FORUM_MIN_CREATE']='Min Class Create';
$language['FORUM_MIN_WRITE']='Min Class Write';
$language['FORUM_MIN_READ']='Min Class Read';
$language['FORUM_SETTINGS']='Forum&rsquo;s Settings';
$language['FORUM_EDIT']='Edit Forum';
$language['FORUM_ADD_NEW']='Add New Forum';
$language['FORUM_PARENT']='Parent&rsquo;s Forum';
$language['FORUM_SORRY_PARENT']='(Sorry, I can&rsquo;t have parent, because I&rsquo;m myself a parent forum)';
$language['FORUM_PRUNE_1']='There are topics and/or posts in this forum!<br />You will lose all data...<br />';
$language['FORUM_PRUNE_2']='If you&rsquo;re sure to cancel this forum';
$language['FORUM_PRUNE_3']='else go back.';
$language['FORUM_ERR_CANNOT_DELETE_PARENT']='You cannot delete a forum which have childs, move child to other forum and try again';
// MODULES
$language['ADD_NEW_MODULE']='Add New Module';
$language['TYPE']='Type';
$language['DATE_CHANGED']='Date Changed';
$language['DATE_CREATED']='Date Created';
$language['ACTIVE_MODULES']='Active Modules: ';
$language['NOT_ACTIVE_MODULES']='Non-Active Modules: ';
$language['TOTAL_MODULES']='Total Modules: ';
$language['DEACTIVATE']='Deactivate';
$language['ACTIVATE']='Activate';
$language['STAFF']='Staff';
$language['MISC']='Miscellaneous';
$language['TORRENT']='Torrent';
$language['STYLE']='Style';
$language['ID_MODULE']='ID';
// HACKS
$language['HACK_TITLE']='Title';
$language['HACK_VERSION']='Version';
$language['HACK_AUTHOR']='Author';
$language['HACK_ADDED']='Added';
$language['HACK_NONE']='There is no hacks installed';
$language['HACK_ADD_NEW']='Add new hack';
$language['HACK_SELECT']='Select';
$language['HACK_STATUS']='Status';
$language['HACK_INSTALL']='Install';
$language['HACK_UNINSTALL']='UnInstall';
$language['HACK_INSTALLED_OK']='Hack has been installed with success!<br />'."\n".'To see which hacks are installed go back to <a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=hacks&amp;action=read">adminCP (Hacks)</a>';
$language['HACK_BAD_ID']='Error getting hack&rsquo;s info with this ID.';
$language['HACK_UNINSTALLED_OK']='Hack has been UnInstalled with success!<br />'."\n".'To see which hacks are installed go back to <a href="index.php?page=admin&amp;user='.$CURUSER['uid'].'&amp;code='.$CURUSER['random'].'&amp;do=hacks&amp;action=read">adminCP (Hacks)</a>';
$language['HACK_OPERATION']='Operation';
$language['HACK_SOLUTION']='Solution';
// added rev 520
$language['HACK_WHY_FTP']='Some of the files the hack&rsquo;s installer needs to modify are not writable. <br />'."\n".'This needs to be changed by logging into FTP and using it to chmod or create the files and folders. <br />'."\n".'Your FTP information may be temporarily cached for proper operation of the hack&rsquo;s installer.';
$language['HACK_FTP_SERVER']='FTP Server';
$language['HACK_FTP_PORT']='FTP Port';
$language['HACK_FTP_USERNAME']='FTP Username';
$language['HACK_FTP_PASSWORD']='FTP Password';
$language['HACK_FTP_BASEDIR']='Local path for xbtit (path from the root when you login using FTP)';
// USERS TOOLS
$language['USER_NOT_DELETE']='You cannot delete Guest user or yourself!';
$language['USER_NOT_EDIT']='You cannot edit Guest user or yourself!';
$language['USER_NOT_DELETE_HIGHER']='You cannot delete users higher ranked than yourself.';
$language['USER_NOT_EDIT_HIGHER']='You cannot edit users higher ranked than yourself.';
$language['USER_NO_CHANGE']='No change was made.';

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

// NEW USER DONATE UPLOAD
$language["SETTINGS_UPLOAD"]="Donations of items for new members.";
$language["VALUE_UPLOAD"]="Enter a value and choose a unit.";
$language["KB"]="Kb";
$language["MB"]="Mb";
$language["GB"]="Gb";
$language["TB"]="Tb";

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
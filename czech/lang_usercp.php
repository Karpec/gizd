<?php
$language['WATCHED']='Watched topic';
$language['DELETE_READED']='Smazat';
$language['USER_LANGUE']='Jazyk';
$language['USER_STYLE']='Styl';
$language['CURRENTLY_PEER']='Vaš aktuální seed a leech torrentů.';
$language['STOP_PEER']='Musíte zastavit vašeho klienta.';
$language['USER_PWD_AGAIN']='Opakujte heslo';
$language['EMAIL_FAILED']='Odesílání emailu selhalo!';
$language['NO_SUBJECT']='Žádný předmět';
$language['MUST_ENTER_PASSWORD']='<br /><font color="#FF0000"><strong>Musíte vložit Vaše heslo pro změnu nastavení.</strong></font>';
$language['ERR_PASS_WRONG']='Heslo je prázné nebo špaté, nemohu updatovat Váš profil.';
$language['MSG_DEL_ALL_PM']='Pokud vyberete PM které nejsou přečteny, nebudou smazány';
$language['ERR_PM_GUEST']='Sorry, ale nemůžeš poslat PM questu nebo sám sobě!';
$language["MNU_UCP_AVATAR"] = "Nahrát Avatar";
$language["AVATAR_SUCCESS"] = "Váš Avatar byl v pořádku nahrán!";
$language["AVATAR_FAILURE1"] = "Chyba. Avatar je příliš velký! Zvol povolenou velikost";
$language["AVATAR_FAILURE2"] = "Chyba. Avatar je příliš velký! Limit je";
$language["AVATAR_FAILURE3"] = "Chyba. Neznámá chyba!";
$language["AV_FEW_HEAD"] = "Kritéria pro nahráni Avatara";
$language["AV_FILE_SIZE"] = "Nenahrávejte soubory větší než";
$language["AV_IMAGE_SIZE"] = "Nenahrávejte Avatary, které jsou větší než";
$language["AV_FORBIDDEN"] = "Nenahrávejte další Avatary";
$language["AV_NO_HEADER"] = "Váš Avatar jste již nahráli. Nemůžete nahrávat další.";
$language["AV_NO_1"] = "Váš Avatar byl už nahrán";
$language["AV_NO_2"] = "Smazat Avatar";
$language["AV_NO_3"] = "Odkaz na Avatar";
//INVITATION SYSTEM
$language['ACCOUNT_CONFIRMED']='Account Confirmed';
$language['CONFIRMED']='Confirmed';
$language['DATE_SENT']='Date Sent';
$language['ERR_EMAIL_ALREADY_EXISTS']='This e-mail address already exists in our database.';
$language['ERR_INVITATIONS_OFF']='Sorry, invitation system is deactivated.';
$language['ERR_MISSING_DATA']='Missing information!<br />Please, fill all necessary fields.';
$language['INSERT_EMAIL']='Empty e-mail address field!';
$language['INSERT_MESSAGE']='Empty personal message field!';
$language['INVIT_CONFIRM']='Invitation Confirmed';
$language['INVIT_MSG']='Hello,<br /><br />You have been invited to join the '.$SITENAME.' community by';
$language['INVIT_MSG1']='<br />If you want to accept this invitation, you\'ll need to click this link:<br /><br />';
$language['INVIT_MSG2']='<br /><br />You\'ll need to accept the invitation within 24 hours, or else the link will become inactive.<br />We on '.$SITENAME.' hope that you\'ll accept the invitation and join our great community!<br /><br />Personal message from';
$language['INVIT_MSG3']='<br /><br />----------------<br />If you do not know the person who has invited you, please forward this email to '.$SITEEMAIL;
$language['INVIT_MSGCONFIRM']='Hello,<br />Your account has been confirmed. You can now visit<br /><br />'.$BASEURL.'/login.php<br /><br />and use your login information to login in. We hope you\'ll read the FAQ\'s and Rules before you start sharing files.<br /><br />Good luck and have fun on '.$SITENAME.'!<br /><br /><br />----------------<br />If you did not register for '.$SITENAME.', please forward this email to '.$SITEEMAIL;
$language['INVITATIONS']='Invitations';
$language['INVITE_SOMEONE_TO']='Send Invitation';
$language['MEMBERS_INVITED_BY']='Members Invited By You';
$language['MESSAGE']='Message';
$language['MNU_UCP_INVITATIONS']='Invitations';
$language["MNU_UCP_TOOLS"]='Tools';
$language['NO_INV']='No invitations left.';
$language['NO_INVITATIONS_OUT']='No invitations sent.';
$language['NO_NEED_CONFIRM_YET']='No invitations to confirm.';
$language['PENDING']='Pending';
$language['REMAINING']='Remaining';
$language['SENT_INVITATIONS']='Sent Invitations';
$language['STATUS']='Status';
$language['WELCOME_UCP_INVITE']='Welcome to your Invitation Panel.<br />Here you may send invitations, so your friends can register in '.$SITENAME.'.<br />';
        
$language["PR_SHOW"] = "Show";
$language["PR_HIDE"] = "Hide";
$language["PROFILEVIEW"] = "Show/Hide Profile";
$language["ACTIVE_TORRENT"]= "Aktivní torrent";
$language["MNU_UCP_RENAME"]="Změnit uživatelské jméno";
$language["CURR_NICK"]="Současné uživatelské jmého";
$language["NEW_NICK"]="Nové uživatelské jméno";
$language["REPEAT_NICK"]="Opakujte nové uživatelské jméno";
$language["ERR_NICK_NO_MATCH"]="Uživatelské jméno nesouhlasí";
$language["ERR_SAME_NICK"]="Váše uživatelské jméno je již";
$language["ERR_NICK_TOO_SMALL"]="Vaše nové uživatelské jméno musí mít nejméně 3 znaky";
$language["ERR_NICK_NOT_ALLOWED"]="Toto uživatelské jméno není povoleno";
$language["NICK_CHANGE_SUCCESS"]="Nyní jste si úspěšně změnily uživatelské jméno na ";
$language["CHANGED_THEIR_NICK"]="Změnit jejich uživatelské jméno na ";
$language["CHANGE_NICKNAME"]="Změnit uživatelské jméno";
// UserBars
$language['USERBAR'] = 'UserBar';
$language['NEWUSERBAR'] = 'Change UserBar';
$language["INVITE_GEN"]="Generátor pozvánek";
$language["SUBSCRIBE"]="Sledování torrentu";
$language["SUB_OK"]="Váš výběr sledovaných kategorií torrentů byl uložen <a href=\"index.php?page=usercp&amp;do=subscribe&amp;action=change&amp;uid=".$CURUSER["uid"]."\">výběr kategorie</a>";
$language["SUB_SUBJECT"]="Sledované torrenty z $SITENAME";
$language["SUB_EMAIL"]="Dobrý den,\nA nový torrent \"%s\" byl uploadován do Vámi sledované kategorie torrentů \n\nDetail: %s\nStaženi: %s\n\nPříjemné stahování\n$SITENAME";
$language["APARKED"]="Account Parked";
$language["GENDER"]="Gender";
$language["MALE"]="Male";
$language["FEMALE"]="Female";
$language["UNKNOW"]="Unknow";
?>
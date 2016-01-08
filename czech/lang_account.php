<?php
$language['ACCOUNT_CREATED']='Účet vytvořen';
$language['USER_NAME']='Uživatel';
$language['USER_PWD_AGAIN']='Opakujte heslo';
$language['USER_PWD']='Heslo';
$language['USER_STYLE']='Vzhled';
$language['USER_LANGUE']='Jazyk';
$language['IMAGE_CODE']='Ověřovací kód';
$language['INSERT_USERNAME']='Musíte vložit uživatelské jméno!';
$language['INSERT_PASSWORD']='Musíte vložit heslo!';
$language['DIF_PASSWORDS']='Kód NEsouhlasí!';
$language['ERR_NO_EMAIL']='Musíte vložit platnou emailovou adresu';
$language['USER_EMAIL_AGAIN']='Email znovu';
$language['ERR_NO_EMAIL_AGAIN']='Opakujte zadání emailu';
$language['DIF_EMAIL']='Emailové adresy NEsouhlasí!';
$language['SECURITY_CODE']='Odpovězte na otázku';
$language['ERR_IP_ALREADY_EXISTS']='Vaše IP adresa je již v databázi vedená pod jiným uživatelem.<br />Pokud používáte sdílenou IP, kontaktujte prosím administrátora.';
# Password strength
$language['WEEK']='Slabé';
$language['MEDIUM']='Střední';
$language['SAFE']='Velké';
$language['STRONG']='Bezpečné';
$language["ERR_GENERIC"]='Obecná chyba: '.((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));

$language['HEARD_ABOUT_US'] = '<font color = red>[optional] </font>Kde jste se o nás dozvěděli ?';
//INVITATION SYSTEM
$language['INVIT_MSGINFO']='You have requested a new account on '.$SITENAME.' and you have\nspecified this address (';
$language['INVIT_MSGINFO1']=') as user contact.<br /><br />Your account is awaiting confirmation from your inviter.'.
                            '<br />As long as your account isn\'t confirmed, you can\'t login to the site.<br /><br />Account info:\nUsername:';
$language['INVIT_MSGINFO2']='Password:';
$language['INVIT_MSGINFO3']='If you don\'t confirm your account within 24 hours, it will be deleted.'.
                            '<br />----------------<br />If you did not register for '.$SITENAME.', please forward this email to '.$SITEEMAIL;
$language['INVIT_MSG_AUTOCONFIRM3']='----------------<br />You can now visit<br /><br />'.$BASEURL.'/login.php'.
                                    '<br /><br />and use your login information to login in.<br /><br />'.
                                    'Good luck and have fun on '.$SITENAME.'!<br /><br /><br />----------------<br />'.
                                    'If you did not register for '.$SITENAME.', please forward this email to '.$SITEEMAIL;
$language['REG_CONFIRM']='Account Confirmation';
$language['INVITATION_ONLY']='Sorry, but registrations are closed.<br>You need an invitation in order to signup.';
$language['WELCOME_INVITE']='Welcome! You have accepted an invitation from one of our users.<br />You may now sign-up.';
$language['INVITE_EMAIL_SENT1']='A confirmation e-mail has been sent to the address you specified';
$language['INVITE_EMAIL_SENT2']='<br />You will need to wait until your inviter confirms your account.';
$language['INVITE_EMAIL_SENT3']='An e-mail has been sent to the address you specified';
$language['INVITE_EMAIL_SENT4']='<br />You may now <a href="index.php?page=login">LOGIN</a>. Good luck and have fun on '.$SITENAME.'!';
$language['INVALID_INVITATION']='Your invitation code is invalid.';
$language['ERR_INVITATION']='<br />Request a new invitation from your inviter.';
$language["GENDER"]="Gender";
$language["MALE"]="Male";
$language["FEMALE"]="Female";
$language["UNKNOW"]="Unknow";        
$language["DOMAIN_BANNED"]="No disposable E-Mail Accounts allowed. Use a real E-Mail Account.";
$language['PASSWORD_GENERATE']='Password generated';
$language['PASSWORD_GENERATE_INFO']='(Use the generated password for extra security, don&rsquo;t forget to write or save it!)';
?>
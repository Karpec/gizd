<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2015  Btiteam
//
//    This file is part of xbtit DT FM.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////

# first check for direct linking
if(!defined('IN_BTIT'))die('non direct access!');
# then require functions (is this needed?)
require_once $THIS_BASEPATH.'/include/functions.php';
require_once(load_language("lang_userdetails.php"));
# connect to db
dbconn();
# check if allowed and die if not
if($CURUSER['edit_torrents']=='no'&&$CURUSER['edit_users']=='no')die('Unauthorised access!');
# inits
$booted=addslashes($_POST['booted']);
$id=(isset($_GET['id'])?(int)$_GET['id']:0);
$returnto = $_POST["returnto"];
$booteduser=get_result('SELECT username FROM `'.$TABLE_PREFIX.'users` WHERE `id`='.$id.' LIMIT 1;', false, 3600);
$booteduser=$booteduser[0]['username'];
$subj=sqlesc($language["BOOT_RM2"]);
$msg=sqlesc(''.$language["BOOT_RM1"].' '.$language["BOOT_LOG1"].' '.$CURUSER['username'].'[/b].');
# process it 
quickQuery('UPDATE '.$TABLE_PREFIX.'users SET booted="no" WHERE id='.$id);
# message him
send_pm(0,$id,$subj,$msg);  
# log it
write_log("".$language["BOOT_LOG"]." ".$booteduser." ".$language["BOOT_LOG1"]." ".$CURUSER['username']."","delete");
# send back to original page
header('Location: '.$returnto);
die();
?>
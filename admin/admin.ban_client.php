<?php
// *****************************************************************
// Version: 1.1
// *****************************************************************
//
// Filename: admin.ban_client.php
// Parent:   peers.php
// Author:   Petr1fied
// Date:     2007-06-17
// Updated:  2008-10-18
//
// Usage:
// - Bans specific BitTorrent Clients, both individual versions and
//   all versions of a client can be banned.
//
// ####### HISTORY ################################################
//
// 1.0 2007-06-17 - Petr1fied - Intital development.
// 1.1 2008-10-18 - Petr1fied - Conversion for use with xbtit.
//
// *****************************************************************

if (!defined("IN_BTIT"))
    die("non direct access!");

if (!defined("IN_ACP"))
    die("non direct access!");

include(load_language("lang_peers.php"));
$admintpl->set('language',$language);

(isset($_GET["agent"]) ? $agent=urldecode($_GET["agent"]) : $agent="");
(isset($_GET["peer_id"]) ? $peer_id=urldecode($_GET["peer_id"]) : $peer_id="");
(isset($_GET["returnto"]) ? $url=urldecode($_GET["returnto"]) : $url="index.php");
(isset($_POST["confirm"]) ? $confirm=$_POST["confirm"] : $confirm="");
(isset($_POST["reason"]) ? $reason=mysqli_real_escape_string($DBDT,$_POST["reason"]) : $reason="");
(isset($_POST["banall"]) ? $banall="yes" : $banall="no");
$peer_id_ascii=hex2bin($peer_id);
$client=getagent($agent, $peer_id);


$admintpl->set('agent',$agent);
$admintpl->set('peer_id',$peer_id);
$admintpl->set('url',$url);
$admintpl->set('confirm',$confirm);
$admintpl->set('reason',$reason);
$admintpl->set('banall',$banall);
$admintpl->set('peer_id_ascii',$peer_id_ascii);
$admintpl->set('client',$client);


if($_POST["confirm"])
{
    if($confirm==$language["YES"] && $reason!="")
    {
        $sqlquery ="SELECT id ";
        $sqlquery.="FROM {$TABLE_PREFIX}bannedclient ";
        $sqlquery.="WHERE peer_id=".sqlesc($peer_id)." ";
        $sqlquery.="OR peer_id=".sqlesc(substr($peer_id, 0, 6));

        $check=mysqli_query($GLOBALS["___mysqli_ston"], $sqlquery) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        if(mysqli_num_rows($check)>0)
        {
            err_msg($language["ERROR"],$language["CLIENT_ALREADY_BANNED"]);
            stdfoot();
            exit();
        }
        if ($banall=="yes")
        {
            $sqlquery ="INSERT INTO {$TABLE_PREFIX}bannedclient ";
            $sqlquery.="VALUES ('', ".sqlesc(substr($peer_id, 0, 6)).", ";
            $sqlquery.=sqlesc(substr($peer_id_ascii, 0, 3)).", ";
            $sqlquery.="'".$language["NA"]."', ".sqlesc(substr($client, 0, stripos($client, " "))." (".$language["ALL_VERSIONS"].")").", ";
            $sqlquery.=" '".$reason."')";

            if ($XBTT_USE)
               do_sqlquery("INSERT INTO xbt_deny_from_clients (peer_id) VALUES (".sqlesc(substr($peer_id_ascii, 0, 3)).")",true);
        }
        else
        {
            $sqlquery ="INSERT INTO {$TABLE_PREFIX}bannedclient ";
            $sqlquery.="VALUES ('', ".sqlesc($peer_id).", ";
            $sqlquery.=sqlesc($peer_id_ascii).", ";
            $sqlquery.=sqlesc($agent).", ".sqlesc($client).", '".$reason."')";
            if ($XBTT_USE)
               do_sqlquery("INSERT INTO xbt_deny_from_clients (peer_id) VALUES (".sqlesc($peer_id_ascii).")",true);
        }
          
        @mysqli_query($GLOBALS["___mysqli_ston"], $sqlquery) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        success_msg($language["SUCCESS"],$language["CLIENT_ADDED"]."<a href='$url'>".$language["RETURN"]."</a>");
        stdfoot();
        exit();
    }
    elseif($confirm==$language["NO"])
    {
        redirect($url);
    }
    else
    {
        err_msg($language["ERROR"],$language["NEED_A_REASON"]);
        stdfoot();
        exit();
    }
}

?>
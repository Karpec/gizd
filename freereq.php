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
 if (!defined("IN_BTIT"))
      die("non direct access!");

require_once ("include/functions.php");
require_once ("include/config.php");

/////////////////
$minratio=0.9; // Set this to the minimum ratio allowed to vote.
/////////////////

if(!$CURUSER || $CURUSER["id_level"]==1 || $CURUSER["can_download"]=="no")
{

    stderr("ERROR","I'm sorry, you do not have permission to access this page.");

    stdfoot(($GLOBALS["usepopup"]?false:true));
    exit();
}
else
{
    (isset($_GET["id"]) ? $id=mysqli_real_escape_string($DBDT,$_GET["id"]) : $id="");

    if($id!="")
    {
        $query ="SELECT flr.*, IF(IF(downloaded>0, SUM(uploaded/downloaded), $minratio)>=$minratio, 'yes', 'no') can_vote ";
        $query.="FROM {$TABLE_PREFIX}free_leech_req flr ";
        $query.="INNER JOIN {$TABLE_PREFIX}users u ";
        $query.="WHERE flr.info_hash='$id' ";
        $query.="AND u.id=".$CURUSER["uid"]." ";
        $query.="GROUP BY flr.info_hash";

        $res=mysqli_query($GLOBALS["___mysqli_ston"], $query);
        if(mysqli_num_rows($res)>0)
            $row=mysqli_fetch_assoc($res);
        else
        {
            $query ="SELECT IF(IF(downloaded>0, SUM(uploaded/downloaded), $minratio)>=$minratio, 'yes', 'no') can_vote ";
            $query.="FROM {$TABLE_PREFIX}users ";
            $query.="WHERE id=".$CURUSER["uid"];
            $res=mysqli_query($GLOBALS["___mysqli_ston"], $query);
            $row=mysqli_fetch_assoc($res);
        }
        if($row["can_vote"]=="no")
        {

            stderr("ERROR","You must have a ratio higher than $minratio in order to vote");

            stdfoot(($GLOBALS["usepopup"]?false:true));
            exit();
        }
        if(isset($row["requester_ids"]))
        {
            $requesters=unserialize($row["requester_ids"]);
            if(in_array($CURUSER["uid"], $requesters))
            {

                stderr("ERROR", "You may only make one request per torrent");

                stdfoot(($GLOBALS["usepopup"]?false:true));
                exit();
            }
            else
            {
                $requesters[]=$CURUSER["uid"];
                $new_requesters=serialize($requesters);
                @mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE {$TABLE_PREFIX}free_leech_req SET count=count+1, requester_ids='$new_requesters' WHERE info_hash='$id'");
            }
        }
        else
        {
                $requesters[]=$CURUSER["uid"];
                $new_requesters=serialize($requesters);
                @mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO {$TABLE_PREFIX}free_leech_req SET info_hash='$id', requester_ids='$new_requesters'");
        }

       information_msg("Thank you for your vote ".$CURUSER["username"]."", "it has been successfully counted");
 //       print("</div><center><a href=\"javascript: history.go(-1);\">".BACK."</a>");


        stdfoot();
        exit();

    }

}

?>
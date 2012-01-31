<?php
        session_start();
        if (!isset($_SESSION['User'])){
                header("Location: login.php");
        }
        $isAdmin = $_SESSION['Admin'];
        $user = $_SESSION['User'];
        $canSell = $_SESSION['canSell'];
        require 'config.php';
        if ($canSell == false){
                $_SESSION['error'] = $lang['newAuction']['no_selling'];
                header("Location: ../myauctions.php");
        }
        require 'itemInfo.php';
        require_once '../classes/EconAccount.php';
        require_once '../classes/Item.php';
        if ($useTwitter == true){require_once 'twitter.class.php';}
        $itemId = mysql_real_escape_string(stripslashes($_POST['Item']));
        $minBid = mysql_real_escape_string(stripslashes(round($_POST['MinBid'], 2)));
        $allowBids = 1;
        if (mysql_real_escape_string(stripslashes($_POST['MinBid'])) == ""){
                $allowBids = 0;
        }
        $item = new Item($itemId);
        $player = new EconAccount($user, $useMySQLiConomy, $iConTableName);
        //$sellPrice = round($_POST['Price'], 2);
        $sellPrice  = $_POST['Price'];
        if (!itemAllowed($item->name, $item->damage)){
                $_SESSION['error'] = $item->fullname.$lang['newAuction']['item_not_allowed'];
                header("Location: ../myauctions.php");
        }else{

        if ($sellPrice > $maxSellPrice){ $sellPrice == $maxSellPrice; }
        $sellQuantity = floor($_POST['Quantity']);
        //echo is_numeric($sellQuantity);
    if ($sellQuantity < 0){
                $_SESSION['error'] = $lang['newAuction']['invalid_quantity'];
                header("Location: ../myauctions.php");
        }
        if ($sellPrice <= 0)
        {
                $_SESSION['error'] = $lang['newAuction']['invalid_price'];
                header("Location: ../myauctions.php");
        }
        else{
                if (is_numeric($sellPrice)){
                        if ((is_numeric($sellQuantity))&&($sellQuantity >= 0)){
                                $sellQuantity = round($sellQuantity);
                                if ($item->quantity >= $sellQuantity)
                                {
                                        if ($isAdmin){
                                                if ($chargeAdmins){
                                                        $itemFee = (($item->marketprice/100)*$auctionFee)*$sellQuantity;
                                                }else{
                                                        $itemFee = 0;
                                                }
                                                if ($player->money >= $itemFee){
                                                        $item->changeQuantity(0 - $sellQuantity);
                                                        $timeNow = time();
                                                        $player->spend($itemFee, $useMySQLiConomy, $iConTableName);
                                                        $itemQuery = mysql_query("INSERT INTO WA_Auctions (name, damage, player, quantity, price, created, allowBids, currentBid, currentWinner) VALUES ('$item->name', '$item->damage', '$item->owner', '$sellQuantity', '$sellPrice', '$timeNow', '$allowBids', '$minBid', '$item->owner')");
                                                        $queryLatestAuction = mysql_query("SELECT id FROM WA_Auctions ORDER BY id DESC");
                                                        list($latestId)= mysql_fetch_row($queryLatestAuction);
                                                        if ($item->quantity == 0)
                                                        {
                                                                $item->delete();
                                                        }
                                                        if ($useTwitter == true){
                                                                try{
                                                                $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
                                                                if ($sellQuantity == 0){
                                                                        $twitQuant = "Infinite";
                                                                }else{
                                                                        $twitQuant = $sellQuantity;
                                                                }
                                                                $twitter->send('[WA] Auction Created: '.$user.' is selling '.$twitQuant.' x '.$itemFullName.' for '.$currencyPrefix.$sellPrice.$currencyPostfix.' each. At '.date("H:i:s").' #webauction');
                                                                }catch (Exception $e){
                                                                        //normally means you reached the daily twitter limit.
                                                                }
                                                        }
                                                        $queryEnchants=mysql_query("SELECT * FROM WA_EnchantLinks WHERE itemId='$item->id' AND itemTableId ='0'");
                                                        while(list($idk,$enchIdk, $tableIdk, $itemIdk)= mysql_fetch_row($queryEnchants))
                                                        {
                                                                $updateEnch = mysql_query("INSERT INTO WA_EnchantLinks (enchId, itemTableId, itemId) VALUES ('$enchIdk', '1', '$latestId')");
                                                        }

                                                        $_SESSION['success'] = $lang['newAuction']['success'];
                                                        header("Location: ../myauctions.php");
                                                }else
                                                {
                                                $_SESSION['error'] = $lang['newAuction']['error'];
                                                header("Location: ../myauctions.php");
                                                }
                                        }else{
                                                if ($sellQuantity > 0){
                                                        $itemFee = (($item->marketprice/100)*$auctionFee)*$sellQuantity;
                                                        if ($player->money >= $itemFee){
                                                                $item->changeQuantity(0 - $sellQuantity);
                                                                $timeNow = time();
                                                                $player->spend($itemFee, $useMySQLiConomy, $iConTableName);
                                                                $itemQuery = mysql_query("INSERT INTO WA_Auctions (name, damage, player, quantity, price, created, allowBids, currentBid, currentWinner) VALUES ('$item->name', '$item->damage', '$item->owner', '$sellQuantity', '$sellPrice', '$timeNow', '$allowBids', '$minBid', '$item->owner')");
                                                                $queryLatestAuction = mysql_query("SELECT id FROM WA_Auctions ORDER BY id DESC");
                                                                list($latestId)= mysql_fetch_row($queryLatestAuction);
                                                                if ($item->quantity == 0)
                                                                {
                                                                        $item->delete();
                                                                }
                                                                if ($useTwitter == true){
                                                                        try{
                                                                        $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
                                                                        $twitter->send('[WA] Auction Created: '.$user.' is selling '.$sellQuantity.' x '.$itemFullName.' for '.$currencyPrefix.$sellPrice.$currencyPostfix.' each. At '.date("H:i:s").'. '.$shortLinkToAuction.' #webauction');
                                                                        }catch (Exception $e){
                                                                                //normally means you reached the daily twitter limit.
                                                                        }
                                                                }
                                                                $queryEnchants=mysql_query("SELECT * FROM WA_EnchantLinks WHERE itemId='$item->id' AND itemTableId ='0'");
                                                                while(list($idk,$enchIdk, $tableIdk, $itemIdk)= mysql_fetch_row($queryEnchants))
                                                                {
                                                                        $updateEnch = mysql_query("INSERT INTO WA_EnchantLinks (enchId, itemTableId, itemId) VALUES ('$enchIdk', '1', '$latestId')");
                                                                }

                                                                $_SESSION['success'] = str_replace(
                                                                           array('#sellQuantity#','#itemFullName#','#sellPrice#','#itemFee#'),
                                                                           array($sellQuantity,$itemFullName,$currencyPrefix.$sellPrice.$currencyPostfix,$currencyPrefix.$itemFee.$currencyPostfix),
                                                                           $lang['newAuction']['success']);
                                                                header("Location: ../myauctions.php");
                                                        }else
                                                        {
                                                        $_SESSION['error'] = str_replace('#itemFee#',$currencyPrefix.$itemFee.$currencyPostfix,$lang['newAuction']['error']);
                                                        header("Location: ../myauctions.php");
                                                        }
                                                }else
                                                {
                                                        $_SESSION['error'] = $lang['newAuction']['quantity_no_int'];
                                                        header("Location: ../myauctions.php");
                                                }
                                        }
                                }else
                                {
                                    $_SESSION['error'] = $lang['newAuction']['not_enough_item'];
                                        header("Location: ../myauctions.php");
                                }
                        }else
                        {
                                $_SESSION['error'] = $lang['newAuction']['quantity_no_int'];
                                header("Location: ../myauctions.php");
                        }
                }else
                {
                        $_SESSION['error'] = $lang['newAuction']['price_no_int'];
                        header("Location: ../myauctions.php");
                }
        }
        }

?>
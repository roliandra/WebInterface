<?php

$lang['config']['db']['no_connection'] = "Unable to connect to database";


$lang['cancelAuction']['success'] = 'Removed auction successfully';
$lang['cancelAuction']['error'] = 'Error removing that auction.';


$lang['newAuction']['no_selling'] = 'You do not have permission to sell items.';
$lang['newAuction']['item_not_allowed'] = ' is not allowed to be sold.';
$lang['newAuction']['invalid_quantity'] = 'Quantity was not a valid number.';
$lang['newAuction']['invalid_price'] = 'Price was not a valid number.';
$lang['newAuction']['success'] = "You auctioned #sellQuantity# #itemFullName# for #sellPrice# each, the fee was #itemFee#.";
$lang['newAuction']['error'] =  "Fee cost #itemFee#, you did not have enough money.";
$lang['newAuction']['quantity_no_int'] = 'Quantity was not an integer.';
$lang['newAuction']['not_enough_item'] = 'You do not have enough of that item.';
$lang['newAuction']['price_no_int'] = 'Price was not an integer.';


$lang['purchaseItem']['no_buy'] = 'You do not have permission to buy that.';
$lang['purchaseItem']['insufficient_quantity'] = "Please enter a quantity greater than 0";
$lang['purchaseItem']['too_many_quantity'] = "You are attempting to purchase more than the maximum available";
$lang['purchaseItem']['buy_success'] = "You purchased #buyQuantity# #auctionFullname# from #auctionOwner# for #totalPrice#.";
$lang['purchaseItem']['buy_own_item'] = 'You cannnot buy your own items.';
$lang['purchaseItem']['not_enough_money'] = 'You do not have enough money.';


$lang['server_processing']['unable_to_connect'] = 'Could not open connection to server';
$lang['server_processing']['unable_to_select'] = 'Could not select database ';
$lang['server_processing']['form_buy'] = 'Buy';
$lang['server_processing']['form_nobuy'] = "Can't Buy";
$lang['server_processing']['form_cancel'] = "Cancel";


$lang['graph']['pagetitle'] = 'Web Auction';


$lang['index']['pagetitle'] = 'Web Auction';
$lang['index']['subtitle'] = 'Current Auctions';
$lang['index']['th_iteminfo'] = 'Item Info';
$lang['index']['th_seller'] = 'Seller';
$lang['index']['th_expires'] = 'Expires';
$lang['index']['th_quantity'] = 'Quantity';
$lang['index']['th_priceeach'] = 'Price (Each)';
$lang['index']['th_pricetotal'] = 'Price (Total)';
$lang['index']['th_marketprice'] = '% of Market Price';
$lang['index']['th_buy'] = 'Buy';
$lang['index']['th_cancel'] = 'Cancel';
$lang['index']['msg_loading'] = 'Loading data from server';


$lang['info']['pagetitle'] = 'Web Auction';
$lang['info']['subtitle'] = 'Item Info';
$lang['info']['th_item'] = 'Item';
$lang['info']['th_numbersold'] = 'Number Sold';
$lang['info']['th_marketprice'] = 'Market Price';
$lang['info']['th_valuegraph'] = 'Value Graph';
$lang['info']['btn_valuegraph'] = 'View Value Graph';


$lang['login']['pagetitle'] = 'Web Auction';
$lang['login']['subtitle'] = 'Login';
$lang['login']['loginfailed'] = "Login Failed.";
$lang['login']['form_username'] = 'Username';
$lang['login']['form_password'] = 'Password';
$lang['login']['form_submit'] = 'Submit';


$lang['myauctions']['pagetitle'] = 'Web Auction';
$lang['myauctions']['subtitle_new'] = 'Create a new auction';
$lang['myauctions']['form_item'] = 'Item';
$lang['myauctions']['form_infinit_msg'] = "Enter 0 as the quantity for infinite stacks (admins only)";
$lang['myauctions']['form_quantity'] = 'Quantity';
$lang['myauctions']['form_price'] = 'Price (Per Item)';
$lang['myauctions']['form_submit'] = 'Submit';
$lang['myauctions']['subtitle'] = 'My Auctions';
$lang['myauctions']['th_iteminfo'] = 'Item';
$lang['myauctions']['th_expires'] = 'Expires';
$lang['myauctions']['th_quantity'] = 'Quantity';
$lang['myauctions']['th_priceeach'] = 'Price (Each)';
$lang['myauctions']['th_pricetotal'] = 'Price (Total)';
$lang['myauctions']['th_marketprice'] = '% of Market Price';
$lang['myauctions']['th_cancel'] = 'Cancel';
$lang['myauctions']['btn_cancel'] = 'Cancel';


$lang['myitems']['pagetitle'] = 'Web Auction';
$lang['myitems']['subtitle'] = 'My Items';
$lang['myitems']['not_owner'] = "You do not own that item.";
$lang['myitems']['th_item'] = 'Item';
$lang['myitems']['th_quantity'] = 'Quantity';
$lang['myitems']['th_marketpriceeach'] = 'Market Price (Each)';
$lang['myitems']['th_marketpricetotal'] = 'Market Price (Total)';
$lang['myitems']['th_mailmeitem'] = 'Mail me item';
$lang['myitems']['mailit'] = 'Mail It';


$lang['playerstats']['pagetitle'] = 'Web Auction';
$lang['playerstats']['subtitle'] = 'Player Stats';
$lang['playerstats']['th_player'] = 'Player';
$lang['playerstats']['th_itemssold'] = 'Items Sold';
$lang['playerstats']['th_itembought'] = 'Item Bought';
$lang['playerstats']['th_moneygained'] = 'Money Gained';
$lang['playerstats']['th_moneyspent'] = 'Money Spent';
$lang['playerstats']['th_totalprofit'] = 'Total Profit';


$lang['topBoxes']['head']['name'] = 'Name';
$lang['topBoxes']['head']['money'] = 'Money';
$lang['topBoxes']['head']['mail'] = 'Mail';
$lang['topBoxes']['head']['dateformat'] = 'jS M Y H:i:s';
$lang['topBoxes']['link']['home'] = 'Home';
$lang['topBoxes']['link']['myitems'] = 'My Items';
$lang['topBoxes']['link']['myauctions'] = 'My Auctions';
$lang['topBoxes']['link']['playerstats'] = 'Player Stats';
$lang['topBoxes']['link']['iteminfo'] = 'Item Info';
$lang['topBoxes']['link']['transactionlog'] = 'Transaction Log';
$lang['topBoxes']['link']['logout'] = 'logout';


$lang['transactionLog']['pagetitle'] = 'Web Auction';
$lang['transactionLog']['subtitle_buy'] = 'My Items Bought';
$lang['transactionLog']['subtitle_sold'] = 'My Items Sold';
$lang['transactionLog']['th_time'] = 'Time';
$lang['transactionLog']['th_item'] = 'Item';
$lang['transactionLog']['th_seller'] = 'Seller';
$lang['transactionLog']['th_quantity'] = 'Quantity';
$lang['transactionLog']['th_priceeach'] = 'Price (Each)';
$lang['transactionLog']['th_pricetotal'] = 'Price (Total)';
$lang['transactionLog']['th_marketprice'] = '% of Market Price';
$lang['transactionLog']['th_date'] = 'Date';
$lang['transactionLog']['th_buyer'] = 'Buyer';

?>
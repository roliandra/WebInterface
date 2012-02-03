<?php

$lang['config']['db']['no_connection'] = "Keine Verbindung zur Datenbank";


$lang['cancelAuction']['success'] = 'Angebot erfolgreich abgebrochen.';
$lang['cancelAuction']['error'] = 'Fehler beim Abbruch des Angebotes.';


$lang['newAuction']['no_selling'] = 'Es fehlt die Verkaufserlaubnis f&uuml;r Waren.';
$lang['newAuction']['item_not_allowed'] = ' ist nicht zum Verkauf gestattet.';
$lang['newAuction']['invalid_quantity'] = 'Mengenangabe enthielt keine g&uuml;ltige Zahl.';
$lang['newAuction']['invalid_price'] = 'Preisangabe enthielt keine g&uuml;ltige Zahl.';
$lang['newAuction']['success'] = "Du bietest #sellQuantity# #itemFullName# f&uuml;r #sellPrice# je St&uuml;ck an, die Geb&uuml;hr betr&auml;gt #itemFee#.";
$lang['newAuction']['error'] =  "Geb&uuml;hrenbetrag #itemFee#, du verf&uuml;gst nicht &uuml;ber den notwendigen Kontostand.";
$lang['newAuction']['quantity_no_int'] = 'Mengenangabe war nicht ganzzahlig.';
$lang['newAuction']['not_enough_item'] = 'Es stehen nicht so viele dieser Wareneinheiten zur Verf&uuml;gung.';
$lang['newAuction']['price_no_int'] = 'Preisangabe war nicht ganzzahlig';
$lang['newAuction']['two_prices_given'] = 'Es sind keine zwei Preisangaben zul&auml;ssig. Bitte nur eine verwenden.';


$lang['purchaseItem']['no_buy'] = 'Es fehlt die Erlaubnis dieses zu erwerben.';
$lang['purchaseItem']['insufficient_quantity'] = "Bitte eine Mengenangabe gr&ouml;&szlig;er 0 treffen.";
$lang['purchaseItem']['too_many_quantity'] = "Du versuchst mehr als die verfügbare Menge zu erwerben.";
$lang['purchaseItem']['buy_success'] = "Du erwarbst #buyQuantity# #auctionFullname# von #auctionOwner# f&uuml;r #totalPrice#.";
$lang['purchaseItem']['buy_own_item'] = 'Du kannst deine eigenen Angebote nicht ankaufen.';
$lang['purchaseItem']['not_enough_money'] = 'Du verf&uuml;gst nicht über den n&ouml;tigen Kontostand.';


$lang['server_processing']['unable_to_connect'] = 'Kann nicht zum Server verbinden.';
$lang['server_processing']['unable_to_select'] = 'Kann Datenbank nicht ausw&auml;hlen.';
$lang['server_processing']['form_buy'] = 'Kaufen';
$lang['server_processing']['form_nobuy'] = "kein Kauf";
$lang['server_processing']['form_cancel'] = "Abbruch";


$lang['graph']['pagetitle'] = 'Web Auction';


$lang['index']['pagetitle'] = 'Web Auction';
$lang['index']['subtitle'] = 'Aktuelle Angebote';
$lang['index']['th_iteminfo'] = 'Wareninfo';
$lang['index']['th_seller'] = 'Anbieter';
$lang['index']['th_expires'] = 'Ablauf';
$lang['index']['th_quantity'] = 'Menge';
$lang['index']['th_priceeach'] = 'Preis (Einzel)';
$lang['index']['th_pricetotal'] = 'Preis (Gesamt)';
$lang['index']['th_marketprice'] = '% des Marktpreises';
$lang['index']['th_buy'] = 'Kaufen';
$lang['index']['th_cancel'] = 'Abbruch';
$lang['index']['msg_loading'] = 'Lade Daten...';


$lang['info']['pagetitle'] = 'Web Auction';
$lang['info']['subtitle'] = 'Wareninformationen';
$lang['info']['th_item'] = 'Ware';
$lang['info']['th_numbersold'] = 'verkaufte Menge';
$lang['info']['th_marketprice'] = 'Marktpreis';
$lang['info']['th_valuegraph'] = 'Preisentwicklung';
$lang['info']['btn_valuegraph'] = 'Zeige Grafik';


$lang['login']['pagetitle'] = 'Web Auction';
$lang['login']['subtitle'] = 'Anmeldung';
$lang['login']['loginfailed'] = "Anmeldung fehlgeschlagen.";
$lang['login']['form_username'] = 'Spielername';
$lang['login']['form_password'] = 'Passwort&nbsp;&nbsp;&nbsp;&nbsp;';
$lang['login']['form_submit'] = 'Anmelden';


$lang['myauctions']['pagetitle'] = 'Web Auction';
$lang['myauctions']['subtitle_new'] = 'Eines neues Angebot erstellen';
$lang['myauctions']['form_item'] = 'Ware';
$lang['myauctions']['form_infinit_msg'] = "Gebe 0 f&uuml;r eine unendliche Mengenangabenanzahl ein (Nur Admins)";
$lang['myauctions']['form_quantity'] = 'Menge';
$lang['myauctions']['form_price'] = 'Preis (pro St&uuml;ck)';
$lang['myauctions']['form_stackprice'] = 'Preis (pro Menge)';
$lang['myauctions']['form_submit'] = 'Angebot erstellen';
$lang['myauctions']['subtitle'] = 'Meine Angebote';
$lang['myauctions']['th_iteminfo'] = 'Ware';
$lang['myauctions']['th_expires'] = 'Ablauf';
$lang['myauctions']['th_quantity'] = 'Menge';
$lang['myauctions']['th_priceeach'] = 'Preis (Einzel)';
$lang['myauctions']['th_pricetotal'] = 'Preis (Gesamt)';
$lang['myauctions']['th_marketprice'] = '% des Marktpreises';
$lang['myauctions']['th_cancel'] = 'Abbruch';
$lang['myauctions']['btn_cancel'] = 'Abbrechen';


$lang['myitems']['pagetitle'] = 'Web Auction';
$lang['myitems']['subtitle'] = 'Meine Ware';
$lang['myitems']['not_owner'] = "Du besitzt die Ware nicht.";
$lang['myitems']['th_item'] = 'Ware';
$lang['myitems']['th_quantity'] = 'Menge';
$lang['myitems']['th_marketpriceeach'] = 'Marktpreis (Einzel)';
$lang['myitems']['th_marketpricetotal'] = 'Marktpreis (Gesamt)';
$lang['myitems']['th_mailmeitem'] = 'Ware versenden';
$lang['myitems']['mailit'] = 'Ware mir senden';


$lang['playerstats']['pagetitle'] = 'Web Auction';
$lang['playerstats']['subtitle'] = 'Spieler Statistik';
$lang['playerstats']['th_player'] = 'Spieler';
$lang['playerstats']['th_itemssold'] = 'verkaufte Ware';
$lang['playerstats']['th_itembought'] = 'gekaufte Ware';
$lang['playerstats']['th_moneygained'] = 'Geld erhalten';
$lang['playerstats']['th_moneyspent'] = 'Geld ausgegeben';
$lang['playerstats']['th_totalprofit'] = 'Gesamtgewinn';


$lang['topBoxes']['head']['name'] = 'Spieler';
$lang['topBoxes']['head']['money'] = 'Kontostand';
$lang['topBoxes']['head']['mail'] = 'Briefkasten';
$lang['topBoxes']['head']['dateformat'] = 'd.m.Y - H:i';
$lang['topBoxes']['link']['home'] = 'Startseite';
$lang['topBoxes']['link']['myitems'] = 'Meine Ware';
$lang['topBoxes']['link']['myauctions'] = 'Meine Angebote';
$lang['topBoxes']['link']['playerstats'] = 'Spieler Statistiken';
$lang['topBoxes']['link']['iteminfo'] = 'Wareninformationen';
$lang['topBoxes']['link']['transactionlog'] = 'Umsatzprotokoll';
$lang['topBoxes']['link']['logout'] = 'Abmelden';
$lang['topBoxes']['link']['help'] = '<h4>Hinweise zum WebShop</h4>';


$lang['transactionLog']['pagetitle'] = 'Web Auction';
$lang['transactionLog']['subtitle_buy'] = 'Meine angekaufte Ware';
$lang['transactionLog']['subtitle_sold'] = 'Meine verkaufte Ware';
$lang['transactionLog']['th_time'] = 'Time';
$lang['transactionLog']['th_item'] = 'Ware';
$lang['transactionLog']['th_seller'] = 'Anbieter';
$lang['transactionLog']['th_quantity'] = 'Menge';
$lang['transactionLog']['th_priceeach'] = 'Preis (Einzel)';
$lang['transactionLog']['th_pricetotal'] = 'Preis (Gesamt)';
$lang['transactionLog']['th_marketprice'] = '% des Marktpreises';
$lang['transactionLog']['th_date'] = 'Datum';
$lang['transactionLog']['th_buyer'] = 'K&auml;ufer';

//common fields related to tables 
$lang['tables']['dateformat'] = 'd.m.Y - H:i';
?>
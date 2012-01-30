<?php
// TODO: Fix HTML
        session_start();
        if (!isset($_SESSION['User'])) {
                header("Location: login.php");
        }
        $user = $_SESSION['User'];
        require 'scripts/config.php';
        require 'scripts/itemInfo.php';
        require_once 'classes/Market.php';
        $isAdmin = $_SESSION['Admin'];
        $queryAuctions = mysql_query("SELECT * FROM WA_Auctions");
        if ($useMySQLiConomy) {
                $queryiConomy = mysql_query("SELECT * FROM $iConTableName WHERE username='$user'");
                $iConRow = mysql_fetch_row($queryiConomy);
        }
        $queryMarket = mysql_query("SELECT * FROM WA_MarketPrices ORDER BY id DESC");
        $playerQuery = mysql_query("SELECT * FROM WA_Players WHERE name='$user'");
        $playerRow = mysql_fetch_row($playerQuery);
        $mailQuery = mysql_query("SELECT * FROM WA_Mail WHERE player='$user'");
        $mailCount = mysql_num_rows($mailQuery);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>WebAuction</title>
    <style type="text/css" title="currentStyle">
      @import "css/table_jui.css";
      @import "css/<?php echo $uiPack?>/jquery-ui-1.8.16.custom.css";
    </style>
    <link rel="stylesheet" type="text/css" href="css/<?php echo $cssFile?>.css" />
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        oTable = $('#example').dataTable({
          "oLanguage": {
            "sUrl": "languages/datatables.<?php echo $language; ?>.txt"
          },
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        });
      });
    </script>
  </head>
  <body>
    <div id="holder">
<?php
        include("topBoxes.php");
?>
      <h1><?php echo $lang['info']['pagetitle']; ?></h1><br/>
      <h2><?php echo $lang['info']['subtitle']; ?></h2>
      <div class="demo_jui">
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
          <thead>
            <tr>
              <th><?php echo $lang['info']['th_item']; ?></th>
              <th><?php echo $lang['info']['th_numbersold']; ?></th>
              <th><?php echo $lang['info']['th_marketprice']; ?></th>
              <th><?php echo $lang['info']['th_valuegraph']; ?></th>
            </tr>
          </thead>
          <tbody>
<?php
        $marketItems = array();
        $add = true;
        while(list($id, $name, $damage, $time, $price, $ref) = mysql_fetch_row($queryMarket)) {
                $market = new Market($id);
                foreach ($marketItems as $mar) {
                        if ($market->name == $mar->name){
                                if ($market->damage == $mar->damage){
                                        if(count(array_diff($market->enchants, $mar->enchants)) ==0 ){
                                                $add = false;
                                        }
                                }
                        }
                }
                if ($add == true){
                        $marketItems[] = $market;
                //echo "<pre>";
                //print_r($marketItems);
                //echo "</pre>";

                ?>

          <tr class="gradeC">
            <td><a href="graph.php?name=<?php echo $market->name."&damage=".$market->damage ?>"><img src="<?php echo $market->image ?>" alt="<?php echo $market->fullname ?>"/><br/>
                        <?php
                        echo $market->fullname;
                        foreach ($market->enchants as $ench) {
                                echo "<br/>".getEnchName($ench["name"])." - Level: ".$ench["level"];
                        }
                        ?>
                        </a></td>
            <td>
<?php
                        echo $market->ref;
?>
            </td>
            <td>
<?php
                        echo round($market->price, 2);
?>
            </td>
                        <td><form action='graph.php' method='post'><input type='hidden' name='Name' value='<?php echo $market->name ?>' /><input type='hidden' name='Damage' value='<?php echo $market->damage ?>' /><input type='submit' value='<?php echo $lang['info']['btn_valuegraph']; ?>' class='button' /></form>

          </tr>
<?php
        }}
?>
        </tbody>
      </table>
    </div>
    <div class="spacer"></div>
<?php
        include("footer.php");
?>
    </div>
  </body>
</html>
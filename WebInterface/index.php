<?php
        // TODO: move user and session handling to separate file, for easier integration in existing login system
        session_start();
        if (!isset($_SESSION['User'])) {
                header("Location: login.php");
        }
        $user = $_SESSION['User'];
        require 'scripts/config.php';
        require 'scripts/itemInfo.php';
        require 'classes/EconAccount.php';
        require 'scripts/updateTables.php';
        require 'scripts/chargeStorage.php';

        $isAdmin = $_SESSION['Admin'];
        $canBuy = $_SESSION['canBuy'];
        $queryAuctions = mysql_query("SELECT * FROM WA_Auctions");
        if ($useMySQLiConomy) {
                $queryiConomy = mysql_query("SELECT * FROM $iConTableName WHERE username='$user'");
                $iConRow = mysql_fetch_row($queryiConomy);
        }
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
    <script type="text/javascript" language="javascript" src="js/inputfunc.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        oTable = $('#mainTable').dataTable({
          "oLanguage": {
              "sUrl": "languages/datatables.<?php echo $language; ?>.txt"
          },
          "bProcessing"     : true,
          "bJQueryUI"       : true,
          "bStateSave"      : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource"     : "scripts/server_processing.php"
        });
      });
    </script>
  </head>
  <body>
    <div id="holder">
      <?php include("topBoxes.php"); ?>
      <h1><?php echo $lang['index']['pagetitle']; ?></h1>
      <br/>
      <h2><?php echo $lang['index']['subtitle']; ?></h2>
      <p style="color:red">
<?php
        if(isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
        }
?>
      </p>
      <p style="color:green">
<?php
        if(isset($_SESSION['success'])) {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
        }
?>
      </p>
      <div class="demo_jui">
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="mainTable">
          <thead>
            <tr>
              <th><?php echo $lang['index']['th_iteminfo']; ?></th>
              <th><?php echo $lang['index']['th_seller']; ?></th>
              <th><?php echo $lang['index']['th_expires']; ?></th>
              <th><?php echo $lang['index']['th_quantity']; ?></th>
              <th><?php echo $lang['index']['th_priceeach']; ?></th>
              <th><?php echo $lang['index']['th_pricetotal']; ?></th>
              <th><?php echo $lang['index']['th_marketprice']; ?></th>
              <th><?php echo $lang['index']['th_buy']; ?></th>
<?php
        if ($isAdmin == true) {
                print("<th>".$lang['index']['th_cancel']."</th>");
        }
?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="5" class="dataTables_empty"><?php echo $lang['index']['msg_loading']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="spacer"></div>
<?php include("footer.php"); ?>
    </div>
  </body>
</html>
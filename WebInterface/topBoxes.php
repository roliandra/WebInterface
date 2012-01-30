<div id="profile-box">
  <table cellspacing="3px">
    <tr>
      <td>
        <img width="64px" src="http://minotar.net/avatar/<?php echo $user ?>" />
      </td>
      <td>
        <p>Name: &nbsp;&nbsp;<?php echo $user?><?php if ($isAdmin == "true"){ echo " ADMIN"; } ?><br/>
<?php
// TODO: printf();
// TODO: get rid of table for formating, use css instead
        if ($useMySQLiConomy) {
?>
Money: &nbsp;
<?php
                echo $currencyPrefix.$iConRow['2'].$currencyPostfix;
?>
<br />
<?php
        } else {
?>
Money: &nbsp;
<?php
        echo $currencyPrefix.$playerRow['3'].$currencyPostfix;;
?>
<br />
<?php
        }
?>
Mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
        echo $mailCount;
?>
<br />
<?php
        echo date('jS M Y H:i:s');
?>
<br />
        </p>
      </td>
    </tr>
  </table>
</div>
<div id="link-box">
  <p>
    <a href="index.php"><?php echo $lang['topBoxes']['link']['home']; ?></a><br />
    <a href="myitems.php"><?php echo $lang['topBoxes']['link']['myitems']; ?></a><br />
    <a href="myauctions.php"><?php echo $lang['topBoxes']['link']['myauctions']; ?></a><br />
        <a href="playerstats.php"><?php echo $lang['topBoxes']['link']['playerstats']; ?></a><br />
    <a href="info.php"><?php echo $lang['topBoxes']['link']['iteminfo']; ?></a><br />
    <a href="transactionLog.php"><?php echo $lang['topBoxes']['link']['transactionlog']; ?></a><br />
    <a href="logout.php"><?php echo $lang['topBoxes']['link']['logout']; ?></a>
  </p>
</div>
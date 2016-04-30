<?php
/**
 * @package Drop Shipping
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: edit_subcontrac.php 2016-04-30 11:37:16Z webchills $
 */
require('includes/application_top.php');
require(DIR_WS_CLASSES . 'currencies.php');
?>
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<link rel="stylesheet" type="text/css" href="includes/cssjsmenuhover.css" media="all" id="hoverJS">
<script language="javascript" src="includes/menu.js"></script>
<script language="javascript" src="includes/general.js"></script>

    <script type="text/javascript">
        <!--
        function init() {
            cssjsmenu('navbar');
            if (document.getElementById) {
                var kill = document.getElementById('hoverJS');
                kill.disabled = true;
            }
        }
        // -->
    </script>

</head>
<body onload="init()">
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->


<br>
<!-- body //-->
<table border="0" width='100%' cellspacing="0" cellpadding="0">

<!-- body_text //-->
<?php
//delete
// pobieranie rozkazu i wykannie go
if (isset($_GET['what']) AND $_GET['what'] == 'delete') {
    $did = $_GET['did'];
    $result = $db->Execute("DELETE FROM " . TABLE_SUBCONTRACTORS_SHIPPING . " WHERE subcontractors_id='$did' LIMIT 1");
}

//save
if (isset($_GET['what']) AND $_GET['what'] == 'save') {

    $sid = $_GET['sid'];
    $result = $db->Execute("UPDATE " . TABLE_SUBCONTRACTORS_SHIPPING . " SET WHERE subcontractors_id='$sid' LIMIT 1");
}


//pobieranie danych dla polecenia inser oraz wykannaie go
if (isset($_GET['pole']) AND $_GET['pole'] == 1) {
$alias=$_GET['alias'];
$name=$_GET['name'];
$street1=$_GET['street1'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$country=$_GET['country'];
$email_address=$_GET['email_address'];
$telephone=$_GET['telephone'];
$contact_person=$_GET['contact_person'];
$pickup_restrictions=$_GET['pickup_restrictions'];


$db->Execute("INSERT INTO ".TABLE_SUBCONTRACTORS_SHIPPING."(alias, name, street1, city, state, zip, country, email_address, telephone, contact_person, pickup_restrictions)
VALUES('$alias','$name','$street1','$city','$state','$zip','$country', '$email_address', '$telephone', '$contact_person', '$pickup_restrictions')");
echo "<meta http-equiv=\"refresh\" content=\"0 url=edit_subcontrac.php\">";
}

//save

if (isset($_GET['pole']) AND $_GET['pole'] == 0) {
    $alias = $_GET['alias'];
$name=$_GET['name'];
$street1=$_GET['street1'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$country=$_GET['country'];
$email_address=$_GET['email_address'];
$telephone=$_GET['telephone'];
$contact_person=$_GET['contact_person'];
$pickup_restrictions=$_GET['pickup_restrictions'];
$key=$_GET['key'];

$result=$db->Execute("UPDATE ".TABLE_SUBCONTRACTORS_SHIPPING." SET alias='$alias', name='$name', street1='$street1', zip='$zip', city='$city', state='$state', country='$country', email_address='$email_address', telephone='$telephone', contact_person='$contact_person', pickup_restrictions='$pickup_restrictions'
 WHERE subcontractors_id='$key' LIMIT 1");
}


//ustawianie zmiennej w celu sortowania danych w odpowiednie sposob
if(isset($_GET['list_order']))
{
	if($_GET['list_order']=='alias') $disp_order = "alias ASC";
	if($_GET['list_order']=='aliasdesc') $disp_order = "alias DESC";
	if($_GET['list_order']=='name') $disp_order = "name ASC";
	if($_GET['list_order']=='namedesc') $disp_order = "name DESC";
	if($_GET['list_order']=='street1') $disp_order = "street1 ASC";
	if($_GET['list_order']=='street1desc') $disp_order = "street1 DESC";
	if($_GET['list_order']=='city') $disp_order = "city ASC";
	if($_GET['list_order']=='citydesc') $disp_order = "city DESC";
	if($_GET['list_order']=='state') $disp_order = "state ASC";
	if($_GET['list_order']=='statedesc') $disp_order = "state DESC";
	if($_GET['list_order']=='email_address') $disp_order = "email_address ASC";
	if($_GET['list_order']=='email_addressdesc') $disp_order = "email_address DESC";
	if($_GET['list_order']=='zip') $disp_order = "zip ASC";
	if($_GET['list_order']=='zipdesc') $disp_order = "zip DESC";
	if($_GET['list_order']=='country') $disp_order = "country ASC";
	if($_GET['list_order']=='countrydesc') $disp_order = "country DESC";
	if($_GET['list_order']=='telephone') $disp_order = "telephone ASC";
	if($_GET['list_order']=='telephonedesc') $disp_order = "telephone DESC";
	if($_GET['list_order']=='contact_person') $disp_order = "contact_person ASC";
	if($_GET['list_order']=='contact_persondesc') $disp_order = "contact_person DESC";
	if($_GET['list_order']=='pickup_restrictions') $disp_order = "pickup_restrictions ASC";
	if($_GET['list_order']=='pickup_restrictionsdesc') $disp_order = "pickup_restrictions DESC";

}else
{

$disp_order = "subcontractors_id ASC";
}



// ustawianie linkow dla naglowkow szablonu ktore pozwalaja na sortowanie kolumn


?><tr><td class="pageHeading" colspan="2"><br><?php  echo HEADING_TITLE_EDIT_SUBCONTRACTORS; ?><br><br></td></tr>
           <tr>  <td valign="top" width='80%'>
		   <table border="0" width='100%' cellspacing="0" cellpadding="0">
              <tr class="dataTableHeadingRow">
                <td width='3%' class="dataTableHeadingContent" align="center" valign="top">
                  <?php  echo ID; ?>
                </td>
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_SHORTNAME;  ?><br>
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=alias'); ?>"><?php echo ($_GET['list_order']=='alias' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=aliasdesc'); ?>"><?php echo ($_GET['list_order']=='aliasdesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_FULLNAME; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=name'); ?>"><?php echo ($_GET['list_order']=='name' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=namedesc'); ?>"><?php echo ($_GET['list_order']=='namedesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_STREET; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=street1'); ?>"><?php echo ($_GET['list_order']=='street1' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=street1desc'); ?>"><?php echo ($_GET['list_order']=='street1desc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                 <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_CITY; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=city'); ?>"><?php echo ($_GET['list_order']=='city' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=citydesc'); ?>"><?php echo ($_GET['list_order']=='citydesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_STATE; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=state'); ?>"><?php echo ($_GET['list_order']=='state' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=statedesc'); ?>"><?php echo ($_GET['list_order']=='statedesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                
                 <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_ZIP; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=zip'); ?>"><?php echo ($_GET['list_order']=='zip' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=zipdesc'); ?>"><?php echo ($_GET['list_order']=='zipdesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_COUNTRY; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=country'); ?>"><?php echo ($_GET['list_order']=='country' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=countrydesc'); ?>"><?php echo ($_GET['list_order']=='countrydesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
               	<td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_EMAIL; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=email_address'); ?>"><?php echo ($_GET['list_order']=='email_address' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=email_addressdesc'); ?>"><?php echo ($_GET['list_order']=='email_addressdesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>

                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_HEADING_TELEPHONE; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=telephone'); ?>"><?php echo ($_GET['list_order']=='telephone' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=telephonedesc'); ?>"><?php echo ($_GET['list_order']=='telephonedesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>

                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_CONTACT_PERSON; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=contact_person'); ?>"><?php echo ($_GET['list_order']=='contact_person' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=contact_persondesc'); ?>"><?php echo ($_GET['list_order']=='contact_persondesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>
                
                <td width='10%' class="dataTableHeadingContent" align="center">
                  <?php echo TABLE_PICKUP_RESTRICTIONS; ?><br>
				  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=pickup_restrictions'); ?>"><?php echo ($_GET['list_order']=='pickup_restrictions' ? '<span class="SortOrderHeader">Asc</span>' : '<span class="SortOrderHeaderLink">Asc</b>'); ?></a>&nbsp;
                  <a href="<?php echo zen_href_link(basename($PHP_SELF) . '?list_order=pickup_restrictionsdesc'); ?>"><?php echo ($_GET['list_order']=='pickup_restrictionsdesc' ? '<span class="SortOrderHeader">Desc</span>' : '<span class="SortOrderHeaderLink">Desc</b>'); ?></a>
                </td>


                <td width='7%' class="dataTableHeadingContent" align="right"><?php echo ACTION; ?>&nbsp;<br>

              </tr>



					<?php

					$cid=$_GET['cID'];
            if ($cid == '') {
                $row2 = $db->Execute("SELECT subcontractors_id, alias,  name, street1, city, state, zip, country, email_address,  telephone, contact_person, pickup_restrictions FROM " . TABLE_SUBCONTRACTORS_SHIPPING . " LIMIT 1");

                $cid = $row2->fields['subcontractors_id'];
            }
            $row = $db->Execute("SELECT subcontractors_id, alias,  name, street1, city, state, zip, country, email_address,  telephone, contact_person, pickup_restrictions   FROM " . TABLE_SUBCONTRACTORS_SHIPPING . " order by $disp_order");
            $k = 0;
            while (!$row->EOF) {
                if ($cid != $row->fields['subcontractors_id']) {
                    echo '<tr class="dataTableRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="document.location.href=\'' . zen_href_link(edit_subcontrac, zen_get_all_get_params(array('cID', 'action')) . 'cID=' . $row->fields['subcontractors_id'] . '&action=edit', 'NONSSL') . '\'">' . "\n";
                } else {
                    echo '<tr id="defaultSelected" class="dataTableRowSelected" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="document.location.href=\'' . zen_href_link(edit_subcontrac, zen_get_all_get_params(array('cID', 'action')) . 'cID=' . $row->fields['subcontractors_id'] . '&action=edit', 'NONSSL') . '\'">' . "\n";


                }

                echo "<td align='center'>" . $row->fields['subcontractors_id'] . "</td>";
                echo "<td align='center'>" . $row->fields['alias'] . "</td>";
                echo "<td align='center'>" . $row->fields['name'] . "</td>";
                echo "<td align='center'>" . $row->fields['street1'] . "</td>";
                echo "<td align='center'>" . $row->fields['city'] . "</td>";
                echo "<td align='center'>" . $row->fields['state'] . "</td>";
                echo "<td align='center'>" . $row->fields['zip'] . "</td>";
                echo "<td align='center'>" . $row->fields['country'] . "</td>";
                echo "<td align='center'>" . $row->fields['email_address'] . "</td>";
                echo "<td align='center'>" . $row->fields['telephone'] . "</td>";
                echo "<td align='center'>" . $row->fields['contact_person'] . "</td>";
                echo "<td align='center'>" . $row->fields['pickup_restrictions'] . "</td>";
                if ($k == '0') {
                    $fond[0] = $row->fields['subcontractors_id'];
                    $fond[1] = $row->fields['alias'];
                }
                $k++;

                ?>
                <td align="right"> <?php if ($cid != $row->fields['subcontractors_id']) {
                        ?>
                        <img src="images/icon_info.gif" border="0" alt="Info" title=" Info ">
                    <?php
                    } else {
                        ?>
                        <img src="images/icon_arrow_right.gif" border="0" alt="">
                    <?php
                    }
                    ?>

                </td></tr>
                <?php
                $row->MoveNext();
            }
            ?>


        </table>
		</td>
		<td valign="top" >

		<table border="0" width='100%' cellspacing="0" cellpadding="2" align="center">
		<tr>
		<?php
                $row2 = $db->Execute("SELECT * FROM " . TABLE_SUBCONTRACTORS_SHIPPING . " WHERE subcontractors_id='$cid'");

                // projekt szablonu do wyswietlania subcontracotow oraz wyswietlanie ich
                ?>
                <td colspan="2" width='' class="infoBoxHeading">
                    <?php echo "ID:" . $row2->fields['subcontractors_id'] . " Full name: " . $row2->fields['name']; ?>
                </td>
            </tr>

		<form name='form1' action="edit_subcontrac.php" METHOD="get">
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_SHORTNAME; ?></td>
		<td width='75%' align="left" class="infoBoxContent"><input type='text' name="alias" value="<?php echo $row2->fields['alias']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_FULLNAME; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="name" value="<?php echo $row2->fields['name']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_STREET; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="street1" value="<?php echo $row2->fields['street1']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_CITY; ?></td></td>
		<td align="left" class="infoBoxContent"><input type='text' name="city" value="<?php echo $row2->fields['city']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_STATE; ?></td></td>
		<td align="left" class="infoBoxContent"><input type='text' name="state" value="<?php echo $row2->fields['state']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_ZIP; ?></td></td>
		<td align="left" class="infoBoxContent"><input type='text' name="zip" value="<?php echo $row2->fields['zip']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_COUNTRY; ?></td></td>
		<td align="left" class="infoBoxContent"><input type='text' name="country" value="<?php echo $row2->fields['country']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_EMAIL; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="email_address" value="<?php echo $row2->fields['email_address']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_HEADING_TELEPHONE; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="telephone" value="<?php echo $row2->fields['telephone']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_CONTACT_PERSON; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="contact_person" value="<?php echo $row2->fields['contact_person']; ?>"></td>
		</tr>
		<tr>
		<td align="right" class="infoBoxContent"><?php echo TABLE_PICKUP_RESTRICTIONS; ?></td>
		<td align="left" class="infoBoxContent"><input type='text' name="pickup_restrictions" value="<?php echo $row2->fields['pickup_restrictions']; ?>"></td>
		</tr>
		<input type="hidden" name="pole"><input type='hidden' name="key" value="<?php echo $row2->fields['subcontractors_id']; ?>">
<tr>
<td colspan="2" class="infoBoxContent">
                        <input type="image" src="includes/languages/english/images/buttons/button_insert.gif"
                               name='insert' ONCLICK="javascript: document.form1.pole.value=1;document.form1.submit();">
                        <input type="image" src="includes/languages/english/images/buttons/button_save.gif"
                               ONCLICK="javascript:document.form1.pole.value=0;document.form1.submit();">
                        <br/>
                        <a href="edit_subcontrac.php?what=delete&did=<?php echo $row2->fields['subcontractors_id']; ?>"><img
                                src="includes/languages/english/images/buttons/button_delete.gif" border="0"
                                alt="Delete" title=" Delete "></a>
</form>

</td>
</tr>

		</table>
		</td>

      </tr>
</table>

<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
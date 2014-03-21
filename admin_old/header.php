<table width="100%" border="0" cellspacing="0" cellpadding="0">



  <tr>



    <td height="115" align="center" background="images/header_bg.jpg"><table width="96%" border="0" cellspacing="0" cellpadding="0">



      <tr>



        <td width="48%" height="115" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">



          <tr>



            <td align="left">
            <img src="../images/bg.jpg"  style="float:left;" />
            <h1 style="float: left; margin-top: 38px; margin-left: 36px;" >EspeciallyTheFamily</h1></td>



          </tr>



          <tr>



            <td align="left"><h2></h2></td>



          </tr>



        </table></td>



        <td align="right">&nbsp;



        



        



        



        </td>



      </tr>



    </table></td>



  </tr>



  <tr>



    <td height="1"></td>



  </tr>



  <tr>



    <td height="25" align="center" background="images/header_welcome_bg.jpg"><table width="98%" border="0" cellspacing="0" cellpadding="0">



      <tr>



        <td width="48%" align="left">Welcome <strong><?php echo $_SESSION["Admin"]; ?></strong> </td>



        <td align="right"><strong>Date:</strong> <?php echo date('d-m-y');?> </td>



         <?php if($_SESSION['AdminId']!=""){?><td width="3%" align="right"><a href="logout.php"><img src="images/btn_logout.gif" alt="Logout" width="16" height="16" border="0" title="Logout"/></a></td><?php }; ?>



      </tr>



    </table></td>



  </tr>



  <tr>



    <td height="1"></td>



  </tr>



  <tr>



    <td height="1" bgcolor="#EDEDED"></td>



  </tr>



</table>




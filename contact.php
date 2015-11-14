<? include("top.php");
if( isset($_POST['textarea']) & strlen($_POST['textarea']>1 )) 
{
	$flag=1;
	
	//send email
	$to="rzdziech@poczta.fm";
	$subject="Granite Supplies website message";
	
	$message="
	<div>
	<h1>\"Granite Supplies Customer Message\"</h1>
	<br>
	<h2>Customer Name: ".$_POST['textfield']."<br>
	<h2>Customer Email: ".$_POST['textfield2']."<br>
	<h2>Customer Phone: ".$_POST['textfield3']."<br>
	
	<h3>Message: </h3><br>
	".$_POST['textarea']."<br>
	</div>
	
	";
	
}else{
	$flat=0;
}

//echo $_POST['textfield']; //name
//echo $_POST['textfield2']; email
//echo $_POST['textfield3']; phone
//echo $_POST['textarea']; message


?>
                    <td height="100%"><table width="645" height="100%"  border="0" cellpadding="0" cellspacing="0">
                      <tr align="left" valign="top">
                        <td width="222" height="100%" style="border-right:0px solid #8B7259 "><table width="222" height="100%"  border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="222" height="100%" align="left" valign="top"><table width="222" height="100%"  border="0" cellpadding="0" cellspacing="0" background="images/rep_4.jpg">
                                <tr>
                                  <td height="100%" align="left" valign="top" background="images/back_3.jpg" style="background-position:top left; background-repeat:no-repeat "><div style="padding-left:12px; padding-top:12px"><img src="images/info_1.jpg" width="112" height="12"></div>
            
		<div class="style10" style="padding-left:12px; padding-top:7px; padding-right:12px; font-weight: bold;">Granite Supplies</div>                        
        <div class="style10" style="padding-left:12px; padding-top:10px; padding-right:12px">Top Barn <br>
		Trevornick Farm <br>
		St.Columb Major <br>
		TR9 6DT   		
		</div>

<div class="style10" style="padding-left:12px; padding-top:10px; padding-right:12px">
Kevin Office: <img src="images/spacer.gif" width="1" height="1">    01637 857278 <br>
Kevin Mobile:  <img src="images/spacer.gif" width="1" height="1">   078 032 437 73 <br> 
Peter Mobile:  <img src="images/spacer.gif" width="1" height="1">   077 532 311 83 
</div>
                                   

 <div style="padding-left:12px; padding-top:6px"><img src="images/info_2.jpg" width="101" height="14"></div>
<div class="style10" style="padding-left:12px; padding-top:7px; padding-right:12px">

<strong>Email:</strong><br>
<a href="mailto:granitesupplies@aol.co.uk" style="color:#FF9204 ">granitesupplies@aol.co.uk</a></div><div class="style10" style="padding-left:12px; padding-top:14px; padding-right:12px">

 
                                </tr>
                            </table></td>
                            </tr>
                        </table></td>
                        <td width="423" height="100%"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top" background="images/line_7.jpg"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
<td align="left" valign="top" background="images/top_5.jpg" style="background-position:top left; background-repeat:no-repeat ">
<div style="padding-left:17px; padding-top:11px"><img src="images/feed.jpg" width="54" height="11">
 <?

 
if (isset($flag) & strlen($_POST['textarea']>1))
{
 if(mail($to,$subject,$message))
 {
 echo ("<b>Your message has been set to us. Thank You.</b>");
 $flag=0;
 }	
}

?>

</div>

<div style="padding-left:17px; padding-top:8px; padding-right:12px; line-height:12px"><span class="style8">



<strong>For any queries</strong><br><br>

Please complete the form below and we will contact you to discuss your requirements.</span></div>


<div style="padding-left:17px; padding-top:11px; padding-bottom:15px">
  <table width="380"  border="0" cellspacing="0" cellpadding="0">
  
   <form method="post">
    <tr>
      <td align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr align="left" valign="top">
            <td width="193">
			 <table width="178"  border="0" cellspacing="0" cellpadding="0">
                <tr align="left" valign="middle" class="style8">
                	<td width="69" height="22" align="right"><strong>Your name:</strong></td>
                  <td height="22" align="right">
				  	<input type="text" name="textfield" style="width:104px; height:17px; font-family:tahoma; font-size:11px; border:1px solid #424242; background-color:#FFFFFF "></td>
                </tr>
                
                <tr align="left" valign="middle" class="style8">
					<td width="69" height="22" align="right"><strong>E-mail:</strong></td>
                    <td height="22" align="right"><input type="text" name="textfield2" style="width:104px; height:17px; font-family:tahoma; font-size:11px; border:1px solid #424242; background-color:#FFFFFF "></td>
                </tr>
                
                <tr align="left" valign="middle" class="style8">
                  <td width="69" height="22" align="right"><strong>Phone:</strong></td>
                  <td height="22" align="right"><input type="text" name="textfield3" style="width:104px; height:17px; font-family:tahoma; font-size:11px; border:1px solid #424242; background-color:#FFFFFF "></td>
                </tr>
                
             </table></td>
             
            <td><div style="padding-left:0px; padding-top:2px">
            
              <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr align="left" valign="top">
                
                  <td width="58" class="style8"><div style="padding-left:0px; padding-top:1px">
				  	<strong>Message:</strong></div></td>
                  		<td align="right"><textarea name="textarea"  style="width:130px; height:81px; font-family:tahoma; font-size:11px; border:1px solid #424242; background-color:#FFFFFF; overflow:auto "></textarea></td>
                </tr>
                
              </table></div></td>
          </tr></table></td>
    </tr>
    
    <tr>
      <td height="19" align="right" valign="bottom">


          <input type="image" style="margin-right:8px " src="images/submit.jpg">
        </td>  
          
    </tr></form>
  </table>
  </div></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td height="12" align="left" valign="top"><img src="images/line_5.jpg" width="423" height="12"></td>
                          </tr>
                          <tr>
                            <td height="100%" align="left" valign="top" background="images/line_7.jpg"><div style="padding-left:17px; padding-top:11px"><img src="images/notes.jpg" width="31" height="11"></div>
                              <div style="padding-left:17px; padding-top:8px; padding-right:12px; line-height:12px">
							  
							  <span class="style8">
							  
							  <strong>Our Service <br><br></strong> We can supply and fit almost anywhere in the country however the main areas we service are: Cornwall and Devon.</span></div></td>
                          </tr>
                          <tr>
                            <td height="5" align="left" valign="top"><img src="images/bot_1.jpg" width="423" height="5"></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
<?
//echo $message;
include("foot.php");
?>
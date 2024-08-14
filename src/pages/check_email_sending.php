<?php 
declare(strict_types = 1);  



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //email send
  $emails        = $_POST['email'];// 
  $from = $admin_mail;                   // Email address                 // Message        
  $subject = "schoolworks를 신청해주셔서 감사합니다.";    // Create message body
  $email = new PhpBook\Email\Email($email_config); // Create email object
  $service_name = "check";
  $SD_SCHUL_CODE = $_POST['SD_SCHUL_CODE'];
  $SCHUL_NM = $_POST['SCHUL_NM'];
  $year = date("Y");



  $message2 = '


        
                                    <table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF; max-width:640px;" width="100%" class="emailContainer">
                                        <tr>
                                            <td align="center" valign="top" bgcolor="#FFFFFF" valign="top" style="padding-right:40px; padding-bottom:40px; padding-left:40px; ">
                                                <h1 style="color:#241C15; font-family:Georgia, Times, serif; font-size:30px; font-style:normal; font-weight:400; line-height:42px; letter-spacing:normal; margin:0; padding:0; text-align:center;"><br /></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle" style="padding-right:40px; padding-bottom:60px; padding-left:40px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" id="button">
                                                      
                                                        https://neohum779.mycafe24.com/www/' . $service_name .'/l'. $SD_SCHUL_CODE . $year .'
                                                        </td>
                                                        <td align="center" bgcolor="#FFFFFF" id="button">
                                                         서비스 신청이 완료 되었습니다. 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                      
                                        <tr>
                                        <td align="center" valign="middle" style="padding-right:40px; padding-bottom:60px; padding-left:40px;">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td align="center" valign="top" class="footerContent" style="border-top:2px solid #EFEEEA; color:#6A655F; font-family:Helvetica, Arial, Verdana, sans-serif; font-size:12px; font-weight:400; line-height:24px; padding-top:40px; padding-bottom:40px; text-align:center;">
                                                      <p style="color:#6A655F; font-family: Helvetica, Arial, Verdana, sans-serif; font-size:12px; font-weight:400; line-height:24px; padding-top:0; margin:0; text-align:center;">&copy; 2024 schoolworks All Rights Reserved<br /></p>
                                                      
                                                  </td>
                                                </tr>
                                            </table>
                                        </td>
                                        </tr>
                                    </table>
                                    <!--[if gte mso 9]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <!-- // END BODY AND FOOTER -->
                        </table>
                    </td>
                </tr>
            </table>
        </center>';


 $email->sendEmail(
              $email_config['admin_email'],
              $emails,
              $subject,
              $message2
              
            );
  
}


echo $twig->render('check_email_sending.html');
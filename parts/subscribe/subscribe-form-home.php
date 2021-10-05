<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>
<!--Zoho MarketingHub Web-Optin Form Starts Here-->
<script type="text/javascript" src="https://mozr.maillist-manage.eu/js/optin.min.js" onload="setupSF('sf3z74c456118c5fc061db016b4ebc9a11877a0d07af85c699e6837d2d383b89aaf6','ZCFORMVIEW',false,'light')">
</script>
<script type="text/javascript">
  function runOnFormSubmit_sf3z74c456118c5fc061db016b4ebc9a11877a0d07af85c699e6837d2d383b89aaf6(th) {
    /Before submit, if you want to trigger your event, "include your code here"/
  };
</script>
<div id="sf3z74c456118c5fc061db016b4ebc9a11877a0d07af85c699e6837d2d383b89aaf6" data-type="signupform">
  <div id="customForm">
    <input type="hidden" id="signupFormType" value="QuickForm_Horizontal">
    <div class="quickFormHorizontal quick_form_8_css" name="SIGNUP_BODY" id="SIGNUP_BODY">
      <div id="SIGNUP_HEADING" class="mb-2" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">
        <?php _e('SUBSCRIBE_TO_OUR_NEWSLETTER', 'mozrest'); ?></div>
      <div style="position:relative;">
        <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color:
          white; padding: 3px; border: 3px solid rgb(194, 225, 154); margin-top:
          10px;margin-bottom:10px;word-break:break-all ">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td width="10%">
                  <img class="successicon" src="https://mozr.maillist-manage.eu/images/challangeiconenable.jpg" align="absmiddle">
                </td>
                <td>
                  <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size:
                    14px;word-break:break-word"> <?php _e('THANK_YOU_FOR_SUBSCRIBE', 'mozrest'); ?></span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <form method="POST" id="zcampaignOptinForm" action="https://mozr.maillist-manage.eu/weboptin.zc" target="_zcSignup">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td align="left" valign="top">
                <div>
                  <span>
                    <span>
                      <input class="form-control mb-3" savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" placeholder="<?php _e('ENTER_YOUR_EMAIL', 'mozrest'); ?>">
                      <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Lead Email,2</span>
                    </span>
                  </span>
                  <span style="padding-left:0px; padding-right:0px;padding-bottom:10px;">
                    <input class="btn btn-blue uppercase d-block w-100" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" value="<?php _e('SUBSCRIBE', 'mozrest'); ?>">
                  </span>
                </div>
              </td>
            </tr>
          </tbody>
        </table><!-- Do not edit the below Zoho Campaigns hidden tags -->
        <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
        <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload="">
        <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
        <input type="hidden" id="lD" name="lD" value="1e33a5f2339594d">
        <input type="hidden" name="emailReportId" id="emailReportId" value="">
        <input type="hidden" id="formType" name="formType" value="QuickForm">
        <input type="hidden" name="zx" id="cmpZuid" value="14ac10ee70">
        <input type="hidden" name="zcvers" value="2.0">
        <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
        <input type="hidden" id="mode" name="mode" value="OptinCreateView">
        <input type="hidden" id="zcld" name="zcld" value="1e33a5f2339594d">
        <input type="hidden" id="document_domain" value="zoho.eu">
        <input type="hidden" id="zc_Url" value="mozr.maillist-manage.eu">
        <input type="hidden" id="new_optin_response_in" value="2">
        <input type="hidden" id="duplicate_optin_response_in" value="2">
        <input type="hidden" id="zc_formIx" name="zc_formIx" value="3z74c456118c5fc061db016b4ebc9a11877a0d07af85c699e6837d2d383b89aaf6">
        <!-- End of the campaigns hidden tags -->
      </form>
    </div>
    <img src="https://mozr.maillist-manage.eu/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
  </div>
</div>
<div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0,
  0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
<div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed;
  left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px; box-shadow: 0 1px
  10px #424242;padding: 35px;">
  <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
    <img src="https://mozr.maillist-manage.eu/images/videoclose.png">
  </span>
  <div id="zcOptinSuccessPanel"></div>
</div>
<!--Zoho MarketingHub Web-Optin Form Ends Here-->
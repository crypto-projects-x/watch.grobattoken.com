<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 */

echo " ";
include "includes/header.php";
if ($checkLicense["status"] != "Active") {
    echo "<script>window.location.href = 'oops.php';</script>";
    exit;
}
$LiveSection = "";
$MovieSection = "";
$SeriesSection = "";
$epgtimeshift = "0";
$timeformat = "12";
$parentenable = "";
$parentpassword = "";
if (isset($_COOKIE["settings_array"])) {
    $SessioStoredUsername = $_SESSION["webTvplayer"]["username"];
    $SettingArray = json_decode($_COOKIE["settings_array"]);
    if (isset($SettingArray->{$SessioStoredUsername}) && !empty($SessioStoredUsername)) {
        $LiveSection = $SettingArray->{$SessioStoredUsername}->live_player;
        $MovieSection = $SettingArray->{$SessioStoredUsername}->movie_player;
        $SeriesSection = $SettingArray->{$SessioStoredUsername}->series_player;
        $epgtimeshift = $SettingArray->{$SessioStoredUsername}->epgtimeshift;
        $timeformat = $SettingArray->{$SessioStoredUsername}->timeformat;
        $parentenable = $SettingArray->{$SessioStoredUsername}->parentenable;
        $parentpassword = $SettingArray->{$SessioStoredUsername}->parentpassword;
    }
}
echo "\r\n<style type=\"text/css\">\r\n  div#SuccessMessage {\r\n      position: fixed;\r\n      top: -100%;\r\n      left: 35%;\r\n      width: 30%;\r\n  }\r\n  h3.SettingsHeadings {\r\n        color: #fff;\r\n      text-align: left;\r\n  }\r\n\r\n  .switch {\r\n      position: relative;\r\n      display: inline-block;\r\n      width: 60px;\r\n      height: 34px;\r\n    }\r\n\r\n    .switch input {display:none;}\r\n\r\n    .slider {\r\n      position: absolute;\r\n      cursor: pointer;\r\n      top: 0;\r\n      left: 0;\r\n      right: 0;\r\n      bottom: 0;\r\n      background-color: #ccc;\r\n      -webkit-transition: .4s;\r\n      transition: .4s;\r\n    }\r\n\r\n    .slider:before {\r\n      position: absolute;\r\n      content: \"\";\r\n      height: 26px;\r\n      width: 26px;\r\n      left: 4px;\r\n      bottom: 4px;\r\n      background-color: white;\r\n      -webkit-transition: .4s;\r\n      transition: .4s;\r\n    }\r\n\r\n    input:checked + .slider {\r\n      background-color: #2196F3;\r\n    }\r\n\r\n    input:focus + .slider {\r\n      box-shadow: 0 0 1px #2196F3;\r\n    }\r\n\r\n    input:checked + .slider:before {\r\n      -webkit-transform: translateX(26px);\r\n      -ms-transform: translateX(26px);\r\n      transform: translateX(26px);\r\n    }\r\n\r\n    /* Rounded sliders */\r\n    .slider.round {\r\n      border-radius: 34px;\r\n    }\r\n\r\n    .slider.round:before {\r\n      border-radius: 50%;\r\n    }\r\n\r\n    .addredborder\r\n    {\r\n      border:1px solid red !important;\r\n    }\r\n\r\n    .modal-backdrop {\r\n        z-index: 1040 !important;\r\n    }\r\n    .modal-dialog {\r\n        z-index: 1100 !important;\r\n    }\r\n\r\n    .in {\r\n      background: rgba(0, 0, 0, 0.95);\r\n      }\r\n\r\n      button#UpdateParentPassword {\r\n          position: relative;\r\n          top: 18px;\r\n      }\r\n      .commoncs2, .commoncs2:focus, .commoncs2:active\r\n      {\r\n          background: transparent;\r\n          color: #000 !important;\r\n          padding: 0;\r\n          box-shadow: none;\r\n          outline: none;\r\n          border: 0;\r\n          border-bottom: 1px solid #000;\r\n          border-radius: 0;\r\n      }\r\n      .commoncs2::-webkit-input-placeholder {\r\n          color: #000 !important;\r\n        }\r\n        \r\n      .commoncs2::-moz-placeholder {\r\n         color: #000 !important;\r\n      }\r\n      .commoncs2::-webkit-input-placeholder {\r\n         color: #000 !important;\r\n      }\r\n      .commoncs2::-ms-input-placeholder{\r\n         color: #000 !important;\r\n      }\r\n\r\n    td.common-td {\r\n         width: 40%;\r\n    }\r\n\r\n   .disableInputs\r\n   {\r\n      cursor: not-allowed;\r\n   }\r\n\r\n   a.showbtn {\r\n      top: -22px;\r\n      position: relative;\r\n      left: 94%;\r\n  } \r\n\r\n  .commoncs {\r\n    position: relative;\r\n    top: 10px;\r\n}\r\n\r\n\r\n.form-control, .form-control:focus, .form-control:active {\r\n     border-bottom: none !important; \r\n  }\r\n\r\n  .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {\r\n      border: 1px solid #dadada52 !important;\r\n      padding: 5px 10px !important;\r\n      line-height: 30px !important;\r\n  }\r\n\r\n  .commoncs, .commoncs:focus, .commoncs:active \r\n  { \r\n      border-bottom: 1px solid #dadada52 !important;\r\n  }\r\n  .commoncs2, .commoncs2:focus, .commoncs2:active \r\n  { \r\n      border-bottom: 1px solid #000 !important;\r\n  }\r\n\r\n\r\na.popsbtn {\r\n    top: -32px;\r\n}\r\n\r\n.commonsectionclass table {\r\n    border: none !important;\r\n}\r\n\r\n.commonsectionclass tr {\r\n    border: none !important;\r\n}\r\n\r\n\r\n.commonsectionclass td {\r\n    border: none !important;\r\n}\r\n.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td\r\n{\r\n  border: none !important;\r\n  padding:10px 10px !important\r\n}\r\n\r\n.main-sheading\r\n{\r\n      border-bottom: 1px solid #aaa;\r\n    padding-bottom: 10px;\r\n}\r\n\r\n.commonsectionclass {\r\n    border-bottom: 1px groove #aaa;\r\n}\r\n\r\n.commonsectionclass .form-control {\r\n    border-bottom: 1px groove #aaa !important;\r\n}\r\n</style>\r\n<div class=\"modal fade\" id=\"confirmparentPopup\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">\r\n    <div class=\"modal-dialog\">\r\n    \r\n      <!-- Modal content-->\r\n      <div class=\"modal-content\">\r\n        <div class=\"modal-header\">\r\n          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n          <h4 class=\"modal-title\">Confirm PIN</h4>\r\n        </div>\r\n        <div class=\"modal-body\">\r\n          <input type=\"password\" id=\"parentPass\" class=\"form-control commoncs2\" placeholder=\"Enter PIN\" value=\"\"  >\r\n          <a href=\"#parentPass\" data-currenteye=\"show\" data-faid=\"fappass\" class=\"showbtn popsbtn\" ><i class=\"fa fa-eye-slash\" id=\"fappass\" aria-hidden=\"true\"></i></a>\r\n        </div>\r\n        <div class=\"modal-footer\">\r\n          <button type=\"button\" id=\"confirmpasswordbtn\" class=\"btn btn-primary\">Confirm <i class=\"fa fa-spin fa-spinner hideOnLoad\" id=\"checkingprocess3\"></i></button>\r\n          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n        </div>\r\n      </div>\r\n      \r\n    </div>\r\n  </div>\r\n <nav class=\"navbar navbar-inverse navbar-static-top\">\r\n    <div class=\"container full-container navb-fixid\">\r\n      <div class=\"navbar-header\">\r\n        <div id=\"showLeft\" class=\"cat-toggle hide\"> <span></span> <span></span> <span></span> <span></span> </div>\r\n        <button type=\"button\" class=\"navbar-toggle collapsed pull-right\" data-toggle=\"offcanvas\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>\r\n      </div>\r\n      <a class=\"brand\" href=\"dashboard.php\"><img class=\"img-responsive\" src=\"";
echo isset($XClogoLinkval) && !empty($XClogoLinkval) ? $XClogoLinkval : "img/logo.png";
echo "\" alt=\"\" onerror=\"this.src='img/logo.png';\"></a>\r\n      <div id=\"navbar\" class=\"collapse navbar-collapse sidebar-offcanvas\">\r\n        ";
if ($activePage !== "index") {
    echo "        <ul class=\"nav navbar-nav navbar-left main-icon\">\r\n          <li class=\"";
    if ($activePage == "index") {
        echo "active";
    }
    echo "\"><a href=\"index.php\"><span class=\"da home\"></span><span>Home</span></a></li>\r\n          <li class=\"";
    if ($activePage == "live") {
        echo "active";
    }
    echo "\"><a href=\"live.php\"><span class=\"da live\"></span><span>Live Tv</span></a></li>\r\n          <li class=\"";
    if ($activePage == "movies") {
        echo "active";
    }
    echo "\"><a href=\"movies.php\"><span class=\"da movie\"></span><span>Movies</span></a></li>\r\n          <li class=\"";
    if ($activePage == "series") {
        echo "active";
    }
    echo "\" ><a href=\"series.php\"><span class=\"da tv\"></span><span>Tv series</span></a></li>\r\n          <li class=\"";
    if ($activePage == "radio") {
        echo "active";
    }
    echo "\" ><a href=\"radio.php\"><span class=\"da radio\"></span><span>Radio</span></a></li>\r\n          <li class=\"";
    if ($activePage == "catchup") {
        echo "active";
    }
    echo "\"><a href=\"catchup.php\"><span class=\"da catchup\"></span><span>Catch Up</span></a></li>\r\n          <!-- <li class=\"";
    if ($activePage == "radio") {
        echo "active";
    }
    echo "\"><a href=\"radio.php\"><span class=\"da radio\"></span><span>Radio</span></a></li> -->\r\n          \r\n        </ul>\r\n        <ul class=\"nav navbar-nav navbar-right r-icon\">\r\n          ";
    if ($activePage == "settings") {
        echo "            <li class=\"r-li\"><a href=\"#\"\" class=\"logoutBtn\"><i class=\"fa fa-sign-out\"></i><span class=\"r-show\">Logout</span></a></li>\r\n          ";
    }
    echo "        </ul>\r\n      ";
} else {
    echo "          <p class=\"datetime\"><span class=\"time\"></span>  <span class=\"date\"> ";
    echo date("d-M-Y");
    echo "</span></p>\r\n        ";
}
echo "      </div>\r\n      <!--/.nav-collapse --> \r\n    </div>\r\n  </nav>\r\n\r\n\r\n\r\n\r\n  \r\n  <div class=\"modal fade\" id=\"ConfirmParentPassword\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">\r\n    <div class=\"modal-dialog\">\r\n    \r\n      <!-- Modal content-->\r\n      <div class=\"modal-content\">\r\n        <div class=\"modal-header\">\r\n          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n          <h4 class=\"modal-title\">Update PIN</h4>\r\n        </div>\r\n        <div class=\"modal-body\">\r\n              <input type=\"password\" id=\"poldpassword\" class=\"form-control commoncs2\" placeholder=\"Old PIN\" value=\"\"  >\r\n              <a href=\"#poldpassword\" data-currenteye=\"show\" data-faid=\"faoldpass\" class=\"showbtn popsbtn\" ><i class=\"fa fa-eye-slash\" id=\"faoldpass\" aria-hidden=\"true\"></i></a>\r\n              <br>\r\n              <input type=\"password\" id=\"pmainpassword\" class=\"form-control commoncs2\" placeholder=\"New PIN\" value=\"\"  >\r\n              <a href=\"#pmainpassword\" data-currenteye=\"show\" data-faid=\"fanewpass\" class=\"showbtn popsbtn\" ><i class=\"fa fa-eye-slash\" id=\"fanewpass\" aria-hidden=\"true\"></i></a>\r\n              <br>\r\n              <input type=\"password\" id=\"pconnpassword\" class=\"form-control commoncs2\" placeholder=\"Confirm PIN\" value=\"\"  >\r\n              <a href=\"#pconnpassword\" data-currenteye=\"show\" data-faid=\"faconpass\" class=\"showbtn popsbtn\" ><i class=\"fa fa-eye-slash\" id=\"faconpass\" aria-hidden=\"true\"></i></a>\r\n        </div>\r\n        <div class=\"modal-footer\">\r\n          <button type=\"button\" id=\"updateparentpasswordbtn\" class=\"btn btn-primary\">Update <i class=\"fa fa-spin fa-spinner hideOnLoad\" id=\"checkingprocess2\"></i></button>\r\n          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n        </div>\r\n      </div>\r\n      \r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"container-fluid\">\r\n  <center id=\"fullLoader\" class=\"hideOnLoad\"><img src=\"images/roundloader.gif\"><p class=\"text-center\">LOADING DATA</p></center>\r\n  \r\n  <div class=\"col-md-12 container-holder\">\r\n    <div class=\"container col-md-8 col-md-offset-2\">\r\n        <h2 class=\"text-center heading main-sheading\">SETTINGS</h2>\r\n        <div class=\"col-md-12 commonsectionclass\">\r\n          <table class=\"table table-bordered\">\r\n            <tr>\r\n              <td colspan=\"2\">\r\n                  <h3 class=\"SettingsHeadings\">Player Settings</h3>\r\n              </td>\r\n            </tr>\r\n            <tr class=\"hideOnLoad\">\r\n              <td class=\"common-td\">\r\n                Live Player\r\n              </td>\r\n              <td>\r\n                <select id=\"live_player\" class=\"form-control\">\r\n                  <option ";
echo $LiveSection == "JW Player" ? "selected='selected'" : "";
echo " value=\"JW Player\">JW Player</option>\r\n                  <!-- <option ";
echo $LiveSection == "Flow player" ? "selected='selected'" : "";
echo " value=\"Flow player\">Flow player</option> -->\r\n                </select>\r\n              </td>\r\n            </tr>\r\n            <tr>\r\n              <td class=\"common-td\">\r\n                Select default player for movies section\r\n              </td>\r\n              <td>\r\n                <select  id=\"movie_player\" class=\"form-control\">\r\n                  <option ";
echo $MovieSection == "JW Player" ? "selected='selected'" : "";
echo " value=\"JW Player\">JW Player</option>\r\n                  <option ";
echo $MovieSection == "Flow player" ? "selected='selected'" : "";
echo " value=\"Flow player\">Flow player</option>\r\n                  <option ";
echo $MovieSection == "AJ player" ? "selected='selected'" : "";
echo " value=\"AJ player\">AJ player</option>\r\n                </select>\r\n              </td>\r\n            </tr>\r\n            <tr>\r\n              <td class=\"common-td\"> \r\n                Select default player for Series section\r\n              </td>\r\n              <td>\r\n                <select id=\"series_player\" class=\"form-control\">\r\n                  <option ";
echo $SeriesSection == "JW Player" ? "selected='selected'" : "";
echo " value=\"JW Player\">JW Player</option>                  \r\n                  <option ";
echo $SeriesSection == "Flow player" ? "selected='selected'" : "";
echo " value=\"Flow player\">Flow player</option>\r\n                  <option ";
echo $SeriesSection == "AJ player" ? "selected='selected'" : "";
echo " value=\"AJ player\">AJ player</option>\r\n                </select>\r\n              </td>\r\n            </tr>\r\n         </table>  \r\n        </div>\r\n        <div class=\"col-md-12 commonsectionclass\"> \r\n         <table class=\"table table-bordered\"> \r\n            <tr>\r\n              <td colspan=\"2\">\r\n                  <h3 class=\"SettingsHeadings\">Time Settings</h3>\r\n              </td>\r\n            </tr>\r\n            <tr>\r\n              <td class=\"common-td\">\r\n                Time Format\r\n              </td>\r\n              <td>\r\n                <select id=\"timeformat\" class=\"form-control\">\r\n                    <option value=\"12\" ";
echo $timeformat == "12" || $timeformat == "" ? "selected='selected'" : "";
echo ">12 Hours Format</option>\r\n                    <option value=\"24\" ";
echo $timeformat == "24" ? "selected='selected'" : "";
echo ">24 Hours Format</option>\r\n                </select>\r\n              </td>\r\n            </tr>\r\n            <tr>\r\n              <td class=\"common-td\">\r\n                Epg Time Shift\r\n              </td>\r\n              <td>\r\n                <select id=\"epgtimeshift\" class=\"form-control\">\r\n                  ";
for ($ri = 12; 1 <= $ri; $ri--) {
    echo "                      <option value=\"-";
    echo $ri;
    echo "\" ";
    echo $epgtimeshift == "-" . $ri ? "selected='selected'" : "";
    echo ">-";
    echo $ri;
    echo "</option>\r\n                    ";
}
echo "                  <option value=\"0\" ";
echo $epgtimeshift == 0 ? "selected='selected'" : "";
echo ">0</option>\r\n                  ";
for ($i = 1; $i <= 12; $i++) {
    echo "                      <option value=\"+";
    echo $i;
    echo "\" ";
    echo $epgtimeshift == "+" . $i ? "selected='selected'" : "";
    echo ">+";
    echo $i;
    echo "</option>\r\n                    ";
}
echo "                </select>\r\n              </td>\r\n            </tr>\r\n          </table>\r\n        </div>\r\n        <div class=\"col-md-12 commonsectionclass\">  \r\n         <table class=\"table table-bordered\"> \r\n            <tr>\r\n              <td colspan=\"2\">\r\n                  <h3 class=\"SettingsHeadings\" id=\"parentheading\">Parental Control Setting</h3>\r\n              </td>\r\n            </tr>            \r\n            <tr>\r\n              <td class=\"common-td\">\r\n                <div class=\"row\">\r\n                  <div class=\"col-md-12\" style=\"margin-top: 16px; text-align: center;\">\r\n                    <span id=\"showentext\" style=\"position: relative; top: -15px;\">";
echo $parentenable == "on" ? "Disable" : "Enable";
echo "</span>\r\n                    <label class=\"switch \">\r\n                      <input type=\"checkbox\" id=\"enablecheckebox\" ";
echo $parentenable == "on" ? "checked" : "";
echo " data-afterenable=\"";
echo $parentpassword != "" ? "1" : "";
echo "\" >\r\n                      <span class=\"slider round\"></span>\r\n                    </label>\r\n                  </div>\r\n                </div>\r\n              </td>\r\n              <td style=\"height: ";
echo $parentpassword == "" ? "140px;" : "80px";
echo "\">\r\n                  ";
if ($parentpassword == "") {
    echo "                        <input type=\"password\" id=\"parentmainpassword\" class=\"form-control commoncs\" placeholder=\"New PIN\" value=\"\" readonly >\r\n                        <a href=\"#parentmainpassword\" data-currenteye=\"show\" data-faid=\"fanewpassword\" class=\"showbtn hideOnLoad\" ><i class=\"fa fa-eye-slash\" id=\"fanewpassword\" aria-hidden=\"true\"></i></a>\r\n                        <br>\r\n                        <input type=\"password\" id=\"parentconpassword\" class=\"form-control commoncs\" placeholder=\"Confirm PIN\" value=\"\" readonly >\r\n                        <a href=\"#parentconpassword\" data-currenteye=\"show\" data-faid=\"fanconewpassword\" class=\"showbtn hideOnLoad\" ><i class=\"fa fa-eye-slash\" id=\"fanconewpassword\" aria-hidden=\"true\"></i></a>\r\n                    ";
} else {
    echo "                    <div class=\"row\" style=\"text-align: center;\">\r\n                        <button id=\"UpdateParentPassword\" class=\"btn btn-primary\">Update PIN</button>\r\n                        <input type=\"hidden\" id=\"editpassword\" >\r\n                    </div>\r\n                    ";
}
echo "              </td>\r\n            </tr>\r\n            \r\n          </table>\r\n        </div>\r\n          <div class=\"col-md-12\" >\r\n          <p style=\"text-align: right;color: #717171;margin: 0;\">V 1.5</p>\r\n          </div>\r\n          <div class=\"col-md-12\" style=\"margin-bottom: 10px;\">\r\n            <center>\r\n\r\n             <div class=\"alert alert-success \" id=\"SuccessMessage\">\r\n                <strong>Success!</strong> Changes Saved Successfully.\r\n             </div>\r\n            <button class=\"btn btn-primary rippler rippler-default\" id=\"SaveSettings\">Save Changes <i class=\"fa fa-spin fa-spinner hideOnLoad\" id=\"checkingprocess\"></i></button></center>\r\n          </div>\r\n        </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n<script type=\"text/javascript\">\r\n   \$(document).ready(function(){\r\n      \$(\".commoncs\").click(function(){\r\n          if ( \$(this).is('[readonly]') ) { \r\n            swal({\r\n                  title: 'Error!',\r\n                  text: 'Please Enable First!!!',\r\n                  icon: 'warning'\r\n                 });\r\n          }\r\n      });\r\n\r\n      \$(\".showbtn\").click(function(e){\r\n          e.preventDefault();\r\n          var currenteye = \$(this).data('currenteye');\r\n          var InputID = \$(this).attr('href')\r\n          var faid = \$(this).data('faid');\r\n          if(currenteye == \"hide\")\r\n          {\r\n          \t\$(this).data('currenteye','show');\r\n          \t\$(InputID).attr('type','password');\r\n          \t\$(\"#\"+faid).removeClass(\"fa fa-eye\");\r\n          \t\$(\"#\"+faid).addClass(\"fa fa-eye-slash\");\r\n          }\r\n          else\r\n          {\r\n          \t\$(this).data('currenteye','hide')\r\n          \t\$(InputID).attr('type','text');\r\n          \t\$(\"#\"+faid).removeClass(\"fa fa-eye-slash\");\r\n          \t\$(\"#\"+faid).addClass(\"fa fa-eye\");\r\n          }\r\n      });\r\n\r\n      checkboxfunction();\r\n      \$('#UpdateParentPassword').click(function(){\r\n          \$('#ConfirmParentPassword').modal('show');\r\n      });\r\n      \$('#enablecheckebox').click(function(e){\r\n          if(\$(this).data('afterenable') == 1)\r\n          {\r\n            e.preventDefault();\r\n/*            \$(\"#parentPass\").addClass(\"addredborder\");*/\r\n            \$(\"#parentPass input[type=password]\").focus();\r\n            \$('#confirmparentPopup').modal('show');\r\n\r\n          }\r\n          else\r\n          {\r\n            checkboxfunction();\r\n          }\r\n      });\r\n\r\n      \$('#confirmpasswordbtn').click(function(){   \r\n          var  parentenable = \"on\";\r\n          var  parentenableMessage = \"Enabled\";\r\n          if(\$('#enablecheckebox').prop('checked') == true)\r\n          {\r\n             parentenable = \"\";   \r\n             parentenableMessage = \"Disabled\";  \r\n          } \r\n          \$(\"#parentPass\").removeClass('addredborder');    \r\n          var parentPass = \$(\"#parentPass\").val();\r\n          if(parentPass == \"\")\r\n          {\r\n            \$(\"#parentPass\").addClass('addredborder');\r\n          }\r\n          else\r\n          {\r\n            \$('#checkingprocess3').removeClass('hideOnLoad');\r\n            jQuery.ajax({\r\n            type:\"POST\",\r\n            url:\"includes/ajax-control.php\",\r\n            dataType:\"text\",\r\n            data:{\r\n              action:'confirm_parentpassword',\r\n              parentPass:parentPass\r\n            },  \r\n              success:function(response2){ \r\n                \$('#checkingprocess3').addClass('hideOnLoad');\r\n                 if(response2 != 0)\r\n                 {\r\n                    var savedparentpassword = \"";
echo webtvpanel_baseDecode($parentpassword);
echo "\";\r\n                    var live_player = \$(\"#live_player\");\r\n                    var movie_player = \$(\"#movie_player\");\r\n                    var series_player = \$(\"#series_player\");\r\n                    var epgtimeshift_selector = \$(\"#epgtimeshift\");\r\n                    var timeformat_selector = \$(\"#timeformat\");\r\n\r\n                    var live_player_val = live_player.val();\r\n                    var movie_player_val = movie_player.val();\r\n                    var series_player_val = series_player.val();\r\n                    var epgtimeshift_val = epgtimeshift_selector.val();\r\n                    var timeformat_val = timeformat_selector.val();\r\n                    jQuery.ajax({\r\n                      type:\"POST\",\r\n                      url:\"includes/ajax-control.php\",\r\n                      dataType:\"text\",\r\n                      data:{\r\n                      action:'SaveSettings',\r\n                      live_player_val:live_player_val,\r\n                      movie_player_val:movie_player_val,\r\n                      series_player_val:series_player_val,\r\n                      epgtimeshift_val:epgtimeshift_val,\r\n                      parentenable:parentenable,\r\n                      parentmainpassword_val:savedparentpassword,\r\n                      timeformat_val:timeformat_val\r\n                      },  \r\n                        success:function(response2){\r\n                           \$('#checkingprocess2').addClass('hideOnLoad');\r\n                           swal({\r\n                            text: 'PIN Successfully '+parentenableMessage,\r\n                            button:false,\r\n                            icon: 'success'\r\n                           });\r\n                           setTimeout (function(){\r\n                            swal.close();\r\n                            location.reload();\r\n                           },2000)\r\n                           /*\$('#SuccessMessage').animate({'top':'67px'}, 300 );\r\n                           setTimeout (function(){\r\n                            \$('#SuccessMessage').animate({'top':'-100%'}, 300 );\r\n                           },2000)*/\r\n                        }\r\n                    });\r\n                    /*\$('#parentPass').val('');\r\n                    \$('#confirmparentPopup').modal('hide'); \r\n                    if(\$('#enablecheckebox').prop('checked') == true)\r\n                    {\r\n                      \$('#showentext').text('Enable');\r\n                      \$('#enablecheckebox').prop('checked', false);  \r\n                      \$('#UpdateParentPassword').attr(\"disabled\", true);\r\n                    }\r\n                    else\r\n                    {\r\n                      \$('#showentext').text('Disable');\r\n                      \$('#enablecheckebox').prop('checked', true);\r\n                      \$('#UpdateParentPassword').attr(\"disabled\", false);\r\n                    } */\r\n                 }\r\n                 else\r\n                 {\r\n                    swal({\r\n                        title: 'Error!',\r\n                        text: 'Invalid PIN !!!',\r\n                        icon: 'warning'\r\n                       });\r\n                 }             \r\n              }\r\n            });\r\n          }\r\n      });\r\n\r\n      //Update Parent Password Section..\r\n      \$('#updateparentpasswordbtn').click(function(){\r\n          var updatevalidationcondition = 1;\r\n          var savedparentpassword = \"";
echo webtvpanel_baseDecode($parentpassword);
echo "\";\r\n          \$(\".commoncs2\").removeClass(\"addredborder\");\r\n          var live_player = \$(\"#live_player\");\r\n          var movie_player = \$(\"#movie_player\");\r\n          var series_player = \$(\"#series_player\");\r\n          var epgtimeshift_selector = \$(\"#epgtimeshift\");\r\n          var timeformat_selector = \$(\"#timeformat\");\r\n\r\n          var poldpassword = \$(\"#poldpassword\");\r\n          var pmainpassword = \$(\"#pmainpassword\");\r\n          var pconnpassword = \$(\"#pconnpassword\");\r\n\r\n          var live_player_val = live_player.val();\r\n          var movie_player_val = movie_player.val();\r\n          var series_player_val = series_player.val();\r\n          var epgtimeshift_val = epgtimeshift_selector.val();\r\n          var timeformat_val = timeformat_selector.val();\r\n\r\n          var poldpassword_val = poldpassword.val();\r\n          var pmainpassword_val = pmainpassword.val();\r\n          var pconnpassword_val = pconnpassword.val();\r\n\r\n          if(poldpassword_val == \"\")\r\n          {\r\n            updatevalidationcondition = 0;\r\n            \$(\"#poldpassword\").addClass('addredborder');\r\n          }\r\n          if(pmainpassword_val == \"\")\r\n          {\r\n            updatevalidationcondition = 0;\r\n            \$(\"#pmainpassword\").addClass('addredborder');\r\n          }\r\n          if(pconnpassword_val == \"\")\r\n          {\r\n            updatevalidationcondition = 0;\r\n            \$(\"#pconnpassword\").addClass('addredborder');\r\n          }\r\n\r\n          if(updatevalidationcondition == 1)\r\n          {\r\n              if(poldpassword_val != savedparentpassword)\r\n              {\r\n                swal({\r\n                  title: 'Error!',\r\n                  text: 'Old PIN is incorrect !!!',\r\n                  icon: 'warning'\r\n                 });\r\n                 updatevalidationcondition = 0;\r\n              }\r\n          }\r\n\r\n          if(updatevalidationcondition == 1)\r\n          {\r\n              if(pmainpassword_val != pconnpassword_val)\r\n                  {\r\n                    swal({\r\n                      title: 'Error!',\r\n                      text: 'New PIN does not matach with confirm PIN !!!',\r\n                      icon: 'warning'\r\n                     });\r\n                    updatevalidationcondition = 0;\r\n                  }\r\n          }\r\n          \r\n          if(updatevalidationcondition == 1)\r\n          {\r\n            \$('#checkingprocess2').removeClass('hideOnLoad');\r\n            jQuery.ajax({\r\n              type:\"POST\",\r\n              url:\"includes/ajax-control.php\",\r\n              dataType:\"text\",\r\n              data:{\r\n              action:'SaveSettings',\r\n              live_player_val:live_player_val,\r\n              movie_player_val:movie_player_val,\r\n              series_player_val:series_player_val,\r\n              epgtimeshift_val:epgtimeshift_val,\r\n              parentenable:\"on\",\r\n              parentmainpassword_val:pmainpassword_val,\r\n              timeformat_val:timeformat_val\r\n              },  \r\n                success:function(response2){\r\n                   \$('#checkingprocess2').addClass('hideOnLoad');\r\n                   swal({\r\n                    text: 'PIN Successfully Upadeted',\r\n                    button:false,\r\n                    icon: 'success'\r\n                   });\r\n                   setTimeout (function(){\r\n                    swal.close();\r\n                    location.reload();\r\n                   },2000)\r\n                   /*\$('#SuccessMessage').animate({'top':'67px'}, 300 );\r\n                   setTimeout (function(){\r\n                    \$('#SuccessMessage').animate({'top':'-100%'}, 300 );\r\n                   },2000)*/\r\n                }\r\n              });\r\n          }\r\n\r\n\r\n      });\r\n      \$(document).on(\"click\", \"#SaveSettings\", function(){\r\n        SaveSettingsFunction();\r\n      });\r\n    });\r\n\r\n   function checkboxfunction()\r\n   {\r\n      \$(\".commoncs\").removeClass(\"addredborder\");\r\n      if(\$('#enablecheckebox').prop('checked') == true)\r\n          {\r\n            \$('.showbtn').removeClass('hideOnLoad');\r\n            \$('#showentext').text('Disable');\r\n            \$('.commoncs').removeClass('disableInputs');\r\n            \$('.commoncs').attr(\"readonly\", false);\r\n            \$('#UpdateParentPassword').attr(\"disabled\", false);\r\n          }\r\n          else\r\n          {\r\n            \$('.showbtn').removeClass('hideOnLoad');\r\n            \$('#showentext').text('Enable');\r\n            \$('.commoncs').addClass('disableInputs');\r\n            \$('.commoncs').attr(\"readonly\", true);\r\n            \$('#UpdateParentPassword').attr(\"disabled\", true);\r\n          }\r\n   }\r\n\r\nfunction SaveSettingsFunction()\r\n{\r\n  \$(\".commoncs\").removeClass(\"addredborder\");\r\n  var parentenable = \"\";\r\n  var validationcondition = 1;\r\n  var parentmainpassword_val = \"";
echo webtvpanel_baseDecode($parentpassword);
echo "\";\r\n   \r\n  if(\$('#enablecheckebox').prop('checked') == true)\r\n  {\r\n      parentenable = \"on\";\r\n      if(\$(\"#UpdateParentPassword\").length == 0)\r\n      {\r\n        parentmainpassword_val = \$(\"#parentmainpassword\").val();\r\n        parentconpassword_val = \$(\"#parentconpassword\").val();\r\n        if(parentmainpassword_val == \"\")\r\n        {\r\n          validationcondition = 0;\r\n          \$(\"#parentmainpassword\").addClass('addredborder');\r\n        }\r\n\r\n        if(parentconpassword_val == \"\")\r\n        {\r\n          validationcondition = 0;\r\n          \$(\"#parentconpassword\").addClass('addredborder');\r\n        }\r\n        if(parentmainpassword_val != parentconpassword_val)\r\n        {\r\n          swal({\r\n            title: 'Error!',\r\n            text: 'New PIN does not matach with confirm PIN !!!',\r\n            icon: 'warning'\r\n           });\r\n          validationcondition = 0;\r\n        } \r\n      }\r\n  }\r\n\r\n  if(validationcondition == 1)\r\n  {\r\n    \r\n    \$('#checkingprocess').removeClass('hideOnLoad');\r\n    var live_player = \$(\"#live_player\");\r\n    var movie_player = \$(\"#movie_player\");\r\n    var series_player = \$(\"#series_player\");\r\n    var epgtimeshift_selector = \$(\"#epgtimeshift\");\r\n    var timeformat_selector = \$(\"#timeformat\");\r\n\r\n    var live_player_val = live_player.val();\r\n    var movie_player_val = movie_player.val();\r\n    var series_player_val = series_player.val();\r\n    var epgtimeshift_val = epgtimeshift_selector.val();\r\n    var timeformat_val = timeformat_selector.val();\r\n\r\n    jQuery.ajax({\r\n      type:\"POST\",\r\n      url:\"includes/ajax-control.php\",\r\n      dataType:\"text\",\r\n      data:{\r\n      action:'SaveSettings',\r\n      live_player_val:live_player_val,\r\n      movie_player_val:movie_player_val,\r\n      series_player_val:series_player_val,\r\n      epgtimeshift_val:epgtimeshift_val,\r\n      parentenable:parentenable,\r\n      parentmainpassword_val:parentmainpassword_val,\r\n      timeformat_val:timeformat_val\r\n      },  \r\n        success:function(response2){\r\n           \$('#checkingprocess').addClass('hideOnLoad');\r\n           swal({\r\n            text: 'Settings saved',\r\n            button:false,\r\n            icon: 'success'\r\n           });\r\n           setTimeout (function(){\r\n            swal.close();\r\n            location.reload();\r\n           },2000)\r\n           /*\$('#SuccessMessage').animate({'top':'67px'}, 300 );\r\n           setTimeout (function(){\r\n            \$('#SuccessMessage').animate({'top':'-100%'}, 300 );\r\n           },2000)*/\r\n        }\r\n      });  \r\n  }\r\n}   \r\n</script>\r\n  ";
include "includes/footer.php";

?>
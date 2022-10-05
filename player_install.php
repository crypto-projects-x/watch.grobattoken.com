<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 */

include_once "includes/functions.php";
include_once "configuration.php";
echo "<!DOCTYPE html>\r\n
<html lang=\"en\">\r\n
  <head>\r\n
    <meta charset=\"utf-8\">\r\n
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n
    <title>
    </title>\r\n\r\n
    <!-- Bootstrap -->\r\n
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\">\r\n
    <link href=\"css/style.css\" rel=\"stylesheet\">\r\n
    <link href=\"css/owl.carousel.css\" rel=\"stylesheet\">\r\n
    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">\r\n
    <link href=\"css/scrollbar.css\" rel=\"stylesheet\">\r\n\r\n
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\r\n
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\r\n
    <!--[if lt IE 9]>\r\n      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>\r\n      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>\r\n    <![endif]-->\r\n
  </head>\r\n
  <body>\r\n\r\n    
    <div class=\"body-content\">\r\n    
      <div class=\"overlay\">
      </div>\r\n
      <script src=\"js/jquery-1.11.2.min.js\">
      </script> \r\n
      <style>body{background:black;}\r\n    .hideOnload\r\n\r\n    {
        \r\n\r\n        display: none !important;
        \r\n\r\n    }
        \r\n\r\n    .section1 button, .section2 button\r\n    {
          \r\n        margin-top: 20px;
          \r\n        background: #73ad88;
          \r\n        margin-bottom: 20px;
          \r\n    }
        \r\n    .section2\r\n    {
          \r\n        padding-bottom: 20px;
          \r\n    }
        \r\n    .custom-formcontrol{
          \r\n\r\n        border: none !important;
          \r\n\r\n        border-bottom: solid 1px #ccc !important;
          \r\n\r\n        border-radius: 0px;
          \r\n\r\n        padding: 25px 10px;
          \r\n\r\n        margin-bottom: 10px;
          \r\n\r\n        box-shadow: none !important;
          \r\n\r\n        -webkit-transition: 0.3s;
          \r\n\r\n        -moz-transition: 0.3s;
          \r\n\r\n        -o-transition: 0.3s;
          \r\n\r\n        transition: 0.3s;
          \r\n\r\n    }
        \r\n\r\n    .custom-formcontrol:focus, .custom-formcontrol{
          \r\n\r\n        border-bottom:solid 2px #212263 !important;
          \r\n\r\n        -webkit-transition: 0.3s;
          \r\n\r\n        -moz-transition: 0.3s;
          \r\n\r\n        -o-transition: 0.3s;
          \r\n\r\n        transition: 0.3s;
          \r\n\r\n        padding: 25px 10px !important;
          \r\n\r\n    }
        \r\n\r\n    .addborder {
          \r\n\r\n        border: 1px solid red !important;
          \r\n\r\n    }
        \r\n\r\n    .midbox\r\n    {
          \r\n        word-wrap: break-word;
          \r\n    }
        \r\n\r\n    .messagePerm\r\n    {
          \r\n        position: relative;
          \r\n        left: 0;
          \r\n        width: 100%;
          \r\n        text-align: center;
          \r\n        top: 18%;
          \r\n        padding-bottom: 20px;
          \r\n    }
        \r\n</style>\r\n
      <nav class=\"navbar navbar-inverse navbar-static-top\">\r\n    
        <div class=\"container full-container navb-fixid\">\r\n        
          <div class=\"navbar-header\">\r\n\r\n        
          </div>\r\n        
          <a class=\"\" href=\"#\">
            <img class=\"img-responsive\" src=\"img/logo.png\" alt=\"\" width=\"187px\">
          </a>\r\n\r\n        
          <!--/.nav-collapse --> \r\n    
        </div>\r\n
      </nav>\r\n
      <div class=\"container-fluid\">\r\n    
        <!-- Login Wrapper -->\r\n    \r\n";
if (in_array("curl", get_loaded_extensions())) {
    echo "    <div class=\"midbox\">\r\n        <h3>Installation Details</h3>\r\n        <!-- <form method=\"POST\" action=\"\" id=\"installation_form\"> -->\r\n            <div class=\"section1\">\r\n<div class=\"messagePerm ";
    if ($configFileCheck["permission"] == "0644" || $configFileCheck["permission"] == "0644") {
        echo "hide";
    }
    echo "\"><p class=\"alert alert-warning\">Please Give Permission (777 or 755) to Configuration.php to start installation.</p><center><a href=\"player_install.php\" class=\"btn btn-info\">Reload</a></center></div>\r\n\r\n                <div class=\"row ";
    if ($configFileCheck["permission"] == "0644" || $configFileCheck["permission"] == "0644") {
        echo "";
    } else {
        echo "hide";
    }
    echo "\">\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"text\" id=\"HostUrl\" name=\"HostUrl\" class=\"form-control custom-formcontrol\" placeholder=\"Server URL: Port ( example : http://yourdns.com:25461)\">\r\n\r\n\r\n                    
</div>\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"text\" id=\"sitetitle\" name=\"sitetitle\" class=\"form-control custom-formcontrol\" placeholder=\"Site Title (optional)\">\r\n\r\n                    
</div>\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        \r\n                        
  <form class=\"uploadlogoForm\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">\r\n                        
    <div class=\"imageUploader btn btn-info\">\r\n                            
      <p>Upload Image
      </p>\r\n                            
      <input type=\"file\" id=\"imgInp\" class=\"uploadImage\" name=\"logoImage\">\r\n                        
    </div>\r\n                        
    <img src=\"\" id=\"logoView\">\r\n                        
    <button type=\"submit\" name=\"submitImage\" class=\"uploadLogo btn btn-success hideOnload\">
      <i class=\"fa fa-upload\">
      </i> UPLOAD 
      <i class=\"fa fa-spinner fa-spin hideOnload\">
      </i>
    </button>\r\n                    
  </form>\r\n                    
  <input type=\"text\" id=\"logoLink\" name=\"logoLink\" class=\"form-control custom-formcontrol\" placeholder=\"Logo Link Will be automatically genarated\">\r\n                    
</div>\r\n\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"hidden\" id=\"licenseIs\" name=\"licenseIs\" class=\"form-control custom-formcontrol\" value=\"8nulled8\">\r\n\r\n                        
</div>\r\n\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"text\" id=\"copyrighttext\" name=\"copyrighttext\" class=\"form-control custom-formcontrol\" placeholder=\"Copyright Text  (optional)\">\r\n\r\n                    
</div>\r\n\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"text\" id=\"contactUslink\" name=\"contactUslink\" class=\"form-control custom-formcontrol\" placeholder=\"Contact Us Link (optional)\">\r\n\r\n                    
</div>\r\n\r\n                    
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n\r\n                        
  <input type=\"text\" id=\"helpLink\" name=\"helpLink\" class=\"form-control custom-formcontrol\" placeholder=\"Help Link (optional)\">\r\n\r\n                    
</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n                    
<!-- <button class=\"btn waves-effect waves-light\" id=\"BackButton\" type=\"button\"  style=\"float: left;\">\r\n\r\n                        <i class=\"fas fa-arrow-left\"></i>  \r\n\r\n                        Back\r\n\r\n                    </button>  -->\r\n\r\n                    
<center>
  <button class=\"btn waves-effect waves-light\" id=\"offlinedatabtn\" type=\"button\">\r\n\r\n                        INSTALL\r\n\r\n                        
    <i class=\"fa fa-spin fa-spinner hideOnload\" id=\"installIcon\">
    </i>\r\n\r\n                    
  </button>
</center>\r\n\r\n                    
<input type=\"hidden\" name=\"install_configuration\" value=\"yes\">\r\n\r\n                
</div>\r\n\r\n            
</div>\r\n\r\n        
<!-- </form> -->\r\n        
<div id=\"InstallationDone\" style=\"color: green;\" class=\"hideOnload\">\r\n            
  <center>
    <img src=\"images/done.gif\" width=\"100px\">
  </center>\r\n            
  <p style=\"text-align: center;font-weight: bold;font-size: 25px;\">Installation completed
  </p> \r\n\r\n            
  <b>Security ! 
  </b>\r\n\r\n            
  <br> \r\n\r\n            
  <br> \r\n\r\n            1. Please remove the player_install.php file from your server. \r\n\r\n            
  <br>   \r\n\r\n            
  <br>   \r\n\r\n            You should now delete the  player_install.php file from your web server\r\n\r\n            
  <br>   \r\n\r\n            
  <b>File Path : ";
    echo __DIR__;
    echo "/player_install.php</b>\r\n\r\n            <br>\r\n\r\n            <br>\r\n\r\n            <br>  \r\n\r\n            2. Permission \r\n\r\n            <br>   \r\n\r\n            <br>   \r\n\r\n            We recommend you to change the permission of your configuration file to 0644\r\n\r\n            <br>\r\n\r\n            <b>File Path : ";
    echo __DIR__;
    echo "/configuration.php</b>  \r\n\r\n            <br>\r\n\r\n            <br>\r\n\r\n            <center><a href=\"index.php\" class=\"btn btn-primary\">Client Area</a></center>\r\n            <br />\r\n\r\n        </div>\r\n        <div class=\"message hideOnload\" style=\"position: fixed; top: 10%; z-index: 999; width: 50%; text-align: center; left: 25%;\"></div>\r\n    </div>\r\n    ";
} else {
    echo "        <script>\r\n            \$(document).ready(function () {\r\n            swal({title:'Error!',text: 'CURL is not installed on this server.', button: false, icon:'warning'});\r\n            });\r\n        </script>\r\n        ";
}
echo "    <!-- /Login Wrapper -->\r\n</div>\r\n<script>\r\n    \$(document).ready(function () {\r\n        var nextBtn = \$('#NextButton');\r\n        var backBtn = \$('#BackButton');\r\n        var installBtn = \$('#offlinedatabtn');\r\n\r\n        var section1 = \$('.section1');\r\n        var section2 = \$('.section2');\r\n\r\n        var message = \$('.message');\r\n\r\n\r\n        nextBtn.click(function (e) {\r\n            message.addClass('hideOnload');\r\n            var xcdhost = \$('#xcdhost');\r\n            var xcdport = \$('#xcdport');\r\n            var xcdbname = \$('#xcdbname');\r\n            var xcdbusername = \$('#xcdbusername');\r\n            var xcdbpassword = \$('#xcdbpassword');\r\n            var xcdhostval = xcdhost.val();\r\n            var xcdportval = xcdport.val();\r\n            var xcdbnameval = xcdbname.val();\r\n            var xcdbusernameval = xcdbusername.val();\r\n            var xcdbpasswordval = xcdbpassword.val();\r\n            var uname = \$(\"#uname\");\r\n            var upass = \$(\"#upass\");\r\n            var HostUrl = \$(\"#HostUrl\");\r\n            var credentialsError = \$(\"#credentialsError\");\r\n            var correctcredentails = \$(\"#correctcredentails\");\r\n            var CategoryError = \$(\"#CategoryError\");\r\n            var CategoryImported = \$(\"#CategoryImported\");\r\n            var ChannelsError = \$(\"#ChannelsError\");\r\n            var ChannelsImported = \$(\"#ChannelsImported\");\r\n            var EpgsError = \$(\"#EpgsError\");\r\n            var EpgsImported = \$(\"#EpgsImported\");\r\n            var CategoryImporting = \$(\"#CategoryImporting\");\r\n            var ChannelsImporting = \$(\"#ChannelsImporting\");\r\n            var EpgsImporting = \$(\"#EpgsImporting\");\r\n            var InstallationError = \$(\"#InstallationError\");\r\n            var InstallationDone = \$(\"#InstallationDone\");\r\n            var unameVal = uname.val();\r\n            var upassVal = upass.val();\r\n            var HostUrlVal = HostUrl.val();\r\n            \$('.addborder').removeClass('addborder');\r\n            credentialsError.addClass('hideOnload');\r\n            correctcredentails.addClass('hideOnload');\r\n            CategoryError.addClass('hideOnload');\r\n            CategoryImported.addClass('hideOnload');\r\n            ChannelsError.addClass('hideOnload');\r\n            ChannelsImported.addClass('hideOnload');\r\n            EpgsError.addClass('hideOnload');\r\n            EpgsImported.addClass('hideOnload');\r\n            CategoryImporting.addClass('hideOnload');\r\n            ChannelsImporting.addClass('hideOnload');\r\n            EpgsImporting.addClass('hideOnload');\r\n            InstallationError.addClass('hideOnload');\r\n            InstallationDone.addClass('hideOnload');\r\n            e.preventDefault();\r\n            if (unameVal != \"\" && upassVal != \"\" && HostUrlVal != \"\")\r\n            {\r\n                \$('#nextbtn2icon').removeClass('fa-arrow-right');\r\n                \$('#nextbtn2icon').addClass('fa-spinner fa-spin');\r\n                jQuery.ajax({\r\n                    type: \"POST\",\r\n                    url: \"includes/ajax-control.php\",\r\n                    dataType: \"text\",\r\n                    data: {\r\n                        action: 'StreamDetailsCheck',\r\n                        unameVal: unameVal,\r\n                        upassVal: upassVal,\r\n                        HostUrlVal: HostUrlVal\r\n                    },\r\n                    success: function (response2) {\r\n                        \$('#nextbtn2icon').addClass('fa-arrow-right');\r\n                        \$('#nextbtn2icon').removeClass('fa-spinner fa-spin');\r\n                        if (response2 != 0)\r\n                        {\r\n                            section1.addClass('hideOnload');\r\n                            section2.removeClass('hideOnload');\r\n                        } else\r\n                        {\r\n                            \$(\"html, body\").animate({scrollTop: 0}, \"slow\");\r\n                            message.html('<p class=\"text-center alert alert-warning\">Wrong stream line details.</p>');\r\n                            message.removeClass('hideOnload');\r\n\r\n                        }\r\n\r\n                    }\r\n\r\n                });\r\n\r\n            } else\r\n\r\n            {\r\n\r\n                if (unameVal == \"\")\r\n\r\n                {\r\n\r\n                    uname.addClass('addborder');\r\n\r\n                }\r\n\r\n                if (upassVal == \"\")\r\n\r\n                {\r\n\r\n                    upass.addClass('addborder');\r\n\r\n                }\r\n\r\n                if (HostUrlVal == \"\")\r\n\r\n                {\r\n\r\n                    HostUrl.addClass('addborder');\r\n\r\n                }\r\n\r\n            }\r\n\r\n        });\r\n        backBtn.click(function (e) {\r\n            e.preventDefault();\r\n            section2.addClass('hideOnload');\r\n            section1.removeClass('hideOnload');\r\n            message.addClass('hideOnload');\r\n        })\r\n        installBtn.click(function (e) {\r\n           /* \$(\"html, body\").animate({scrollTop: 0}, \"slow\");\r\n            message.removeClass('hideOnload');\r\n            message.html('<h2 class=\"text-center alert alert-info\">INSTALLING...</h2>');*/\r\n            \$('#offlinedatabtn i').show();\r\n            e.preventDefault();\r\n\r\n\r\n\r\n\r\n\r\n           // var uname = \$(\"#uname\");\r\n\r\n            //var upass = \$(\"#upass\");\r\n\r\n            var HostUrl = \$(\"#HostUrl\");\r\n\r\n            var credentialsError = \$(\"#credentialsError\");\r\n\r\n            var correctcredentails = \$(\"#correctcredentails\");\r\n\r\n            var CategoryError = \$(\"#CategoryError\");\r\n\r\n            var CategoryImported = \$(\"#CategoryImported\");\r\n\r\n            var ChannelsError = \$(\"#ChannelsError\");\r\n\r\n            var ChannelsImported = \$(\"#ChannelsImported\");\r\n\r\n            var EpgsError = \$(\"#EpgsError\");\r\n\r\n            var EpgsImported = \$(\"#EpgsImported\");\r\n\r\n            var CategoryImporting = \$(\"#CategoryImporting\");\r\n\r\n            var ChannelsImporting = \$(\"#ChannelsImporting\");\r\n\r\n            var EpgsImporting = \$(\"#EpgsImporting\");\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n            var InstallationError = \$(\"#InstallationError\");\r\n\r\n            var InstallationDone = \$(\"#InstallationDone\");\r\n\r\n\r\n\r\n            var logoLink = \$('#logoLink');\r\n\r\n            var copyrighttext = \$('#copyrighttext');\r\n\r\n            var contactUslink = \$('#contactUslink');\r\n\r\n            var helpLink = \$('#helpLink');\r\n\r\n            var licenseIs = \$('#licenseIs');\r\n\r\n            var sitetitle = \$('#sitetitle');\r\n\r\n\r\n\r\n            var logoLinkval = logoLink.val();\r\n\r\n            var copyrighttextval = copyrighttext.val();\r\n\r\n            var contactUslinkval = contactUslink.val();\r\n\r\n            var helpLinkval = helpLink.val();\r\n\r\n            var licenseIsval = licenseIs.val();\r\n\r\n            var sitetitleval = sitetitle.val();\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n           // var unameVal = uname.val();\r\n\r\n           // var upassVal = upass.val();\r\n\r\n            var HostUrlVal = HostUrl.val();\r\n\r\n            \$('.addborder').removeClass('addborder');\r\n\r\n            credentialsError.addClass('hideOnload');\r\n\r\n            correctcredentails.addClass('hideOnload');\r\n\r\n            CategoryError.addClass('hideOnload');\r\n\r\n            CategoryImported.addClass('hideOnload');\r\n\r\n            ChannelsError.addClass('hideOnload');\r\n\r\n            ChannelsImported.addClass('hideOnload');\r\n\r\n            EpgsError.addClass('hideOnload');\r\n\r\n            EpgsImported.addClass('hideOnload');\r\n\r\n\r\n\r\n            CategoryImporting.addClass('hideOnload');\r\n\r\n            ChannelsImporting.addClass('hideOnload');\r\n\r\n            EpgsImporting.addClass('hideOnload');\r\n\r\n            InstallationError.addClass('hideOnload');\r\n\r\n            InstallationDone.addClass('hideOnload');\r\n\r\n            e.preventDefault();\r\n\r\n            if (logoLinkval != \"\" && licenseIsval != \"\" && HostUrlVal != \"\")\r\n\r\n            {\r\n\r\n                \$('#installIcon').removeClass('hideOnload');\r\n                \$('#BackButton, #offlinedatabtn, .custom-formcontrol').attr('disabled', true);\r\n                jQuery.ajax({\r\n                    type: \"POST\",\r\n                    url: \"includes/ajax-control.php\",\r\n                    dataType: \"text\",\r\n                    data: {\r\n                        action: 'CheckLicense',\r\n                        licenseIsval: licenseIsval\r\n                    },\r\n                    success: function (response2) {\r\n                        var CheckStatusLicenseResponse = jQuery.parseJSON(response2);\r\n                        if (CheckStatusLicenseResponse.status == \"Active\")\r\n                        {\r\n                            var LocalKey = CheckStatusLicenseResponse.localkey;\r\n                            jQuery.ajax({\r\n                                type: \"POST\",\r\n                                url: \"includes/ajax-control.php\",\r\n                                dataType: \"text\",\r\n                                data: {\r\n                                    action: 'installation',\r\n                                    //unameVal: unameVal,\r\n                                    //upassVal: upassVal,\r\n                                    HostUrlVal: HostUrlVal,\r\n                                    logoLinkval: logoLinkval,\r\n                                    copyrighttextval: copyrighttextval,\r\n                                    contactUslinkval: contactUslinkval,\r\n                                    helpLinkval: helpLinkval,\r\n                                    sitetitleval: sitetitleval,\r\n                                    licenseIsval: licenseIsval,\r\n                                    LocalKey: LocalKey\r\n                                },\r\n                                success: function (response2) {\r\n                                    \$('#installIcon').addClass('hideOnload');\r\n                                    \$('#BackButton, #offlinedatabtn, .custom-formcontrol').attr('disabled', false);\r\n                                    section1.addClass('hideOnload');\r\n                                    section2.addClass('hideOnload');\r\n                                    //section3.addClass('hideOnload');\r\n                                    var obj = jQuery.parseJSON(response2);\r\n                                    if (obj.result == \"yes\")\r\n                                    {\r\n                                        InstallationDone.removeClass('hideOnload');\r\n                                        message.addClass('hideOnload');\r\n                                        \$('.midbox').css('background','url(\"\"), #fff');\r\n                                        \$('.midbox h3').text('Installation Completed').css('color','#000');\r\n\r\n\r\n                                    } \r\n                                    else\r\n                                    {\r\n                                        var ErrorTextIs = \"Error! database details are incorrect\";\r\n                                        var Section = \"1\";\r\n                                        if (obj.cause == \"StreamLineDetalsError\")\r\n                                        {\r\n                                            ErrorTextIs = \"Error! stream lines details are incorrect\";\r\n                                            Section = \"1\";\r\n                                        }\r\n                                        \$('#ErrorText').text(ErrorTextIs);\r\n                                        \$('#checkAgainButton').data('Opentab', Section);\r\n                                        InstallationError.removeClass('hideOnload');\r\n                                    }\r\n                                }\r\n                            });\r\n                        } else\r\n\r\n                        {   \r\n                            \$('#BackButton, #offlinedatabtn, .custom-formcontrol').attr('disabled', false);\r\n                            \$('#offlinedatabtn i').hide();\r\n                           \$(\"html, body\").animate({scrollTop: 0}, \"slow\");\r\n                            message.html('<p class=\"text-center alert alert-warning\">' + CheckStatusLicenseResponse.status +' License</p>');\r\n                            message.removeClass('hideOnload');\r\n                        }\r\n\r\n\r\n\r\n                    }\r\n\r\n                });\r\n\r\n            } else\r\n\r\n            {\r\n\r\n                if (logoLinkval == \"\")\r\n                {\r\n                    logoLink.addClass('addborder');\r\n                }\r\n                if (licenseIsval == \"\")\r\n                {\r\n                    licenseIs.addClass('addborder');\r\n                }\r\n                if (HostUrlVal == \"\")\r\n                {\r\n                    HostUrl.addClass('addborder');\r\n                }\r\n\r\n            }\r\n\r\n\r\n\r\n\r\n        });\r\n\r\nfunction readURL(input) {\r\n\r\n  if (input.files && input.files[0]) {\r\n    if (input.files && input.files[0] && input.files[0].name.match(/\\.(jpg|jpeg|png|gif)\$/) ) {\r\n\r\n    var reader = new FileReader();\r\n\r\n    reader.onload = function(e) {\r\n      \$('#logoView').attr('src', e.target.result);\r\n      \$('.uploadLogo').removeClass('hideOnload');\r\n    }\r\n\r\n    reader.readAsDataURL(input.files[0]);\r\n}\r\nelse\r\n  {\r\n    \$('#imgInp').val('');\r\n    \$('#logoView').attr('src','');\r\n    swal({title:'Error!',text: 'Uploaded file is not Image. Please Upload Image only.', button: false, icon:'warning'});\r\n    setTimeout(function(){swal.close()},2000)\r\n  }\r\n  }\r\n\r\n}\r\n\r\n\$('form').submit(function(e){\r\n    e.preventDefault();\r\n    \$('.uploadLogo .fa-spin').removeClass('hideOnload');\r\n    var formData = new FormData(\$(this)[0]);\r\n    jQuery.ajax({\r\n                 type:\"POST\",\r\n                 url:'includes/ajax-control.php',\r\n                 processData:false,\r\n                 contentType:false,\r\n                 data:formData,\r\n               success:function(response){\r\n               \$('.uploadLogo .fa-spin').addClass('hideOnload');\r\n                    if(response !== 'errorImage')\r\n                    {\r\n                        \$('#logoLink').val(response);\r\n                        swal('Image Uploaded successfully.',{button: false, icon:'success'});\r\n                        setTimeout(function(){swal.close();},2000)\r\n                    }\r\n                    else\r\n                    {\r\n                        swal('Image Upload Error oocured! Please try again.',{button: false});\r\n                        setTimeout(function(){swal.close();},2000)\r\n                    }\r\n               }\r\n           })\r\n\r\n})\r\n\r\n\$(\"#imgInp\").change(function() {\r\n  readURL(this);\r\n});\r\n\r\n        \$('#HostUrl').change(function(){\r\n          \$('#successgprocess').addClass('hideOnload');\r\n          //\$('#offlinedatabtn').attr('disabled', true);\r\n        })\r\n        \$('.testURL').click(function(e){\r\n            e.preventDefault();\r\n            \$('#successgprocess').addClass('hideOnload');\r\n            \$('.addborder').removeClass('addborder');\r\n            var HostUrl = \$(\"#HostUrl\");\r\n            var HostUrlVal = HostUrl.val();\r\n            if(HostUrlVal != \"\")\r\n            {\r\n                \$('#checkingprocess').removeClass('hideOnload');\r\n                jQuery.ajax({\r\n                    type:\"POST\",\r\n                    url:\"includes/ajax-control.php\",\r\n                    dataType:\"text\",\r\n                    data:{\r\n                    action:'CheckSerVerUrl',\r\n                    HostUrlVal:HostUrlVal\r\n                    },  \r\n                    success:function(response2){ \r\n                      \$('#checkingprocess').addClass('hideOnload'); \r\n                      var str1 = response2;\r\n                      var str2 = \"Access Denied\";\r\n                      if(str1.indexOf(str2) != -1){\r\n                        \$('#successgprocess').removeClass('hideOnload');\r\n                        //\$('#offlinedatabtn').attr('disabled', false);\r\n                      }\r\n                      else\r\n                      {\r\n                        alert(\"It seems your portal is not valid. but if you are sure then can ignore and continue the installation\");\r\n                      }\r\n                    }\r\n                  });\r\n            }\r\n            else\r\n            {\r\n                HostUrl.addClass('addborder');\r\n            }\r\n            });\r\n\r\n    })\r\n</script>\r\n";
include "includes/footer.php";

?>
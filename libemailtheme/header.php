<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	?></title>
<style type="text/css">


table td {
	border-collapse: collapse;
}
table {
	border-collapse: collapse;
	mso-table-lspace: 0pt;
	mso-table-rspace: 0pt;
}

@media only screen and (max-device-width: 480px) {
a[href^="tel"], a[href^="sms"] {
	text-decoration: none;
	color: #58595B;
	pointer-events: none;
	cursor: default;
}
.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
	text-decoration: default;
	color: #ff8200 !important;
	pointer-events: auto;
	cursor: default;
}
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {

a[href^="tel"], a[href^="sms"] {
	text-decoration: none;
	color: #58595B;
	pointer-events: none;
	cursor: default;
}
.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
	text-decoration: default;
	color: #ff8200 !important;
	pointer-events: auto;
	cursor: default;
}
}

@media only screen and (max-device-width: 480px) {
table[id="contenttable"] {
	width: 100% !important;
}
table[id="content_wrap"] {
	width: 100%!important;
}
table[class="full_width"] {
	width: 100%!important;
}
table[class="hide"], img[class="hide"], td[class="hide"] {
	display: none !important;
}
td[class="text-center"] {
	text-align: center!important;
}
a[class="button"] {
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkitborder-radius: 2px;
	background-color: #ff8200;
	color: #fff!important;
	text-align: center!important;
	padding: 5px;
	display: block;
	text-decoration: none;
	text-transform: uppercase;
	margin: 0 0 10px 0;
}
}
</style>

<!-- Targeting Windows Mobile -->
<!--[if IEMobile 7]>
	<style type="text/css">

	</style>
	<![endif]-->

<!--[if gte mso 9]>
	<style>
		/* Target Outlook 2007 and 2010 */
	</style>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body bgcolor="#58595B" marginheight="0" marginwidth="0" style="-webkit-font-smoothing:antialiased;width:100% !important;background-color:#58595B;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;-webkit-text-size-adjust:none;">

<span style="display: none;font-size: 0px; color:#ECF0F5; line-height: 0;">News from the University Libraries</span> 

<table width="100%" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" class="ExternalClass" bgcolor="#58595B" style="margin:0; padding:0; width:100% !important; line-height: 100% !important;">
  <tr>
    <td>  
      <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" id="content_wrap" bgcolor="#58595B">      
        <tr>
          <td><p style="font-family:Helvetica, Arial, sans-serif;font-size:11px;color:#58595B;padding-bottom:20px;"><a href="<?php echo get_permalink(); ?>" style="color:#8a8c8f;text-decoration:none;">View as web page</a></p>
            <table id="logo" width="100%" border="0">
              <tr>
                <td><a href="http://www.utk.edu" style="text-decoration:none;border: none;"><img src="http://images.utk.edu/email/generic/ut-emaillogo-left-smokey.gif" width="186" height="54" alt="The University of Tennessee, Knoxville." style="outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;border: none;" align="left"/></a></td>
              </tr>
            </table>
            <table width="100%" bgcolor="#ff8200" cellpadding="15" cellspacing="0" style="border-left:1px solid #58595B;border-top:1px solid #58595B;border-right:1px solid #58595B;">
              <tr>
                <td><h1 style="font-family:Helvetica, Arial, sans-serif;font-size:32px;line-height:40px;color:#ffffff;font-weight:100;margin:10px 0px;">University Libraries</h1></td>
                    </tr>
                  </table>
                  </td>
        </tr> 
        <tr>
          <td>
              <!--Wordpress page content below here -->
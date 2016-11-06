<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'localhost';
$mysql_username = 'bn_resourcespace';
$mysql_password = '8ba24b7e55';
$mysql_db = 'bitnami_resourcespace';

# Base URL of the installation
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $baseurl   = 'https://' . $_SERVER['HTTP_HOST'] . '/resourcespace';
} else {
    $baseurl   = 'http://' . $_SERVER['HTTP_HOST'] . '/resourcespace';
}

# Email settings
$email_notify = 'selenachau@gmail.com';
$email_from = 'selenachau@gmail.com';
# Secure keys
$spider_password = 'MebUMutUTa7A';
$scramble_key = 'GYPUHE3YbYga';
$api_scramble_key = 'TAheJuzUByzE';

# Paths
$applicationname = '';



/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

// No "contact us" link for new installations
$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1400;
$home_slideshow_height=900;

$homeanim_folder = 'filestore/system/slideshow';

$mysql_bin_path = '/Applications/resourcespace-7.9-1/mysql/bin';
$imagemagick_path = '/Applications/resourcespace-7.9-1/common/bin';
$ghostscript_path = '/Applications/resourcespace-7.9-1/common/bin';

#Paths
$ftp_server = 'my.ftp.server';
$ftp_username = 'my_username';
$ftp_password = 'my_password';
$ftp_defaultfolder = 'temp/';
$thumbs_display_fields = array(8,3);
$list_display_fields = array(8,76,3,12);
$sort_fields = array(12);

$storagedir = '/Applications/resourcespace-7.9-1/apps/resourcespace/htdocs/filestore/';
$imagemagick_colorspace= 'sRGB';
$mysql_charset = 'utf8';



/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

// No "contact us" link for new installations
$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1400;
$home_slideshow_height=900;

$homeanim_folder = 'filestore/system/slideshow';
$anonymous_login="guest";
$list_search_results_title_trim=45;
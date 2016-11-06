<?php
$lang["tms_link_configuration"]="TMS Link Configuration";
$lang["tms_link_dsn_name"]="Name of local DSN to connect to TMS database. On Windows this is configured by Administrative tools->Data Sources (ODBC). Make sure the correct connection is configured (32/64 bit)";
$lang["tms_link_table_name"]="Name of TMS table or view used to retrieve TMS data";
$lang["tms_link_user"]="Username for TMS database connection";
$lang["tms_link_password"]="Password for TMS database user";
$lang["tms_link_resource_types"]="Select resource types linked to TMS";
$lang["tms_link_object_id_field"]="Field that is used to store TMS object ID";
$lang["tms_link_checksum_field"]="Metadata field to use for storing checksums. This is to prevent unnecessary updates if data has not changed";
$lang["tms_link_checksum_column_name"]="Column returned from TMS table to use for checksum returned from TMS database.";

$lang["tms_link_tms_data"]="Live TMS Data";
$lang["tms_link_database_setup"]="TMS database connection";
$lang["tms_link_metadata_setup"]="TMS metadata configuration";
$lang["tms_link_tms_link_success"]="Connection succeeded";
$lang["tms_link_tms_link_failure"]="Connection failed. Please chck your details.";

$lang["tms_link_test_link"]="Test link to TMS";
$lang["tms_link_tms_resources"]="TMS Resources";

$lang["tms_link_no_tms_resources"]="No TMS Resources found. Please check you have configured the plugin correctly and mapped the correct ObjectID metadata and checksum fields";
$lang["tms_link_no_resource"]="No resource specified";
$lang["tms_link_object_id"]="Object ID";
$lang["tms_link_checksum"]="Checksum";
$lang["tms_link_no_tms_data"]="No data returned from TMS";

$lang["tms_link_field_mappings"]="TMS field to ResourceSpace field mappings";
$lang["tms_link_resourcespace_field"]="ResourceSpace field";
$lang["tms_link_column_name"]="TMS Column";
$lang["tms_link_add_mapping"]="Add mapping";
$lang["tms_link_performance_options"]="TMS Script settings - these settings will affect the scheduled task that updates resources data from TMS";
$lang['tms_link_query_chunk_size']= "Number of records to retrieve from TMS in each chunk. This can be tweaked to find the optimum setting.";
$lang['tms_link_test_mode'] = "Test mode - Set to true and script will run but not update resources";
$lang['tms_link_email_notify'] = "Email address that script will send notifications to. Will default to the system notification address if left blank;";
$lang['tms_link_test_count'] = "Number of records to test script on - can be set to a lower number to test script and performance";
$lang['tms_link_last_run_date']="<strong>Script last run: </strong>";
$lang['tms_link_script_failure_notify_days']="Number of days after which to display alert and send email if script has not completed";
$lang["tms_link_script_problem"]="WARNING - the TMS script has not successfully completed within the last %days% days. Last run time: ";
$lang["tms_link_upload_tms_field"]="TMS ObjectID";
$lang["tms_link_upload_nodata"]="No TMS data found for this ObjectID: ";
$lang["tms_link_confirm_upload_nodata"]="Please check the box to confirm you wish to proceed with the upload";
$lang["tms_link_enable_update_script"]="Enable TMS update script";
$lang["tms_link_enable_update_script_info"]="Enable script that will automatically update the TMS data whenever the ResourceSpace scheduled task (cron_copy_hitcount.php) is run.";
$lang["tms_link_log_directory"]="Directory to store script logs in. If this is left blank or is invalid then no logging will occur.";
$lang["tms_link_log_expiry"]="Number of days to store script logs for. Any TMS logs in this directory that are older will be deleted";
$lang["tms_link_column_type_required"]="<strong>NOTE</strong>: If adding a new column, please add the column name to the appropriate list below to indicate whether the new column contains UTF-8 or UTF-16 data.";
$lang["tms_link_numeric_columns"]="List of columns that should be retrieved as UTF-8";
$lang["tms_link_text_columns"]="List of columns that should be retrieved as UTF-16";
$lang['tms_link_bidirectional_options']="Bidirectional synchronisation (adding RS images to TMS)";
$lang["tms_link_push_data"]="Send preview images created by ResourceSpace to send data back to TMS?";
$lang["tms_link_push_condition"]="Metadata criteria that must be met for images to be added to TMS";
$lang["tms_link_tms_loginid"]="TMS login ID that will be used by ResourceSpace to insert records. A TMS account must be created or exist with this ID";
$lang["tms_link_push_image"]="Push image to TMS after preview creation? (This will create a new Media record in TMS)";
$lang["tms_link_push_image_sizes"]="Preferred preview size to send to TMS. Comma separated in order of preference so the first size available will be used";
$lang["tms_link_mediatypeid"]="MediaTypeID to use for inserted media records";
$lang["tms_link_formatid"]="FormatID  to use for inserted media records";
$lang["tms_link_colordepthid"]="ColorDepthID   to use for inserted media records";
$lang["tms_link_media_path"]="Root path to filestore that will be stored in TMS e.g. \\RS_SERVER\filestore\. Make sure the trailing slash is included. The filename stored in TMS will include the relative path from the filestore root.";



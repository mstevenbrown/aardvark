<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 */

# Rename this file to config_inc.php after configuration.

# In general the value OFF means the feature is disabled and ON means the
# feature is enabled.  Any other cases will have an explanation.

# Look in http://www.mantisbt.org/docs/ or config_defaults_inc.php for more
# detailed comments.

# --- Database Configuration ---
$g_hostname      = 'localhost';
$g_db_username   = 'aardvarkdbuser';
$g_db_password   = 'aardvarkdbuser2019';
$g_database_name = 'aardvarkdb23Dec19';
$g_db_type       = 'mysqli';

# --- Security ---
$g_crypto_master_salt = '';	#  Random string of at least 16 chars, unique to the installation

# --- Anonymous Access / Signup ---
$g_allow_signup				= OFF;
$g_allow_anonymous_login	= ON;
$g_anonymous_account		= 'Anonynmous_Reader';

# --- Email Configuration ---
$g_phpMailer_method		= PHPMAILER_METHOD_SMTP; # or PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			= 'localhost';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= '';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= '';					# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = 'webmaster@msnkbrown.net';
$g_from_email           = 'noreply@msnkbrown.net';	# the "From: " field in emails
$g_return_path_email    = 'webmaster@msnkbrown.net';	# the return address for bounced mail
$g_from_name			= 'Austin Group Bug Tracker';
$g_email_receive_own	= OFF;
$g_email_send_using_cronjob = OFF;

$g_notify_flags['new']['threshold_min'] = DEVELOPER;
$g_notify_flags['new']['threshold_max'] = DEVELOPER;
$g_allow_blank_email    = ON;

# --- Attachments / File Uploads ---
$g_allow_file_upload	= ON;
$g_file_upload_method = DATABASE; # or DISK
# $g_absolute_path_default_upload_folder = ''; # used with DISK, must contain trailing \ or /.
# $g_max_file_size		= 5000000;	# in bytes
# $g_preview_attachments_inline_max_size = 256 * 1024;
# $g_allowed_files		= '';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
# $g_disallowed_files		= '';		# extensions comma separated

# --- Branding ---
$g_window_title			= 'Austin Group Defect Tracker';
# $g_logo_image			= 'images/mantis_logo.png';
# $g_favicon_image		= 'images/favicon.ico';

# --- Real names ---
# $g_show_realname = OFF;
$g_show_user_realname_threshold = NOBODY;	# Set to access level (e.g. VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

# --- Others ---
$g_default_home_page = 'my_view_page.php';	# Set to name of page to go to after login

# --- Mantis Documentation ---
$g_manual_url = 'https://mantisbt.org/documentation.php'

$g_show_version = ON;
$g_default_language = 'english';
$g_enable_project_documentation = ON;

$g_priority_significant_threshold = -1;
$g_severity_significant_threshold = -1;

# The default columns to be included in the View Issues Page.
$g_view_issues_page_columns = array ( 'selection', 'edit', 'priority', 'id', 'sponsorship_total', 'bugnotes_count', 'attachment', 'category', 'severity', 'status', 'resolution', 'last_updated', 'summary' );

# The default columns to be included in the Print Issues Page.
$g_print_issues_page_columns = array ( 'selection', 'priority', 'id', 'sponsorship_total', 'bugnotes_count', 'attachment', 'category', 'severity', 'status', 'last_updated', 'summary' );

# option that identifies the columns to be include in the CSV or excel export.
$g_csv_columns = array ( 'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity', 'reproducibility', 'version', 'projection', 'category', 'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state', 'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version', 'duplicate_id' );
$g_excel_columns = array ( 'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity', 'reproducibility', 'version', 'projection', 'category', 'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state', 'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version', 'duplicate_id' );

$g_default_timezone = 'UTC';



#---END ---

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme.css" type="text/css" media="screen" id="style_theme_css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/default.css" type="text/css" media="print" />

    <title>Welcome to activeCollab / Owner Company</title>
    <link rel="shortcut icon" href="http://heroes.activecollab.net/public/brand/favicon.png" type="image/x-icon" />
  </head>
  <body style="margin: 0">

    <!-- Print Preview -->
    <div id="print_preview_header">
      <ul>
        <li><button type="button" id="print_preview_print">Print</button></li>
        <li><button type="button" id="print_preview_close">Close Preview</button></li>
      </ul>

      <h2>Print Preview</h2>
    </div>

    <!-- Top block -->
    <div id="top">
    	<div class="container">
    	  <p id="logged_user">
            <span class="inner">
                Welcome back heroes.historia@gmail.com | <a href="http://heroes.activecollab.net/admin" class="">Admin</a> |  <a href="http://heroes.activecollab.net/people/14/users/14" class="">Profile</a> | <a href="http://heroes.activecollab.net/logout">Logout</a>
            </span>
    	  </p>
            <div id="header">
                <p id="site_log">
                    <a href="http://heroes.activecollab.net/" class="site_logo"><img src="http://heroes.activecollab.net/public/brand/logo.gif" alt="Owner Company logo" title="Back to start page" /></a>
                </p>
                <div id="menu">
                    <ul class="group" id="menu_group_main">
                        <li class="item first" id="menu_item_people"><a href="http://heroes.activecollab.net/people" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/people.gif')">People</span></span></a></li>
                        <li class="item middle" id="menu_item_projects"><a href="http://heroes.activecollab.net/projects" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/projects.gif')">Projects</span></span></a></li>
                        <li class="item middle" id="menu_item_calendar"><a href="http://heroes.activecollab.net/dashboard/calendar" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/calendar.gif')">Calendar</span></span></a></li>
                        <li class="item  last" id="menu_item_time"><a href="http://heroes.activecollab.net/time" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/time.gif')">Time</span></span></a></li>
                    </ul>
                    <ul class="group" id="menu_group_folders">
                        <li class="item first" id="menu_item_assignments"><a href="http://heroes.activecollab.net/assignments" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/assignments.gif')">Assignmt.</span></span></a></li>
                        <li class="item middle" id="menu_item_search"><a href="http://heroes.activecollab.net/quick-search" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/search.gif')">Search</span></span></a></li>
                        <li class="item middle" id="menu_item_starred_folder"><a href="http://heroes.activecollab.net/starred" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/starred.gif')">Starred</span></span></a></li>
                        <li class="item middle" id="menu_item_trash"><a href="http://heroes.activecollab.net/trash" class="main"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/trash.gif')">Trash</span></span></a></li>
                        <li class="item  last" id="menu_item_quick_add"><a href="http://heroes.activecollab.net/" class="main" accesskey="+"><span class="outer"><span class="inner" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/navigation/quick_add.gif')">Quick Add</span></span></a></li>
                    </ul>
                </div>
            </div>
      </div>
    </div>
    <div id="page_header_container">
    	<div class="container">
            <div id="page_header" class="without_page_details">
                <div class="page_info_container">
                    <h1 id="page_title"><span>Owner Company | </span> Welcome to activeCollab</h1>
                </div>
                <ul id="page_actions">
                    <li id="0_page_action" class="single without_subitems"><a href="http://heroes.activecollab.net/admin/settings/hide-welcome-message" onclick="if(confirm('You are about to hide welcome message. If you wish to bring it back later on you can do it from General settings page in Administration. Hide now?')) { App.postLink('http://heroes.activecollab.net/admin/settings/hide-welcome-message'); } return false;"><span>Hide Welcome Message </span></a></li>
                    <li class="single"><a href="javascript:window.print();" id="print_button"><span><img src="http://activecollab.net/shared/activecollab/assets/images/icons/print.gif" alt="Print" /></span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
       </div>
    </div>

    <div id="page">
    	<div class="container">
            <div class="container_inner">
                <div id="page_messages">
                      <div class="page_message first" id="javascript_required" style="background-image: url('http://activecollab.net/shared/activecollab/assets/images/messages/error.gif')">
                            <p>It appears that JavaScript is disabled in your web browser. Please enable it to have full system functionality available. <a href="http://heroes.activecollab.net/javascript-disabled">Read more</a>.</p>
  		      </div>
  		      <script type="text/javascript">
  		        $('#javascript_required').hide();
  		      </script>
    		</div>

                <ul id="breadcrumbs">
    		    <li class="first"><a href="http://heroes.activecollab.net/dashboard">Dashboard</a>&raquo;</li>
                    <li><span class="current">Welcome</span></li>
                </ul>

                <div id="page_content">
                    <div id="dashboard">
                        <div id="empty_slate_system_dashboard" class="empty_slate with_sidebar">
                            <div class="empty_slate_content">
                                <p class="empty_slate_section_intro">It appears that this is the first time that you are using this activeCollab setup. For any new installation we recommend that you configure the following:</p>
                                <ul class="icon_list">
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/images/admin/roles.gif" class="icon_list_icon" alt="" /><a href="http://heroes.activecollab.net/admin/roles" class="icon_list_link">Roles and Permissions</a>        <span class="icon_list_description">By using roles and permissions, you have the ability to control who has access to which sections and features of your activeCollab installation.</span></li>
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/modules/system/images/settings/date_time.gif" class="icon_list_icon" alt="" /><a href="http://heroes.activecollab.net/admin/settings/date-time" class="icon_list_link">Default Timezone and Date Formats</a>        <span class="icon_list_description">Set up default date and time settings such as default timezone, date and time formats, first day of the week and more. Users will be able to override default settings from their profile pages, but it is important to have the defaults set correctly.</span></li>
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/modules/system/images/settings/mailing.gif" class="icon_list_icon" alt="" /><a href="http://heroes.activecollab.net/admin/settings/mailing" class="icon_list_link">Mailing Settings</a>        <span class="icon_list_description">Set up email server and parameters for outgoing emails. You can test if mailing settings are good by using Test Mailing Settings tool. We made default email templates universal, but you might want to make them a bit more personalized for your users.</span></li>
                                </ul>
                                <p class="empty_slate_section_intro">Now that you are done with system configuration, you might want to extend the system and translate the interface:</p>
                                <ul class="icon_list">
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/images/admin/modules.gif" class="icon_list_icon" alt="" /><a href="http://www.activecollab.com/downloads/" class="icon_list_link">Extend activeCollab with Modules</a>
                                        <span class="icon_list_description">One of the great activeCollab features is that it is extensible. Check out modules that ship with activeCollab, but that are not installed by default:
                                            <ul id="welcome_message_available_modules">
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/backup/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/backup">Backup</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/checklists/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/checklists">Checklists</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/documents/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/documents">Documents</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/incoming_mail/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/incoming_mail">Incoming Mail</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/invoicing/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/invoicing">Invoicing</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/project_exporter/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/project_exporter">Project Exporter</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/public_submit/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/public_submit">Public Submit</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/source/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/source">Source</a></li>
                                              <li style="background-image: url('http://activecollab.net/shared/activecollab/assets/modules/status/images/icon_small.gif')"><a href="http://heroes.activecollab.net/admin/modules/status">Status</a></li>
                                            </ul>
                                            or check <a href="http://www.activecollab.com/downloads/">Downloads section</a> on activeCollab website to see custom modules developed by members of the community.
                                        </span>
                                    </li>
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/images/admin/languages.gif" class="icon_list_icon" alt="" /><a href="http://www.activecollab.com/downloads/" class="icon_list_link">Localize Interface</a>        <span class="icon_list_description">Translate the entire interface to the language that you or your users speak. You can translate the interface in multiple languages and let users to choose the one they prefer from their profile page.</span></li>
                                </ul>
                                <p class="empty_slate_section_intro">When the system is properly configured and you have all of the features in place, you can create projects and invite people to work on them:</p>
                                <ul class="icon_list">
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/images/admin/people.gif" class="icon_list_icon" alt="" /><a href="http://heroes.activecollab.net/people" class="icon_list_link">Bring People on Board</a>        <span class="icon_list_description">Create accounts for your company, clients, contractors and everyone else you are working with at the People section. Use roles to define which sections and features of activeCollab users can access and how they can use them.</span></li>
                                    <li><img src="http://activecollab.net/shared/activecollab/assets/images/admin/projects.gif" class="icon_list_icon" alt="" /><a href="http://heroes.activecollab.net/projects" class="icon_list_link">Start Adding Projects</a>        <span class="icon_list_description">Define project groups and create new projects in Projects section.</span></li>
                                </ul>
                            </div>
                            <div class="empty_slate_sidebar">
                                <img src="http://activecollab.net/shared/activecollab/assets/images/welcome-sidebar-image.jpg" alt="" />
                            </div>
                            <p class="empty_slate_footer"><b>Thank you for purchasing activeCollab!</b> We hope that you will enjoy using it as much as we enjoy developing it.</p>
                        </div>
                    </div>
    		    <div class="clear"></div>
                </div>
    		<div class="content_fix"></div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p id="powered_by"><a href="http://www.activecollab.com/" target="_blank"><img src="http://activecollab.net/shared/activecollab/assets/images/acpowered.gif" alt="powered by activeCollab" /></a></p>
    </div>
  </body>
</html>
<?php 
#
# $Id: config.php 61155 2013-03-19 22:36:07Z proche $
#

//date_default_timezone_set('America/Los_Angeles');
/* A good commented config-file (sample-config.php) is included in the distribution (in case you want to modify it manually). */

$today = strtotime(date('Y-m-d'));
# fake date used for permanent licenses
$permdate = "2020/1/1";
# defien upper limit for license without limits
$unlimited = 10000;

# cacti info
$cactiurl="http://cacti.example.com/graph.php?action=view&rra_id=all&local_graph_id=";
$cactigraph="http://cacti.example.com/graph_image.php?action=view&local_graph_id=";

# utils used to gather info
$lmutil_loc="/opt/abq/abq_lic/License/lmutil";
$lmutil="/opt/abq/abq_lic/License/lmutil";
$lmstat_loc=$lmutil_loc . " lmstat"; 
$spmstat="";
$rvlstatus="";
$sesictrl="";
$tlm_server="";
$rlmstat="";
$pixar_query="";

# emailed alerts
$URL="http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],"/")) . "/"; 
# who is email from
$notify_from="licensing@example.com";
# who gets general notifications (license expiring soon)
$notify_to="licensing@example.com";
# who gets license down alerts, besides notify_to
$notify_alerts="alert@example.com";
# pause between notifications, in minutes
$notify_resend="60";

# when should we worry about licenses? in days
$lead_time=10;
$disable_autorefresh=0;
$disable_license_removal=0;
# how often do we sample? in minutes
$collection_interval=5;

# db info
$db_type="mysql";
$db_hostname="localhost";
$db_username="licenses";
$db_password="licenses";
$db_database="licenses";
$dsn = "mysql://$db_username:$db_password@$db_hostname/$db_database";

# table/graph info
$colors = "#ffffdd,#ff9966, #ffffaa,#ccccff,#cccccc,#ffcc66,#99ff99,#eeeeee,#66ffff,#ccffff, #ffff66, #ffccff,#ff66ff, yellow,lightgreen,lightblue";
$rrdtool_bin="/usr/local/rrdtool-1.2.27/bin/rrdtool";
$rrd_dir="/var/www/html/phplicensewatcher/rrd";
$smallgraph="350,240";
$largegraph="900,400";
$legendpoints="";
$log_file[]="";

# server list
$server[] = array("hostname"=>"27000@localhost","desc"=>"local","type"=>"flexlm");

# monitor list
$monitor_license[] = array("feature"=>"ABAQUSLM","description"=>"abaqus");
#$monitor_license[] = array("feature"=>"nuke_i","description"=>"Nuke (GUI)");
?>

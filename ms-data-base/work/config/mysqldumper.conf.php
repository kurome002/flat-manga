<?php
#Vars - written at 2014-11-25
$dbhost="localhost";
$dbname="flat_manga";
$dbuser="root";
$dbpass="";
$dbport=3306;
$dbsocket="";
$compression=1;
$backup_path="E:/Xampp/htdocs/flat/ms-data-base/work/backup/";
$logdatei="E:/Xampp/htdocs/flat/ms-data-base/work/log/mysqldump_perl.log.gz";
$completelogdatei="E:/Xampp/htdocs/flat/ms-data-base/work/log/mysqldump_perl.complete.log.gz";
$sendmail_call="/usr/lib/sendmail -t -oi -oem";
$nl="\n";
$cron_dbindex=-3;
$cron_printout=1;
$cronmail=0;
$cronmail_dump=0;
$cronmailto="";
$cronmailto_cc="";
$cronmailfrom="";
$cron_use_sendmail=1;
$cron_smtp="localhost";
$cron_smtp_port="25";
@cron_db_array=("acm","cdcol","flat_manga","hdd","iseotech","neu","nv3","nv409","nv410","phpmyadmin","vinhphat","web","webauth","wp");
@cron_dbpraefix_array=("","","","","","","","","","","","","","","","","","","","");
@cron_command_before_dump=("","","","","","","","","","","","","","","","","","","","");
@cron_command_after_dump=("","","","","","","","","","","","","","","","","","","","");
@ftp_server=("","","");
@ftp_port=(21,21,21);
@ftp_mode=(0,0,0);
@ftp_user=("","","");
@ftp_pass=("","","");
@ftp_dir=("","","");
@ftp_timeout=(30,30,30);
@ftp_useSSL=(0,0,0);
@ftp_transfer=(0,0,0);
$mp=0;
$multipart_groesse=1048576;
$email_maxsize=3145728;
$auto_delete=0;
$max_backup_files=3;
$perlspeed=10000;
$optimize_tables_beforedump=1;
$logcompression=1;
$log_maxsize=1048576;
$complete_log=1;
$my_comment="";
?>
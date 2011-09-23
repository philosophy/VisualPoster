<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Email Configuration
 * on local machine using gmail
 */
//
//$config['protocol']='smtp';
//$config['smtp_host']='ssl://smtp.googlemail.com';
//$config['smtp_port']='465';
//$config['smtp_timeout']='30';
//$config['smtp_user']='marclambertagas@gmail.com';
//$config['smtp_pass']='*********';
//$config['charset']='utf-8';
//$config['newline']="\r\n";
//$config['mailtype']="html";

/**
 * Email Configuration using mail in cpanel
 */

$config['protocol'] = 'mail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

?>

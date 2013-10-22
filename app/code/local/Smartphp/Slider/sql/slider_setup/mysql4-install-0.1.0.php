<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table smartslider(smartslider_id int not null auto_increment, title varchar(100),url varchar(255),content varchar(500), price decimal(12,4),status int, primary key(smartslider_id));
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
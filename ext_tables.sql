CREATE TABLE tx_tcaobject_domain_model_example (
	string_example varchar(255) NOT NULL DEFAULT '',
	text_example text NOT NULL DEFAULT '',
	rich_text_example text,
	password_example varchar(255) NOT NULL DEFAULT '',
	email_example varchar(255) NOT NULL DEFAULT '',
	integer_example int(11) NOT NULL DEFAULT '0',
	float_example double(11,2) NOT NULL DEFAULT '0.00',
	boolean_example smallint(1) unsigned NOT NULL DEFAULT '0',
	date_example date DEFAULT NULL,
	date_time_example datetime DEFAULT NULL,
	time_example time DEFAULT NULL,
	time_sec_example int(11) NOT NULL DEFAULT '0',
	select_example int(11) DEFAULT '0' NOT NULL,
	file_example int(11) unsigned NOT NULL DEFAULT '0',
	image_example int(11) unsigned NOT NULL DEFAULT '0'
);

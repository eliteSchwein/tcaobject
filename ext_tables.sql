CREATE TABLE tx_tcaobject_domain_model_example (
	string_example varchar(255) NOT NULL DEFAULT '',
	text_example text NOT NULL DEFAULT '',
	example2input int(11) unsigned NOT NULL DEFAULT '0'
);


CREATE TABLE tx_tcaobject_domain_model_example2 (
	input2 varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_tcaobject_example_example2_mm (
	 uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	 uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	 sorting int(11) unsigned DEFAULT '0' NOT NULL,
	 sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	 PRIMARY KEY (uid_local,uid_foreign),
	 KEY uid_local (uid_local),
 	 KEY uid_foreign (uid_foreign)
);

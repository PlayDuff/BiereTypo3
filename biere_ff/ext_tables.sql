CREATE TABLE tx_biereff_domain_model_biere (
	name int(11) unsigned DEFAULT '0',
	image int(11) unsigned DEFAULT '0',
	brand int(11) unsigned DEFAULT '0',
	type int(11) unsigned DEFAULT '0',
	taste int(11) unsigned DEFAULT '0',
	description int(11) unsigned DEFAULT '0',
	degree int(11) unsigned DEFAULT '0',
	ingredients int(11) unsigned DEFAULT '0',
	country int(11) unsigned DEFAULT '0',
	reviews int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_type (
	description int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_ingredient (
	name int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_review (
	content int(11) unsigned DEFAULT '0',
	note int(11) unsigned DEFAULT '0',
	user int(11) unsigned DEFAULT '0',
	date int(11) unsigned DEFAULT '0',
	checked int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_brand (
	name int(11) unsigned DEFAULT '0',
	logo int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_country (
	name int(11) unsigned DEFAULT '0'
);

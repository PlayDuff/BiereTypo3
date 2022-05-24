CREATE TABLE tx_biereff_domain_model_beer (
	name varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0',
	taste text,
	description text,
	degree double(11,2) NOT NULL DEFAULT '0.00',
	brand int(11) unsigned DEFAULT '0',
	type int(11) unsigned DEFAULT '0',
	ingredient int(11) unsigned DEFAULT '0',
	country int(11) unsigned DEFAULT '0',
	review int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_type (
	type varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_biereff_domain_model_ingredient (
	name text NOT NULL DEFAULT ''
);

CREATE TABLE tx_biereff_domain_model_country (
	name text NOT NULL DEFAULT ''
);

CREATE TABLE tx_biereff_domain_model_review (
	content text,
	note int(11) NOT NULL DEFAULT '0',
	user varchar(255) NOT NULL DEFAULT '',
	date datetime DEFAULT NULL,
	validity smallint(1) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_brand (
	name varchar(255) NOT NULL DEFAULT '',
	logo int(11) unsigned NOT NULL DEFAULT '0'
);

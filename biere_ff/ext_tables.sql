CREATE TABLE tx_biereff_domain_model_biere (
	name varchar(255) NOT NULL DEFAULT '',
	picture int(11) unsigned NOT NULL DEFAULT '0',
	taste text,
	description text,
	degree int(11) NOT NULL DEFAULT '0',
	brand int(11) unsigned DEFAULT '0',
	type int(11) unsigned DEFAULT '0',
	ingredient int(11) unsigned DEFAULT '0',
	country int(11) unsigned DEFAULT '0',
	review int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_type (
	description text
);

CREATE TABLE tx_biereff_domain_model_ingredient (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_biereff_domain_model_country (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_biereff_domain_model_review (
	content text,
	note int(11) NOT NULL DEFAULT '0',
	user varchar(255) NOT NULL DEFAULT '',
	date datetime DEFAULT NULL,
	checked smallint(1) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_brand (
	name varchar(255) NOT NULL DEFAULT '',
	logo int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_biereff_domain_model_theme (
	titre varchar(255) NOT NULL DEFAULT '',
	date_debut int(11) NOT NULL DEFAULT '0',
	date_fin int(11) NOT NULL DEFAULT '0'
);

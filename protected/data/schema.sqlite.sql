-- Users
CREATE TABLE soc_users(
	id INTEGER NOT NULL  PRIMARY KEY AUTOINCREMENT,
	username varchar(20) NOT NULL,
	password varchar(128) NOT NULL,
	email varchar(128) NOT NULL,
	activkey varchar(128) NOT NULL DEFAULT '',
	create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	lastvisit_at TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	superuser int(1) NOT NULL DEFAULT '0',
	status int(1) NOT NULL DEFAULT '0'
);

INSERT INTO soc_users (id, username, password, email, activkey, superuser, status) VALUES (1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin@example.com', '58b5444cf1b6253a4317fe12daff411a78bda0a95279b1d5768ebf5ca60829e78da944e8a9160a0b6d428cb213e813525a72650dac67b88879394ff624da482f', 1, 1);
-- Profiles
CREATE TABLE soc_profiles (
	user_id INTEGER NOT NULL PRIMARY KEY,
	lastname varchar(50) NOT NULL DEFAULT '',
	firstname varchar(50) NOT NULL DEFAULT ''
);

INSERT INTO soc_profiles (user_id, lastname, firstname) VALUES (1, 'Admin', 'Administrator');
-- Profiles fields
CREATE TABLE soc_profiles_fields (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	varname varchar(50) NOT NULL,
	title varchar(255) NOT NULL,
	field_type varchar(50) NOT NULL,
	field_size int(3) NOT NULL DEFAULT '0',
	field_size_min int(3) NOT NULL DEFAULT '0',
	required int(1) NOT NULL DEFAULT '0',
	match varchar(255) NOT NULL DEFAULT '',
	range varchar(255) NOT NULL DEFAULT '',
	error_message varchar(255) NOT NULL DEFAULT '',
	other_validator TEXT NOT NULL DEFAULT '',
	'default' varchar(255) NOT NULL DEFAULT '',
	widget varchar(255) NOT NULL DEFAULT '',
	widgetparams TEXT NOT NULL DEFAULT '',
	position int(3) NOT NULL DEFAULT '0',
	visible int(1) NOT NULL DEFAULT '0'
);

INSERT INTO soc_profiles_fields (id, varname, title, field_type, field_size, field_size_min, required, 'match', range, error_message, other_validator, 'default', widget, widgetparams, position, visible) VALUES (1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3);
INSERT INTO soc_profiles_fields (id, varname, title, field_type, field_size, field_size_min, required, 'match', range, error_message, other_validator, 'default', widget, widgetparams, position, visible) VALUES (2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);
-- Stories/posts/whatever
CREATE TABLE soc_stories(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	author INTEGER NOT NULL,
	text TEXT NOT NULL,
	FOREIGN KEY(author) REFERENCES soc_users(id)
);
-- Comments
CREATE TABLE soc_comments(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	author INTEGER NOT NULL,
	story INTEGER NOT NULL,
	text TEXT NOT NULL,
	FOREIGN KEY(author) REFERENCES soc_users(id),
	FOREIGN KEY(story) REFERENCES soc_stories(id)
);
-- Messages
CREATE TABLE soc_messages(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	author INTEGER NOT NULL,
	recipient INTEGER NOT NULL,
	text TEXT NOT NULL,
	FOREIGN KEY(author) REFERENCES soc_users(id),
	FOREIGN KEY(recipient) REFERENCES soc_users(id)
);

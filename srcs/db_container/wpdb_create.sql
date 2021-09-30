CREATE DATABASE $DB_NAME default character set utf8 collate utf8_unicode_ci;
GRANT ALL on $DB_NAME.* to '$DB_USER'@'%' identified by '$DB_PASSWORD';
FLUSH PRIVILEGES;

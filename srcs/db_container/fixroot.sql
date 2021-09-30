SET PASSWORD FOR 'root'@'localhost' = PASSWORD('MyNewPass');
UPDATE mysql.user SET plugin = '' WHERE user = 'root' AND host = 'localhost';
FLUSH PRIVILEGES;

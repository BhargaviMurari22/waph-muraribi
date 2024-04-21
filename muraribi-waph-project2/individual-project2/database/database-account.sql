create database waph_bhargavi;

CREATE USER 'bhargavi'@'localhost' IDENTIFIED BY '12345';
GRANT ALL ON waph_bhargavi.* TO 'bhargavi'@'localhost';

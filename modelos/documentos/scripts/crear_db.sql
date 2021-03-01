CREATE SCHEMA `Destileria2021`;
CREATE USER 'destileria2021'@'localhost' IDENTIFIED BY 'destileria2021';
GRANT ALL ON Destileria2021.* TO 'destileria2021'@'%';
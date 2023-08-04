CREATE DATABASE nucadeita;
USE nucadeita;

CREATE TABLE mobilizer(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(45) NOT NULL,
    entry_year INT(4) ZEROFILL UNSIGNED,
    dt_birth DATE
) ENGINE = innodb;

CREATE TABLE projects(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    finallity VARCHAR(250) NOT NULL,
    name VARCHAR(45),
    dt_record DATE,
    who_proposed INT,
    theme VARCHAR(120) NOT NULL,
    dt_last DATE
) ENGINE = innodb;

/* ENTITIES

    CREATE TABLE table(

    ) ENGINE = innodb;

    CREATE TABLE table(

    ) ENGINE = innodb;

    CREATE TABLE table(

    ) ENGINE = innodb;

*/

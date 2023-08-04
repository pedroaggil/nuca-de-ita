CREATE DATABASE nucadeita;
USE nucadeita;

CREATE TABLE mobilizer (
    mob_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    mob_name VARCHAR(45) NOT NULL,
    mob_entry_year INT(4) ZEROFILL UNSIGNED,
    mob_dt_birth DATE(),
    mob_active 
) ENGINE = innodb;

CREATE TABLE projects (
    proj_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    proj_finallity VARCHAR(250) NOT NULL,
    proj_name VARCHAR(45),
    proj_dt_record DATE(),
    proj_who_proposed INT,
    proj_theme VARCHAR(120) NOT NULL,
    proj_dt_last DATE(),
    proj_supporters VARCHAR(120)
) ENGINE = innodb;

CREATE TABLE timeline (
    tl_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    tl_hr_start HOUR() NOT NULL,
    tl_hr_end HOUR() NOT NULL,
    tl_theme VARCHAR(120) NOT NULL,
    tl_finallity VARCHAR(250) NOT NULL,
    tl_who_participate VARCHAR(250) NOT NULL -- select multiple
) ENGINE = innodb;

-- CREATE TABLE  (

-- ) ENGINE = innodb;

-- CREATE TABLE  (

-- ) ENGINE = innodb;
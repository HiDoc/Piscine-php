CREATE TABLE ft_table
(
    ’id’ int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ’login’ varchar(255) default "toto" NOT NULL,
    ’group’ enum("staff", "student", "other") NOT NULL,
    ’creation_date’ DATE NOT NULL
);


CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(50),
  `email` varchar(250)  UNIQUE,
  `phone` varchar(8),
  `password` varchar(50),
  `gender` varchar(50),
  `is_admin` int(1)
    constraint pk_admins PRIMARY KEY(id)
);

ALTER TABLE users
ADD UNIQUE (email);



CREATE TABLE `mail` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(50),
  `email` varchar(250)  UNIQUE,
  `phone` int(8),
  `messages` varchar(7000),
  
    constraint pk_admins PRIMARY KEY(id)
);

CREATE TABLE `Food` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(50) UNIQUE,
  `price` int(50),
      image varchar(255),
  
    constraint pk_admins PRIMARY KEY(id)
);


CREATE TABLE `tableNormalFood` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(50) UNIQUE,
  `price` int(50),
      image varchar(255),
  
    constraint pk_admins PRIMARY KEY(id)
);


CREATE TABLE `tableSpecialFood` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(50) UNIQUE,
  `price` int(50),
      image varchar(255),
  
    constraint pk_admins PRIMARY KEY(id)
);
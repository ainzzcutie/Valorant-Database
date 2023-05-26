create table user (
    user_id int not null auto_increment,
    name varchar(255) not null,
    age int not null,
    address varchar(255) not null,
    email varchar(255) not null,
    PRIMARY KEY (user_id)
);

create table user_icon (
    user_icon_id INT NOT NULL AUTO_INCREMENT,
    user_id int not null,
    icon varchar(255) not null,
    FOREIGN KEY (user_id) REFERENCES user(user_id) ON DELETE CASCADE,
    PRIMARY KEY (user_icon_id)
);
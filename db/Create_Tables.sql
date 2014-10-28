use noturnall;

create table users(
    usr_id int auto_increment,
    usr_name varchar(255) not null,
    usr_password varchar(255) not null,
    usr_active boolean,
    PRIMARY KEY (usr_id),
    FOREIGN KEY (usr_active) REFERENCES active(act_id)
);

create table active(
    act_id boolean,
    act_name varchar(255) not null,
    PRIMARY KEY (act_id)
);

create table dates(
    dts_id int auto_increment,
    dts_date varchar(255) not null,
    dts_local varchar(255) not null,
    dts_city_state varchar(255) not null,
    dts_active boolean,
    dts_record_by int not null,
    PRIMARY KEY (dts_id),
    FOREIGN KEY (dts_active) REFERENCES active(act_id),
    FOREIGN KEY (dts_record_by) REFERENCES users(usr_id)
);
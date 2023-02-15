create database ism;

create table users (username varchar(255), primary key (username));

create table purchase (username varchar(255), amount int, foreign key (username) references users(username));

create table passkeys (username varchar(255), password varchar(255), foreign key (username) references users(username));

insert into users values ('root');
insert into users values ('admin');
insert into users values ('client');

insert into purchase values ('root', 50);
insert into purchase values ('admin', 100);
insert into purchase values ('client', 75);

insert into passkeys values ('root', 'pass1234');
insert into passkeys values ('admin', 'database@pwd');
insert into passkeys values ('client', 'mypassword');
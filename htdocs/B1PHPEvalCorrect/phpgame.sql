drop database if exists phpgame;
create database phpgame;
use phpgame;

create table player(
	id int primary key,
    name varchar(255),
    age int
)engine innodb;

create table game(
	id int primary key,
    playerid int,
    score int,
    date date,
    constraint foreign key (playerid) references player(id)
) engine InnoDB;

insert into player values 
	(1, 'Jonathan', '24'),
    (2, 'Yohan', '43'),
    (3, 'Thalia', 23),
    (4, 'Zran', 36),
    (5, 'Mourad', 46);
    
insert into game values
	(1, 1, 12, '2021-12-23'),
    (2, 1, 15, '2021-12-24'),
    (3, 1, 24, '2021-12-25'),
    (4, 2, 456, '2021-12-23'),
	(5, 2, 666, '2021-12-23'),
	(6, 3, 875, '2021-12-23'),
    (7, 3, 876, '2021-12-23'),
    (8, 4, 333, '2021-12-23'),
	(9, 4, 456, '2021-12-23');
    
create view highscores as 
select name, max(score) from player inner join game on playerid = player.id group by player.id;

select * from highscores;
        
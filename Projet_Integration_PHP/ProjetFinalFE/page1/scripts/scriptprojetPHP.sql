create table infoformulaire(
id int not null auto_increment,
nomusager varchar(20) not null,
email varchar(20) not null,
numtel varchar(20) not null,
numcell varchar(20) not null,
MDP varchar(20) not null,
primary key (id)
);

create table images(
id int(11) not null auto_increment,
cheminfichierimage1 varchar(200) not null,
nomfichier varchar(200) not null,
primary key (id)
);

insert into images(cheminfichierimage1, nomfichier) Values('Projet_Integration_PHP\ProjetFinalFE\page1\images\image1.jpg', 'image1.png');

select * from images;
drop table infoformulaire;
select * from infoformulaire;
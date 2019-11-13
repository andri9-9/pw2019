
use nuovo;
drop table if exists magazzino;
drop table if exists stagioni;

create table stagioni (
id int AUTO_INCREMENT primary key,
stagione character(20) 
);



 create table magazzino (
id int AUTO_INCREMENT primary key,
tipo character(20),
nome character(20),
periodo int, 
foreign key(periodo) references stagioni(id)
); 


INSERT INTO stagioni (stagione) VALUES('ESTATE');
INSERT INTO stagioni (stagione) VALUES('AUTUNNO');
INSERT INTO stagioni (stagione) VALUES('INVERNO');
INSERT INTO stagioni (stagione) VALUES('PRIMAVERA');


INSERT INTO magazzino (tipo,nome,periodo) VALUES('frutta','mela','2');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('frutta','pera','4');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('frutta','anguria','1');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('frutta','mandarini','3');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('verdura','carota','2');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('verdura','cicoria','3');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('verdura','asparagi','4');
INSERT INTO magazzino (tipo,nome,periodo) VALUES('verdura','zucchine','1');

select m.nome
from magazzino m join stagioni s on m.periodo=s.id
where tipo='frutta' and s.stagione='inverno';

select m.nome
from magazzino m join stagioni s on m.periodo=s.id
where s.stagione='estate' and tipo='verdura'
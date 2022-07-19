create table usuarios (
   id int not null primary key auto_increment,
   usuario varchar(200) not null,
   senha varchar(32) not null
   );

insert into usuarios (usuario, senha) values ('allef', md5('teste'))
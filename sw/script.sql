create database db_proyectoSoft;
use db_proyectoSoft;

create table permisos(
	id int auto_increment,
	permiso varchar(15),
	primary key(id)
);

insert into permisos values(null, 'Administrador');
insert into permisos values(null, 'Estándar');

create table usuarios(
	id int auto_increment,
	
    permiso int,
    foreign key(permiso) references permisos(id),
    primary key(id)
);

create table publicaciones();
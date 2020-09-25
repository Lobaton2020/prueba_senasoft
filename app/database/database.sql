create database test_laboratory_sena;
use test_laboratory_sena;


create table rols (
    idrol int not null auto_increment, 
    name varchar(50),
    primary key(idrol)
);
create table productiondeparments(
    idproductiondeparment int not null auto_increment, 
    name varchar(50),
    primary key(idproductiondeparment)
);
create table users(
    iduser int not null auto_increment,
    idrol int not null, 
    idnumber varchar (100) null,
    idproductiondeparment int null,
    name varchar(50)  not null,
    lastname varchar(50) not null,
    email varchar(50) not null,
    password varchar(100) null,
    status boolean not null,
    create_at datetime not null,
    primary key(iduser),
    foreign key (idrol) references rols(idrol),
    foreign key (idproductiondeparment) references productiondeparments(idproductiondeparment)
);

create table accessrecords(
    idaccessrecord int not null auto_increment, 
    iduser int null ,
    set_date datetime not null,
    status boolean not null,
    create_at datetime not null,
    primary key(idaccessrecord),
    foreign key (iduser) references users(iduser)
);

insert into rols values (1,"Administrador"),(2,"Empleado");
insert into productiondeparments values (1,"Ingeniería del Producto. "),
                                        (2,"Ingeniería de proceso"),
                                        (3,"Ingeniería de la planta."),
                                        (4,"Planificación y Control de la Producción. "),
                                        (5,"Abastecimiento."),
                                        (6,"Control de Calidad. "),
                                        (7,"Fabricación. ");

insert into users values(null,1,null,1,"Andres","Perex","andres1234@gmail.com","$2y$10$9Um4EtGtozc44EFbAgqRseXeV9JE3J6UdXK2VA6XU8dLI5n1lSkca",1,now())

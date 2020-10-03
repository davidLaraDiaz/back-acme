drop database if exists acme;
create database acme;
	use acme;


	create table propietario(
		numero_cedula int primary key,
		primer_nombre varchar(50),
		segundo_nombre varchar(50),
		apellidos varchar(50),
		direccion varchar(50),
		telefono varchar(50),
		ciudad varchar(50)

	);

	create table conductor(
		numero_cedula int primary key,
		primer_nombre varchar(50),
		segundo_nombre varchar(50),	
		apellidos varchar(50),	
		direccion varchar(50),	
		telefono varchar(50),	
		ciudad varchar(50)			

	);

	
	create table vehiculo(
		placa varchar(7) primary key,
		color varchar(50),
		marca varchar(50),
		tipo_vehiculo  varchar(50),
		numero_cedula int,
		constraint vehiculo_fk_propietario foreign key(numero_cedula) references propietario(numero_cedula)

	);

	create table registro(
			id int primary key auto_increment,
			fecha date,
			numero_cedula int,
			placa varchar(7),
			constraint registro_fk_conductor foreign key(numero_cedula) references conductor(numero_cedula),
			constraint registro_fk_vehiculo foreign key(placa) references vehiculo(placa)
	);


insert into propietario values (1234,"David","Gonzalo","Lara Diaz","calle3#45",777777,"Bogota");
insert into propietario values (4567,"Maria","lizeth","Rodriguez","calle67-45#40",777789,"Bogota");	


insert into conductor values (1569,"Carlos","Fernando","Lara Diaz","Avenida-3#45",765789,"Cali");
insert into conductor values (9851,"Diego","Andres","Armadia","Diagonal-67-45#40",123789,"Medellin");	

insert into vehiculo values ("123-LKJ","Negro","Chevrolet","Particular",1234);
insert into vehiculo values ("789-ABC","Rojo","Mazda","Privado",4567);	


insert into registro values (null,now(),1569,"123-LKJ");
insert into registro values (null,"2019-02-01",9851,"789-ABC");
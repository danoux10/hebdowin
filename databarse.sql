create DATABASE hebdowin;
use hebdowin;

create table player{
  idUser int(11) auto_increment primary key not null;
  nameUser varchar(255) not null;
}

create table victoire{
  idVictoire int(11) auto_increment primary key not null;
  tankData int(11) not null;
  dpsData int(11) not null;
  healthData int(11) not null;
}

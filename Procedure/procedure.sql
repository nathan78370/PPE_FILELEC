delimiter $
create procedure AjoutPanier(in idEa int, in Imagea varchar(50), in NomEa varchar(50), in Descra varchar(50), in QteEa int, in Prixa float, in DHCa datetime, in DLSa date, in Etata varchar(50), in idCa int)
begin

declare numCi int (8);

insert into commande values (null, DHCa, DLSa, Etata, idCa);
select max(numC) into numCi from commande;
	
insert into ligneCommande values (null, numCi, idEa, Imagea, NomEa, Descra, QteEa, Prixa);

end $
delimiter ;




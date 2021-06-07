drop trigger if exists IncreNbCommande;
delimiter //
create trigger IncreNbCommande
after insert on commande
for each row
begin
update client
set NbCommande = NbCommande + 1
where idC = new.idC;
end //
delimiter ;
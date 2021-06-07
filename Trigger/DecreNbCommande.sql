drop trigger if exists DecreNbCommande;
delimiter //
create trigger DecreNbCommande
after delete on commande
for each row
begin
update client
set NbCommande = NbCommande - 1
where idC = old.idC;
end //
delimiter ;
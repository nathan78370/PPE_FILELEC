drop trigger if exists GestionStock;
delimiter //
create trigger GestionStock
before update on equipement 
for each row
begin
if new.QteE=0 then
set new.QteE=40;
end if;
end //
delimiter ;
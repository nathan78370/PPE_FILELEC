drop trigger if exists DateTimeSecZero;
delimiter //
create trigger DateTimeSecZero
before insert on commande
for each row
begin
set new.DHC = DATE_FORMAT( new.DHC, '%Y-%m-%d %H:%i:' );
end //
delimiter ;
create view Stat as select ifnull(client.idC,'Total') as idC,
count(case when Libelle='Autoradio' then ligneCommande.idCo else null end) as "Autoradio",
count(case when Libelle='GPS' then ligneCommande.idCo else null end) as "GPS",
count(case when Libelle='Aide à la conduite' then ligneCommande.idCo else null end) as "Aide à la conduite",
count(case when Libelle='Haut-parleurs' then ligneCommande.idCo else null end) as "Haut-parleurs",
count(case when Libelle='Kit mains-libre' then ligneCommande.idCo else null end) as "Kit mains-libre",
count(case when Libelle='Amplificateur' then ligneCommande.idCo else null end) as "Amplificateur",
count(*) as Total
from client, commande, type, equipement, ligneCommande
where client.idC=commande.idC
and commande.numC=ligneCommande.numC
and ligneCommande.idE=equipement.idE
and equipement.idT=type.idT
group by client.idC with rollup;
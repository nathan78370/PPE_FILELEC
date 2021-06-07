<?php
	//classe modele qui interagie avec la bdd lecture/ecriture de donnée avec une condition PDO.

	class Modele
	{
		private $pdo,$table;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			try{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
			}
			catch(PDOException $exp)
			{
				echo "Erreur de connexion à la BDD : ".$serveur."/".$bdd;
				$this -> pdo = null; 
			}
		}

		public function setTable($uneTable)
		{
			$this -> table = $uneTable;
		}

		public function selectAll()
		{
			if($this -> pdo == null) return null;
			else{
				$requete ="select * from ".$this->table.";";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectWhere($champs, $where, $operateur)
		{
			if($this -> pdo == null) return null;
			else{
				$chaineChamps=implode(",",$champs);
				$tab=array();
				$donnee = array();
				foreach ($where as $cle=>$valeur) 
				{
					$tab[] = $cle." = :".$cle;
					$donnee[":".$cle] = $valeur;
				}
				$chaineWhere = implode(" ".$operateur." ",$tab);
				$requete ="select ".$chaineChamps." from ".$this->table." where ".$chaineWhere.";";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute($donnee);
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectWhereOrderByComm($champs, $where, $operateur)
		{
			if($this -> pdo == null) return null;
			else{
				$chaineChamps=implode(",",$champs);
				$tab=array();
				$donnee = array();
				foreach ($where as $cle=>$valeur) 
				{
					$tab[] = $cle." = :".$cle;
					$donnee[":".$cle] = $valeur;
				}
				$chaineWhere = implode(" ".$operateur." ",$tab);
				$requete ="select ".$chaineChamps." from ".$this->table." where ".$chaineWhere." order by DHC;";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute($donnee);
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectWhereOrderByLi($champs, $where, $operateur)
		{
			if($this -> pdo == null) return null;
			else{
				$chaineChamps=implode(",",$champs);
				$tab=array();
				$donnee = array();
				foreach ($where as $cle=>$valeur) 
				{
					$tab[] = $cle." = :".$cle;
					$donnee[":".$cle] = $valeur;
				}
				$chaineWhere = implode(" ".$operateur." ",$tab);
				$requete ="select ".$chaineChamps." from ".$this->table." where ".$chaineWhere." order by idE;";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute($donnee);
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}
		public function selectWhereDiff($champs, $where, $operateur)
		{
			if($this -> pdo == null) return null;
			else{
				$chaineChamps=implode(",",$champs);
				$tab=array();
				$donnee = array();
				foreach ($where as $cle=>$valeur) 
				{
					$tab[] = $cle." != :".$cle;
					$donnee[":".$cle] = $valeur;
				}
				$chaineWhere = implode(" ".$operateur." ",$tab);
				$requete ="select ".$chaineChamps." from ".$this->table." where ".$chaineWhere.";";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute($donnee);
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function insert($tab)
		{
			if($this -> pdo == null) return null;
			else{
				$donnee = array();
				$champs = array();
				foreach ($tab as $cle => $value) 
				{
					$champs[] = ":".$cle;
					$donnee[":".$cle] = $value;
				}
				$chaineChamps = implode(",",$champs);
				$requete = "insert into ".$this->table." values (null,".$chaineChamps.");";
				$insert = $this -> pdo -> prepare($requete);
				$insert -> execute($donnee);
				$info = $insert -> fetchAll();
				return $info;
			}
		}

		public function insertNotNull($tab)
		{
			if($this -> pdo == null) return null;
			else{
				$donnee = array();
				$champs = array();
				foreach ($tab as $cle => $value) 
				{
					$champs[] = ":".$cle;
					$donnee[":".$cle] = $value;
				}
				$chaineChamps = implode(",",$champs);
				$requete = "insert into ".$this->table." values (".$chaineChamps.");";
				$insert = $this -> pdo -> prepare($requete);
				$insert -> execute($donnee);
			}
		}

		public function delete($where)
		{
			if($this -> pdo == null) return null;
			else{
				$donnee = array();
				$champs = array();
				foreach ($where as $cle => $value) 
				{
					$champs[] = $cle."= :".$cle;
					$donnee[":".$cle] = $value;
				}
				$chaineChamps = implode(" and ",$champs);
				$requete = "delete from ".$this->table." where ".$chaineChamps.";";
				$delete = $this -> pdo -> prepare($requete);
				$delete -> execute($donnee);
			}
		}

		public function update($tab, $where)
		{
			if($this -> pdo == null) return null;
			else{
				$donnee = array();
				$champs = array();
				$champs2 = array();
				//traitement des attrivuts a updates
				foreach ($tab as $cle => $value) 
				{
					$champs[] = $cle."= :".$cle;
					$donnee[":".$cle] = $value;
				}
				foreach ($where as $cle => $value) 
				{
					$champs2[] = $cle."= :".$cle;
					$donnee[":".$cle] = $value;
				}
				$chaineChamps = implode(" , ",$champs);
				$chaineWhere = implode(" and ", $champs2);
				$requete = "update ".$this->table." set ".$chaineChamps." where ".$chaineWhere.";";
				$update = $this -> pdo -> prepare($requete);
				$update -> execute($donnee);
			}
		}

		public function UpdateEquipement($QteE, $idE)  // Réduit la quantité dans la BDD de l'équipement choisi
		{
			$requete = "update equipement set QteE=QteE-:QteEc where idE= :idEc"; 
			$donnees = array (":QteEc" => $QteE, ":idEc" => $idE);
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			return $resultat;
		}

		public function RajoutQuandSupprimerPanier($idESelect,$QteEff) // Boutton "suppression" 
		{
			$requete = "update equipement set QteE=QteE+:QteEff where idE=:idESelect";  
			$donnees = array (":idESelect" => $idESelect, ":QteEff" => $QteEff);
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
		}

		public function RettirerQuandAugmentationQteEquipPanier($idESelect,$QteEff) // Boutton "plus"
		{
			$requete = "update equipement set QteE=QteE-:QteEff where idE=:idESelect";  
			$donnees = array (":idESelect" => $idESelect, ":QteEff" => $QteEff);
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
		}
		
		public function RajoutQuandDiminutionQteEquipPanier($idESelect,$QteEff) // Boutton "moins"
		{
			$requete = "update equipement set QteE=QteE+:QteEff where idE=:idESelect";  
			$donnees = array (":idESelect" => $idESelect, ":QteEff" => $QteEff);
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
		}

		public function ajoutpanier($tab)
		{
			if($this -> pdo == null) return null;
			else{
				$donnees = array();
				$champs = array();
				
				//traitement des attrivuts a updates
				foreach ($tab as $cle => $value) 
				{
					$champs[] = ":".$cle;
					$donnees[":".$cle] = $value;
				}
				
				$chaineChamps = implode(" , ",$champs);
				
				$requete = "CALL AjoutPanier($chaineChamps)";
				$update = $this -> pdo -> prepare($requete);
				$update -> execute($donnees);
			}
		}

		public function selectQteELigneSelect($idESelect) //
		{
			$requete = "select QteE from equipement where idE = :idESelect";  
			$donnees = array (":idESelect" => $idESelect);
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			$_SESSION['QteEBDD'] = $resultat['QteE'];
			return $resultat;

		}	  

		public function selectDerniereCommande() //
		{
			$requete = "select max(numC) from commande;";  
			$select = $this->pdo->prepare($requete);
			$select->execute();
			$resultat = $select->fetch();
			$_SESSION['numC'] = $resultat['max(numC)'];
			return $resultat;

		} 

		public function selectStats($idC)
		{
			if($this -> pdo == null) return null;
			else{
				$requete = "select NomE,sum(QteE) as Quantite from ".$this->table.",commande,client where ".$this->table.".numC=commande.numC and commande.idC=client.idC and client.idC=".$idC." group by NomE;";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectStats2($idC)
		{
			if($this -> pdo == null) return null;
			else{
				$requete = "select count(numC) as Quantite2 from commande where idC=".$idC.";"; 
				$select = $this -> pdo -> prepare($requete);
				$select -> execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectCountOrder($idC)
		{
			if($this -> pdo == null) return null;
			else{
				$requete = "select count(numC) as Quantite from ".$this->table." where idC=".$idC.";";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}

		public function selectCommandeEtat($idC)
		{
			if($this -> pdo == null) return null;
			else{
				$requete = "select * from ".$this->table." where Etat='livrer' or Etat='En cours de livraison' and idC=".$idC.";";
				$select = $this -> pdo -> prepare($requete);
				$select -> execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
		}
	}//Fin de la classe
?>
<?php
	include ("Modele/modele.class.php");
	//classe controleur qui permet d'apeler les méthodes du modeles et les vues.

	class controlleur
	{
		private $unModele;

		public  function __construct($serveur, $bdd, $user, $mdp)
		{
			$this ->unModele = new Modele ($serveur, $bdd, $user, $mdp);
		}

		public function setTable($uneTable)
		{
			$this ->unModele-> setTable($uneTable);
		}

		public function selectAll ()
		{
			return $this ->unModele-> selectAll();
		}

		public function selectWhere ($champs, $where, $operateur)
        {
            return $this ->unModele-> selectWhere($champs, $where, $operateur);
        }

        public function selectWhereOrderByComm ($champs, $where, $operateur)
        {
            return $this ->unModele-> selectWhereOrderByComm($champs, $where, $operateur);
        }

        public function selectWhereOrderByLi ($champs, $where, $operateur)
        {
            return $this ->unModele-> selectWhereOrderByLi($champs, $where, $operateur);
        }

        public function selectWhereDiff ($champs, $where, $operateur)
        {
            return $this ->unModele-> selectWhereDiff($champs, $where, $operateur);
        }

		public function insert ($tab)
		{
			return $this ->unModele-> insert($tab);
		}

		public function insertNotNull ($tab)
		{
			$this ->unModele-> insertNotNull($tab);
		}

		public function delete ($where)
		{
			$this ->unModele-> delete($where);
		}

		public function update ($tab, $where)
		{
			$this ->unModele-> update($tab, $where);
		}

		public function verif_connexion ($champs, $where, $operateur)
		{
			return $this ->unModele-> verif_connexion($champs, $where, $operateur);
		}

		public function UpdateEquipement($QteE, $idE)
		{
			if($QteE == "" || $idE == "")
			{
				return null;
			}
			else
			{
				return $this ->unModele-> UpdateEquipement($QteE, $idE);
			}
		}

		public function RajoutQuandSupprimerPanierC($idESelect,$QteEff)
		{
			if($QteEff == "" || $idESelect == "")
			{
				return null;
			}
			else
			{
				return $this ->unModele-> RajoutQuandSupprimerPanier($idESelect,$QteEff);
			} 
		}

		public function RettirerQuandAugmentationQteEquipPanier($idESelect,$QteEff)
		{
			if($QteEff == "" || $idESelect == "")
			{
				return null;
			}
			else
			{
				return $this ->unModele-> RettirerQuandAugmentationQteEquipPanier($idESelect,$QteEff);
			} 
		}

		public function RajoutQuandDiminutionQteEquipPanier($idESelect,$QteEff)
		{
			if($QteEff == "" || $idESelect == "")
			{
				return null;
			}
			else
			{
				return $this ->unModele-> RajoutQuandDiminutionQteEquipPanier($idESelect,$QteEff);
			} 
		}


		public function ajoutpanier($tab)
		{
			$this ->unModele-> ajoutpanier($tab);
		}

		public function selectQteELigneSelect($idESelect)
		{
			$this ->unModele-> selectQteELigneSelect($idESelect);
		}

		public function selectDerniereCommande()
		{
			$this ->unModele-> selectDerniereCommande();
		}

		public function selectStats($idC)
		{
			return $this ->unModele-> selectStats($idC);
		}

		public function selectStats2($idC)
		{
			return $this ->unModele-> selectStats2($idC);
		}

		public function selectCountOrder($idC)
		{
			return $this ->unModele-> selectCountOrder($idC);
		}

		public function selectCommandeEtat($idC)
		{
			return $this ->unModele-> selectCommandeEtat($idC);
		}
	} 

?>
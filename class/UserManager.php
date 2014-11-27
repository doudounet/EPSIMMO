<?php

include ("class/Client.php");

class UserManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(usernnage $user)
  {
    $q = $this->_db->prepare('INSERT INTO epsimmo SET nom = :nom, prenom = :prenom, dateNaiss = :dateNaiss, secret = :secret, mdp = :mdp, email = :email, tel = :tel, addresse = :addresse, asup = :asup, cp = :cp, ville = :ville, idtype = :idtype, mdp = mdp ');

    $q->bindValue(':nom', $user->nom());
    $q->bindValue(':prenom', $user->prenom());
    $q->bindValue(':datenaissance', $user->datenaissance());
    $q->bindValue(':idsecret', $user->idsecret());
	  $q->bindValue(':secret', $user->secret());
    $q->bindValue(':email', $user->email());
    $q->bindValue(':tel', $user->tel());
    $q->bindValue(':addresse', $user->addresse());
    $q->bindValue(':asup', $user->asup());
    $q->bindValue(':cp', $user->cp());
    $q->bindValue(':ville', $user->ville());
	  $q->bindValue(':idtype', $user->idtype());
	  $q->bindValue(':mdp', $user->mdp());
	
	/*
	$q->bindValue(':forceuser', $user->forceuser(), PDO::PARAM_INT);
    $q->bindValue(':degats', $user->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $user->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $user->experience(), PDO::PARAM_INT);
*/

    $q->execute();

	  }


	function verifcon($email,$mdp)
		{
			$query = $connexion->query("SELECT COUNT(*) AS as ok FROM client WHERE email='$email' AND mdp='$mdp'");
			$mail = $query->fetch(PDO::FETCH_OBJ);
			$nb_mess = $mail->nb_messages;	
			return $nb_mess;
		}

  // [OK] : suppression d'un utilisateur dans la BDD
  public function delete(Client $user)
  {
    $this->_db->exec('DELETE FROM client WHERE id = '.$user->id());
  }

  // [OK] : récup les données d'un utilisateur grace à son ID
  public function getUser($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT id, nom, prenom, dateNaiss, secret, mdp, email, tel, addresse, asup, cp, ville FROM client WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new usernnage($donnees);
  }

// [OK] : récup les données d'un utilisateur grace à son mail. Utile pour la récup de mot de passe
  public function getMailOfUser($mail)
  {

    $q = $this->_db->query('SELECT * FROM client WHERE mail = '.$mail);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new usernnage($donnees);
  }

  // [OK] : récup un tableau des utilisateur de toutes la BDD
  public function getList()
  {
    $users = array();

    $q = $this->_db->query('SELECT * FROM client ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $users[] = new Client($donnees);
    }

    return $users;
  }

  //[not ok, traitement des données probablement mauvais] renvoi les libelles des questions de la base "secret"
  public function getQuestionLibelle()
  {
    $questions = array();

    $q = $this->_db->query('SELECT * FROM secret');

    $i = 0;
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $questions[$i] = $donnees;
      $i++;
    }

    return $users;
  }

  //[ok] permet de récupérer sous forme d'une string l'intitulé d'une question secrete
  public function getQuestionLibelleById($id)
  {
    $intitule = '';
    $q = $this->_db->query('SELECT intitule FROM secret where id ='.$id);

    while($row = $req->fetch()) {    
         $intitule = $row[intitule];
    }

    return $intitule;
  }

  //[not ok]
  public function update(usernnage $user)
  {
    $q = $this->_db->prepare('UPDATE usernnages SET forceuser = :forceuser, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');

    $q->bindValue(':forceuser', $user->forceuser(), PDO::PARAM_INT);
    $q->bindValue(':degats', $user->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $user->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $user->experience(), PDO::PARAM_INT);
    $q->bindValue(':id', $user->id(), PDO::PARAM_INT);

    $q->execute();
  }

  //[ok]
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}
?>
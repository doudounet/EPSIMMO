<?php
class UserManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(usernnage $user)
  {
    $q = $this->_db->prepare('INSERT INTO epsimmo SET nom = :nom, prenom = :prenom, dateNaiss = :dateNaiss, secret = :secret, motDePasse = :motDePasse, email = :email, tel = :tel, addresse = :addresse, asup = :asup, cp = :cp, ville = :ville');

    $q->bindValue(':nom', $user->nom());
    $q->bindValue(':prenom', $user->prenom());
    $q->bindValue(':dateNaiss', $user->dateNaiss());
    $q->bindValue(':secret', $user->secrett());
    $q->bindValue(':motDePasse', $user->motDePasse());
    $q->bindValue(':email', $user->email());
    $q->bindValue(':tel', $user->tel());
    $q->bindValue(':addresse', $user->addresse());
    $q->bindValue(':asup', $user->asup());
    $q->bindValue(':cp', $user->cp());
    $q->bindValue(':ville', $user->ville());

    $q->bindValue(':forceuser', $user->forceuser(), PDO::PARAM_INT);
    $q->bindValue(':degats', $user->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $user->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $user->experience(), PDO::PARAM_INT);

      public $id;
  public $nom;
  public $prenom;
  public $dateNaiss;
  public $secret;
  public $motDePasse;
  public $email;
  public $tel;
  public $addresse;
  public $asup;
  public $cp;
  public $ville;

    $q->execute();
  }

  public function delete(usernnage $user)
  {
    $this->_db->exec('DELETE FROM usernnages WHERE id = '.$user->id());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT id, nom, forceuser, degats, niveau, experience FROM usernnages WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new usernnage($donnees);
  }

  public function getList()
  {
    $users = array();

    $q = $this->_db->query('SELECT id, nom, prenom, dateNaiss, secret, motDePasse, email, tel, addresse, asup, cp, ville FROM client ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $users[] = new Client($donnees);
    }

    return $users;
  }

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

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}
?>
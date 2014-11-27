<?php

Class client {

	public $id;
	public $nom;
	public $prenom;
	public $datenaissance;
	public $idsecret;
	public $secret;
	public $email;
	public $tel;
	public $addresse;
	public $asup;
	public $cp;
	public $ville;
	public $idtype
	public $mdp;
	
	public function (array $donnees)
	{
 
	}

	
	public function id()
	{
		return $this->id;
	}
	
	public function nom()
	{
		return $this->nom;
	}
	
	public function prenom()
	{
		return $this->prenom;
	}
	
	public function datenaissance()
	{
		return $this->datenaissance;
	}
	
	public function idsecret()
	{
		return $this->idsecret;
	}
	
	public function secret()
	{
		return $this->secret;
	}
	
	public function email()
	{
		return $this->email;
	}
	
	public function tel()
	{
		return $this->tel;
	}
	
	public function addresse()
	{
		return $this->addresse;
	}
	
	public function asup()
	{
		return $this->asup;
	}
	
	public function cp()
	{
		return $this->cp;
	}
	
	public function ville()
	{
		return $this->ville;
	}
	
	public function idtype()
	{
		return $this->type;
	}
	public function mdp()
	{
		return $this->mdp;
	}
	public function setid($id)
	{
		$this->id = $id;
	}
	public function setnom($nom)
	{
		$this->nom = $nom;
	}
	public function setprenom($prenom)
	{
		$this->prenom = $prenom;
	}
	public function setdatenaissance($datenaissance)
	{
		$this->datenaissance = $datenaissance;
	}
	public function setidsecret($idsecret)
	{
		$this->idsecret = $idsecret;
	}
	public function setemail($email)
	{
		$this->email = $email;
	}
	public function settel($tel)
	{
		$this->tel = $tel;
	}
	public function setaddresse($addresse)
	{
		$this->addresse = $addresse;
	}
	public function setasup($asup)
	{
		$this->asup = $asup;
	}
	public function setcp($cp)
	{
		$this->cp = $cp;
	}
    public function setville($ville)
	{
		$this->ville = $ville;
	}
	public function setidtype($idtype)
	{
		$this->idtype = $idtype;
	}
	public function setmdp($mdp)
	{
		$this->mdp = $mdp;
	}
	
}
?>

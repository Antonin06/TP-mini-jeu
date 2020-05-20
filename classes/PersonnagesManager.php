<?php
class PersonnagesManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Personnage $perso)
{
  $q = $this->_db->prepare('INSERT INTO personnages(nom) VALUES(:nom)');
  $q->bindValue(':nom', $perso->nom());
  $q->execute();

  $perso->hydrate([
    'id' => $this->_db->lastInsertId(),
    'degats' => 0,
  ]);
}


  public function count()
  {
    // Code
  }

  public function delete(Personnage $perso)
  {
    // Code
  }

  public function exists($info)
  {
    // Code
  }

  public function get($info)
  {
    // Code
  }

  public function getList($name)
  {
    // Code

  public function update(Personnage $perso)
  {
    // Code
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

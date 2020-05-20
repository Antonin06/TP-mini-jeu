<?php
class Personnage
{
  private $_id,
  $_dammages,
  $_name;

  const CEST_MOI = 1;
  const PERSONNAGE_TUE = 2;
  const PERSONNAGE_FRAPPE = 3;

  public function frapper(Personnage $perso)
  {
    //code
  }

  public function recevoirDegats()
  {
    //code
  }

  public function degats()
  {
    return $this->_dammages;
  }

  public function id()
  {
    return $this->_id;
  }

  public function nom()
  {
    return $this->_name;
  }

  public function setDegats($degats)
  {
    $degats = (int) $degats;

    if ($degats >= 0 && $degats <= 100)
    {
      $this->_dammages = $degats;
    }
  }

  public function setId($id)
  {
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id = $id;
    }
  }

  public function setNom($nom)
  {
    if (is_string($nom))
    {
      $this->_name = $nom;
    }
  }
}

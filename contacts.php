
<?php
  class Contact {
      public $prenom;
      public $nom;
      public $mail;

      public function _construct(string $prenom, string $nom, string $mail,)
      {
          $this->titre = $prenom;
          $this->contenu = $nom;
          $this->image_url = $mail;
      }

      public function getPrenom() :string 
      {
          return $this->prenom;
      }

      public function gatNom() :string
      {
          return $this->nom;
      }

      public function getMail() :string
      {
          return $this->mail;
      }
    }
  ?>

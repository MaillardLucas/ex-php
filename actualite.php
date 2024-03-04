<?php
  class Actualite {
      public $titre;
      public $contenu;
      public $image_url;
      public $source;
      public $tags;
      public $date_publication;
      public $date_revision;
      public $id_auteur;
      public $auteur;

      public function_construct(string $titre, string $contenu, string $image_ulr, string $source, string $tags, string $date_publication, string $date_revision, string $id_auteur, string $auteur, )
      {
          $this->titre = $titre;
          $this->contenu = $contenu;
          $this->image_url = $image_url;
          $this->source = $source;
          $this->tags = $tags;
          $this->date_publication = $date_publication;
          $this->date_revision = $date_revision;
          $this->id_auteur = $id_auteur;
          $this->auteur = $auteur;
      }

      public function getTitre() :string 
      {
          return $this->titre;
      }

      public function gatContenu() :string
      {
          return $this->contenu;
      }

      public function getImage_url() :string
      {
          return $this->image_url;
      }

      public function getSource() :string
      {
          return $this->source;
      }

      public function getTags() :string
      {
          return $this->tags;
      }

      public function getDate_publication() :string
      {
          return $this->date_publication;
      }

      public function getDate_revision() :string
      {
          return $this->date_revision;
      }

      public function getId_auteur() :string
      {
          return $this->id_auteur;
      }

      public function getAuteur() :string
      {
          return $this->auteur;
      }
    }
  ?>
<?php
class Contact {
    public $prenom;
    public $nom;
    public $email;

    public function __construct(string $prenom, string $nom, string $email)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
    }

    public static function createFromFormData(array $formData): Contact
    {
        $prenom = $formData['prenom'] ?? '';
        $nom = $formData['nom'] ?? '';
        $email = $formData['email'] ?? '';
        
        return new Contact($prenom, $nom, $email);
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
?>

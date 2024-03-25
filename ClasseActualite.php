<?php
class Actualite
{
    public $titre;
    public $contenu;
    public $image_url;
    public $source;
    public $tags;
    public $date_publication;
    public $date_revision;
    public $id_auteur;
    public $auteur;
    public $id;

    public function __construct(string $titre, string $contenu, string $image_url, string $source, string $tags, string $date_publication, string $date_revision, string $id_auteur, string $auteur, string $id)    
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
        $this->id = $id;
    }

    public static function getAllFromDatabase(mysqli $conn): array
    {
        $actualites = array();
    
        $query = "SELECT * FROM actualites ORDER BY date_publication DESC LIMIT 5";
        $result = mysqli_query($conn, $query);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $source = $row['source'] ?? '';
            $tags = $row['tags'] ?? ''; 
            $actualite = new Actualite(
                $row['titre'],
                $row['contenu'],
                $row['image_url'],
                $source,
                $tags,
                $row['date_publication'],
                $row['date_revision'],
                $row['id_auteur'],
                $row['auteur'],
                $row['id']
            );
            $actualites[] = $actualite;
        }
    
        return $actualites;
    }
}
?>
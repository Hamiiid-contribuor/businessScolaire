<?php

namespace UserBundle\UserBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255 , nullable=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255 , nullable=true )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255 , nullable=true)
     */
    private $prenom;

    /**
     * @var \String
     *
     * @ORM\Column(name="dateEmbauche", type="string" , nullable=true)
     */
    private $dateEmbauche;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer" , nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255 , nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255 , nullable=true)
     */
    private $telephone;

    /**
     * @var text
     *
     * @ORM\Column(name="commentaire", type="text", length=255 , nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string" , nullable= true)
     */
    private $fonction;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Utilisateur
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set dateEmbauche
     *
     * @param \String $dateEmbauche
     *
     * @return Utilisateur
     */
    public function setDateEmbauche($dateEmbauche) {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \String
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Utilisateur
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateur
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Utilisateur
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set commentaire
     *
     * @param text $commentaire
     *
     * @return Utilisateur
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return text
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Utilisateur
     */
    public function setFonction($fonction) {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction() {
        return $this->fonction;
    }

}

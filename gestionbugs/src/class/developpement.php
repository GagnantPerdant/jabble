<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 15/12/14
 * Time: 15:14
 */
class developpement
{
    private $description;
    private $commentaires = array();
    private $etatDev;
    private $typeDev;
    private $prioriteDev;
    private $fichiersModifies = array();
    private $parentProjet;

    function __construct($parent)
    {
        $this->description = "description du developpement";
        $this->etatDev = new etatDev();
        $this->typeDev = new typeDev();
        $this->prioriteDev = new prioriteDev();
        $this->parentProjet = $parent;
        return $this;
    }

    /**
     * @return prioriteDev
     */
    public function getPrioriteDev()
    {
        return $this->prioriteDev;
    }

    /**
     * @param prioriteDev $prioriteDev
     */
    public function setPrioriteDev($prioriteDev)
    {
        $this->prioriteDev = $prioriteDev;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @param string $comment
     */
    public function addCommentaires($commentaire)
    {
        $this->commentaires[] = $commentaire;
    }


    /**
     * @return etatDev
     */
    public function getEtatDev()
    {
        return $this->etatDev;
    }

    /**
     * @param etatDev $etatDev
     */
    public function setEtatDev($etatDev)
    {
        $this->etatDev = $etatDev;
    }

    /**
     * @return typeDev
     */
    public function getTypeDev()
    {
        return $this->typeDev;
    }

    /**
     * @param typeDev $typeDev
     */
    public function setTypeDev($typeDev)
    {
        $this->typeDev = $typeDev;
    }

    /**
     * @return array
     */
    public function getFichiersModifies()
    {
        return $this->fichiersModifies;
    }

    /**
     * @param array $fichiersModifies
     */
    public function setFichiersModifies($fichiersModifies)
    {
        $this->fichiersModifies = $fichiersModifies;
    }

    function addFichierModifie($fichierModifie)
    {
        if (is_null($fichierModifie)) {
            $fichierModifie = new fichierModifie(null, null);
        }
        $this->fichiersModifies[] = $fichierModifie;
        return $fichierModifie;
    }

}
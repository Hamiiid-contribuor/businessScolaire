<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('adresse');
        $builder->add('telephone');
        $builder->add('file');
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_profile';
    }

    public function getNom() {
        return $this->getBlockPrefix();
    }

    public function getPrenom() {
        return $this->getBlockPrefix();
    }

    public function getAge() {
        return $this->getBlockPrefix();
    }

    public function getAdresse() {
        return $this->getBlockPrefix();
    }

    public function getTelephone() {
        return $this->getBlockPrefix();
    }

    public function getMatricule() {
        return $this->getBlockPrefix();
    }

    public function getCommentaire() {
        return $this->getBlockPrefix();
    }

    public function getDateEmbauche() {
        return $this->getBlockPrefix();
    }

}

<?php

namespace UserBundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('adresse');
        $builder->add('dateEmbauche');
        $builder->add('telephone');
        $builder->add('commentaire');
        $builder->add('fonction');
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
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

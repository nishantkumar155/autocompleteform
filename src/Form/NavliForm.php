<?php


namespace Drupal\tautocompleteform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;



/**
 * Contribute form.
 */
class NavliForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'nishant_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['hello'] = array(
            '#type' => 'textfield',
            '#title' => t('Search'),
            '#required' => TRUE,
            '#autocomplete_route_name' => 'country.autocomplete',
            //'#autocomplete_route_parameters' => array('a' => $some_key, 'b' => $some_id),
        );
 
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('Submit'),
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {


    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {


    }
}

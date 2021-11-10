<?php
    namespace Drupal\tableEmployee\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;

class TableEmployee extends FormBase{
        /**
         * {@inheritdoc}
         */

         public function getFormId(){
             return 'create_table';
         }

         /**
          *{@inheritdoc}
          */

          public function buildForm(array $form, FormStateInterface $form_state){


          	   $genderoptions = array(
          	   	'0'=>'Select Gender',
          	   	'Male'=>'Male',
          	   	'Female'=>'Female',
          	   	'Other'=>'Other',
          	   );

              $form['name'] = array(
                   '#type'=>'textfield',
                   '#title'=>t('Name'),
                   '#required' => TRUE,
              );
              $form['candidate_number'] = array (
      '#type' => 'tel',
      '#title' => t('Mobile no'),
    );
              $form['DOB'] = array(
                   '#type'=>'date',
                   '#title'=>t('DOB'),
                   '#required' => TRUE,
              );
              $form['email'] = array(
                   '#type'=>'textfield',
                   '#title'=>t('E-mail'),
                   '#required' => TRUE,
              );
              $form['gender'] = array(
                   '#type'=>'select',
                   '#title'=>t('Gender'),
                   '#options'=>$genderoptions
              );
              $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;

             /* $form['save']= array(
              	'#type'=>'submit',
              	'#value'=>'Save User',
              	'button_type'=>'default'
              );
              return $form;*/
          } 
   /**
   * {@inheritdoc}
   */
    public function validateForm(array &$form, FormStateInterface $form_state) {

      if (strlen($form_state->getValue('candidate_number')) < 10) {
        $form_state->setErrorByName('candidate_number', $this->t('Mobile number is too short.'));
      }

    }  

        /**
         * {@inheritdoc}
         */

        public function submitForm(array &$form, FormStateInterface $form_state){
           
          $postData = $form_state->getValues();

          echo "<pre>";

          print_r($postData);

          echo "</pre>";

          exit;
       }



    }   

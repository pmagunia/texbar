<?php

namespace Drupal\texbar\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Presents the module settings form.
 */
class TexbarSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'texbar_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['texbar.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('texbar.settings');

    $form['selector'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Textarea jQuery Selector'),
      '#default_value' => $config->get('selector'),
      '#description' => $this->t("Enter the jQuery selector for which the LaTeX Toolbar should be added to. A default HTML ID has been listed."),
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('texbar.settings')
        ->set('selector', $form_state->getValue('selector'))
        ->save();
    drupal_flush_all_caches();
    parent::submitForm($form, $form_state);
  }

}


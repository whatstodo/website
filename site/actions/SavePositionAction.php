<?php

namespace Uniform\Actions;

/**
 * Save a new position (as a draft).
 */
class SavePositionAction extends Action {
  public function perform() {
    try {
      $slug = date('y-m-d-H-i') . '-' . esc($this->form->data('title'), 'url');
      kirby()->impersonate('kirby');
      page('positions')->createChild([
        'slug' => $slug,
        'template' => 'position',
        'content' => [
          'declaration' => esc($this->form->data('declaration')),
          'implementation' => esc($this->form->data('implementation')),
          'references' => esc($this->form->data('references')),
        ],
      ]);
    } catch (\Exception $e) {
      // Todo: translate/handle error message.
      $this->fail(
        'Something went wrong ' . (option('debug') ? $e->getMessage() : '')
      );
    } finally {
      // Just to be sure we reset the super user when everything is finished
      // (even if there was an error).
      kirby()->impersonate();
    }
  }
}

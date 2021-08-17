<?php

namespace Uniform\Actions;

/**
 * Save a new position (as a draft).
 */
class SavePositionAction extends Action {
  public function perform() {
    try {
      kirby()->impersonate('kirby');
      page('positions')->createChild([
        'slug' => date('y-m-d-H-i') . '-' . $this->form->data('title'),
        'template' => 'position',
        'content' => $this->form->data(),
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

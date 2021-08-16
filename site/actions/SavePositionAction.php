<?php

namespace Uniform\Actions;

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
      $this->fail($e->getMessage());
    }
  }
}

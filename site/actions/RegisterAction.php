<?php

namespace Uniform\Actions;

/**
 * Register a new participant and, if successful, login the participant and
 * redirect to the home page.
 */
class RegisterAction extends Action {
  public function perform() {
    try {
      kirby()->impersonate('kirby');

      $user = kirby()
        ->users()
        ->create([
          'email' => esc($this->form->data('email')),
          'role' => 'participant',
          'language' => kirby()->language(),
          'name' => esc($this->form->data('name')),
          'password' => $this->form->data('password'),
        ]);

      if ($user and $user->login($this->form->data('password'))) {
        go('/');
      }
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

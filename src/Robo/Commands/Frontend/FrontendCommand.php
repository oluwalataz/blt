<?php

namespace Acquia\Blt\Robo\Commands\Frontend;

use Acquia\Blt\Robo\BltTasks;

/**
 * Defines commands in the "frontend:*" namespace.
 */
class FrontendCommand extends BltTasks {

  /**
   * Runs all frontend targets.
   *
   * @command frontend
   *
   * @executeInDrupalVm
   */
  public function frontend() {
    $status_code = $this->invokeCommands([
      'frontend:setup',
      'frontend:build',
      'frontend:test',
    ]);
    return $status_code;
  }

  /**
   * Executes frontend-build target hook.
   *
   * @command frontend:build
   *
   * @executeInDrupalVm
   */
  public function build() {
    return $this->invokeHook('frontend-build');
  }

  /**
   * Executes frontend-setup target hook.
   *
   * @command frontend:setup
   *
   * @executeInDrupalVm
   */
  public function setup() {
    return $this->invokeHook('frontend-setup');
  }

  /**
   * Executes frontend-test target hook.
   *
   * @command frontend:test
   *
   * @executeInDrupalVm
   */
  public function test() {
    return $this->invokeHook('frontend-test');
  }

}

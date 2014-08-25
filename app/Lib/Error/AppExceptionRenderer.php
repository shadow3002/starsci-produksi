<?php

App::uses('ExceptionRenderer', 'Error');

class AppExceptionRenderer extends ExceptionRenderer {

    public function notFound($error) {
         $this->controller->redirect(array('controller' => 'Errors', 'action' => 'not_found'));
    }

    public function missingController($error) {
         $this->controller->redirect(array('controller' => 'Errors', 'action' => 'missing_controller'));
    }
    public function missingAction($error) {
         $this->controller->redirect(array('controller' => 'Errors', 'action' => 'missing_action'));
    }
}
?>
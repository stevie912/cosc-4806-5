<?php

class Reports extends Controller {

  public function index() {
    $this->view('reports/index');
  }

  public function reminders_all() {
    $report = $this->model('Report');
    $reminders_list = $report->get_all_reminders();
    $this->view('reports/reminders_all', ['reminders_list' => $reminders_list]);
  }

}

?>
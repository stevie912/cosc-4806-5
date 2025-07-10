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

  public function reminders_user() {
    $report = $this->model('Report');
    $reminders_count = $report->get_reminders_count();
    $this->view('reports/reminders_count', ['reminders_count' => $reminders_count]);
  }

}

?>
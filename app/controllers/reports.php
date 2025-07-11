<?php

class Reports extends Controller {

  // public function index() {
  //   $report = $this->model('Report');
  //   $this->view('reports/index');
  // }

  // public function reminders_all() {
  //   $report = $this->model('Report');
  //   $reminders_list = $report->get_all_reminders();
  //   $this->view('reports/reminders_all', ['reminders_list' => $reminders_list]);
  // }

  // public function reminders_user() {
  //   $report = $this->model('Report');
  //   $reminders_count = $report->get_reminders_count();
  //   $this->view('reports/reminders_count', ['reminders_count' => $reminders_count]);
  // }

  // public function logins_user() {
  //   $report = $this->model('Report');
  //   $logins_count = $report->get_logins_count();
  //   $this->view('reports/logins_count', ['logins_count' => $logins_count]);
  // }
  public function index() {
    $requested_page = $_POST['selectedPage'];
  
    switch($requested_page) {
      case "reminders_all":
        $_SESSION['report'] = "reminders_all";
        $report = $this->model('Report');
        $reminders_list = $report->get_all_reminders();
        $this->view('reports/index', ['reminders_list' => $reminders_list]);
      break;
      case "reminders_count":
        $_SESSION['report'] = "reminders_count";
        $report = $this->model('Report');
        $reminders_count = $report->get_reminders_count();
        $this->view('reports/index', ['reminders_count' => $reminders_count]);
      break;
      case "logins_count":
        $_SESSION['report'] = "logins_count";
        $report = $this->model('Report');
        $logins_count = $report->get_logins_count();
        $this->view('reports/index', ['logins_count' => $logins_count]);
      default :
        $this->view('reports/index');
      break;
    }
  }
}

?>
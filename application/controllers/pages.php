<?php
class Pages extends CI_Controller {

        public function index() {
            $this->home();
        }
        public function home() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/home.php");
            $this->load->view("templates/footer.php");
        }
        public function about() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/about.php");
            $this->load->view("templates/footer.php");
        }
        public function blog() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/blog.php");
            $this->load->view("templates/footer.php");
        }
        public function contact() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/contact.php");
            $this->load->view("templates/footer.php");
        }
        public function portfolio() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/portfolio.php");
            $this->load->view("templates/footer.php");
        }
        public function resume() {
            $this->load->view("templates/header.php");
            $this->load->view("pages/resume.php");
            $this->load->view("templates/footer.php");
        }
}
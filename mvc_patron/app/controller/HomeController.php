<?php
class HomeController {
    public function index() {
        echo $this->view("HomeView", ["title", => "Pagina principal", "mensaje" =>"Bienvenido"]);
    }
    public function view($vistas, $data = []) {
        extract($data);
        if (file_exists("../app/view/$vista.php")) {
            ob_start();
            include "../app/view/$vista.php";
            $content = ob_get_clean();
            return $content;
        } else {
            echo "Vista no encontrada $vista.php";
        }
        return echo "Bienvenido desde Home";
    }
}
?>
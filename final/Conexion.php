<?php 

    class Conexion {
        public function conectar() {
            $conexion = mysqli_connect("localhost",
                                        "id17011002_juan",
                                        "PrograWeb_2021",
                                        "id17011002_unidad4");
            return $conexion;
        }
    }
?>

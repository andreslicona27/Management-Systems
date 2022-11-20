<?php 
    class Menu{
        private $enlaces = array();
        private $titulos = array();

        // FUNCTIONS
        public function cargarOpcion($en, $tit){
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }

        public function mostrar(){
            for ($i = 0; $i < sizeof($this->titulos);$i++) {
                print "<a href=\"".$this->enlaces[$i]."\">".$this->titulos[$i]."</a>";
            }
        }
    }

    $menu = new Menu();
    $menu->cargarOpcion("https://av.colegiovivas.com/course/view.php?id=11", "Colegio vivas");
    $menu->cargarOpcion("https://github.com", "Github");
    $menu->cargarOpcion("https://www.google.es", "Google");
    $menu->cargarOpcion("https://www.eleconomista.es", "El economista");

    $menu->mostrar();
?>
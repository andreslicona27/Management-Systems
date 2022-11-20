<?php 
    class Libro{
        private $autor;
        private $titulo;
        private $numPag;
        private $refLibro;
        private static $prestado;
        private bool $tieneCD;

        // CONSTRUCTORES
        public function __construct($autor, $titulo, $numPag, $refLibro, $prestado){
            $this->autor = $autor;
            $this->titulo = $titulo;
            $this->numPag = $numPag;
            $this->setRefLibro($refLibro);
            $this->setPrestado($prestado);
            $this->setTieneCD(true); 
        }


        // SETTERS / GETTERS
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getNumPag() {
            return $this->numPag;
        }
        public function setNumPag($numPag) {
            $this->numPag = $numPag;
        }

        public function setRefLibro($refLibro) {
            if (strlen($refLibro) < 3){
                print "<p style= color:\"red\">Hubo un error con la referencia</p>";
            } else {
                $this->refLibro = $refLibro;
            }
        }

        public function setPrestado($prestado){
            $this->$prestado++;
        }

        public function getPrestado() {
            return $this->prestado;
        }

        public function getTieneCD() {
            return $this->tieneCD;
        }
        public function setTieneCD($tiene) {
            $this->tieneCD = $tiene;
        }

        // FUNCTIONS 
        public function printAutor(){
            print "El autor es : " . $this->getAutor();
        }

        public function printTitulo(){
            print "El titulo es : " . $this->getTitulo();
        }

        public function printLibro(){
            print "Autor es : " . $this->getAutor() . "</br>";
            print "Titulo es : " . $this->getTitulo() . "</br>";
            print "Número de páginas es : " . $this->getNumPag() . "</br>";
            print "El libro ha sido prestado " . $this->prestado . " veces" . "</br>";
            if (strln($this->reLibro) > 0){
                print $this->refLibro;
            }
            print "La referencia del libro es " . $this->refLibro . "</br>";
            if ($this->getTieneCD()){
                print "El libro trae CD ". "</br>";
            } else {
                print "El libro no trae CD ". "</br>";
            }
            print "</br>";
        }
    }

    $libro = new Libro("J.K.Roling", "harry potter", 300, "123456", 1);
    $libro->printLibro();
    $libro->printLibro();
    $libro->printLibro();
    $libro->printLibro();

?>
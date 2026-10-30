<?php
class Android{
    private $modelo;
    private $preco;
    private $armazenamento;
    private $memoriaRam;
    private $bateria;
    private $camera;

    public function __construct($m, $p, $a, $ram, $b, $c)
    {
        $this->modelo = $m;
        $this->preco = $p;
        $this->armazenamento = $a;
        $this->memoriaRam = $ram;
        $this->bateria = $b;
        $this->camera = $c;
    }   
    
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }

    public function getArmazenamento(){
        return $this->armazenamento;
    }
    public function setArmazenamento($a){
        $this->armazenamento = $a;
    }

    public function getMemoriaRam(){
        return $this->memoriaRam;
    }
    public function setMemoriaRam($ram){
        $this->memoriaRam = $ram;
    }

    public function getBateria(){
        return $this->bateria;
    }
    public function setBateria($b){
        $this->bateria = $b;
    }

    public function getCamera(){
        return $this->camera;
    }
    public function setCamera($c){
        $this->camera = $c;
    }

    public function mostrarProdutos(){
        echo "Produtos Android: \n";
        echo "Modelo: {$this->modelo}\n";
        echo "Preço: R$ {$this->preco}\n";
        echo "Armazenamento: {$this->armazenamento}\n";
        echo "Memória RAM: {$this->memoriaRam}\n";
        echo "Bateria: {$this->bateria}\n";
        echo "Câmera: {$this->camera}\n";
    }
}

$p1 = new Android("Galaxy A57 5G", "2.299,90", "256 GB", "8 GB", "5000 mAh", "50 MP");
$p1->mostrarProdutos();
?>
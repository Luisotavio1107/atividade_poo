<?php
// Cria a classe Produto
class Produto {
    // Atributos private
    private $nome;
    private $preco;

    // Construtor com nome e preço
    public function __construct($n, $p) {
        $this->nome = $n;
        $this->preco = $p;
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Criando dois objetos Produto (Produtos Samsung)
$p1 = new Produto("Galaxy A57 5G", 2299.90);
$p2 = new Produto("Galaxy Buds FE", 399.00);

// Exibindo os produtos
echo "Produto 1: " . $p1->getNome() . " - R$ " . number_format($p1->getPreco(), 2, ',', '.') . "\n";
echo "Produto 2: " . $p2->getNome() . " - R$ " . number_format($p2->getPreco(), 2, ',', '.') . "\n";
?>
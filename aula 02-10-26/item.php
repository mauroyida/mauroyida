<?php
class Item {
    private string $nome;
    private string $raridade;
    private int $valor;

    public function __construct(string $nome, string $raridade, int $valor) {
        $this->nome = $nome;
        $this->raridade = $raridade;
        $this->valor = $valor;
    }

    public function usar(): void {
        echo "O item {$this->nome} foi consumido!\n";
    }
}
?>

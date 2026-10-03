<?php
class Inventario {
    private int $capacidade;
    private array $itens;

    public function __construct(int $capacidade) {
        $this->capacidade = $capacidade;
        $this->itens = [];
    }

    public function adicionarItem(Item $item): bool {
        if (count($this->itens) < $this->capacidade) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function removerItem(Item $item): void {
        $index = array_search($item, $this->itens, true);
        if ($index !== false) {
            unset($this->itens[$index]);
            $this->itens = array_values($this->itens); // Reorganiza as chaves do array
        }
    }
}
?>

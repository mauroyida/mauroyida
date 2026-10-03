<?php
class Personagem {
    private string $nome;
    private string $classe;
    private string $nivel; 

    public function __construct(string $nome, string $classe, string $nivel) {
        $this->nome = $nome;
        $this->classe = $classe;
        $this->nivel = $nivel;
    }

    public function atacar(): void {
        echo "O personagem {$this->nome} da classe {$this->classe} atacou!\n";
    }
}
?>

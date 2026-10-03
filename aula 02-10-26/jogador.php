<?php
class Jogador {
    private string $apelido;
    private int $nivel;
    private int $xp;
    private int $moedas;

    public function __construct(string $apelido, int $nivel = 1, int $xp = 0, int $moedas = 0) {
        $this->apelido = $apelido;
        $this->nivel = $nivel;
        $this->xp = $xp;
        $this->moedas = $moedas;
    }

    public function ganharXp(int $qtd): void {
        $this->xp += $qtd;
        echo "{$this->apelido} ganhou {$qtd} de XP. Total de XP: {$this->xp}\n";
    }

    public function gastarMoedas(int $qtd): void {
        if ($this->moedas >= $qtd) {
            $this->moedas -= $qtd;
            echo "{$this->apelido} gastou {$qtd} moedas. Saldo: {$this->moedas}\n";
        } else {
            echo "Saldo insuficiente para {$this->apelido}!\n";
        }
    }
}
?>

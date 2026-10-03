<?php
require_once "conta.php";
require_once "administrador.php";
require_once "jogador.php";
require_once "personagem.php";
require_once "item.php";
require_once "inventario.php";

// testes originais
$conta = new Conta(1, "patati@patata.com", "123456");
echo $conta->login("123456") ? "Login bem-sucedido!\n" : "Senha incorreta\n";

$admin = new Administrador("Moderador");
$admin->banirJogador("Patati");

// Testando as novas classes do diagrama
$jogador1 = new Jogador("Mauro", 1, 0, 100);
$jogador1->ganharXp(50);
$jogador1->gastarMoedas(20);

$guerreiro = new Personagem("Arthur", "Guerreiro", "1");
$guerreiro->atacar();

$pocao = new Item("Poção de Cura", "Comum", 50);
$pocao->usar();

$mochila = new Inventario(10);
$adicionado = $mochila->adicionarItem($pocao);
echo $adicionado ? "Item guardado com sucesso!\n" : "Inventário cheio!\n";
?>

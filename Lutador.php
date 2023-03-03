<?php
/**
 * Description of Lutador
 *
 * @author sabri
 */
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setAltura($altura): void {
        $this->altura = $altura;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
    }
    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }
    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates): void {
        $this->empates = $empates;
    }
    public function apresentar() {
        
    }
    public function status() {
        
    }
    public function ganharLuta() {
        
    }
    public function perderLuta() {
        
    }
    public function empatarLuta() {
        
    }
}

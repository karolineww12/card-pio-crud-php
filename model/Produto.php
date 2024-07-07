<?php
class Produto{
    private ?int $id;
    private string $nome;
    private string $descricao;
    private float $preco;
    private string $imagem;

    public function __construct(?int $id, string $nome, string $descricao, float $preco, string $imagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }


    public function getPrecoFormatado(): string{
        return "R$ " . number_format( $this->preco, 2, ",");    
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
    public function getPreco(): float
    {
        return $this->preco;
    }
    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }
    public function getImagem(): string
    {
        return $this->imagem;
    }
    public function setImagem(string $imagem): void
    {
        $this ->imagem = $imagem;
    }


}
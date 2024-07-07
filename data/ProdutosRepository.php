<?php
class ProdutosRepository
{
    private PDO $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function getProdutos():array
        {
        $sql = "SELECT * FROM produtos";
        $resultado = $this->pdo->query($sql);
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

$produtos = array_map(function ($produto) {
    return new Produto(
        $produto["id"],
        $produto["nome"],
        $produto["descricao"],
        $produto["preco"],
        $produto["imagem"]
    );
}, $dados);
        
    return $produtos; 
    }

    public function delete(int $id): void 
    {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
    }

    public function create(Produto $produto): void
    {
        $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES (:nome, :descricao, :preco, :imagem)";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":nome", $produto->getNome());
        $stm->bindValue(":descricao", $produto->getDescricao());
        $stm->bindValue(":preco", $produto->getPreco());
        $stm->bindValue(":imagem", $produto->getImagem());
        $stm->execute();
    }

    public function getById(int $id): Produto {
        $sql = "SELECT * FROM produtos WHERE id= :id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $produto = $stm->fetch(PDO::FETCH_ASSOC);
        

    return new Produto(
        $produto["id"],
        $produto["nome"],
        $produto["descricao"],
        $produto["preco"],
        $produto["imagem"]
    );

    }
    
    public function update(Produto $produto): void {
        $sql = "UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco, imagem = :imagem WHERE id = :id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":nome", $produto->getNome());
        $stm->bindValue(":descricao", $produto->getDescricao());
        $stm->bindValue(":preco", $produto->getPreco());
        $stm->bindValue(":imagem", $produto->getImagem());
        $stm->bindValue(":id", $produto->getId());
        $stm->execute();
    }
}
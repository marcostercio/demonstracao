<?php


class Produto {
    private $id;
    private $nome;
    private $preco;
    private $tipo_id;

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }

    public function getTipoId(): int {
        return $this->tipo_id;
    }

    public function setTipoId(int $tipo_id): void {
        $this->tipo_id = $tipo_id;
    }

    public function salvar(): bool {
        try {
            $conexao = (new Conexao())->getConexao();
            $sql = "INSERT INTO produtos (nome, preco, tipo_id) VALUES (:nome, :preco, :tipo_id)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $this->nome);
            $stmt->bindValue(":preco", $this->preco);
            $stmt->bindValue(":tipo_id", $this->tipo_id);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Tratar exceção de acordo com a necessidade
            return false;
        }
    }

    public static function listar(): array {
        try {
            $conexao = (new Conexao())->getConexao();
            $sql = "SELECT produtos.nome AS pnome, tipos.imposto AS timposto, produtos.id AS pid, produtos.img, produtos.preco, produtos.desc, tipos.nome AS tpnome FROM produtos LEFT JOIN tipos ON produtos.tipo_id = tipos.id";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Tratar exceção de acordo com a necessidade
            return [];
        }
    }
}

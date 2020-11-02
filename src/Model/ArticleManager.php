<?php

namespace App\Model;

/**
 *
 */
class ArticleManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'article';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectAll(): array
    {
        
    }

    public function selectOneById(int $id)
    {
        
    }

    /**
     * @param array $article
     * @return int
     */
    public function insert(array $article): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (brand_id, qty, model, price, size_id, color_id) VALUES (:brand_id, :qty, :model, :price, :size_id, :color_id)");
        $statement->bindValue('brand_id', $article['brand_id'], \PDO::PARAM_INT);
        $statement->bindValue('qty', $article['qty'], \PDO::PARAM_INT);
        $statement->bindValue('model', $article['model'], \PDO::PARAM_STR);
        $statement->bindValue('price', $article['price'], \PDO::PARAM_INT);
        $statement->bindValue('size_id', $article['size_id'], \PDO::PARAM_INT);
        $statement->bindValue('color_id', $article['color_id'], \PDO::PARAM_INT);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }

    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    public function update(array $article):bool
    {

        // prepared request
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET brand_id=:brand_id, qty=:qty, model=:model, price:price, size_id:size_id, color_id:color_id WHERE id=:id");
        $statement->bindValue('id', $article['id'], \PDO::PARAM_INT);
        $statement->bindValue('brand_id', $article['brand_id'], \PDO::PARAM_INT);
        $statement->bindValue('qty', $article['qty'], \PDO::PARAM_INT);
        $statement->bindValue('model', $article['model'], \PDO::PARAM_STR);
        $statement->bindValue('price', $article['price'], \PDO::PARAM_INT);
        $statement->bindValue('size_id', $article['size_id'], \PDO::PARAM_INT);
        $statement->bindValue('color_id', $article['color_id'], \PDO::PARAM_INT);

        return $statement->execute();
    }

    public function searchByModel(string $term): array
    {
        
    }

    public function searchByBrand(int $brand_id): array
    {
        
    }

    public function searchByColor(int $color_id): array
    {
        
    }

    public function searchBySize(int $size_id): array
    {
        
    }

    public function searchFull(int $color_id, int $size_id, int $brand_id): array
    {
        
    }
}

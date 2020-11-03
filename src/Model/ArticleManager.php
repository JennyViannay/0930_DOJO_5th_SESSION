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
    // SIZE id size
    // selectAll qui doit retourner id, model, brand_id, color_id, size_id, qty, price 
    // ainsi que brand.name, color.name et size.size ainsi que les images de l'articles depuis la table image
    public function selectAll(): array
    {
        $articles = $this->pdo->query("SELECT
            article.id,
            article.model,
            article.qty,
            article.price,
            brand.name as brand_name,
            article.brand_id,
            color.name as color_name,
            article.color_id,
            article.size_id as size
            FROM article
            INNER JOIN brand ON article.brand_id=brand.id
            INNER JOIN size ON article.size_id=size.id
            INNER JOIN color ON article.color_id=color.id")->fetchAll();
            
            $result = [];
            foreach($articles as $article) {
                $statement = $this->pdo->prepare("SELECT * FROM image WHERE article_id = :article_id ");
                $statement->bindValue('article_id', $article['id'], \PDO::PARAM_INT);
                $statement->execute();
                $images = $statement->fetchAll();

                $article['images'] = $images;
                array_push($result, $article);
            } 
            return $result;
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

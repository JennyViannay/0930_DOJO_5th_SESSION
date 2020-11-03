### DOJO 5 = SESSION & SQL ADVANCED 

#### Exercice 1 :

- Les filtres de recherches pour les articles :
- Dans ArticleManager écrire les méthodes =>
  
  * selectAll qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * selectOneById qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * searchByModel qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * searchByColor qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * searchBySize qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * searchByBrand qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  * searchFull qui doit retourner id, model, brand_id, color_id, size_id, qty, price ainsi que brand.name, color.name et size.size ainsi que les images de l'articles de puis la table image
  ATTENTION : La data doit être restructurer pour s'afficher correctement dans la vue

  #### Exercice 1 

 - Terminer le login/register USER : 
Se rendre dans public/index.php puis ajouter start session
Dans AbstractController decommenter la ligne $this->twig->addGlobal('session', $_SESSION);
Dans le SecurityController => in login() && register() => set user_id and username key in session ( // TODO:: )
Puis écrire logout method ()
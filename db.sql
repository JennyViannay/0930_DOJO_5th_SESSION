CREATE DATABASE dojo5;

USE dojo5;

CREATE TABLE `article` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `brand_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
);

INSERT INTO `article` (`id`, `brand_id`, `qty`, `model`, `price`, `size_id`, `color_id`) VALUES
(1, 1, 2, 'Air Max - 90s', 89, 1, 5),
(2, 3, 4, 'Classic Leather Legacy', 149, 2, 3),
(3, 2, 5, 'Dragon Ball Z', 159, 4, 6),
(4, 4, 3, 'Nike - Classic Cortez', 189, 3, 1);

CREATE TABLE `brand` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Reebok'),
(4, 'Fila');

CREATE TABLE `color` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(100) NOT NULL
);

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'White'),
(2, 'Black'),
(3, 'Blue'),
(4, 'Red'),
(5, 'Green'),
(6, 'Yellow');

CREATE TABLE `image` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `url` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL
);

INSERT INTO `image` (`id`, `url`, `article_id`) VALUES
(1, 'https://y4w6u9b2.rocketcdn.me/wp-content/images/2020/07/nike-air-max-1-anniversary-hunter-green-dc1454-100-banner.jpg', 1),
(2, 'https://kickz.akamaized.net/fr/media/images/p/600/reebok-CLASSIC_LEATHER_LEGACY-SPLBLU_BATBLU_UPBBLU-1.jpg', 2),
(3, 'https://sneakernews.com/wp-content/uploads/2018/09/adidas-goku-shoes-buying-guide.jpg', 3),
(4, 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_2000,h_2000/global/370920/01/sv01/fnd/IND/fmt/png/RS-X-Colour-Theory-Shoes', 4),
(5, 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_2000,h_2000/global/370920/01/fnd/PNA/fmt/png/RS-X-Color-Theory-Sneakers', 4);

CREATE TABLE `size` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `size` int(11) NOT NULL
);


INSERT INTO `size` (`id`, `size`) VALUES
(1, 37),
(2, 38),
(3, 39),
(4, 40),
(5, 42);
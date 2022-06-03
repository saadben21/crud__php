CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `voiture`(
    `id` int(30) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `modele` varchar(255) NOT NULL,
    `prix` int(100) NOT NULL,
    PRIMARY KEY (`id`)
)

CREATE TABLE IF NOT EXISTS `contacts`
(
    `id`      INT          NOT NULL AUTO_INCREMENT,
    `name`    VARCHAR(255) NOT NULL,
    `email`   VARCHAR(255) NULL,
    `message` TEXT         NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO contacts SET name='table exists';
CREATE TABLE `users`
(
    `id`        INT(11)                               NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(256)                          NOT NULL,
    `lastname`  VARCHAR(256)                          NOT NULL,
    `email`     VARCHAR(256)                          NOT NULL,
    `password`  VARCHAR(2048)                         NOT NULL,
    `created`   DATETIME                              NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified`  TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
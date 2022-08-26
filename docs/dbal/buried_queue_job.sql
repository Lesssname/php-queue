CREATE TABLE IF NOT EXISTS buried_queue_job
(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(50) NOT NULL,
    data TEXT NOT NULL,
    attempt TINYINT UNSIGNED NOT NULL DEFAULT 0
)
    CHARACTER SET = utf8mb4
    COLLATE utf8mb4_unicode_ci
    ENGINE = InnoDB;

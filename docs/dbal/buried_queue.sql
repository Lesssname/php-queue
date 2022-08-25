CREATE TABLE IF NOT EXISTS buried_queue
(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,

    job_name VARCHAR(50) NOT NULL,
    job_data TEXT NOT NULL,
    job_attempt TINYINT UNSIGNED NOT NULL DEFAULT 0
)
    CHARACTER SET = utf8mb4
    COLLATE utf8mb4_unicode_ci
    ENGINE = InnoDB;
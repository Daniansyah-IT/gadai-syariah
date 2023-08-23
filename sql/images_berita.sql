CREATE TABLE images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    FOREIGN KEY (post_id) REFERENCES posts(id)
);

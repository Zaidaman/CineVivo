-- Database: cinevivo
CREATE DATABASE IF NOT EXISTS cinevivo;
USE cinevivo;

-- Tabella utenti
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Inserimento admin
INSERT INTO users (username, email, password, role) VALUES
('admin','admin@cinevivo.local','".PASSWORD_HASH_PLACEHOLDER."','admin');

-- Tabella categorie
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Tabella contenuti (film/serie)
CREATE TABLE contents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    type ENUM('film','serie') NOT NULL,
    category_id INT,
    image VARCHAR(255),
    video_url VARCHAR(255),
    release_date DATE,
    director VARCHAR(100),
    related_ids VARCHAR(255),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- Tabella episodi per serie
CREATE TABLE episodes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content_id INT NOT NULL,
    season INT NOT NULL,
    episode_number INT NOT NULL,
    title VARCHAR(100),
    video_url VARCHAR(255),
    FOREIGN KEY (content_id) REFERENCES contents(id) ON DELETE CASCADE
);

-- Tabella preferiti
CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    content_id INT NOT NULL,
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (content_id) REFERENCES contents(id) ON DELETE CASCADE
);

-- Tabella visualizzazioni
CREATE TABLE views (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    content_id INT NOT NULL,
    viewed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (content_id) REFERENCES contents(id) ON DELETE CASCADE
);

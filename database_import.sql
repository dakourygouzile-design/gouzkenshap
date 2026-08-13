-- ==========================================
-- GOUZKENSHAP - Fichier d'import pour l'hébergement
-- Ce fichier est PRÊT à importer dans phpMyAdmin
-- Il ne contient PAS "CREATE DATABASE" ni "USE" car
-- l'hébergeur vous impose déjà sa base de données.
--
-- Comment l'utiliser :
-- 1. Ouvrez phpMyAdmin dans le panneau de votre hébergeur
-- 2. Sélectionnez la base de données que vous avez créée
-- 3. Onglet "Importer" / "Import"
-- 4. Choisissez ce fichier et cliquez sur "Go" / "Exécuter"
-- ==========================================

-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    role ENUM('client', 'vendeur') DEFAULT 'client',
    is_admin TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_username ON users(username);

-- Table des produits (marchandises des vendeurs)
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    categorie ENUM('lapin', 'chemise') NOT NULL,
    titre VARCHAR(150) NOT NULL,
    description TEXT,
    prix DECIMAL(12,2) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    statut ENUM('en_attente', 'publie', 'refuse') DEFAULT 'en_attente',
    commission_percent DECIMAL(5,2) DEFAULT 20.00,
    sold TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX idx_products_categorie ON products(categorie);
CREATE INDEX idx_products_statut ON products(statut);
CREATE INDEX idx_products_user ON products(user_id);

-- Table des ventes (suivi des commissions)
CREATE TABLE IF NOT EXISTS sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    vendeur_id INT NOT NULL,
    montant DECIMAL(12,2) NOT NULL,
    commission DECIMAL(12,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (vendeur_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX idx_sales_vendeur ON sales(vendeur_id);
CREATE INDEX idx_sales_product ON sales(product_id);

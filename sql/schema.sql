-- sql/schema.sql - Database schema for ViandaLibre

CREATE DATABASE IF NOT EXISTS viandalibre;

USE viandalibre;

CREATE TABLE viandas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    imagen VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(255) NOT NULL,
    viandas JSON NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    status ENUM('pendiente', 'preparando', 'listo', 'entregado') DEFAULT 'pendiente',
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO viandas (nombre, descripcion, precio, imagen) VALUES
('Vianda Clásica', 'Plato tradicional con carne, verduras y guarnición', 15.50, 'vianda1.jpg'),
('Vianda Vegetariana', 'Plato vegetariano con tofu y verduras frescas', 12.00, 'vianda2.jpg');
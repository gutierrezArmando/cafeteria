CREATE DATABASE IF NOT EXISTS cafeteria;
use cafeteria;
CREATE TABLE productos_menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    descripcion TEXT,
    precio DECIMAL(5, 2) NOT NULL,
    categoria ENUM('Cafe', 'Pastel', 'Bebida Fria', 'Otro') NOT NULL,
    imagen_url VARCHAR(255),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO productos_menu (nombre, descripcion, precio, categoria) VALUES
('Espresso Clásico', 'El corazón de todo, intenso y aromático.', 3.50, 'Cafe'),
('Latte Cremoso', 'Perfecta armonía de leche vaporizada y espresso.', 4.99, 'Cafe'),
('Pastel de Chocolate', 'El acompañamiento ideal para tu bebida.', 5.50, 'Pastel'),
('Cappuccino Clásico', 'Partes iguales de espresso, leche vaporizada y generosa espuma.', 4.50, 'Cafe'),
('Mocha con Crema Batida', 'Deliciosa combinación de espresso, chocolate y crema batida.', 5.99, 'Cafe'),
('Cheesecake de Frutos Rojos', 'Tarta de queso suave y cremosa con salsa de frutos rojos frescos.', 6.50, 'Pastel'),
('Americano', 'Doble shot de espresso diluido en agua caliente.', 3.00, 'Cafe'),
('Tarta de Zanahoria', 'Bizcocho especiado con nueces y glaseado de queso crema.', 5.75, 'Pastel');

INSERT INTO productos_menu (nombre, descripcion, precio, categoria, imagen_url) VALUES
('Espresso Clásico', 'El corazón de todo, intenso y aromático.', 3.50, 'Cafe','assets/images/expressoclasico.png'),
('Latte Cremoso', 'Perfecta armonía de leche vaporizada y espresso.', 4.99, 'Cafe','assets/images/lattecremoso.png'),
('Pastel de Chocolate', 'El acompañamiento ideal para tu bebida.', 5.50, 'Pastel','assets/images/pastelchocolate.png'),
('Cappuccino Clásico', 'Partes iguales de espresso, leche vaporizada y generosa espuma.', 4.50, 'Cafe','assets/images/cappuccino.png'),
('Mocha con Crema Batida', 'Deliciosa combinación de espresso, chocolate y crema batida.', 5.99, 'Cafe','assets/images/mocha.png'),
('Cheesecake de Frutos Rojos', 'Tarta de queso suave y cremosa con salsa de frutos rojos frescos.', 6.50, 'Pastel','assets/images/frutos.png'),
('Americano', 'Doble shot de espresso diluido en agua caliente.', 3.00, 'Cafe',''),
('Tarta de Zanahoria', 'Bizcocho especiado con nueces y glaseado de queso crema.', 5.75, 'Pastel','');

select * from productos_menu;



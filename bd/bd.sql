CREATE TABLE tbl_empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT,
    cedula VARCHAR(20),
    sexo VARCHAR(10),
    telefono VARCHAR(20),
    cargo VARCHAR(100),
    avatar VARCHAR(255)
);

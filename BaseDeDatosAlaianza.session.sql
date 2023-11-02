--@block
CREATE TABLE Asegurados(
    id INT AUTO_INCREMENT,
    Nombres VARCHAR(70) NOT NULL, 
    Apellido_Paterno VARCHAR(50) NOT NULL,
    APellido_Materno VARCHAR(50) NOT NULL,
    CI VARCHAR(8) NOT NULL,
    Fecha_de_nacimiento VARCHAR(10) NOT NULL,
    Domicilio VARCHAR(70) NOT NULL,
    Email VARCHAR(40) NOT NULL,
    Celular VARCHAR(8) NOT NULL,
    Teléfono VARCHAR(7) NOT NULL,
    NIT VARCHAR(11) NOT NULL,
    Seguros_id INT NOT NULL,
    Es_contratante BOOLEAN NOT NULL,
    Fecha_de_inicio VARCHAR(10) NOT NULL,
    Fecha_final VARCHAR(10) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (Seguros_id) REFERENCES Seguros(id)
);

--@block
CREATE TABLE Seguros(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(30) NOT NULL,
    Requisitos TEXT NOT NULL
);


--@block
INSERT INTO Seguros(Nombre, Requisitos)
VALUES
    ('Salud', 'Declaración de salud'),
    ('Automotor', 'U ruat'),
    ('Todo riesgo', 'Inventario'),
    ('Reponsabilidad civil', 'Datos personales'),
    ('Accidentes personales', 'Formulario de solicitud'),
    ('Caución', 'Datos personales')
;

--@block
INSERT INTO Asegurados(Nombres)
VALUES('/home/elkks/Documentos/"LIBROS DE PROGRA"/El-lenguaje-de-programacion-C-2-ed-kernighan-amp-ritchie.pdf');

--@block
DROP TABLE Asegurados;
DROP TABLE Seguros;

--@block
SELECT * FROM Asegurados;

--@block
SELECT * FROM Seguros;

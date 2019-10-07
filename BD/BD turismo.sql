CREATE DATABASE turismo;
use turismo;

CREATE TABLE Pueblos(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id),	
	nombrePueblo VARCHAR(50) NOT NULL,
	descripcion VARCHAR(255) NOT NULL,
	imagen VARCHAR(255) NOT NULL,
	coordenadas VARCHAR(255),
	idDepartamento int
);

#-----------------------------------------------------------------------------------------

CREATE TABLE MayorInformacion(
	idInformacion INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(idInformacion),
	idPueblo INT,
	hoteles VARCHAR(100),
	restaurantes VARCHAR(100)
);

#-----------------------------------------------------------------------------------------

CREATE TABLE Departamento(
	id INT(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	departamento VARCHAR(255)
);

#-----------------------------------------------------------------------------------------

INSERT INTO Pueblos(nombrePueblo, descripcion, imagen, coordenadas, idDepartamento) VALUES (
'Caqueza', 'Es un municipio colombiano del departamento de Cundinamarca, capital de la Provincia de Oriente, situado a 39 km al sur-oriente de Bogota', '4.jpg', '4.4036973,-73.9552282', 1), (
'Zipaquira', 'Es un municipio de Colombia ubicado en el departamento de Cundinamarca, en la provincia de Sabana Centro, de la que es la capital y sede de su diocesis', '5.jpg', '5.0215184,-74.0066581', 1), (
'Guatavita', ' Es un municipio colombiano del departamento de Cundinamarca, ubicado en la Provincia del Guavio, a 53 km al Nororiente de Bogota', '6.jpg', '4.9344976,-73.8380213', 1), (
'Bello', 'Pueblo Bello es uno de los 25 municipios colombianos que integran el Departamento del Cesar. Se encuentra sobre la Sierra Nevada de Santa Marta a una altitud', '7.jpg', '6.3319642,-75.5879613', 3);

INSERT INTO MayorInformacion(idPueblo, hoteles, restaurantes) VALUES (
1,'La puerta del llano', 'La pampa'), (
1, 'El parque', 'Maria E'), (
2, 'Camino de la sal', 'La cascada'), (
3, 'Laguna Guatavita', 'Montecillo'), (
4, 'Hotel bello', 'Guadalupe Mexican');

INSERT INTO Departamento (id, departamento) VALUES (
1, 'Cundinamarca'), (
2, 'Meta'), (
3, 'Antioquia'), (
4, 'Casanare');



CREATE DATABASE turismo;
use turismo;

CREATE TABLE Pueblos(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id),	
	nombrePueblo VARCHAR(50) NOT NULL,
	descripcion VARCHAR(255) NOT NULL,
	imagen VARCHAR(255) NOT NULL,
	coordenadas VARCHAR(255)
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

INSERT INTO Pueblos(nombrePueblo, descripcion, imagen, coordenadas) values (
'Caqueza', 'Es un municipio colombiano del departamento de Cundinamarca, capital de la Provincia de Oriente, situado a 39 km al sur-oriente de Bogotá', '4.jpg', '4.4036973,-73.9552282'), (
'Zipaquira', 'Es un municipio de Colombia ubicado en el departamento de Cundinamarca, en la provincia de Sabana Centro, de la que es la capital y sede de su diócesis', '5.jpg', '5.0215184,-74.0066581'), (
'Guatavita', ' Es un municipio colombiano del departamento de Cundinamarca, ubicado en la Provincia del Guavio, a 53 km al Nororiente de Bogotá', '6.jpg', '4.9344976,-73.8380213');

INSERT INTO MayorInformacion(idPueblo, hoteles, restaurantes) values (
1,'La puerta del llano', 'La pampa'), (
1, 'El parque', 'Maria E'), (
2, 'Camino de la sal', 'La cascada'), (
3, 'El dorado', 'El mecato'), (
4, 'Laguna Guatavita', 'Montecillo');




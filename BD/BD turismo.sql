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
'Bello', 'Pueblo Bello es uno de los 25 municipios colombianos que integran el Departamento del Cesar. Se encuentra sobre la Sierra Nevada de Santa Marta a una altitud', '7.jpg', '6.3319642,-75.5879613', 3), (
'Madrid', 'Madrid, cuyo nombre indigena es Sagasuca, llamado Serrezuela durante el Virreinato de la Nueva Granada y hasta 1875, es uno de los 116 municipios del departamento de Cundinamarca, Colombia. Se encuentra ubicado en la Provincia de Sabana Occidente, a 21 km de Bogota','8.jpg','4.7332635,-74.3002957', 1), (
'Mosquera','Es uno de los 116 municipios del departamento de Cundinamarca, Colombia. Se encuentra ubicado en la Provincia de Sabana Occidente, a 10 km de Bogota. Forma parte del area metropolitana de Bogota','9.jpg','4.6773156,-74.2994333',1), (
'Villavicencio','Es una ciudad del centro de Colombia, donde los Andes se juntan con la planicie de Los Llanos, al sureste de Bogota. Es conocida por la danza del joropo y el deporte vaquero del coleo','10.jpg','4.1247544,-73.6791007',2), (
'Guamal','Es un municipio de Colombia, situado en el departamento del Meta, al centro-este del pais. Limita al norte con el municipio de Acacias, al oriente con el municipio de Castilla La Nueva','11.jpg','3.8804755,-73.7786323',2), (
'Granada','El municipio esta conectado a la capital del pais, Santa Fe de Bogota a lo largo de una carretera de 180 km y 80 km de la capital regional Villavicencio. Es el segundo municipio mas turistico del departamento del Meta despues de Villavicencio y la segunda que mas recibe poblacion desplazada.','12.jpg','3.5448303,-73.7227911',2), (
'San rafael','A solo 2 horas y media de Medellin, en el oriente antioqueno se encuentra San Rafael, un pueblo de Antioquia, conocido tambien como la capital hidro-energetica de Colombia, pues alli se encuentran las hidroelectricas','13.jpg','6.2935444,-75.0373318',3), (
'Jardin','Puede ser uno de los pueblos mas romanticos en Antioquia, y no hay duda de ello, pues sus casas coloridas, sus parques adornados por grandes arboles florecidos, sus calles empedradas y su arquitectura le otorgan un ambiente bohemio dificil de igualar','14.jpg','5.5967883,-75.8281158',3), (
'Jerico','Se encuentra entre majestuosas montanas y una tranquila naturaleza, y a pesar de que este es uno de los pueblos de Antioquia mas coloridos y lindos que hay, se le suele relacionar unicamente al hecho de ser el pueblo natal de la Santa Madre Laura','15.jpg','5.7905231,-75.7876109',3), (
'Guatape','Es uno de los pueblos de Antioquia mas coloridos, sus casas se encuentran adornadas con zocalos, unas esculturas que exhiben todo tipo de representaciones, oficios tradicionales y lugares, obras de arte que antes tenian un objetivo: proteger las casas de la voracidad de las gallinas y de la humedad','16.jpg','6.2311481,-75.1625134',3);

INSERT INTO MayorInformacion(idPueblo, hoteles, restaurantes) VALUES (
1,'La puerta del llano', 'La pampa'), (
1, 'El parque', 'Maria E'), (
2, 'Camino de la sal', 'La cascada'), (
3, 'Laguna Guatavita', 'Montecillo'), (
4, 'Madrid nacional', 'Dabra burguers'), (
4, 'Vincci capitol', 'Bugambil'), (
4, 'Atocha', 'pimienta'), (
5, 'Carreta parrilla', 'Viyaje'), (
5, 'Fonda del sabor', 'S.J'), (
6, 'Cosmos', 'Metros'), (
7, 'Brazon', 'Grand villavicencio'), (
7, 'Cofradia', 'Estelar'), (
7, 'Limoncello', 'Plaza'), (
7, 'Posada del arriero', 'Hotel del llano'), (
8, 'El encanto', 'Talanquera'), (
8, 'El paraiso', 'Garcero'), (
9, 'Granada hotel', 'Sitio'), (
10, 'Hotel la roca', 'Perejil'), (
10, 'The best corner', 'Fonda'), (
10, 'Ecoarenal', 'Restaurante rafael'), (
11, 'Charco corazon', 'Consulado'), (
12, 'Las cometas', 'La gruta'), (
12, 'Apartahotel', 'Tomatitos'), (
13, 'Guatape hotel', 'La fogata'), (
13, 'Hotel real', 'Hecho con amor');

INSERT INTO Departamento (id, departamento) VALUES (
1, 'Cundinamarca'), (
2, 'Meta'), (
3, 'Antioquia'), (
4, 'Casanare');



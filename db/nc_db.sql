-- Crear esquema de la base de datos
CREATE SCHEMA IF NOT EXISTS newscrawler;

-- Seleccionar base de datos para su uso
USE newscrawler;

-- Crear tablas de la base de datos
CREATE TABLE IF NOT EXISTS table_users (
	id_user VARCHAR(5) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(20) NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	CONSTRAINT pk_user PRIMARY KEY (id_user)
);

CREATE TABLE IF NOT EXISTS table_rss (
	id_rss INT NOT NULL AUTO_INCREMENT,
	descripcion VARCHAR(50) NOT NULL,
	rss2categoria INT NOT NULL,
	url VARCHAR(100) NOT NULL,
	xml VARCHAR(100) NOT NULL,
	CONSTRAINT pk_rss PRIMARY KEY (id_rss),
	CONSTRAINT fk_rss_categoria FOREIGN KEY (rss2categoria) REFERENCES table_categorias (id_categoria)
);

CREATE TABLE IF NOT EXISTS table_user_feed (
	id_feed INT NOT NULL AUTO_INCREMENT,
	userfeed2user VARCHAR(5) NOT NULL,
	userfeed2rss INT NOT NULL,
	CONSTRAINT pk_tuserfeed PRIMARY KEY (id_feed),
	CONSTRAINT fk_userfeed_user FOREIGN KEY (userfeed2user) REFERENCES table_users(id_user),
	CONSTRAINT fk_userfeed_rss FOREIGN KEY (userfeed2rss) REFERENCES table_rss(id_rss)
);

CREATE TABLE IF NOT EXISTS table_categorias (
	id_categoria INT NOT NULL AUTO_INCREMENT,
	descripcipm VARCHAR(25) NOT NULL
	CONSTRAINT pk_categorias PRIMARY KEY (id_categoria)
);
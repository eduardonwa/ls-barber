USE barberos;

DROP TABLE IF EXISTS footer;
DROP TABLE IF EXISTS servicio;
DROP TABLE IF EXISTS beneficio;
DROP TABLE IF EXISTS testimonio;
DROP TABLE IF EXISTS reservacion;
DROP TABLE IF EXISTS heroe;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS negocio;
DROP TABLE IF EXISTS enlace_contacto;
DROP TABLE IF EXISTS horario;

CREATE TABLE horario (
    id INT AUTO_INCREMENT NOT NULL,
    dia VARCHAR(13),
    horario_abierto VARCHAR(13) NOT NULL,
    horario_cerrado VARCHAR(13) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_horario PRIMARY KEY (id)
);

INSERT INTO horario (dia, horario_abierto, horario_cerrado, create_time, update_time) VALUES
    ('lunes', '9:00 a.m', '5:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('martes', '9:00 a.m', '5:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('miércoles', '9:00 a.m', '5:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('jueves', '9:00 a.m', '5:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('viernes', '9:00 a.m', '5:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('sábado', '9:00 a.m', '3:00 p.m', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP()),
    ('domingo', 'cerrado', 'cerrado', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());

CREATE TABLE enlace_contacto (
    id INT AUTO_INCREMENT NOT NULL,
    contacto VARCHAR(21) NOT NULL,
    enlace VARCHAR(144),
    icono VARCHAR(144),
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_redes_sociales PRIMARY KEY (id)
);

INSERT INTO enlace_contacto (contacto, enlace, create_time) VALUES
    ('facebook', 'facebook.com', CURRENT_TIMESTAMP()),
    ('instagram', 'instagram.com', CURRENT_TIMESTAMP()),
    ('twitter', 'twitter.com', CURRENT_TIMESTAMP()),
    ('email', 'coelloweb@aol.com', CURRENT_TIMESTAMP());

CREATE TABLE negocio (
    id INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(89) NOT NULL,
    telefono VARCHAR(21) NOT NULL,
    email VARCHAR(55) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_negocio PRIMARY KEY (id)
);

INSERT INTO negocio (nombre, telefono, email, direccion, create_time) VALUES
    ('Barba(dos)', '3311382166', 'coelloweb@aol.com', 'rio balsas #718 colonia del valle', CURRENT_TIMESTAMP());

CREATE TABLE usuario (
    id INT AUTO_INCREMENT NOT NULL,
    usuario VARCHAR(55) NOT NULL,
    email VARCHAR(320) NOT NULL,
    palabra_magica VARCHAR(60) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_usuario PRIMARY KEY (id),
    UNIQUE KEY idx_user_email (email)
);

INSERT INTO usuario (usuario, email, palabra_magica, create_time) VALUES
    ('eduardocoello', 'coelloweb@aol.com', 'password', CURRENT_TIMESTAMP());

CREATE TABLE heroe (
    id INT AUTO_INCREMENT NOT NULL,
    encabezado VARCHAR(55) NOT NULL,
    descripcion VARCHAR(233) NOT NULL,
    cta_copy VARCHAR(55) NOT NULL,
    cta_enlace VARCHAR(144) NOT NULL,
    imagen VARCHAR(144) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_heroe PRIMARY KEY (id)
);

CREATE TABLE reservacion (
    id INT AUTO_INCREMENT NOT NULL,
    form_encabezado VARCHAR(89) NOT NULL,
    form_copy VARCHAR(255) NOT NULL,
    form_cta_copy VARCHAR(55) NOT NULL,
    form_cta_enlace VARCHAR(144) NOT NULL,
    microhistoria_copy_encabezado VARCHAR(89) NOT NULL,
    microhistoria_copy_descripcion TEXT NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_reservaciones PRIMARY KEY (id)
);

CREATE TABLE testimonio (
    id INT AUTO_INCREMENT NOT NULL,
    imagen VARCHAR(144) NOT NULL,
    encabezado VARCHAR(89),
    descripcion VARCHAR(144) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_testimonio PRIMARY KEY (id)
);

CREATE TABLE beneficio (
    id INT AUTO_INCREMENT NOT NULL,
    icono VARCHAR(500),
    encabezado VARCHAR(500),
    descripcion VARCHAR(500),
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_beneficio PRIMARY KEY (id)
);

CREATE TABLE servicio (
    id INT AUTO_INCREMENT NOT NULL,
    imagen VARCHAR(144) NOT NULL,
    encabezado VARCHAR(55),
    descripcion VARCHAR(144) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_servicio PRIMARY KEY (id)
);

CREATE TABLE footer (
    id INT AUTO_INCREMENT NOT NULL,
    encabezado VARCHAR(144) NOT NULL,
    create_time DATETIME,
    update_time DATETIME,
    CONSTRAINT pk_footer PRIMARY KEY (id)
);

CREATE DATABASE dbStabilimentiBalneari;
USE dbStabilimentiBalneari;
CREATE TABLE IF NOT EXISTS STABILIMENTO (
    CODSTB VARCHAR(10) NOT NULL,
    DENOMINAZIONE VARCHAR(30),
    INDIRIZZO VARCHAR(30),
    CITTA VARCHAR(30),
    CATEGORIA VARCHAR(30), 
    PRIMARY KEY (CODSTB)
) ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS SERVIZIO (
    CODSRV VARCHAR(10) NOT NULL,
    TARIFFA FLOAT(8,2),
    NOME VARCHAR(30),
    DESCRIZIONE VARCHAR(30),
    TIPOATT VARCHAR(30),
    DATAINIZIOATT DATETIME,
    DATAFINEATT DATETIME,
    PRIMARY KEY (CODSRV)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS Cliente(
    CODCLN int auto_increment,
    UserName Varchar(30) UNIQUE,
    UserPassword varchar(99),
    UserEmail varchar(255),
    PRIMARY KEY (CODCLN)
)ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS SPONSOR(
    CODSPS VARCHAR(10) NOT NULL,
    NOME VARCHAR(30), 
    PRIMARY KEY (CODSPS)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS AMMINISTRATORE(
    CODADM VARCHAR(10) NOT NULL,
    PASSWORD VARCHAR(30),
    CODSTB VARCHAR(10),
    PRIMARY KEY (CODADM),
    FOREIGN KEY(CODSTB) REFERENCES STABILIMENTO(CODSTB)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS OFFRE(
    CODSTB VARCHAR(10),
    CODSRV VARCHAR(10),
    FOREIGN KEY (CODSTB) REFERENCES STABILIMENTO(CODSTB),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS SPONSORIZZA(
    CODSRV VARCHAR(10),
    CODSPS VARCHAR(10),
    TIPOFINANZIAMENTO VARCHAR(30),
    FOREIGN KEY (CODSPS) REFERENCES SPONSOR(CODSPS),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS PRENOTA(
    CODSTB VARCHAR(10),
    CODSRV VARCHAR(10),
    CODCLN int,
    FOREIGN KEY (CODCLN) REFERENCES CLIENTE(CODCLN),
    FOREIGN KEY (CODSTB) REFERENCES STABILIMENTO(CODSTB),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS RECENSIONE(
    CODSTB VARCHAR(10),
    CODSRV VARCHAR(10),
    CODCLN int,
    VOTO INT,
    DESCRIZIONE VARCHAR(500),
    FOREIGN KEY (CODCLN) REFERENCES CLIENTE(CODCLN),
    FOREIGN KEY (CODSTB) REFERENCES STABILIMENTO(CODSTB),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
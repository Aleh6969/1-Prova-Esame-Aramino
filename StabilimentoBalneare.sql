CREATE DATABASE IF NOT EXISTS StabilimentoBalneare;
USE StabilimentoBalneare;
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
CREATE TABLE IF NOT EXISTS CLIENTE(
    CODCLN VARCHAR(10) NOT NULL,
    EMAIL VARCHAR(30),
    PASSWORD VARCHAR(30),
    PRIMARY KEY (CODCLN)
)ENGINE=INNODB;
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
    CODCLN VARCHAR(10),
    FOREIGN KEY (CODCLN) REFERENCES CLIENTE(CODCLN),
    FOREIGN KEY (CODSTB) REFERENCES STABILIMENTO(CODSTB),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS RECENSIONE(
    CODSTB VARCHAR(10),
    CODSRV VARCHAR(10),
    CODCLN VARCHAR(10),
    VOTO INT,
    DESCRIZIONE VARCHAR(500),
    FOREIGN KEY (CODCLN) REFERENCES CLIENTE(CODCLN),
    FOREIGN KEY (CODSTB) REFERENCES STABILIMENTO(CODSTB),
    FOREIGN KEY (CODSRV) REFERENCES SERVIZIO(CODSRV)
)ENGINE=INNODB;
INSERT INTO STABILIMENTO VALUES('STBxxxxxx1', 'stabilimento 1',  'via Roma 8', 'Roma', '3');
INSERT INTO STABILIMENTO VALUES('STBxxxxxx2', 'stabilimento 2',  'via Roma 8', 'Genova', '3');
INSERT INTO STABILIMENTO VALUES('STBxxxxxx3', 'stabilimento 3',  'via Torino 8', 'Genova', '3');
insert into cliente values ('CLNxxxxxx1', 'email@mail.com', '123456');
insert into servizio(codsrv, tariffa, nome, descrizione) values ('SRVxxxxxx1', 12.50, 'servizio 1', 'ristorazione');
insert into servizio(codsrv, tariffa, nome, descrizione) values ('SRVxxxxxx2', 12.50, 'servizio 2', 'ristorazione');
insert into servizio(codsrv, tariffa, nome, descrizione) values ('SRVxxxxxx3', 12.50, 'servizio 3', 'ristorazione');
insert into servizio(codsrv, tariffa, nome, descrizione) values ('SRVxxxxxx4', 12.50, 'servizio 4', 'ombrelloni');
INSERT into offre values ('STBxxxxxx1', 'SRVxxxxxx1'), ('STBxxxxxx1', 'SRVxxxxxx2'), ('STBxxxxxx2', 'SRVxxxxxx3');
insert into recensione values('STBxxxxxx1', 'SRVxxxxxx1', 'CLNxxxxxx1', 3, 'Ci sta');
insert into recensione values('STBxxxxxx2', 'SRVxxxxxx1', 'CLNxxxxxx1', 3, 'Ci sta');
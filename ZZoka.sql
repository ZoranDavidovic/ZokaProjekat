

 

CREATE TABLE Rola (
  RolaId int(11) NOT NULL AUTO_INCREMENT,
  NazivRole varchar(50) DEFAULT NULL,
  PRIMARY KEY (RolaId)
);

CREATE TABLE Korisnik (
  KorisnikId int(11) NOT NULL AUTO_INCREMENT,
  KorisnickoIme varchar(50) DEFAULT NULL,
  Sifra varchar(255) DEFAULT NULL,
  RolaId int(11) DEFAULT NULL,
  PRIMARY KEY (KorisnikId),
  FOREIGN KEY (RolaId) REFERENCES Rola(RolaId)
 


);

CREATE TABLE Radnik (
  RadnikId int(11) NOT NULL AUTO_INCREMENT,
  Ime varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  Prezime varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  BrojTelefona varchar(50) DEFAULT NULL,
  Adresa varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  Grad varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  Email varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  JMBG varchar(13) DEFAULT NULL,
  KorisnikId int(11) DEFAULT NULL,
  PRIMARY KEY (RadnikId),
  FOREIGN KEY (KorisnikId)
  REFERENCES Korisnik(KorisnikId)
);



  CREATE TABLE Racun (
  RacunId int(11) NOT NULL AUTO_INCREMENT,
  RadnikIzdao int(11) DEFAULT NULL,
  DatumRacuna datetime DEFAULT NULL,
  BrojRacuna varchar(30) DEFAULT NULL,
  UkupniIznos decimal(18,2) DEFAULT NULL,
  IznosPDV decimal(18,2) DEFAULT NULL,
  IznosBezPDV decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (RacunId),
  FOREIGN KEY (RadnikIzdao)
  REFERENCES Radnik(RadnikId)
  );

 

  CREATE TABLE Artikal (
  ArtikalId int(11) NOT NULL AUTO_INCREMENT,
  Sifra varchar(50) DEFAULT NULL,
  Naziv varchar(50)   DEFAULT NULL,
  JedinicaMjere char(3) DEFAULT NULL,
  Barkod varchar(50) DEFAULT NULL,
  PLU_KOD varchar(10) DEFAULT NULL,
  PRIMARY KEY (ArtikalId)
);

  CREATE TABLE Lager (
  LagerId int(11) NOT NULL AUTO_INCREMENT,
  ArtikalId int(11) DEFAULT NULL,
  RaspolozivaKolicina decimal(18,2) DEFAULT NULL,
  Lokacija varchar(50) DEFAULT NULL,
  PRIMARY KEY (LagerId),
  FOREIGN KEY (ArtikalId)
  REFERENCES Artikal(ArtikalId)
  ); 

  CREATE TABLE RacunStavka (
  RacunId int(11) DEFAULT NULL,
  StavkaId int(11) NOT NULL AUTO_INCREMENT,
  ArtikalId int(11) DEFAULT NULL,
  Kolicina decimal(18,2) DEFAULT NULL,
  Cijena decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (StavkaId,RacunId),
  FOREIGN KEY (RacunId)
  REFERENCES Racun(RacunId),
  FOREIGN KEY (ArtikalId)
  REFERENCES Artikal(ArtikalId)
  
  );
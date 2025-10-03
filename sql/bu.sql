mysql -u root -p;
CREATE DATABASE rental_mobil;
use rental_mobil;

CREATE TABLE mobil_baru(
	kode_mobil CHAR(3) PRIMARY KEY,
	nopol VARCHAR(20),
	jenis_mobil VARCHAR(20),
	harga DOUBLE NOT NULL
);

ALTER Table mobil_baru MODIFY nopol VARCHAR(20) UNIQUE; 

INSERT INTO mobil_baru (kode_mobil, nopol, jenis_mobil, harga) VALUES 
	('M01','B 1234 KO','sedan',600000),
	('M02','B 4321 BL','mini bus',50000),
	('M03','B 6789 MH','mini bus',50000),
	('M04','B 9876 MN','mini bus',450000),
	('M05','B 3333 SS','mini bus',6000000);

CREATE TABLE penyewa(
	no_ktp CHAR(16) PRIMARY KEY,
	nama VARCHAR(40),
	jk ENUM('L','P'),
	kontak VARCHAR(13),
	alamat text
);

INSERT INTO penyewa (no_ktp, nama, jk, kontak, alamat) VALUES 
	('320616880124001','dania','P','081223456654','Ciamis'),
	('320616880124002','dani','L','081223456652','Ciamis'),
	('320616880124003','ulfa','P','081223456653','Tasikmalaya');

//menambahakan yang di bawah akan error karena perempuan tidak di fefinisikan atau tercantum
//karena jk hanya menerima L dan P yang sudah di definisikan sebelumnya P(perempuan) dam L(laki-laki);
INSERT INTO penyewa (no_ktp, nama, jk, kontak, alamat) VALUES 
	('320616880124004','jesica','Perempuan','081223456654','Ciamis');

CREATE TABLE penyewaan(
	notrans VARCHAR(10) PRIMARY KEY,
	no_ktp CHAR(16),
	kode_mobil CHAR(3),
	Tgl_sewa DATE,
	tgl_kembali DATE,
	lama_sewa INT(11) MULTIPEL,
	CONSTRAINT fk_no_ktp FOREIGN KEY  (no_ktp) REFERENCES penyewa(no_ktp)
		ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_mobil_baru FOREIGN KEY  (kode_mobil) REFERENCES mobil_baru(kode_mobil)
		ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO penyewaan (notrans, no_ktp, kode_mobil, tgl_sewa, tgl_kembali, lama_sewa) VALUES
	('TRS001','320616880124001','M01','2022-01-14','2022-01-16',2),
	('TRS002','320616880124002','M02','2022-01-18','2022-01-21',3),
	('TRS003','320616880124003','M03','2022-01-17','2022-01-21',4);


// ini akan error?
INSERT INTO penyewaan (notrans, no_ktp, kode_mobil, tgl_sewa, tgl_kembali, lama_sewa) VALUES
	('TRS004','320616880124005','M05','2022-01-15','2022-01-17',2);

SELECT*FROM penyewa;
SELECT*FROM penyewaan;

DELETE FROM penyewa WHERE no_ktp='320616880124001';

ALTER Table mobil_baru MODIFY 



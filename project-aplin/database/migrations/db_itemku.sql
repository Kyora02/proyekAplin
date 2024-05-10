CREATE DATABASE IF NOT EXISTS db_itemku;

USE db_itemku;

CREATE TABLE Barang (
    Id_barang INT PRIMARY KEY AUTO_INCREMENT,
    Nama_barang VARCHAR(255),
    Harga_barang DECIMAL(10, 2),
    id_kategori INT,
    FOREIGN KEY (id_kategori) REFERENCES Kategori(Id_kategori)
);


CREATE TABLE Users (
    Id_user INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255),
    Password VARCHAR(255)
);

CREATE TABLE Kategori (
    Id_kategori INT PRIMARY KEY AUTO_INCREMENT,
    nama_kategori VARCHAR(255)
);

CREATE TABLE Transaksi (
    Id_transaksi INT PRIMARY KEY AUTO_INCREMENT,
    Tanggal_transaksi DATE,
    Promo INT,
    jenis_transaksi VARCHAR(255),
    FOREIGN KEY (Promo) REFERENCES Promo(Id_promo)
);

CREATE TABLE Promo (
    Id_promo INT PRIMARY KEY AUTO_INCREMENT,
    Nama_promo VARCHAR(255),
    Jenis_promo VARCHAR(255),
    Nilai_promo DECIMAL(10, 2)
);

CREATE TABLE Influencer (
    Id_influencer INT PRIMARY KEY AUTO_INCREMENT,
    Nama_influencer VARCHAR(255),
    platform VARCHAR(255)
);

CREATE TABLE Transaksi_Jual_Beli (
    id_transaksi_trade INT PRIMARY KEY AUTO_INCREMENT,
    id_barang INT,
    id_user INT,
    jumlah_akun INT,
    Tanggal_transaksi DATE,
    FOREIGN KEY (id_barang) REFERENCES Barang(Id_barang),
    FOREIGN KEY (id_user) REFERENCES Users(Id_user)
);

CREATE TABLE Transaksi_Top_Up (
    id_transaksi_topup INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
    game_name VARCHAR(255),
    jumlah_topup INT,
    Tanggal_transaksi DATE,
    FOREIGN KEY (id_user) REFERENCES Users(Id_user)
);

CREATE TABLE Transaksi_Promosi (
    id_transaksi_promosi INT PRIMARY KEY AUTO_INCREMENT,
    id_influencer INT,
    id_promo INT,
    tanggal_transaksi DATE,
    id_user INT,
    FOREIGN KEY (id_influencer) REFERENCES Influencer(Id_influencer),
    FOREIGN KEY (id_promo) REFERENCES Promo(Id_promo),
    FOREIGN KEY (id_user) REFERENCES Users(Id_user)
);

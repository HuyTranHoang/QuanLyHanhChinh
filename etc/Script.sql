DROP DATABASE IF EXISTS QuanLyHanhChinh;
CREATE DATABASE QuanLyHanhChinh;

Use QuanLyHanhChinh;

DROP TABLE IF EXISTS PhongBan;
CREATE TABLE PhongBan
(
    maPhong  INT AUTO_INCREMENT,
    tenPhong NVARCHAR(30) NOT NULL,
    vietTat  NVARCHAR(30) NOT NULL,
    ghiChu   NVARCHAR(30) NOT NULL,
    PRIMARY KEY (maPhong)
);

DROP TABLE IF EXISTS ChucVu;
CREATE TABLE ChucVu
(
    maCV   INT AUTO_INCREMENT,
    chucVu NVARCHAR(30) NOT NULL,
    PRIMARY KEY (macv)
);

DROP TABLE IF EXISTS NhanVien;
CREATE TABLE NhanVien
(
    maNV     INT AUTO_INCREMENT,
    tenNV    NVARCHAR(50) NOT NULL,
    userName  NVARCHAR(20) NOT NULL,
    password NVARCHAR(30) NOT NULL,
    maPhong  INT          NOT NULL,
    gioiTinh BIT          NOT NULL,
    ngaySinh DATE         NOT NULL,
    maCV     INT,
    FOREIGN KEY (maPhong) REFERENCES PhongBan (maPhong),
    FOREIGN KEY (maCV) REFERENCES ChucVu (maCV),
    PRIMARY KEY (maNV)
);

DROP TABLE IF EXISTS TongNgayNghi;
CREATE TABLE TongNgayNghi
(
    maPhep        INT AUTO_INCREMENT,
    maNV          INT,
    soNgayHienTai INT          NOT NULL,
    tongSoNgay    INT          NOT NULL,
    nam           INT          NOT NULL,
    ghiCHU        NVARCHAR(30) NOT NULL,
    FOREIGN KEY (maNV) REFERENCES nhanvien (maNV),
    PRIMARY KEY (maPhep)
);
DROP TABLE IF EXISTS PhieuNghi;
CREATE TABLE PhieuNghi
(
    maPhieu     INT AUTO_INCREMENT,
    maNV        INT           NOT NULL,
    tongSoNgay  INT           NOT NULL,
    tu_buoi     NVARCHAR(20)  NOT NULL,
    den_buoi    NVARCHAR(20)  NOT NULL,
    tu_ngay     DATE          NOT NULL,
    den_ngay    DATE          NOT NULL,
    loaiPhep    INT           NOT NULL,
    ghiChu      NVARCHAR(100) NOT NULL,
    nguoi_duyet INT,
    trang_thai  INT           NOT NULL,
    ngay_duyet  DATE          NOT NULL,
    FOREIGN KEY (maNV) REFERENCES nhanvien (maNV),
    PRIMARY KEY (maPhieu)
);


CREATE INDEX ix_maCV ON NhanVien (maCV);
CREATE INDEX ix_maNV ON TongNgayNghi (maNV);
CREATE INDEX ix_maNV ON PhieuNghi (maNV);


INSERT INTO `nhanvien` (`maNV`, `tenNV`, `userName`, `password`, `maPhong`, `gioiTinh`, `ngaySinh`, `maCV`)
VALUES (NULL, 'Trần Hoàng Huy', 'HuyTH', '123@abc', '1', b'1', '1995-12-20', '1');
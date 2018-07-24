/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/20/2018 9:54:06 AM                         */
/*==============================================================*/


drop table if exists BUKU;

drop table if exists DETAIL_TRANSAKSI;

drop table if exists KARYAWAN;

drop table if exists KATEGORI;

drop table if exists PENERBIT;

drop table if exists PENULIS;

drop table if exists TRANSAKSI;

/*==============================================================*/
/* Table: BUKU                                                  */
/*==============================================================*/
create table BUKU
(
   ID_BUKU              varchar(5) not null,
   ID_PENERBIT          varchar(5) not null,
   ID_KATEGORI          varchar(5) not null,
   ID_DETAIL_TRANSAKSI  varchar(5),
   ID_PENULIS           varchar(5) not null,
   JUDUL                varchar(30),
   TAHUN_TERBIT         date,
   TGL_MASUK            datetime,
   STOK                 int,
   RAK_BUKU             varchar(2),
   HARGA                bigint,
   primary key (ID_BUKU)
);

/*==============================================================*/
/* Table: DETAIL_TRANSAKSI                                      */
/*==============================================================*/
create table DETAIL_TRANSAKSI
(
   ID_DETAIL_TRANSAKSI  varchar(5) not null,
   ID_TRANSAKSI         varchar(5) not null,
   primary key (ID_DETAIL_TRANSAKSI)
);

/*==============================================================*/
/* Table: KARYAWAN                                              */
/*==============================================================*/
create table KARYAWAN
(
   ID_KARYAWAN          varchar(5) not null,
   NAMA                 varchar(30),
   ALAMAT               varchar(30),
   NO_TELP              varchar(13),
   primary key (ID_KARYAWAN)
);

/*==============================================================*/
/* Table: KATEGORI                                              */
/*==============================================================*/
create table KATEGORI
(
   ID_KATEGORI          varchar(5) not null,
   KATEGORI             varchar(30),
   primary key (ID_KATEGORI)
);

/*==============================================================*/
/* Table: PENERBIT                                              */
/*==============================================================*/
create table PENERBIT
(
   ID_PENERBIT          varchar(5) not null,
   PENERBIT             varchar(30),
   primary key (ID_PENERBIT)
);

/*==============================================================*/
/* Table: PENULIS                                               */
/*==============================================================*/
create table PENULIS
(
   ID_PENULIS           varchar(5) not null,
   PENULIS              varchar(30),
   primary key (ID_PENULIS)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         varchar(5) not null,
   ID_KARYAWAN          varchar(5) not null,
   TGL_TRANSAKSI        datetime,
   TOTAL                bigint,
   primary key (ID_TRANSAKSI)
);

alter table BUKU add constraint FK_MEMILIKI foreign key (ID_KATEGORI)
      references KATEGORI (ID_KATEGORI) on delete restrict on update restrict;

alter table BUKU add constraint FK_MENERBITKAN foreign key (ID_PENERBIT)
      references PENERBIT (ID_PENERBIT) on delete restrict on update restrict;

alter table BUKU add constraint FK_MENULIS foreign key (ID_PENULIS)
      references PENULIS (ID_PENULIS) on delete restrict on update restrict;

alter table BUKU add constraint FK_RELATIONSHIP_6 foreign key (ID_DETAIL_TRANSAKSI)
      references DETAIL_TRANSAKSI (ID_DETAIL_TRANSAKSI) on delete restrict on update restrict;

alter table DETAIL_TRANSAKSI add constraint FK_RELATIONSHIP_5 foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MELAKUKAN foreign key (ID_KARYAWAN)
      references KARYAWAN (ID_KARYAWAN) on delete restrict on update restrict;


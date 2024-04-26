
use sib6;

-- Menampilkan Data product dari termahal --
select * from produk order by harga_jual desc;

-- menampilkan data kode, nama, 
Select kode, nama, tmp_lahir, tgl_lahir from pelanggan;

-- menampilkan data product dimana tidak menampilkan data berawalan huruf M --
SELECT * FROM produk where kode not like 'M%';

-- menampilkan data product televisi --
select * from produk where nama like  'televisi%';

-- menampilkan data pelanggan yang mengandung huruf SA --
select * from pelanggan where nama like '%sa%';

-- menampilkan data pelanggan yang lahirnya bukan di jakarta dan mengandung huruf 'YO'--
select * from pelanggan where tmp_lahir not like '%jakarta%' AND nama like '%yo%';

-- menampilkan data pelanggan yang karakter huruf ke 2 nya adalah A --
select * from pelanggan where nama like '_A%';

-- menampilkan data harga barang dari yang paling mahal 2 data yang diambil --
select * from produk order by harga_jual desc limit 2;

-- menampilkan data produk dengan harga yang paling murah --
select min(harga_jual) as harga_yang_paling_murah, nama from produk;

-- menampilkan data produk yang stoknya paling banyak --
select max(stok) as "Data Produk dengan stok paling banyak", nama from produk;

-- menampilkan data produk dengan stok paling sedikit dan tampilkan maksimal 2 data --
select min(stok) as "Data produk dengan stok paling sedikit", nama from produk group by nama limit 2;

-- menampilkan data pelanggan yang termuda --
select max(tgl_lahir) as "Tanggal Lahir Pelanggan termuda", nama as "Nama Pelanggan"  from pelanggan; 

-- menampilkan data pelangan yang tertua --
select min(tgl_lahir) as "Tanggal lahir pelanggan tertua", nama as "Nama Pelanggan" from pelanggan;
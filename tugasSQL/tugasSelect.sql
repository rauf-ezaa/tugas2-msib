-- TUGAS 2 SQL --
use sib6;

-- 3.2 --
 SELECT COUNT(*) AS total_pelanggan_1998 FROM pelanggan WHERE YEAR(tgl_lahir) = 1998;

-- jumlah pelanggan perempuan yang lahirnya di jakarta --
select count(*) as "Jumlah pelanggan perempuan yang lahir di jakarta " from pelanggan where tmp_lahir = "jakarta";

-- jumlah total stok semua produk dengan harga jual dibawah 10 rb --
select sum(stok) as "total stok barang dengan harga jual dibawah 10 rb" from produk where harga_jual < 10000;

-- jumlah barang yang memiliki huruf awalan K --
select count(*) as "jumlah barang dengan huruf K" from produk where nama like 'K_%';

-- rata rata harga jual barang diatas 1 juta -- 
select avg(harga_jual) as "rata-rata harga barang yang dijual dengan harga 1 juta" from produk where harga_jual > 1000000;

-- Tampilkan jumlah stok yang paling besar --
select max(stok) as "jumlah stok", nama as "nama produk dengan stok terbanyak" from produk limit 1;

-- Ada berapa produk yang stoknya kurang dari minimal stok --
select * from produk;

select count(*) as "Total produk dengan jumlah stok dibawah minimal stok" from produk where stok < min_stok;

-- jumlah asset disini saya menghitung jumlah barang dan jumlah harga nya --
select sum(harga_beli * stok) as "Total harga Asset", sum(stok) as "jumlah stok" from produk; 

-- 3.3 --
-- Tampilkan data produk : id, nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi ‘segera belanja’ jika tidak ‘stok aman’--
select id, nama, stok, case when stok < min_stok then "segera belanja" else "Stok Aman" end as informasi from produk;

-- Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 → ‘muda’ , 17-55 → ‘Dewasa’, selainnya ‘Tua’ --
select id, nama, tgl_lahir, 
case WHEN YEAR(CURDATE()) - YEAR(tgl_lahir) < 17 THEN 'muda'  
WHEN YEAR(CURDATE()) - YEAR(tgl_lahir) BETWEEN 17 AND 55 THEN 'Dewasa' 
ELSE 'Tua' END AS kategori_umur 
FROM pelanggan;

-- Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘TV01’ →’DVD Player’ , ‘K001’ → ‘Rice Cooker’ selain dari diatas ‘Tidak Ada’ --
SELECT id, kode AS kode, nama,
    CASE
    WHEN kode = 'TV01' THEN 'DVD Player'
    WHEN kode = 'K001' THEN 'Rice Cooker'
    ELSE 'Tidak Ada'
    END AS bonus
    FROM produk;
    
-- Tampilkan data statistik jumlah tempat lahir pelanggan--
    SELECT tmp_lahir, COUNT(*) AS jumlah_pelanggan FROM pelanggan GROUP BY tmp_lahir ORDER BY jumlah_pelanggan DESC;

-- Tampilkan jumlah statistik produk berdasarkan jenis produk --
SELECT jenis_produk_id, COUNT(*) AS jumlah_produk FROM produk GROUP BY jenis_produk_id;

-- Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan -- 

	SELECT id, nama, YEAR(CURDATE()) - YEAR(tgl_lahir) AS usia FROM pelanggan
    WHERE YEAR(CURDATE()) - YEAR(tgl_lahir) < (
    SELECT AVG(YEAR(CURDATE()) - YEAR(tgl_lahir))
    FROM pelanggan);
    
-- Tampilkan data produk yang harganya diatas rata-rata harga produk--
	SELECT id, nama, harga_beli, harga_jual
		FROM produk
		WHERE harga_jual > (
		SELECT AVG(harga_jual)
		FROM produk);
        
-- Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb --
	SELECT * FROM pelanggan
		WHERE kartu_id IN (
		SELECT id
		FROM kartu
		WHERE iuran > 90000 );

-- Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan --
	 SELECT COUNT(*) AS jumlah_produk,
		AVG(harga_jual) AS rata_rata_harga_jual
		FROM produk
		WHERE harga_jual < (
		SELECT AVG(harga_jual)
		FROM produk
		);
        
-- Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3% --
SELECT * FROM pelanggan
		WHERE kartu_id IN (
		SELECT id
		FROM kartu
		WHERE diskon > 0.03
		);

<?php
// Definisikan kelas produk
class produk {
    private $id;
    private $nama;
    private $harga;
    private $deskripsi;

    public function __construct($id, $nama, $harga, $deskripsi) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }
    public function tampilkan() {
        echo "<h2>{$this->nama}<?h2>";
        echo "<p>{$this->deskripsi}</p>";
        echo "<p>Harga: Rp{$this->harga}</p>";
    }
}

// Definisikan kelas barang belanja\
class keranjang {
    private $produk = [];

    public function tambahProduk(produk $produk, $jumlah) {
        $this->produk[] = ['produk' => $produk, 'jumlah' => $jumlah];
    }

    public function tampilkan() {
        foreach ($this->produk as $item) {
            $item['produk']->tampilkan();
            echo "<p>jumlah: {$item['jumlah']}</p>";
            echo "<hr>";
        }
    }
}

// Contoh penggunaan
$produk1 = new produk(1, 'kemeja', 150000, 'kemeja lengan panjang dengan motif koktak-kotak.');
$produk2 = new produk(2, 'celana jeans', 250000, 'celana jeans slim fit dengan bahan denim berkualitas.');

$keranjang = new keranjang();
$keranjang->tambahProduk($produk1, 2);
$keranjang->tambahProduk($produk2, 1);

$keranjang->tampilkan();
?>
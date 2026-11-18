
<?php

// ======================================================
// LAB 2 — CLASS, OBJECT, DAN CONSTRUCTOR
// ======================================================

// Spesifikasi:
// Mahasiswa(string $nim, string $nama, string $prodi, float $ipk)
//     info(): string
//     predikat(): string
//
// Produk(string $nama, int $harga, int $stok)
//     totalNilai(): int


// ======================================================
// CLASS MAHASISWA
// ======================================================

class Mahasiswa
{
    // Atribut mahasiswa
    private string $nim;
    private string $nama;
    private string $prodi;
    private float $ipk;

    // Constructor
    public function __construct(
        string $nim,
        string $nama,
        string $prodi,
        float $ipk
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    // Menampilkan informasi mahasiswa
    public function info(): string
    {
        return
            "NIM   : {$this->nim}\n" .
            "Nama  : {$this->nama}\n" .
            "Prodi : {$this->prodi}\n" .
            "IPK   : " . number_format($this->ipk, 2);
    }

    // Menentukan predikat berdasarkan IPK
    public function predikat(): string
    {
        if ($this->ipk >= 3.51) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.01) {
            return "Sangat Memuaskan";
        } else {
            return "Memuaskan";
        }
    }
}


// ======================================================
// CLASS PRODUK
// ======================================================

class Produk
{
    // Atribut produk
    private string $nama;
    private int $harga;
    private int $stok;

    // Constructor
    public function __construct(
        string $nama,
        int $harga,
        int $stok
    ) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Menghitung total nilai produk
    public function totalNilai(): int
    {
        return $this->harga * $this->stok;
    }
}


// ======================================================
// MEMBUAT 3 OBJECT MAHASISWA
// ======================================================

$mahasiswa1 = new Mahasiswa(
    "230001",
    "Andi Pratama",
    "Pendidikan Teknologi Informasi",
    3.85
);

$mahasiswa2 = new Mahasiswa(
    "230002",
    "Budi Santoso",
    "Pendidikan Teknologi Informasi",
    3.45
);

$mahasiswa3 = new Mahasiswa(
    "230003",
    "Citra Amelia",
    "Pendidikan Teknologi Informasi",
    3.00
);


// ======================================================
// MENAMPILKAN INFORMASI MAHASISWA
// ======================================================

$daftarMahasiswa = [
    $mahasiswa1,
    $mahasiswa2,
    $mahasiswa3
];

echo "<h2>DATA MAHASISWA</h2>";

foreach ($daftarMahasiswa as $index => $mahasiswa) {

    echo "<h3>Mahasiswa " . ($index + 1) . "</h3>";

    echo "<pre>";
    echo htmlspecialchars($mahasiswa->info());
    echo "</pre>";

    echo "Predikat : " . $mahasiswa->predikat();

    echo "<hr>";
}


// ======================================================
// MEMBUAT OBJECT PRODUK
// ======================================================

$produk1 = new Produk(
    "Laptop",
    7500000,
    5
);


// ======================================================
// MENGHITUNG DAN MENAMPILKAN TOTAL NILAI PRODUK
// ======================================================

echo "<h2>DATA PRODUK</h2>";

echo "Nama Produk : Laptop<br>";
echo "Harga       : Rp 7.500.000<br>";
echo "Stok        : 5<br>";

echo "Total Nilai : Rp " .
    number_format($produk1->totalNilai(), 0, ',', '.');

?>

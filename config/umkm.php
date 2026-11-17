<?php

/*
 | Data UMKM Mandiri Laras Production.
 | Ubah isi file ini untuk memperbarui konten website (tanpa menyentuh Blade).
 */
return [
    'nama' => 'Mandiri Laras Production',
    'tagline' => 'Pengrajin angklung bambu dari Kemutug Lor, Baturraden',
    'pemilik' => 'Bapak Tegar',
    'alamat' => 'Gg. Delima, Dusun II Dukuh, Kemutug Lor, Kec. Baturraden, Kabupaten Banyumas, Jawa Tengah 53151',
    'patokan' => 'Dekat Farid Calung, di bawah Star View Café; dari Pridaf Fotocopy masuk gang ke arah barat sekitar 100 m (RT 06 RW 05).',

    'wa_display' => '0815 7730 979',
    'wa_number' => '628157730979', // format internasional untuk tautan wa.me
    // Media sosial: ubah nama & URL di sini
    'sosmed' => [
        ['nama' => 'Instagram', 'akun' => '@tega_putra_anugrah', 'url' => 'https://instagram.com/tega_putra_anugrah', 'ikon' => 'instagram'],
        ['nama' => 'Facebook', 'akun' => 'Tegar Putra Anugrah', 'url' => 'https://www.facebook.com/share/1KhETbMto1/', 'ikon' => 'facebook'],
    ],

    'statistik' => [
        ['angka' => '3–4', 'label' => 'hari pengerjaan per set'],
        ['angka' => '4', 'label' => 'set alat musik per bulan'],
        ['angka' => 'Jawa–Afrika', 'label' => 'jangkauan pengiriman'],
    ],

    // Produk utama: angklung
    'angklung' => [
        'deskripsi' => 'Alat musik bambu yang dibunyikan dengan digoyangkan. Setiap angklung dibuat satu per satu dari bambu pilihan, lalu dilaras hingga suaranya terjaga.',
        'harga' => 'Rp700.000 – Rp800.000',
        'satuan' => 'per set',
        'catatan' => 'Harga dapat berbeda sesuai spesifikasi pesanan. Hubungi kami untuk penawaran.',
        'keunggulan' => [
            'Dibuat manual dari bambu pilihan',
            'Nada dilaras satu per satu',
            'Pesanan disesuaikan kebutuhan Anda',
            'Dikirim ke seluruh Indonesia, bahkan sampai Afrika',
        ],
    ],

    'proses' => [
        ['judul' => 'Memilih bambu', 'isi' => 'Bambu berkualitas dipilih dan dipesan dalam jumlah 60–100 batang sekali beli.'],
        ['judul' => 'Memotong & membentuk', 'isi' => 'Batang bambu dipotong dan dibentuk menjadi tabung-tabung nada.'],
        ['judul' => 'Melaras nada', 'isi' => 'Setiap tabung disetel hingga nadanya selaras satu sama lain.'],
        ['judul' => 'Merangkai & finishing', 'isi' => 'Tabung dirangkai pada rangka, dirapikan, lalu siap dikirim.'],
    ],

    'target' => ['Sanggar seni & budaya', 'Sekolah & SMKI', 'Seniman & kolektor', 'Wisatawan', 'Pembeli luar negeri'],
];

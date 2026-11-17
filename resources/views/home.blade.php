@extends('layouts.app')

@section('title', $umkm['nama'].' — Pengrajin Angklung Bambu Banyumas')

@php
    $wa = 'https://wa.me/'.$umkm['wa_number'].'?text='.rawurlencode('Halo '.$umkm['nama'].', saya ingin bertanya/memesan angklung.');
@endphp

@section('content')
<header class="nav" id="top">
    <div class="wrap nav__in">
        <a href="#top" class="brand">
            @include('partials.angklung-icon')
            <span>Mandiri Laras</span>
        </a>
        <button class="nav__toggle" aria-label="Menu" aria-expanded="false">☰</button>
        <nav class="nav__links" id="menu">
            <a href="#tentang">Tentang</a>
            <a href="#angklung">Angklung</a>
            <a href="#proses">Proses</a>
            <a href="#galeri">Galeri</a>
            <a href="#kontak" class="btn btn--sm">Pesan</a>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="wrap hero__in">
        <div class="hero__text">
            <p class="eyebrow">Kemutug Lor · Baturraden · Banyumas</p>
            <h1>Angklung bambu buatan tangan, <em>dilaras dengan sepenuh hati.</em></h1>
            <p class="lead">{{ $umkm['nama'] }} membuat angklung bambu tradisional untuk sanggar, sekolah, seniman, hingga pembeli dari luar negeri.</p>
            <div class="hero__cta">
                <a href="{{ $wa }}" class="btn" target="_blank" rel="noopener">Pesan lewat WhatsApp</a>
                <a href="#angklung" class="btn btn--ghost">Lihat produk</a>
            </div>
        </div>
        <figure class="hero__img">
            <img src="{{ asset('images/bahan-angklung.jpg') }}" alt="Batang bambu tersusun dan angklung dalam proses pembuatan di bengkel Mandiri Laras">
        </figure>
    </div>
    <div class="wrap stats">
        @foreach ($umkm['statistik'] as $s)
            <div><strong>{{ $s['angka'] }}</strong><span>{{ $s['label'] }}</span></div>
        @endforeach
    </div>
</section>

<section class="sec" id="tentang">
    <div class="wrap split">
        <figure class="split__img">
            <img src="{{ asset('images/bengkel.jpg') }}" alt="Pak Tegar menjelaskan proses pembuatan alat musik bambu kepada pengunjung di bengkelnya" loading="lazy">
        </figure>
        <div>
            <p class="eyebrow">Tentang Kami</p>
            <h2>Dari belajar bersama saudara, kini berdiri sendiri</h2>
            <p>Usaha ini dirintis oleh {{ $umkm['pemilik'] }}, yang awalnya membantu saudaranya membuat kerajinan bambu dan terus dilatih hingga mahir membuat berbagai alat musik. Ketika saudaranya pindah, beliau memberanikan diri mendirikan usaha sendiri dan mengerjakan pesanan seorang diri.</p>
            <p>Berkat promosi dari mulut ke mulut, pasar kami berkembang dari Baturraden ke Purbalingga, seluruh Jawa, luar Jawa, bahkan sampai Afrika.</p>
            <blockquote>Tujuan kami lebih dari sekadar berjualan: menjaga alat musik tradisional agar tetap lestari dan dikenal generasi mendatang.</blockquote>
        </div>
    </div>
</section>

<section class="sec sec--tint" id="angklung">
    <div class="wrap">
        <p class="eyebrow">Produk</p>
        <h2>Angklung buatan Mandiri Laras</h2>
        <div class="product">
            <div class="product__main">
                <h3>Angklung</h3>
                <p>{{ $umkm['angklung']['deskripsi'] }}</p>
                <p class="price">{{ $umkm['angklung']['harga'] }} <small>{{ $umkm['angklung']['satuan'] }}</small></p>
                <a href="{{ $wa }}" class="btn btn--light" target="_blank" rel="noopener">Tanya &amp; pesan</a>
            </div>
            <ul class="product__list">
                @foreach ($umkm['angklung']['keunggulan'] as $k)
                    <li>{{ $k }}</li>
                @endforeach
            </ul>
        </div>
        <p class="note">{{ $umkm['angklung']['catatan'] }}</p>
    </div>
</section>

<section class="sec" id="proses">
    <div class="wrap">
        <p class="eyebrow">Proses</p>
        <h2>Dikerjakan manual, sekitar 3–4 hari per set</h2>
        <ol class="steps">
            @foreach ($umkm['proses'] as $i => $step)
                <li>
                    <span class="steps__n">{{ $i + 1 }}</span>
                    <h3>{{ $step['judul'] }}</h3>
                    <p>{{ $step['isi'] }}</p>
                </li>
            @endforeach
        </ol>
        <p class="chips-title">Cocok untuk:</p>
        <ul class="chips">
            @foreach ($umkm['target'] as $t) <li>{{ $t }}</li> @endforeach
        </ul>
    </div>
</section>

<section class="sec sec--tint" id="galeri">
    <div class="wrap split split--rev">
        <div>
            <p class="eyebrow">Galeri</p>
            <h2>Sekilas isi bengkel kami</h2>
            <p>Dari tumpukan bambu mentah, rangka angklung, hingga set alat musik yang siap dikirim. Banner katalog kami memuat lebih banyak foto hasil karya.</p>
        </div>
        <figure class="split__img">
            <img src="{{ asset('images/banner.jpg') }}" alt="Banner Mandiri Laras Production berisi foto-foto angklung, calung, dan alat musik bambu" loading="lazy">
        </figure>
    </div>
</section>

<section class="sec cta" id="kontak">
    <div class="wrap">
        <h2>Mau pesan angklung?</h2>
        <p>Pemesanan lewat WhatsApp dan media sosial. Kirim jumlah set dan kebutuhan Anda, kami balas secepatnya.</p>
        <a href="{{ $wa }}" class="btn btn--light" target="_blank" rel="noopener">Chat WhatsApp {{ $umkm['wa_display'] }}</a>

        <ul class="social">
            @foreach ($umkm['sosmed'] as $sm)
                <li>
                    <a href="{{ $sm['url'] }}" target="_blank" rel="noopener" class="social__link">
                        @include('partials.icon-'.$sm['ikon'])
                        <span><small>{{ $sm['nama'] }}</small><strong>{{ $sm['akun'] }}</strong></span>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="address">
            <h3>Alamat</h3>
            <p>{{ $umkm['alamat'] }}</p>
            <p><small>{{ $umkm['patokan'] }}</small></p>
        </div>
    </div>
</section>

<footer class="foot">
    <div class="wrap">© {{ date('Y') }} {{ $umkm['nama'] }}</div>
</footer>
@endsection

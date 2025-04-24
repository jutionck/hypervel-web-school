# Hyper Web School - Sistem Manajemen Sekolah Modern

![Admin CMS](public/backend/images/admin-cms.png)

## Tentang Aplikasi

Hyper Web School adalah platform manajemen sekolah berbasis web dengan fitur lengkap untuk administrasi, pembelajaran, dan operasional sekolah modern.

## 🚀 Kontribusi

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://github.com/ugunNet21/hypervel-web-school/blob/master/CONTRIBUTING.md)

Lihat [panduan kontribusi](CONTRIBUTING.md) untuk memulai.

[![Join Discussion](https://img.shields.io/badge/Discussions-Join%20Now-brightgreen)](https://github.com/ugunNet21/hypervel-web-school/discussions)


## 📺 Video Tutorial

Pelajari cara penggunaan melalui seri video tutorial kami:

▶️ [Tonton Playlist Lengkap](https://www.youtube.com/playlist?list=PLusb1og4k-lpv17w2wJO1z5CBXqa8FRw-)

### Backlog Pengembangan Sidebar Navigation

#### Fase 1: Core Functionality (Prioritas Tinggi)
1. **[Dashboard] Membuat tampilan dashboard utama sekolah**
   - Overview sekolah (statistik singkat)
   - Analytics dasar
   - Quick actions

2. **[Manajemen Sekolah] Sistem manajemen data sekolah dasar**
   - Data siswa (CRUD)
   - Data guru & staff (CRUD)
   - Data kelas (CRUD)
   - Mata pelajaran (CRUD)

3. **[PPDB Online] Sistem pendaftaran siswa baru**
   - Form pendaftaran online
   - Verifikasi dokumen
   - Pengumuman hasil

#### Fase 2: Academic Tools (Prioritas Menengah)
4. **[E-Learning] Platform pembelajaran dasar**
   - Kelas virtual
   - Materi pembelajaran
   - Tugas & quiz sederhana

5. **[E-Raport] Sistem penilaian dasar**
   - Input nilai oleh guru
   - Generate raport sederhana
   - Portofolio siswa dasar

6. **[Ujian Online] Sistem ujian dasar**
   - Bank soal
   - UTS/UAS online
   - Analisis hasil sederhana

#### Fase 3: Supporting Systems (Prioritas Menengah)
7. **[Perpustakaan] Sistem perpustakaan digital**
   - Katalog buku
   - Peminjaman online
   - E-book management

8. **[Portal Orang Tua] Monitoring untuk orang tua**
   - Tracking nilai anak
   - Pembayaran sekolah
   - Komunikasi dengan guru

9. **[Laporan] Sistem reporting dasar**
   - Laporan kehadiran
   - Laporan akademik
   - Custom report sederhana

#### Fase 4: Advanced Features (Prioritas Rendah)
10. **[AI Assistant] Fitur AI pembelajaran**
    - Tutor virtual dasar
    - Rekomendasi materi

11. **[Career Development] Pengembangan karir**
    - Psikotes online
    - Analisis bakat dasar

12. **[Monetisasi] Sistem pendapatan**
    - Marketplace sekolah dasar
    - Sistem donasi

#### Fase 5: Administration (Prioritas Tinggi Tapi Belakangan)
13. **[Admin] Sistem administrasi**
    - Manajemen user
    - Pengaturan sistem
    - Backup data
    - Integrasi API dasar

#### Fase 6: Fitur Premium/Pro
14. **[AI Advanced] Fitur AI lanjutan**
    - Penilaian esai otomatis
    - Pembuatan materi otomatis

15. **[Ujian Pro] Fitur ujian lanjutan**
    - Proctoring system
    - UNBK simulasi lengkap

16. **[Monetisasi Advanced] Fitur pendapatan lanjutan**
    - Kursus premium
    - Sponsorship system

## Teknologi yang Digunakan

### Backend
- [Hypervel Framework](https://hypervel.org) - Laravel-style PHP framework dengan coroutine support
- PHP 8.2+
- MySQL 8
- Sqlite
- Redis

### Frontend
- Bootstrap 5
- Javascript

## Package Penting

```json
{
  "require": {
    "hypervel/framework": "^0.1",
    "ext-redis": "*"
  },
  "require-dev": {
    "hyperf/testing": "~3.1.0",
    "phpunit/phpunit": "10.5.45"
  }
}
```

> See [this issue](https://github.com/laravel/octane/issues/765) for more discussions.

## Documentation

[https://hypervel.org/docs](https://hypervel.org/docs)

Hypervel provides comprehensive and user-friendly documentation that allows you to quickly get started. From this documentation, you can learn how to use various components in Hypervel and understand the differences between this framework and Laravel.

> Most of the content in this documentation is referenced from the official Laravel documentation. We appreciate the Laravel community's contributions.

## License

The Hypervel framework is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.

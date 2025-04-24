## About Apps

![Admin CMS](public/backend/images/admin-cms.png)


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

<p align="center"><a href="https://hypervel.org" target="_blank"><img src="https://hypervel.org/logo.png" width="400"></a></p>

<p align="center">
<a href="https://github.com/hypervel/hypervel/actions"><img src="https://github.com/hypervel/hypervel/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/hypervel/framework"><img src="https://img.shields.io/packagist/dt/hypervel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hypervel/hypervel"><img src="https://img.shields.io/packagist/v/hypervel/hypervel" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hypervel/hypervel"><img src="https://img.shields.io/packagist/l/hypervel/hypervel" alt="License"></a>
</p>

## Introduction

**Hypervel** is a Laravel-style PHP framework with native coroutine support for ultra-high performance.

Hypervel ports many core components from Laravel while maintaining familiar usage patterns, making it instantly accessible to Laravel developers. The framework combines the elegant and expressive development experience of Laravel with the powerful performance benefits of coroutine-based programming. If you're a Laravel developer, you'll feel right at home with this framework, requiring minimal learning curve.

This is an ideal choice for building microservices, API gateways, and high-concurrency applications where traditional PHP frameworks often encounter performance constraints.

## Why Hypervel?

While Laravel Octane impressively enhances your Laravel application's performance, it's crucial to understand the nature of modern web applications. In most cases, the majority of latency stems from I/O operations, such as file operations, database queries, and API requests.

However, Laravel doesn't support coroutines - the entire framework is designed for a blocking I/O environment. Applications heavily dependent on I/O operations will still face performance bottlenecks. Consider this scenario:

Imagine building an AI-powered chatbot where each conversation API takes 3-5 seconds to respond. With 10 workers in Laravel Octane receiving 10 concurrent requests, all workers would be blocked until these requests complete.

> You can see [benchmark comparison](https://hypervel.org/docs/introduction.html#benchmark) between Laravel Octane and Hypervel

Even with Laravel Octane's improvements, your application's concurrent request handling capacity remains constrained by I/O operation duration. Hypervel addresses this limitation through coroutines, enabling efficient handling of concurrent I/O operations without blocking workers. This approach significantly enhances performance and concurrency for I/O-intensive applications.

> See [this issue](https://github.com/laravel/octane/issues/765) for more discussions.

## Documentation

[https://hypervel.org/docs](https://hypervel.org/docs)

Hypervel provides comprehensive and user-friendly documentation that allows you to quickly get started. From this documentation, you can learn how to use various components in Hypervel and understand the differences between this framework and Laravel.

> Most of the content in this documentation is referenced from the official Laravel documentation. We appreciate the Laravel community's contributions.

## License

The Hypervel framework is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.

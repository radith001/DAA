# **Analisis Sistem Manajemen Atlet Voli Berbasis Laravel, Docker, dan MySQL**

## **1. Latar Belakang**
Olahraga bola voli merupakan salah satu cabang olahraga yang berkembang pesat di Indonesia. Keberhasilan tim voli nasional dalam berbagai kompetisi menunjukkan bahwa Indonesia memiliki potensi besar dalam bidang ini. Namun, untuk mempertahankan dan meningkatkan prestasi, diperlukan regenerasi atlet yang berkelanjutan.

Pemerintah telah mengeluarkan kebijakan baru yang menekankan pentingnya pencarian bibit muda berbakat untuk regenerasi atlet. Hal ini bertujuan untuk memastikan bahwa atlet yang berkompetisi di tingkat nasional dan internasional memiliki kualitas yang unggul dan siap bersaing.

Sebagai perusahaan yang bergerak di bidang pelatihan olahraga, peran dalam menemukan, membina, dan mengembangkan atlet muda menjadi sangat penting. Dengan pendekatan berbasis teknologi, sistem pelatihan dapat lebih efektif dalam mengidentifikasi dan mengembangkan potensi atlet muda. Oleh karena itu, diperlukan sebuah sistem manajemen yang mencakup **company profile, dashboard kontrol, porsi latihan, data personal atlet, klasifikasi penilaian, klasemen atlet, serta manajemen waktu pertandingan**.

## **2. Identifikasi Masalah**
Berdasarkan latar belakang yang telah dijelaskan, beberapa permasalahan utama yang diidentifikasi dalam studi ini adalah:
1. Kurangnya sistem terstruktur dalam pencarian dan pembinaan bibit muda atlet voli.
2. Belum adanya sistem yang dapat mengelompokkan atlet berdasarkan performa dan kesiapan bertanding.
3. Kurangnya pemanfaatan teknologi dalam pemantauan dan evaluasi atlet secara real-time.
4. Belum adanya sistem manajemen waktu yang optimal dalam pengaturan jadwal latihan dan pertandingan.
5. Kurangnya transparansi dalam klasifikasi dan penilaian atlet berdasarkan performa latihan dan pertandingan.

## **3. Rumusan Masalah**
Berdasarkan identifikasi masalah di atas, rumusan masalah dalam penelitian ini adalah:
1. Bagaimana membangun sistem company profile yang dapat memberikan informasi lengkap mengenai perusahaan pelatihan atlet voli?
2. Bagaimana merancang dashboard kontrol yang dapat membantu dalam manajemen pelatihan dan evaluasi atlet?
3. Bagaimana menentukan porsi latihan yang efektif untuk meningkatkan performa atlet voli?
4. Bagaimana mengelola data personal atlet secara sistematis untuk mendukung pengambilan keputusan dalam pelatihan?
5. Bagaimana melakukan klasifikasi atlet berdasarkan performa dan kesiapan bertanding?
6. Bagaimana menyusun klasemen atlet yang hanya memungkinkan atlet dengan porsi latihan yang telah selesai untuk bertanding?
7. Bagaimana merancang sistem manajemen waktu yang efektif untuk jadwal pertandingan atlet?

## **4. Tujuan Penelitian**
Tujuan dari penelitian ini adalah:
1. Membuat company profile yang dapat memberikan gambaran lengkap mengenai perusahaan pelatihan atlet voli.
2. Merancang dashboard kontrol untuk mempermudah pemantauan dan pengelolaan data atlet.
3. Menentukan porsi latihan yang optimal untuk meningkatkan performa atlet.
4. Mengembangkan sistem pengelolaan data personal atlet yang terstruktur dan mudah diakses.
5. Membangun sistem klasifikasi atlet berdasarkan performa untuk menentukan kesiapan bertanding.
6. Menyusun klasemen atlet yang berbasis pada penyelesaian porsi latihan dan performa dalam latihan.
7. Merancang sistem manajemen waktu untuk mengatur jadwal pertandingan atlet secara efisien.

## **5. Metode Analisis**
Untuk menganalisis sistem ini, digunakan beberapa metode berikut:

### **5.1. SWOT Analysis**
- **Strengths (Kekuatan):** 
  - Sistem pelatihan berbasis data.
  - Pelatih profesional dan fasilitas memadai.
  - Kebijakan pemerintah mendukung regenerasi atlet.

- **Weaknesses (Kelemahan):** 
  - Keterbatasan anggaran dalam pengembangan teknologi.
  - Kurangnya sistem evaluasi performa berbasis real-time.

- **Opportunities (Peluang):** 
  - Dukungan dari sponsor dan pemerintah.
  - Meningkatnya popularitas voli di Indonesia.

- **Threats (Ancaman):** 
  - Persaingan dengan akademi olahraga lain.
  - Risiko cedera atlet yang dapat menghambat perkembangan.

### **5.2. Business Model Canvas (BMC)**
- **Key Partners:** Pemerintah, sponsor, sekolah, klub voli.
- **Key Activities:** Rekrutmen atlet, pelatihan, evaluasi performa, turnamen.
- **Value Proposition:** Menciptakan atlet voli unggulan.
- **Customer Segments:** Atlet muda berbakat, klub voli, sponsor.
- **Channels:** Website, media sosial, aplikasi monitoring atlet.
- **Revenue Streams:** Sponsorship, dana pemerintah, biaya akademi.
- **Cost Structure:** Biaya pelatihan, fasilitas, gaji pelatih.

### **5.3. Analisis GAP**
- **Kondisi Saat Ini:**  
  - Sistem pelatihan masih manual.
  - Tidak ada sistem klasemen berbasis performa.
- **Target yang Diharapkan:**  
  - Sistem berbasis data dengan dashboard evaluasi atlet.
  - Sistem klasifikasi dan manajemen waktu pertandingan.

## **6. Perancangan Sistem**
### **6.1. Entity Relationship Diagram (ERD)**
Sistem menggunakan beberapa entitas utama:
- **Atlet** (ID_Atlet, Nama, Usia, Posisi, Performa)
- **Pelatih** (ID_Pelatih, Nama, Spesialisasi)
- **Latihan** (ID_Latihan, ID_Atlet, Jenis Latihan, Hasil)
- **Pertandingan** (ID_Pertandingan, Tanggal, Lokasi)
- **Klasemen** (ID_Klasemen, ID_Atlet, Poin)

### **6.2. Flowchart Sistem**
Flowchart utama mencakup:
1. **Proses Pendaftaran Atlet** → Input Data → Verifikasi → Masuk Database.
2. **Proses Latihan Atlet** → Input Hasil Latihan → Evaluasi → Klasifikasi.
3. **Proses Manajemen Pertandingan** → Penyusunan Jadwal → Seleksi Atlet → Pelaksanaan.

## **7. Implementasi Teknologi**
Sistem ini dikembangkan menggunakan **Laravel, Docker, dan MySQL**:
- **Laravel:** Digunakan sebagai framework utama untuk membangun backend dan frontend dashboard.
- **Docker:** Digunakan untuk mengelola lingkungan pengembangan secara terisolasi dan memastikan kompatibilitas sistem.
- **MySQL:** Digunakan sebagai database untuk menyimpan data atlet, latihan, dan pertandingan.

Konfigurasi Docker untuk Laravel dan MySQL:
```yaml
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: atlet_voli
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"

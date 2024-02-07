# LP1DPBO2024C1

# Janji
Saya Mohammad Raihan Aulia Kamil (2205449) mengerjakan soal Latihan Praktikum 1 C1 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan. Aamiin.

# Desain Program
CLASS
Membuat Class DPR yang mempresentasikan Anggota DPR. Dengan attribute ID, Nama Anggota DPR, Nama Bidang, Nama Partai, dan Foto Profil (Khusus PHP). Di dalam CLASS DPR juga terdapat method - method untuk fitur CRUD dari Daftar Anggota DPR sebagai berikut,
- Metode 'tampilkanDaftarAnggota' : Metode untuk menampilkan semua anggota DPR yang ada dalam list 'anggotaDPRList' dengan menampilkan attributenya.
- Method 'tambahAnggota' : Method untuk menambah Anggota DPR baru dengan mengisi attributenya dan memasukannya ke dalam list dengan menggunakan fungsi 'emplace_back'.
- Method 'ubahAnggota' : Method untuk mengubah data Anggota DPR yang sudah ada di dalam list dengan memasukan ID dari Anggota DPR tersebut.
- Method 'hapusAnggota' : Method untuk menghapus data Anggota DPR yang ada di list dengan memasukan ID dari dari Anggota DPR tersebut dengan menggunakan fungsi remove_if.

MAIN
Fungsi main memanggil metode yang sesuai dari objek dpr (yang merupakan objek dari kelas DPR) untuk menambah, mengubah, menghapus, atau menampilkan anggota DPR. Untuk pilihan menunya menggunakan switch case.

# Alur Program
1. Ditampilkan Daftar Anggota DPR yang ada dalam list.
2. Ditampilkan menu pilihan untuk CRUD list Anggota DPR dengan pilihan menu,
   1. Tambah Anggota DPR
   2. Ubah Anggota DPR
   3. Hapus Anggota DPR
   0. Keluar
3. User mengisi masukan sesuai dengan tujuannya.
   - Jika memilih tambah, maka User diminta memasukan attribute baru (ID, Nama, Bidang, Partai)
   - Jika memilih Ubah, maka User diminta memasukan ID Anggota DPR yang ingin diubah, kemudian memasukan attribute yang baru
   - Jika memilih Hapus, maka User diminta memasukan ID Anggota DPR yang ingin dihapus, lalu Anggota DPR yang dipih akan langsung dihapus
   - Jika memilih Keluar, maka program berhenti.

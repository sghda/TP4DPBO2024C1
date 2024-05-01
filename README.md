# TP4DPBO2024C1
## Janji
Saya Salma Ghaida dengan NIM 2207186 mengerjakan Tugas Praktikum 3 dalam mata kuliah Desain Pemrograman Berbasis Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin...
## Struktur Kode
Menggunakan struktur MVC (Model-View-Controller)
1. Model
   Pada bagian model, terdapat model Members dan Subscriptions didalamnya berisi fungsi fungsi yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data tabel masing masing. Terdapat Class DB yang bertanggung jawab untuk koneksi ke database dan eksekusi query. Dan Class Template yang akan di akses di view.
2. View
   Pada Bagian View, terdapat 3 File yaitu MembersView.php, SubsView.php, dan FormView.php dimana ketiganya bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
3. Controller
   Sama seperti view, terdapat 3 controller yaitu FormController, MembersController, dan SubsController, ketiganya bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

Selain dari ketiga bagian tersebut, terdapat pula file tempaltes yg dipanggil pada bagian view untuk mempermudah tampilan. Dan juga terdapat file conf.php untuk koneksi, form_sub.php, index.php, subs.php yang gunanya untuk mengakses controller.
   

## Alur Program
- Tampilan awal program memperlihatkan list member dalam bentuk tabel yang terdapat colom yang merupakan join dari tabel subscription, terdapat action pada tiap member. 
-  Action tiap member : action hapus untuk member yang sudah pernah berlangganan (status subs nya tidak null) dan ada tambahan action untuk member yang belum berlangganan yaitu pay yg merupakan action set kolom status menjadi tidak null
-  Pada halaman awal juga terdapat form add member di bawah list members
-  Untuk halaman subscriptions, list subcription memiliki action edit dan hapus, yg mana edit mempunyai form tersendiri
-  terdapat pula button add subcription yang mempunyai form nya sendiri

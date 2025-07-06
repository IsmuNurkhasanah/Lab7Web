# Lab7Web
_**PRAKTIKUM CodeIgniter4 {Ismu Nurkhasanah (312310042-TI.23.C1)}**_  

Pada praktikum CodeIgniter4 ini dibagi menjadi ke beberapa modul, berikut perubahan yang dilakukan pada setiap modul praktikum:


***Modul Praktikum 1_PHP Framework (Code Igniter)**
1. Pada gambar tersebut, telah ditambahkan beberapa routes yang akan digunakan
![Screenshot 2025-05-18 111634](https://github.com/user-attachments/assets/901dcd44-bbda-44bb-8baf-066bd0651129)

2. Selanjutnya, menampilkan isi pada setiap halaman yang dipilih
![Screenshot 2025-05-18 111820](https://github.com/user-attachments/assets/933c27ad-4a12-4d0f-923a-7c840f1a7935)

3. Mengubah halaman utama yang awalnya masuk ke halaman CodeIgniter ke halaman yang sama dengan halaman yang akan dipakai
![Screenshot 2025-05-18 111829](https://github.com/user-attachments/assets/47bdc5c3-fdd6-4be1-9003-589d357cbc41)

4. Membuat header dalam satu file, agar lebih mudah dalam memanggilnya dan meringkas coding
![Screenshot 2025-05-18 111839](https://github.com/user-attachments/assets/f973ae59-ae03-4e74-97e9-7c7b9c34fa51)

5. Begitu juga dengan footer
![Screenshot 2025-05-18 111849](https://github.com/user-attachments/assets/9dbcc432-35e5-42d7-90dc-d611a64bfcd3)

6. Menambahkan halaman yang akan digunakan seperti about, artikel, contact, dll
![Screenshot 2025-05-18 111918](https://github.com/user-attachments/assets/6eeab519-e9c4-4470-bcc6-d42628f5e686)

7. Isi dalam file about, yang di mana di dalamnya memanggil file header & footer yang sudah dibuat sebelumnya
![Screenshot 2025-05-18 111925](https://github.com/user-attachments/assets/3cf9c2ba-dd07-4087-8506-764a2bba73b8)

8. Menambahkan _style.css_ agar tampilan lebih menarik
![Screenshot 2025-05-18 111937](https://github.com/user-attachments/assets/634cfe42-2194-4c62-b5bb-62954ba1f0be)
![Screenshot 2025-05-18 111952](https://github.com/user-attachments/assets/7d073768-6448-4c30-be2a-c8149c2cf502)

9. Mengubah baseurl yang sebelumnya _'http://localhost:8080/'_ menjadi _'http://localhost/Lab7Web/ci4/public'_
![Screenshot 2025-05-18 114746](https://github.com/user-attachments/assets/c301b2cb-16c0-4c31-8f12-1619ac3c78e5)

10. Berikut tampilan akhir dari modul praktikum 1
![Screenshot 2025-05-18 112210](https://github.com/user-attachments/assets/3dada635-1b74-454a-b926-2ec71155c3f5)


***Modul Praktikum 2_Framework Lanjutan (CRUD)**
1. Buat database lab_ci4 dan tabel artikel
![Screenshot 2025-06-05 214724](https://github.com/user-attachments/assets/5607a2cb-9ff0-4152-a0bf-b7ce12004429)

2. Konekkan CI4 ke database yang telah dibuat
![Screenshot 2025-06-05 214838](https://github.com/user-attachments/assets/56f923aa-17fa-4e02-bb39-236cb4e454d4)

3. Buat Model baru dengan _ArtikelModel.php_
![Screenshot 2025-06-06 092937](https://github.com/user-attachments/assets/bc06d8bb-eed2-46c6-af5e-7d00d77f3304)

4. Dan juga buat Controller baru dengan _Artikel.php_
![Screenshot 2025-06-06 100144](https://github.com/user-attachments/assets/078a0a8c-b69d-453e-83c6-463e622f3d8b)
![Screenshot 2025-06-06 100207](https://github.com/user-attachments/assets/ec13f96e-8ceb-4240-8cf9-82e93ebc0e73)

5. Tambahkan View untuk Artikel dengan _index.php_ dan tambahkan beberapa Artikel pada database
![Screenshot 2025-06-06 100304](https://github.com/user-attachments/assets/a677f2cc-8e29-4e4b-935d-e87b9799f604)

6. Tampilan Layout Artikel
![Screenshot 2025-06-06 100846](https://github.com/user-attachments/assets/6f39e889-d333-4c6a-8d1e-7af8bda9fbf9)

7. Tambahkan View untuk detail dari artikel yang akan dipilih
![Screenshot 2025-06-06 100938](https://github.com/user-attachments/assets/3e3f9dc0-1706-420a-8072-87f7bd9a9867)

8. Tampilan Layout Detail Artikel
![Screenshot 2025-06-06 100951](https://github.com/user-attachments/assets/aed68f7c-aaf5-4b8a-af4d-78831352ccf3)

9. Buat halaman untuk admin bagian artikel
![Screenshot 2025-06-06 101030](https://github.com/user-attachments/assets/74d5316e-ca20-45d2-b38c-e680046766a2)

10. Tambahkan juga Routes artikel untuk tambah, edit, dan hapus artikel
![Screenshot 2025-06-06 101102](https://github.com/user-attachments/assets/f8925217-23a6-498d-9c03-253cb62fe7bc)

11. Tampilan Layout Admin Artikel
![Screenshot 2025-06-06 101123](https://github.com/user-attachments/assets/e9aa17c6-a7aa-4cb1-ba34-1326087041b3)

12. Tambahkan halaman untuk tambah artikel
![Screenshot 2025-06-06 101202](https://github.com/user-attachments/assets/c8d96409-85ba-4f4f-8ed0-eb90923af9f1)

13. Tampilan Layout Tambah Artikel
![Screenshot 2025-06-06 101214](https://github.com/user-attachments/assets/c701cae7-a2e2-4b3a-9c80-ff8f5d69dcd6)

14. Tambahkan halaman untuk edit artikel
![Screenshot 2025-06-06 101231](https://github.com/user-attachments/assets/b54db8fb-241f-438a-b679-81e8a874ac9d)

15. Tampilan Layout Edit Artikel
![Screenshot 2025-06-06 101245](https://github.com/user-attachments/assets/9407a7f8-d494-4163-9abd-b028791a7748)

16. Tampilan Layout Hapus Artikel
![Screenshot 2025-06-06 101653](https://github.com/user-attachments/assets/b6da1746-a334-4099-acc8-85a4ccf4fd90)


***Modul Praktikum 3_View Layout dan View Cell**
1. Membuat folder _layout/main.php_ dalam Views
![Screenshot 2025-06-06 114816](https://github.com/user-attachments/assets/c95274b0-4dfb-437a-8293-349e25da0e68)

2. Mengubah isi dari _welcome_message_
![Screenshot 2025-06-06 114909](https://github.com/user-attachments/assets/54c964bf-e701-42c0-9515-bd3a276ff2ac)

3. Menampilkan data dinamis dengan membuat folder _Cells/ArtikelTerkini.php_ dalam app
![Screenshot 2025-06-06 114937](https://github.com/user-attachments/assets/c88e0e16-cedc-487c-b5ef-56eecf830df2)

4. Membuat folder _component/artikelTerkini.php_ dalam Views
![Screenshot 2025-06-06 114953](https://github.com/user-attachments/assets/d6b3e51d-6bd9-4944-9646-814b1b5a3c8c)

5. Tampilan baru dari Layout
![Screenshot 2025-06-06 115433](https://github.com/user-attachments/assets/68df1014-d7e7-4d1d-8e66-4191c8235505)

Penjelasan!
1. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

Jawab : Membantu dalam membuat template utama yang bisa digunakan ulang untuk banyak halaman lainnya. Dengan itu, tidak perlu menulis ulang header footer, sidebar disetiap halaman, memiliki halaman dengan layout yang sama. Dengan mengubah satu file layout, maka semua halaman akan ikut berubah otomatis. Menjadikan coding lebih terstruktur.

2. Jelaskan perbedaan antara View Cell dan View biasa

Jawab : View Cell -> berguna untuk membuat bagian tampilan kecil yang fleksibel dan dapat memanggil model/controller. sedangkan
View biasa -> berguna untuk menampilkan halaman penuh atau bagian utama, tidak bisa langsung memanggil model/controller dan bersifat statis.

3. Ubah View Cell agar hanya menampilkan post dengan kategori tertentu.

Jawab :
1. Menambahkan kolom kategori pada table
![Screenshot 2025-06-06 131610](https://github.com/user-attachments/assets/8a95c7ff-cb96-4a37-8b10-54bf30bf1a36)

2. Update _component/artikelTerkini.php_
![Screenshot 2025-06-06 131635](https://github.com/user-attachments/assets/7da12b2e-8c3b-4ee8-a6fa-43c49110e4ac)

3. Update untuk memanggil View Cell
![Screenshot 2025-06-06 131649](https://github.com/user-attachments/assets/0a8ff527-2a2c-4754-9db6-81b5c6a39996)

4. Tampilan baru setelah update artikel dengan kategori 
![Screenshot 2025-06-06 131658](https://github.com/user-attachments/assets/55e2f2e7-1fa3-40e1-b292-243170f6611f)


***Modul Praktikum 4_Framework Lanjutan (Modul Login)**
1. Buat table baru dengan nama _user_
![Screenshot 2025-07-05 143108](https://github.com/user-attachments/assets/bcf26014-ae8f-4fb8-9655-2d9448b2cbcd)

2. Tambahkan file baru _UserModel.php_ pada direktori _app/Models_
![Screenshot 2025-07-05 143227](https://github.com/user-attachments/assets/5e31acc3-d65f-4ab7-8595-220083c686a1)

3. Kemudian tambahkan juga file baru degan nama _User.php_ pada direktori _app/Controllers_
![Screenshot 2025-07-05 143329](https://github.com/user-attachments/assets/a3be241b-4144-4fdc-bbbb-3e3370f9e451)

4. Tambahkan file baru pada _app/views_ dengan nama _Login.php_ untuk tampilan yang akan ditampilkan
![Screenshot 2025-07-05 143402](https://github.com/user-attachments/assets/11bdd9c7-db93-476c-b479-b643932e4d3e)

5. Kemudian tambahkan _UserSeeder.php_ pada _app/Database/Seeds/UserSeeder.php_
![Screenshot 2025-07-05 143430](https://github.com/user-attachments/assets/8142b5ff-1fd5-44b0-a31b-49592f0b8a12)

6. Tambahkan juga _Auth.php_ pada direktori _app/Filters_
![Screenshot 2025-07-05 143500](https://github.com/user-attachments/assets/cb9d4723-10ec-4502-b33b-f3d1361eb3c2)

7. Dan update pada _app/Config/Routes.php_ menjadi seperti digambar
![image](https://github.com/user-attachments/assets/5901298a-2293-4108-b0ac-07bf5f438979)

8. Tampilan dari halaman _Login.php_
![Screenshot 2025-07-05 143543](https://github.com/user-attachments/assets/18aa5ab4-4817-413e-b3ea-a10cdbe66a97)

9. Terakhir buat method logout pada Controller User dan tambahkan tombol Logout pada Navbar
![Screenshot 2025-07-05 143606](https://github.com/user-attachments/assets/51f44279-9e93-46ae-bea6-2b436c4689ab)


***Modul Praktikum 5_Pagination dan Pencarian**
1. Buka _Controller/Artikel_, modifikasi pada method admin_index
![image](https://github.com/user-attachments/assets/b31a4df4-6883-4de9-a15e-a58d4f28759a)

2. Kemudian tambahkan form pencarian data dan perintah untuk pagination dan pencarian 
![image](https://github.com/user-attachments/assets/40033d7a-87be-4179-8066-4aa9c74e15af)
![image](https://github.com/user-attachments/assets/20d8110e-f8b8-48bd-a881-533ef33fcc1e)

3. Tambahkan CSS untuk pagination
![image](https://github.com/user-attachments/assets/3071cd37-2a8f-4c6c-848a-cf063a50888d)

4. Tampilan ketika sudah ditambahkan kolom pencarian dan pagination
![image](https://github.com/user-attachments/assets/cb215d61-ef3b-46ca-a415-e4811f68f67a)


***Modul Praktikum 6_Upload File Gambar**
1. Buka Controller Artikel, kemudian update bagian method add
![image](https://github.com/user-attachments/assets/c80e8ede-98dc-4c12-a947-b00f08d48542)

2. Tambahkan juga input untuk memilih gambar pada _views/artikel/form_add.php_ dan _encrypt type_ pada form
![image](https://github.com/user-attachments/assets/5708d198-f760-46cb-b180-a185e4fa5c0c)

3. Hasil dari update upload gambar
![image](https://github.com/user-attachments/assets/ca53de7c-9d51-4234-88a0-7cb156c6127a)
![image](https://github.com/user-attachments/assets/8f82423a-1276-4eb2-83a0-1a0cb141d776)

4. Selanjutnya, update pada bagian method edit
![image](https://github.com/user-attachments/assets/580cb370-0034-413a-871a-a309439e926e)

5. Tambahkan juga input pada _views/artikel/form_edit.php_ dan _encrypt type_ pada form
![image](https://github.com/user-attachments/assets/6dab4de4-aee5-4a9c-850d-43b2723d7f85)

6. Hasil dari update edit gambar
Sebelum di edit
![image](https://github.com/user-attachments/assets/1679fc85-18b4-4129-896a-9cf9cf4ad29e)

Sesudah di edit
![image](https://github.com/user-attachments/assets/b694e744-dc5e-44ac-a986-24a9606b9a48)
![image](https://github.com/user-attachments/assets/10f99fd3-14f2-4b40-ba70-ec1028d3d721)

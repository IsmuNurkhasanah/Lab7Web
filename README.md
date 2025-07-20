# Lab7Web
## **PRAKTIKUM CodeIgniter4 {Ismu Nurkhasanah (312310042-TI.23.C1)}**

Pada praktikum CodeIgniter4 ini dibagi menjadi ke beberapa modul, berikut perubahan yang dilakukan pada setiap modul praktikum:


## **Modul Praktikum 1_PHP Framework (Code Igniter)**
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


## **Modul Praktikum 2_Framework Lanjutan (CRUD)**
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


## **Modul Praktikum 3_View Layout dan View Cell**
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


## **Modul Praktikum 4_Framework Lanjutan (Modul Login)**
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


## **Modul Praktikum 5_Pagination dan Pencarian**
1. Buka _Controller/Artikel_, modifikasi pada method admin_index
![image](https://github.com/user-attachments/assets/b31a4df4-6883-4de9-a15e-a58d4f28759a)

2. Kemudian tambahkan form pencarian data dan perintah untuk pagination dan pencarian 
![image](https://github.com/user-attachments/assets/40033d7a-87be-4179-8066-4aa9c74e15af)
![image](https://github.com/user-attachments/assets/20d8110e-f8b8-48bd-a881-533ef33fcc1e)

3. Tambahkan CSS untuk pagination
![image](https://github.com/user-attachments/assets/3071cd37-2a8f-4c6c-848a-cf063a50888d)

4. Tampilan ketika sudah ditambahkan kolom pencarian dan pagination
![image](https://github.com/user-attachments/assets/cb215d61-ef3b-46ca-a415-e4811f68f67a)


## **Modul Praktikum 6_Upload File Gambar**
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


## **Modul Praktikum 7_Relasi Tabel dan Query Builder**
1. Buat Tabel baru dengan nama kategori
![image](https://github.com/user-attachments/assets/1207479f-5bfb-45bb-8b87-1916431575b6)

2. Kemudian buat Model Kategori
![image](https://github.com/user-attachments/assets/b449f493-ffed-4d99-be66-ae63d9609a3d)

3. Modifikasi ArtikelModel agar terhubung dengan KategoriModel
![image](https://github.com/user-attachments/assets/91300507-febb-44a3-b79e-8bf8dd4bb842)

4. Modifikasi juga Controller Artikel
![image](https://github.com/user-attachments/assets/a55443ff-c7a8-4697-a42a-3b6f6ae55db4)

5. Serta, Modifikasi View
![image](https://github.com/user-attachments/assets/8e65cef6-30e0-467d-b735-3c5e23729a28)

6. Uji coba

   a. Menampilkan daftar artikel dengan nama kategori
   ![image](https://github.com/user-attachments/assets/db883d3c-0df2-4655-aa19-c52423499db5)
   ![image](https://github.com/user-attachments/assets/0a460e1f-d01a-4994-abc9-86c7fa186b0e)

   b. Menampilkan detail dari artikel dan menampilkan nama kategori
   ![image](https://github.com/user-attachments/assets/a2e238a4-b498-4b65-a74e-ef2c53b57c0b)
   ![image](https://github.com/user-attachments/assets/eb467a2c-4b2a-4f75-905d-303bc553ec35)

   c. Menambah artikel baru dengan memilih kategori
   ![image](https://github.com/user-attachments/assets/d0b05f57-41f6-43e0-99ec-ebf54234d29d)

   d. Mengedit artikel dan mengubah kategorinya
   ![image](https://github.com/user-attachments/assets/81889b27-e362-4d65-86e4-2f72b18ddb2e)

   e. Menghapus artikel
   ![image](https://github.com/user-attachments/assets/5fb5c33d-caa5-4197-886f-6a722fa822a1)
   ![image](https://github.com/user-attachments/assets/0fea3a44-f55d-464e-8825-a799b56775fe)

## **Modul Praktikum 8_AJAX**
**AJAX** merupakan singkatan dari **Asynchronous JavaScript and XML**. AJAX adalah kumpulan teknik pengembangan web yang 
memungkinkan aplikasi web bekerja secara asynchronous (tidak langsung). 
Contoh penggunaan Ajax pada praktikum ini, yaitu:
1. Tambahkan pustaka JQuery untuk mempermudah proses Ajax, download pada [https://jquery.com/](https://jquery.com/)
2. Salin JQuery-3.6.0.min.js ke folder **public/assets/js**.
![image](https://github.com/user-attachments/assets/43b8b84f-c17d-445f-910e-826127205f5c)

3. Buat AjaxController
![image](https://github.com/user-attachments/assets/77b74692-580f-442e-9f5d-44ee9bdfe5ed)

4. Dan buat view atau tampilan untuk ajaxnya
![image](https://github.com/user-attachments/assets/dd73cdb1-6f5b-4dfe-b68a-db5c81175e77)
![image](https://github.com/user-attachments/assets/9495759b-cf8a-4ba6-bee3-1e56003a2080)

5. Tambahkan routes baru untuk ajax pada `Routes.php`
![image](https://github.com/user-attachments/assets/dbc54d09-5dd5-4a36-a180-ef35d3484181)

6. Kemudian buat Modal baru untuk Tambah Artikel dan Edit Artikel
![image](https://github.com/user-attachments/assets/95ff488d-6df3-4819-af62-440e28ee01c0)
![image](https://github.com/user-attachments/assets/868dadce-0363-4f04-abdd-a15f9b1f37fd)
![image](https://github.com/user-attachments/assets/8b59cec1-85f3-4856-a5d0-33e774c3288b)
![image](https://github.com/user-attachments/assets/519d210c-0db8-4f36-8337-40ef3772060d)

## **Modul Praktikum 9_Implementasi AJAX Pagination dan Search**
Pada Praktikum 9 ini, kita akan mengimplementasikan Ajax Pagination dan Search. Selain itu, kita akan membuat indikator loading ketika sedang mengambil data dan kita juga dapat mengurutkan judul artikel baik ASC maupun DESC. 
1. Modifikasi Controller Artikel pada `admin_index()`
![image](https://github.com/user-attachments/assets/6d53b53d-aa60-4cf2-b9fe-91eeaaa8af17)

2. Modifikasi juga pada View (`admin_index.php`)
![image](https://github.com/user-attachments/assets/a1ec61f2-ef03-464e-9a41-ea8e6c16676b)

3. Tampilan Akhir dari modifikasi
![image](https://github.com/user-attachments/assets/c9b97b4f-cb56-4681-8949-2bf1dc034a04)

## **Modul Praktikum 10_API**
Representational State Transfer (REST) adalah salah satu desain arsitektur Application 
Programming Interface (API). API sendiri merupakan interface yang menjadi perantara 
yang menghubungkan satu aplikasi dengan aplikasi lainnya. 
1. Download aplikasi [https://www.postman.com/downloads/](https://www.postman.com/downloads/)
2. Buat file pada `app\Controller` dengan nama `Post.php`
![image](https://github.com/user-attachments/assets/c12bc96a-0860-470c-9eb7-07cb3f4582c8)

3. Tambahkan routing Rest API pada `app\config\Routes.php`
![image](https://github.com/user-attachments/assets/2ad1de10-6db6-41bc-ab10-45fe88b1da3b)

4. Kemudian jalankan perintah `php spark routes` dan hasilnya
![image](https://github.com/user-attachments/assets/d2bae897-4650-4c1a-9970-c91d6ebb0671)

5. Uji Testing Rest API
   1. Buka Aplikasi Postman kemudian pilik create new -> HTTP Request
      ![image](https://github.com/user-attachments/assets/a461410b-b26d-4c98-8d36-51a3bcf94e3c)

   2. Pilih method **GET** dan masukkan url `https://localhost/Lab7Web/public/post` lalu pilih **Send**
      ![image](https://github.com/user-attachments/assets/463bcbc8-0584-4eff-93db-c20c833ffcfc)

   3. Menampilkan data spesifik dengan memasukkan url `https://localhost/Lab7Web/public/post/2` _(angka diisi sesuai dengan id data yang ingin kita lihat)_
      ![image](https://github.com/user-attachments/assets/28f19fd9-8bd2-48ec-abd7-ebcf8f3de789)

   4. Untuk mengubah atau edit data, ganti method dengan **PUT**, kemudian ubah url dengan id data yang akan diubah.
      ![image](https://github.com/user-attachments/assets/07bbc7c6-e713-40cb-b420-a693bc181813)

   5. Selanjutnya, pilih tab **Body**. Kemudian, pilih **x-www-form-uriencoded**. Masukkan nama atribut table pada kolom **KEY** dan nilai data baru pada kolom **VALUE**, kemudian pilih **Send**.
      ![image](https://github.com/user-attachments/assets/621aa6b6-ffb9-4c62-b9d4-6250114e2264)

   6. Untuk menambahkan data ubah method menjadi **POST**, dan ubah url menjadi `https://localhost/Lab7Web/public/post`.
      ![image](https://github.com/user-attachments/assets/c9e6ed08-e571-4e9d-8cf0-4e51c7221e2a)

   7. Sedangkan untuk menghapus data, ubah method menjadi **DELETE**, kemudian masukkan url dengan id data yang akan dihapus.
      ![image](https://github.com/user-attachments/assets/4fe34530-955e-4ec8-96ad-24873a105e0a)

   8. Hasil di Database setelah mengubah dan menambahkan data, serta yang terakhir setelah menghapus id data ke _16_
      ![image](https://github.com/user-attachments/assets/8b7ce665-f2c4-494c-931b-5ef679a41615)
      ![image](https://github.com/user-attachments/assets/dd1f352f-d355-42fd-beee-9dbe6f37b216)

## **Modul Praktikum 11_VueJs**
Pada praktikum 11 ini, kita membuat repo baru dengan nama [Lab8VueJs](https://github.com/IsmuNurkhasanah/Lab8VueJs). Langkah - langkah praktikum, yaitu:
1. Pada kali ini, kita akan menggunakan cara manual. Yang diperlukan yaitu library VueJs, Axios untuk melakukan call API REST. menggunakan CDN

   **Library VueJS**
`<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>`

   **Library Axios**
`<script src="https://unpkg.com/axios/dist/axios.min.js"></script>`

2. Kemudian buat directory seperti ini
![image](https://github.com/user-attachments/assets/0df807dd-b1c2-4896-90bd-23b1d0171ae6)

3. File `index.html`
![image](https://github.com/user-attachments/assets/337a87f6-92ce-4337-b3c4-9b4c1e83bdcf)

4. File `app.js`
![image](https://github.com/user-attachments/assets/ec114a8d-7b29-4763-8335-9b552cb93601)

5. Outputnya
![image](https://github.com/user-attachments/assets/eb554805-818b-4e34-8d8e-6354a7bbc32a)

6. Form tambah dan ubah data
![image](https://github.com/user-attachments/assets/c77aa561-ee75-4820-bd28-c5613f780db7)
![image](https://github.com/user-attachments/assets/d6350603-5fe5-4050-88b6-239263d9cfe7)

8. File `style.css`
![image](https://github.com/user-attachments/assets/d552a5f0-55f9-41ee-8a16-2320dacf0db9)


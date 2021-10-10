    <div class="container">
      <h2><?= $judul ?></h2>
      <p>
        Pada pengertian codeigniter diatas tadi dijelaskan bahwa codeigniter
        menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu
        MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.
      </p>
      <p>
        MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi
        tiga komponen yaitu model, view, dan controller.
      </p>
      <p>
          <ol type="a">
            <li>
              Model
            </li>
            Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh 
            aplikasi. Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan 
            pengolahan atau manipulasi database. seperti misalnya, mengambil data dari database, menginput 
            dan mengolah database lainnya. semua instruksi atau fungsi yang berhubung dengan pengolahan 
            database diletakkan didalam model. sebagai contoh, jika ingin membuat aplikasi untuk menghitung 
            luas dan keliling lingkaran. maka dapat memodelkan objek lingkaran sebagai kelas model.
            <p>Sebagai catatan, semua model harus disimpan dalam folder application\models.</p>
            <li>
              View
            </li>
            <p>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
            tampilan dari user interface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website</p>
            <li>
              Controller
            </li>
            Controller merupakan kupula intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung,
            intinya data yang tersimpan di database(model) di ambil oleh controller dan kemudian controller pula yang menampilkannya ke view.
            jadi controllerlah yang mengolah intruksi.
            <p>
              Dari penjelasan tentang model, view, dan controller di atas dapat disimpulkan bahwa controller sebagai penghubung View
              dan model. misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi
              pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan
              aplikasi dengan cara mvc ini karena web designer atau front end developer tidak perlu lagi berhubungan  denga controller
              dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi. karena back-end developer yang menangani
              bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan terstruktur.
            </p>
          </ol>
      </p>
    </div>
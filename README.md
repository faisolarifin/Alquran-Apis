### Pengenalan
Open Al-Quran APIs merupakan layanan terbuka yang menyediakan  surah-surah Al-Qur'an. Layanan ini dapat diakses secara public tanpa  harus melakukan autentikasi dan autorisasi terlebih dahulu. Surah  Al-Quran kami disediakan bentuk output API dengan format json, sehingga  akan lebih mudah untuk parsing. API ini dapat dikonsumsi pada server  side maupun pada elemen client side dalam mengembangkan aplikasi baik  berbasis Web, Desktop maupun Mobile. Adanya Open API ini diharapkan  dapat membantu para developer App dalam mengembangkan aplikasi Al-Quran.

### Mendapatkan Surah 

Daftar Surah Al-Quran terdapat 114 Surah yang dapat diakses melalui endpoint berikut :

```
https://alquranapi.herokuapp.com/apis/v2/surah/
```

Endpoint tersebut mengembalikan nilai json yang berisi, Nama Surah Latin dan Arab, Arti, Jumlah Ayat dan Tepat Diturunkannya  (Makkiyah/Madaniyah)

### Mendapatkan Juz 

Daftar Juz Al-Quran terdapat 30 Juz yang dapat diakses melalui endpoint berikut:

```
https://alquranapi.herokuapp.com/apis/v2/juz/
```

Endpoint tersebut mengembalikan nilai json yang berisi Nama Juz Latin dan Arab.

## Mendapatkan Ayat Berdasarkan Surah

Untuk mendapatkan ayat-ayat dalam satu Surah dapat mengakses melalui  endpoint yang serupa dengan akses daftar Surah. Akses terhadap ayat  berdasarkan Surah dapat ditambahkan {id} pada segment terakhir. {id}  tersebut merujuk merujuk pada nomer Surah Al-Qur’an.

```
https://alquranapi.herokuapp.com/apis/v2/surah/{id}
```

Endpoint akan mengembalikan json berisikan, Nomer Surah Latin + Arab, Ayat Latin + Arab, dan Terjemahannya.

## Mendapatkan Ayat Berdasarkan Juz

Untuk mendapatkan ayat-ayat dalam satu Juz dapat mengakses melalui  endpoint yang serupa dengan akses daftar Juz. Akses terhadap ayat  berdasarkan Juz dapat dilakukan dengan menambahkan {id} pada segment  terakhir, {id} tersebut merujuk merujuk pada nomer Juz Al-Qur’an.

```
https://alquranapi.herokuapp.com/apis/v2/juz/{id}
```

Endpoint juga mengembalikan ayat dalam satu Juz dalam bentu json  berisikan, Nomer Surah Latin + Arab, Ayat Latin + Arab, serta  Terjemahannya.

## Version History (Changelog) 

Versi 2.0 API menyediakan akses untuk mendapatkan Daftar Surah, Daftar Juz, Mendapatkan Ayat berdasarkan  Nomer Surah maupun Nomer Juz. 

------

Kritik dan Saran dapat anda kirimkan melalui email : [faisolofficial99@gmail.com](mailto:faisoloffial99@gmail.com)

## License 

Layanan API ini terbuka untuk umum dan dapat digunakan secara free.

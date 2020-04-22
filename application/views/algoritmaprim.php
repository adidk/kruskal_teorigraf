<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-8">
            <p align='justify'>
                Algoritme Prim adalah sebuah algoritme dalam teori graf untuk mencari pohon rentang minimum untuk sebuah graf berbobot yang saling terhubung. Ini berarti bahwa sebuah himpunan bagian dari edge yang membentuk suatu pohon yang mengandung node, di mana bobot keseluruhan dari semua edge dalam pohon diminimalisasikan. Bila graf tersebut tidak terhubung, maka graf itu hanya memiliki satu pohon rentang minimum untuk satu dari komponen yang terhubung. Algoritme ini ditemukan pada 1930 oleh matematikawan Vojtěch Jarník dan kemudian secara terpisah oleh computer scientist Robert C. Prim pada 1957 dan ditemukan kembali oleh Dijkstra pada 1959. Karena itu algoritme ini sering dinamai algoritme DJP atau algoritme Jarnik.
            </p>
            <table border="1" cellspacing="0" cellpadding="5">
                <tbody>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_0.svg" class="image"><img alt="Prim Algorithm 0.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Prim_Algorithm_0.svg/200px-Prim_Algorithm_0.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Prim_Algorithm_0.svg/300px-Prim_Algorithm_0.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Prim_Algorithm_0.svg/400px-Prim_Algorithm_0.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Ini adalah graf berbobot awal. Graf ini bukan pohon karena ada circuit. Nama yang lebih tepat untuk diagram ini adalah graf atau jaringan. Angka-angka dekat garis penghubung adalah bobotnya. Belum ada garis yang ditandai, dan node <b>D</b> dipilih secara sembarang sebagai titik awal.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_1.svg" class="image"><img alt="Prim Algorithm 1.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/Prim_Algorithm_1.svg/200px-Prim_Algorithm_1.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/Prim_Algorithm_1.svg/300px-Prim_Algorithm_1.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/56/Prim_Algorithm_1.svg/400px-Prim_Algorithm_1.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Node kedua yang dipilih adalah yang terdekat ke <b>D</b>: <b>A</b> jauhnya 5, <b>B</b> 9, <b>E</b> 15, dan <b>F</b> 6. Dari keempatnya, 5 adalah yang terkecil, jadi kita tandai node <b>A</b> dan cabang <b>DA</b>.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_2.svg" class="image"><img alt="Prim Algorithm 2.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Prim_Algorithm_2.svg/200px-Prim_Algorithm_2.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Prim_Algorithm_2.svg/300px-Prim_Algorithm_2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Prim_Algorithm_2.svg/400px-Prim_Algorithm_2.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Node berikutnya yang dipilih adalah yang terdekat dari <b>D</b> <i>atau</i> <b>A</b>. <b>B</b> jauhnya 9 dari <b>D</b> dan 7 dari <b>A</b>, <b>E</b> jauhnya 15, dan <b>F</b> 6. 6 adalah yang terkecil, jadi kita tandai node <b>F</b> dan cabang <b>DF</b>.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_3.svg" class="image"><img alt="Prim Algorithm 3.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Prim_Algorithm_3.svg/200px-Prim_Algorithm_3.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Prim_Algorithm_3.svg/300px-Prim_Algorithm_3.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Prim_Algorithm_3.svg/400px-Prim_Algorithm_3.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Algoritme ini berlanjut seperti di atas. Node <b>B</b>, yang jauhnya 7 dari <b>A</b>, ditandai. Di sini, cabang <b>DB</b> ditandai merah, karena baik node <b>B</b> dan node <b>D</b> telah ditandai hijau, sehingga DB tidak dapat digunakan.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_4.svg" class="image"><img alt="Prim Algorithm 4.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Prim_Algorithm_4.svg/200px-Prim_Algorithm_4.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Prim_Algorithm_4.svg/300px-Prim_Algorithm_4.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Prim_Algorithm_4.svg/400px-Prim_Algorithm_4.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Dalam hal ini, kita dapat memilih antara <b>C</b>, <b>E</b>, dan <b>G</b>. <b>C</b> jauhnya 8 dari <b>B</b>, <b>E</b> 7 dari <b>B</b>, dan <b>G</b> 11 dari <b>F</b>. <b>E</b> yang terdekat, jadi kita tandai node <b>E</b> dan cabang <b>EB</b>. Dua cabang lain ditandai merah, karena kedua node yang terhubung telah digunakan.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_5.svg" class="image"><img alt="Prim Algorithm 5.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Prim_Algorithm_5.svg/200px-Prim_Algorithm_5.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Prim_Algorithm_5.svg/300px-Prim_Algorithm_5.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Prim_Algorithm_5.svg/400px-Prim_Algorithm_5.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Di sini, node yang tersedia adalah <b>C</b> dan <b>G</b>. <b>C</b> jauhnya 5 dari <b>E</b>, dan <b>G</b> 9 dari <b>E</b>. <b>C</b> dipilih, jadi ditandai bersama dengan cabang <b>EC</b>. Cabang <b>BC</b> juga ditandai merah.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/wiki/Berkas:Prim_Algorithm_6.svg" class="image"><img alt="Prim Algorithm 6.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Prim_Algorithm_6.svg/200px-Prim_Algorithm_6.svg.png" decoding="async" width="200" height="168" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Prim_Algorithm_6.svg/300px-Prim_Algorithm_6.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Prim_Algorithm_6.svg/400px-Prim_Algorithm_6.svg.png 2x" data-file-width="618" data-file-height="518"></a>
                        </td>
                        <td>Node <b>G</b> adalah satu-satunya yang tersisa. Jauhnya 11 dari <b>F</b>, dan 9 dari <b>E</b>. <b>E</b> lebih dekat, jadi kita tandai cabang <b>EG</b>. Sekarang semua node telah terhubung, dan pohon rentang minimum ditunjukkan dengan warna hijau, bobotnya 39.
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
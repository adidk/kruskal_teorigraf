<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-8">
            <p align='justify'>
                Algoritma Kruskal adalah algoritma pohon rentang minimum yang menemukan tepi dengan bobot sekecil mungkin yang menghubungkan dua pohon di hutan. [1] Ini adalah algoritma serakah dalam teori grafik karena ia menemukan pohon spanning minimum untuk grafik tertimbang yang terhubung yang menambah kenaikan biaya busur pada setiap langkah. [1] Ini berarti ia menemukan subset dari tepi yang membentuk pohon yang mencakup setiap titik , di mana total berat semua tepi di pohon diminimalkan. Jika grafik tidak terhubung, maka ia akan menemukan hutan spanning minimum (pohon spanning minimum untuk setiap komponen yang terhubung ).
            </p>
            <table border="1" cellspacing="1" cellpadding="5" class="wikitable">
                <tbody>
                    <tr>
                        <th> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">Image</span> Gambar</span> </th>
                        <th> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">Description</span> Deskripsi</span> </th>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 1.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Kruskal_Algorithm_1.svg/200px-Kruskal_Algorithm_1.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 1.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Kruskal_Algorithm_1.svg/200px-Kruskal_Algorithm_1.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Kruskal_Algorithm_1.svg/300px-Kruskal_Algorithm_1.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Kruskal_Algorithm_1.svg/400px-Kruskal_Algorithm_1.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><b>AD</b> and <b>CE</b> are the shortest edges, with length 5, and <b>AD</b> has been <a href="https://translate.googleusercontent.com/translate_c?client=srp&amp;depth=1&amp;hl=id&amp;rurl=translate.google.com&amp;sl=en&amp;sp=nmt4&amp;tl=id&amp;u=https://en.m.wikipedia.org/wiki/Arbitrary&amp;xid=17259,15700021,15700186,15700191,15700256,15700259,15700262,15700265,15700271,15700283&amp;usg=ALkJrhgRjSXkF_B9knDEb5-oxqe4kLHRww" class="mw-redirect" title="Sewenang-wenang">arbitrarily</a> chosen, so it is highlighted.</span> <b>AD</b> dan <b>CE</b> adalah tepi terpendek, dengan panjang 5, dan <b>AD</b> telah dipilih secara <a href="https://translate.googleusercontent.com/translate_c?client=srp&amp;depth=1&amp;hl=id&amp;rurl=translate.google.com&amp;sl=en&amp;sp=nmt4&amp;tl=id&amp;u=https://en.m.wikipedia.org/wiki/Arbitrary&amp;xid=17259,15700021,15700186,15700191,15700256,15700259,15700262,15700265,15700271,15700283&amp;usg=ALkJrhgRjSXkF_B9knDEb5-oxqe4kLHRww" class="mw-redirect" title="Sewenang-wenang">sewenang-wenang</a> , sehingga disorot.</span> </td>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 2.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Kruskal_Algorithm_2.svg/200px-Kruskal_Algorithm_2.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 2.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Kruskal_Algorithm_2.svg/200px-Kruskal_Algorithm_2.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Kruskal_Algorithm_2.svg/300px-Kruskal_Algorithm_2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Kruskal_Algorithm_2.svg/400px-Kruskal_Algorithm_2.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><b>CE</b> is now the shortest edge that does not form a cycle, with length 5, so it is highlighted as the second edge.</span> <b>CE</b> sekarang merupakan tepi terpendek yang tidak membentuk siklus, dengan panjang 5, sehingga disorot sebagai tepi kedua.</span> </td>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 3.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Kruskal_Algorithm_3.svg/200px-Kruskal_Algorithm_3.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 3.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Kruskal_Algorithm_3.svg/200px-Kruskal_Algorithm_3.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Kruskal_Algorithm_3.svg/300px-Kruskal_Algorithm_3.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Kruskal_Algorithm_3.svg/400px-Kruskal_Algorithm_3.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">The next edge, <b>DF</b> with length 6, is highlighted using much the same method.</span> Tepi berikutnya, <b>DF</b> dengan panjang 6, disorot menggunakan banyak metode yang sama.</span> </td>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 4.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Kruskal_Algorithm_4.svg/200px-Kruskal_Algorithm_4.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 4.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Kruskal_Algorithm_4.svg/200px-Kruskal_Algorithm_4.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Kruskal_Algorithm_4.svg/300px-Kruskal_Algorithm_4.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Kruskal_Algorithm_4.svg/400px-Kruskal_Algorithm_4.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">The next-shortest edges are <b>AB</b> and <b>BE</b> , both with length 7. <b>AB</b> is chosen arbitrarily, and is highlighted.</span> Tepi terpendek berikutnya adalah <b>AB</b> dan <b>BE</b> , keduanya dengan panjang 7. <b>AB</b> dipilih secara sewenang-wenang, dan disorot.</span> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">The edge <b>BD</b> has been highlighted in red, because there already exists a path (in green) between <b>B</b> and <b>D</b> , so it would form a cycle ( <b>ABD</b> ) if it were chosen.</span> Tepi <b>BD</b> telah disorot dalam warna merah, karena sudah ada jalur (berwarna hijau) antara <b>B</b> dan <b>D</b> , sehingga akan membentuk siklus ( <b>ABD</b> ) jika dipilih.</span> </td>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 5.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Kruskal_Algorithm_5.svg/200px-Kruskal_Algorithm_5.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 5.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Kruskal_Algorithm_5.svg/200px-Kruskal_Algorithm_5.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Kruskal_Algorithm_5.svg/300px-Kruskal_Algorithm_5.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Kruskal_Algorithm_5.svg/400px-Kruskal_Algorithm_5.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">The process continues to highlight the next-smallest edge, <b>BE</b> with length 7. Many more edges are highlighted in red at this stage: <b>BC</b> because it would form the loop <b>BCE</b> , <b>DE</b> because it would form the loop <b>DEBA</b> , and <b>FE</b> because it would form <b>FEBAD</b> .</span> Proses terus menyoroti tepi berikutnya-terkecil, <b>BE</b> dengan panjang 7. Banyak lagi tepi disorot dalam warna merah pada tahap ini: <b>BC</b> karena akan membentuk loop <b>BCE</b> , <b>DE</b> karena akan membentuk loop <b>DEBA</b> , dan <b>FE</b> karena akan membentuk <b>FEBAD</b> .</span> </td>
                    </tr>
                    <tr>
                        <td><noscript><img alt="Algoritma Kruskal 6.svg" src=//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Kruskal_Algorithm_6.svg/200px-Kruskal_Algorithm_6.svg.png decoding=async width=200 height=168 data-file-width=618 data-file-height=518></noscript><img width="200" height="168" class="image-lazy-loaded" alt="Kruskal Algorithm 6.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Kruskal_Algorithm_6.svg/200px-Kruskal_Algorithm_6.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Kruskal_Algorithm_6.svg/300px-Kruskal_Algorithm_6.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/87/Kruskal_Algorithm_6.svg/400px-Kruskal_Algorithm_6.svg.png 2x" style="width: 200px; height: 168px;"></td>
                        <td> <span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left">Finally, the process finishes with the edge <b>EG</b> of length 9, and the minimum spanning tree is found.</span> Akhirnya, proses selesai dengan <b>EG</b> tepi panjang 9, dan pohon spanning minimum ditemukan.</span> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-5">
                <form method="post" action="<?= base_url() ?>kruskal/hitung">
                    <div class="form-group">
                        <label for="vertex">Masukkan Jumlah Vertex</label>
                        <input type="text" name="vertex" id="vertex" placeholder="Vertex" class="form-control">
                    </div>
                    <div class="form-group fieldGroup">
                        <label for="">Edge : Definisikan nilai edge</label>
                        <div class="input-group">
                            <input type="text" name="source[]" class="form-control" placeholder="Titik Mulai" />
                            <input type="text" name="end[]" class="form-control" placeholder="Titik Akhir" />
                            <input type="text" name="value[]" class="form-control" placeholder="Nilai Edge" />
                            <div class="input-group-addon ml-2">
                                <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary" value="Hitung" />
                </form>

            <!-- copy of input fields group -->
            <div class="form-group fieldGroupCopy" style="display: none;">
                <div class="input-group">
                    <input type="text" name="source[]" class="form-control" placeholder="Titik Mulai" />
                    <input type="text" name="end[]" class="form-control" placeholder="Titik Akhir" />
                    <input type="text" name="value[]" class="form-control" placeholder="Nilai Edge" />
                    <div class="input-group-addon ml-2">
                        <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-minus-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
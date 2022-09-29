<body>
    <div class=" offset-lg-3 col-lg-6">
        <div class="container">
            <br>
            <h2>Pengisian Absen</h2>
            <form class="col" action="absen-teknisi-proses.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-4" col="12">
                    <label for="inputKet" class="form-label">Keterangan</label>
                    <div class="input-group">
                        <!--<span class="input-group-text">M</span>-->
                        <select class="form-select form-select-sm mb-1" aria-label=".form-select-sm example" name="ket">
                            <option selected>Pilih keterangan absen</option>
                            <option value="hadir">hadir</option>
                            <option value="sakit">sakit</option>
                            <option value="izin">izin</option>
                        </select>
                    </div>
                    <!-- <div class="mb-3" col="12">
                    <label for="inputTgl" class="form-label">Id Pegawai</label>
                    <input type="text" class="form-control form-control-sm" name="id_pegawai" id="id_pegawai"
                        autocomplete="off" required>
                    </div> -->
                </div>
                <div class="mb-3" col="12">
                    <label for="inputTgl" class="form-label">Tanggal</label>
                    <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal"
                        autocomplete="off" required>
                        <div class="mb-3" col="12">
                        </div>
                    <label for="inputTgl" class="form-label">Jam</label>
                    <input type="time" class="form-control form-control-sm" name="jam" id="jam"
                        autocomplete="off" required>
                </div>
                <div class="mb-3" col="12">
                    <button class="btn btn-primary" type="submit" name="submit-menu">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
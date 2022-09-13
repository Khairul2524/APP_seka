<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Kriteria </h5>
                    <button type="button" class="btn btn-primary tombol-tambah" data-toggle="modal" data-target="#exampleModal">
                        Tambah Kriteria
                    </button>

                    <table class="table table-hover mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kriteria</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kriteria as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row['kriteria'] ?></td>
                                    <td><?= $row['jenis'] ?></td>
                                    <td><?= $row['bobot'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning tombol-ubah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_kriteria'] ?>">Ubah</button>
                                        <a href="<?= site_url("/kriteria/" . $row['id_kriteria'] . "/delete")   ?>" type="button" class="btn btn-outline-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= site_url('/kriteria/add') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="kriteria" class="form-label">Kriteria</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="kriteria" name="kriteria" autocomplete="off" required>
                        </div>
                        <div class="col-12">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="Cost">Cost</option>
                                <option value="Benefit">Benefit</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="bobot" class="form-label">Bobot</label>
                            <input type="text" class="form-control" id="bobot" name="bobot" autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

</div>




<script>
    $(function() {
        // tambah
        $('.tombol-tambah').on('click', function() {
            // console.log('oke')
            $('.modal-title').html('Tambah Kriteria')

            $('.modal-footer button[type= submit] ').html('Simpan')
            $('#id').val('')
            $('#kriteria').val('')
            $('#jenis').val('')
            $('#bobot').val('')

        })
        // tombl ubah
        $('.tombol-ubah').on('click', function() {
            // console.log('oke')
            $('.modal-title').html('Ubah Kriteria')
            $('.modal-dialog form').attr('action', `<?= site_url('kriteria/update') ?>`)
            $('.modal-footer button[type= submit] ').html('Simpan')
            const id = $(this).data('id')
            // console.log(id)
            $.ajax({
                url: `<?= site_url('kriteria/edit') ?>`,
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    // console.log(data)
                    $('#id').val(data.id_kriteria)
                    $('#kriteria').val(data.kriteria)
                    $('#jenis').val(data.jenis)
                    $('#bobot').val(data.bobot)
                }
            })
        })
    })
</script>
<?= $this->endSection() ?>
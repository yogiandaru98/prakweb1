<a href="/create" type="button" class="btn btn-primary">Tambah</a>
<table class=" table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Created_At</th>
            <th colspan="2" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>`
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) :
        ?>
        <tr>
            <th scope="row"><?= $no; ?>
            </th>
            <td><?= $mhs['npm']; ?>
            </td>
            <td><?= $mhs['nama']; ?>
            </td>
            <td><?= $mhs['alamat']; ?>
            </td>
            <td><?= $mhs['created_at']; ?>
            </td>

            <td>
                <form action="/delete/<?= $mhs['id']; ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <a href="/edit/<?= $mhs['id']; ?>" type="button" class="btn btn-warning">Edit</a>
            </td>

        </tr>
        <?php $no++;
        endforeach ?>
    </tbody>
</table>
<x-layout>
    <x-slot:title>Category</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-end">
            <a href="/category/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Snack</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Minuman Dingin</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Makanan Berat</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

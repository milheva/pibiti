<x-layout>
    <x-slot:title>User</x-slot:title>
    <div class="container">
        <div class="d-flex mb-2 justify-content-between">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari Akun" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            <a href="/users/add" class="btn btn-dark justify-end">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>I Wayan Indra</td>
                        <td>iwayanindras14@gmail.com</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>I Made Bagas</td>
                        <td>imadebagas@gmail.com</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>I Nyoman Kevin</td>
                        <td>inyomankevin@gmail.com</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

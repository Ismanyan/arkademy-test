<link rel="stylesheet" href="<?= asset_url() . 'css/custom.css' ?>">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-white bg-shite shadow-sm animated fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= asset_url() . 'img/logo.png' ?>" alt="Logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="form-inline my-2 mx-auto w-75">
                    <input class="form-control mr-sm-2 w-100 nav-form" type="search" placeholder="Search..." aria-label="Search">
                </form>
                <button class="btn btn-warning my-2 my-sm-0 shadow-sm" type="submit" data-toggle="modal" data-target="#addModal">ADD</button>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <div class="container mt-5 animated fadeIn">
        <table class="table table-borderless shadow-sm rounded-table">
            <thead>
                <tr class="table-warning rounded-table">
                    <th scope="col">No</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $key) : ?>
                    <tr>
                        <th scope="row"><?= $key->id ?></th>
                        <td><?= $key->cashier_name ?></td>
                        <td><?= $key->product_name ?></td>
                        <td><?= $key->category_name ?></td>
                        <td>Rp.<?= $key->product_price ?></td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url() . 'img/edit.png' ?>" alt="edit" width="20"></a>
                            <a href="<?= base_url('delete/' . $key->id) ?>"><img class="ml-3" src="<?= asset_url() . 'img/trash.png'; ?>" alt="trash" width="20"></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- ADD MODAL -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title font-weight-bold" id="addModalLabel">ADD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-danger">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('/add') ?>">
                        <div class="form-group">
                            <select class="form-control" id="Cashier" name="cashier" required>
                                <option disabled selected>-- Pilih Kasir --</option>
                                <?php foreach ($cashier as $key) : ?>
                                    <option value="<?= $key->id ?>"><?= $key->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="Category" name="category" required>
                                <option disabled selected>-- Pilih Kategori --</option>
                                <?php foreach ($category as $key) : ?>
                                    <option value="<?= $key->id ?>"><?= $key->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="produk" placeholder="Nama Produk ..." name="product" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="harga" placeholder="Harga Produk ..." name="harga" required >
                        </div>
                        <button type="submit" class="btn btn-warning shadow-sm float-right">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
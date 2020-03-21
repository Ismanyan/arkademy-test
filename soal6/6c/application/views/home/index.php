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
                    <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search..." aria-label="Search">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Pevita Pearce</td>
                    <td>Latte</td>
                    <td>Drink</td>
                    <td>Rp.10,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#1" data-name="Pevita Pearce"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Raisa Andriana</td>
                    <td>Cake</td>
                    <td>Food</td>
                    <td>Rp.15,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#2" data-name="Raisa Andriana"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Raisa Andriana</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp.30,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#3" data-name="Raisa Andriana"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Pevita Pearce</td>
                    <td>Gudeg</td>
                    <td>Food</td>
                    <td>Rp.35,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#4" data-name="Pevita Pearce"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Joko Purwadhi</td>
                    <td>Ice Tea</td>
                    <td>Drink</td>
                    <td>Rp.55,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#5" data-name="Joko Purwadhi"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bilkis Ismail</td>
                    <td>Takoyaki</td>
                    <td>Food</td>
                    <td>Rp.10,0000</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editModal"><img src="<?= asset_url().'img/edit.png'?>" alt="edit" width="20"></a>
                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="#6" data-name="Bilkis Ismail"><img class="ml-3" src="<?=asset_url().'img/trash.png';?>" alt="trash" width="20"></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
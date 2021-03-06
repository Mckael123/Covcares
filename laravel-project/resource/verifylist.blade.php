<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verification page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href=/css/verifyadmin.css>
    <link rel="shortcut icon" href="HomePage LOGO.png" type="image/x-icon">
</head>

<body>
    <div class="header">
        <div class="nav">
            <div class="logo">
                <!-- <a href="#"> <img src="humicon.png"></a> -->
            </div>
            <div class="menu">
                <a href="{{url('/admin')}}">
                    <h1 class="menu-font"> Home</h1>
                </a>
                <a href="{{url('/editnews')}}">
                    <h1 class="menu-font"> Edit News</h1>
                </a>
                <a href="{{url('/editproduct')}}">
                    <h1 class="menu-font"> Edit Product</h1>
                </a>
                <a href="{{url('/verifylist')}}">
                    <h1 class="menu-font">Verification</h1>
                </a>
                <a href="{{url('/login')}}">
                    <h1 class="menu-font">Log out</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="container ">

        <!-- tengah -->
        <div class="card" id="halo">
            <div class="card-header bg-primary text-white">
                verification list
            </div>
            <div class="card-body">

                <table class="table table-border table-striped">
                    <tr>
                        <th class="text-black">No</th>
                        <th class="text-black">order ID</th>
                        <th class="text-black">Nama</th>
                        <th class="text-black">Alamat</th>
                        <th class="text-black">View</th>
                        <th>Status</th>
                        
                    </tr>
                    <tr class="text-black">
                        <td class="text-black"> 1</td>
                        <td class="text-black"> QcjBEn242BE</td>
                        <td class="text-black">Sultan Indonesia</td>
                        <td class="text-black">JL.melborne hard game</td>
                        <td class="text-black">
                            <a href="{{url('/verifyadmin')}}"
                                class="btn btn-sm btn-warning"> Detail</a>

                        </td>
                        <td> <div class="btn  btn-danger"> unverified</div></td>
                    </tr>
                    <tr class="text-black">
                        <td class="text-black"> 2</td>
                        <td class="text-black"> QhgBEn246BE</td>
                        <td class="text-black">Bebim </td>
                        <td class="text-black">JL.yang kau tempuh</td>
                        <td class="text-black">
                            <a href="{{url('/verifyadmin')}}"
                                class="btn btn-sm btn-warning"> Detail</a>
                        </td>
                        <td> <div class="btn  btn-success"> verified</div></td>
                    </tr>

                </table>
            </div>

        </div>

    </div>
</body>

</html>
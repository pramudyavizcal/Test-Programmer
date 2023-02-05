
<!-- COPYRIGHT Pramudya Vizkal Arfianto -->
<!-- Test Programmer UIINET 2023 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <style type="text/css">
        body {
            padding-top: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Data Users dari (<font color="blue">https://jsonplaceholder.typicode.com/users</font>)</h1>
        &nbsp;
        <div class="row">
            <div class="col-md-12">
                <table id="data" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Website</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $('#data').DataTable({
        language: {
        searchPlaceholder: "Keyword apapun disini.."
    },
        ajax: {
            url: "https://jsonplaceholder.typicode.com/users",
            dataSrc: ""
        },
        data: [],
        columns: [
            {
                "data": 'id',
                "sortable": false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                "data": "name"
            },
            {
                "data": "username"
            },
            {
                "data": "email"
            },
            {
                "data": "address",
                render: function(data,type,row) { 
                    return (data["street"] +", <br>"+ 
                    data["suite"] +", <br>"+ 
                    data["city"] +", <br>"+ 
                    data["zipcode"] +", <br> Lat : "+ 
                    data["geo"]["lat"] +", <br> Lng : "+ 
                    data["geo"]["lng"]
                    )}
            },
            {
                "data": "phone"
            },
            {
                "data": "website"
            },
            {
                "data": "company",
                render: function(data,type,row) { 
                    return (data["name"] +", <br>"+ 
                    data["catchPhrase"] +", <br>"+ 
                    data["bs"]
                    )}
            }
    ]
    });
</script>

<style>
    footer {
        position: relative;
        height: 50px;
        width: 100%;
        background-color: #333333;
    }

    p.copyright {
        position: absolute;
        width: 100%;
        color: #fff;
        line-height: 20px;
        font-size: 1em;
        text-align: center;
        bottom:0;
    }
</style>
<footer>
    <p class="copyright">© 2023 Pramudya Vizkal Arfianto</p>
</footer>

</html>
@extends('layouts.dash')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Categorie</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Categorie</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-6">
                    <form id="addCustomer"  method="POST" action="">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Categorie</label>
                                    <input id="name" type="text" class="form-control" name="category" placeholder="Categorie" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" cols="15" rows="6"></textarea>
                                </div>
                            <button id="submitCustomer" type="button" class="btn btn-block btn-primary  m-t-n-xs">Valider</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Categorie</h5>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Chercher">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Categorie</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody id="tbody">

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Model -->
    <form action="" method="POST" class="users-remove-record-model">
        <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Suppression</h4>
                        <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal"
                                aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer cette reservation?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
                                data-dismiss="modal">Fermer
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--Firebase Tasks--}}
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

    <script>

        // Initialize Firebase
        var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        };
        firebase.initializeApp(config);

        var database = firebase.database();

        var lastIndex = 0;

        // Get Data
        firebase.database().ref('categories/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr class="gradeX">\
        		<td>' + value.category + '</td>\
        		<td>' + value.description + '</td>\
        		<td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '"><i class="fa fa-edit"></i></button>\
        		<td><button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '"><i class="fa fa-trash"></i></button></td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // Add Data
        $('#submitCustomer').on('click', function () {
            alert('Jesuus');
            console.log("Jesus");
            var values = $("#addCustomer").serializeArray();
            var category = values[0].value;
            var description = values[1].value;
            var userID = lastIndex + 1;

            console.log(values);
            firebase.database().ref('categories/' + userID).set({
                category: category,
                description: description
            });

            // Reassign lastID value
            lastIndex = userID;
            $("#addCustomer input").val("");
        });

        // Remove Data
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('categories/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });
    </script>
@endsection


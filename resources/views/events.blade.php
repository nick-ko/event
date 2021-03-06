@extends('layouts.dash')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Evenement</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Evenement</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Ajouter un evenement </h5>
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
                        <div class="row">
                            <form id="addCustomer"  method="POST" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="sr-only">titre</label>
                                            <input id="name" type="text" class="form-control" name="title" placeholder="Titre"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">categorie</label>
                                            <input id="email" type="text" class="form-control" name="category" placeholder="Categorie"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="sr-only">date</label>
                                            <input id="email" type="date" class="form-control" name="eventdate" placeholder="Date"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">lieu</label>
                                            <input id="email" type="text" class="form-control" name="lieu" placeholder="Lieu"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">longitude Google Maps</label>
                                            <input id="email" type="text" class="form-control" name="longitude" placeholder="longitude Google Maps"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">latitude Google Maps</label>
                                            <input id="email" type="text" class="form-control" name="latitude" placeholder="latitude Google Maps"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="sr-only">Image</label>
                                            <input id="name" type="text" class="form-control" name="image" placeholder="Image"
                                                   required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">court description</label>
                                            <textarea class="form-control" name="short_description" placeholder="Court description" cols="15" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Longue description</label>
                                            <textarea class="form-control" name="long_description" placeholder="Long description" cols="15" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <button id="submitCustomer" type="button" class="btn btn-sm btn-primary  m-t-n-xs">Valider</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Evenements</h5>

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
                                <th>Title</th>
                                <th>Categorie</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Image</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Court description</th>
                                <th>Long Description</th>
                                <th  class="text-center">Action</th>
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

    <!-- Update Model -->
    <form action="" method="POST" class="users-update-record-model form-horizontal">
            <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Update</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×
                            </button>
                        </div>
                        <div class="modal-body" id="updateBody">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="button" class="btn btn-success updateCustomer">Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
                                data-dismiss="modal">Close
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
        firebase.database().ref('events/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr class="gradeX">\
        		<td>' + value.title + '</td>\
        		<td>' + value.category + '</td>\
        		<td>' + value.eventdate + '</td>\
        		<td>' + value.lieu + '</td>\
        		<td><img src="' + value.image + '" alt="" style="height: 100px; width: 100px"></td>\
        		<td>' + value.latitude + '</td>\
        		<td>' + value.longitude + '</td>\
        		<td>' + value.short_description + '</td>\
        		<td>' + value.long_description + '</td>\
        		<td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '"><i class="fa fa-edit"></i></button>\
        		<button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '"><i class="fa fa-trash"></i></button></td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // Add Data
        $('#submitCustomer').on('click', function () {
            var values = $("#addCustomer").serializeArray();
            var title = values[0].value;
            var category = values[1].value;
            var eventdate = values[2].value;
            var lieu = values[3].value;
            var image = values[6].value;
            var longitude = values[4].value;
            var latitude = values[5].value;
            var short_description = values[7].value;
            var long_description = values[8].value;
            var userID = lastIndex + 1;

            console.log(values);

            firebase.database().ref('events/' + userID).set({
                title: title,
                category: category,
                eventdate: eventdate,
                lieu: lieu,
                image: image,
                longitude: longitude,
                latitude: latitude,
                short_description: short_description,
                long_description: long_description
            });

            // Reassign lastID value
            lastIndex = userID;
            $("#addCustomer input").val("");
        });

        // Update Data
        var updateID = 0;
        $('body').on('click', '.updateData', function () {
            updateID = $(this).attr('data-id');
            firebase.database().ref('events/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var updateData = '<div class="row"><div class="form-group">\
		        <label for="first_name" class="col-md-6 col-form-label">Name</label>\
		        <div class="col-md-6">\
		            <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="last_name" class="col-md-12 col-form-label">Email</label>\
		        <div class="col-md-12">\
		            <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
		        </div>\
		    </div>\
		    </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateCustomer').on('click', function () {
            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                name: values[0].value,
                email: values[1].value,
            };

            var updates = {};
            updates['/customers/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });

        // Remove Data
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('events/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });
    </script>
@endsection


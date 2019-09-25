@extends('layouts.dash')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Administrateur</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Administrateur</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-5">
                    <form id="addCustomer"  method="POST" action="">
                        <div class="form-group">
                            <label for="name" class="sr-only">Nom & Prenom</label>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nom & Prenom" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="name" class="sr-only">Speudo</label>
                            <input id="name" type="text" class="form-control" name="speudo" placeholder="Speudo" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="name" class="sr-only">Email</label>
                            <input id="name" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="name" class="sr-only">Mot de Passe</label>
                            <input id="name" type="password" class="form-control" name="pass" placeholder="Mot de Passe" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary  m-t-n-xs">Valider</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Liste des administrateurs</h5>

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
                                    <th>Nom & Prenom</th>
                                    <th>Speudo</th>
                                    <th>Email</th>
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
                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Fermer
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection



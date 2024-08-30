@extends('layouts.master')

@section('content')
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body">
                        <!-- Profile picture image-->
                        <div class="d-flex justify-content-center">
                            @if ($finds->photo == '')
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('asset/assets/img/demo/user-placeholder.svg') }}" alt="logo user" />
                            @else
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('storage') . '/' . $finds->photo }}" alt="logo user" />
                            @endif
                        </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4 text-center">{{ $finds->matricule }}</div>
                        <!-- Profile picture upload button-->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#formBackdrop">Changer la photo</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detail de l'agent</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>N° sécurité sociale</label>
                                        <input class="form-control" type="text" value="{{ $finds->num_secu_social }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Nom</label>
                                        <input class="form-control" type="text" value="{{ $finds->nom }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Prénoms</label>
                                        <input class="form-control" type="text" value="{{ $finds->prenom }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date de maissance</label>
                                        <input class="form-control" type="date" value="{{ $finds->date_nais }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Genre</label>
                                        <input class="form-control" type="text" value="{{ $finds->genre }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Résidence</label>
                                        <input class="form-control" type="text" value="{{ $finds->residence }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date d'embauche</label>
                                        <input class="form-control" type="date" value="{{ $finds->date_embauche }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Catégorie</label>
                                        <input class="form-control" type="text" value="{{ $finds->categorie }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Téléphone</label>
                                        <input class="form-control" type="number" value="{{ $finds->telephone }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Groupe sanguin</label>
                                        <input class="form-control" type="text" value="{{ $finds->grou_sang }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Père</label>
                                        <input class="form-control" type="text" value="{{ $finds->pere }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Mère</label>
                                        <input class="form-control" type="text" value="{{ $finds->mere }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Personne à prévenir</label>
                                        <input class="form-control" type="text" value="{{ $finds->perso_prevenir }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Tel PP</label>
                                        <input class="form-control" type="number"
                                            value="{{ $finds->tele_perso_prevenir }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Lieu de naissance</label>
                                        <input class="form-control" type="text" value="{{ $finds->lieunais }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <input class="form-control" type="text" value="{{ $finds->province }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Matrimoniale</label>
                                        <input class="form-control" type="text" value="{{ $finds->matrimoniale }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date résiliation contrat</label>
                                        <input class="form-control" type="date"
                                            value="{{ $finds->date_resiliation }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Fonction</label>
                                        <input class="form-control" type="text" value="{{ $finds->fonction }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input class="form-control" type="email" value="{{ $finds->email }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Contrat</label>
                                        <input class="form-control" type="text" value="{{ $finds->contrat }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>N° CNIB ou Passport</label>
                                        <input class="form-control" type="text" value="{{ $finds->num_cnib }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date d'établissement</label>
                                        <input class="form-control" type="date" value="{{ $finds->date_cnib }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Lieu d'établissement</label>
                                        <input class="form-control" type="text" value="{{ $finds->lieu_cnib }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Nbre enfants</label>
                                        <input class="form-control" type="number" value="{{ $finds->nbre_enfant }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Charge UITS</label>
                                        <input class="form-control" type="text" value="{{ $finds->charge_uts }}"
                                            readonly />
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="row text-center mt-5">
                                    <div class="col-lg-4">
                                        <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                            data-bs-target="#formPasswordBackdrop">Modifier</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#formPasswordBackdrop">Supprimer</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                            data-bs-target="#formPasswordBackdrop">Imprimer</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal password -->
    <div class="modal fade" id="formBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="formImageBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ajouter une photo de profile
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="p-2 m-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label>Choisissez la photo<span class="text-danger">*</span></label>
                                            <input class="form-control" name="photo" type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success">Ajouter</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

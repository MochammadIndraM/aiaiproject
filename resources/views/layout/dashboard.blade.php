@extends('frontend.head')
@section('title')
    Dashboard Page
@endsection
@section('pageheading')
    Dashboard
@endsection
@section('dashboard')
    active
@endsection
@section('konten')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pergerakan-material-tab" data-bs-toggle="tab"
                            href="#pergerakan-material" role="tab" aria-controls="pergerakan-material"
                            aria-selected="true">PERGERAKAN MATERIAL</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="transaksi-unit-tab" data-bs-toggle="tab" href="#transaksi-unit"
                            role="tab" aria-controls="transaksi-unit" aria-selected="false" tabindex="-1">TRANSAKSI
                            UNIT</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="keaktifan-user-tab" data-bs-toggle="tab" href="#keaktifan-user"
                            role="tab" aria-controls="keaktifan-user" aria-selected="false" tabindex="-1">KEAKTIFAN
                            USER</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ketersediaan-material-tab" data-bs-toggle="tab"
                            href="#ketersediaan-material" role="tab" aria-controls="ketersediaan-material"
                            aria-selected="false" tabindex="-1">KETERSEDIAAN MATERIAL</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pergerakan-material" role="tabpanel"
                        aria-labelledby="pergerakan-material-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Regional :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UIW :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UP3 :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Gudang :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>Stock Fast Moving :</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>Durasi :</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="transaksi-unit" role="tabpanel" aria-labelledby="transaksi-unit-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Regional :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UIW :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UP3 :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Gudang :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-8 mb-8">
                                    <div class="form-group row align-items-center">
                                        <br><br><br><br>
                                        <div class="col-lg-2 col-2">
                                            <label class="col-form-label">
                                                <h6>Periode :</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-3">
                                            <input type="text" id="first-name" class="form-control" name="fname">
                                        </div>
                                        <div class="col-lg-2 col-2 offset-1">
                                            <label class="col-form-label">
                                                <h6>s/d</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-2 col-2">
                                            <input type="text" id="first-name" class="form-control" name="fname">
                                        </div>
                                        <div class="col-lg-2 col-2">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="keaktifan-user" role="tabpanel" aria-labelledby="keaktifan-user-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Regional :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UIW :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>UP3 :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>ULP :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-8 mb-8">
                                    <div class="form-group row align-items-center">
                                        <br><br><br><br>
                                        <div class="col-lg-2 col-2">
                                            <label class="col-form-label">
                                                <h6>Periode :</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-3">
                                            <input type="text" id="first-name" class="form-control" name="fname">
                                        </div>
                                        <div class="col-lg-2 col-2 offset-1">
                                            <label class="col-form-label">
                                                <h6>s/d</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-2 col-2">
                                            <input type="text" id="first-name" class="form-control" name="fname">
                                        </div>
                                        <div class="col-lg-2 col-2">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ketersediaan-material" role="tabpanel"
                        aria-labelledby="ketersediaan-material-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <h6>Regional :</h6>
                                    <fieldset class="form-group">

                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <h6>UIW :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <h6>UP3 :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <h6>Gudang :</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

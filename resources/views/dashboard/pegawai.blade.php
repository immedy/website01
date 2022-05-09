@extends('layout.admin')
@section('dashboard')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Extended UI /</span> Text Divider</h4>

        <div class="row">
            <!-- Basic -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body">
                        <div class="divider">
                            <div class="divider-text">Text</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Basic -->

            <!-- Text Alignment -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <h5 class="card-header">Alignment</h5>
                    <div class="card-body">
                        <div class="divider text-start">
                            <div class="divider-text">Start</div>
                        </div>
                        <div class="divider text-start-center">
                            <div class="divider-text">Start-Center</div>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Center (Default)</div>
                        </div>
                        <div class="divider text-end-center">
                            <div class="divider-text">End-Center</div>
                        </div>
                        <div class="divider text-end">
                            <div class="divider-text">End</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Text Alignment -->

            <!-- Divider Colors -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <h5 class="card-header">Colors</h5>
                    <div class="card-body">
                        <div class="divider divider-primary">
                            <div class="divider-text">Primary</div>
                        </div>
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                        </div>
                        <div class="divider divider-danger">
                            <div class="divider-text">Danger</div>
                        </div>
                        <div class="divider divider-warning">
                            <div class="divider-text">Warning</div>
                        </div>
                        <div class="divider divider-info">
                            <div class="divider-text">Info</div>
                        </div>
                        <div class="divider divider-dark">
                            <div class="divider-text">Dark</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Divider Colors -->
        </div>
    </div>
    <!-- / Content -->
@endsection

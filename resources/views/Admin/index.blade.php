@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
            </div>
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="printer"></i>
                Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Download Report
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <th class="pt-0">Project Name</th>
                                    <th class="pt-0">Start Date</th>
                                    <th class="pt-0">Due Date</th>
                                    <th class="pt-0">Status</th>
                                    <th class="pt-0">Assign</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NobleUI jQuery</td>
                                    <td>01/01/2022</td>
                                    <td>26/04/2022</td>
                                    <td><span class="badge bg-danger">Released</span></td>
                                    <td>Leonardo Payne</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>NobleUI Angular</td>
                                    <td>01/01/2022</td>
                                    <td>26/04/2022</td>
                                    <td><span class="badge bg-success">Review</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>NobleUI ReactJs</td>
                                    <td>01/05/2022</td>
                                    <td>10/09/2022</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>Jensen Combs</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NobleUI VueJs</td>
                                    <td>01/01/2022</td>
                                    <td>31/11/2022</td>
                                    <td><span class="badge bg-warning">Work in Progress</span>
                                    </td>
                                    <td>Amiah Burton</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>NobleUI Laravel</td>
                                    <td>01/01/2022</td>
                                    <td>31/12/2022</td>
                                    <td><span class="badge bg-danger">Coming soon</span></td>
                                    <td>Yaretzi Mayo</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>NobleUI NodeJs</td>
                                    <td>01/01/2022</td>
                                    <td>31/12/2022</td>
                                    <td><span class="badge bg-primary">Coming soon</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td class="border-bottom">3</td>
                                    <td class="border-bottom">NobleUI EmberJs</td>
                                    <td class="border-bottom">01/05/2022</td>
                                    <td class="border-bottom">10/11/2022</td>
                                    <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                                    <td class="border-bottom">Jensen Combs</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
      
    </div> <!-- row -->

</div>
@endsection
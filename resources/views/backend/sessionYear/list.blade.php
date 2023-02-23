@extends('backend.master')

@section('backend')
<div class="pageContent">
    <div class="pageTitle shadow-sm">
        <h3 class="title">Budget Year</h3>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">

        <!-- Data View -->
        <div class="dataView mt-4 mt-md-5">
            <!-- Table -->
            <div class="table-responsive">
                <div class="mt-4">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="align-middle">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Session Year</th>
                                <th scope="col">Starting Month</th>
                                <th scope="col">Ending Month</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $data->year }}</td>
                                <td>{{ $data->string_month }}</td>
                                <td>{{ $data->ending_month }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btnPrimary dropdown-toggle d-flex align-items-center justify-content-around" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Actions </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa-solid fa-eye me-2"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa-solid fa-cash-register me-2"></i>
                                                    Set as Cash Drawer
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-solid fa-money-bill-transfer me-2"></i>
                                                    Transfer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

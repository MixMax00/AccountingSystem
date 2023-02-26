@extends('backend.master')

@section('backend')
<div class="pageContent">
    <div class="pageTitle shadow-sm d-flex justify-content-between">
        <h3 class="title">Budget List</h3>
        <a href="{{ route('admin.budget.create') }}" class="btn btn-primary">Add New Budget</a>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">

        <!-- Data View -->
        <div class="dataView mt-2 mt-md-2">
            <!-- Table -->
            <div class="table-responsive">

                <div class="mt-4">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="align-middle">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Budget Year</th>
                                <th scope="col">Probability</th>
                                <th scope="col">Source</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $data->year->staring_month }} - {{ $data->year->ending_month }}</td>
                                <td><span>$ </span>{{ $data->budget }}</td>
                                <td>{{ $data->budget_lists->count() }}</td>
                                <td>
                                    <a href="#" class="btn btn-info">View</a>
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

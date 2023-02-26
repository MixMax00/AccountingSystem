@extends('backend.master')


@section('backend')
<div class="pageContent">
    <!-- Page Title -->
    <div class="pageTitle shadow-sm">
        <h3 class="title">Add Budget Year</h3>
        <span>Please fill in the information below. The field labels marked with <span class="text-danger">*</span> are required input fields.</span>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">
        <form action="{{ route('sessionYear.store') }}" method="POST">
            @csrf
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <label for="accountName" class="form-label">Budget Year <span class="text-danger">*</span></label>
                    <select name="" id="" class="form-control">
                        <option>select budget year</option>
                        @foreach ($budget_years as $budget_year)
                         <option value="{{ $budget_year->id }}">{{ $budget_year->staring_month }} - {{ $budget_year->ending_month }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="sumbmitBtnWrap justify-content-between flex-column flex-sm-row align-items-start">

                <div class="mt-3 mt-sm-0">
                    <button type="submit" class="btn btnPrimary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

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
                    <label for="accountName" class="form-label">Year Name <span class="text-danger">*</span></label>
                    <input type="number" name="year" class="form-control" list="accountNameOptions"  required />
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Starting Month <span class="text-danger">*</span></label>
                    <input type="month" name="staring_month" class="form-control" list="accountNameOptions"  required />
                </div>
                <div class="col">
                    <label for="accountName" class="form-label">Ending Month</label>
                    <input type="month" name="ending_month" class="form-control" />
                </div>

                <div class="col">
                    <label for="note" class="form-label">Note</label>
                    <textarea name="note"  class="form-control" cols="30" rows="10"></textarea>
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

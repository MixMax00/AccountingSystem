@extends('backend.master')


@section('backend')
<div class="pageContent">
    <!-- Page Title -->
    <div class="pageTitle shadow-sm">
        <h3 class="title">Add Head</h3>
        <span>Please fill in the information below. The field labels marked with <span class="text-danger">*</span> are required input fields.</span>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">
        <form action="{{ route('admin.head.store') }}" method="POST">
            @csrf
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <label for="accountName" class="form-label">Head Name <span class="text-danger">*</span></label>
                    <input name="head_name" class="form-control" list="accountNameOptions" id="accountName" placeholder="Search Name..." required />
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Parent Head</label>
                    <select name="parent" id="type" class="form-control">
                        <option value="whenNull">Null</option>
                        @foreach ($heads as $data)
                            <option value="{{ $data->id }}">{{ $data->head_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Type <span class="text-danger">*</span></label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="assets">Assets</option>
                        <option value="deposit">Deposit</option>
                        <option value="expense">Expense</option>
                    </select>
                </div>
                <div class="col">
                    <label for="accountName" class="form-label">Applicable</label>
                    <input name="applicable" class="form-control" list="accountNameOptions" id="accountName" placeholder="Search Name..." />
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

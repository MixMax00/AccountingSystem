@extends('backend.master')


@section('backend')
<div class="pageContent">
    <!-- Page Title -->
    <div class="pageTitle shadow-sm">
        <h3 class="title">Edit Head</h3>
        <span>Please fill in the information below. The field labels marked with <span class="text-danger">*</span> are required input fields.</span>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">
        <form action="{{ route('admin.head.update') }}" method="POST">
            @csrf
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <label for="accountName" class="form-label">Head Name <span class="text-danger">*</span></label>
                    <input type="text" name="head_name" value="{{ $edit->head_name }}" class="form-control"  required />
                    <input type="hidden" name="id" value="{{ $edit->id }}" class="form-control"  required />
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Parent Head</label>
                    <input type="text" name="parent_id" value="{{ \App\Models\Heads::find($edit->parent_id)->head_name ?? '' }}" readonly class="form-control" id="">
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Type <span class="text-danger">*</span></label>
                    <input type="text" value="{{ $edit->type }}" readonly class="form-control" id="">
                </div>
                <div class="col">
                    <label for="accountName" class="form-label">Applicable</label>
                    <input name="applicable" value="{{ $edit->payable }}" class="form-control" />
                </div>

                <div class="col">
                    <label for="note" class="form-label">Note</label>
                    <textarea name="note"  class="form-control" cols="30" rows="10">{{ $edit->details }}</textarea>
                </div>
            </div>

            <div class="sumbmitBtnWrap justify-content-between flex-column flex-sm-row align-items-start">

                <div class="mt-3 mt-sm-0">
                    <button type="submit" class="btn btnPrimary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

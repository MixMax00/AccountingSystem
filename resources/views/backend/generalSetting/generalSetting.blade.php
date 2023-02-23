@extends('backend.master')


@section('backend')
<div class="pageContent">
    <!-- Page Title -->
    <div class="pageTitle shadow-sm">
        <h3 class="title">General Settings</h3>
        <span>Please fill in the information below. The field labels marked with <span class="text-danger">*</span> are required input fields.</span>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">
        <form action="{{ route('admin.generalSetting.store') }}" method="POST">
            @csrf
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <label for="accountName" class="form-label">Software Name<span class="text-danger">*</span></label>
                    <input name="site_name" class="form-control" list="accountNameOptions" id="accountName" placeholder="Search Name..." required />
                    <datalist id="accountNameOptions">
                        <option value="Aminul"></option>
                        <option value="Rabbi"></option>
                        <option value="Shaon"></option>
                        <option value="Robin"></option>
                    </datalist>
                </div>
                <div class="col">
                    <label for="icon" class="form-label">Icon</label>
                    <input type="file" name="site_icon" class="form-control" id="icon" />
                </div>
                <div class="col">
                    <label for="time_zone" class="form-label">Timezone</label>
                    <select name="time_zone" id="time_zone" class="form-control">
                        <option value="Africa/Abidjan">Africa/Abidjan</option>
                        <option value="Asia/Dhaka">Asia/Dhaka</option>
                        <option value="Asia/Dili">Asia/Dili</option>
                        <option value="Africa/Abidjan">Asia/Dubai</option>
                        <option value="UTC">UTC</option>
                    </select>
                </div>

                <div class="col">
                    <label for="currency" class="form-label">Currency <span class="text-danger">*</span></label>
                    <select name="currency" id="currency" class="form-control" required>
                        <option value="tk">Tk.</option>
                        <option value="$">$</option>
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

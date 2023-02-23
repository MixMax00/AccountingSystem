@extends('backend.master')


@section('backend')
<div class="pageContent">
    <!-- Page Title -->
    <div class="pageTitle shadow-sm">
        <h3 class="title">Head List</h3>
    </div>

    <div class="card mt-3 p-3">
        {{-- <div class="row">
            @foreach ($datas as $data)
                <div class="col-12">
                    {{ $data->head_name }}
                     <div class="row">
                        @foreach ($data->children as $child)
                            <div class="col-12 px-5">
                                {{ $child->head_name }}
                                <div class="row">
                                    @foreach ($child->children as $child2)
                                        <div class="col-12 px-5">
                                            {{ $child2->head_name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                     </div>
                </div>
            @endforeach
        </div> --}}

        <table class="table table-bordered table-responsive">
            <thead>
                <th>Head Name</th>
                <th>Code</th>
                <th>Type</th>
                <th>Applicable</th>
                <th>Note</th>
                <th>Action</th>
            </thead>
            <tbody>

                <x-heads :datas="$datas"/>

            </tbody>
        </table>
    </div>
</div>
@endsection

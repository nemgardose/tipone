@extends('master')

@section('content')
@include('layouts.modals.companies.create')
@include('layouts.modals.companies.delete')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List of Companies</h1>
    <div class="h3 mb-0 text-gray-800">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCompany">
            Create Company
        </button>
    </div>
</div>
@include('layouts.alerts.alert')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>
                            <div class="m-r-10"><img src="/storage/logo/{{$company->logo}}" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td><a href="{{$company->website}}">{{$company->website}}</a></td>
                        <td nowrap="">
                            <a href="#" class="btn btn-info edit_company" data-toggle="modal" data-target="#editCompany" value="{{ $company->id }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteCompany" onclick="deleteData({{$company->id}})">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @include('layouts.modals.companies.edit')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="js/image-selector.js"></script>
<script>

    //This will attached the retrieved value into the edit modal by searching the company_id
    $('.edit_company').on('click', function(e) {
        console.log("test");
        var company_id = $(this).attr("value");
        $('#edit_company_id').val(company_id);
        $.get('companies/'+ company_id +'/edit', {company_id: company_id}, function(data) {
            $('#edit_company_name').val(data.name);
            $('#edit_company_email').val(data.email);
            $('#edit_company_website').val(data.website);
        })
    });

    function deleteData(id) {
        var id = id;
        var url = '{{ route("companies.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteCompanyForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteCompanyForm").submit();
    }
</script>
@endsection



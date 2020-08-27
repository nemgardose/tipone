@extends('master')

@section('content')
@include('layouts.modals.employees.create')
@include('layouts.modals.employees.delete')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List of Employees</h1>
    <div class="h3 mb-0 text-gray-800">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createEmployee">
            Create Employee
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
                        <th>Company</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)    
                    <tr>
                        <td>{{ $employee->company->name }}</td>
                        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td nowrap="">
                            <a href="#" class="btn btn-info edit_employee" data-toggle="modal" data-target="#editEmployee" value="{{ $employee->id }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteEmployee" onclick="deleteData({{$employee->id}})">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @include('layouts.modals.employees.edit')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>

    //This will attached the retrieved value into the edit modal by searching the employee_id
    $('.edit_employee').on('click', function(e) {
        console.log("test");
        var employee_id = $(this).attr("value");
        $('#edit_employee_id').val(employee_id);
        $.get('employees/'+ employee_id +'/edit', {employee_id: employee_id}, function(data) {
            var dataLength = data.length;
            console.log(data);
            for(var i = 0; i < dataLength; i++) {
                $('#edit_company_name').val(data[i].name);
                $('#edit_first_name').val(data[i].first_name);
                $('#edit_last_name').val(data[i].last_name);
                $('#edit_email').val(data[i].email);
                $('#edit_phone').val(data[i].phone);
            }
        })
    });

    function deleteData(id) {
        var id = id;
        var url = '{{ route("employees.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteEmployeeForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteEmployeeForm").submit();
    }

</script>






@endsection
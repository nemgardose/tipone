@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning! </strong> {{ session('warning') }}
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Heads Up! </strong> {{ session('info') }}
    </div>
@endif

<!--Create Comapany Error Message-->
@error('name')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@error('email')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@error('logo')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@error('website')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror
<!--End Here-->

<!--Create Employee Error Message-->
@error('first_name')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@error('last_name')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@error('phone')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $message }}
</div>
@enderror

@if(session('company'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Heads Up! </strong> {{ session('info') }}
    </div>
@endif
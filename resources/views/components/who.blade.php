@if (Auth::guard('web')->check())
    <p class="text-success"> 
        You are logged in as <strong> USER </strong>
    </p>
@else
    <p class="text-danger">
        You are logged Out as <strong> USER </strong>
    </p>
@endif
@if(Auth::guard('admin')->check())
    <p class="text-success">
        You are logged in as <strong> ADMIN </strong>
    </p>
@else
    <p class="text-danger">
        You are logged Out as <strong> ADMIN </strong>
    </p>
@endif
@if(Auth::guard('formateur')->check())
    <p class="text-success">
        You are logged in as <strong> FORMATEUR </strong>
    </p>
@else
    <p class="text-danger">
        You are logged Out as <strong> FORMATEUR </strong>
    </p>
@endif
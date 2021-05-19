@if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>

        <strong>Well done! </strong>
        <span>{{session('success')}}</span>
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        <strong>Warning! </strong>
        <span>{{session('warning')}}</span>
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        <strong>Error! </strong>
        <span>{{session('danger')}}</span>
    </div>

@endif
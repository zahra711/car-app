@if(session('message') != null)
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-warning alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>توجه!</strong>
                <h2 style="color: #1AA059;size:24px !important; text-align: center; ">{{session('message')}}</h2>
            </div>
        </div>
    </div>

@endif

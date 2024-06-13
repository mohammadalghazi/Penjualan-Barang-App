<header class="container-fluid bg-light rounded-bottom border shadow">
    <div class="row">
        <div class="col-auto bg-danger d-flex align-items-center d-md-none">
            <button class="btn btn-light p-0 d-flex" type="button" data-z-target="#sidebar">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
        <div class="col py-1">
            <div class="row">
                <div class="col">
                    <div class="container-fluid text-secondary p-0" >
                        <ol class="breadcrumb m-0">
                            <x-breadcrumb></x-breadcrumb>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="h5 m-0">{{ $slot }}</div>
            </div>
        </div>
        <div class="col-auto d-none d-sm-flex align-items-center">
            <a href="#" class="btn p-0 btn-light d-flex align-items-center my-1 rounded-circle">
                <img class="rounded-circle" height="46px" src="/assets/img/app.png" alt="">
            </a>
        </div>
    </div>
</header>
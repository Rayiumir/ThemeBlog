<!-- Sidebars -->
<div class="card rounded-4 shadow-sm mb-3">
    <div class="card-body">
        <h1 class="fs-5 fw-bold mb-3">Search</h1>
        <form role="search">
            <input class="form-control rounded-5 me-2" type="search" placeholder="Search"
                aria-label="Search">
        </form>
    </div>
</div>
<div class="card rounded-4 shadow-sm mb-3">
    <div class="card-body">
        <nav>
            <div class="nav nav-pills nav-fill gap-2 p-1 small bg-light rounded-5" id="nav-tab"
                role="tablist">
                <button class="nav-link rounded-5 active" id="nav-home-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                    aria-selected="true"><i class="fa-duotone fa-sparkles"></i> News</button>
                <button class="nav-link rounded-5" id="nav-profile-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                    aria-selected="false"><i class="fa-duotone fa-comments"></i> Comments</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane mt-3 fade show active" id="nav-home" role="tabpanel"
                aria-labelledby="nav-home-tab" tabindex="0">
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                <article class="card rounded-5 mb-2">
                    <div class="p-2">
                        <h1 class="fs-6 fw-bold ms-2">Lorem ipsum</h1>
                    </div>
                </article>
                
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                tabindex="0">...</div>
        </div>
    </div>
</div>
<?php dynamic_sidebar("sidebar"); ?> 
<!-- End Sidebars -->
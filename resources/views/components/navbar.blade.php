
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-info" id="mainNav" style="height: 12%">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-dark mb-2" href="#page-top"> <img src="{{ asset('logo.jpg') }}" alt="" style="width: 75px;hieght:50px;border-radius:150%"> <h6>    {{$name}}</h6></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item mx-2 mb-2 btn btn-hover-primary btn-outline-primary"><a class="nav-link text-dark " href="#about">About</a></li>
                <li class="nav-item mx-2 mb-2 btn btn-hover-primary btn-outline-primary"><a class="nav-link text-dark" href="#services">Services</a></li>
                <li class="nav-item mx-2 mb-2 btn btn-hover-primary btn-outline-primary"><a class="nav-link text-dark" href="#portfolio">Portfolio</a></li>
                <li class="nav-item mx-2 mb-2 btn btn-hover-primary btn-outline-primary"><a class="nav-link text-dark" href="#contact">Contact</a></li>
            </ul>
        </div>
        
    </div><span class="mx-3"><x-dropdown /></span>
</nav>
O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:42:"D:\PIDEV\oncokidscare\assets\css\style.css";s:10:"publicPath";s:54:"/assets/css/style-880283aa77241b42d579f746e4a666fa.css";s:23:"publicPathWithoutDigest";s:21:"/assets/css/style.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:9698:"/********** Template CSS **********/
:root {
    --primary: #FF6B6B;     
    --secondary: #4ECDC4;   
    --light: #F7F9FC;       
    --dark: #2C3E50;        
    --accent1: #FFD93D;     
    --accent2: #95E1D3;     
    --accent3: #A8E6CF;     
}

.fw-medium {
    font-weight: 500 !important;
}

.fw-bold {
    font-weight: 700 !important;
}

.fw-black {
    font-weight: 900 !important;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-weight: 500;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
}


/*** Navbar ***/
.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    vertical-align: middle;
    margin-left: 8px;
}

.navbar .navbar-nav .nav-link {
    margin-right: 30px;
    padding: 25px 0;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
    color: var(--primary);
}

@media (max-width: 991.98px) {
    .navbar .navbar-nav .nav-link  {
        margin-right: 0;
        padding: 10px 0;
    }

    .navbar .navbar-nav {
        border-top: 1px solid #EEEEEE;
    }
}

.navbar .navbar-brand,
.navbar a.btn {
    height: 75px;
}

.navbar .navbar-nav .nav-link {
    color: var(--dark);
    font-weight: 500;
}

.navbar.sticky-top {
    top: -100px;
    transition: .5s;
}

@media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        border: none;
        margin-top: 0;
        top: 150%;
        opacity: 0;
        visibility: hidden;
        transition: .5s;
    }

    .navbar .nav-item:hover .dropdown-menu {
        top: 100%;
        visibility: visible;
        transition: .5s;
        opacity: 1;
    }
}


/*** Header ***/
.header-carousel .owl-carousel-text {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 3rem;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-shadow: 0 0 30px rgba(0, 0, 0, .1);
}

.header-carousel .owl-nav {
    position: absolute;
    width: 200px;
    height: 45px;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: space-between;
}

.header-carousel .owl-nav .owl-prev,
.header-carousel .owl-nav .owl-next {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: transparent;
    border: 1px solid #FFFFFF;
    border-radius: 45px;
    font-size: 22px;
    transition: .5s;
}

.header-carousel .owl-nav .owl-prev:hover,
.header-carousel .owl-nav .owl-next:hover {
    background: var(--primary);
    border-color: var(--primary);
}

.header-carousel .owl-dots {
    position: absolute;
    height: 45px;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.header-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    background: transparent;
    border: 1px solid #FFFFFF;
    border-radius: 15px;
    transition: .5s;
}

.header-carousel .owl-dot::after {
    position: absolute;
    content: "";
    width: 5px;
    height: 5px;
    top: 4px;
    left: 4px;
    background: #FFFFFF;
    border-radius: 5px;
}

.header-carousel .owl-dot.active {
    background: var(--primary);
    border-color: var(--primary);
}

.page-header {
    background: url("../img/header-page-53c1c7cc8ce5b8cce0cea541443a2452.jpg") top center no-repeat;
    background-size: cover;
    text-shadow: 0 0 30px rgba(0, 0, 0, .1);
}

.breadcrumb-item + .breadcrumb-item::before {
    color: var(--light);
}


/*** Service ***/
.service-item {
    transition: .5s;
}

.service-item:hover {
    margin-top: -10px;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .08);
}

.service-item .btn {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    background: #FFFFFF;
    border-radius: 40px;
    white-space: nowrap;
    overflow: hidden;
    transition: .5s;
}

.service-item:hover .btn {
    width: 140px;
}


/*** Feature ***/
@media (min-width: 992px) {
    .container.feature {
        max-width: 100% !important;
    }

    .feature-text  {
        padding-left: calc(((100% - 960px) / 2) + .75rem);
    }
}

@media (min-width: 1200px) {
    .feature-text  {
        padding-left: calc(((100% - 1140px) / 2) + .75rem);
    }
}

@media (min-width: 1400px) {
    .feature-text  {
        padding-left: calc(((100% - 1320px) / 2) + .75rem);
    }
}


/*** Team ***/
.team-item img {
    position: relative;
    top: 0;
    transition: .5s;
}

.team-item:hover img {
    top: -30px;
}

.team-item .team-text {
    position: relative;
    height: 100px;
    transition: .5s;
}

.team-item:hover .team-text {
    margin-top: -60px;
    height: 160px;
}

.team-item .team-text .team-social {
    opacity: 0;
    transition: .5s;
}

.team-item:hover .team-text .team-social {
    opacity: 1;
}

.team-item .team-social .btn {
    display: inline-flex;
    color: var(--primary);
    background: #FFFFFF;
    border-radius: 40px;
}

.team-item .team-social .btn:hover {
    color: #FFFFFF;
    background: var(--primary);
}


/*** Appointment ***/
.bootstrap-datetimepicker-widget.bottom {
    top: auto !important;
}

.bootstrap-datetimepicker-widget .table * {
    border-bottom-width: 0px;
}

.bootstrap-datetimepicker-widget .table th {
    font-weight: 500;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
    padding: 10px;
    border-radius: 2px;
}

.bootstrap-datetimepicker-widget table td.active,
.bootstrap-datetimepicker-widget table td.active:hover {
    background: var(--primary);
}

.bootstrap-datetimepicker-widget table td.today::before {
    border-bottom-color: var(--primary);
}


/*** Testimonial ***/
.testimonial-carousel::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

.testimonial-carousel::after {
    position: absolute;
    content: "";
    top: 0;
    right: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

@media (min-width: 768px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 200px;
    }
}

@media (min-width: 992px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 300px;
    }
}

.testimonial-carousel .owl-item .testimonial-text {
    background: var(--light);
    transform: scale(.8);
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-text {
    background: var(--primary);
    transform: scale(1);
}

.testimonial-carousel .owl-item .testimonial-text *,
.testimonial-carousel .owl-item .testimonial-item img {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-text * {
    color: var(--light) !important;
}

.testimonial-carousel .owl-item.center .testimonial-item img {
    background: var(--primary) !important;
} 

.testimonial-carousel .owl-nav {
    position: absolute;
    width: 350px;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: space-between;
    opacity: 0;
    transition: .5s;
    z-index: 1;
}

.testimonial-carousel:hover .owl-nav {
    width: 300px;
    opacity: 1;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    position: relative;
    color: var(--primary);
    font-size: 45px;
    transition: .5s;
}

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    color: var(--dark);
}


/*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid #FFFFFF;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    color: var(--primary);
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .copyright a:hover {
    color: var(--primary);
}";s:6:"digest";s:32:"880283aa77241b42d579f746e4a666fa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:48:"D:\PIDEV\oncokidscare\assets\img\header-page.jpg";s:10:"publicPath";s:60:"/assets/img/header-page-53c1c7cc8ce5b8cce0cea541443a2452.jpg";s:23:"publicPathWithoutDigest";s:27:"/assets/img/header-page.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"53c1c7cc8ce5b8cce0cea541443a2452";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:19:"img/header-page.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:13:"css/style.css";}
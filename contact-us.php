<?php 
    $title = "Contact Us";
    require('header.php')
?>

    <script type="text/javascript">
        var element = document.getElementById("contact");
        element.classList.add("active");
    </script>
    
    <div class="breadcrumbs" data-aos="fade-up" data-aos-duration="1500">
        <div class="page-next">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded mb-0">
                    <li class="breadcrumb-item"><a href="/sac">IEEE SAC</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
        </div>
    </div>   
    

    <section>
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="images/icon/bitcoin.svg" class="avatar avatar-small" alt="" />
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Phone</h4>
                                <a href="tel:+918897893714" class="text-primary" >+91 8897893714</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1500"> 
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="images/backgrounds/Email.svg" class="avatar avatar-small" alt=""/>
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Email</h4>
                                <a href="mailto:sac@ieeehyd.org" class="text-primary">sac@ieeehyd.org</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="images/backgrounds/location.svg" class="avatar avatar-small" alt=""/>
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Location</h4>
                                <p class="text-muted">
                                  No: 644-645 <br />
                                  Al-Karim Trade Center <br />
                                  Ranigunj, Secunderabad <br />
                                  500003.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </section>

<?php 
    require('footer.php')
?>

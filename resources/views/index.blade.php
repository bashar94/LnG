<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LEVERnGEAR LIMITED</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/design.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/all.min.css') }}">

        
    </head>
    <body >

        <nav class="navbar navbar-top navbar-horizontal fixed-top shadow-sm navbar-expand-md navbar-primary bg-white">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/images/logo.png') }}" class="d-inline-block nav-logo align-center" height="50px" alt="">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbar-collapse-main" style="">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">

                        <div class="col-6 collapse-brand">
                            <a href="{{ url('/') }}">
                                <img src="{{ url('/images/logo.png') }}">
                                 
                            </a>
                        </div>
                       
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                         <a class="btn btn-primary" href="#home">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="btn btn-primary dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        About
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#about">About Us</a>    
                        <a class="dropdown-item" href="#values">Our Values</a>
                        <a class="dropdown-item" href="#services">Our Services</a>
                        <a class="dropdown-item" href="#expertise">Our Expertise</a>
                        <a class="dropdown-item" href="#clients">Our Clients</a>
                      </div>
                    </li>
                    
                    <li class="nav-item"> 
                        <a class="btn btn-primary" href="#resources">Certified Resources</a>
                    </li>
                    
                    <li class="nav-item"> 
                        <a class="btn btn-primary" href="#contact">Contact Us</a>
                    </li>

                    
                </ul> 

            </div>
           
        </nav>





        <!-- 1st section -->
        <section id="home" style="background: linear-gradient(rgba(0, 41, 46, 0.70), rgba(0, 41, 46, 0.70)), url({{ url('images/background/1.jpg') }}); background-size:cover; background-size:cover; background-position: center center;  background-repeat: no-repeat; background-attachment: fixed;">

            <div class="text-white text-center container homepage-title-position">
                
                <h1><strong class="title"><span style="color: #3ea4ff">LEVER</span><span style="color: #f36464">n</span><span style="color: #3ea4ff">GEAR</span> LIMITED</strong></h1>
                <hr style="width:50%;" class="hr">
                <h1><strong class="title">COMPANY PROFILE</strong></h1>
                
                
            </div>
            
        </section>

        <!-- 2nd section -->
        <section id="about" style="padding: 10%;">

                <div class="second-section">

                    
                    <h1 class="text-white">ABOUT US</h1>  
                    <hr class="hr"> 
                    
                    <h3 class="text-white"><i>LEVERnGEAR Limited was established in 2015 with the objective of expediting businesses by taking over the supporting functions and helping businesses to focus on their core functionalities.
                    </i></h3>   
                    <br>
                    <h3 class="text-white" >We are committed to help businesses with utmost quality of services.</h3>
                    <br>
                    <h3 class="text-white">We are consistently advancing how we work and what we look like at marketplace difficulties so we can keep on conveying quantifiable, sustainable outcomes for our customers and our communities</h3>
                    <br>
                    <h3 class="text-white">We keep up the highest professional standards to affirm that our customers and other stakeholders are always treated with respect, discretion, and professionalism.
                    </h3>
                    
                    
                </div>
            
        </section>

        <!-- 3rd section -->
        <section id="values">
           
            <div class="page-title">
                <h1><strong>OUR VALUES</strong></h1>  
                <hr class="hr" style="color: rgb(240, 205, 161);"> 
            </div>
                
            
            <div style="background: rgb(16, 112, 130);"  class="py-3">
                <div class="container">
                     <div class="row">
                        <div class="col-md-6 text-center"> <h1 class="text-white ">What We Believe</h1> </div>
                        <div class="col-md-6 text-center d-none d-md-block"> <h1 class="text-white">What We Care</h1> </div>

                    </div>
                    
                </div>
               
            </div> 

            <div style="min-height: 80vh;  background: linear-gradient(rgba(0, 41, 46, 0.70), rgba(0, 41, 46, 0.70)), url({{ url('images/background/2.jpg') }}); background-size:cover; background-size:cover; background-position: center center;  background-repeat: no-repeat; background-attachment: fixed;">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-6"> 
                            <ul class="value">
                              <li>Collaboration</li>
                              <li>Client Focus</li>
                              <li>Delivering on promised</li>
                              <li>Integrity</li>
                              <li>Value Creation</li>
                            </ul>
                        </div>


                         <div class="col-md-6 d-none d-md-block"> 
                            <ul class="value">
                              <li>Information Security</li>
                              <li>Confidentiality of Information</li>
                              <li>Process orientation</li>
                              <li>Business Sustainability</li>
                              <li>Agility of Business</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- only for mobile -->
                <div style="background: rgb(16, 112, 130);"  class="py-3 py-3 d-md-none d-sm-block">
                    <div class="container">
                         <div class="row">
                            <div class="col-md-6 text-center"> <h1 class="text-white">What We Care</h1> </div>
                        </div>
                    </div>
                </div> 
                

                <div class="container pt-3 py-3 d-md-none d-sm-block">
                    <div class="row">
                         <div class="col-md-6"> 
                            <ul class="value">
                              <li>Information Security</li>
                              <li>Confidentiality of Information</li>
                              <li>Process orientation</li>
                              <li>Business Sustainability</li>
                              <li>Agility of Business</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- only for mobile -->
            </div>

        </section>

        <!-- 4th section -->

        <section id="services" class="text-white" style="background: linear-gradient(rgba(0, 41, 46, 0.70), rgba(0, 41, 46, 0.70)), url({{ url('images/background/3.png') }}); background-size:cover; background-size:cover; background-position: center center;  background-repeat: no-repeat; background-attachment: fixed;">

           
            <div class="page-title">
                <h1><strong >OUR SERVICES</strong></h1>  
                <hr class="hr"> 
            </div>
            

            <div class="container">
                 <div class="row">
                    <div class="col-md-4 mb-5"> 

                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Business Process Outsourcing</strong></h2>
                        <br>
                        <h4>-  Back office support</h4>
                        <h4>-  Front office support</h4>
                        <h4>-  Sales & marketing services</h4>


                     </div>
                    <div class="col-md-4 mb-5">
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Management Consultancy</strong></h2>
                        <br>
                        <h4>-  Process audit </h4>
                        <h4>-  Process redesign for operational efficiency optimization </h4>
                        <h4>-  Process automation</h4>

                    </div>

                    <div class="col-md-4 mb-5">
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Finance & Accounting</strong></h2>
                        <br>
                        <h4>-  Accounts receivables</h4>
                        <h4>-  Payroll Management</h4>
                        <h4>-  Credit & Claim management</h4>
                    </div>


                    <div class="col-md-4 mt-5"> 

                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Customer Relationship Management</strong></h2>
                        <br>
                        <h4>-  Telesales</h4>
                        <h4>-  Post sales customer feedback</h4>
                        <h4>-  Customer contact center (hotlines)</h4>
                        <h4>-  Lead generation</h4>


                     </div>
                    <div class="col-md-4 mt-5">
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>IT Enabled Services</strong></h2>
                        <br>
                        <h4>-  Office IT support</h4>
                        <h4>-  IT Security</h4>
                        <h4>-  Infrastructure Audit</h4>
                        <h4>-  System Integration</h4>

                    </div>

                    <div class="col-md-4 mt-5">
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Project Feasibility<br> Analysis & Funding</strong></h2>
                        <br>
                        <h4>-  Preparing project profiles</h4>
                        <h4>-  Project feasibility analysis and reporting</h4>
                        <h4>-  Project Fund management</h4>
                    </div>

                </div>
                
            </div>


            
        </section>

        <!-- 5th section -->
        <section id="expertise" style="background: linear-gradient(rgba(0, 41, 46, 0.70), rgba(0, 41, 46, 0.70)), url({{ url('images/background/4.png') }}); background-size:cover; background-size:cover; background-position: center center;  background-repeat: no-repeat; background-attachment: fixed;">

             
            <div class="page-title">
                <h1><strong class="text-white" >OUR EXPERTISE</strong></h1>  
                <hr class="hr"> 
            </div>
           


             <div class="container mt-5 text-center">
                 <div class="row">
                    <div class="open-box col-md-2 col-offset-1"> 
                        <h2><strong style="color: rgb(240, 205, 161);">Claim Submission</strong></h2>
                        <h4 class="text-white"><i>Insurance claim for patients</i></h4>

                    </div>
                    <div class="open-box  col-md-2"> 
                        <h2><strong style="color: rgb(240, 205, 161);">Payment Posting</strong></h2>
                        <h4 class="text-white"><i>Insurance payment posting in Quickbook</i></h4>
                        
                    </div>
                    <div class="open-box col-md-2"> 
                        <h2><strong style="color: rgb(240, 205, 161);">Appeal Submission</strong></h2>
                        <h4 class="text-white" ><i>Insurance claim appeal on behalf of patients</i></h4>
                        
                    </div>
                    <div class="open-box col-md-3"> 
                        <h2><strong style="color: rgb(240, 205, 161);">Import Documentation</strong></h2>
                        <h4 class="text-white"><i>Classification of insurance documents</i></h4>
                        
                    </div>
                    <div class="open-box col-md-2"> 
                        <h2><strong style="color: rgb(240, 205, 161);">Performance Management</strong></h2>
                        <h4 class="text-white"><i>Online review patients survey stuff credential</i></h4>
                        
                    </div>
                </div>
            </div>
            
        </section>

        <!-- 6th section -->

        <section id="resources" style=" background: linear-gradient(rgba(0, 41, 46, 0.70), rgba(0, 41, 46, 0.70)), url({{ url('images/background/5.jpg') }}); background-size:cover; background-size:cover; background-position: center center;  background-repeat: no-repeat; background-attachment: fixed;">

            <div class="page-title">
                <h1><strong class="text-white" >CERTIFIED RESOURCES</strong></h1>  
                <hr class="hr"> 
            </div>
         

            <div style="position: absolute; background: rgb(16, 112, 130); height: 200px; width: 100%; margin-top: 10%">
                <div class="container" >
                    <div class="row" style="margin-top: -5vh;">
                        <div class="col-sm-12 col-md-6 column-margin" >
                            <img style="height: 35vh" class="img-fluid mx-auto d-block" src="{{ url('images/certificate1.jpg') }}">        
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img style="height: 35vh" class="img-fluid mx-auto d-block" src="{{ url('images/certificate2.jpg') }}">
                        </div>
                    </div>
                </div>
                
            </div>



            

        </section>


        <!-- 7nd section -->
        <section id="clients">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        
                        <div class="page-title" style="color: rgb(16, 112, 130);">
                            <h1><strong >OUR CLIENTS IN USA</strong></h1>  
                            <hr class="hr"> 
                        </div>
                        

                        <div style="margin-left: 10%;">
                            <img class="img-fluid" src="{{ url('images/client1.png') }}">
                            <br>
                            <br>
                            <img class="img-fluid" src="{{ url('images/client2.png') }}">

                        </div>
                        

                    </div>

                    <div class="col-sm-6 text-white p-4" style="background: rgb(16, 112, 130); width: 100%; margin-top: 10%">
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Round Table Medical Consultants, LLC</strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Mission Bend Emergency Center, LLC </strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Round Table Medical Consultants, LLC</strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Montrose Emergency Center, LLC</strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Stafford Emergency Center LLC </strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Houston Heights Emergency Center ,LLC</strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Westchase Emergency Center, LLC </strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Bellaire Emergency Center, LLC </strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>South Austin Emergency Center, LLC</strong></h2>
                        <div style="clear:both"></div>
                        <img style="float:left" src="{{ url('images/icon.png') }}"/><h2><strong>Killeen Emergency Center, LLC </strong></h2>
                    </div>
                </div>
            </div>
            
        </section>


        <footer  id="contact" class="text-white" style="background: rgb(16, 112, 130);">

          
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <!-- <h3 class="mb-0">Get connected with us on social networks!</h3> -->
                  <p><i class="fas fa-envelope mr-3"></i> info@leverngear.com </p>
                  <p><i class="fas fa-phone mr-3"></i> +880 9609-252739</p>
                </div>
                <!-- Grid column -->

               
              </div>
              <!-- Grid row-->

            </div>


          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a> LEVERnGEAR LIMITED</a>
          </div>
          <!-- Copyright -->

        </footer>
        


        <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/all.min.js') }}"></script>
        <script type="text/javascript">
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>
</html>

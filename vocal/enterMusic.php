<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USD 237 Vocal Music Database</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="dist/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">USD 237 Music</a>
                <a class="btn btn-primary" href="#signup">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="form-row">
                    <div class="col-l-12">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Enter Music Into Database</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form action="connect.php" method="post">
                            
                                <div class="col-md-4 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" 
                                    name="title" placeholder="Home of the Range">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="composer">Composer/Arranger</label>
                                    <input type="text" class="form-control" id="composer" 
                                    name="composer" placeholder="Bach">
                                </div> 
                                <div class="form-row">  
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="style">Publisher</label>
                                    <select class="form-control" id="publisher" name="publisher">
                                    <option>Abingdon Press</option>
                                    <option>Alfred Publishing Co.</option>
                                    <option>Augsburg Fortress</option>
                                    <option>Fred Bock Music Company</option>
                                    <option>BriLee Music Publishing</option>
                                    <option>Choristers Guild</option>
                                    <option>Dot Music Resources</option>
                                    <option>Easy Choir Music</option>
                                    <option>EverGreen Morning Press</option>
                                    <option>Carl Fischer</option>
                                    <option>Hal Leonard Corporation</option>
                                    <option>Hope Publishing Company</option>
                                    <option>Jubilate Music Group</option>
                                    <option>LifeWay</option>
                                    <option>Lorenz Corporation</option>
                                    <option>Print Music Source</option>
                                    <option>Shawnee Press</option>
                                    <option>Warner Brothers Publications</option>
                                    <option>EverGreen Morning Press</option>
                                    <option>Word Music</option>
                                    <option>Other-Unknown</option>
                                    </select>
                           
                            <div class="form-row">  
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="style">Style</label>
                                    <select class="form-control" id="style" name="style">
                                    <option>Acapella</option>
                                    <option>Christmas</option>
                                    <option>Contest</option>
                                    <option>Jazz</option>
                                    <option>Patriotic</option>
                                    <option>Rhythm and Blues</option>
                                    <option>Secular - Country</option>
                                    <option>Secular - Pop</option>
                                    <option>Sacred</option>
                                    
                                    
                                    </select>
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="level">Level</label>
                                    <select class="form-control" id="level" name="level">
                                    <option>High School</option>
                                    <option>Junior High</option>
                                  
                                    </select>
                                </div>
                         
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" id="notes"  name="notes" rows="3"></textarea>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="composer">Audio</label>
                                    <input type="text" class="form-control" id="audio" 
                                    name="image" placeholder="audio">
                                </div> 
                                <div class="col-md-4 mb-3">
                                    <label for="composer">Image</label>
                                    <input type="text" class="form-control" id="image" 
                                    name="image" placeholder="image">
                                </div> 
                                <button id="submit">Enter Song</button>
                                </form>
                   
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
    
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

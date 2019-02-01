<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <header class="site_header">
    <nav>
        <div class="nav-wrapper white">
            <a href="#" class="left brand-logo" id="brand-logo"><img id="navLogo" src="./img/furiousTechFavicon.png" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <i class="material-icons navIcon">more_vert</i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- <li class="nav-item">
                    <a href="#header">Development</a>
                </li> -->
                <li class="nav-item">
                    <a href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" >Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>

        </ul>
</header>




    <div class="bodyWrap">

        <div class="headerWrap bodyDiv">
            
                    
                    <img id="furiousLogo" src="./img/furiousTechFinal-min.png" alt="">
                    <div id="catchPhraseContainer">
                           <h5 id="drivenToText">Working To</h5>
                           <h3 id="catchPhrase"></h3>
                            <!--<h3 id="catchPhrase">Design...<br>Create...<br>Inspire</h3>-->
                    </div>
                    
                    <a id="workLink" href="#projects" class="headerButton waves-effect waves-light btn-large">See My Work</a>

            
        </div>

        <div id="designWrap" class="designWrap bodyDiv">


            <h2 id="aboutMeHeader" class="designHeader sectionHeader">About Me</h2>
            <div class="picTextWrap">
                <img id="profilePic" src="./img/linkedInProf2.jpg" alt="Profile Pic">
                <div class="aboutTextInnerWrap">
                    <h4 class="aboutBodyName">Hi, I'm Vince Fiorilli</h4>
                    <h5 class="aboutBodyText">Full Stack Javascript Developer and tech enthusiast.  <span id="codeForFuture">"Coding for the future."</span></h5>
                    
                </div>
                
            </div>
        <div class="designQualityWrap row">
                <div class="designQualities">
                    <div class="firstTwo iconWrap">
                        <!--<i class="fa fa-android large icon"></i>-->
                        <img class="techIcon" src="./img/mobile.svg" alt="">
                    </div>
                    <div class="iconTextWrap firstTwoWrap">
                            <h4>Modern</h4>
                            <p>Familiar with recent technologies
                            </p>
                    </div>

                </div>
                <div class="designQualities">
                    <div class="firstTwo iconWrap">
                        <!--<i class="fas fa-mobile-alt large icon"></i>-->
                        <img class="techIcon" src="./img/robot.svg" alt="">
                    </div>
                    <div class="iconTextWrap firstTwoWrap">
                            <h4>Mobile</h4>
                            <p>My apps function across all devices
                            </p>
                    </div>

                </div>
                <div class="designQualities">
                    <div class="iconWrap secondTwo">
                        <!--<i class="fas fa-theater-masks large icon"></i>-->
                        <img class="techIcon" src="./img/language.svg" alt="">
                        
                    </div>
                    <div class="iconTextWrap secondTwoWrap">
                            <h4>Intuitive</h4>
                            <p>Easy for anyone to navigate</p>
                    </div>

                </div>
                <div class="designQualities">
                    <div class="iconWrap secondTwo">
                        <!--<i class="fas fa-bomb large icon"></i>-->
                        <img class="techIcon" src="./img/exciting.svg" alt="">
                        
                    </div>
                    <div class="iconTextWrap secondTwoWrap">
                            <h4>Exciting</h4>
                            <p>Pushing new boundaries in tech</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="projectWrap bodyDiv">
            <h2 id="projects" class="designHeader sectionHeader projectHeader">Projects</h2>
            <div class="projectWrapDiv">
                <div id="portfolioProject1" class="portfolioSingleProjectWrap portfolioProjectFirst2">
                    <img id="stockImg" class='responsive-img portfolioImg' src="./img/stocks2.jpeg" alt="stockChart">
                    <div id="stockTip" class="projectTitle">StockTip</div>
                    
                    <div class="portfolioProjectDescription displayNone">
                        <div class="hvrbox-text">Select Stocks and compare to make the best financial decisions</div>
                        <a href="https://fierce-ocean-72270.herokuapp.com/" target="_blank" class="visitWebsite">Visit
                            Website
                        </a>
                    </div>
                </div>
                <div id="portfolioProject2" class="portfolioSingleProjectWrap portfolioProjectFirst2">
                    <img id="studyImg" src="./img/study.jpeg" alt="Mountains" class="portfolioImg responsive-img">
                    <div id="studyProjectTitle" class="projectTitle">Flashcard Study Tool</div>
                    <div class="portfolioProjectDescription displayNone">
                        <div class="hvrbox-text">Study Assistant tool which allows users to input questions they wish to study</div>
                        <a href="https://powerful-wildwood-55898.herokuapp.com/" target="_blank" class="visitWebsite">Visit
                            Website
                        </a>
                    </div>
                </div>
                <div id="portfolioProject3" class="portfolioSingleProjectWrap portfolioProjectSecond2">
                    <img id="hungryPerson" src="./img/hungryPerson.jpg" alt="Mountains" class="portfolioImg responsive-img">
                    <div id="fridgeProjectTitle" class="projectTitle">Whats In Your Fridge?</div>
                    <div class="portfolioProjectDescription displayNone">
                        <div class="hvrbox-text">Find delicious recipes using only the ingredients you already have</div>
                        <a href="https://vincefio.github.io/whatsinyourfridge/" target="_blank" class="visitWebsite">Visit
                            Website
                        </a>
                    </div>
                </div>
                <div id="portfolioProject4" class="portfolioSingleProjectWrap portfolioProjectSecond2">
                    <!-- <img id="hangman" src="./img/hangman.jpg" alt="Mountains" class="portfolioImg responsive-img"> -->
                    <div id="fridgeProjectTitle" class="projectTitle">Rock N Roll Hangman</div>
                    <div class="portfolioProjectDescription displayNone">
                        <div class="hvrbox-text">Can your music knowledge save you before it's too late?</div>
                        <a href="https://rocknrollhangman.herokuapp.com/home.html" target="_blank" class="visitWebsite">Visit
                            Website
                        </a>
                    </div>
                </div>
 
            </div>
        </div>
        <!-- <div class="bodyDiv servicesDiv">
            <h2 id="servicesHeader" class="designHeader sectionHeader projectHeader">Services</h2>
        </div> -->
        <div id="contact" class="contactWrap bodyDiv">
            <h2 id="contactHeader" class="designHeader sectionHeader projectHeader">Contact</h2>
            <div class="row container">
                <form class="col s12 m10 l11 ">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Message</label>
                        </div>
                    </div>
                    <span class="helper-text" data-error="Error Sending" data-success="Sent"></span>
                    <a id="workLink" class="waves-effect waves-light btn-large">Lets Make It Happen</a>
                </form>
            </div>

        </div>

    </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.1/dist/typeit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="./js/script.js"></script>
    
</body>

</html>
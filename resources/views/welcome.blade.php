<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Mountains</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="/assets/css/fontawesome.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
        
    </head>
    <body data-ng-app="app" data-ng-controller="AppCtrl" ng-cloak>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#header"><img alt="some image" src="/assets/img/logo.png" class="img-fluid"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse w-75" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#about-us">About us <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#journal">Our journal</a>
                        <a class="nav-item nav-link" href="#work">How we work</a>
                        <a class="nav-item nav-link" href="#travel">Travel with us</a> 
                        <a class="nav-item nav-link" href="#gallery">Gallery</a>
                        <a class="nav-item nav-link" href="#comments">Feedbacks</a>
                        <a class="nav-item nav-link" href="#contacts">Contacts</a>
                    </div>

                    <button class="btn btn-outline-primary btn-sm" id="call-us-button">call us</button>
                </div>
            </div>
        </nav> 
        
        <div class="container-fluid">
            <div class="header" id="header">
                <div class="container">
                    <div class="header-desc">
                        <img alt="some image" src="/assets/img/travel.png" class="img-fluid mb-2">

                        <div class="row ">
                            <div class="col-sm-8 col-md-6 mb-3">
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incidid
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <button class="btn btn-info">order now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="about-us" id="about-us">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-4 col-sm-12">
                            <div class="row pl-3">
                                <img alt="some image" src="/assets/img/waves.png" class="img-fluid waves">  
                            </div>

                            <div class="row mt-4 pl-3">
                                <span class="about-head">{{ aboutUs.header }}</span>
                            </div>

                            <div class="row mb-4 pl-3">
                                <span class="about-desc">
                                    {{ aboutUs.desc }}
                                </span>
                            </div>
                        </div>

                        <div class="col images d-none d-md-flex">
                            <img alt="some image" ng-src="{{ aboutUs.pictures[0] }}" class="img-fluid" id="big-image">
                            <img alt="some image" ng-src="{{ aboutUs.pictures[1] }}" class="img-fluid" id="small-image">
                        </div>

                        <div class="col-12 d-sm-block d-md-none pt-3">
                            <div id="about-carousel" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#about-carousel" data-slide-to="1"></li>
                                <li data-target="#about-carousel" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="/assets/img/about-pic1.png" alt="First slide">
                                </div>

                                <div class="carousel-item">
                                  <img class="d-block w-100" src="/assets/img/about-pic2.png" alt="Second slide">
                                </div>

                                <div class="carousel-item">
                                  <img class="d-block w-100" src="/assets/img/about-pic3.png" alt="Second slide">
                                </div>
                              <a class="carousel-control-prev" href="#about-carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#about-carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5">
            <div class="journal" id="journal">
                <div class="container h-100">
                    <div class="row justify-content-center mt-5">
                        <img alt="some image" src="/assets/img/waves.png" class="img-fluid">
                    </div>

                    <div class="row justify-content-center mt-4">
                        <span class="journal-title">Our journal</span>
                    </div>
                
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="journal-holder">
                                <div class="row first-row">
                                    <div class="col post d-flex justify-content-center">
                                        <div class="arrow-left"></div>

                                        <img alt="some image" ng-src="{{ journal.itemOne.icon }}" class="img-fluid j-icon align-self-center">

                                    </div>
                                    <div class="col post">
                                        <div class="row my-2 justify-content-center">
                                            <span class="title">{{ journal.itemOne.title }}</span>
                                        </div>

                                        <div class="row justify-content-center">
                                            <p class="head w-100">
                                                {{ journal.itemOne.header }}
                                            </p>
                                        </div>

                                        <div class="row justify-content-center px-3 text-center">
                                            <p class="desc">
                                                {{ journal.itemOne.desc }}
                                            </p>
                                        </div>

                                        <div class="row text-center justify-content-center">
                                            <span class="number">01</span>
                                        </div>

                                    </div>
                                    <div class="col post d-none d-md-flex justify-content-center" id="water-image">
                                        <div class="arrow-up"></div>

                                        <img alt="some image" ng-src="{{ journal.itemTwo.icon }}" class="img-fluid j-icon align-self-center">
                                    </div>
                                </div>

                                <div class="row second-row">
                                    <div class="col post">
                                        <div class="row my-2 justify-content-center">
                                            <span class="title">{{ journal.itemTwo.title }}</span>
                                        </div>

                                        <div class="row justify-content-center">
                                            <p class="head w-100">
                                                {{ journal.itemTwo.header }}
                                            </p>
                                        </div>

                                        <div class="row justify-content-center px-3 text-center">
                                            <p class="desc">
                                                {{ journal.itemTwo.desc }}
                                            </p>
                                        </div>

                                        <div class="row text-center justify-content-center">
                                            <span class="number">02</span>
                                        </div>
                                    </div>

                                    <div class="col post d-flex justify-content-center">
                                        <div class="arrow-right"></div>

                                        <img alt="some image" ng-src="{{ journal.itemThree.icon }}" class="img-fluid j-icon align-self-center">
                                    </div>

                                    <div class="col post d-none d-md-flex justify-content-center">
                                        <div class="col post">
                                            <div class="row my-2 justify-content-center">
                                                <span class="title">{{ journal.itemThree.title }}</span>
                                            </div>

                                            <div class="row justify-content-center mb-3 ">
                                                <p class="head w-100">
                                                    {{ journal.itemThree.header }}
                                                </p>
                                            </div>

                                            <div class="row justify-content-center px-3 text-center">
                                                <p class="desc">
                                                    {{ journal.itemThree.desc }}
                                                </p>
                                            </div>

                                            <div class="row text-center justify-content-center">
                                                <span class="number">03</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-md-none d-sm-flex third-row">
                                    <div class="col post d-flex justify-content-center" id="water-image">
                                        <div class="arrow-left"></div>
                                        <img alt="some image" ng-src="{{ journal.itemTwo.icon }}" class="img-fluid j-icon align-self-center">
                                    </div>

                                    <div class="col post">
                                        <div class="row my-2 justify-content-center">
                                            <span class="title">{{ journal.itemTwo.title }}</span>
                                        </div>

                                        <div class="row justify-content-center mb-3 ">
                                            <p class="head w-100">
                                                                                                    {{ journal.itemTwo.header }}
                                            </p>
                                        </div>

                                        <div class="row justify-content-center px-3 text-center">
                                            <p class="desc">
                                                {{ journal.itemTwo.desc }}
                                            </p>
                                        </div>

                                        <div class="row text-center justify-content-center">
                                            <span class="number">03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="wanna-go" id="wanna-go">
            <div class="container h-100">
                <div class="row h-100 align-items-center mt-3">
                    <div class="col-md-6 col-sm-12 wanna-go-content">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <img alt="some image" src="/assets/img/waves.png">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <span class="wanna-go-head">{{ journal.formTitle }}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="go-desc">
                                    {{ journal.formDesc }}
                                </p>
                            </div>
                        </div>
                        
                         <div class="row" id="go-form-container">
                            <form class="w-100" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <input type="text"  name="name" class="form-control" placeholder="Your name:" 
                                        title="You must enter only letters" maxlength="20" id="go-input-name" required="required">
                                    </div>
                        
                                    <div class="divider align-self-center d-none d-md-block"></div>
                        
                                    <div class="col-md-4 col-sm-12">
                                        <input type="number" name="phone" class="form-control" placeholder="Your phone:" id="go-input-phone">
                                    </div>
                        
                                    <div class="col-md-2 col-sm-12 submit-button align-self-center ">
                                        <button id="go-order-button" type="submit" class="btn btn-info">order now</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row mt-3 blue-text">
                            <div class="col-12">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span class="ml-3">* Your data will not be transfered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="container-fluid">
            <div class="work" id="work">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col text-center">
                            <img alt="some image" src="/assets/img/waves.png">  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <p class="work-title">How we work</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-5">
                            <div class="d-flex justify-content-center">
                                <div class="circle d-flex justify-content-center align-items-center">
                                    1
                                </div>

                                <div class="v-dash"></div>

                                <div class="dash d-md-flex d-none"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="circle-holder d-flex justify-content-center align-items-center">
                                    <div class="hex d-flex justify-content-center align-items-center"></div>

                                    <div class="hex-text">
                                        <img alt="some image" src="/assets/img/doc-icon.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-4">
                                <div class="col text-center">
                                    <span class="desc">
                                        <b>Lorem ipsum dolor sit</b> <br> amet, consectetur adipisicing <br> elit, sed do eiusmod
                                        tempor <br> incididunt
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 mb-5">
                            <div class="d-flex justify-content-center">
                                <div class="circle d-flex justify-content-center align-items-center">
                                    2
                                </div>

                                <div class="v-dash"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="circle-holder d-flex justify-content-center align-items-center">
                                    <div class="hex d-flex justify-content-center align-items-center"></div>
                                    <div class="hex-text">
                                        <img alt="some image" src="/assets/img/user-icon.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-4">
                                <div class="col text-center">
                                    <span class="desc">
                                        <b>Lorem ipsum dolor sit</b> <br> amet, consectetur adipisicing <br> elit, sed do eiusmod
                                        tempor <br> incididunt
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6  mb-5">
                            <div class="d-flex justify-content-center">
                                <div class="circle d-flex justify-content-center align-items-center">
                                    3
                                </div>

                                <div class="v-dash"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="circle-holder d-flex justify-content-center align-items-center">
                                    <div class="hex d-flex justify-content-center align-items-center"></div>
                                    <div class="hex-text">
                                        <img alt="some image" src="/assets/img/book-icon.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-4">
                                <div class="col text-center">
                                    <span class="desc">
                                        <b>Lorem ipsum dolor sit</b> <br> amet, consectetur adipisicing <br> elit, sed do eiusmod
                                        tempor <br> incididunt
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6  mb-5">
                            <div class="d-flex justify-content-center">
                                <div class="circle d-flex justify-content-center align-items-center">
                                    4
                                </div>

                                <div class="v-dash"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="circle-holder d-flex justify-content-center align-items-center">
                                    <div class="hex d-flex justify-content-center align-items-center"></div>
                                    <div class="hex-text">
                                        <img alt="some image" src="/assets/img/check-icon.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-4">
                                <div class="col text-center">
                                    <span class="desc">
                                        <b>Lorem ipsum dolor sit</b> <br> amet, consectetur adipisicing <br> elit, sed do eiusmod
                                        tempor <br> incididunt
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="travel mt-5" id="travel">
                <div class="container">
                    <div class="row travel-row">
                        <div class="col-12 text-center travel-title">
                            <img alt="some image" src="/assets/img/waves.png">
                            <p>Travel with us</p>   
                        </div>
                    </div>

                    <div class="row travel-carousel-indicators">
                        <div class="col text-center">
                                <ol class="carousel-indicators">
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ol>
                            </div>
                    </div>

                    <div class="row">
                        <div id="travel-carousel" class="carousel slide w-100" data-ride="carousel" data-interval="4000">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-md-3 active">
                    <img class="img-fluid mx-auto d-block" src="/assets/img/car-item1.png" alt="slide 1">

                    <div class="car-desc d-flex flex-column justify-content-between">
                                        <div class="row ml-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="img-name">Carpatian</span> <br><span class="img-desc mx-2">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </div>

                                        <div class="row prices align-items-center">
                                            <div class="col-12">
                                                <del class="float-left mt-2 ml-3">3150$</del>
                                                <b class="float-right mr-2"> 793$</b>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    <div class="carousel-item col-md-3 col-sm-12">
                    <img class="img-fluid mx-auto d-block" src="/assets/img/car-item2.png" alt="slide 2">

                    <div class="car-desc d-flex flex-column justify-content-between">
                                        <div class="row ml-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="img-name">Alps</span> <br><span class="img-desc mx-2">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </div>

                                        <div class="row prices align-items-center">
                                            <div class="col-12">
                                                <del class="float-left mt-2 ml-2">3150$</del>
                                                <b class="float-right mr-2"> 1893$</b>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    <div class="carousel-item col-md-3 col-sm-12">
                    <img class="img-fluid mx-auto d-block" src="/assets/img/car-item3.png" alt="slide 3">

                    <div class="car-desc d-flex flex-column justify-content-between">
                                        <div class="row ml-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="img-name">Pyrenees</span> <br><span class="img-desc mx-2">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </div>

                                        <div class="row prices align-items-center">
                                            <div class="col-12">
                                                <del class="float-left mt-2 ml-2">3150$</del>
                                                <b class="float-right mr-2"> 2593$</b>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    <div class="carousel-item col-md-3 col-sm-12">
                    <img class="img-fluid mx-auto d-block" src="/assets/img/car-item4.png" alt="slide 4">

                    <div class="car-desc d-flex flex-column justify-content-between">
                                        <div class="row ml-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="img-name">Rocky</span> <br><span class="img-desc mx-2">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </div>

                                        <div class="row prices align-items-center">
                                            <div class="col-12">
                                                <del class="float-left mt-2 ml-2">3150$</del>
                                                <b class="float-right mr-2"> 2123$</b>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    <div class="carousel-item col-md-3 col-sm-12">
                    <img class="img-fluid mx-auto d-block" src="/assets/img/car-item5.png" alt="slide 5">

                    <div class="car-desc d-flex flex-column justify-content-between">
                                        <div class="row ml-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="img-name">Kavkaz</span> <br><span class="img-desc mx-2">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </div>

                                        <div class="row prices align-items-center">
                                            <div class="col-12">
                                                <del class="float-left mt-2 ml-2">3150$</del>
                                                <b class="float-right mr-2"> 593$</b>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col text-center gallery-title">
                        <img alt="some image" src="/assets/img/waves.png">
                        <p>Gallery</p>  
                    </div>
                </div>

                <div class="row gallery-content">
                    <div class="col-md-3 col-sm-12 d-flex justify-content-between flex-column">
                        <img alt="some image" src="/assets/img/gallery-pic1.png" class="img-fluid gallery-image">
                        <img alt="some image" src="/assets/img/gallery-pic2.png" class="img-fluid gallery-image">
                    </div>

                    <div class="col-md-4 col-sm-12 d-flex justify-content-between flex-column">
                        <img alt="some image" src="/assets/img/gallery-pic3.png" class="img-fluid gallery-image">
                        <img alt="some image" src="/assets/img/gallery-pic4.png" class="img-fluid gallery-image">
                    </div>

                    <div class="col-md-5 col-sm-12 d-flex justify-content-between flex-column">
                        <img alt="some image" src="/assets/img/gallery-pic5.png" class="img-fluid gallery-image">
                        <img alt="some image" src="/assets/img/gallery-pic6.png" class="img-fluid gallery-image">
                    </div>
                </div>
            </div>

            <div class="container-fluid icons">
                <div class="container h-100">
                    <div class="row d-md-flex d-none justify-content-between px-3">
                        <div class="item slack">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/slack.png" class="img-fluid"> <b>slack</b>
                            </a>
                        </div>
                
                        <div class="item adobe">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/adobe.png" class="img-fluid">
                            </a>
                        </div>
            
                        <div class="item google">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/google.png" class="img-fluid">
                            </a>
                        </div>
        
                        <div class="item facebook">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/facebook.png" class="img-fluid">
                            </a>
                        </div>
            
                        <div class="item spotify">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/spotify.png" class="img-fluid">
                            </a>
                        </div>

                        <div class="item nike">
                            <a href="javascript:;">
                                <img alt="some image" src="/assets/img/nike.png" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div id="logo-carousel" class="carousel slide d-sm-block d-md-none" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row d-flex justify-content-around px-4">
                            <div class="item slack">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/slack.png" class="img-fluid"> <b>slack</b>
                                        </a>
                                    </div>
                            
                                    <div class="item adobe">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/adobe.png" class="img-fluid">
                                        </a>
                                    </div>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <div class="row d-flex justify-content-around px-4">
                            <div class="item google">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/google.png" class="img-fluid">
                                        </a>
                                    </div>
                    
                                    <div class="item facebook">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/facebook.png" class="img-fluid">
                                        </a>
                                    </div>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <div class="row d-flex justify-content-around px-4">
                            <div class="item spotify">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/spotify.png" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="item nike">
                                        <a href="javascript:;">
                                            <img alt="some image" src="/assets/img/nike.png" class="img-fluid">
                                        </a>
                                    </div>
                          </div>
                        </div>
        
                      </div>
                      <a class="carousel-control-prev" href="#logo-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#logo-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>  
        </div>

        <div class="container-fluid">
            <div class="comments" id="comments">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center comments-title">
                            <img alt="some image" src="/assets/img/waves.png">
                            <p>Our clients say</p>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div id="comments-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                                <div class="col text-center">
                                    <ol class="carousel-indicators">
                                        <li data-target="#comments-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#comments-carousel" data-slide-to="1"></li>
                                    </ol>
                                </div>

                                <div class="carousel-inner">
                                    <div class="d-big">
                                        <div class="carousel-item active item-to-activate">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col">
                                                            <span class="comment-desc">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/avatar2.png" class="img-fluid">
                                                            <span class="username ml-3"><b>Pavliv Yaroslav</b> Web designer</span>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col">
                                                            <span class="comment-desc">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/avatar1.png" class="img-fluid">
                                                            <span class="username ml-3"><b>John Scott</b> The Fringe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col">
                                                            <span class="comment-desc">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/avatar2.png" class="img-fluid">
                                                            <span class="username ml-3"><b>Pavliv Yaroslav</b> Web designer</span>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col">
                                                            <span class="comment-desc">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <img alt="some image" src="/assets/img/avatar1.png" class="img-fluid">
                                                            <span class="username ml-3"><b>John Scott</b> The Fringe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-small">
                                        <div class="d-none waiting item-to-activate">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <div class="col">
                                                        <span class="comment-desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <img alt="some image" src="/assets/img/avatar2.png" class="img-fluid">
                                                        <span class="username ml-3"><b>Pavliv Yaroslav</b> Web designer</span>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="d-none waiting">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <div class="col">
                                                        <span class="comment-desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <img alt="some image" src="/assets/img/avatar1.png" class="img-fluid">
                                                        <span class="username ml-3"><b>John Scott</b> The Fringe</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center contacts" id="contacts">
                        <div class="col-12 col-md-5 text-center">
                            <div class="contacts-form h-100 w-100 pt-5">
                                <div class="d-flex justify-content-center">
                                    <span class="contact-form-title">Contacts</span>
                                </div>

                                <div class="d-flex justify-content-center mb-5">
                                    Sign up for our newsletter to receive updates
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col px-4">
                                        <input type="text" id="contact-form-name" class="form-control py-3" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col px-4">
                                        <input type="number" class="form-control py-3" placeholder="Phone" id="contact-form-phone">
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col px-4">
                                        <input type="email" class="form-control py-3" placeholder="Email" id="contact-form-email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col px-4">
                                        <button class="btn btn-info w-100 py-4 send-button" id="contact-form-submit">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="footer">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>All right reserved 2015</div>
                        <div class="d-flex justify-content-between mr-4">
                            <a href="javascript:;"><img alt="some image" src="/assets/img/twitter-footer.png" class="img-fluid"></a>
                            <a href="javascript:;" class="mx-2"><img alt="some image" src="/assets/img/facebook-footer.png" class="img-fluid"></a>
                            <a href="javascript:;"><img alt="some image" src="/assets/img/vk-footer.png" class="img-fluid"></a>
                        </div>
                        <div><b>1 234 243 123</b></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="gallery-modal" tabindex="-1" role="dialog" aria-labelledby="gallery-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg h-100">
                <div class="modal-content">
                    <div class="modal-image-holder d-flex justify-content-center w-100">
                        <img src="" class="enlargeImageModalSource">
                    </div>
                </div>

                <div class="modal-content w-100 modal-navigation">
                    <div class="d-flex align-items-center justify-content-around w-100">
                        <button class="btn btn-default" id="modal-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="btn btn-default" id="modal-next"> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <script src="/assets/js/libs/jquery-3.2.1.min.js"></script>
        <script src="/assets/js/libs/angular.js"></script>
        <script src="/assets/js/libs/popper.js"></script>
        <script src="/assets/js/libs/bootstrap.min.js"></script>
        <script src="assets/js/libs/jquery.mobile-1.4.5.min.js"></script>
        <script src="/assets/js/controller.js"></script>        
        <script src="/assets/js/script.js"></script>        
    </body>
</html>
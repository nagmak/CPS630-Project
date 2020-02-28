<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Add icon library -->
    <script src="https://kit.fontawesome.com/fc886187d2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Plan your Travel</title>
  </head>
  <body>
    <nav id="navbar-travel" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Plan your Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-us">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopping.php">Shopping Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Continents
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <!-- Continent: Asia -->
              <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Asia</a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Singapore</a>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">India</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item attraction taj-mahal" href="#" data-value="main-img1" id="city-attraction">Taj Mahal</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>

            <!-- Continent: Africa -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Africa</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">South Africa</a>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Egypt</a>
                                    <ul class="dropdown-menu">
                                <a class="dropdown-item attraction nile-river" href="#" data-value="main-img2" id="city-attraction">Nile River</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>

            <!-- Continent: North America  -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">North America</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">Canada</a>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">USA</a>
                                    <ul class="dropdown-menu">
                                <a class="dropdown-item attraction nyc" href="#" data-value="main-img3" id="city-attraction">New York City</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>
            
            <!-- Continent: South America  -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">South America</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">Brazil</a>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Peru</a>
                                    <ul class="dropdown-menu">
                                <a class="dropdown-item attraction macchu-picchu" href="#" data-value="main-img4" id="city-attraction">Macchu Picchu</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>

            <!-- Continent: Oceania  -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Oceania</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Australia</a>
                                    <ul class="dropdown-menu">
                                <a class="dropdown-item attraction opera-house" href="#" data-value="main-img5" id="city-attraction">Sydney Opera House</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>

            <!-- Continent: Europe  -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Europe</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">United Kingdom</a>
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Spain</a>
                                    <ul class="dropdown-menu">
                                <a class="dropdown-item attraction sagrada-familia" href="#" data-value="main-img6" id="city-attraction">La Sagrada Familia</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>

            <!-- Continent: Antarctica -->
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Antarctica</a>
                <ul class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Countries</a>
                        <ul class="dropdown-menu">
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Attractions</a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item attraction snow" href="#" data-value="main-img7" id="city-attraction" >Paradise Bay</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Popular Places
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item popular-places toronto" data-value="main-img8" href="#">Toronto</a>
                    <a class="dropdown-item popular-places new-york" data-value="main-img9" href="#">New York</a>
                    <a class="dropdown-item popular-places madrid" data-value="main-img10"href="#">Madrid</a>
                    <a class="dropdown-item popular-places mumbai" data-value="main-img11" href="#">Mumbai</a>
                    <a class="dropdown-item popular-places singapore" data-value="main-img12" href="#">Singapore</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>

      <div data-spy="scroll" data-target="#navbar-travel" data-offset="0">
        <div class="container main-image">
            <div id="main-img1">
                <img src="https://thumbs-prod.si-cdn.com/rtkp3HcECC3xlPiOGvSnR1M5Rag=/fit-in/1600x0/filters:focal(1471x1061:1472x1062)/https://public-media.si-cdn.com/filer/b6/30/b630b48b-7344-4661-9264-186b70531bdc/istock-478831658.jpg" width="750" alt="Taj Mahal">
                <div class="caption">Taj Mahal, India</div>
                <a href="./read-more/read-more-taj.html" class="read-more">Read More</a>
            </div>
            <div id="main-img2" style="display: none;">
                <img src="https://www.futurity.org/wp/wp-content/uploads/2019/11/Nile-River_1600.jpg" width="750" alt="Nile River">
                <div class="caption">Nile River, Egypt</div>
                <a href="./read-more/read-more-nile.html" class="read-more">Read More</a>
            </div>
            <div id="main-img3" style="display: none;">
                <img src="https://lp-cms-production.imgix.net/2019-06/GettyImages-538096543_medium.jpg?fit=crop&q=40&sharp=10&vib=20&auto=format&ixlib=react-8.6.4" width="750" alt="New York City">
                <div class="caption">New York City, USA</div>
                <a href="./read-more/read-more-nyc.html" class="read-more">Read More</a>
            </div>
            <div id="main-img4" style="display: none;">
                <img src="https://image.businessinsider.com/58efd06cdd0895d84e8b478b?width=1100&format=jpeg&auto=webp" width="750" alt="Macchu Picchu">
                <div class="caption">Macchu Picchu, Peru</div>
                <a href="./read-more/read-more-macchu.html" class="read-more">Read More</a>
            </div>
            <div id="main-img5" style="display: none;">
                <img src="https://afar-production.imgix.net/uploads/images/post_images/images/dl7gVL8vDD/original_544020e86d75369e788c7da796c6e96d.jpg?1522170127?ixlib=rails-0.3.0&auto=format%2Ccompress&crop=entropy&fit=crop&h=719&q=80&w=954" width="750" alt="Sydney Opera House">
                <div class="caption">Sydney Opera House, Australia</div>
                <a href="./read-more/read-more-sydneyoh.html" class="read-more">Read More</a>
            </div>
            <div id="main-img6" style="display: none;">
                <img src="https://luggagehero.com/wp-content/uploads/2019/03/shutterstock_395162041-800x534.jpg" width="750" alt="La Sagrada Familia">
                <div class="caption">La Sagrada Familia, Spain</div>
                <a href="./read-more/read-more-sagrada.html" class="read-more">Read More</a>
            </div>
            <div id="main-img7" style="display: none;">
                <img src="https://cdn.britannica.com/08/135708-050-2346C1CF/Paradise-Bay-Antarctica.jpg" width="750" alt="Antarctica">
                <div class="caption">Antarctica</div>
                <a href="./read-more/read-more-antarctica.html" class="read-more">Read More</a>
            </div>
            <div id="main-img8" style="display: none;">
                <img src="https://specials-images.forbesimg.com/imageserve/1040643480/960x0.jpg?fit=scale" width="750" alt="Toronto">
                <div class="caption">Toronto, Canada</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img9" style="display: none;">
                <img src="https://blog-www.pods.com/wp-content/uploads/2019/04/MG_1_1_New_York_City-1.jpg" width="750" alt="New York">
                <div class="caption">New York, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img10" style="display: none;">
                <img src="https://cdn.contexttravel.com/image/upload/c_fill,q_60,w_2600/v1555940004/production/city/hero_image_16_1555940004.jpg" width="750" alt="Madrid">
                <div class="caption">Madrid, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img11" style="display: none;">
                <img src="https://www.ecuad.ca/assets/events-images/images_1518423170210_mumbai-city.jpg" width="750" alt="Mumbai">
                <div class="caption">Mumbai, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img12" style="display: none;">
                <img src="https://image.cnbcfm.com/api/v1/image/105066394-GettyImages-498350103_1.jpg?v=1532563669&w=1400&h=950" width="750" alt="Singapore">
                <div class="caption">Singapore, Singapore</div>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <div class="container bottom-images">
            <!-- Taj Mahal Related -->
            <div id="main-img1-1">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/17/d3/a8/57/images-30-largejpg.jpg" width="250" alt="Amer Fort">
                <div class="caption">Amer Fort, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img1-2">
                <img src="https://lp-cms-production.imgix.net/2019-06/GettyImages-475540390_medium.jpg?fit=crop&q=40&sharp=10&vib=20&auto=format&ixlib=react-8.6.4" width="250" alt="Varanasi">
                <div class="caption">Varanasi, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img1-3">
                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/06/Golden-Temple_600-1280x720.jpg" width="250" alt="Golden Temple">
                <div class="caption">Golden Temple, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Nile River Related -->
            <div id="main-img2-1" style="display: none;">
                <img src="https://media.timeout.com/images/105237728/630/472/image.jpg" width="250" alt="Cape Town">
                <div class="caption">Cape Town, South Africa</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img2-2" style="display: none;">
                <img src="https://i.redd.it/fi48haz3f5i21.jpg" width="250" alt="Mount Kilimanjaro">
                <div class="caption">Mount Kilimanjaro, Tanzania</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img2-3" style="display: none;">
                <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iGm5chM7PJs4/v0/1000x-1.jpg" width="250" alt="Victoria Falls">
                <div class="caption">Victoria Falls, Zimbabwe</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- New York City Related -->
            <div id="main-img3-1" style="display: none;">
                <img src="https://ewscripps.brightspotcdn.com/dims4/default/5a64170/2147483647/strip/true/crop/3000x1688+0+172/resize/1280x720!/quality/90/?url=https%3A%2F%2Fewscripps.brightspotcdn.com%2F0b%2F77%2F2d7dc37a4c59ba8a3f9e2709d4e9%2Fgrand-canyon-deaths-shutterstock-via-cnn-040519.JPG" width="250" alt="Grand Canyon">
                <div class="caption">Grand Canyon, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img3-2" style="display: none;">
                <img src="https://www.history.com/.image/ar_16:9%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cg_faces:center%2Cq_auto:good%2Cw_768/MTY1MTc3MjE0MzExMDgxNTQ1/topic-golden-gate-bridge-gettyimages-177770941.jpg" width="250" alt="Golden Gate Bridge">
                <div class="caption">Golden Gate Bridge, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img3-3" style="display: none;">
                <img src="https://lp-cms-production.imgix.net/2019-06/70e2fb2d0e225f3c12af9b144396991a-kennedy-space-center.jpg" width="250" alt="Kennedy Space Center">
                <div class="caption">Kennedy Space Center, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Macchu Picchu Related -->
            <div id="main-img4-1" style="display: none;">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mata-atlantica-atlantic-forest-in-brazil-royalty-free-image-935746242-1567619461.jpg" width="250" alt="Amazon Rainforest">
                <div class="caption">Amazon Rainfores, Brazil</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img4-2" style="display: none;">
                <img src="https://www.beautifulworld.com/wp-content/uploads/2016/09/Angel-Falls.jpg" width="250" alt="Angel Falls">
                <div class="caption">Angel Falls, Venezuela</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img4-3" style="display: none;">
                <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/03/28/17/easter-island.jpg?w968h681" width="250" alt="Easter Island">
                <div class="caption">Easter Island, Chile</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Sydney Opera House Related -->
            <div id="main-img5-1" style="display: none;">
                <img src="https://cdn.britannica.com/64/155864-050-34FBD7A2/view-Great-Barrier-Reef-Australia-coast.jpg" width="250" alt="Great Barrier Reef">
                <div class="caption">Great Barrier Reef, Australia</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img5-2" style="display: none;">
                <img src="https://s1.at.atcdn.net/wp-content/uploads/2018/09/Uluru_hero-768x369.jpg" width="250" alt="Uluru">
                <div class="caption">Uluru, Australia</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img5-3" style="display: none;">
                <img src="https://www.intrepidtravel.com/adventures/wp-content/uploads/2018/07/GOR-800.png" width="250" alt="Great Ocean Road">
                <div class="caption">Great Ocean Road, Australia</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- La Sagrada Familia Related -->
            <div id="main-img6-1" style="display: none;">
                <img src="https://cdn.britannica.com/12/196712-050-6CC26D24/Segovia-aqueduct-Spain.jpg" width="250" alt="Aqueduct of Segovia">
                <div class="caption">Aqueduct of Segovia, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img6-2" style="display: none;">
                <img src="https://zone1-ibizaspotlightsl.netdna-ssl.com/sites/default/files/styles/embedded_auto_740_width/public/generic-page-images/97/coupon-1497538606.jpg?itok=_b2Ge77R" width="250" alt="Ibiza">
                <div class="caption">Ibiza, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img6-3" style="display: none;">
                <img src="https://www.worldtravelconnector.com/wp-content/uploads/2019/06/Alhambra-tips_Alhambra-Palace-in-Spain.jpg" width="250" alt="Alhambra">
                <div class="caption">Alhambra, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Antarctica Related -->
            <div id="main-img7-1" style="display: none;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipMLQzout__2zrZpB_u4tKyTw5xDqdlolsqPVtfi=w430-h238-k-no" width="250" alt="South Shetland Islands">
                <div class="caption">South Shetland Islands, Antarctica</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img7-2" style="display: none;">
                <img src="https://live.staticflickr.com/8180/7988141898_000901ab80_b.jpg" width="250" alt="Half Moon Island">
                <div class="caption">Half Moon Island, Antarctica</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img7-3" style="display: none;">
                <img src="https://oceanwide-4579.kxcdn.com/uploads/media-dynamic/cache/widen_1600/uploads/media/default/0001/02/d8f06b0737b1734dae5e5316f2409d47ee16566d.jpeg" width="250" alt="Whaler's Bay">
                <div class="caption">Whaler's Bay, Antarctica</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Toronto Related -->
            <div id="main-img8-1" style="display: none;">
                <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/70/0c/f0.jpg" width="250" alt="Algonquin Park">
                <div class="caption">Algonquin Park, Canada</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img8-2" style="display: none;">
                <img src="https://www.niagarafallslive.com/wp-content/uploads/2017/08/opt-falls-background-1600x1000-244k.jpg" width="250" alt="Niagara Falls">
                <div class="caption">Niagara Falls, Canada</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img8-3" style="display: none;">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/quebec-city-skyline-in-winter-royalty-free-image-1571068823.jpg?crop=1xw:0.75xh;center,top&resize=1200:*" width="250" alt="Quebec City">
                <div class="caption">Quebec City, Canada</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            
            <!-- New York Related -->
            <div id="main-img9-1" style="display: none;">
                <img src="https://images2.minutemediacdn.com/image/upload/c_crop,h_2914,w_5187,x_0,y_549/f_auto,q_auto,w_1100/v1562164905/shape/mentalfloss/26245-gettyimages-963351926.jpg" width="250" alt="Central Park">
                <div class="caption">Central Park, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img9-2" style="display: none;">
                <img src="https://www.history.com/.image/ar_16:9%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cg_faces:center%2Cq_auto:good%2Cw_768/MTY1MTc1MTk3ODIzOTM2MDcz/topic-statue-of-liberty-gettyimages-960610006-feature.jpg" width="250" alt="Statue Of Liberty">
                <div class="caption">Statue of Liberty, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img9-3" style="display: none;">
                <img src="https://media.wired.com/photos/59265c018d4ebc5ab8069fd2/master/pass/TS-HP-201001_NY_Times_Square_Sn_hetta_N58.jpg" width="250" alt="Times Square">
                <div class="caption">Times Square, USA</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            
            <!-- Madrid Related -->
            <div id="main-img10-1" style="display: none;">
                <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6f/5a/0e.jpg" width="250" alt="Royal Palace of Madrid">
                <div class="caption">Royal Palace of Madrid, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img10-2" style="display: none;">
                <img src="https://www.esmadrid.com/sites/default/files/styles/content_type_full/public/recursosturisticos/infoturistica/PlazaMayoBarea_1404213325.208.jpg?itok=UtppPHFu" width="250" alt="Plaza Mayor">
                <div class="caption">Plaza Mayor, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img10-3" style="display: none;">
                <img src="https://www.esmadrid.com/sites/default/files/styles/content_type_full/public/recursosturisticos/infoturistica/sorolla_patio-andaluz-museo-sorolla-baja-2.jpg?itok=1fa7rYEU" width="250" alt="Museo Sorolla">
                <div class="caption">Museo Sorolla, Spain</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Mumbai Related -->
            <div id="main-img11-1" style="display: none;">
                <img src="https://media.gettyimages.com/photos/gateway-of-india-is-in-the-heart-of-mumbais-tourist-district-and-is-picture-id522676626?s=612x612" width="250" alt="Gateway of India">
                <div class="caption">Gateway of India, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img11-2" style="display: none;">
                <img src="https://cdn.getyourguide.com/img/tour_img-2119905-146.jpg" width="250" alt="Elephanta Caves">
                <div class="caption">Elephanta Caves, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img11-3" style="display: none;">
                <img src="https://www.tripsavvy.com/thmb/oxy_iaN0zQJzH3C1FSz1p2v1s5o=/3256x2442/smart/filters:no_upscale()/GettyImages-1008831236-5c65d6bf4cedfd00014aa310.jpg" width="250" alt="Marine Drive">
                <div class="caption">Marine Drive, India</div>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Singapore Related -->
            <div id="main-img12-1" style="display: none;">
                <img src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/06/Resorts-World-Sentosa.jpg" width="250" alt="Sentosa">
                <div class="caption">Sentosa, Singapore</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img12-2" style="display: none;">
                <img src="https://www.visitsingapore.com/see-do-singapore/recreation-leisure/resorts/marina-bay-sands/_jcr_content/par-carousel/carousel_detailpage/carousel/item_1.thumbnail.carousel-img.740.416.jpg" width="250" alt="Marina Bay Sands">
                <div class="caption">Marina Bay Sands, Singapore</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div id="main-img12-3" style="display: none;">
                <img src="https://www.findawayphotography.com/wp-content/uploads/2018/01/pow-golden-arches-in-singapore-s-botanical-gardens.jpg" width="250" alt="Singapore Botanical Gardens">
                <div class="caption">Singapore Botanical Gardens, Singapore</div>
                <a href="#" class="read-more">Read More</a>
            </div>
            </div>
        </div>
        <h4 id="contact-us">Contact Us</h4>
        <p>
            <strong>Nagma Kapoor</strong><br>
            <p>
                Hard and dedicated worker, involved team member and overall a great person!
            </p>
            <i class="fab fa-twitter fa-2x"></i>
            <i class="fab fa-instagram fa-2x"></i>
            <a href="mailto:nagmakapoor@gmail.com"><i class="far fa-envelope fa-2x"></i></a><br><br>

            <strong>Dylan Donsky</strong><br>
            <p>
                I AM A WABSYTE DEVOLOPER!
            </p>
            <div>
                <img src="https://i.redd.it/pwb4753jaaf41.png" width="250" alt="wab devaloper"><br>
            </div>
            <i class="fab fa-twitter fa-2x"></i>
            <i class="fab fa-instagram fa-2x"></i>
            <a href="mailto:ddonsky@ryerson.com"><i class="far fa-envelope fa-2x"></i></a>
        </p>
        <h4 id="about">About Us</h4>
        <p>
            Just a ragtag group of WABSYTE DEVOLOPERS! (and meybe heckers)
        </p>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="index.js" type="text/javascript"></script>
  </body>
</html>
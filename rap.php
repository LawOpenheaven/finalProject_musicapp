<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/hip-hop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
  <header>
    <div class="navbar">
        <h2 class="logo">Logo🎶</h2>
        <a href="homepage.htm"><img src="images/home-btn.svg" class="home-btn" alt=""></a> <br>
        <img src="images/music-btn.svg" class="music-btn" alt=""> <br>
        <img src="images/mic.svg" class="mic-btn" alt="">
        <a href="library.htm"><img src="images/library-btn.svg" class="library-btn" alt=""></a>

        <div class="search">
          <!-- <i class="bi bi-search"></i> -->
          <img src="images/search.svg" class="bi" alt="">
          <input type="text" placeholder="Search Music...">
          <div class="search_results">
              <!-- <a href="" class="card">
                  <img src="img/1.jpg" alt="">
                  <div class="content">
                      On My Way
                      <div class="subtitle">Alan Walker</div>
                  </div>
              </a> -->
          </div>
      </div>
    </div>
    <div class="menu_side">
      <h6 id="menu_list_active_button" ><i class="bi bi-music-note-list"></i></h6>
      <!-- <h1>Playlist</h1> -->
      <h3 class="hip-hopTxt">RAP
        <div class="subtitle">Playlist</div>
      </h3>
      <div class="menu_song">
          <li class="songItem">
              <span>01</span>
              <img src="img/1.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
          </li>
          <li class="songItem">
              <span>02</span>
              <img src="img/2.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
          </li>
          <li class="songItem">
              <span>03</span>
              <img src="img/2.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
          </li>
          <li class="songItem">
              <span>04</span>
              <img src="img/2.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
          </li>
          <li class="songItem">
              <span>05</span>
              <img src="img/2.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
          </li>
          <li class="songItem">
              <span>06</span>
              <img src="img/2.jpg" alt="">
              <h5>On My Way <br>
                  <div class="subtitle">Alan Walker</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
          </li> 
      </div>
  </div>
  <div class="pageImage">
    <img src="img/homepic3.jpeg" alt="" id="poster_master_play">
  </div>
  <div class="master_play">
    <div class="wave" id="wave">
        <div class="wave1"></div>
        <div class="wave1"></div>
        <div class="wave1"></div>
    </div>
    <img src="img/20.jpg" alt="" id="poster_master_play">
    <h5 id="title"> Vande mataram <div class="subtitle">Bankim Chandra</div>
    </h5>
    <div class="icon">
        <i class="bi shuffle bi-music-note-beamed">next</i>
        <i class="bi bi-skip-start-fill" id="back"></i>
        <i class="bi bi-play-fill" id="masterPlay"></i>
        <i class="bi bi-skip-end-fill" id="next"></i>
        <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
    </div>
    <span id="currentStart">0:00</span>
    <div class="bar">
        <input type="range" id="seek" min="0" max="100">
        <div class="bar2" id="bar2"></div>
        <div class="dot"></div>
    </div>
    <span id="currentEnd">0:30</span>
    <div class="vol">
        <i class="bi bi-volume-up-fill" id="vol_icon"></i>
        <input type="range" min="0" max="100" id="vol">
        <div class="vol_bar"></div>
        <div class="dot" id="vol_dot"></div>
    </div>
    <div class="expand"><a href="player.html"><i class="bi bi-arrows-angle-expand"></i></a></div>
</div>
    <div class="dropdown">
        <img onclick="myFunction()" class="dropbtn" src="images/dropdownprofile.svg" alt="">
        <div class="dropdown-content" id="myDropdown">
          <p>My Music</p>
          <p>❤  Favorites</p>
         <p> <img src="images/playlist.svg" alt="">My Playlists</p>
        </div>
      </div>
    </header>   
    <script src="app.js"></script>
</body>
</html>
</body>
</html>
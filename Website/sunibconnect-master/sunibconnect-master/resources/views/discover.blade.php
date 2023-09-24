<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="{{asset('css/discover.css')}}">
    <title>SUNIBCONNECT| Discover</title>
</head>
<body>
        <!--HEADER-->
        <nav>
            <a href="{{url('/discover')}}"><img src="{{asset('images/logo.png')}}" ></a>
                <ul class="navbar">
                    <li><a class = "active" href="{{url('/discover')}}">Discover</a></li>
                    <li><a href="friend.html">Friend</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="/">Logout</a></li>
                    <br><br> 
                </ul>
        </nav>  
        <!--HEADER-->
        <!--ISI-->
            <!-- search bar -->
            <div class="searchbar">
                <table class="elements">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search">
                        </td>
                        <td>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- search bar -->
            <!-- filter -->
            <div class="filterbox">
                <div class="filtertag">
                       <a href="discoverFilter.html">
                        <span class="tag2">Add Filter</span>
                       </a>
                </div>
            </div>
            <!-- filter -->
            <!-- profiles -->
            <div class="profiles">
                <!-- profile1 -->
                <div class="profile">
                        <img src="{{asset('images\profile2.1.jpg')}}" class="editprof">
                        <div class="details">
                            <div class="namefollow">
                                <div class="namegender">
                                    <div class="names">
                                        <h4>Adam</h4>
                                    </div>
                                    <div class="hiddennames">
                                        <h4>Adam Budi Hartanto</h4>
                                    </div>
                                    <img src="{{asset('images\mars.png')}}" width="25px" height="25px" alt="">
                                </div>
                                    <a href="friend.html">
                                        <img src="{{asset('images\add.png')}}" height="25px" width="25px">
                                    </a> 
                            </div>   
                            <div class="bottom">
                                <div class="tags">
                                    <span class="tag">B25</span>
                                    <span class="tag">Computer Science</span>
                                    <div class="hiddentags">
                                        <span class="tag">HIMTI</span>
                                        <span class="tag">Sports</span>
                                    </div>
                                </div>
                            <div class="location">
                                <img src="{{asset('images\location.png')}}" alt="" width="15px" height="15px">
                                <span class="locationname">Alam Sutera</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile2 -->
                <div class="profile">
                    <img src="{{asset('images\profile2.2.jpg')}}" class="editprof">
                    <div class="details">
                        <div class="namefollow">
                            <div class="namegender">
                                <div class="names">
                                    <h4>Reeves</h4>
                                </div>
                                <div class="hiddennames">
                                    <h4>Mikel Reeves</h4>
                                </div>
                                <img src="{{asset('images\mars.png')}}" width="25px" height="25px" alt="">
                            </div>
                                <a href="friend.html">
                                    <img src="{{asset('images\add.png')}}" height="25px" width="25px">
                                </a> 
                        </div>   
                        <div class="bottom">
                            <div class="tags">
                                <span class="tag">B24</span>
                                <span class="tag">Computer Science</span>
                                <div class="hiddentags">
                                    <span class="tag">BNCC</span>
                                    <span class="tag">Gaming</span>
                                </div>
                            </div>
                        <div class="location">
                            <img src="{{asset('images\location.png')}}" alt="" width="15px" height="15px">
                            <span class="locationname">Kemanggisan</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- profile3 -->
                <div class="profile">
                    <img src="{{asset('images\profile2.3.jpg')}}" class="editprof">
                    <div class="details">   
                        <div class="namefollow">
                            <div class="namegender">
                                <div class="names">
                                    <h4>Zayn</h4>
                                </div>
                                <div class="hiddennames">
                                    <h4>Zayn Horran</h4>
                                </div>
                                <img src="{{asset('images\mars.png')}}" width="25px" height="25px" alt="">
                            </div>
                                <a href="friend.html">
                                    <img src="{{asset('images\add.png')}}" height="25px" width="25px">
                                </a> 
                        </div>   
                        <div class="bottom">
                            <div class="tags">
                                <span class="tag">B22</span>
                                <span class="tag">System Information</span>
                                <div class="hiddentags">
                                    <span class="tag">Binus Band</span>
                                    <span class="tag">BDM</span>
                                    <span class="tag">Singing</span>
                                    <span class="tag">Music</span>
                                </div>
                            </div>
                        <div class="location">
                            <img src="{{asset('images\location.png')}}" alt="" width="15px" height="15px">
                            <span class="locationname">Kemanggisan</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- profile4 -->
                <div class="profile">
                    <img src="{{asset('images\profile2.4.jpg')}}" class="editprof">
                    <div class="details">
                        <div class="namefollow">
                            <div class="namegender">
                                <div class="names">
                                    <h4>Valentina</h4>
                                </div>
                                <div class="hiddennames">
                                    <h4>Ayunda Valentina</h4>
                                </div>
                                <img src="{{asset('images\female.png')}}" width="35px" height="30px" alt="">
                            </div>
                                <a href="friend.html">
                                    <img src="{{asset('images\add.png')}}" height="25px" width="25px">
                                </a> 
                        </div>   
                        <div class="bottom">
                            <div class="tags">
                                <span class="tag">B23</span>
                                <span class="tag">Accounting</span>
                                <div class="hiddentags">
                                    <span class="tag">Bipreneur</span>
                                    <span class="tag">STAMANARA</span>
                                    <span class="tag">Music</span>
                                </div>
                            </div>
                        <div class="location">
                            <img src="{{asset('images\location.png')}}" alt="" width="15px" height="15px">
                            <span class="locationname">Bekasi</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- profiles -->
        <!-- profiles -->
</body>
</html>
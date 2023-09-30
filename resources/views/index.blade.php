<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('CSS_Files/style.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon-16x16.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="{{asset('images/My_Photo5.jpg')}}">
                </div>
                <h2>{{$info['name']}}<br><span>{{$info['job']}}</span></h2>
            </div>

            <div class="contactInfo">
                <h3 class="title">Content Info</h3>
                <ul>
                    <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span class="text">{{$info['phone']}}</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">{{$info['email']}}</span>
                    </li>
                    <li>
                        <a href="https://ahmadalketnani.github.io/CV/" target="_blank">
                            <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                            <span class="text">{{$info['website']}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$info['instagram']}}" target="_blank">
                            <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                            <span class="text">instagram.com/me</span>
                        </a>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">{{$info['address']}}</span>
                    </li>
                </ul>
            </div>

            <div class="contactInfo education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <!-- <li>
                        <h5>2020 - 2024</h5>
                        <h4>master degree in comuter science</h4>
                        <h4>University Name</h4>
                    </li> -->
                        <h5>2020 - present</h5>
                        <h4>Bachelor's degree in software development</h4>
                        <h4>Islamic University of Gaza</h4>
                    </li>
                    <li>
                        <h5>2017 - 2020</h5>
                        <h4>High school</h4>
                        <h4>Jaffa School</h4>
                    </li>
                </ul>
            </div>
            <div class="contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    @foreach($info['lan'] as $lan)
                      <li>
                        <span class="text">{{$lan[0]}}</span>
                        <span class="percent">
                            <div style="width: {{$lan[1]}}%;"></div>
                        </span>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>


        <div class="right_Side">
            <div class="about">
            <h2 class="title2">Profile</h2>
           <p>ِAHMAD J M ALKETNANI <br>  Backend Developer with laravel <br> Student at the Islamic University of Gaza (level 4 ) <br> 04-01-2003  <br><br></mollitia></p>
            </div>

            <div class="about skills">
                <h2 class="title2">Professional Skills</h2>
                @foreach($info['skills'] as $skill)
                <div class="box">
                    <h4>{{$skill[0]}}</h4>
                    <div class="percent">
                        <div style="width: {{$skill[1]}}%;"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="about interest">
                <h2 class="title2">Interset</h2>
                <ul>
                    <li><i class="fa fa-gamepad" aria-hidden="true"></i>Gaming</li>
                    <li><i class="fa fa-microphone" aria-hidden="true"></i>Singing</li>
                    <li><i class="fa fa-book" aria-hidden="true"></i>Reading</li>
                    <li><i class="fa fa-cutlery" aria-hidden="true"></i>Cooking</li>
                </ul>
                </div>
     <div class="more">
                <p class="git">To show my projects <a href="https://github.com/AhmadAlketnani" class="gitlink">Browse my Github</a></p>
            </div>
        </div>
    </div>

</body>

</html>

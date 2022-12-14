<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>OCVP.com</title>
    <!-- font icons -->
    <link rel="stylesheet" href="themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
    <link rel="stylesheet" href="rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="navbar-brand" href="#"><strong class="text-primary">OC</strong><span class="text-light">VP</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="uindex.html">Universities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="personalized.html">Personalized</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="">User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="header d-flex justify-content-center">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <h3 class="header-title"><strong class="text-primary">OC</strong><span>VP</span></h3>
                    <h4 class="header-subtitle">Online Certificate Verification Portal</h4>
                    <p>Certificate upload and verification in easy way.Verified documents Can be downloadable from anywhere and accessed easily.</p>
                    <button class="btn btn-outline-light btn-flat"><a href="register.php">Register</a></button>
                </div>
            </div>
            <div class="col-md-5 d-none d-md-block">
                <form class="header-form" method="post" action="OCVP.php">
                    <div class="head">LO<span class="text-primary">G</span>IN</div>
                    <div class="body">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <p style="color: black"><a href = "">Forgot password?</a></p>
                    </div>
                    <div class="footer">
                        <button type = "submit" class="btn btn-primary btn-block" name="login_user" >Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<section class="section">
    <div class="container text-center">
        <h6 class="display-4 has-line">Instructions</h6>
        <p class="mb-5 pb-4"></p>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-5 align-self-center mb-4 mb-md-0">
                <img src="data:image/jpeg;base64,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" alt="" class="shadow w-100">
            </div>
            <div class="col-md-6 col-lg-5">
                <h6 class="title">Instructions to users</h6>
                <p>This Application is intended to provide the following services.</p>
                <ul class="list-unstyled mt-4">
                    <li class="media">
                        <div class="circle-40 mr-3 mt-1"><i class="ti-arrow-right"></i></div>
                        <div class="media-body">
                            <h6 class="mb-2">Certificate Verification:</h6>
                            <p>This Service is intended for verification of genuinity of the issued certificates uploaded by the requested user.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-40 mr-3 mt-1"><i class="ti-arrow-right"></i></div>
                        <div class="media-body">
                            <h6 class="mb-2">Student Verification:</h6>
                            <p>This Service is intended to provide ready information about individual student's education details in the respective university.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container text-center">
        <h6 class="display-4 has-line">Instructions</h6>
        <p class="mb-5 pb-4"></p>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5 align-self-center">
                <h6 class="title">T&C</h6>
                <p>User Terms and Conditions for the website,to provide services to the person(s) ("the User") intending to use OCVP???s e-verify or e-submit services or for uploading documents on OCVP website.</p>
                <ul class="list-unstyled mt-4">
                    <li class="media">
                        <div class="circle-40 mr-3 mt-1"><i class="ti-hand-point-right"></i></div>
                        <div class="media-body">
                            <h6 class="mb-2">User ID and Password</h6>
                            <p>While registering, the User will choose a password and is responsible for maintaining the confidentiality of the password and the account. The User is fully responsible for all activities that occur while using their password or account.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-40 mr-3 mt-1"><i class="ti-hand-point-right"></i></div>
                        <div class="media-body">
                            <h6 class="mb-2">Authenticity of content</h6>
                            <p>The User agrees that the OCVP provides the Issuer, Verifier and the downloader for ease of uploading and downloading authenticated and verified documents for the user.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
                <img src="data:image/jpeg;base64,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" height = "500" alt="" class="shadow w-100">
            </div>
        </div>
    </div>
</section>
<section class="section" id="about">
    <div class="container text-center">
        <h6 class="display-4 has-line">WHY SHOULD USE OCVP!</h6>
        <p class="mb-5 pb-4"></p>

        <div class="row">
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-upload"></i></div>
                <h6 class="title mb-3">EASY UPLOAD</h6>
                <p>Users can upload certificates by scanning the certificates to verify.</p>
            </div>
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-check-box"></i></div>
                <h6 class="title mb-3">VERIFICATION</h6>
                <p>Users verify certificates by scanning barcodes or entering the certificate number.</p>
            </div>
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-download"></i></div>
                <h6 class="title mb-3">EASY DOWNLOAD</h6>
                <p>Users can download the verified certificates from their portfolio.</p>
            </div>
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-world"></i></div>
                <h6 class="title mb-3">EASY TO ACCESS</h6>
                <p>Can access the the certificates from the anywhere from the world.</p>
            </div>
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-lock"></i></div>
                <h6 class="title mb-3">Privacy</h6>
                <p>Portal uses high privacy and security for the user.</p>
            </div>
            <div class="col-lg-4">
                <div class="circle-100 mb-3"><i class="ti-id-badge"></i></div>
                <h6 class="title mb-3">Portfolio</h6>
                <p>Auto generated portfolio along uploaded documents.</p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="review">
    <div class="container text-center">
        <h6 class="display-4 has-line">Portal creaters</h6>
        <p class="mb-5 pb-4">This portal was designed by the students of Keshav Memorial Institute of Technology-Hyderabad.</p>
        <div class="row text-left">
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i>->Owner<br>->Hackthon<br>->Manages the company
                        </i></p>
                    <div class="media">
                        <img class="mr-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMkAAAD6CAMAAAA89pM0AAABAlBMVEUuXpn/////2bUeSoX/sGj/rmT/27gkUYwrWpX/rWH/r2UAPn8ANnsdSIMlUo0nVZARRIL/qlkAQIAAOn1hYf8AM3rq7fL/yJf/xpL4+fuzvc//tnQTRYIZSX7/vIH/s26FlrT/9u//06v/tmbEzNrX3eadqsL/4sz/7N3/zaAAQYfK0d5Pa5luhKj/8OT/4cn/wIj/uXs3Wo+rtsoWSHoxUKV8j6/npGxTW/9aXvJDVsZKWNInTJNqgKaSobw9X5F2bH0+VYOxh3LAkHPSmXB6bnxVXoD5rXr/tVnUmZGlgc56bPMwT86Ze9fno4jJlKt4bZNfYs2lgneMdnoAKXtcdJ6MHHPnAAASI0lEQVR4nOWde3vixhWHhYUMkhAIyVxsiDEYbLO+Q+I4bY03l6bbpE3atP7+X6WaM6MrkuYq7T7u+SPPBoNG78w5Z34ajY60RtU2v7u6vLy/v7+8urqrsh2twmPf3a8frH5gJrHgn5PxweW8ktaqIrk6OEUEVjNjlhEAWaP7ufIWKyG5HJn9fYiEGWZ/cqDY19ST3K1N00iPA7H0hwHMvcp2VZNcPvbNhCsFvtScPJ6ePjycnj5OZoZpGFYSZj1X1rJakvtm5FRBQDQfx+vFwWHSDhajh0mCxuyPVTmZSpKAI8KwTkcLOPWsoc/W40nkgEZ/PFfSujqSq0mfdLVhnK7zIJI4iwAm/Hp/raJ9ZSQjwmGZk9FBKUYE82CRgTHNS/kTUERyaZiE43HNgEFgDsZNwtJ/kD4FNSSjPuncxwUrBhmYEWExpIdFBcl8hgfEmKy5ODDLmGQy2WhRQHKJI8QyRsx+lWI5eDTJgH5mkoM+OY8DEQ5gWTehLwxr/jlJSIiYI1GOxLBY/avPR/KAT2HGF+n7LGPsYX3xuJckwSDGoxwHQllghSmOIkeCQcwHaRDkYTM5FCkS7BJSIZK0CUwtorEiQ7LGIPyTSIEdPmIUMXUsQXLYVwsSolhWzSRXfaWuhVEmFiSQWknm2LXGKkECg7A3RYSLMAk4gqEia6VNeFoRJTlAQ2JNlIMcLmCs+/O6SO6wRlHNgVBGCMU4rYsEItOUlCgFKKfo2H3uFSQxEvAtQ3W0h4ZDpRaSOfjWrCKQQ5hxjVEdJCMDfKsakMi/OKd6ERII9woScGyIxOIMehGSB9AU1XEE+cvgl5ICJHhIlKqUPZQZ6is+0SJAMgbFWiUICXq+QeEnmVc/JGRQDK7lPH4SLCeqBQkGxeDVLPwklU6KMQoo7UWVJJfgXBVzoMUWSJBVkqAUbJ1WPSSB8SZibpI+XAlVDwITvcFxycVLcl9HvAMJxLxZHQlyX6tKoRIbp3vxkkDmqsG5iHtxZC9OElhQsWoZEhBfHIqFk+TQrClzBQZTMPsFFycJCpPqp0VsoFhM5kDhJLEqvcTKkECgHFRDMq9ngickKFDYL4L5SK6Q66pf5CowNKNYs2pI7msM+MC4Qp6PBKWTugKe6GFmZc9HAqmr4ousBMmEJ3nxkWBVVxMISV6si918JLMak3BA8oBIWJdV+UhAntYFgq+2mCcUPhKzxukkJGHVkHwkdU6MZGqskKTKxcc8EtbLxv9nkvfhXeZnyF3VkLyfLPx+Zsb3o1ZG70ZBvh9V/36utODqt6q713sGV7+TakjqXZEYV7gi0YD9m4uaSCB1HVZE8n5W7mA1VX5PLZNVu5p6925WuOu86/DItZjKTTJ6N3eCLuu9O2ewn5ngHdPqUcC5qrxjim801iFYeHeu8O8sqOe6Ee8saHKcGP9uD6PG3R7smevL3YEzqmEHTo27osY85yWwU21Ux041g3tPp/DuwUojBe8e5NvSKbKjc1z5js5xPTs6caRUOqcY3HsHBXc+w37LanbVI6tv5zNWxBXvRud+mkaM5NCschc3PCHAsbNLhqTxaFUmJEE61vbUBnnaoYr8hZ+b5Q13cRLsX1U83UQekuQ/I+EnzuAxAUN5Kl4IPzIr/jwjNKn+KUDuHc/yJHfVPZnJ/7iZFEnjXjkKBrF4rq+UkDQWqlEm2GPntZM0RiqfmI0ekBcsVCT3pP9Y4ZP+C1wWQ7iUhGT1hTGpviBc1yMCWeMKMuI1MWQrYmAHs5qqKmKIF/eQrlKyJlVKZILlkBResEyJYl7ylWPuw1I+wsNyOMIFfYzZXOI8pEiOVydnb72P54BiBZf2QtV8FhNSZ4prKUUZyfH1xYs+8G1v6rjff4trJBkzgQpLBw+kItn5D7fb6+N6SYYnZ5uB77mOjm3q/YiHpWlO2Kt3YY5xWI2s+fGD6/mDzdPJsCaS1W4zsCMIbM6Hj02LnyXBcf6T7uJDuXbHvRWh4SO5fvJ8b5pkwP9pudNwWJrmbMxYHe40LNtnNf/6Idk3rj3Y7FbVkQx3ru+mIAKEbq+tBRYMy8/fnocl+MzH8lJ3h6hi3yys2Ged/+C6cb+Qo3sdnQ+GmWR5M/BSg9HCDNi6QbR8+Pi3T+HJBTDj3CqK8Nn6YRZVUTz/9PfvPUd3NK3dayVZEEzvgj0FMJJsdX+aoOgmIMDa8PnzLxELgjEmD6N0ZcuDxXp8GlBElS0Djl//8RX6cXigbioAvcEL68AwkWxdO+6sVk/LMfSXr/589PzP3z6FAYPq8qByozNUbhSKjTbNdLXRT+e///p89Bf02+RBA5q4ObezOVFFstRtCgZ2L/2rb46Ojp5//d2KWUKivQKwiOO3X46ej46++xp1fvZ4gadFA+PrLCxUkuFNJ+qgIozQvb4+Qvb8/K8fm+fZE0/b+fm3f/z7+Rl9/U9J50rDOBFLaylNcjHA8eE4rWxs5LoXsu9c78PPf/xk9s1ERMThY/ZnP/7nqw/uN/DlfedKuVnE8kqLl3KS4xufHInCkXCvo+9QJ08/uMP55WI86cflq4N/WKfrw6vG9r9oaiXfznWuxFiTgZkOniRIrsOEReVIuBeA6NNulD/nV1eXyK7u5uFHJwM9BC90rujAoZN502tRkosBGVs6hxa5FwFplU8EMUqJc2VZnNJhKSG5xZ7ldFk4QvdiA4lRKM4VspAu9TbFgqyY5A1yr8M2IInWmEACFD/+fplzEeuRI/uFSayQ5AZPIi1GDg27FzNIo3EWa7hy5yJGJpjBBSfJm8fjWWBhynS6TGLpJpI/VOfCRoalUxAsBSS32LWYOiu00L2cDQvIcYfHuZIN+LccJDufHyR2rw7LmCzjOGFvBnuYnYuSS7IciIBE7uWzyNc4TBidK9FELkoeyRCUFjcIjD76pc0i+Hrom234L08b8APdP2Mj2UAs8gQ7MXTlErTk5rSz31s4QIIz4+sxjNLZspCc2ZzpN7KuDuMyvaGTnNgk1Hs8zhWjDPY8eJ9kNeDJJylDkyjyMI9O8uKGw87txJCNHS+bVvZJNsDMOrPvGfp1h77I40k0AhnMzQ78HsmFzZcYswYBSb0uWvmi4w5toO7yM5N9luTYd2TawHnSK1IUcX95gqFIUCBU0iOfJXlypXwLe7H7QiMBqSI+8G3U3dPXMpLhQDABx42A8qKAHHfkBh7PkH4qFWdIIKXw5sW0seiVpVSYhK3odrKZNAkeEvFRD9ug6RUkVRzxMNGIf3nJKThNcuvK9hXOkTS90nXkgpE0kwr6FAmWEHJDgkO+XK8MZcMEGUwqCSmZItl5Clpg0CuRVJGxXmZQUiSegiFh0SuxVJFsR3fjC8gkyYl0RgGj6xUZqRJbL50lkyRoupLLKGBUvSInVdINxXIiQYLjULqr6HpFUqqkGnL0HBIl8a6R5JW/ahCPvXw4amT0wyXWBAmsWSpogKZXpKVKZK2kxotJVsoaoOgVeakSWjvZUkwCix0KvJeqV+SlSqqlUE/EJI4i56LqlZ68VAkNxbz7liFRlRo1ml5RIlWIJd0rItkpSo0aTa8okSqhJdwrIukqcy6KXrlVIlWIdeOMH5KoHPNyvaJGqhCDjG+nSLaKpkWwMr2iMB6ROVGeDEmUzbvIWiV6RZVU2WuKkBwr0lzYyvSK0i7DTU3fEiTq5l1kJXpFnVSJm9I7CRKF8y6yYr2itsu0hKAgJC11827q8HumuMtIoGwjEqU5WCvTKz2F0xZYFJOYROm8q5XoFdVdRmKyFZEonXe1Er2iusu0OCYxieyydt7hydSbNtVdpsUxqVUz5kV6RalUwYaSlb0lJFtb6byrFeoVxVIFDGLyiZDAmDMlFNb+RB2Vo1e4pMreBth8C2NS4wqTHutd+gK9wiNVmAcPxaSPSdjDhPno+XqFS911Wb+p45jUeFJjV3dYozVXr/BJFVY/JMkLkTyxpkaOtJCrV/ikShBrrN9DggKRbBhFV8thHpJ8vcInVdqM34XV2x0iOR4wjjmP9Ovm6BXeaUtnGxSSXTS0l5atgWBI2M8iT6/wSpUeW8xDdnlFJCjJM/R2m0+N5+gVbqnC+G18saWRO0x0j2TOithy9Aq3VGGMeZwnAxLGHTecF0j7eoVfqjC6FzQ11FivrHvscwnYvl4RWFVhcy+UJ/1rjTXgeZXfvl4RWFVhcy88oWgghOmO0+M9iT29IrIQxeZeMKFsNXzfhHqW/GI8q1eEVlWY3AuGf6fhQaeRs863qZNI6xWhVRUm98KrBlqDabrq8l8fZfWK0KpKj6VdmIVvNTatIrBGldErYlfYTL4AJG/akMV92wIX3xm9IriqwpK3IbncaJCEad9mFdiZk0jqFcFVlRYDPawNb7QTliQstF6hp/SKLbaqwpSHddg7DzMvxRcZVcP+8WO9IryqwrJbXQe3YplOhJwrrVcuRBeiWH6lQy+B/1J6XOwcUnpF+AYQS6Bgkhf6xCiSubSMXhmIhQmbZ2OSG/pFPEu3FDVA9Arrdem+scwo0GXaK/1ZFtFbNwm9InEDiJ67SRbeUIddQHNhS+gViRtA9CAlM2OXOia811iRxXoFdlQLbg2nSz6iVugkomGS0CsyN4DoIU8UJJ1E/IZEpFdkbgDRMydR9dQ4EQ6ThF4RlCrYqLM8IvEucO4qa4TpEiHfQr0i+QQQzSfIdfwbjUQ4TGK9IixVwKg/1fHaCnWOlziHUK/I7VWhdiV2YrqC5H10MmGhXhGWKmBU9waSBlXVC4oubMhzBxJSBYxGEq5w0660xK5NiIEHD3dsS+hFRutLMgFrtLwisKoSG+iV5avcXhXaNKBjUaTR1jwkUhfpLumn2CiRSmYtrWGXp2GpLQegUnGVBfGDUNQwhImD7mK/ladIidSlJapkyOxVKe9MNGnhPRLlt7QktAo+CWIye1XKSUIhoVGkhFQSTpBIHCMI1RIScC60EVJrNPyyQJFQXXASpKaQ1Pae0qTT0uM9dy9lV6ZSSTiqkSK3X7CMBJ41heeCNHIZVJQlpZJwXINFaktX2TnEz2qhPRKdkplLkkRz5MOk1C9gWtyGJE8lT/vK7mADDslttSUkKErQlihCsiq5AyhL0pIPE7SFqehP6ODeLiJpvE4LB0V2/yU8ki/3wH0JCR6SxDNB+GZmQZ1HOZKefJgUk8DBbbKIjnfZvhaWwZATKxoef8lttYVxgmOwkSS57hRNX9Jbx6VzcDEJDPcg84zpGyjvnBaVkMgdoWgmgBD0om0YWnhn1smPTGmSQK/I7kTOJ4GlZiTn0ySNrZ8fmiqKMcg+2pBL0s4WWoqeAgT/2u8+6fOQFNPI8rQwlkHJ4lcRyfHUyUOR71Ghe5SZc9gjwSCp2mqJZ7EHeSjyJPIb9vdJcA0vL7XPMvF8PK5ul/mV9HyiFZYkZjYnOyFhELe4LtF2sC9cWwzFX8uNcaN/2REynYG1XAYkXaUEl3xlLzDKZGqfNokueezySmRkVPjLDtZn2LN0f6+wVqZW1MnAUXCRV52RAXEGuyzIXiWyVfiKgC9yWMgCx7ST83j0Xp2749ewEvoXNyzh8oadW2U4rx5k6GFfFkvIkedZBSSNlR6+90A6BSuziMPeFFQNya9lezaI6rN+CfESV3t3s7UTaSSNVaLevtoHKfktHI6AY/BUXJCmsHr1cpN4J8XnG5h2K8HxUlZLq6Q2+kmSJfWOkLoMvdyBuIZD4aBU3l++dhKvbtl/V0iV1u7p8atdHNs/o9VipbzXYXXbSbwwpK6haccvpwC36mz2ywnzkgQz5fa146VfcNStEKfdS73KBWUr74zpZS4sb3JZ7VpZmApGp91OvPMkDA7ffip9mQMnCcC8dmw31QrmCcZHkigg6LVaiWOGFHandcaKwU7SQO8Du/U62TdpxUPU7fXYodptdP7dVjgI2YO6nm+/bPleqsX3Pq3V9lbv2Kk3amWNjBW2bmTkg/SJ5/XK1LM709st79u0RN7WNlzu3ryO77nTguEJT9NxnPT/lX9fn7q233Hfdkux17UJvkFveL19urE7vm3TgKjmOFPXA4az7bXgO+ckSLAdr5YXT28bv4OQPDeAYqQKzn7qovMPfmq/vpxtlyuJtwAqIImIhqvldnd2+/aqd5D5yOzQvOhf8Hnw94Hdunl7Ors4Wa6G0gShKSFJ2XHAtVpdXy+XJylbLpfXwR+G6s49bf8DIdHHthd0RIkAAAAASUVORK5CYII=" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">D2C</h6>
                            <p class="text-muted">Owner</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i>->Team Leader<br>->Research<br>->Python
                        </i></p>
                    <div class="media">
                        <img class="mr-3" src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">Sathvik</h6>
                            <p class="text-muted">Ceo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i>->Designer<br>->Ex-Team Lead<br>->Front-End Development
                        </i></p>
                    <div class="media">
                        <img class="mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb--h146K3w5SV_XHp_4cKV9S7aSrcvPrxASJUTNapOqNdFxgtFG4jW0Eca8mwRol0Q3w&usqp=CAU" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">Mallesh</h6>
                            <p class="text-muted">Coo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i>->Graphic Designer<br>->Management<br>->Back-End Development<br></i></p>
                    <div class="media">
                        <img class="mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6a6KfKK66Jy1eCuDau7yp2rb5dIfGvl45g&usqp=CAU" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">Madhav</h6>
                            <p class="text-muted">Employee</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i>->Problem Solving<br>->Analysis<br>->Design<br>->database</i></p>
                    <div class="media">
                        <img class="mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6a6KfKK66Jy1eCuDau7yp2rb5dIfGvl45g&usqp=CAU" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">Mahesh</h6>
                            <p class="text-muted">Employee</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testmonial">
                    <p class="description"><i><br>Implementation
                            Full-Stack Development<br><br></i></p>
                    <div class="media">
                        <img class="mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6a6KfKK66Jy1eCuDau7yp2rb5dIfGvl45g&usqp=CAU" width="60" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="title">Vikas</h6>
                            <p class="text-muted">Employee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="contact">
    <div class="container text-center">
        <h6 class="display-4 has-line">CONTACT US</h6>
        <p class="mb-5 pb-2">we are free hear all the suggestions to increase portal to user freiendly.</p>

        <form>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group pb-1">
                        <input type="text" class="form-control" required placeholder="Name">
                    </div>
                    <div class="form-group pb-1">
                        <input type="email" class="form-control" required placeholder="Email">
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-6">
                    <textarea name="" id="" cols="" rows="7" class="form-control" required placeholder="Message"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Send Message">
        </form>
    </div>
</section>
<footer class="footer py-4 bg-dark text-light">
    <div class="container text-center">
        <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="index.html">OCVP</a></p>
        <div class="social-links">
            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
        </div>
    </div>
</footer>

<!-- core  -->
<script src="jquery/jquery-3.4.1.js"></script>
<script src="bootstrap/bootstrap.bundle.js"></script>
<!-- bootstrap 3 affix -->
<script src="bootstrap/bootstrap.affix.js"></script>

<!-- Rubic js -->
<script src="rubic.js"></script>

<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

</div>

</body>
</html>

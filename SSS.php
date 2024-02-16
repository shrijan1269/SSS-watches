<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy watches</title>
    <!--bootdtrap css---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- css---->
    <link rel="stylesheet" href="style.css">
    <!-----font------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>

<!--navbar--->
    <nav id="mainNavBar " class="navbar navbar-expand-md ">
        <div class="container">
        <a class="navbar-brand me-3" href="SSS.php"><img src="./images/logo.jpg" alt="" id="logo"></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navlinks"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZxJREFUSEutVlEWwjAI627m0XY0bzatVNZBkrKnfvi0pSRAoN0a+GyttSOuz4v+O1tWVrrrbmffEmlmAY2hE8FvAKOwacR1YOXWIg4f5prFbfaVU6cHB1Zp4cwDGHMCOMGIYWQCYzuARBjb4SdHXKm3sFkm/AKcU7R/pM5Cga0VhH1lsCMdIf4HB2aoUnojs+fZXGPbM2BvblZgrfNp94LT/4gBYrue7cBjroK3U16kahB9nKPMJIqZAIR6TCmlS2X+oupxltX48fWtSeRdYv/0cgzdBGAvql0Zy0wWc7O1Leo0A5tFBoYYLOK0vmonT8gj3ZLiInEYnoCnHx82Lq4/1RLfdaAnYTvpcV3sAjFxh3zKAqFX0LL8QKRC1bEBwgD8iGC2EfbfCTmNwjBA3Jdrq5gP+IyZBlYqKZxcby/5WgzSlfFlGrvbDzYGPKsO3sHLSWJQRXLdLKc6NtzqRXKrFmeQlvu7soTkdJtFCFbjkLpfriPc0HqAsNK6L/FSYC/tc2Sy4FjxGJgY5kF3Xb9CXHdrb4TgUykLvr0AKxHYI7fwC/UAAAAASUVORK5CYII="/></button>
        <div class="collapse navbar-collapse " id="navlinks">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-2 ps-2 me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-lg-2"><a href="" class="nav-link">HOME</a></li>
                <li class="nav-item mx-lg-2" ><a href="" class="nav-link">MEN</a></li>
                <li class="nav-item mx-lg-2"><a href="" class="nav-link">WOMEN</a></li>
                <li class="nav-item mx-lg-2"><a href="" class="nav-link">KIDS</a></li>
                <li class="nav-item mx-lg-2"><a href="" class="nav-link">ROBOT</a></li>

            </ul>
        </div>
        <div class="d-flex justify-content-end icons" id="navbarSupportedContent">
        <button type="button" class="btn btn-outline-secondary ms-1 me-1 rounded-top" id="reg"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA4dJREFUSEuVl0uIT1Ecxz+/jEcWFrPxfiQaJMrCAgspJGzkVQqNR0hKMpGNFQsjjzJRZjwiNbJgIWxYUTYoyqBIXokUynPmuOfe3//+zzn33Dvjbv733v85v8f39/t+f+cK9hLApHf+lb93F5Tdu1uzNVGz+tL+OFdZBNmSXuPL1xRX5qGISZMMHBetq4kBwExgIsgwMO+BF8B94LcbVlWWbvTFjDUihWEs0AosQRgUKccP4CqwG3jzH+DFM858yzYwR4AB5SDnuf4ysAU4W1a4EIk8Y7cdBFoN7FIjf4GTCLfF0GWQl2DGA5OAeQibxdBPe3NfEuiBGqQueGFLSpqND+9WoE2d2jouBnnmtb0f/rSk/teBkdp9q0A6q2hit4fNNRl4BPQHuoA5wKc+0GwUyF0wo4HvQFOCxLu8JyIdF0J9E8wC7dQm4FWE3QUGKmDTgQeazHmEdZnjwGuEx43AZ7V6FGRnHK6gffxCXhLDagNfERrF0O3LSD2ILOPseTlwWc3OAu71mm0xoRVApxpUG3HZcR3vAI6psyHAt7rjMiUqIDkOeKn71gPnYsGHzbUX5IBqbIOB7rggVMrqQOCnotgihkO1ERChU25+M3BKn4aDfLA0y0uYs67S8QjgrdpYmZUudJmF4tJpPnBLNy0CblTVuAT8pcA13TcVeBKjok0mFxAxDDbwJZNIToNsKh1tbml9JC4Aa3QmWm3/3Rc62eCuAMuAnkR9piCmqygCrrh6zWV5/FCRaE+GxsbeEHMYhdVgC88gHXuzgY81Azm8RZzHAHdT2Uy1QCaCsehll6vKEQGpLduQQZ1ueI1hIfA07HBHN2aoVg/VNScSmd3uUdGfBXks6ZAI/juY0GKPBvvXIG1g7mT6nU6nJoEpBuYibMxOOR4MGxA6osepOgjFSqgJO6WOAw3+iiid/uiBwKqfi1xHWZ2DIZGXpBasrflhwNLLioNbNrvGisyZ5OX+hAVvEdOMwTZWwXkYbjgWfdN1/K1Te+aakBwKhunUeg7yGEymVPUOagba68hLMxgbnBd01HGZNlUodoiodW4b1G7pAdYmB8WLofMCgBW0CRxUyqc6FwFju9x2u5d1Sf1doQhEo8J9EMqm7EhMS+jEHYt9NFeRZSUAvvmgxvFJEjveVmNQlkN9V0j8StiD7s0fq4SiZjB3WfoJE3ZA4WOu76iUZJG+/gel7i41pAynuAAAAABJRU5ErkJggg=="/></button>
  <button type="button" class="btn btn-outline-secondary ms-1 me-1 navbar-collapse" id="login"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA7JJREFUSEu1ll2IVVUUx3/LMTFEkFRsBBkZGx3oKWQGpYEgfBwF8aGeRIMgCcSkIgUR/EIJqVCEBAXxQVDftCd9SERHosTJcNAKeihRRpkexhFRWd51zj777LPPPvda4H66d5+118f/v76EV3UEUFOe//B/3Y0UH5L2Q2kvYE/UKfV62zyPTWbeZI74H/lV6nivpykyiGgvykIneVfgT4WfihirGkJHy9+54abIcqxMoAd0O7AOmFsqrkQ/jnBWlH0Kf3di0EdcF8y8mSGwQ+FLYEYT2tHbJ8Delvw+4HkqMNOc5NgB0I1wDmV5Jy6SgMElh9DDOKhGw8BikBHQN9tDlkOd51rdvON+BcIDz1qQU7HuOcDPwJIOudbGp4oT14Eh4HH4IMXxcYGNzRmePX8G3HaK+gW6UvJBBR8AvioMJ6CWZYiOOdwCByu1eAZ0k8BDZ2wecBRY2wahKdToYzw0Hsqbgo8bMtyuDbZBy9aIUcv4UaDflV+1yeSXu1plsjMw7FV0ARPAbP+4rOOiN3wKHGmo+62gB5MplkN4W5H+IhnDcnoP+LFD4Q+D/FD2y4r0MHCuobQKwaXA745j/3g9cKKD4c+Ab00mYWBrC62DdbQqN2vMOffeq/gc+DrWGA4ZUX5TeMdldUjndIVbQF8bmuzTFoTvjMGwnAKPXdxp3E4jfCLKhMvq+QLfayKrG1D5pkCswO1D4FQJY32OehqEZyhjrZ78GkIfiiVm9UTT0338ADhdQp33vBXASPm6TX6+zDxOGx6wrlgmV25jGnAPmB+6Hpg3ZC+5rLZoHzm5WcDbwGqEoXoFem3/AIvMUpzVJnEEsK4UN/0bCBtEGU0Ng4CCAZSTLcqWJarDuLU8yo5PLhfZW8CYgGVpce67iMrxFi0V0W61UOEm8Ebg0FOUXmxBcIZSQ+IY8FFQqf8CqxB+iUdbIiq7svl9sVXvNuWKcwjY7EONyqkQMk+vZTVZEjyJsAflMMijyrJXKrdWa8q3tfqB8V6cX4F3gcmw7UQRewx7Qa6CLigZycCfaim5AFwB7kBWRja3rd2+D7weyf8FWbUYXf6TFUXeq8PyKD21LfI8eaf6P+eyG5VZbsQJW4+4SuRMN8q+QOgKS8WvO3WnbdnbDez3y17C7SaoQ2SstPoQ3YZmwz5LmkQ7NDjPCBxIrbeVVSIsp4ibyLD/a5yuROhB6XZD+i7wh9vTXBUm660SdzuOw+z/jxy3abeOr6iBND0I8egw6msuRiC7dfgFa88tOZewnlsAAAAASUVORK5CYII="/></button>
  <button type="button" class="btn btn-outline-secondary ms-1 me-1 id="reg"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAsNJREFUSEudlztoFVEQhr8JsVDRRtCUASvRwsbOysKkEBGNCNoJooUpLARtfFRaWIggPhorxSIKFkICWoldLAQFC2OhiAYbQSyM4vGe3bO7Z+e8Ni7cy2XP3Pln5v9nZlfoXQIY6u/wSt2PmCZudR7sr+DKww8PKJdAFHh4BgMtIxHUwPXBJFQfe/0AXg10mzTzK9diux9+xpdG8Bc9L++BaWCpikyMI16FXyQ+bhAF9qJ7jWHnf+mgoNAWWGDSdKU+CMw6CnYDLztG8gRE8XSda3ajTGwCvgLjAg8MHNPAvq+QhXJfKFX34r2PcBTDCsh+ML9WKzaV/UfgQ+PDL7UeGrbEL2pDVZU2Rf/UDyslQJlBzCMLVOrjN8D21WaaEeNxMPeaVJqEYvYngdte0sOVFarsN7AZ+D4EeJ3AFwMb44ihiCICbv46B3K42QWtqlNsATdAZrvlkWlQMd2caSNt7fcBT5tsSxxbu62AnWLdlUkrwcW3EWUTwF8PuDjzrO1zhD2+7FeJfU3grL9qc33sB38IYS4EHhS09bMNeKeK5i+AsFDO9RjCZ4wtl7IvYy+OuN2lPYcZp4fDhdEkuZzuvaToToO5qU+VqtshpQKsspzA8AlkPP5g5CZ/tT1bmLZ3I8AZMDVEBe4a5EQPOF/qO6Nlc6obul3TRtsps1vGHF9ro3h9qf8EFqsnCLW+rFmxj1UQFngvsAV47B6RtG7Wg8yAWRZ4ZuBPbAaEHKvKq8xs2W45R09ADvQYrY0fAkeczRngemTylDNW6cwDU46zZWOnUVhz+wBhK2KPFgwyHdNEhmPd7pVcz4FccY4WsE7D9ps3yJSzOQ9cjb0htMDhCIxKzN60s3sD8BZkJZLNGmCH438p9WoS5Tg5v4IDVee81P1G7zhOZZxZlz1HlZ0PnBxk9YtZXerUqinO4aJBsnj/AI9q+CWgDXD9AAAAAElFTkSuQmCC"/></button>
</div>
</nav>
    </nav>

    <!--shop-->
    <section class="shop" >
         <div class= "container">
            <ul>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
                <li><a href=""><img src=".\images\watch1.jpg" alt=""></a></li>
            </ul>
         </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
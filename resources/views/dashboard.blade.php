<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather World</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
          body {
            font-family: Arial, sans-serif;
            background: url('https://c.pxhere.com/images/24/16/6e1c37ea75f848b81cb3f766177f-1618901.jpg!d') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            line-height: 1.6;
         }
          header {
            position: fixed; /* Fixes the header at the top of the page */
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(52, 64, 59, 0.8); /* Semi-transparent background */
            color: #fff;
            padding: 10px 20px; /* Add padding to the header */
            text-align: center;
            z-index: 1000; /* Ensures the header stays on top of other elements */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow for depth */
        }



        .logout-btn {
            position: absolute; /* Positions the button within the header */
            top: 50%;
            right: 20px; /* Aligns the button with some padding from the right edge */
            transform: translateY(-50%); /* Centers the button vertically */
            background-color: #d32f2f; /* Red background for the logout button */
            color: #fff;
            padding: 5px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }


        section{
            color: #f1f5fb;
            font: outline;
        }
  </style>
  <body>

    <div class="container d-flex justify-content-center align-items-center">
        <header>
            <h1>Weather World
            </h1>
            <a href="/logout" method="get" class="logout-btn btn-small">Logout</a>
        </header>

        <section class="w-75" style="margin-top: 110px">
            <div class='row border' style="border: 1px dashed red; height: 150px;">
                <div class="col-8 border-end">
                    <form class="form-floating w-75 mt-3" method="GET" action="{{ route('cityy') }}">
                     @csrf
                        <div class="input-group">
                            <input type="text" name="location" class="form-control" placeholder="Enter City" >
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                        <label class="p-1 ms-2" for="floatingInputValue">Enter City</label>
                    </form>
                        <p class="form-control mt-3 w-75" >{{ $weatherData['location']['name'] }}</p>
                </div>
                <div class="col-4 border-start text-center" >
                    <?php date_default_timezone_set('Asia/Kolkata'); ?>
                    <p class="fs-3 mb-0 mt-1 ">{{ date('d-m-Y') }}</p>
                    <p class="fs-3 mb-0">{{ date('H:i') }}</p>
                    <p class="fs-3 mb-0">{{ date('l') }}</p>
                </div>
            </div>
            <div class='row border' style="border: 1px dashed red; height: 130px;">
                <div class="col-3  border-end">
                    <div class="row border-bottom " style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center ">Temperature</div>
                    </div>
                    <div class="row" style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">{{ $weatherData['data']['values']['temperature'] }}'C</div>
                    </div>
                </div>
                <div class="col-3  border-end">
                    <div class="row border-bottom" style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">Wind</div>
                    </div>
                    <div class="row " style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">{{ $weatherData['data']['values']['windSpeed']*3.6}} km/h</div>
                    </div>
                </div>
                <div class="col-3  border-end">
                    <div class="row border-bottom" style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">Precipitation</div>
                    </div>
                    <div class="row  " style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">{{ $weatherData['data']['values']['precipitationProbability'] }}%</div>
                    </div>
                </div>
                <div class="col-3  border-end">
                    <div class="row border-bottom" style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">Humidty</div>
                    </div>
                    <div class="row  " style="height: 60px;">
                        <div class="col-12 mt-3 d-flex justify-content-center">{{ $weatherData['data']['values']['humidity'] }} %</div>
                    </div>
                </div>


            </div>
        </section>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

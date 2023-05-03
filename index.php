<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: lightcyan">

    <div class="container d-flex justify-content-center p-5">
        <div class="col-5">
            <div class="card p-3 bg-dark txt-light">

                <form action="script.php" method="get">

                    <div class="mb-3">
                        <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                        <textarea type="text-area" name="textContent" class="form-control bg-transparent text-light" id="textContent" placeholder="write a short paragraph"></textarea>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                        <input type="text" name="censoredWord" class="form-control bg-transparent text-light " id="censoredWord" placeholder="write the word to be censored">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <div class="d-flex justify-content-center my-5">
        <h1 class="text-primary">PHP BADWORDS</h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-sm-6" >
            <form action="data.php" method="POST">
                <div class="my-3" >
                    <label for="" class="form-label">inserisci un testo da analizzare</label>
                    <textarea class="form-control" name="inputText" ></textarea>                    
                </div>

                <div class="my-3" >
                    <label for="" class="form-label">inserisci una parola da censurare</label>
                    <input type="text" class="form-control" name="inputWord" ></input> 
                </div>
                <button class="btn btn-primary my-3">Esegui</button>
            </form>
        </div>

    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>BACSARSA DATA STORAGE</title> 
</head>
<body>

<h1 class="text-center text-light bg-dark py-2">BACSARSA ENTRY DATA STORAGE</h1>
    
    <div class="container">

    <form action="" class="mt-5 d-grid gap-3">
        <input type="text" class="form-control"name="first_name"placeholder="first name" autocomplete="off">
        <input type="text" class="form-control"name="last_name"placeholder="last name" autocomplete="off">
        <input type="number" class="form-control"name="age"placeholder="age" autocomplete="off">
        <input type="text" class="form-control"name="adress"placeholder="address" autocomplete="off">
        

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" autocomplete="off">
            <label class="form-check-label" for="flexRadioDefault1">Male</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked autocomplete="off"> 
            <label class="form-check-label" for="flexRadioDefault2">Female</label>
        </div>

        <input type="text" name="number" class="form-control" placeholder="mobile no..." autocomplete="">
        <input type="email" name="email" class="form-control" placeholder="email" autocomplete="off"     >
    </form>

    
    
    </div>
    
</body>
</html>
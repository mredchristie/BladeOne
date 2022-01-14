<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>The App Template :)</title>

    <style>

header {
    border-radius: 6px;
    padding: 30px;
    border: 1px solid red;
    background: red;

}



footer {

    border-radius: 6px;
    padding: 30px;
    border: 1px solid red;
    background: red;
    
}
</style>

</head>
<body>

<header>
    HEADER HEADER
</header>
<main>
    @yield('content')

    <p> Some Links to differant sites </p>

    <a href="page2.php"> This is Page 2 </a>
    <br/>
    <a href="index.php"> HomePage </a>
    <br/>
    <a href="page3.php"> Page3 </a>
    <br/>
    <a href="page4.php"> Page4 </a>
</main>
<footer>
    FOOTER HERE
</footer>

</body>
</html>
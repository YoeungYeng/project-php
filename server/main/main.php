<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<script>
$(window).load(function() {
    var phones = [{
        "mask": "(###) ###-###-###"
    }, {
        "mask": "(###) ###-###-###"
    }];
    $('#Phone').inputmask({
        mask: phones,
        greedy: false,
        definitions: {
            '#': {
                validator: "[0-9]",
                cardinality: 1
            }
        }
    });
});
</script>

<body>
    <main>
        <header class="navbar navbar-static-top bs-docs-nav" id="top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar">dff</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Logo</a>
                </div>
                <nav id="bs-navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 0.8px;">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="/docs/3.4/css/">CSS</a>
                        </li>
                        <li>
                            <a href="/docs/3.4/components/">Components</a>
                        </li>
                        <li>
                            <a href="/docs/3.4/javascript/">JavaScript</a>
                        </li>
                        <li>
                            <a href="/docs/3.4/customize/">Customize</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li><a href="https://themes.getbootstrap.com"
                                onclick="ga('send', 'event', 'Navbar', 'Community links', 'Themes')">Themes</a></li>
                        <li><a href="https://expo.getbootstrap.com"
                                onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
                        <li><a href="https://blog.getbootstrap.com"
                                onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div>

        </div>
    </main>
</body>

</html>
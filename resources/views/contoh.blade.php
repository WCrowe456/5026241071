<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#">
            <img src="https://codeboard.io/images/logo/codeboard_logo_50.png" alt="Logo" style="width:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Project
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Add file</a>
                        <a class="dropdown-item" href="#">Add folder</a>
                        <a class="dropdown-item" href="#">Rename file/folder</a>
                        <hr>
                        <a class="dropdown-item" href="#">Delete file/folder</a>
                        <hr>
                        <a class="dropdown-item" href="#">Hide/Unhide file</a>
                        <hr>
                        <a class="dropdown-item" href="#">Save changes</a>
                        <hr>
                        <a class="dropdown-item" href="#">Share project</a>
                        <hr>
                        <a class="dropdown-item" href="#">Exit project</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Edit
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Undo</a>
                        <a class="dropdown-item" href="#">Redo</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        View
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Change editor settings</a>
                        <a class="dropdown-item" href="#">Show output as text</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Actions
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Compile</a>
                        <hr>
                        <a class="dropdown-item disabled" href="#">Run</a>
                    </div>
                </li>
            </ul>
            <button type="button" class="btn btn-secondary btn-sm" title="Compile this program">Complile</button>
            <button type="button" class="btn btn-secondary btn-sm disabled"
                title="Run the last compiled program">Run</button>
        </div>
    </nav>

</body>

</html>

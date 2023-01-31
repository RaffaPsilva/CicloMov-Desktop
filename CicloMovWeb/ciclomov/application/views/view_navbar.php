<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <a class="navbar-brand" href="<?php echo site_url("geral") ?>">
                    <img src="<?=base_url('assets/images/logo2.png');?>" alt="Logo" style="width: 40px; margin: 0px; padding: 0;">
                    <span class="tituloNav">CicloMov</span>
                </a>

                <li class="nav-item active">
                    <a class="nav-link item" href="<?php echo site_url("geral") ?>"><b>Home</b></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link item" href="<?php echo site_url("geral/pontos") ?>"><b>Pontos</b></a>
                </li>

            </ul>
            <form class="d-flex gap-5">
                <a type="button" class="btn btn-secondary btnlogin text-dark" href="<?php echo site_url("geral/login") ?>">Login</a>
            </form>
        </div>
    </nav>


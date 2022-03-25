<!DOCTYPE html>
<html lang="es">
<nav class="navbar navbar-expand-md navbar-light fixed-top" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" id="booknav">
                    <img src="/img/book_color.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                    <p class="d-inline align-text-top" id="titlenav">
                        Bookstore
                    </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span id="icono-nav" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link ms-4" aria-current="page" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link ms-4" href="/products">Productos</a></li>
                </ul>
                <form class="d-flex me-5">
                    <input type="search" placeholder="Buscar producto..." class="form-control ms-1" id="txtbuscar">
                    <button class="btn me-2" type="submit" id="imgbuscar">
                        <img class="lupaimg" src="/img/loupe.jpg" alt="lupa" width="40px" height="40px">
                    </button>
                </form>
                <ul class="navbar-nav me-4">
                    <li class="nav-item dropdown me-2"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="user-image" src="/img/user.jpg" alt="user" width="50px" height="50px"></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="client/login">Login</a></li>
                        <li><a class="dropdown-item" href="client/register">Register</a></li>
                        <li><a class="dropdown-item" href="client/logout">Logout</a></li>
                        </ul>
                        </li>
                    <li class="nav-item dropdown me-2"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="shop-cart" src="/img/sc70.jpg" alt="carrito" width="50px" height="50px" ></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="/shopcart">Ver mi carrito</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav me-4 mt-2">
                    @if (Session::exists('client'))
                    <li class="nav-item"><p id="p_usuario">{{ Session::get('client')->name }} {{ Session::get('client')->last_name }}</p></li>
                    @else

                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</html>
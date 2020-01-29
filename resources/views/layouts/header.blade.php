<!DOCTYPE html>
<html>
@include('layouts.head')
<header>
    <nav class="container">
        <a class="logo" href="">
            <div href="/" class="blog">
                <p id="error">_IT B<span>L</span>OG</p>
            </div>
        </a>
        <div class="nav-toggle"><span></span></div>
        <form action="../pages/sign" method="get" id="sign">
            @if (!Auth::check())
                <button  type="submit"><i>Login</i></button>
            @endif
        </form>

        <form action="/pages/sign" method="get" id="sign" style="color: blue">
            @if (Auth::check())
                <button  type="submit"><i>Home</i></button>
            @endif
        </form>



        <form action="{{url('search')}}" method="get" id="searchform">
            <input type="search" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul id="menu">
            <li><a href="/">Main page</a></li>
            <li><a href="/pages/uthors">ArticleAuthors</a></li>
            <li><a href="/pages/aboutme">about</a></li>
        </ul>
    </nav>
</header>

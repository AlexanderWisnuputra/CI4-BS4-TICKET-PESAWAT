<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indonesia Local Ticket</title>
    <meta name="description" content="Simple CRUD and image upload website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/airplane.png">

    <!-- STYLES -->

    <style>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);

        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1500px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        p.a { 
            text-indent:135px;
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(20, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
      
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
            <li class="menu-item hidden"><a href="#">Home</a></li>
            <li class="menu-item hidden"><a href="http://localhost:8080/add " target="_self">Pesan Tiket</a>
            </li>
            <li class="menu-item hidden"><a href="http://localhost:8080/list" target="_self">List</a></li>
        </ul>
    </div>

    <div class="heroe">
        <h1>Website Pemesanan Tiket Wisata </h1>
        <h2>Website pemesanan wisata paling mudah.</h2>
    
    </div>

</header>

<!-- CONTENT -->

<section>

    <h2 style="font-size:40px">Pilih Wisata yang ingin dipesan:</h2>
    <div class="row">
  <div class="column">
    <p><a target="_blank" href="https://www.youtube.com/watch?v=PuZ6d6sbfF0">
    <img src="dufan.jpg" alt="Wisata 1">
    </a></p>
  </div>
  <div class="column">
    <p><a target="_blank" href="https://www.youtube.com/watch?v=IT0SMFf0LHE">
    <img src="monas.jpg" alt="Wisata 2">
</a></p>
  </div>
<div class="column">
    <p><a target="_blank" href="https://www.youtube.com/watch?v=F8_chw47ZIM">
    <img src="sea.jpg" alt="Wisata 3">
</a></p>
  </div>
   <div class="row2">
  <div class="column">
    <p style="text-align: justify; padding-right: 35px;">Dufan atau disebut juga Dunia Fantasi adalah sebuah theme park yang terletak di kawasan Taman Impian Jaya Ancol, Jakarta Utara, Indonesia yang diresmikan dan dibuka untuk umum pada tanggal 29 Agustus 1985.
</p>
  </div>
  <div class="column">
    <p style="text-align: justify; padding-right: 35px;">Monumen Nasional atau yang disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang terletak tepat di tengah Lapangan Medan Merdeka, Jakarta Pusat.</p>
  </div>
<div class="column">
    <p style="text-align: justify; padding-right: 35px;"> Sea World Ancol merupakan sebuah kawasan yang lengkap untuk memberikan hiburan dan pendidikan khususnya dunia laut.
    </p>
  </div>
</div>
</div>
    <p class="a">  <a target="_self" href="http://localhost:8080/add">Dufan</a>
    <span style="padding-left: 270px;">  <a target="_self" href="http://localhost:8080/add">Monas</a></span>
    <span style="padding-left: 270px;">  <a target="_self" href="http://localhost:8080/add">Sea World</a></span> </p>
</section>

<!-- FOOTER: COPYRIGHTS -->

<footer>


    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>
    
    </div>

</footer>
</body>
</html>

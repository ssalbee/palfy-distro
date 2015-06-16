<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Palfynux</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>-->
	<!--[if IE]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="container">
  <header>
    <h1>Palfynux</h1>
    <nav>
    <a href="https://www.archlinux.org/download/">Letöltés</a> -
    <a href="https://wiki.archlinux.org/index.php/Beginners%27_guide">Telepítés</a> -
    <a href="repo.html">További konfiguráció</a>
    </nav>
  </header>
  <main>
    <p>
      A Palfynux egy Arch Linux alapú Linux disztribúció. Tartalmazza az LXDE asztali felületet, a LibreOffice irodai csomagot, a Code::Blocks és Arduino integrált fejlesztői környezetet, a Chromium böngészőt, valamint a KiCAD, Eagle, Verilog és Fritzing szoftvereket.
    </p>
    <p>
      <h2>Csomagok</h2>
      <?php
        error_reporting(E_ALL);
        echo("<table border=\"1\"><tbody><tr><td>Csomag</td><td>Verzió</td></tr>");
        $out = explode(" ", str_replace(" [installed]", "", str_replace("\n", " ", shell_exec("pacman -Sl palfynux"))));
        echo("<tr>");
        for($i = 0; $i < count($out); $i++)
        {
          if($i % 3 == 0)
          {
            if($i != 0)
            {
              echo("</tr>");
            }
            continue;
          }
          echo("<td>" . $out[$i] . "</td>");

        }
        echo("</tbody></table>");
      ?>
    </p>
  </main>
  <footer>
    <hr>
    Powered by lighttpd
  </footer>
</body>
</html>

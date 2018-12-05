<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Strona główna</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php
            //Dynamiczne menu (dane z bazy)
            $polaczenie = @mysqli_connect('localhost', 'root', 'root', 'pai_kondratenkopoputnikov');
            if (!$polaczenie) {
              die('Wystąpił błąd połączenia: ' . mysqli_connect_errno());
            }
            @mysqli_query($polaczenie, 'SET NAMES utf8');

            $sql = 'SELECT `id`, `nazwa`
                         FROM `kategorie`
                         ORDER BY `nazwa`';
            $wynik = mysqli_query($polaczenie, $sql);
            if (mysqli_num_rows($wynik) > 0) {
              echo "<ul>" . PHP_EOL;
              while (($kategoria = @mysqli_fetch_array($wynik))) {
                echo '<li ><a href="' . $_SERVER["PHP_SELF"] . '?kat_id=' . $kategoria['id'] . ' ">' . $kategoria['nazwa'] . '</a></li>' . PHP_EOL;
              }
              echo "</ul>" . PHP_EOL;
            } else {
              echo 'wyników 0';
            }
            ?>
          </ul>
        </li>
        <li><a href="#">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
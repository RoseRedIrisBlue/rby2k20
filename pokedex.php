<?php
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>
<meta http-equiv=“Pragma” content=”no-cache”>
<meta http-equiv=“Expires” content=”-1″>
<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>

<!DOCTYPE html>
<html>
    <head>
        <title>
            RBY2k20: Pokedex
        </title>
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/select.css">
        <script src="js/tableMaker.js"></script>
        <script src="js/sorttable.js"></script>
        <script src="js/includes.js"></script>
        <link rel="stylesheet" href="css/dex_table.css">
        <style>
          #dex table:first-child tr td:first-child:hover
            {
                background-color: #ddd;
            }
        </style>

        <script>
            $(document).ready(function(){
              // Write on keyup event of keyword input element
              $("#kwd_search").keyup(function(){
                // When value of the input is not blank
                    var term=$(this).val().toLowerCase();
                if( term != "") {
                  // Show only matching TR, hide rest of them
                        console.log( $(this).val())
                        $("table tbody>tr").hide();
                        var term=
                        $("td").filter(function(){
                              return $(this).text().toLowerCase().indexOf(term ) >-1
                        }).parent("tr").show();
                } else {
                  // When no input or clean again, show everything
                  $("tbody>tr").show();
                }
              });
            });

        </script>

    </head>
    <body>

<!--NAVBAR-->
<div id="navLogo">
  <img src="images/FinalLogo.png">
</div>

<nav id="nav" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a id="brand" class="navbar-brand" href="index.html">RBY2K20</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pokedex
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pokedex.php?meta=rby">RBY OU</a>
              <a class="dropdown-item" href="pokedex.php?meta=rby1u">RBY 1U</a>
              <a class="dropdown-item" href="pokedex.php?meta=violet">Violet</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc97">Nintendo Cup 97</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc98">Nintendo Cup 98</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc99">Nintendo Cup 99</a>
              <a class="dropdown-item" href="pokedex.php?meta=petit">Petit Cup</a>
              <a class="dropdown-item" href="pokedex.php?meta=pika">Pika Cup</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!--<a class="dropdown-item" href="articles.php">All Articles</a>-->
            <a class="dropdown-item" href="articles.php?tag=survey">Surveys</a>
            <!--<a class="dropdown-item" href="articles.php?tag=interviews">Interviews</a>-->
        </div>
    </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guides
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="guides.php?tag=rbyou">RBY OU</a>
              <a class="dropdown-item" href="guides.php?tag=rby1u">RBY 1U</a>
              <a class="dropdown-item" href="guides.php?tag=violet">Violet</a>
              <a class="dropdown-item" href="guides.php?tag=other">Other Formats</a>
              <a class="dropdown-item" href="guides.php">All Tiers</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="teams.php?tag=rbyou">RBY OU</a>
            <a class="dropdown-item" href="teams.php?tag=rby1u">RBY 1U</a>
            <a class="dropdown-item" href="teams.php?tag=violet">Violet</a>
            <a class="dropdown-item" href="teams.php">All Tiers</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tournaments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://rby2k20.freeforums.net/#category-4">Forum Tours</a>
        </div>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Participate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://discord.gg/GYFJmfm">Discord</a>
          <a class="dropdown-item" href="https://rby2k20.freeforums.net/">Forum</a>
          <a class="dropdown-item" href="http://rby.psim.us/">Pokemon Showdown Sever</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UC2On9uqPj8rcUVoaeyhn0LA">Youtube</a>
        </div>
      </li>
  <!--    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tools
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="calc.html">Calculator</a>
          </div>
      </li> -->
    </ul>
  </div>
</nav>

<!--NAVBAR-->
        
        <div id="search">
            <select onchange="changeTable()" id="showmons" style="display: inline-block;">
              <option>All Pokemon</option>
            </select>
          <h3 style ="margin-left:1% width: 60%; display: inline-block;">Search: <input height="32" width="128" type="text" id="kwd_search" placeholder=""></h3>
        </div>

        <dix id="dex" class="dex">

        </div>
 
        <script>
          //Rby pokemon https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1378406483&single=true&output=csv
          //Rby moves https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1181236501&single=true&output=csv
          //Violet pokemon https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=269848004&single=true&output=csv
          //Violet moves https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=2873338&single=true&output=csv

          var dex = document.getElementById("dex");
          var meta = "<?php echo $_GET['meta']; ?>";

          var viability =<?php 
                $meta = $_GET['meta'];
                $url='data/empty.csv';
                
                if(strcmp($meta,'violet') == 0)
                {
                  $url='data/RBY2k20Data-ShownMonsVV.csv';
                }
                elseif(strcmp($meta,'rby1u') == 0)
                {
                  $url='data/RBY2k20Data-ShownMonsTB.csv';
                }
                elseif(strcmp($meta,'rby') == 0)
                {
                  $url='data/RBY2k20Data-ShownMonsSt.csv';
                }  
                if (($handle = fopen($url, "r")) !== FALSE) {
                  $result="";
                  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                      $totalrows = count($data);
                      for ($row=0; $row<=$totalrows; $row++){
                          if ( (strlen($data[$row])>0)){
                              $result.=$data[$row].'~';
                          }   
                      }
                      $result .= '~';
                  }
                  fclose($handle);
              }
              echo json_encode($result, JSON_HEX_TAG);?>;

                var legality =<?php 
                $meta = $_GET['meta'];
                $url='data/empty.csv';
                
                if(strcmp($meta,'rby') == 0)
                {
                  $url='data/RBY2k20Data-LegalMonsSt.csv';
                }
                elseif(strcmp($meta,'violet') == 0)
                {
                  $url='data/RBY2k20Data-LegalMonsVV.csv';
                }
                elseif(strcmp($meta,'rby1u') == 0)
                {
                  $url='data/RBY2k20Data-LegalMonsTB.csv';
                }   

                if (($handle = fopen($url, "r")) !== FALSE) {
                  $result="";
                  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                      $totalrows = count($data);
                      for ($row=0; $row<=$totalrows; $row++){
                          if ( (strlen($data[$row])>0)){
                              $result.=$data[$row].'~';
                          }   
                      }
                      $result .= '~';
                  }
                  fclose($handle);
              }
              echo json_encode($result, JSON_HEX_TAG);?>;

          var Pokedata = <?php 
          
                $meta = $_GET['meta'];
                $url='data/RBY2k20Data-RBYPokemon.csv';
                
                if(strcmp($meta,'violet') == 0)
                {
                  $url='data/RBY2k20Data-VioletPokemon.csv';
                }
                elseif(strcmp($meta,'rby1u') == 0)
                {
                  $url='data/RBY2k20Data-TradebackPokemon.csv';
                }
                elseif(strcmp($meta,'nc97') == 0)
                {
                  $url='data/RBY2k20Data-NC97Pokemon.csv';
                }
                elseif(strcmp($meta,'nc98') == 0)
                {
                  $url='data/RBY2k20Data-NC98Pokemon.csv';
                }
                elseif(strcmp($meta,'nc99') == 0)
                {
                  $url='data/RBY2k20Data-NC99Pokemon.csv';
                }   
                elseif(strcmp($meta,'petit') == 0)
                {
                  $url='data/RBY2k20Data-PetitPokemon.csv';
                }
                elseif(strcmp($meta,'pika') == 0)
                {
                  $url='data/RBY2k20Data-PikaPokemon.csv';
                }

                
                
                if (($handle = fopen($url, "r")) !== FALSE) {
                    $result="";
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                        $totalrows = count($data);
                        for ($row=0; $row<=$totalrows; $row++){
                            if ( (strlen($data[$row])>0)){
                                $result.=$data[$row].'~';
                            }   
                        }
                        $result .= '~';
                    }
                    fclose($handle);
                }
                echo json_encode($result, JSON_HEX_TAG);?>;
          
        var Movedata = <?php 
          
          $meta = $_GET['meta'];
          $url='data/RBY2k20Data-RBYMoves.csv';
          
          if(strcmp($meta,'violet') == 0)
          {
            $url='data/RBY2k20Data-VioletMoves.csv';
          }
          elseif(strcmp($meta,'nc97') == 0)
          {
            $url='data/RBY2k20Data-RGBYMoves.csv';
          }
          elseif(strcmp($meta,'nc98') == 0)
          {
            $url='data/RBY2k20Data-Stad0Moves.csv';
          }
          elseif(strcmp($meta,'nc99') == 0)
          {
            $url='data/RBY2k20Data-StadMoves.csv';
          }   
          elseif(strcmp($meta,'petit') == 0)
          {
            $url='data/RBY2k20Data-StadMoves.csv';
          }
          elseif(strcmp($meta,'pika') == 0)
          {
            $url='data/RBY2k20Data-StadMoves.csv';
          }

          
          if (($handle = fopen($url, "r")) !== FALSE) {
              $result="";
              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                  $totalrows = count($data);
                  for ($row=0; $row<=$totalrows; $row++){
                      if ( (strlen($data[$row])>0)){
                          $result.=$data[$row].'~';
                      }
                  }
                  $result .= '~';
              }
              fclose($handle);
          }
          echo json_encode($result, JSON_HEX_TAG);?>;

          var Pokedata = new tableScanner(Pokedata, "~");
          var Movedata = new tableScanner(Movedata, "~");
          var viability = new tableScanner(viability, "~");
          var legality = new tableScanner(legality, "~");

          var tiers = viability.next();
          if(meta != 'rby' && meta != 'rby1u' && meta != 'violet')
          {
            tiers = [];
          }
          var viabilityTables = [];

          for(var i = 0; i < tiers.length; i++)
          {
            document.getElementById("showmons").innerHTML += "<option value=\"2\">" +tiers[i].replace("Legal","")+ " Viable</option>";
            viabilityTables.push(new table(meta));
          }

          var viabilityData = [];

          while(viability.hasNext())
          {
            viabilityData.push(viability.next());
          }

          /////////////

          var tiers2 = legality.next();
          if(meta != 'rby' && meta != 'rby1u' && meta != 'violet')
          {
            tiers2 = [];
          }
          var legalityTables = [];

          for(var i = 0; i < tiers2.length; i++)
          {
            document.getElementById("showmons").innerHTML += "<option value=\"2\">" +tiers2[i]+ " Legal</option>";
            legalityTables.push(new table(meta));
          }

          var legalityData = [];

          while(legality.hasNext())
          {
            legalityData.push(legality.next());
          }

          var pokeTable = new table(meta);
          var moveTable = new table(meta);
          var header = true;

          var n =0;
          while(Pokedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Pokedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              switch(i)
              {
                case 0: (!header)? newRow.addCell("<img src=\"images/smallsprites/"+ rowData[i] +".png\">" + "<a href=\"poke.php?meta="+ meta +"&mon=" + rowData[i] + "\"> &nbsp;" + rowData[i]+"</a>") : newRow.addCell(rowData[i]);
                case 1: break;
                case 3: if(rowData.length == 10){newRow.addCell("");  } newRow.addCell(rowData[i]); break;
                case 4: 
                case 5: 
                case 6:
                case 7:
                case 8: 
                case 9: statHeat(rowData.length, i); newRow.addCell(rowData[i]); break;
                default: newRow.addCell(rowData[i]);
              }
            }

            if(rowData.length == 10)
            {
              newRow.addAtr(1, "colspan", 2);
              newRow.addAtr(2, "style", "display:none");
            }
            else
            {
              newRow.addAtr(2, "class", newRow.cells[2]);
            }

            newRow.addAtr(0, "style", "text-align: left;");
            newRow.addAtr(1, "class", newRow.cells[1]);
            
            for(var j = 0; j < tiers.length; j++)
            {
                if(n > 0 && viabilityData[n-1][j+1] == 'Y')
                  viabilityTables[j].addRow(newRow);
                else if(n ==0 )
                {
                  viabilityTables[j].addRow(newRow);
                }
            }

            for(var j = 0; j < tiers2.length; j++)
            {
                if(n > 0 && legalityData[n-1][j+1] == 'Y')
                  legalityTables[j].addRow(newRow);
                else if(n ==0 )
                {
                  legalityTables[j].addRow(newRow);
                }
            }

            n++;
            pokeTable.addRow(newRow);
            header = (false);
          }

          header = true;

          while(Movedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Movedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              if(i != 1)
              {
                newRow.addCell(rowData[i]);
              }
            }
            newRow.addAtr(0, "style", "text-align: left;");
            newRow.addAtr(0, "onclick", "moveDisplay(\'"+ newRow.cells[0] +"\')");
            newRow.addAtr(1, "class",newRow.cells[1]);
            moveTable.addRow(newRow);
            header = (false);
          }

          document.getElementById("dex").innerHTML += pokeTable.print() + moveTable.print();

          var tables = viabilityTables.concat(legalityTables);

          function changeTable()
          {
              var i = document.getElementById("showmons").selectedIndex;
              var table;
              if(i == 0)
                table = pokeTable;
              else
                table = tables[i-1];
              document.getElementById("dex").innerHTML = table.print() + moveTable.print();

              sorttable.makeSortable(document.getElementById("dex").getElementsByTagName("table")[0]);
              sorttable.makeSortable(document.getElementById("dex").getElementsByTagName("table")[1]);
          }

          function moveDisplay(move)
          {
            window.location.href = ('move.php?move=' + move + "&meta=" + meta);
          }


          $('table:first tr').each(function() {
            var lasttd = $(this).find(':last')
            if(lasttd.html().includes("NA"))
            {
              lasttd.hide();
            }
          });

        </script>

    </body>
</html>



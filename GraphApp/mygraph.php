<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>GraphApp</title>

     <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets2/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets2/css/demo.css" rel="stylesheet" /> 

     <script src="assets2/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets2/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    
    <!--  Plugins -->
    <script src="assets2/js/ct-paper-checkbox.js"></script>
    <script src="assets2/js/ct-paper-radio.js"></script>
    <script src="assets2/js/bootstrap-select.js"></script>
    <script src="assets2/js/bootstrap-datepicker.js"></script>
    
    <script src="assets2/js/ct-paper.js"></script>  
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      

</head>
<body style="width: 100%">
    
  
                        <div id="navbar-dropdown">
                            <nav class="navbar navbar-default">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  
                                  <a href="index.php" class="navbar-brand">GraphApp</a>
                                </div>
                            
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav pull-right">
<!--                                       default dropdown -->
                                    <li class="dropdown">
                                      <button href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown">Chemin plus court <b class="caret"></b>
<!--                                  You can add classes for different colours on the next element -->
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header" style="padding-bottom: 2px">Sommet du départ</li>
                           
                                           <form method="post" action="">                 
                       <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px">  <input type="hidden" name="type" value="shortest_path"/>
                        <input type="text" name="depart" size="3"/>
                    <input type="submit" class="btn btn-fill btn-info btn-xs" style="margin-top: 10px" value="OK" />
                     </li>
                     <li class="dropdown-header" style="padding-top: 2px"><small>Exemple : V1</small></li>
    </form>
                                      </ul>
                                    </button></li>



<li class="dropdown">
                                      <button href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown">Recherche BFS <b class="caret"></b>
<!--                                  You can add classes for different colours on the next element -->
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header" style="padding-bottom: 2px">Sommet du départ</li>
                           
                                           <form method="post" action="">                 
                       <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px">  <input type="hidden" name="type" value="bfs"/>
                        <input type="text" name="depart" size="3"/>
                    <input type="submit" class="btn btn-fill btn-info btn-xs" style="margin-top: 10px" value="OK" />
                     </li>
                     <li class="dropdown-header" style="padding-top: 2px"><small>Exemple : V1</small></li>
    </form>
                                      </ul>
                                    </button></li>


                                    <li class="dropdown">
                                      <button href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown">Recherche DFS <b class="caret"></b>
<!--                                  You can add classes for different colours on the next element -->
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li class="dropdown-header" style="padding-bottom: 2px">Sommet du départ</li>
                           
                           
                                           <form method="post" action="">                 
                       <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px">  <input type="hidden" name="type" value="dfs"/>
                        <input type="text" name="depart" size="3"/>
                    <input type="submit" class="btn btn-fill btn-info btn-xs" value="OK" />
                     </li>
                     <li class="dropdown-header" style="padding-top: 2px"><small>Exemple : V1</small></li>
    </form>
                                      </ul>
                                    </button></li>

<li class="dropdown">
     <form method="post" action="">  
        <input type="hidden" name="type" value="mst"/>
        <button class="dropdown-toggle btn btn-info" type="submit"> Arbre couvrant minimal </button>
         
    </form>   </li>


    <li class="dropdown">
                                      <button href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown">Flot max <b class="caret"></b>
<!--                                  You can add classes for different colours on the next element -->
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header" style="padding-bottom: 2px">Sommet du départ</li>
                           
                                           <form method="post" action="">                 
                       <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px"> 
                        <input type="hidden" name="type" value="max_flow"/>
                       
                    <input type="text" name="depart" size="3"/> 
                     </li>
    <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px">Sommet d'arrivée</li>
 <li class="dropdown-header" style="padding-top: 2px; padding-bottom: 2px">  <input type="text" name="arrive" size="3"/> </li>
   <li style="padding-left:7%">  <input type="submit" class="btn btn-fill btn-info btn-xs" value="OK" /> </li>
   <li class="dropdown-header" style="padding-top: 2px"><small>Exemple : 1</small></li>

    </form>
                                      </ul>
                                    </button></li>

<!--                                       primary dropdown -->
                                   
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                        
                        </div><!--  end navbar -->
              





 <aside style="border:gray 2px solid ; float: right;width:55%; margin-right:2% "><img style="width: 100%" src="temp.png"/></aside>
<div style="padding-left: 2%; ">
<?php 
    
    if (isset($_POST['type'])){
        $type = $_POST['type'];
       
    switch ($type) {
        
        case 'bfs':
            bfs();
            break;
        case 'dfs':
            dfs();
            break;
        case 'mst':
            mst();
            break;
        case 'max_flow':
            max_flow();
            break;
         case 'shortest_path':
            shortest_path();
            break;
           
    } }



?>
<br><br><br>
    </div><div style="clear: both;
     padding-top: 2%; padding-bottom: 2%; background-color: #F3F2EE">
          <div class="container text-center" style="font-size: 14px;">
               © 2018 GraphApp - Projet pour la création des graphes et l'application des algorithmes de recherche
              <br> Développé par Felloul Mehdi et Gharbi Wiam
          </div></body>
</html>
<?php 
if(isset( $_POST["nlignes"]) && isset( $_POST["ncolonnes"]) && isset($_POST["matrix"])){
	$lignes = $_POST["nlignes"];
	$colonnes = $_POST["ncolonnes"];
	$matrix = $_POST["matrix"];
	$file = fopen("matrix.csv", "w");
					

												//1,2,3
												//4,5,6
										//7,8,9
					for($i=0;$i<$lignes;$i++){
						$string="";
						for($j=0;$j<$colonnes;$j++){
						if($j!=$colonnes-1)$string = $string.$matrix[$i][$j].";";
						else {
							$string = $string.$matrix[$i][$j];
						}
						}
						fwrite($file, $string);
						fwrite($file, PHP_EOL);
						 //echo $string;
					}
					fclose($file);	

exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe graph.R');	
 }



 //-----------------------------------------------------------------------------------------
 //Traitement :
 //-----------------------------------------------------------------------------------------


//BFS:
function bfs() {
 if(isset($_POST['depart'])){
$depart = $_POST['depart'];
exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe bfs.R '.$depart);
$file = fopen("bfs.txt", "r");
if ($file) {
    $i = 0;
    $c = 0;
    while (($line = fgets($file)) !== false) {
        if($i>7){
            $c = $c.$line;  
        }

     
    $i++;
    } 
    echo "<h3>Résultat : Recherche BFS</h3>";
    echo "<br>";
preg_match_all('#(\V)(\d+)#', $c, $matches);
foreach ($matches[0] as $key => $value) {
 if($value[0]!="[") print($value." ");

}
}
fclose($file);}
}

//DFS:

function dfs() {
if(isset($_POST['depart'])){
$depart = $_POST['depart'];
exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe dfs.R '.$depart);
$file = fopen("dfs.txt", "r");
if ($file) {
    $i = 0;
    $c = 0;
    while (($line = fgets($file)) !== false) {
        if($i>7){
            $c = $c.$line;  
        }

     
    $i++;
    } 
    
    echo "<h3>Résultat : Recherche DFS</h3>";
    echo "<br>";
preg_match_all('#(\V)(\d+)#', $c, $matches);
foreach ($matches[0] as $key => $value) {
 if($value[0]!="[") print($value." ");

}
}
fclose($file);}
}
//max_flow:

function max_flow() {
if(isset($_POST['depart']) && isset($_POST['arrive']) ){
$depart = $_POST['depart'];
$arrive = $_POST['arrive'];

exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe max_flow.R '.$depart.' '.$arrive);
echo "<h3>Résultat : Flot max</h3>";
    echo "<br> Fmax= ";
$file = fopen("max_flow.txt", "r");
if ($file) {
    $i = 0;
    while (($line = fgets($file)) !== false) {
    
        if($line[0] == "[") {
            $line[0] = " ";
            $line[1] = " ";
            $line[2] = " ";
            echo $line;
        

    } 
    $i++;
    }

}
fclose($file);}
}

//mst: 
function mst() {
exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe mst.R');
            echo "<h3>Résultat : Arbre couvrant minimal</h3>";
            echo "<img src='mst.png'>";

}
//shortest_path

function shortest_path() {
if(isset($_POST['depart'])){
$depart = $_POST['depart'];
exec('C:\\"Program Files"\\R\\R-3.5.0\\bin\\Rscript.exe shortestpathscript.R '.$depart);
$file = fopen("shortestpath.txt", "r");
if ($file) {
    $i = 0;
    $c = "";
    while (($line = fgets($file)) !== false) {
        if($line[0] == "V"){
            $line[0] = " ";
            $line[1] = " ";
            $line[2] = " ";
            $c = $c."".$line;
          }
      
        if($line[0] == "[") {
                      

            $line[0] = " ";
            $line[1] = " ";
            $line[2] = " ";
            $tab[$i]= $line;
        
  $i++;
    } 
  
    }
preg_match_all('!\d+!', $c, $matches);
//var_dump($matches[0]);
//var_dump($tab);
for ($k=0;$k<$i;$k++){
    $T[$tab[$k]]=$matches[0][$k+1];

}



 } 

echo "<h3>Résultat : Chemin plus court</h3>";
    echo "<br>";

foreach ($T as $key => $value) {
     echo $key."<strong>  Cout: ".$value." </strong> <br/>";
}
fclose($file);}
}
?>

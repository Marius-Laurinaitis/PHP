<?php
if (!isset($_SESSION)) {
    session_start();
}	
?>

<!DOCTYPE HTML>
   


<html lang="en">

  <head>
			<link rel="stylesheet" type="text/css" href="battle.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<title>Arrays</title>
  </head>
  
  <body>
  
			<div class="top1">
				<form action="index.php" method="post">
						X: <input type="text" id="xy" name="xas">
						Y:  <input type="text" id="yx" name="yas">
						<input type="submit" value = "Shoot">
						<input type="submit" class="button" name="Reset" value="Reset">
				</form>
			</div>




<script>
$(document).ready(function(){
    $('.button').click(function(){
        var buttonVal = $(this).val();
        var phpPage = 'index.php',
        data =  {'action': buttonVal};
        $.post(phpPage, data, function (response) {
        });
    });
});
</script>
  

 
 	





 
 
  <?php
   

 	      
 
		
								
		
								
								function display () {
									echo '<div id="wall">';
										echo	'<video autoplay muted loop id="wall1" style="width:640px;height:830px;">';
										echo	'<source src="water1.mp4" type="video/mp4">';
										echo	'</video>';
							

									echo  '<img src="'.'/sandbox/000.png'.'.""  style="width:50px;height:50px;".">'.'<img src="'.'/sandbox/00.png'.'.""  style="width:50px;height:50px;".">'.'<img src="'.'/sandbox/01.png'.'.""  style="width:50px;height:50px;".">'.'<img src="'.'/sandbox/02.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/03.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/04.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/05.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/06.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/07.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/08.png'.'.""  style="width:50px;height:50px;".">'
									.'<img src="'.'/sandbox/09.png'.'.""  style="width:50px;height:50px;".">'
									;
									
									$line = array( 	'<br/><img src="'.'/sandbox/00.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/01.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/02.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/03.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/04.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/05.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/06.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/07.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/08.png'.'.""  style="width:50px;height:50px;".">',
												'<br/><img src="'.'/sandbox/09.png'.'.""  style="width:50px;height:50px;".">'
									);
								
											for (  $i =0; $i<10; $i++  ) 
											{	
												echo "<br/>{$line[$i]}";	
												for (  $k =0; $k<10; $k++  ) 
												{				
													echo $_SESSION["display"][$i][$k] ;		
												}
								
											}
								echo '</div>' ;
							}			

					function hit ($start,$end)  
					{	
						
									if (empty($_SESSION["x"]))
									{
										$_SESSION["x"]=-5;
									}
							
									if (empty($_SESSION["y"]))
									{
										$_SESSION["y"]=-5;
									}
									
									if (empty($_SESSION["hits"]))
									{
									$_SESSION["hits"]=0;
									}
									if( empty($_SESSION["shipsSunk"]))
									{
									$_SESSION["shipsSunk"]=0;
									}
						 
				
									if ( (( ($_POST["xas"]!= $_SESSION["x"])  )  || ( ($_POST["yas"]!= $_SESSION["y"]) )) && ($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' )
									&&	($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/7a.png'.'.""  style="width:50px;height:50px;".">' )
									&&  ($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/7b.png'.'.""  style="width:50px;height:50px;".">' )
									&&  ($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/17.png'.'.""  style="width:50px;height:50px;".">' )
									&&  ($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/7d.png'.'.""  style="width:50px;height:50px;".">' )
									)
							
								{
									$_SESSION["hits"]++;
									if (   !empty($_SESSION["info"][$start][$end])    )
										{
											echo '<div class="top8">'."You just hit [".key($_SESSION["info"][$start][$end])."] Congratulations!".'</div>';
										
											$_SESSION["info"][$start][$end][ key($_SESSION["info"][$start][$end])]="x";
											if(shipHasSunk(key($_SESSION["info"][$start][$end])) )
											{
												$_SESSION["shipsSunk"]++;
												echo '<div class="top7">'."You have just sunk [".key($_SESSION["info"][$start][$end])."]".'</div>';
											}	

											if( $_SESSION["shipsSunk"] == sizeof($_SESSION["flotile"])  )
													{
														echo '<div class="top7">'."GAME OVER".'</div>';
													}
										}
								}
									elseif (  $_SESSION["display"][$start] [$end] == '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' )
									{
									 echo '<div class="top2">'."Please don't attack same failed position".'</div>';
									}
									else echo '<div class="top3">'."Please enter different shot coordinates".'</div>';
					
								if (  $_SESSION["ships"][$start][$end]!= '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' )
								{
							   $_SESSION["display"][$start][$end]=$_SESSION["ships"][$start][$end] ;
								}
								else
									{
									echo '<div class="top10">'."Miss".'</div>' ;
									$_SESSION["display"][$start][$end]= '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' ;
							
									}
									$hits = $_SESSION["hits"] ;
										echo '<div class="top4">'."Hit Values are : ".$start . " : " .$end.'</div>' ;
										echo '<div class="top5">'."There has been : ". $hits. " shots so far! ".'</div>';	
										echo '<div class="top9">'."You have sunk total :[".($_SESSION["shipsSunk"])."]"."ships".'</div>';
								display ();
									   
					}
							
							
						function shipHasSunk($ship)
						{
							$g =0;
							$valueArray = array();
							
							for ($i=0; $i<10; $i++ )
							{
								for ($k=0; $k<10; $k++ )
								{
									if ( !empty($_SESSION["info"][$i][$k])) 	
									{
										if(key($_SESSION["info"][$i][$k])==$ship) 
										{
										array_push($valueArray, $_SESSION["info"][$i][$k][ key($_SESSION["info"][$i][$k])  ]  ) ;
										}
									}
								}	
							}
						
							for ($i=0; $i<sizeof($valueArray); $i++ )
							{
								
								if ( $valueArray[$i]=="x"  )
								{
									$g++;
									
								}
							}
							
							if ($g== sizeof($valueArray))
							{
									return true;
							}
						
							return false;
						}
						
						
						
						
						
						
							
													
													
													
				function desantas ($flotile) 
				{
								for (  $i =0; $i<10; $i++  ) 
								{	
								
						
									for (  $k =0; $k<10; $k++  ) 
										{				
											
											if ( empty($_SESSION["ships"][$i][$k]))
												{
													$_SESSION["ships"][$i][$k]=  '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' ;  
													$_SESSION["display"][$i][$k]=  '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' ; 
												}
									
									
											if ( empty($_SESSION["names"][$i][$k]))
												{
													$_SESSION["names"][$i][$k] = '0';
												}

										}
								
								}				
					foreach ($_SESSION["flotile"] as $unit) 
					{
									$pos = rand (1,3);
									$all=0;
									$x = rand(0,9);
									$y = rand(0,9);
								while (!check ($x,$y,$unit,$pos)) 
								{
										$pos = rand (1,3);
										$x = rand(0,9);
									    $y = rand(0,9);
								}
										for ($i=0; $i<strlen($unit); $i++)								
										{ 
											switch ($pos) 
											{	case 1 : 	 $_SESSION["ships"][$x][$y + $i] =  '<img src="'.'/sandbox/7a.png'.'.""  style="width:50px;height:50px;".">' ;   $_SESSION["info"][$x][$y + $i] = array($unit=>$unit[$i]);  // right
												break;
												case 2 :     $_SESSION["ships"][$x][$y - $i] =  '<img src="'.'/sandbox/7b.png'.'.""  style="width:50px;height:50px;".">' ;  $_SESSION["info"][$x][$y - $i] =  array($unit=>$unit[$i]);   // left
												break;
												case 3 : 	 $_SESSION["ships"][$x+$i][$y] =  '<img src="'.'/sandbox/17.png'.'.""  style="width:50px;height:50px;".">' ;  $_SESSION["info"][$x+$i][$y] = array($unit=>$unit[$i]);    // up
												break;
												case 4 : 	 $_SESSION["ships"][$x-$i][$y] =  '<img src="'.'/sandbox/7d.png'.'.""  style="width:50px;height:50px;".">' ;  $_SESSION["info"][$x-$i][$y] =  array($unit=>$unit[$i]);  // down
												break;
											}
							
										}		
					}
			    }
				
				/* 
								After running >100000 given ships array placing simulations on a 0.1s interval there are no errors.
								The given aray consists of :   1 ship length 4
															   2 ships length 3
															   3 ships length 2
															   4 ships length: 1 */
				
					/* 			Every ship must be placed in a way it does not have adjacent ships around it.
								
								Check fucntion is checking the ship placement possibility. If there is a way to place the ship - the ship will be placed. If not starting coordinates will be changing with placing option untill
								there is a possibility to place the ship. 
								One starting point has 4 ways to place the ship(up, down,right,left). There are 100 circles so starting points. There are 4^100 possibilities to place the ship if the ship has a
								length of 1. Sure visualy you wont see the difference but from the placing perspective it is different. With the ship length increasing the possibilty of placing ship is deteriorating due
								to the fact that the ship might go out of 10x10  array matrix.  */
								
								function check ($x,$y,$unit,$case) 
								{
									$counter =0;
									$truth = false;
									for ($i=0; $i<strlen($unit); $i++)								
									{ 
											
										if(
											($case==1)		 && 
											(($y + $i+1)<11)	 &&	
											($_SESSION["ships"][$x][$y + $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')   &&
											(  (empty($_SESSION["ships"][$x][$y + $i+1])) || ($_SESSION["ships"][$x][$y + $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))  &&
											( ($y ==0)||($_SESSION["ships"][$x][$y + $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))   &&
											
											(  ($x ==9)|| (empty($_SESSION["ships"][$x+1][$y + $i+1]))	||	($_SESSION["ships"][$x+1][$y + $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))  &&
											(  ($y ==0) ||($x ==9)||($_SESSION["ships"][$x+1][$y + $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))  &&
											(  ($x ==0) || (empty($_SESSION["ships"][$x-1][$y + $i+1]))	||	($_SESSION["ships"][$x-1][$y + $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))  &&
											(  ($x ==0) ||($y ==0)||($_SESSION["ships"][$x-1][$y + $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))  &&
										
	
											(  ($x ==9) ||($y ==9) ||($_SESSION["ships"][$x+1][$y + $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) && 
											(  ($x ==0) ||($y ==9) ||($_SESSION["ships"][$x-1][$y + $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) 
										  )
										{
											$counter++;
											$truth = ($counter==strlen($unit));
										}
									
										elseif( 
												($case==2) && 
												(($y - $i+1)<11) && 
												(($y - $i-1)>=0)&& 
												($_SESSION["ships"][$x][$y - $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">') &&
												((empty($_SESSION["ships"][$x][$y - $i-1])) || ($_SESSION["ships"][$x][$y - $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												((empty($_SESSION["ships"][$x][$y - $i+1])) || ($_SESSION["ships"][$x][$y - $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												
												(  ($x ==9)||empty($_SESSION["ships"][$x+1][$y - $i-1])||($_SESSION["ships"][$x+1][$y - $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($x ==9)||empty($_SESSION["ships"][$x+1][$y - $i+1])||($_SESSION["ships"][$x+1][$y - $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
											    (  ($x ==0)||empty($_SESSION["ships"][$x-1][$y - $i-1])||($_SESSION["ships"][$x-1][$y - $i-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($x ==0)||empty($_SESSION["ships"][$x-1][$y - $i+1])||($_SESSION["ships"][$x-1][$y - $i+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												
												(($x ==9) ||($_SESSION["ships"][$x+1][$y - $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(($x ==0) ||($_SESSION["ships"][$x-1][$y - $i]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) 
												
											  )
												{
													$counter++;
													$truth = ($counter==strlen($unit));
												}
										
										
										
									
										elseif( 
												($case==3) 		 && 
												(($x + $i+1)<11)   &&
												(($x + $i-1)>=0)   &&
												($_SESSION["ships"][$x+$i][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')   &&
												((empty($_SESSION["ships"][$x+$i+1][$y])) || ($_SESSION["ships"][$x+$i+1][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))   &&
												((empty($_SESSION["ships"][$x+$i-1][$y])) || ($_SESSION["ships"][$x+$i-1][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))   &&
												
												(  ($y ==0)||empty($_SESSION["ships"][$x+$i+1][$y-1])||($_SESSION["ships"][$x+$i+1][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($y ==9)||empty($_SESSION["ships"][$x+$i-1][$y+1])||($_SESSION["ships"][$x+$i-1][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
											    (  ($y ==9)||empty($_SESSION["ships"][$x+$i+1][$y+1])||($_SESSION["ships"][$x+$i+1][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($y ==0)||empty($_SESSION["ships"][$x+$i-1][$y-1])||($_SESSION["ships"][$x+$i-1][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												
												(($y ==9) || empty($_SESSION["ships"][$x+$i][$y+1])||($_SESSION["ships"][$x+$i][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(($y ==0) || empty($_SESSION["ships"][$x+$i][$y-1])||($_SESSION["ships"][$x+$i][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) 
										
											 )
												{
													$counter++;
													$truth = ($counter==strlen($unit));
												}
									
									  elseif(  ($case==4)       && 
												(($x - $i+1)<11)   && 
												(($x - $i-1)>=0)   && 
												($_SESSION["ships"][$x-$i][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')   &&
												((empty($_SESSION["ships"][$x-$i+1][$y])) || ($_SESSION["ships"][$x+$i+1][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))   &&
												((empty($_SESSION["ships"][$x-$i-1][$y])) || ($_SESSION["ships"][$x+$i-1][$y]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">'))   &&
												
												(  ($y ==0)||empty($_SESSION["ships"][$x-$i+1][$y-1])||($_SESSION["ships"][$x-$i+1][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($y ==9)||empty($_SESSION["ships"][$x-$i-1][$y+1])||($_SESSION["ships"][$x-$i-1][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
											    (  ($y ==9)||empty($_SESSION["ships"][$x-$i+1][$y+1])||($_SESSION["ships"][$x-$i+1][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(  ($y ==0)||empty($_SESSION["ships"][$x-$i-1][$y-1])||($_SESSION["ships"][$x-$i-1][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												
												
												(($y ==9) || empty($_SESSION["ships"][$x-$i][$y+1])||($_SESSION["ships"][$x-$i][$y+1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) &&
												(($y ==0) || empty($_SESSION["ships"][$x-$i][$y-1])||($_SESSION["ships"][$x-$i][$y-1]== '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">')) 
											)
													{
														$counter++;
														$truth = ($counter==strlen($unit));	
													}
														else
															{
																return false;
															}
									

									}
				
									return $truth;
								
								}
								
									
								
								
								
	
	
	
	
				 if ( empty($_SESSION["ships"]))	
					{
						$_SESSION["flotile"] = array ("egle","huma","piz",  "go","Ma","La","h","g","y","q");
						desantas ($_SESSION["flotile"]);
					}

						
					
										 if (!isset($_POST["xas"]) && !isset($_POST["yas"])   )
											{
											    $_POST["xas"]=-1;
												 $_POST["yas"]=-1;
											}
														$x =  $_POST["xas"];
														$y =  $_POST["yas"];
												
									 if ( is_numeric($x) && is_numeric($y) && ($x<10 &&$x>=0) && ($y<10&&$y>=0)   ) 
										{
									
												hit($x,$y);	
												$_SESSION["x"] = $x;
												$_SESSION["y"] = $y; 
										}
														elseif ( ($x==-1) && ( $y==-1)) 
														{
															echo '<div class="top4">'."Enter coordinates to shoot".'</div>' ;
															
														}
															elseif ( ($x==null) && ( $y==null) ) 
														{
															echo '<div class="top4">'."Please enter something!".'</div>' ;
															
														}
														
														else {
																echo '<div class="top4">'."The values must be from 0 to 9 only".'</div>' ;
																echo '<div class="top5">'."You have entered x: ".$x." "."and y :".$y.'</div>';	
															}
													
													


							  

				if (isset($_POST['action']))
				{
					switch ($_POST['action'])
					{
						case 'Reset':
						resetas();
						break;
        
					}
				}



    function resetas()
	{
		session_unset(); 
		session_destroy();											
		exit;
	}

?>
		


		
		 
					
							
</body>
				
</html>

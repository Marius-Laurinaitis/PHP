<?php
if (!isset($_SESSION)) {
    session_start();
}
		
  

/* header("refresh: 0.1;"); */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="battle.css">
  
    <title>Arrays</title>
  </head>
  
  
  <form action="arrays8.php" method="post">
Koordinate X: <input type="numbers" name="xas"><br>
Koordinate Y: <input type="numbers" name="yas"><br>
<input type="submit" value = "shoot">
</form>




  
  
<div id = "random" >
  <?php
   

 	      
  
  		/* $_SESSION["hits"]=0; */
  
  
 		/* echo '<img src="'.'/sandbox/1.jpg'.'">' ; */
	
	/* 	error_reporting(0); */
		
		
	/* 	
		$_SESSION["hits"]=0;


				for (  $i =0; $i<10; $i++  ) 
						{
											
				for (  $k =0; $k<10; $k++  ) 
						{
							
						$_SESSION["ships"][$i][$k]=  '<img src="'.'/sandbox/5.png'.'  ">' ;
						
						}} */
						
					
						
		
		
/* 		session_unset(); 
session_destroy();	
		 */
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	/* 	star (); */
		
			/* 	for (  $i =0; $i<10; $i++  ) 
						{
											
				for (  $k =0; $k<10; $k++  ) 
						{
						$_SESSION["ships"][$i][$k]=  '<img src="'.'/sandbox/5.png'.'  ">' ;
						}}
		 */
		
		
		
		 
							function star() {
							
							 $numbers = array() ;
							
									for (  $i =0; $i<11; $i++  ) 
									{
											
										for (  $k =0; $k<11; $k++  ) 
											{
											
										 $numbers[$i][$k]=  '<img src="'.'/sandbox/5.png'.'  ">' ;
										 	if ($k==10)
												{
												$numbers[$i][$k] = " |<br/>";
										
												}
												
										
												
												
												
									/* 	 echo  $numbers[$i][$k]; */
									
												
									/* 	$_SESSION["stars"] = $numbers; */
											/* 	$numbers=$_SESSION["stars"]  ; */
												
											}
										}	
						/* 		print_r($numbers);	 */
								
								return $numbers;
							}
												
										
					function hit ($start,$end)  {	
					
			/* 		echo "===========<br/>";
					echo $start ;
					echo $end ; */
						echo "===========<br/>" ;
						echo $_POST["xas"];
						echo $_POST["yas"];
							echo "--------------" ;
					/* 	echo	$_SESSION["x"];
							echo$_SESSION["y"] ; */
								echo "--------------" ;
					
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
						 
						 
						 
						 
					
					
						
					if ( (( ($_POST["xas"]!= $_SESSION["x"])  )  || ( ($_POST["yas"]!= $_SESSION["y"]) )) && ($_SESSION["display"][$start][$end]!= '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' ))
						
					{
						$_SESSION["hits"]++;
					}
					elseif (  $_SESSION["display"][$start] [$end] == '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' )
									{
									 echo "Please don't attack same failed positin"."<br/>";
									}

					else echo "Please enter different shot coordinates"."<br/>";
						
						
						if (  $_SESSION["ships"][$start][$end]!= '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' )
						{
							   $_SESSION["display"][$start][$end]=$_SESSION["ships"][$start][$end] ;
							
						
						}
						else
							{
								$_SESSION["display"][$start][$end]= '<img src="'.'/sandbox/12a.png'.'.""  style="width:50px;height:50px;".">' ;
							
						}
						  	 /*   $_POST["xas"]=-10;
	                                   $_POST["yas"]=-10; */
						
			/* 			if ($start<$end)
						{
						
							for ($i=$start; $i<$end; $i++)								
							{ 
							$_SESSION["ships"][$start][$end+$i] = " 0 ";
							}
						}
						else
						{
							
						for ($i=$end; $i<$start; $i++)								
						{ 
						  $_SESSION["ships"][$start+$i][$end] = " 0 ";
						}
							
							
						} */
							
							
							
							
						
/* 	static $timesShot=0;
$timesShot++; */
							
					/* 	$numbers= 	$_SESSION["numbers"] ; */
						
								 $numbers = star();
							
						/* 	$_SESSION["ships"]=  $numbers; */
							
								 
							/* 	for ($i=$start; $i<$end; $i++)
														
								{ */
									
									/* $numbers[$i] = "+"; */
							/* 		if ($end == 9)
									{
										
										$numbers[$start][$end] = " 0 <br/>";
									}
									 */
									 
								/* 	$numbers[$start][$end] = " 0 "; */
								
									
								/* 	$numbers[$start+$i][$end] = "+"; */
									
									
									
									
									
						/* 			
									$_SESSION["ships"][$i] = "0";
									
									$_SESSION["ships"][$start][$start+$i] = "0";
									
									 $_SESSION["ships"][$start+$i][$end] = "0"; */
															    
							/* 	} */
													
												
							/* 	echo "x 0 1 2 3 4 5 6 7 8 9 "; */
								for (  $i =0; $i<11; $i++  ) 
								{		
								/* 	echo "{$i} <br/> ";		 */		
								for (  $k =0; $k<11; $k++  ) 
								{
									
							/*     echo array_key_exists($i, $_SESSION["ships"]) == false;
								echo array_key_exists($k, $_SESSION["ships"]) == false;
								 */
								 
								 
							/* 		if (!array_key_exists($i,  $_SESSION["ships"])) {
										 $_SESSION["ships"][$i][$k] = '';
										};
										if (!array_key_exists($k,  $_SESSION["ships"])) {
										 $_SESSION["ships"][$i][$k] = '';
										};
										 */
										
								 
								 
								 	 
										if ( empty($_SESSION["ships"][$i][$k]))
									{
										
										
										
									/* 	echo "nereikalinga " ; */
				                  /* 	$filepath= '/sandbox/1.jpg'; */
								  
								/* 	echo '<img src="'.'/sandbox/1.jpg'.'">' ;
									
										$_SESSION["ships"][$i][$k]= $filepath; */
										
									
										
                                  /*       echo '<img src="'.'/sandbox/1.jpg'.'">' ; */
										
									 /*   echo '<img src="images/gallery/'.$result.'.jpg">'; */
									
									}
								 
								 
								 
								/*  
										if ( $_SESSION["ships"][$i][$k] == " 0 ")
									{
				
										$numbers [$i][$k] = $_SESSION["ships"][$i][$k];
									
									
									} */
								
								
								
							
								

							/* 		if ( $_SESSION["ships"][$i][$k] === null )
									{
										
								$numbers[$i][$k] = $_SESSION["ships"][$i][$k]; 
										$_SESSION["ships"][$i][$k] = " * ";
									}
									 */
									
									
									
								/* 	
									echo $numbers[$i][$k]; */
									
									
									
									
									
								/* 		echo $_SESSION["ships"][$i][$k] ;	 */
										
										
									/* 	$_SESSION["numbers"] =$numbers;	 */	
									
						/* 					if ($k==9)
								{
										echo $numbers[$i][$k] = " * <br/>";
										
								}
									 */
									
						/* 	 */
								
								
							
								
								
								
							
								
										
							
								/* 		echo $_SESSION["ships"][$i][$k] = "<br/>"; */
										
									
															
									}
													
									}	
									
								
									
									$hits = $_SESSION["hits"] ;
									/* 	print_r($numbers); */	
										echo "Hit Values are : ".$start . " : " .$end ;
										
										echo "There has been : ". $hits. "shots so far! ";	
								
								display ();
								
								/*   	   $_GET["xas"]=-10;
	                                   $_GET["yas"]=-10;
									   
									   unset($_GET); */
									   
							}
							
							
							
						
							
													
													
													
				function desantas ($flotile) 
				{
							
					
								
								
							/* 	echo "x 0 1 2 3 4 5 6 7 8 9 "; */
								for (  $i =0; $i<10; $i++  ) 
								{	
								
								/* 	echo "<br/>{$i}";	 */
								
								for (  $k =0; $k<10; $k++  ) 
								{				
										
							
											
										
								 if ( empty($_SESSION["ships"][$i][$k]))
									{
										$_SESSION["ships"][$i][$k]=  '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' ;  
										$_SESSION["display"][$i][$k]=  '<img src="'.'/sandbox/12.png'.'.""  style="width:50px;height:50px;".">' ; 
									/* 	$_SESSION["ships"][$i][$k]=  '<img src="'.'/sandbox/5.png'.'. "".  style="width:50px;height:50px;".">' ;   */
									}


									/* 	echo $_SESSION["ships"][$i][$k] ;	 */
									
								}
								
								}
									
									
									
								
									
									
										
					foreach ($flotile as $unit) 
					{
								
							
									$pos = rand (1,3);
									/* 	echo "<br/>Hit Values are : ".$x . " : " .$y."Ship is : ".$unit."<br/>" ; */
										
									echo "<br/>";
									$all=0;
								
									/* if ($x<$y)
									{ */
				     
									
									$x = rand(0,9);
									$y = rand(0,9);
								while (!check ($x,$y,$unit,$pos)) 
								{
										$pos = rand (1,3);
										$x = rand(0,9);
									    $y = rand(0,9);
										}
										
										/* check ($x,$y,$unit,$pos); */
								
										for ($i=0; $i<strlen($unit); $i++)								
										{ 
											/* 	echo "Hit Values are : ".$unit. " <br/>" ; */
						
									/* 		echo "Pozicija yra : ".$pos."<br/>";
											echo "<br/>";
												echo "<br/>Irasoma Values are : ".$x . " : " .$y." Ship is : ".$unit."<br/>" ; */
											switch ($pos) 
											{	case 1 : 	 $_SESSION["ships"][$x][$y + $i] =  '<img src="'.'/sandbox/7a.png'.'.""  style="width:50px;height:50px;".">' ;  // right
												break;
												case 2 :     $_SESSION["ships"][$x][$y - $i] =  '<img src="'.'/sandbox/7b.png'.'.""  style="width:50px;height:50px;".">' ;   // left
												break;
												case 3 : 	 $_SESSION["ships"][$x+$i][$y] =  '<img src="'.'/sandbox/17.png'.'.""  style="width:50px;height:50px;".">'  ;   // up
												break;
												case 4 : 	 $_SESSION["ships"][$x-$i][$y] =  '<img src="'.'/sandbox/7d.png'.'.""  style="width:50px;height:50px;".">'  ;// down
												break;
											}
								
								
						
					
								
					/* } */
								
								
						/* 			else
								{
								
										for ($i=0; $i<strlen($unit); $i++)								
									{ 
								
							
								
								
								
										$_SESSION["ships"][$x][$y+$i] = " {$unit[0]} ";
									}
						
								} */
							
								}
							
						/* 	echo "as isejau is while loopppuuuuuuuu " ;
							echo "<br/>" ; */
						
									
									
								
										
									
									
								
								
					}
					
					
					display () ;	
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
									
								/* 	echo "<br/>checkas : ".$x . " : " .$y." Ship is : ".$unit."<br/>" ; */
									for ($i=0; $i<strlen($unit); $i++)								
									{ 
											/* echo print_r($_SESSION["ships"]); */
											
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
											/* 	(($x+1)<=9)  	 &&
											    (($x-1)>=0)		 && */
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
											/* 	echo "daro antra" ; */
											
												$truth = ($counter==strlen($unit));
										}
										
										
										
									
										elseif( 
												($case==3) 		 && 
												(($x + $i+1)<11)   &&
												(($x + $i-1)>=0)   &&
											/* 	(($y+1)<=9)  	 &&
											    (($y-1)>=0)		 && */
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
											/* 	(($y+1)<=9)  	 &&
											    (($y-1)>=0)		 && */
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
											
											
										/* 	$truth = true; */
										}
									
										else
										{
										/* 	echo "daro FALSE <br/>" ; */
										
											return false;
										}
									

									}
							/* 		echo "Checko rezultatas yra : ".$truth;
									echo "<br/>";
									echo "==========";
									echo "<br/> cheko dumpas : ".var_dump($truth)."<br/>"; */
									return $truth;
									/* return true; */
								}
								
								
								
								
							function display () {
									echo "x 0  1  2  3  4  5  6  7  8  9  ";
									for (  $i =0; $i<10; $i++  ) 
								{	
								
									echo "<br/>{$i}";	
								
								for (  $k =0; $k<10; $k++  ) 
								{				
										
										echo $_SESSION["display"][$i][$k] ;		
									


									/* 	echo $_SESSION["ships"][$i][$k] ; */

								
										
									
								}
								
								}
									

							}								
								
								
								
								
								
								
								
								
								
								
								
								
								
	$flotile = array ("egle","huma","piz",  "go","Ma","La","h","g","y","q");
	
	
	
				 if ( empty($_SESSION["ships"]))	
								 {
									desantas ($flotile);	 
								
								 }		
						/* 		 
								 echo "x  yra : ".$x."<br/>" ;
								 
									 echo "y yra : ".$x."<br/>" ;


									 echo "int yra : ".is_int($x)."<br/>" ;
									 
									 	 echo var_dump (is_int($x)) ; */
										 
									
										 if (!isset($_POST["xas"]) && !isset($_POST["yas"])   )
										 {
											    $_POST["xas"]=-1;
												 $_POST["yas"]=-1;
										 }
									                 $x =  $_POST["xas"];
													$y =  $_POST["yas"];
									/* 								$_POST["xas"]=-10;
	                                   $_POST["yas"]=-10;
														 */
												
									 if ( is_numeric($x) && is_numeric($y) && ($x<10 &&$x>=0) && ($y<10&&$y>=0)/* && !empty($x) && isset($x)  */ ) 
										 
												
													
													{
									
														
												/* $_POST["xas"]=-10;
														$_POST["yas"]=-10; */
										
															hit($x,$y);	
													
												$_SESSION["x"] = $x;
												$_SESSION["y"] = $y; 
															
														/* $x=0;
														$y = 0; */
												 
															/*    unset($_GET); */
									
															/*    header('Location: ?'); */
																/* 	   if ($_SERVER['REQUEST_METHOD'] == 'POST')	 {
																	$_SESSION['postdata'] = $_POST;
																	unset($_POST);
																	header("Location: ".$_SERVER['PHP_SELF']);
																	exit; */
																									/* } */
												 
												 
													}
														else 
														{
															echo "The value must be a single digit from 0 to 9 only"."<br/>" ;
															echo "You have entered x: ".$x." "."and y :".$y;
														}
													
													
													
													/* hit(rand(0,9),rand(0,9)); */
												
												
												
												
/* session_unset(); 
session_destroy();	 */										
												
												
	 

	

 
 
					
		/* 			print_r($_SESSION);	
			echo "========================================";
				print_r($_SESSION["ships"]);	 */	
				
				
							  
						?>
			<div/>
							
							

					
</html>

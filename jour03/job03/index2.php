<?php 
//on cree une variables tous les caractéres sauf les voyelles
 $toutsauflesvoyelle = array('b','\'','c','D','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z',' ','B','C','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z');
 $str = "I'm sorry Dave I'm afraid I can't do that";
 echo $str;
//variable du sujet donner plus affichage pour meilleur rendue
 //str_split qui va nous servir a rentrer chaque caracter d'un string dans un tableaux
 $arr1 = str_split($str);
  // print_r($arr1); 
  // echo "<br />";
 //fonction array_diff qui calcule la difference entre 2 tableaux donc la difference c toutes les voyelles vue qu'on a rentrer toutes les consonne espace ect other techniq I can find
   $result = array_diff($arr1, $toutsauflesvoyelle);
   print_r($result);
 ?>


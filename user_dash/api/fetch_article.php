<?php
function object_2_array($result)
{
 $array = array();
 foreach ($result as $key=>$value)
 {
   if (is_object($value))
   {
     $array[$key] = object_2_array($value);
   }
   if (is_array($value))
   {
     $array[$key] = object_2_array($value);
   }
   else
   {
     $array[$key]=$value;
   }
 }
 return $array;
}
include '../../config.php';
$collection = $db->article ;
$qry = array();
$cursor = $collection->find($qry);
$article = $cursor->toArray() ;

// print_r($tag_array);
// echo gettype(object_2_array($tag));
// echo gettype($tag);
//

//print_r($news[0]['tag']);
return $article ;
//print_r($news[0]['news']);
//echo $news[0] ;
//return $news ;

 ?>

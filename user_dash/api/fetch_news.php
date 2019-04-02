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
include '../api/fetch_user.php' ;
$collection = $db->news ;
$tag = $arr[0]['tags'] ;
$tag_array = object_2_array($tag) ;
//echo join(', ',$tag_array) ;
$qry = array();
$cursor = $collection->find($qry);
$news = $cursor->toArray() ;

// print_r($tag_array);
// echo gettype(object_2_array($tag));
// echo gettype($tag);
//

//print_r($news[0]['tag']);
return $news;
//print_r($news[0]['news']);
//echo $news[0] ;
//return $news ;

 ?>

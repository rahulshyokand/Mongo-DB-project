
 <?php
 require '../config.php' ;

if(isset($_POST['type']))
{

  $type=$_POST['type'];
  $tag = $_POST['tags'];

  $tags_array = explode(",",$tag);
  $content = $_POST['content'];

 echo $type ;
  echo '<br>';
    echo $tag;
      echo '<br>';
  echo $tags_array ;
  echo '<br>';
  echo '<br>';
  echo $content ;

//  die  ;
//   $type=$_POST['type'];
//   $tag = $_POST['tags'];
//
// $tags_array = explode(",",$tag);
  // $content = $_POST['content'];
  if($client){

      // Select Collection
      $collection = $db->$type;
      $result = $collection->insertOne( [  'tag' => $tags_array , 'date' => date("Y-m-d")  , $type => $content ] );
  echo '<br>';
      echo $type . " inserted in collection with object id '{$result->getInsertedId()}'";

    }

}

  ?>

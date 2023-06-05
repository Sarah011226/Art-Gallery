<form method="get" action="search.php">
</form>
<?php
//if(isset($_GET['search_term']))
// Perform search using the search term
if(isset($_GET['search_term'])){
    $search_term = $_GET['search_term'];
    //$arr=["../","..\\","http","://","passwd","hosts","protocols"];
   // foreach ($arr as $i) {
   //  $search_term=str_replace($i,"",$search_term);}
    // Perform search using the search term
if (($search_term) && (urldecode($search_term) == "starry night" || urldecode($search_term) == "the starry night" || urldecode($search_term) == "night" || urldecode($search_term) == "starry")) {
    include("p1.php");}
    elseif (($search_term) && (urldecode($search_term) == "the scream" || urldecode($search_term) == "scream")) {
    include("p2.php");} 
    elseif (($search_term) && (urldecode($search_term) == "the desperate" || urldecode($search_term) == "desperate")) {
    include("p3.php");} 
    elseif (($search_term) && (urldecode($search_term) == "login" || urldecode($search_term) == "log in")) {
    include("login.php");}
    elseif (($search_term) && (urldecode($search_term) == "signup" || urldecode($search_term) == "sign up")) {
    include("signup.php");} 
    elseif (($search_term) && (urldecode($search_term) == "comment" || urldecode($search_term) == "comments")) {
    include("indexG.php");}
    else {
    // this is the vunrability 
        // include($search_term);
        //this is the countermeaser
        echo '<script>alert("Not found")</script>';
        include("index.php");
        
    }
}
?>

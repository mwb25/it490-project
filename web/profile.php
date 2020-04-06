<?php
session_start();

if ($_SESSION['logged'] != true){
    echo "not logged in";
}
else{
    $newUser = $_SESSION['user']['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profileStyle.css">
</head>

<body>

<div class="container">
    <div class="toppane">
        <h1>Profile Details</h1>
        <p> <?php echo 'Welcome ' . $newUser ?> </p>
        <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
    </div>
    <div class="leftpane">
        <h1>Favorite Movies</h1>
        <input type='text' id='idea' />
        <input type='button' value='add to list' id='add' />
        <script>
            document.getElementById("add").onclick  = function() {
                var node = document.createElement("Li");
                var text = document.getElementById("idea").value;
                var textnode=document.createTextNode(text);
                node.appendChild(textnode);
                document.getElementById("list").appendChild(node);
                document.getElementById('idea').value=null;

            }
        </script>
        <ul id='list'></ul>
    </div>
    <div class="middlepane">
        <h1>Movie Lists</h1>

    </div>
    <div class="rightpane">
        <h1>Movie Reviews</h1>
    <input type='text' id='review' placeholder="Movie Title - Review"/>
    <input type='button' value='add to list' id='addList' />
    <script>
        document.getElementById("addList").onclick  = function() {
            var nodeList = document.createElement("Li");
            var textList = document.getElementById("review").value;
            var textnodeList=document.createTextNode(textList);
            nodeList.appendChild(textnodeList);
            document.getElementById("reviewList").appendChild(nodeList);
            document.getElementById('review').value=null;

        }
    </script>
    <ul id='reviewList'></ul>
</div>
</div>

</body>
</html>

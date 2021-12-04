<?php require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://206.189.130.235:27017");
$collection = $client->BTC->result;
$cursor = $collection->find();
foreach($cursor as $document)
{
	$A=$document["value_A"];
	$B=$document["value_B"];

}
$collection = $client->BTC->NNresult;
$cursor = $collection->find();
foreach($cursor as $document)
{
	$A1=$document["value_predicted"];
	

}
$collection = $client->BTC->sentiment;
$cursor = $collection->find();
foreach($cursor as $document)
{
	$A2=$document["value"];
	

}

?>
<center>
<h1>BitCoin Prediction </h1>
<h1>HMM </h1>

<br>
<br>


</center>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>
<br>
<title>CRYPTO-PREDICTION ANALYSIS</title>
<br>
<div class="split left">
  <div class="centered">
    <h1>Bubble Burst Detection </h1>
<h1>HMM </h1>


<br>


<br>

The Predicted Bubble Burst value is: <br>
<br>

<?php echo $A2*100;echo "%"; 
	if($A2 >=0)
{
	echo " &nbsp&nbsp &#8679";
}
else 
{
	echo " &nbsp&nbsp &#8680";
}

?>
  </div>
</div>

<div class="split right">
  <div class="centered">
    
<h1>Price Prediction </h1>
<h1>BPNN </h1>

The Close Value Burst is predicted as:<br>
<br>
<?php echo $A1;?>  </div>
</div>
     
</body>
</html> 

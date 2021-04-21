<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<body>

<!-- Navigation -->
<nav class="w3-bar w3-black w3-border">
  <a href="home.html" class="w3-button w3-bar-item w3-hover-red">Home</a>
  <a href="About.html" class="w3-button w3-bar-item w3-hover-red">About Us</a>
  <a href="fetch.php" class="w3-button w3-bar-item w3-hover-red">All Customers</a>
  <a href="history.php" class="w3-button w3-bar-item w3-hover-red">Transaction History</a>
</nav>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                 <script>
                  swal("Transfer Successful", "Click OK to close", "success");
                 </script>
<?php



 const servername = "localhost";
    const dbname = 'projphp';
    const username = "root";
    const password = "";
//error_reporting(0);


$s = $_POST['sender'];
$r = $_POST['receiver'];
$a = $_POST['amount'];

$am = 'SELECT amount FROM customerinfo WHERE name=$s';
if ($am < $a) {
                echo '<h2>Sorry!! Insufficient amount to transfer</h2>';
               
            }
else
{
	$sql_update_from = 'UPDATE customerinfo
        SET amount = $am - $a
        WHERE name= $s';
		
	$sql_update_to = 'UPDATE customerinfo
                                SET amount = $am + $a
                                WHERE name= $r';	
								

if($sql_update_from && $sql_update_to)
	echo 'The amount has been transferred successfully';
}


		
		
		
 /* Open the database connection
     
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:servername=%s;dbname=%s", self::servername, self::dbname);
        try {
            $this->pdo = new PDO($conStr, self::username, self::password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

private $pdo = null;

 function transfer($from, $to, $amount) {

        try {
            $this->pdo->beginTransaction();

            // get available amount of the transferer account
            $sql = 'SELECT amount FROM customerinfo WHERE name=:from';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array(":from" => $from));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();

            if ($availableAmount < $amount) {
                echo '<h2>Sorry!! Insufficient amount to transfer</h2>';
                return false;
            }
            // deduct from the transferred account
            $sql_update_from = 'UPDATE customerinfo
        SET amount = amount - :amount
        WHERE name= :from';
            $stmt = $this->pdo->prepare($sql_update_from);
            $stmt->execute(array(":from" => $from, ":amount" => $amount));
            $stmt->closeCursor();


            // add to the receiving account
            $sql_update_to = 'UPDATE customerinfo
                                SET amount = amount + :amount
                                WHERE name= :to';
            $stmt = $this->pdo->prepare($sql_update_to);
            $stmt->execute(array(":to" => $to, ":amount" => $amount));

            // commit the transaction
            $this->pdo->commit();
             //<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
             //<script swal("Good job!", "You clicked the button!", "success");></script>


           

                 



             


            //echo 'The amount has been transferred successfully';

            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 /**
    
    /**
     * close the database connection
     
     public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }

}

// test the transfer method
$obj = new TransactionDemo();

// transfer 30K from from account 1 to 2
$obj->transfer("Maya Malhotra","Purvi Deshmukh",1000);


// transfer 5K from from account 1 to 2
//$obj->transfer(1, 2, 5000);

*/

?>


</body>
</html>

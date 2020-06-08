<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ridma
 * Date: 07/06/2019
 * Time: 09:24 PM
 */
class DBConnection
{
    private $connection;
    private $host = " sql12.freemysqlhosting.net";
    private $user = "sql12345546";
    private $password = "Wxh2nXJAi8";
    private $databasse = "sql12345546";



    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->databasse);
        if ($this->connection->connect_errno) {
            echo $this->connection->connect_errno;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}


<?php




 $host = " sql12.freemysqlhosting.net";
 $user = "sql12345546";
 $password = "Wxh2nXJAi8";
 $database = "sql12345546";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO  customer (cName,cAddress,cTp) VALUES ('$cName', '$cAddress','$cTp')";

if (mysqli_query($conn, $sql)) {

      echo "New record created successfully";

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
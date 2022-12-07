<?php

session_start();
 
$host = 'localhost';
$username = 'new_user';
$password = 'password123';
$dbname = 'dolphin_CRM';

$conn = mysqli_connect($host , $username, $password, $dbname);
if(!$conn){
    echo'Connection Error:' . mysqli_connect_error();
}


$context = $_GET['context'];




if($context === "all"){
    $stmt = mysqli_query($conn,"SELECT * FROM contacts");
    $st = mysqli_query($conn,"SELECT * FROM contacts");
    $resulted = mysqli_fetch_assoc($st);
    $cnt=$st->num_rows;

    if($cnt!=0){
        $results = mysqli_fetch_assoc($stmt);

        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        echo "<th>Status</th>";
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";

    

        foreach ($stmt as $row){
            $id = $row['assigned_to'];
            $stst = mysqli_query($conn,"SELECT firstname,lastname FROM user WHERE id = '$id'");
            $return_name = mysqli_fetch_assoc($stst);
            
            echo "<tr> \n";
            echo "<td>#" .$row['id']."<button type = 'submit' value=".$row['id']." class ='contactLink' >".$row['title']. "</button></td> \n";
            echo "<td>" .$row['type']. "</td> \n";
            echo "<td>" .$row['status']. "</td> \n";
            echo "<td>" .implode(" ",$return_name)."</td> \n";
            echo "<td>" .$row['created']. "</td> \n";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";
        echo "</table>";
    }
}


if($context === "open"){
    $stmt = mysqli_query($conn,"SELECT * FROM contacts WHERE status = '$status'");
    $st = mysqli_query($conn,"SELECT * FROM contacts WHERE status = '$status'");
    $resulted = mysqli_fetch_assoc($st);
    $cnt=$st->num_rows;

    if($cnt!=0){
        $results = mysqli_fetch_assoc($stmt);

        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        echo "<th>Status</th>";
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";

        foreach ($stmt as $row){
            $id = $row['assigned_to'];
            $stst = mysqli_query($conn,"SELECT firstname,lastname FROM user WHERE id = '$id'");
            $return_name = mysqli_fetch_assoc($stst);
            
            echo "<tr> \n";
            echo "<td>#" .$row['id']."<button type = 'submit' value=".$row['id']." class ='contactlink' >".$row['title']. "</button></td> \n";
            echo "<td>" .$row['type']. "</td> \n";
            echo "<td>" .$row['status']. "</td> \n";
            echo "<td>" .implode(" ",$return_name). "</td> \n";
            echo "<td>" .$row['created']. "</td> \n";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        echo "<th>Status</th>";
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";
        echo "</table>";

    }
}

if($context === "support"){
    $active = $_SESSION['email'];
    $active = mysqli_real_escape_string($conn,$active);

    $stnt = mysqli_query($conn,"SELECT * FROM user WHERE  email = '$active'");
    $name = mysqli_fetch_assoc($stnt);
    
    $id_tk = $name['id'];

    $stmt = mysqli_query($conn,"SELECT * FROM contacts WHERE  assigned_to = '$id_tk'");
    $results = mysqli_fetch_assoc($stmt);
    $cnt=$stmt->num_rows;

    if($cnt!=0){
        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        echo "<th>Status</th>";
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";

        foreach ($stmt as $row){
            $id = $row['assigned_to'];
            $stst = mysqli_query($conn,"SELECT firstname,lastname FROM user WHERE id = '$id'");
            $return_name = mysqli_fetch_assoc($stst);
            
            echo "<tr> \n";
            echo "<td>#" .$row['id']."<button type = 'submit' value=".$row['id']." class ='contactlink' >".$row['title']. "</button></td> \n";
            echo "<td>" .$row['type']. "</td> \n";
            echo "<td>" .$row['status']. "</td> \n";
            echo "<td>" .implode(" ",$return_name). "</td> \n";
            echo "<td>" .$row['created']. "</td> \n";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "<table id = 'Table1' border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Type</th>";
        echo "<th>Status</th>";
        echo "<th>Assigned To</th>";
        echo "<th>Created</th>";
        echo "</tr>";
        echo "</table>";

    }

}
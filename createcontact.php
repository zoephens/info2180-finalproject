<?php
session_start();

if(isset($_SESSION['email'])){

    $host = 'localhost';
    $username = 'new_user';
    $password = 'password123';
    $dbname = 'dolphin_CRM';
    
    $conn = mysqli_connect($host , $username, $password, $dbname);
    if(!$conn){
        echo'Connection Error:' . mysqli_connect_error();
    }
    
    $stmt = mysqli_query($conn,"SELECT * FROM user");

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create contact</title>
        <link rel="stylesheet" href="./styles/createcontacts.css">
    
    </head>
    <body>
        <div class="container">
            <header>
                <img src="./img/dolph.svg" alt="Image of dolphin">
                <h1>Dolphin CRM</h1>
            </header>
    
            <aside>
                    <section class="link">
                        <!-- <img src="./img/icons8-dashboard-24.png" alt=""> -->
                        <button id="dashboard"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</button>
                    </section>
    
                    <section class="link">
                        <!-- <img src="./img/icons8-add-user-male-30.png" alt=""> -->
                        <button id="adduser"><i class="fa fa-users" aria-hidden="true"></i>Add User</button>
                    </section> 
    
                    <section class="link">
                        <!-- <img src="./img/icons8-add-30.png" alt=""> -->
                        <button id="newcontact"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New contact</button>
                    </section>  
    
                    <section class="link">
                        <!-- <img src="./img/icons8-shutdown-24.png" alt=""> -->
                        <button id="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
                    </section>  
                </aside>
    
            <main>
                <h1>Create contact</h1>
    
                <form>
                    <label for="title">Title</label>
                    <select name="title" type="text" id="title" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                    </select>
                    <p class="title"></p>
    
                    <label for="comment">comment</label>
                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                    <p class="comment"></p>';
    
                    echo '<label for="assign">Assigned To</label>

                    <select name="assign" type="text" id="assign" required>';
                    
                    
                    foreach($stmt as $row){
                        echo "<option value = " .$row['id']. ">" .$row['firstname']." ".$row['lastname'] . "</option>";
                    }

                    echo '</select>

                    <p class="assign"></p>
    
                    <label for="type">Type</label>
                    <select name="type" type="text" id="type" required>
                        <option value="SalesLead">SalesLead</option>
                        <option value="Sales Support">Sales Support</option>
                    </select>
                    <p class="type"></p>
    
                    
                    <button name="submit" type="submit" id="btn">Submit</button>
                </form>
                <div id = "show"></div>
            </main>
        </div>
    </body>
    </html>';
    }else{
        require 'login.html';
    }
    ?>

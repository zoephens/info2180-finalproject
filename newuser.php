<?php
session_start();

if(isset($_SESSION['email'])){
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New User</title>
        <link rel='stylesheet' href='./styles/style.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/> <!--Lock and email icon received from this-->
    </head>
    <body>
        <div class='container'>
            <header>
                <img src='./img/dolph.svg' alt='Image of dolphin'>
                <h1>Dolphin CRM</h1>
            </header>
    
            <aside>
                <section class='link'>
                    <!-- <img src='./img/icons8-dashboard-24.png' alt=''> -->
                    <button id='dashboard'><i class='fa fa-home' aria-hidden='true'></i>Dashboard</button>
                </section>

                <section class='link'>
                    <!-- <img src='./img/icons8-add-user-male-30.png' alt=''> -->
                    <button id='adduser'><i class='fa fa-users' aria-hidden='true'></i>Add User</button>
                </section> 

                <section class='link'>
                    <!-- <img src='./img/icons8-add-30.png' alt=''> -->
                    <button id='newcontact'><i class='fa fa-user-circle-o' aria-hidden='true'></i>New contact</button>
                </section> 

                <section class='link'>
                    <!-- <img src='./img/icons8-shutdown-24.png' alt=''> -->
                    <button id='logout'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</button>
                </section> 
            </aside>
    
            <main>
                <h2>New User</h2>
    
                <form method='post' action='newuser.php'></form>
                    <label for='first_name'>First Name</label>
                    <input name='first_name' type='text' id='first_name' required>
                    <p class='first'></p>
    
                    <label for='last_name'>Last Name</label>
                    <input name='last_name' type='text' id='last_name' required>
                    <p class='last'></p>
    
                    <label for='password'>Password</label>
                    <input name='password' type='text' id='password' required>
                    <p class='pass'></p>
    
                    <label for='email'>Email</label>
                    <input name='email' type='text' id='email' required>
                    <p class='mail'></p>

                    <label for='role'>Role</label>
                    <select name='role' type='text'id='role'required>
                        <option value='Admin'>Admin</option>
                        <option value='Member'>Member</option>
                    </select>
                    

                    <button name='submit' type='submit' id='btn'>Submit</button>
                </form>
                <div id = 'show'></div>
            </main>
        </div>
    </body>
    </html>";
}else{
    require 'login.html';
}
?>
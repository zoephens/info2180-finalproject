<?php
session_start();

if(isset($_SESSION['email'])){
    echo "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>dashboard</title>
        <link rel='stylesheet' href='./styles/dashboard.css'>
        <script type='module' src='scripts/main.js'></script>
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
    
                
    
                    <div id = 'show'>
                    <main>
    
                    <div class='page-top'>
                        <h2>Dashboard</h2>
    
                        <div>
                            <button id='createBtn'>Create New contact</button>
                        </div>
                    </div>
    
                    <div class='selectors'>
                        <p>Filter By: </p>
    
                        <div class='selector-buttons'>
                            <button id='all' class='filterBtn'>ALL</button>
                            <button id='SalesLead' class='filterBtn'>SalesLead</button>
                            <button id='Support' class='filterBtn'>Support</button>
                            <button id='Assignedtome' class='filterBtn'>Assignedtome</button>

                        </div>
                    </div>

                    <div id = 'table'></div>
                    </div>
                </main>
            </div>
        </body>
    </html>";
}else{
    require 'login.html';
}
?>
import {onClick} from '../scripts/dashboard.js';
import {newuserClick} from '../scripts/newuser.js';
import {buttonClicked} from '../scripts/createcontact.js';


window.onload=function(){

    var login=document.querySelector("#btn");
    console.log(login);
    login.addEventListener("click", loginbutton)
    
    
    function loginbutton(e){
        let email=document.querySelector("#email").value;
        let password=document.querySelector("#password").value;
        console.log(email,password);

        const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("container").innerHTML = this.responseText;
                    let button1 = document.querySelector("#all");
                    let button2 = document.querySelector("#SalesLead");
                    let button3 = document.querySelector("#Support");
                    let button4 = document.querySelector("#createBtn");
                    let button5 = document.querySelector("#Assignedtome");
                    let dashboard = document.querySelector("#dashboard");
                    let adduser = document.querySelector("#adduser");
                    let newcontact = document.querySelector("#newcontact");
                    let logout = document.querySelector("#logout");
                    var login=document.querySelector("#btn");

                    

                    if (login !== null){
                        login.addEventListener("click", loginbutton)
                    }
                    

                    if (button1 !== null){
                        button1.addEventListener("click", onClick);
                        button2.addEventListener("click", onClick);
                        button3.addEventListener("click", onClick);
                        button4.addEventListener("click", Click);
                        button5.addEventListener("click", onClick);
                        dashboard.addEventListener("click", sideBar);
                        adduser.addEventListener("click", sideBar);
                        newcontact.addEventListener("click", sideBar);
                        logout.addEventListener("click", sideBar);
                    }
                    
                }
            }
            xhr.open('GET', 'userlogin.php?email='+email+'&password='+password, true);
            
            xhr.send();

    }

    function Click(e){

        const xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("container").innerHTML = this.responseText;

                dashboard.addEventListener("click", sideBar);
                adduser.addEventListener("click", sideBar);
                newcontact.addEventListener("click", sideBar);
                logout.addEventListener("click", sideBar);

                let createBtn = document.getElementById("btn");

                createBtn.addEventListener("click",buttonClicked);
            }
        }
        xhr.open('GET', 'createcontact.php', true);
        
        xhr.send();
    }

    function sideBar(e){

        console.log("ehel");

        if (e.target.id === "dashboard"){
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("container").innerHTML = this.responseText;
                    let button1 = document.querySelector("#all");
                    let button2 = document.querySelector("#SalesLead");
                    let button3 = document.querySelector("#Support");
                    let button4 = document.querySelector("#createBtn");
                    let button5 = document.querySelector("#Assignedtome");
                    let dashboard = document.querySelector("#dashboard");
                    let adduser = document.querySelector("#adduser");
                    let newcontact = document.querySelector("#newcontact");

                    button1.addEventListener("click", onClick);
                    button2.addEventListener("click", onClick);
                    button3.addEventListener("click", onClick);
                    button4.addEventListener("click", Click);
                    button5.addEventListener("click", onClick);
                    dashboard.addEventListener("click", sideBar);
                    adduser.addEventListener("click", sideBar);
                    newcontact.addEventListener("click", sideBar);
                    logout.addEventListener("click", sideBar);
                }
            }
            xhr.open('GET', 'dashboard.php', true);
            
            xhr.send();
        }

        if (e.target.id === "adduser"){
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("container").innerHTML = this.responseText;

                    let dashboard = document.querySelector("#dashboard");
                    let adduser = document.querySelector("#adduser");
                    let newcontact = document.querySelector("#newcontact");
                    let submit = document.querySelector("#btn");

                    submit.addEventListener("click", newuserClick);
                    dashboard.addEventListener("click", sideBar);
                    adduser.addEventListener("click", sideBar);
                    newcontact.addEventListener("click", sideBar);
                    logout.addEventListener("click", sideBar);
                }
            }
            xhr.open('GET', 'newuser.php', true);
            
            xhr.send();
        }

        if (e.target.id === "newcontact"){
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("container").innerHTML = this.responseText;

                    dashboard.addEventListener("click", sideBar);
                    adduser.addEventListener("click", sideBar);
                    newcontact.addEventListener("click", sideBar);
                    logout.addEventListener("click", sideBar);

                    let createBtn = document.getElementById("btn");

                    createBtn.addEventListener("click",buttonClicked);
                }
            }
            xhr.open('GET', 'createContact.php', true);
            
            xhr.send();
        }

        if (e.target.id === "logout"){
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("container").innerHTML = this.responseText;

                    var login=document.querySelector("#btn");
                    login.addEventListener("click", loginbutton)
                }
            }
            xhr.open('GET', 'logout.php', true);
            
            xhr.send();
        }

    }
}
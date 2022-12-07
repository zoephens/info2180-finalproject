function newuserClick(e){
    let valid = 0;

    e.preventDefault();

    const validPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    const validEmail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;


    let first = document.querySelector('.first');
    let last = document.querySelector('.last');
    let pass = document.querySelector('.pass');
    let mail = document.querySelector('.mail');
    let firstName = document.querySelector("#first_name").value;
    let lastName = document.querySelector("#last_name").value;
    let password = document.querySelector("#password").value;
    let email = document.querySelector("#email").value;

    if (firstName === ""){
        first.innerHTML = '*Please enter a First Name';
    }else {
        valid += 1;
        first.innerHTML = '';
    }

    if (lastName === ""){
        last.innerHTML = '*Please enter a Last Name';
    }else {
        valid += 1;
        last.innerHTML = '';
    }

    if (!validPassword.test(password)){
        pass.innerHTML = '*Please enter a valid password';
    }else {
        valid += 1;
        pass.innerHTML = '';
    }

    if (!validEmail.test(email)){
        mail.innerHTML = '*Please enter a valid email address';
    }else {
        valid += 1;
        mail.innerHTML = '';
    }

    if (valid == 4){
        const xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("show").innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'scripts/newuser.php?user=' + firstName + " " + lastName + " " + password + " " + email , true);
        
        xhr.send();
    }
    
}

export {newuserClick};

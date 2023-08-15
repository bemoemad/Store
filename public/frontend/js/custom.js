/**
 * This function show / hide password
 * @param username string 
 * @param password string 
 */
function show_password(){
    let pass = document.getElementById('password');
    let hide = document.getElementById('hide');
    let show = document.getElementById('show');

    if(pass.type == 'password'){
        pass.type = 'text';
        hide.style.display = 'none';
        show.style.display = 'block';
    }else{
        pass.type = 'password';
        hide.style.display = 'block';
        show.style.display = 'none';
    }
}

function chkPassword()
{
  let pass = document.getElementById('password').value ;
  let conf = document.getElementById('confirm').value ;

  if(pass !== conf){
    document.getElementById('error').style.display = 'block';
  }else {
    document.getElementById('error').style.display = 'none';
  }
}


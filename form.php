<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran Akun</title>
	<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}

body{
  background:url("https://i.gifer.com/1AZy.gif") no-repeat top center;
  background-size: cover;
 
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 550px;
  background: rgba(0,0,0,0.5);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.wrapper .title h1{
  color: #c5ecfd;
  text-align: center;
  margin-bottom: 25px;
}

.contact-form{
  display: flex;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}

.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    text-transform: uppercase;
}
#submit{
  color: #c5ecfd;
  font-size: 20px;
  padding: 10px;
  cursor: pointer;
  background: rgba(0,0,0,0.8);
}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
  </style>
</head>
<body>
	
<div class="wrapper">
  <div class="title">
    <h1>Form Pendaftaran Akun</h1>
  </div>
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" class="input" name="pengguna" placeholder="Username" required>
      <input type="email" class="input" name="email" placeholder="Email" required>
      <input type="password" class="input" name="sandi" placeholder="Password" required>
      <input type="email" class="input" name="nama" placeholder="Nama" required>
      <input type="number" class="input" name="hp" placeholder="No HP" required>
      <input type="text" class="input" name="kota" placeholder="Asal Kota" required>
    </div>
    <div class="msg">
      <textarea placeholder="Motivasi Hidup"></textarea>
      <div class="btn">
        <input type="submit" name="submit" id="submit">
        <input type="reset" onClick="alert('Yakin ingin menghapus data?')" name="reset" id="submit">
      </div>
    </div>
  </div>
</div>
	
</body>
</html>

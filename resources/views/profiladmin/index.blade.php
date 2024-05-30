<!DOCTYPE html>
<html>
<head>
<title>Edit Admin</title>
<style>
/* CSS umum */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 20px;
}

h1 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

/* CSS tabel */
table {
  width: 100%;
  border-collapse: collapse;
  margin: 0 auto;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 18px;
  border: 2px solid #ddd;
  text-align: left;
}

th {
  background-color: #f0f0f0;
}

/* CSS formulir */
form {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="Nama"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

button {
  background-color: red;
  color: white;
  padding: 8px 15px;
  border: none;
  cursor: pointer;
  border-radius: 3px;
}
</style>
</head>
<body>


<h1>Edit Profil Admin</h1>


<form action="#">

  <table>
    <tr>
      <th>Nama</th>
      <td><input type="text" name="Nama" value=""></td>
    </tr>
    <tr>
      <th>Nomor Telepon</th>
      <td><input type="Nomor Telepon" name="Nomor Telepon" value=""></td>
    </tr>
    <tr>
      <th>Username</th>
      <td><input type="Username" name="Username"></td>
</tr>
    <tr>
      <th>Level Akses</th>
      <td>
        <select name="level_akses">
          <option value="admin">Admin</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>
	  <td><button type="submit">Update</button>  <button type="submit">Home</button></td>
    </th>
    </tr>

    
    
  </table>

</form>

</body>
</html>


<form method="post" action="/admin/user/add_user">
    {{csrf_field()}}

    <label>Nama Lengkap : </label>
    <div class="input-field">
    <input type="text" name="nama" id="nama" required></div>

    <label>Username : </label>
    <div class="input-field">
    <input type="text" name="username" id="username" required></div>
    
    <label>Password : </label>
    <div class="input-field">
    <input type="password" name="password" id="password" required>   
    </div>

    <label style="color:black;font-size:100%" for="desc">Devisi : </label>
    <br>
    <select name="devisi" id="devisi" class="browser-default">
    <option value="admin">Admin</option>
    <option value="staff">Staff</option>
    </select>
    
    <button>Add</button>
    </form>
    </body>
     
<div class='bg-img'></div>
<div class='bg-opacity'></div>
<div class='login-container'>
    <form method='POST' class="col-10 col-md-6 col-xl-3 formulario" autocomplete='off'>
        <h1 class='text-center text-black mb-5 mt-3'>Login</h1>
        <div class="mb-3 col-12">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" 
                class="form-control" 
                id="correo" 
                name='correo' 
                value='<?=isset($_POST['correo']) ? $_POST['correo'] : ''?>' 
                placeholder="Ingrese su correo electrónico"
            >
        </div>
        <div class="mb-3 col-12">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" 
                class="form-control" 
                id="password" 
                name='password' 
                value='<?=isset($_POST['password']) ? $_POST['password'] : ''?>' 
                placeholder="Ingrese su contraseña"
            >
        </div>
        <button type="submit" class="btn col-12 text-white" name='acceder' style='background: #00A040;'>Iniciar Sesion</button>
    </form>
</div>
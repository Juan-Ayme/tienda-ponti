<?php include "Views/template/header.php"; ?>

<section class="shoping-cart spad">
    <div class="container container_login_v2 ">
                        <div class="form-structor">
                            <div class="signup">
                                <h2 class="form-title" id="signup"><span>o</span>Registrarse</h2>
                                <div class="form-holder">
                                    <input type="text" id="nameRegister" class="input" placeholder="Nombre" />
                                    <input type="email" id="emailRegister" class="input" placeholder="Correo" />
                                    <input type="password" id="passwordRegister" class="input" placeholder="Contraseña" />
                                </div>
                                <button class="submit-btn bg-white text-dark" id="btnRegister">Registrarse</button>
                            </div>
                            <div class="login slide-up">
                                <div class="center">
                                    <h2 class="form-title" id="loginForm"><span>o</span>Iniciar</h2>
                                    <div class="form-holder mb-3">
                                        <input type="email" id="email" class="input" placeholder="Correo" />
                                        <input type="password" id="password" class="input" placeholder="Contraseña" />
                                    </div>
                                    <a href="<?php echo BASE_URL . 'principal/recoverpw'; ?>">Olvidaste tu contraseña?</a>
                                    <button class="submit-btn" id="btnLogin">Iniciar</button>
                                </div>
            </div>
        </div>
    </div>
</section>

<?php include "Views/template/footer.php"; ?>

<script src="<?php echo BASE_URL; ?>public/admin/js/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/login.js"></script>
</body>

</html>
 <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control" placeholder="Digite seu Email" required="required" autofocus="autofocus">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="senha" required="required">
                <label for="inputPassword">Senha</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="lembrar">
                 Relembre minha senha 
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('home')?>">Login</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url('home/registro')?>">Registrar uma conta</a>
            <a class="d-block small" href="<?php echo base_url('home/recuperarSenha')?>">Esqueceu sua senha ?</a>
          </div>
        </div>
      </div>
    </div>

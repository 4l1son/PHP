<h1>Página de cadastro de usuario</h1>
<p>Cadastre um usuario  usando o formulário abaixo.</p>
<form action="../view/home.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="nome" for="nome" placeholder="Digite seu nome">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" for="email" placeholder="Digite seu email">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Senha</label>
    <input type="password" class="form-control" id="email" name="senha" for="senha" placeholder="Digite sua senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

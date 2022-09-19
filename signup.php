<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <title>InkNext - Cadastro</title>
  </head>
  <body>
    <header>
      <div class="logo-box">
        <h1 class="logo">InkNext</h1>
        <button class="show-sidebar">
          <img src="style/img/menu.svg" alt="" class="brg-btn" />
        </button>
      </div>
      <div class="sidebar hidden">
        <ul class="links">
          <button class="close-sidebar">&times</button>
          <li class="sidebarLinks">
            <a href="index.html"> Home</a>
          </li>
          <li class="sidebarLinks">
            <a href="products.html">Produtos</a>
          </li>
          <li class="sidebarLinks">
            <a href="team.html">Nossa Equipe</a>
          </li>
          <li class="sidebarLinks">
            <a href="history.html">Nossa Historia</a>
          </li>
          <li class="sidebarLinks">
            <a href="support.php">Suporte</a>
          </li>
          <li class="sidebarLinks">
            <a href="signup.php">Sign-Up</a>
          </li>
          <li class="sidebarLinks">
            <a href="login.php">Login</a>
          </li>
        </ul>
      </div>
      <div class="overlay hidden"></div>
    </header>
    <main>
      <div class="form">
        <form action="" method="post">
          <div class="form-body">
            <label for="user" class="signup-l"> Nome de Usuario </label>
            <input
              type="text"
              name="user"
              placeholder="Nome de Usuario"
              required
              class="signup-i"
            />

            <label for="name" class="signup-l"> Primeiro Nome </label>
            <input
              type="text"
              name="name"
              placeholder="Nome"
              required
              class="signup-i"
            />

            <label for="surname" class="signup-l"> Sobrenome </label>
            <input
              type="text"
              name="surname"
              placeholder="Sobrenome"
              required
              class="signup-i"
            />

            <label for="email" class="signup-l"> Email </label>
            <input
              type="text"
              name="email"
              placeholder="e-mail"
              required
              class="signup-i"
            />

            <label for="user_type" class="signup-l">Tipo de Conta</label>
            <select name="user_type" id="user_type">
              <option value="Cliente">Cliente</option>
              <option value="Empresa">Tatuador</option>
            </select>

            <label for="password" class="signup-l">Senha</label>
            <input
              type="text"
              name="password"
              placeholder="Senha"
              required
              class="signup-i"
            />

            <label for="password_conf" class="signup-l">Confirmar Senha</label>
            <input type="text" class="signup-i" placeholder="Repita a Senha" />

            <input type="radio" class="signup-opt" required />
            <p class="signup-opt">Concordo com os termos de uso do InkNext</p>
            <input type="checkbox" name="term_agree" class="signup-opt" />
            <p class="signup-opt">Desejo receber novidades por e-mail</p>
            <button type="submit" class="btn-submit">Se Inscrever</button>
          </div>
        </form>
      </div>
    </main>
    <div class="overlay hidden"></div>
    <script src="script.js"></script>
  </body>
</html>

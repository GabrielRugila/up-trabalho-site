<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <title>InkNext</title>
  </head>
  <body>
    <header>
      <div class="logo-box">
        <h1 class="logo">InkNext</h1>
        <button class="show-sidebar">
          <img src="style/img/menu.svg" alt="" />
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
            <a href="support.html">Suporte</a>
          </li>
          <li class="sidebarLinks">
            <a href="signup.html">Sign-Up</a>
          </li>
          <li class="sidebarLinks">
            <a href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </header>
    <main>
      <div class="contact">
        <button type="submit" class="show-sup">Entrar em Contato</button>
      </div>
      <div class="sup hidden">
        <button class="close-sup">&times;</button>
        <h1>Como podemos ajudar hoje?</h1>
        <p>
          Por gentileza preencha os campos abaixo. <br />
          Um membro de nossa equipe de suporte ira entrar em contato assim que
          possível.
        </p>
        <input
          type="email"
          placeholder="seu melhor e-mail"
          name="email"
          required
          class="contact-i"
        />
        <input
          type="text"
          placeholder="Motivo do contato"
          name="motive"
          required
          class="contact-i"
        />
        <input
          type="text"
          placeholder="Descreva o problema"
          name="description"
          class="description"
          required
        />

        <button type="submit" class="btn-send">Enviar</button>
      </div>
      <div class="overlay hidden"></div>
    </main>
    <script src="script.js"></script>
    <div class="overlay hidden"></div>
  </body>
</html>

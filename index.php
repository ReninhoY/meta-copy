<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>META Criar Conta</title>
    <link rel="stylesheet" href="style.css">
    <!--<script src="script.js"></script>-->
    <meta name="description" content="Faça seu cadastro na META">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <section id="content-header">
            <h1>META</h1>
            <section id="form">
                <form action="" method="post">
                    <!-- Email -->
                    <section class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email:" required>
                    </section>
                    <!-- Senha -->
                    <section class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" required>
                        <!-- Forgot -->
                        <div id="forgot-passwork">
                         <a href="#" id="forgot">Esqueceu a conta?</a>
                        </div>
                    </section>
                    <!-- Enviar -->
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </section>
        </section>
    </header>
    <!-- Conteúdo Principal -->
    <main id="content">
        <!-- Texto -->
        <section id="texto-content">
            <h2 id="slogan">O Facebook ajuda você a se conectar com as pessoas que fazem parte da sua vida.</h2>
            <img src="img.png" alt="mundo conectado" id="ilustracao">
        </section>
        <!-- Cadastro -->
        <section id="cadastro">
            <!-- Texto -->
            <section id="texto-cadastro">
                <h1>Abra uma conta</h1>
                <p id="description">É gratuíto e sempre será.</p>
            </section>
            <!-- Formulário de cadastro -->
            <section id="form-cadastro">
                <form action="post">
                    <!-- Nome -->
                    <section id="section-nome">
                        <input type="text" name="nome" id="Nome" placeholder="Nome" required> <!-- Nome -->
                        <input type="text" name="sobrenome" id="Sobrenome" placeholder="Sobrenome" required> <!-- Sobrenome -->
                    </section>
                    <!-- Contato -->
                    <input type="text" name="contato" id="Contato" placeholder="Celular ou Email" required> <!-- Celular / Email -->
                    <!-- Senha -->
                    <input type="password" name="senha" id="Senha" placeholder="Senha" required>
                    <!-- Data Nascimento -->
                    <label for="Data" id="label-data"><b>Data de Aniversário</b></label>
                    <div id="date-group">
                        <div id="select-data">
                     <!-- Dia -->
                    <select name="dia" id="dia">
                    <?php
                        $i = 0;
                        while ($i<=10) {
                            $i++;
                            echo "<option value='dia".$i."' required>".$i."</option>";
                            if ($i==9) {
                                echo "<option value='dia".$i."' selected>".$i."</option>";
                            }
                        }
                    ?>
                    </select>
                    <!-- Mês -->
                    <select name="mes" id="">
                        <option value="jan">Janeiro</option>
                        <option value="fev" selected>Fevereiro</option>
                        <option value="mar">Março</option>
                        <option value="abr">Abril</option>
                        <option value="mai">Maio</option>
                        <option value="jun">Junho</option>
                        <option value="jul">Julho</option>
                        <option value="ago">Agosto</option>
                        <option value="set">Setembro</option>
                        <option value="out">Outubro</option>
                        <option value="nov">Novembro</option>
                        <option value="dez">Dezembro</option>
                    </select>
                    <!-- Ano -->
                    <select name="ano" id="ano" required>
                        <?php 
                            for ($s=1960; $s<=2023; $s++) {
                                echo "<option value='dia".$s."' required>".$s."</option>";
                                if ($s==2023) {
                                    echo "<option value='ano".$s."' selected>".$s."</option>";
                                }
                            }
                        ?>
                    </select>
                        </div>
                        <p class="terms" id="text-date" onmouseover="mostrar()" onmouseout="esconder()"><a href="#">Por que preciso informar minha data de nascimento?</a><div id="dialog"><p class="terms">Ao informar sua data de nascimento, você ajuda a garantir que a sua experiência no Facebook seja adequada à sua idade. Se desejar alterar quem vê isso, vá para a seção Sobre do seu perfil. Para obter mais detalhes, visite nossa <a>Política de Dados</a>.</p></div></p>
                    </div>
                    <!-- Masc / Femi -->
                    <input type="radio" name="sexo[]" class="sexo" id="Masculino" value="masculino" required>
                    <label for="Masculino">Masculino</label>
                    <input type="radio" name="sexo[]" class="sexo" id="Feminino" value="feminino">
                    <label for="Feminino" required>Feminino</label>
                    <!-- Termos -->
                    <p class="terms" id="cadastro-terms">Ao clicar em Cadastre-se, você concorda com nossos <a href="#">Termos, Política de Privacidade</a> e <a href="#">Política de Cookies</a>. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                    <!-- Submit -->
                    <div id="submit">
                        <input type="submit" name="enviar-cadastro" value="Cadastre-se">
                    </div>
                    <!-- Link -->
                    <p class="terms"><a href="#">Criar uma Página</a> para celebridades, banda ou empresa.</p>
                </form>
            </section>
        </section>
    </main>
    <!-- Rodapé -->
    <footer id="rodape">
        <!-- Criar funções com JS para mudar o idioma -->
        <div id="idiomas">
            <a href="#" class="idiomas">Português (BR)</a>
            <a href="#" class="idiomas">Inglês</a>
            <a href="#" class="idiomas">Espanhol</a>
            <a href="#" class="idiomas">Francês</a>
            <a href="#" class="idiomas">Russo</a>
            <a href="#" class="idiomas">Italiano</a>
            <a href="#" class="idiomas">Mandarin</a>
        </div>
        <!-- Barra -->
        <hr id="linha">
        <!-- Navegação -->
        <nav id="links">
            <a href="#" class="links">Home</a>
            <a href="#" class="links">Sobre</a>
            <a href="#" class="links">Minha Conta</a>
            <a href="#" class="links">Privacidade</a>
            <a href="#" class="links">Amigos</a>
            <a href="#" class="links">Configurações</a>
            <a href="#" class="links">Postagens</a>
            <a href="#" class="links">Storyes</a>
            <a href="#" class="links">Grupos</a>
            <a href="#" class="links">Marketplace</a>
            <a href="#" class="links">Anúncios</a>
            <a href="#" class="links">Deletar</a>
            <a href="#" class="links">Chamadas de Voz</a>
            <a href="#" class="links">Mini Jogos</a>
            <a href="#" class="links">Comunidades Públicas</a>
            <a href="#" class="links">Histórico</a>
            <a href="#" class="links">Curtidas</a>
            <a href="#" class="links">Salvos</a>
            <a href="#" class="links">Recomendados</a>
            <a href="#" class="links">Sugestões</a>
            <a href="#" class="links">Localização</a>
            <a href="#" class="links">Segurança</a>
            <a href="#" class="links">Livros</a>
            <a href="#" class="links">Filmes</a>
        </nav>
        <section id="autores">
            <p>Confeccionado por Mariah e Renatonato</p>
        </section>
    </footer>
</body>
</html>
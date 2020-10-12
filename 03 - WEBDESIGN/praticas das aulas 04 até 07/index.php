<!DOCTYPE html> <!-- DOCUMENTO HTML 5 -->
<html lang='pt-br'>
<!-- INFORMAR A LÍNGUA QUE SERÁ UTILIZADA NO SITE -->

<head>
    <!-- CONJUNTO DE CARACTERES -->
    <meta charset='UTF-8'>

    <!-- VIEWPORT -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- ROBOTS -->
    <meta name='robots' content='index, follow'>

    <!-- SHORTCUT -->
    <link rel='shortcut icon' href='http://www.ifto.edu.br/++theme++portal-do-ifto/img/favicon.ico'>

    <!-- CSS -->
    <link rel='stylesheet' href=''>

    <!-- TÍTULO DA PÁGINA -->
    <title>APRENDENDO HTML</title>
</head>

<!-- CONTEÚDO EXIBIDO PARA O USUÁRIO  -->

<body>

    <!-- Tags semanticas do HTML -->
    <!-- https://medium.com/reprogramabr/semanticahtml5-5252b4937f0a -->
    <!-- Técnicas de Black Hat SEO, EVITE ! -->
    <!-- https://resultadosdigitais.com.br/blog/black-hat/ -->

    <header>
        <!-- LOGO, MENU DE NAVEGAÇÃO -->
        <nav>
            <ul>
                <li> <a href="#home"> Home </a></li>
                <li> <a href="#empresa"> A empresa </a></li>
                <li> <a href="#quemsomos"> Quem somos </a></li>
                <li> <a href="#contato"> Contato </a></li>
            </ul>
        </nav>
    </header>

    <main>

        <article>
            <header>
                <h1> Em relação aos jogos da atual geração, a Sony afirma que apenas dez títulos ficam confinados ao
                    PS4.
                    Eles
                    serão
                    designados como “jogáveis apenas no PS4” na PlayStation Store e não poderão ser instalados e
                    executados
                    no
                    PS5
                </h1>
            </header>

            <!-- <h2> h2 </h2>
        <h3> h3 </h3>
        <h4> h4 </h4>
        <h5> h5 </h5> -->

            <div>

                <figure>
                    <img src="assets/img/ifto.svg" alt="REDE FEDERAL DE EDUCACAO" title="REDE FEDERAL DE EDUCAÇÃO"
                        width="500">
                </figure>
                <figure>
                    <img src="assets/img/rede_federal.png" alt="REDE FEDERAL DE EDUCACAO"
                        title="REDE FEDERAL DE EDUCAÇÃO" width="500">
                </figure>

                <audio src="assets/audio/musica.mp3" controls autoplay loop></audio>

                <video src="assets/video/rede_federal.mp4" controls></video>

                <p>
                    <!-- MARCAÇÃO DE PARÁGRAFOS  -->
                    A respeito dos demais, a Sony observa que os jogos podem oferecer o modo Game Boost. O recurso faz
                    com
                    que o
                    game
                    reconheça o hardware mais poderoso do PS5 para rodar melhor do que no PS4, com gráficos superiores e
                    performance
                    mais estável, por exemplo. Para tirar proveito dessas vantagens, a recomendação é de manter sempre o
                    PS5
                    e
                    os
                    títulos atualizados nas últimas versões.
                </p>

                <P>
                    Também há ressalvas de que mesmo jogos compatíveis com o PS5 podem apresentar algum tipo de
                    limitação em
                    termos
                    de
                    recursos originalmente suportados no PS4, além de erros e eventuais problemas de performance. Porém,
                    a
                    Sony
                    não
                    dá
                    nenhum exemplo do que seriam esses recursos e recomenda que o usuário teste cada game, antes de
                    comprar
                    DLCs
                    e
                    conteúdo adicional para títulos de PS4.
                </P>

                <P>
                    Em relação aos jogos da atual geração, a Sony afirma que apenas dez títulos ficam confinados ao PS4.
                    Eles
                    serão
                    designados como “jogáveis apenas no PS4” na PlayStation Store e não poderão ser instalados e
                    executados
                    no
                    PS5
                </P>

                <a href="http://www.ifto.edu.br/araguaina" target="blank" title="Campus Araguaina"
                    alt="Campus Araguaina">
                    Campus Araguaína
                </a>

                <h2> Lista de jogos incompatíveis com o PlayStation 5 </h2>

                <ul>
                    <li>DWVR</li>
                    <li>Afro Samurai 2 Revenge of Kuma Volume One</li>
                    <li>TT Isle of Man - Ride on the Edge 2</li>
                    <li>Just Deal With It!</li>
                    <li>Shadow Complex Remastered</li>
                    <li>Robinson: The Journey</li>
                    <li>We Sing</li>
                    <li>Hitman Go: Definitive Edition</li>
                    <li>Shadwen</li>
                    <li>Joe's Diner</li>
                </ul>

                <!-- <ol reversed> -->
                <!-- <ol start=3> -->
                <!-- <ol type='I'> -->
                <!-- <ol type='A'> -->
                <ol type='a'>
                    <li>DWVR</li>
                    <li>Afro Samurai 2 Revenge of Kuma Volume One</li>

                    <ul>
                        <li>Programador WEB</li>
                    </ul>

                    <li>TT Isle of Man - Ride on the Edge 2</li>
                    <li>Just Deal With It!</li>
                    <li>Shadow Complex Remastered</li>
                    <li>Robinson: The Journey</li>
                    <li>We Sing</li>
                    <li>Hitman Go: Definitive Edition</li>
                    <li>Shadwen</li>
                    <li>Joe's Diner</li>
                </ol>
            </div>
            <footer>
                <p> Autor: Raphael da Silva Araújo</p>
            </footer>
        </article>

        <section>
            <header>
                <h1>As mais lidas do Site</h1>
            </header>
            <article>
                <header>
                    <h1>Noticia 1</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 2</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 3</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 4</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
        </section>
    </main>

    <aside>
        <header>
            <h1>Sidebar (Barra lateral)</h1>
        </header>
    </aside>

    <footer>
        <!-- PAGINAS DO SITE, TERMOS DE USO, LINKS LEGAIS, COPYRIGHT -->
    </footer>

    <!-- SCRIPT (É RECOMENDADO COLOCAR NO FINAL DO BODY)  -->
    <script> </script>
</body>

</html>
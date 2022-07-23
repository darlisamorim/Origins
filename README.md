<h1 align='center'> Origins 👋, Basic project for front-end  🧑🏻‍💻 </h1>

<p align='center'>
  Hope you like this foundation.
</p>

<p align='center'>
  <a title="Darlis A. Amorim_ | DevTo" target="_blank" href="https://dev.to/darlisamorim"><img src="https://img.shields.io/badge/DEV.TO-%230A0A0A.svg?&style=for-the-badge&logo=dev-dot-to&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Medium" href="https://medium.com/@darlisamorim"><img src="https://img.shields.io/badge/medium-%2312100E.svg?&style=for-the-badge&logo=medium&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | CodePen" href="https://codepen.io/darlisamorim"><img src="https://img.shields.io/badge/CodePen-white?style=for-the-badge&logo=codepen&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Website" href="https://www.darlisalvesamorim.com"><img src="https://img.shields.io/badge/-My%20Blog-17bf63?&style=for-the-badge&logo=blog&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
</p>


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#projeto)

## ➤ Projeto

Origins é uma base de arquivos para inicializar o desenvolvimento front-end, reúne algumas bibliotecas nativas veja nos extras abaixo. A proposta aqui é somente fazer o download e começar a codar. Deixei uma estrutura simples pré-pronto( Header, Main, Footer, CSS e Medias Queries), porém é claro que você precisa ler está documentação até o final e trabalhar em cima da estrutura não do que deixei pré-pronto.



[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#tecnologias)

## ➤ Tecnologias

- [HTML5](https://html5.org/)
  - Estrutura separada com tags pré-servidas
- [CSS3](https://www.w3.org/Style/CSS/Overview.en.html)
  - Folhas de estilo separadas
- [jQuery](https://jquery.com/)
  - Biblioteca adicionada
- [Javascript](https://javascript.info/)
  - Arquivo incluido( main.js )
- [PHP](https://www.php.net/)
  - Includes para fatiar o layout


Extras:
  * Bibliotecas:
    * [Boxicons](https://boxicons.com/)
    * [Fontawesome](https://fontawesome.com/)
    * [Icomoon](https://icomoon.io/)
    * [Line-Awesome](https://icons8.com/line-awesome)
    * [~~Iconscout~~ *Pending](https://icons8.com/line-awesome)
    * [~~NormalizeCSS~~ *Disabled](https://necolas.github.io/normalize.css/)
    * [AnimateCSS](https://animate.style)


  * Software
    * [Atom](https://atom.io/)




[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#layout)

## ➤ Layout

O Layout foi separado em camadas veja:

Estrutura:
  * _storage:
    * [css]
      * [components] -> ( Bibliotecas (AnimateCSS, Reset, Variáveis etc)... )
        * animate.css
        * boxicons.css
        * cssoo.css
        * fontawesome.css
        * icomoon.css
        * iconscout.css -> ( Pendente ( Assim que possível vou coloca-la ) )
        * line-awesome.css
        * normalize.css -> ( Desabilitado ( Esteja Reset está desabilitado estou usando o meu próprio ) )
        * queries.css
        * reset.css
      * [folds] -> ( Style Páginas (Header, Main, Footer etc)... )
    * [fonts] -> ( Complementos das Bibliotecas )
    * [images] -> ( Imagens do Projeto (Logo, favicon, Default) )
    * [js] -> ( Scripts do Projeto (Html5shiv, jQuery e Main) )
  * partls:
    * [seo.php] -> Otimizações para os Buscadores
    * [header.php] ->
    * [footer.php]



<p align="center">
  <a href="https://www.figma.com/file/e33KvgUpFdunXxJjHnK7CG/Proffy-Mobile"><img src="https://img.shields.io/badge/figma-mobile-%23F24E1E.svg?&style=for-the-badge&logo=figma&logoColor=white"></a>
  <a href="https://www.figma.com/file/e33KvgUpFdunXxJjHnK7CG/?viewer=1&node-id="><img src="https://img.shields.io/badge/figma-web-%23F24E1E.svg?&style=for-the-badge&logo=figma&logoColor=white"></a>

</p>

<br/>

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ File Insomnia

O arquivo .json com o arquivo usado no Insomnia está dentro da raiz do projeto. Basta fazer o download e importar no insomnia e usar. Lembre de alterar o que for necessário para que você consiga efetuar as requisições. Ou clique no botão para ser redirecionado. <br/>
<br/>
<p align="center">
<a href="https://insomnia.rest/run/?label=Proffy&uri=https%3A%2F%2Fgithub.com%2FStefanyVasc%2FProffy%2Fblob%2Fmaster%2FInsomnia_2020-08-08.json" target="_blank"><img src="https://insomnia.rest/images/run.svg" alt="Run in Insomnia"></a>
</p>


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#instalao)

## ➤ Instalação

O **Backend** foi construido em **NodeJS**, certifique-se de ter alguma versão do node instalada em sua máquina. Utilize o Insomnia para realizar os testes na API.

Iniciando o backend:
```
cd server
npm install
npm dev
```

Iniciando o **Frontend** em **ReactJS**:

```
cd web
npm install
npm start
```

Assim que o processo terminar, automaticamente será aberta no seu navegador a página localhost:3000 contendo o Projeto.

Iniciando com o **Mobile** em **React Native**

  1.Coloque o endereço do seu servidor (ou computador) no arquivo *mobile/src/services/api.tsx*
  <br/>
  2. Execute os comandos:

  ```
  # NÃO é preciso executar a linha abaixo caso ja tenha o Expo (CLI) instalado!
  npm install -g expo-cli
  //
  cd mobile
  npm install
  expo start
  ```

Será aberta no seu navegador a página localhost:19002. Conecte seu emulador, ou teste o aplicativo por LAN: baixe o aplicativo Expo da Play Store ou App Store e em seguida escaneie o código QR.


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#crditos-)

## ➤ Créditos

Aplicação criada durante a Next level Week 2, um evento criado pela [RocketSeat](https://rocketseat.com.br/) 🚀. <br/>
Aulas conduzidas pelo [Diego Fernandes](https://github.com/diego3g)

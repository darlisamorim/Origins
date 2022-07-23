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

O Layout foi separado em camadas veja ( Pastas e Arquivos ):

  * **/_storage**:
    * [/css]
      * [/components] **->** ( Arquivos de Bibliotecas )
        * animate.css
        * boxicons.css
        * cssoo.css
        * fontawesome.css
        * icomoon.css
        * iconscout.css **->** ( Pendente ( Assim que possível vou coloca-la ) )
        * line-awesome.css
        * ~~normalize.css~~ **->** ( Desabilitado ( Esteja Reset está desabilitado estou usando o meu próprio ) )
        * queries.css
        * reset.css
      * [/folds] **->** ( Style de Páginas )
        * header.css
        * main.css
        * footer.css

    * [/fonts] **->** ( Arquivos complementares das bibliotecas ( .eot, svg, ttf etc..) )
    * [/images] **->** ( Imagens do projeto (Logo, favicon, Default) )
    * [/js] **->** ( Scripts do projeto (Html5shiv, jQuery e Main) )

  * **/partls**:
    * [seo.php] **->** Otimizações para os buscadores
    * [header.php] **->** Arquivo de cabeçalho e definições do site
    * [footer.php] **->** Rodapé do site

  * **raiz/**:
    * index.php **->** Responsável pelas sessões ( sections ) do site
    * README.md **->** Arquivo padrão de interpretação do git ou seja este tutorial que está lendo agora
    * robots.txt **->** Define quais diretórios os buscadores podem ou não ler e interpretar
    * ~~rss.php~~  **->** Arquivo *Pendente
    * ~~sitemap.php~~ **->** Arquivo *Pendente

<p align="center">
  <a href="https://www.figma.com/file/e33KvgUpFdunXxJjHnK7CG/Proffy-Mobile"><img src="https://img.shields.io/badge/figma-mobile-%23F24E1E.svg?&style=for-the-badge&logo=figma&logoColor=white"></a>
  <a href="https://www.figma.com/file/e33KvgUpFdunXxJjHnK7CG/?viewer=1&node-id="><img src="https://img.shields.io/badge/figma-web-%23F24E1E.svg?&style=for-the-badge&logo=figma&logoColor=white"></a>

</p>

<br/>

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Como utilizar ?

É uma estrutura bem simples basta seguir o padrão colocado por mim ou seja para cada arquivo existe um diretório específico onde ele se encaixará. A princípio quando você estiver refatorando o código irá notar que existem diversas Tags tais como ( {SITE_TITLE}, {SITE_SUBNAME}, {GOOGLE_CHECK}, {FACEBOOK_ID_PAGE}, etc ). Elas também foram colocadas como guia, pois servem para dizer exatamente onde você vai colocar determinada informações no site.

Recortei um pegaço da do arquivo **seo.php** é assim que ele se encontra atualmente:
```
  * Tags:
    * {SITE_TITLE} -> Titulo do site { ProGame }
    * {SITE_SUBNAME} -> Sub Descrição do site  { O Melhor Site de Games }
    * {SITE_DESCRIPTION} -> Descrição completa { Você encontra o download de todos os melhores jogos de graça }
    * {SITE_URL} -> URL do site { https://www.progame.com/ }
    * {SITE_IMAGE_DEFAULT} -> Imagem de compartilhamento do site { https://www.progame.com/_storage/images/default.svg }

<meta itemprop="name" content="{SITE_TITLE} | {SITE_SUBNAME}" />
<meta itemprop="description" content="{SITE_DESCRIPTION}" />
<meta itemprop="url" content="{SITE_URL}" />
<meta itemprop="image" content="{SITE_IMAGE_DEFAULT}" />

  Note que cada Tag tem um texto autoexplicativo nela veja no exemplo abaixo.
```

Em nosso exemplo veja como ficará quando você modificar as Tags do site note que pegamos o mesmo trecho do arquivo **seo.php**:
```
<meta itemprop="name" content="ProGame | O Melhor Site de Games" />
<meta itemprop="description" content="Você encontra o download de todos os melhores jogos de graça" />
<meta itemprop="url" content="https://www.progame.com/" />
<meta itemprop="image" content="https://www.progame.com/_storage/images/default.svg" />
```
Desde de que você tenha atenção irá conseguir modificar e ajustar os arquivos para alimenta-los a partir do refatoramento e assim terá um site ou página otimizado.

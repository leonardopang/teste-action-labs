# WordPress Theme – Teste Action Labs

**Teste Técnico – Action Labs**

Este projeto consiste no desenvolvimento de um **tema personalizado para WordPress**, criado como parte do processo seletivo da **Action Labs**.

O objetivo foi implementar um tema baseado no layout fornecido no Figma, seguindo boas práticas de desenvolvimento WordPress, organização de código e responsividade.

---

# Layout de referência

Figma utilizado no teste:

https://www.figma.com/file/fN51xKaXc9tgugARuPbMQ2/Teste-Wordpress

O layout disponível no Figma contém apenas a versão **desktop**, portanto foram realizadas adaptações para garantir uma **experiência responsiva em dispositivos móveis**.

---

# Estrutura do Projeto

O tema foi desenvolvido seguindo a estrutura moderna de **Block Theme (Gutenberg / Full Site Editing)**.

```
teste-action-labs/
├─ style.css
├─ functions.php
├─ theme.json
├─ screenshot.png
├─ README.md
│
├─ templates/
│  ├─ index.html
│  ├─ home.html
│  ├─ single.html
│  ├─ page.html
│  └─ page-sobre.html
│
├─ parts/
│  ├─ header.html
│  └─ footer.html
│
├─ patterns/
│  ├─ hero-portal.php
│  ├─ blog-cards.php
│  └─ about-layout.php
│
└─ assets/
   ├─ css/
   │  └─ app.css
   ├─ scss/
   │  └─ app.scss
   ├─ js/
   │  └─ app.js
   └─ img/
      └─ hero.jpg
```

---

# Tecnologias utilizadas

O projeto foi desenvolvido utilizando:

- WordPress (Block Theme / Gutenberg)
- HTML5
- SCSS
- Webpack
- JavaScript
- theme.json (WordPress Global Styles)

---

# Funcionalidades implementadas

## Header

O header inclui:

- Logotipo do site
- Menu de navegação do WordPress
- Links para:
  - Página inicial
  - Página "Sobre"

Arquivo responsável:

```
/parts/header.html
```

---

## Página inicial (Blog)

A página inicial apresenta:

- Hero com imagem de destaque
- Título **Portal do Cliente**
- Lista dos **últimos 6 posts**
- Cada post contém:
  - Imagem destacada
  - Título
  - Resumo
  - Link para leitura completa

Template responsável:

```
/templates/home.html
```

O conteúdo é gerado utilizando o bloco:

```
Query Loop (wp:query)
```

que consulta automaticamente os **6 posts mais recentes**.

---

## Página Single (Post)

A página de post individual contém:

- Imagem destacada do post
- Categoria
- Data de publicação
- Título do post
- Autor
- Conteúdo completo

Arquivo responsável:

```
/templates/single.html
```

---

## Página "Sobre"

A página "Sobre" utiliza um template específico contendo:

- Título grande
- Subtítulo
- Conteúdo de texto

Arquivo responsável:

```
/templates/page-sobre.html
```

---

## Footer

O footer contém:

- Logotipo
- Informação de copyright

Arquivo responsável:

```
/parts/footer.html
```

---

# Estilos

Os estilos são organizados utilizando **SCSS**, compilados via **Webpack** para:

```
assets/css/app.css
```

A estrutura SCSS permite melhor organização e manutenção do CSS.

Arquivo de entrada:

```
assets/scss/app.scss
```

---

# Build com Webpack

O projeto utiliza Webpack para compilar SCSS.

## Instalar dependências

Dentro da pasta do tema:

```
npm install
```

---

## Rodar em modo desenvolvimento

```
npm run dev
```

Isso ativa o modo **watch**, recompilando automaticamente o SCSS.

---

## Build de produção

```
npm run build
```

---

# Responsividade

Embora o layout fornecido no Figma seja apenas **desktop**, o tema foi desenvolvido com abordagem **responsiva**, garantindo funcionamento adequado em:

- Desktop
- Tablet
- Mobile

A grid de posts se adapta automaticamente utilizando **CSS Grid e media queries**.

---

# Padrões WordPress utilizados

Durante a implementação foram utilizadas funções e conceitos padrão do WordPress, incluindo:

- `theme.json` para estilos globais
- suporte a `post thumbnails`
- `navigation menu`
- `Query Loop` do Gutenberg
- `template parts`
- `block templates`

Isso garante que o tema esteja alinhado com o **modelo moderno de desenvolvimento WordPress**.

---

# Como utilizar

1. Copiar a pasta do tema para:

```
wp-content/themes/
```

2. Acessar o painel do WordPress:

```
Aparência → Temas
```

3. Ativar o tema:

```
Cliente Portal
```

4. Criar uma página chamada:

```
Blog
```

5. Em:

```
Configurações → Leitura
```

definir:

```
Página de posts → Blog
```

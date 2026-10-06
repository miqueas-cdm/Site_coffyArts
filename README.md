# CoffyArts

## Visão geral

O projeto CoffyArts é um site para apresentar e comercializar arte, com foco em fortalecer a identidade visual da marca, divulgar obras, contar a história do artista/criador e facilitar o contato com clientes e parceiros.

A estrutura atual foi montada em Drupal 10, com Composer e ambiente local via DDEV, servindo como base para evoluir em direção a um portal completo para artes e cultura.

## Objetivo do projeto

Criar uma presença digital profissional para a marca, com:

- apresentação de obras e portfolio;
- destaque para a identidade visual e proposta artística;
- páginas institucionais e de apresentação;
- formulário de contato e relacionamento;
- possibilidade de venda, agendamento ou demandas futuras de e-commerce;
- estrutura escalável para crescer com novos conteúdos, categorias e recursos.

## Stack utilizada

- PHP
- Drupal 10
- Composer
- DDEV
- Git
- Trello para organização e acompanhamento do projeto

## Acompanhamento do projeto

Todo o desenvolvimento será acompanhado no Trello:

https://trello.com/invite/b/6ac58080f15cfb9f7b86b69a/ATTI0be8aea057ed1463016600f3713846646054C80A/sitecoffyarts

## Estrutura do repositório

- `composer.json` — definição da aplicação Drupal e dependências;
- `composer.lock` — lock do ambiente de dependências;
- `web/` — raiz pública do Drupal, com núcleo, módulos e configurações do site;
- `.ddev/` — configuração do ambiente local de desenvolvimento;
- `vendor/` — dependências instaladas via Composer.

## Como rodar localmente

Pré-requisitos:

- Docker
- DDEV instalado na máquina
- Git

Comandos básicos:

```bash
ddev start
ddev exec composer install
```

Para abrir o site no navegador:

```bash
ddev launch
```

## Roadmap inicial

### Fase 1 — Base e estrutura
- configurar ambiente local;
- validar instalação do Drupal;
- definir estrutura do site;
- preparar base para customização visual.

### Fase 2 — Design e UX
- criar identidade visual do site;
- desenvolver layout da landing page;
- definir áreas de destaque para obras, sobre e contato.

### Fase 3 — Conteúdo e funcionalidade
- inserir textos e imagens;
- organizar portfolio e categorias;
- validar formulários e navegação.

### Fase 4 — Otimização e publicação
- ajustes finais de responsividade;
- revisão de performance e SEO;
- publicação em ambiente de produção.

## Status atual

O projeto está em fase inicial de estruturação e desenvolvimento, com a base Drupal pronta para ser customizada conforme o planejamento do produto e do design.

## Observações

Este README será atualizado ao longo do projeto conforme novas funcionalidades forem implementadas, novas integrações forem adicionadas e o desenvolvimento for concluído.

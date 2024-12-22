# Melhoria Urbana - Projeto de Desenvolvimento Web

## Objetivo

Este repositório contém o código para o desenvolvimento de um site que permite aos cidadãos registrar opiniões sobre melhorias necessárias em uma cidade, permitindo que candidatos a prefeito ou vereador identifiquem e resolvam problemas urbanos. O site permitirá selecionar uma cidade, listar as melhorias sugeridas e interagir com as opiniões de outros cidadãos.

## Descrição do Projeto

O projeto simula uma plataforma onde cidadãos podem sugerir melhorias para suas cidades e interagir com as sugestões de outras pessoas. O exemplo utilizado neste projeto é a cidade de Campinas, mas a aplicação foi projetada para permitir a inclusão de outras cidades.

## Funcionalidades

1. **Listagem de Cidades**
   - O usuário pode visualizar uma lista de cidades cadastradas e selecionar uma para explorar melhorias.
   - Permite o cadastro de novas cidades.
   
2. **Cadastro de Cidades**
   - Uma interface simples para adicionar, editar e remover cidades.
   - Armazenamento das informações no banco de dados (ID, nome da cidade, estado, etc.).
   
3. **Listagem de Melhorias**
   - Exibição de melhorias sugeridas para cada cidade, organizadas da mais recente para a mais antiga.
   - Filtros por data e categoria de melhoria.
   
4. **Opiniões dos Cidadãos**
   - Formulário onde os cidadãos podem registrar suas opiniões sobre melhorias necessárias.
   - As opiniões são armazenadas no banco de dados e associadas à cidade correspondente.

5. **Comentários**
   - Permite que os usuários comentem nas postagens de melhorias para fomentar a discussão e o engajamento.

6. **Sistema de Relevância**
   - Os usuários podem votar nas melhorias que consideram mais importantes.
   - Melhorias com maior relevância aparecem em destaque na lista.

7. **Relatórios e Estatísticas**
   - Funcionalidade para gerar relatórios e estatísticas sobre as melhorias sugeridas, como número de sugestões por categoria ou data.

## Tecnologias Utilizadas

- **PHP**: Para o desenvolvimento do backend e interação com o banco de dados.
- **MySQL**: Banco de dados utilizado para armazenar informações sobre as cidades, melhorias, opiniões e comentários.
- **HTML & CSS**: Para a construção do frontend e layout do site.
- **JavaScript**: Opcional, pode ser utilizado para interatividade no frontend.

## Como Rodar o Projeto Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/beckersoffia/trabalho.git

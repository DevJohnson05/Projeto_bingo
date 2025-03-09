# Projeto_bingo
Criei esse projetinho simples para treinar a lógica de programação, sessões em PHP e integração de front-end com back-end.

### Dados do projeto
O projeto tem 5 arquivos principais, cada um com sua função específica:
- `index.html`: Apresenta a página de geração de números e letras do bingo, com um navbar para navegação entre as páginas HTML.
- `NumerosSorteados.html`: Apresenta o histórico de números já sorteados em uma lista não ordenada.
- `bingo.php`: Script back-end que gera os números e letras do bingo e retorna os dados em JSON para o JavaScript.
- `script.js`: Faz um fetch dos dados do `bingo.php`, apresenta as letras e números por meio do DOM e guarda alguns valores no `localStorage`.
- `style.css`: Estiliza os elementos das páginas HTML, servindo tanto o `index.html` quanto o `NumerosSorteados.html`.

### Tecnologias usadas
O projeto usa as seguintes tecnologias:
- Bootstrap 5 via CDN
- JavaScript
- CSS3
- HTML5
- PHP 8.4

### Especificações
O projeto foi desenvolvido usando o servidor embutido do PHP.
Caso seja utilizado em um ambiente de desenvolvimento Apache/Nginx, será necessário alterar a URL no fetch do `script.js` (alterar de `localhost` para a URL apropriada).

### Como executar o projeto
1. Clone o repositório:
    ```sh
    git clone https://github.com/DevJohnson05/Projeto_bingo.git
    ```
2. Navegue até o diretório do projeto:
    ```sh
    cd Projeto_bingo
    ```
3. Inicie o servidor PHP embutido:
    ```sh
    php -S localhost:8000
    ```
4. Abra o navegador e acesse:
    ```
    http://localhost:8000/index.html
    ```

### Funcionalidades
- Geração aleatória de números e letras do bingo.
- Armazenamento dos números sorteados no `localStorage`.
- Exibição do histórico de números sorteados.
- Acesse [Bingo Gerador de Números Gratuito](https://bingo-gerador-de-numeros-gratuito.42web.io/) para visualizar o funcionamento do projeto.

### Contribuições
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

### Licença
Este projeto está licenciado sob a [MIT License](LICENSE).

### Contato
Para mais informações, entre em contato:
- [Vinícius Johnson](https://github.com/DevJohnson05)
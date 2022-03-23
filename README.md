# Form Maker PHP
Desenvolvido para agilizar o desenvolvimento de projetos simples e/ou MVP, com o Form Maker PHP, você pode gerar campos do seu formulário, utilizando o bootstrap como padrão de layout.

## Documentação
Para gerar um campo, você pode usar a função ***frmk()***, juntamente com os parâmetros que deseja inserir, além dos padrões

    frmk( 'type', 'name', 'placeholder', 'value', 'add', 'id', 'class' );

- type: Tipo de campo (ex: text, email, textarea, select, checkbox, ...)
- name: Nome do campo
- placeholder: Placeholder do campo (ou label do campo, para os tipos 'checkbox' e 'radio')
- value: Valor padrão do campo
- add: Para adicionar parâmetros no campo (ex: disable, ...)
- id: ID do campo
- class: Classes do campo (sendo a padrão 'form-control')

Você pode conferir exemplos práticos de uso na pasta _/test_

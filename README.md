# Plataforma EAD
Plataforma EAD desenvolvida em PHP, arquitetura MVC, bando de dados MySQL. Trabalho em Progresso. 

## Estrutura Inicial do Banco de Dados

### CURSOS
- id
- nome
- imagem
- descricao

### ALUNOS
- id
- nome
- email
- senha

### ALUNO_CURSO
- id
- id_curso
- id_aluno

### MODULOS
- id
- nome
- id_curso

### AULAS
- id 
- id_modulo
- id_curso 
- tipo
- ordem

### VIDEOS
- id
- id_aula
- nome
- descricao
- url

### QUESTIONARIOS
- id 
- id_aula
- pergunta
- opcao1
- opcao2
- opcao3
- opcao4
- resposta

### HISTORICO
- id
- data
- id_aluno
- id_aula

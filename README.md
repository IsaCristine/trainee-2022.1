# **Trainee 2022.1**

# **Bell Comics**

## **Projeto Trainee, Code Jr, Grupo 3, 2022.1**

#### Desenvolvedores:

* Guilherme Monteiro de Souza;
* Matheus Leal Costa;
* Kayan Martins de Freitas;
* Lucas Henrique de Arruda Ferreira;
* Jonatas Dias Machado Costa;

#### Scrum Master:

* [Isabelly Cristine de Souza Oliveira](https://github.com/IsaCristine).





## Descrição do Projeto:

* Site E-Commerce / Sistema de treinamento e capacitação dos Trainees da CodeJR, na gestão 2022.1;
* Possuirá Front-End em HTML, CSS, Bootstrap e Back-End em PHP (puro) no padrão MVC, com Banco de Dados MySQL;
* Não possuirá todas as funcionalidades de um E-Commerce;





## Git Tutorial

### Instalação

Pra instalar, basta acessar a página de [downloads](https://git-scm.com/downloads) e seguir as instruções\
Pra se conectar, utilize os seguinte comandos: <sub>(Substitua o nome e o e-mail para o seu)<sub/>
```
git config --global user.name "nomeDeUsuario"
```
```
git config --global user.email email@codejr.com.br
```



### Primeira Configuração

* Pelo terminal entre na pasta onde irá guardar o projeto: cd /caminho/para/a/pasta, depois inicialize o git na pasta com o comando: `git init`

* Outro jeito de fazer o citado acima: clique com o botão direito na pasta e selecione "Git Bash Here" para abrir o terminal do git

* Crie um clone do repositório: `git clone https://github.com/IsaCristine/trainee-2022.1`

* Entre na pasta criada pelo comando clone: `cd /caminho/para/a/pasta/nova`

* Crie sua branch usando como o padrão o nome da feature que você está a desenvolver: `git checkout -b frontend_painel_adm`

* Após criada a branch você será redirecionado automaticamente a ela, neste espaço que você desenvolverá sua parte do projteto




### Rotina

* Adicione as alterações feitas: `git add .`

* Cheque em qual branch está e quais alterações foram adicionadas: `git status`

* Dê um commit com uma mensagem especificando as alterações realizadas: `git commit -m "mensagem especificando o que foi feito"`

* Envie o commit feito para sua branch: `git push origin suabranch`



### Quando estiver tudo prontinho - **com autorização do SCRUM Master**

* Volte para a main: `git checkout main`

* Atualize a main: `git pull`

* Volte para a sua branch: `git checkout nomedabranch`

* Mescle a main com a sua branch : `git merge main`

* Confirme o merge (apenas quando solicitado pelo Scrum Master): `git push origin suabranch`

* Espera a confirmação do seu SCRUM

* Volte para a main: `git checkout main`

* Mescle a main com as alterações enviadas para sua branch (apenas quando solicitado pelo Scrum Master): `git merge suabranch`

* Confirme o merge (apenas quando solicitado pelo Scrum Master): `git push origin main`



### Comandos Básicos

* Para atualizar a main: `git pull`

* Para atualizar alguma branch: `git pull origin branch`

* Ver informações da branch: `git status`

* Para trocar de branch: `git checkout branch_desejada`

* Adicionar todas as alterações feitas: `git add .`

* Adicionar alteração específica: `git add arquivo-especifico`

* Para mesclar sua branch com a master (estando dentro da sua branch): `git merge main`

* Para confirmar o merge: `git push origin suabranch`
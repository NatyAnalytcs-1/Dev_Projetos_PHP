# 📘 Projeto CRUD com PHP 8.4 e MySQL (MVC)

Repositório desenvolvido como parte da série de videoaulas sobre **CRUD no MySQL utilizando o padrão MVC e PHP 8.4**, sob orientação de **Tiago A. Silva**.  
🎥 Playlist no YouTube: [Série CRUD PHP 8.4 + MySQL + MVC](https://www.youtube.com/watch?v=4h6j3ODwsEw&list=PLHVpcBDJr5dmL-5tYqBmf_PxJrtrdAMT6)

---

## 🧠 Estrutura do Projeto

O projeto segue o padrão **MVC (Model-View-Controller)** para organização do código e separação das responsabilidades.

### 🔹 Model
Responsável pelas **regras de negócio e validações** da aplicação.

### 🔹 DAO (Data Access Object)
Camada que **concentra todas as classes que se comunicam com o banco de dados**.  
Toda a manipulação de dados (inserir, atualizar, excluir, listar) é feita aqui.

### 🔹 View
Camada responsável pela **interface do usuário** — o que é exibido na tela.  
> A *View* **não acessa diretamente o banco de dados**, apenas mostra as informações processadas pelo *Controller*.

---

## 💾 Banco de Dados
A aplicação realiza o acesso ao banco de dados **somente através da Model e da DAO**, garantindo uma arquitetura limpa e segura.

---

✍️ **Autor:** NatyAnalytics  
📚 **Orientação:** Tiago A. Silva
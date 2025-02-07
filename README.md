# 🔔 Sistema de Notificação em Tempo Real com WebSockets

Este repositório contém um sistema de notificação em tempo real utilizando **PHP, WebSockets (Ratchet), Bootstrap e JavaScript**. O sistema permite que notificações sejam enviadas automaticamente para todos os clientes conectados sem necessidade de recarregar a página.

## 🚀 **Funcionalidades**
- Notificações em tempo real via **WebSockets**.
- Interface responsiva usando **Bootstrap**.
- Cliente **JavaScript** para receber mensagens automáticas.
- API em **PHP** para adicionar notificações.

## 🛠 **Tecnologias Utilizadas**
- **PHP** (Ratchet para WebSockets)
- **WebSockets** (Comunicação bidirecional)
- **Bootstrap 5** (Interface responsiva)
- **JavaScript** (Cliente WebSocket)

---

## 📌 **Como Executar o Projeto**

### **1️⃣ Instalar o XAMPP e Composer**
1. Baixe e instale o [XAMPP](https://www.apachefriends.org/pt_br/download.html) (para rodar o PHP).
2. Baixe e instale o [Composer](https://getcomposer.org/) (para instalar dependências).

### **2️⃣ Clonar o Repositório**
```bash
  git clone https://github.com/WilliamBassedone/sistema-simples-de-notificacao-em-tempo-real-utilizando-websockets.git
  cd nome-do-repositorio
```

### **3️⃣ Instalar Dependências**
```bash
  composer install
```

### **4️⃣ Iniciar o Servidor WebSocket**
Abra um terminal dentro da pasta do projeto e execute:
```bash
  php server.php
```
Isso iniciará o servidor WebSocket na porta **8080**.

### **5️⃣ Acessar a Interface Web**
Abra no navegador:
```
  http://localhost/websocket/index.html
```

### **6️⃣ Testar Notificação**
Acesse a seguinte URL para adicionar uma nova notificação:
```
  http://localhost/websocket/add-notification.php
```
A notificação aparecerá automaticamente no sininho! 🎉

---

## 📜 **Estrutura do Projeto**
```
/websocket/
│-- index.html          # Interface web
│-- server.php          # Servidor WebSocket
│-- add-notification.php # Script para enviar notificações
│-- composer.json       # Dependências do projeto
│-- vendor/             # Bibliotecas instaladas via Composer
│-- LICENSE             # Licença do projeto
```

---

## 🔍 **Fluxo de Funcionamento**
```
1️⃣ O usuário acessa a página (index.html)
2️⃣ O navegador se conecta ao WebSocket (server.php)
3️⃣ Um novo item é adicionado via add-notification.php
4️⃣ O servidor WebSocket recebe e retransmite a notificação
5️⃣ O navegador recebe e exibe a notificação automaticamente
```

---

## 📢 **Vantagens do WebSocket**
- ✅ **Comunicação em tempo real** sem recarregar a página.
- ✅ **Menos consumo de recursos** comparado a polling (AJAX).
- ✅ **Baixa latência**, ideal para chats, jogos e sistemas interativos.
- ✅ **Bidirecionalidade** (Cliente e Servidor podem trocar mensagens).

---

## 📜 **Licença**
Este projeto é licenciado sob a licença **MIT**. Para mais detalhes, consulte o arquivo [LICENSE](LICENSE).

---

## 👨‍💻 **Autor**
Feito com 💙 por [William Bassedone](https://github.com/WilliamBassedone).

Se gostou do projeto, deixe uma ⭐ e contribua com melhorias! 🚀


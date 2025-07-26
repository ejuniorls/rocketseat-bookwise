# Rocketseat - PHP - Bookwise

Projeto PHP 8 com MySQL Dockerizado, ideal para ambientes de desenvolvimento simples e portáveis.

---

## Pré-requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## Clonando o repositório

```bash
git clone https://github.com/ejuniorls/rocketseat-bookwise.git
cd bookwise
```

---

## Configuração do `.env`

Crie um arquivo `.env` na raiz do projeto com as seguintes variáveis:

```env
DB_NAME=bookwise
DB_USER=bookuser
DB_PASSWORD=secret
DB_ROOT_PASSWORD=rootsecret
```

---

## Subindo o ambiente Docker

### 1. Build e up dos containers

```bash
docker-compose up -d --build
```

- A aplicação estará disponível em: [http://localhost:8080](http://localhost:8080)
- O banco estará rodando na porta `3306`

---

## Parando os containers

```bash
docker-compose down
```

---

## Resetando (derrubando e apagando dados do banco)

⚠️ Isso irá apagar **todos os dados persistentes** do banco de dados.

```bash
docker-compose down -v
docker-compose up -d --build
```

---

## Acessando o banco de dados via terminal

### Acessar o bash do container MySQL:

```bash
docker exec -it bookwise_db bash
```

### Conectar como root:

```bash
mysql -u root -prootsecret
```

### Conectar como usuário comum:

```bash
mysql -u bookuser -psecret bookwise
```

---

## Estrutura de Diretórios

```text
bookwise/
├── .docker/
│   └── php/
│       └── Dockerfile
├── docker-compose.yml
├── apache.conf
├── .env
└── README.md
```

---

## Testando conexão PHP e MySQL

No seu código PHP, conecte assim:

```php
$pdo = new PDO("mysql:host=db;dbname=bookwise", "bookuser", "secret");
```

> O host deve ser `db`, que é o nome do serviço no `docker-compose.yml`.

---

## To Do

- [ ] Adicionar phpMyAdmin para facilitar visualização dos dados
- [ ] Scripts de seed e migrations automáticas
- [ ] Pipeline de deploy (GitHub Actions ou Bitbucket Pipelines)

---

Feito com ❤️ usando Docker + PHP
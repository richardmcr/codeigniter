## Requisitos 

- banco de dados `MySQL`
- [composer](https://getcomposer.org/)

## Instalação

- copiar ou renomear o arquivo `env` para `.env`;
- executar o comando:

```cmd
composer install
```

- descomentar e editar as seguintes linhas do arquivo `.env` com as informações do banco `MySQL`:

```sql
database.default.hostname = 
database.default.database = 
database.default.username = 
database.default.password = 
database.default.DBDriver = MySQLi
```

## Execução

- executar o comando:

```
php spark serve
```

- a aplicação pode ser acessada em:

```python
http://localhost:8080
```

## Referências

- <b>Build Your First Application</b>. Disponível em: &lt;https://codeigniter.com/user_guide/tutorial/index.html&gt;. Acesso em: 25 mai. 2021.
- <b>Get started with Bootstrap</b>. Disponível em: &lt;https://getbootstrap.com/docs/5.0/getting-started/introduction/&gt;. Acesso em: 25 mai. 2021.

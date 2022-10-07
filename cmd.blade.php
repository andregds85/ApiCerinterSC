Comandos de Identificação 

git config --global user.name "André"
git config --global user.email andregds85@gmail.com

Adiciona todas as alterações 
git add --all

Cria um commit com uma mensagem 
git commit -m "melhorando um pouco o layout"

git push -u origin master
git push --force origin main
---------------------------------------------------------------------

Comandos
composer create-project laravel/laravel:^8.0 apiLivros

php artisan make:model Livros

php artisan make:migration create_livros_table --create=livros

vim ./database/migrations/*create_livro*


$table->string('nome');
$table->text('descricao');
$table->string('preco');

php artisan migrate
php artisan make:controller LivroController --resource

https://terminalroot.com.br/2021/04/como-criar-uma-api-com-laravel-8.html


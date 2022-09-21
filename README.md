# lara-drawio

Demo de integração do Draw.io em stack TALL.

Neste momento, dado um registro em banco com uma dada imagem qualquer em base64, 
dashboard mostrá esta e ao clicar o ambiente do drawio local será carregado.
Ao salvar drawio, no banco nossa imagem será substituída pela atual do drawio.


```bash
# construcao utilizada para referencia
composer create-project --prefer-dist laravel/laravel lara-drawio
composer require laravel/jetstream
php artisan sail:install
./vendor/bin/sail up -d
./vendor/bin/sail artisan jetstream:install livewire
./vendor/bin/sail artisan migrate
./vendor/bin/sail composer require wire-elements/modal
./vendor/bin/sail composer require wireui/wireui
```
Para reproduzir projeto:
 git clone...
 composer install
 npm install
 npm run build

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate:fresh --seed
user: a@a.com
pass: password


free to fly!

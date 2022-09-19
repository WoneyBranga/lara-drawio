# lara-drawio

Demo de integração do Draw.io em stack TALL.

composer create-project --prefer-dist laravel/laravel lara-drawio

composer require laravel/jetstream

php artisan sail:install

./vendor/bin/sail up -d

docker run -d --rm --name="draw" -p 8080:8080 -p 8443:8443 jgraph/drawio

./vendor/bin/sail artisan jetstream:install livewire

./vendor/bin/sail artisan migrate

./vendor/bin/sail composer require wire-elements/modal

./vendor/bin/sail composer require wireui/wireui


#!/bin/bash

if [ ! -f "composer.json" ]; then
    # Laravelプロジェクトを新規作成
    composer create-project laravel/laravel .
    composer require laravel/ui
    php artisan ui vue --auth
    
    # パッケージをインストール
    npm install
    npm install vue@next @vitejs/plugin-vue
    
    # 権限を設定
    chown -R www-data:www-data /var/www/html
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
fi

# コンテナを起動したままにする
exec tail -f /dev/null

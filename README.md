# PIサマーインターン（25卒）のサンプルアプリ

## セットアップ手順（上から順番に実行）

```sh
git clone git@github〜　（サンプルリポジトリをforkして、自分のリポジトリからクローンしてください）
cd example-app (リポジトリ名を変更していたら各々変更してください)

# Macはこっち
cp .env.example-mac .env

# Windowsはこっち
cp .env.example-windows .env

#　以下はまとめてコピペして実行してください
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

docker-compose up -d
docker-compose exec laravel.test php artisan key:generate
docker-compose exec laravel.test php artisan migrate
docker-compose exec laravel.test npm install
docker-compose exec laravel.test npm run dev
```

## 起動

```sh
docker-compose up -d
docker-compose exec laravel.test npm run dev
```

## URL

サンプルアプリ：http://localhost/

phpMyAdmin: http://localhost:8080/

## コマンドリファレンス

```sh
# MySQLコンソールにログイン
docker-compose exec mysql mysql -u sail -p'password' laravel

# キャッシュ削除
docker-compose exec laravel.test php artisan cache:clear
docker-compose exec laravel.test php artisan config:clear
docker-compose exec laravel.test php artisan route:clear
docker-compose exec laravel.test php artisan view:clear
docker-compose exec laravel.test php artisan clear-compiled

# Laravel実行コンテナにログイン
docker-compose exec laravel.test /bin/bash
```

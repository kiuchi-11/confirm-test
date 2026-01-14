# confirm-test

# 環境構築
  1. リポジトリをクローン
	`bash
	git clone git@github.com:kiuchi-11/confirm-test.git

  2. Dockerコンテナをビルド
	`bash
	docker-compose up -d --build

  3. Laravel環境構築
	docker-compose exec php bash
	composer install
	cp .env.example .env
	php artisan key:generate
	php artisan migrate

# 開発環境
	お問い合わせ画面：http://localhost/
	phpMyAdmin：http://localhost:8080/

# 使用技術
	PHP 8.1.34
	Laravel 8.83.29
	MySQL 8.0.26
	nginx 1.21.1

# ER図
    +------------------+
    |    contacts      |
    +------------------+
    | id (PK)          |
    | category_id      |
    | first_name       |
    | last_name        |
    | gender           |
    | email            |
    | tel              |
    | address          |
    | building         |
    | content          |
    | created_at       |
    | updated_at       |
    +------------------+
# confirm-test

# 作成状況
  入力画面  
  お問い合わせ確認画面  
  サンクスページ  
  会員登録画面  
  ログイン画面  

# 環境構築
  1. リポジトリをクローン  
	git clone git@github.com:kiuchi-11/confirm-test.git
  
  3. Dockerコンテナをビルド  
	docker-compose up -d --build  
  
  4. Laravel環境構築  
	docker-compose exec php bash  
	composer install  
	cp .env.example .env  
	php artisan key:generate  
	php artisan migrate  

# 開発環境
	お問い合わせ画面：http://localhost/
    会員登録画面：http://localhost/register
	phpMyAdmin：http://localhost:8080/

# 使用技術
	PHP 8.1.34  
	Laravel 8.83.29  
	MySQL 8.0.26  
	nginx 1.21.1  

# ER図
    +------------------+          +------------------+
    |    contacts      |          |    categories    |
    +------------------+          +------------------+
    | id (PK)          |          | id (PK)          |
    | category_id      | ++-----+≡| content          |
    | first_name       |          | created_at       |
    | last_name        |          | updated_at       |
    | gender           |          +------------------+
    | email            |
    | tel              |
    | address          |
    | building         |
    | content          |
    | created_at       |
    | updated_at       |
    +------------------+

    +----------------------+
    |       accounts       |
    +----------------------+
    | PK id                |
    | name                 |
    | email (UNIQUE)       |
    | password             |
    | created_at           |
    | updated_at           |
    +----------------------+

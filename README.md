# TwitterAdminTool

## What

## Features

## Install & How to use

-   リポジトリをクローンしてください

-   `composer install`

-   `php artisan key:generate`

-   `chomod -R 777 storage && chomod -R 777 bootstrap/cache`

-   `.env`を設定してください

-   `php artisan migrate`

## Installed Package

-   IDE Helper : Laravel で IDE 補完機能を有効にする

-   larastan : Laravel で静的解析を行う

-   php_codesniffer : コーディング規約のチェックを行う

-   php unit : 単体テストを行う

-   debugbar : 画面にデバッグ用の表示を行う

-   laravel-test-factory-helper : モデルから簡単にファクトリーを作成する

-   `php artisan insights` で PHP Insights を用いたコード品質を分析する

-   `composer unit` または `./vendor/bin/phpunit`で PHPUnit を用いた単体テストを行います。

-   `composer stan` または `./vendor/bin/phpstan analyse`で Larastan を用いた静的解析を実行できます。

-   `composer sniff` または `./vendor/bin/phpcs .`で codesniffer を用いたコーディング規約のチェックを行います。

-   `php artisan generate:model-factory --dir app/Models -- モデル名` factory を自動生成します。

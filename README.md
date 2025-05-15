## 環境構築  
Dokerビルド<br>
1.git cloneリンク 　git@github.com:izm0801noy/time.git
2.docker-compose up d -build  
  
Laravel環境構築<br>
1.docer-compose exec php bash  
2.composer install  
3..env.exampleファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migratte  
6.php artisan db:seed  
  
## 使用技術（実行環境）  
･PHP v8.3.12   
･Laravel　8.83.27  
･MySQL8.0  


  
## ER図
![time](https://github.com/user-attachments/assets/8e3266d0-d2f7-4fd8-9bed-7027c1f60f48)


## URL  
･環境開発:http://localhost/  
･phpMyAdmin:：http://localhost:8080/  

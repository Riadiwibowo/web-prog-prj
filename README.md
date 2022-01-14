Cara menjalankan project:

Link Github = https://github.com/Riadiwibowo/web-prog-prj.git

Cara 1:
- Melalui github clone, masuk ke command prompt (menggunakan GIT Bash).
- Masukkan link git clone, pada cmd ketik, git clone https://github.com/Riadiwibowo/web-prog-prj.git
- Git bash folder web-prog-prj, pada cmd git bash ketik, composer install
- Membuat database dengan nama project_store pada phpmyadmin.
- DB_database pastikan dengan nama project_store
- Open folder project pada text editor misalnya Visual Studio Code
- Pada command prompt (VsCode setelah open folder), php artisan key:generate (harus copy paste .env.example terlebih dahulu, ubah nama jadi .env atau save as file .env.example dan ubah nama file menjadi .env)
- php artisan migrate:fresh
- php artisan storage:link (fungsi dari storage link adalah untuk menghubungkan file storage public ke database (terkait image furniture yang kita upload))
- php artisan serve

Cara 2:
- Download zip, extract file, Command Prompt di directory project
- composer install
- Membuat database dengan nama project_store pada phpmyadmin.
- DB_database pastikan dengan nama project_store
- Open folder project pada text editor misalnya Visual Studio Code
- Pada command prompt (VsCode setelah open folder), php artisan key:generate (harus copy paste .env.example terlebih dahulu, ubah nama jadi .env atau save as file .env.example dan ubah nama file menjadi .env)
- php artisan migrate:fresh
- php artisan storage:link 
- php artisan serve

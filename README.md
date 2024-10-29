## Setting
- npm i
- composer install
- php artisan migrate:fresh --seed
- touch .git/hooks/pre-commit
- vim .git/hooks/pre-commit 
- Thêm đoạn mã sau vào file  (#!/bin/sh ./vendor/bin/php-cs-fixer fix git add .
)
## Using
- Check quyền Auth::user()->can('permission_name')   


## SSO
- Middleware authenSSO: xác thực đăng nhập
  + Lưu phiên đăng nhập, 
  + Lưu cookie thời gian chờ call api server (5p)

- Middleware authen: xác thực phiên client
  + Check Session: Không tồn tại thì call api server sso để lấy phiên -> lưu phiên client
  + Check Cookie: Call api server sso để kiểm tra tồn tại phiên sau mỗi 5p


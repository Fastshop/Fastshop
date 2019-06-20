<?php
/**
 * @author Moshihui(86146002@qq.com)
 */

chdir(dirname(__DIR__));
if( ! file_exists('./artisan')) {
    chdir(__DIR__);
}
header('Content-Type: text/plain; charset=utf-8');
$dirname = pathinfo(getcwd(), PATHINFO_BASENAME);
$branch = shell_exec('git branch 2>/dev/null | grep "^\*" | sed -e "s/^\*\ //"') ?: 'master';
echo "banch is $branch\n";

// 放弃本地修改, 强制更新
system('git fetch --all');
system("git reset --hard origin/$branch");

// 如果本地有文件更新, 无法自动合并,
// system('git reset --hard');
// system("git pull origin $branch");

system('composer dump-autoload');

system('php artisan view:clear');
system("php artisan migrate --force");
//




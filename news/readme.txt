這是Cooltey的第5個自創程式，這個程式雖然很簡單，但是也是Cooltey的另一項新嚐試喔！
希望大家可以喜歡喔！
-----------------------------------------------------------------------
安裝步驟：
1.先檢查你有沒有下列的網頁程式！
sub.php --->主頁，如果你想要在做一些修改，就可以在這裡作一些修改喔！ 
login.php --->這個是登入介面，不需作太大的修改 
check.php --->這是綜合管理檔，不需修改喔！
sign.php --->這個是密碼驗證區，大家一定要來制邊修改帳號密碼喔！
result.php --->這個是公告儲存檔，如果需要新增欄位，就可來這裡改喔！
del.php --->這是刪除檔，不需作太大的修改！
submit.php --->這個是發公告檔，也是不需作太大修改的！
explor.php --->這個是公告觀看檔，可以任意更改版面喔！
deldata.php --->這個是上傳檔案的刪除檔案，不須作修改喔！
set.php --->線上版面設定頁面，內有儲存的程式碼喔！
edit.php --->線上編輯版，不用作太大修改喔！
edit_save.php --->線上編輯版儲存檔，不用修改喔！
to_set.php --->導入set.dat中的值的檔案！
sub.dat --->這個是公告儲存的地方！ 
set.dat --->這個是儲存版面設定的地方！

2.找出sign.php，找到有 //帳號 //密碼，的地方，做個修改！

3.存取的檔案，如果你是在家中測試，那作不用作太多的修改；而如果你傳到網路上，
就必須把 sub.dat set.dat 檔還有data資料夾權限改成777喔，要不然不能正常執行喔！

4.之後，安裝完成，只要開啟sub.php檔案即可開始執行！
-----------------------------------------------------------------------
Q1：不會改權限怎麼辦？
  A1：你可以利用Cute_ftp或是Ws_ftp軟體來更改。使用Cute_ftp或是Ws_ftp時，你在檔案或是資料夾的上方按下右鍵，選取「內容」或是「CHMOD」，這樣就可以改權限了，有勾勾的就全部勾起來就對了！
Q2：如果我發現許多Bug怎辦？
  A2：那就請你快快寫信到cooltey@yahoo.com.tw跟Cooltey講，這不但幫助你自己，也同時幫助了許多人喔！
-----------------------------------------------------------------------
公告系統有下列功能！ 
1.簡易刪除功能
2.個性圖片
3.版面美化
4.檔案上傳模式
5.檔案線上刪除模式
6.檔案註解
7.限制顯示公告比數功能
8.線上更改版面設定
9.線上編輯
10.採用register_globals=off的寫法
11.利用Post模式傳送密碼

利用了Post表單傳送密碼，這樣就不會讓密碼顯示在網址列上了！


如果對這個公告系統有什麼問題，或是有事想請教一下的話，請寄信到cooltey@yahoo.com.tw，我會幫你解答的！
-----------------------------------------------------------------------
製作者：Cooltey(馮必豪) ◎國立大里高中
信箱：cooltey@yahoo.com.tw
      cooltey@pchome.com.tw
      cooltey@hotmail.com
網站：http://cooltey.idv.st
      http://cooltey.in-tw.com
   http://cooltey.24cc.com
ICQ號碼：160925869
Yahoo!Messenger：cooltey
MsnMessenger：cooltey@hotmail.com
最後更新日：2004/7/3
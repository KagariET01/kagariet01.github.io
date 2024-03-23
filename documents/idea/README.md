# 設計理念

本網站使用大量JS進行網頁動態載入，舉凡CSS樣式表、Blog系統的文章，都是JS動態載入  

# 檔案架構

- `root/`
  - `index.html` 網站的html程式碼
  - `script.js` 網站JS腳本（僅適用於該頁面，其子頁面不會載入）
  - `TEMP/` 用於存放網站的模板，其主、子網頁都會載入、使用該模板
    - `font/` 網站的字型檔案
    - `html/` 網站的html模板
    - `img/` 網站的公用圖片，通常用於儲存網站的logo
    - `js/` 網站的JS腳本
      `fn.js` 函式庫，可以自己建立一個函式，所有`file.js`都可以調用該函式
      `temp.js` 用於自動化載入網頁模板，舉凡header,icon,style都是由此腳本載入
    - `*.css` 網站的樣式表
    - `style.css` 網站的主樣式表，可以使用`var()`語法調用配色表的顏色，會使用`temp.js`動態載入。
    - `style_dark.css` 網站的配色表，會使用`temp.js`動態載入、切換色表。
    - `df.css` 網站的預設樣式表，網站載入時就會啟用，不會用`temp.js`動態載入。
    - `cfg.css` 網站的元素大小、間距控制器，會使用`temp.js`動態載入。
    - `typeset.css` 內含常用的排版樣式（背後使用`flex`進行排版），會使用`temp.js`動態載入。

# 撰寫方法

本專案使用`file.css`及`class`控制大部分的樣式  


